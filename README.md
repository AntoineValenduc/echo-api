Ce projet nommé ECHO est entièrement orchestré avec Docker. Il sépare proprement l'environnement système (géré à la racine) et le code applicatif (situé dans le dossier `/symfony`).

L'architecture intègre **deux bases de données PostgreSQL totalement isolées** (dev et test) pour éviter que les tests automatisés ne polluent ou ne suppriment les données de développement.

---

## 📌 Architecture & Accès rapides

| Service | Technologie | Port Externe | Accès local |
| :--- | :--- | :--- | :--- |
| **Serveur Web** | Nginx `1.31` | `8080` | [http://localhost:8080](http://localhost:8080) |
| **Base de Dev** | PostgreSQL `18` | `5432` | `localhost:5432` (Base : `echo_db`) |
| **Base de Test** | PostgreSQL `18` | `5433` | `localhost:5433` (Base : `echo_db_test`) |
| **Application** | PHP-FPM + Composer | *Interne* | Géré via Docker CLI |

---

## ⚙️ 0. Configuration initiale (à faire une seule fois par machine)

Le conteneur `php_composer` tourne avec un utilisateur **non-root**, dont l'UID/GID doit correspondre à celui de ta machine hôte pour éviter des problèmes de permissions sur les fichiers générés (cache, migrations, etc.).

Avant le premier `docker compose build`, ajoute à ton `.env` (racine, non commité) :

```bash
echo "UID=$(id -u)" >> .env
echo "GID=$(id -g)" >> .env
```

Puis build normalement (voir section 1). Si tu changes de machine ou d'environnement (WSL, Linux natif, etc.), refais cette étape avant de rebuild.

---

## 🛠️ 1. Démarrage et Cycle de vie (Docker)

> ⚠️ **Important :** Ces commandes sont à lancer depuis la racine du projet (là où se trouve `docker-compose.yml`).

*   **Démarrer le projet** (en arrière-plan) :
```bash
    docker compose up -d --build
```
*   **Arrêter le projet** (et supprimer les conteneurs et volumes, y compris en local) :
```bash
    docker compose down -v --rmi local
```
*   **Vérifier les conteneurs actifs** :
```bash
    docker compose ps
```
*   **Consulter les logs** (débug Nginx ou Postgres) :
```bash
    docker compose logs -f
```

---

## 🗄️ 2. Utilisation des deux Bases de Données avec Doctrine (Dev vs Test)

Symfony utilise par défaut l'environnement de **Dev**. Pour cibler la base de **Test**, il suffit d'ajouter le drapeau `--env=test` aux commandes `bin/console`.

> *Puisque PHP tourne dans le conteneur `php_composer`, toutes les commandes Symfony doivent être exécutées à travers Docker.*

> ⚠️ **Attention :** Les commandes de génération de code `make:*` (MakerBundle) ne doivent être utilisées qu'en mode **Dev** (standard).

### 🟢 Mode Développeur (Au quotidien)
Toutes les commandes classiques s'appliquent sur la base de développement (`port 5432`) :

*   **Créer la base de dev** :
```bash
    docker compose exec php_composer php bin/console doctrine:database:create
```
*   **Appliquer les migrations sur la base de dev** :
```bash
    docker compose exec php_composer php bin/console doctrine:migrations:migrate --no-interaction
```
*   **Remise à zéro complète (Reset)** :
    *Attention, cette commande supprime et recrée proprement la base de données (utile en cas de blocage).*
```bash
    docker compose exec php_composer php bin/console doctrine:database:drop --force --if-exists && \
    docker compose exec php_composer php bin/console doctrine:database:create && \
    docker compose exec php_composer php bin/console doctrine:migrations:migrate --no-interaction
```

### 🟡 Mode Testeur (À faire avant de lancer PHPUnit)
Ces commandes ciblent la base de données isolée dédiée aux tests (`port 5433`) :

*   **Initialisation rapide (Créer + Migrer)** :
```bash
    docker compose exec php_composer php bin/console doctrine:database:create --env=test
    docker compose exec php_composer php bin/console doctrine:migrations:migrate --env=test --no-interaction
```
*   **Remise à zéro complète de la base de Test** :
    *Utile pour purger les données persistées par les tests fonctionnels et repartir à blanc.*
```bash
    docker compose exec php_composer php bin/console doctrine:database:drop --env=test --force --if-exists && \
    docker compose exec php_composer php bin/console doctrine:database:create --env=test && \
    docker compose exec php_composer php bin/console doctrine:migrations:migrate --env=test --no-interaction
```

---

## 📖 3. Tutoriel Pas à Pas : Créer et Appliquer une Migration

> Voici le déroulé exact à suivre lors de l'ajout ou de la modification d'une entité (Exemple avec l'entité `User`) :

*   **Étape 1 :** Créer ou modifier l'entité (Toujours en mode DEV)
```bash
    docker compose exec php_composer php bin/console make:entity User
```
*   **Étape 2 :** Générer le fichier de migration (En mode DEV uniquement)
```bash
    docker compose exec php_composer php bin/console make:migration
```
*   **Étape 3 :** Appliquer la migration sur la base de DEV
```bash
    docker compose exec php_composer php bin/console doctrine:migrations:migrate --no-interaction
```
*   **Étape 4 :** Propager la migration générée sur la base de TEST
```bash
    docker compose exec php_composer php bin/console doctrine:migrations:migrate --env=test --no-interaction
```

---

## 🧪 4. Tests et Qualité (PHPUnit)

Pour éviter tout conflit de configuration et s'assurer que le client HTTP de Symfony cible bien le conteneur Postgres de test, `APP_ENV=test` est forcé à la fois via `<server>` et `<env>` dans `phpunit.dist.xml` (nécessaire car une variable d'environnement système `APP_ENV=dev`, injectée par Docker, a priorité sur `<server>` seul).

*   **Vider le cache de l'environnement de test** :
```bash
    docker compose exec php_composer php bin/console cache:clear --env=test
```
*   **Lancer l'intégralité de la suite de tests (Unitaires + Intégration)** :
```bash
    docker compose exec php_composer vendor/bin/phpunit
```

### Accès aux services privés dans les tests

Certains services Symfony (comme le hasher de mot de passe) sont privés et non accessibles directement via `getContainer()->get(...)` dans les tests. Un alias public dédié est exposé en environnement de test dans `config/services.yaml` :

```yaml
when@test:
    services:
        test.password_hasher:
            alias: Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface
            public: true
```

---

## 🔒 4bis. Sécurité — Hachage des mots de passe

Le hachage utilise `algorithm: auto` dans `config/packages/security.yaml`, ce qui résout vers **bcrypt** (via `NativePasswordHasher`), et non Argon2id.

> ℹ️ **Note technique :** contrairement à une idée reçue, `auto` ne privilégie pas Argon2id même si l'extension `sodium` est installée — Symfony résout systématiquement vers l'algorithme `native` en priorité dans sa chaîne `MigratingPasswordHasher`. Pour forcer Argon2id, il faut spécifier explicitement `algorithm: sodium` ou `algorithm: argon2id`. Décision prise pour ce projet : rester sur bcrypt, suffisamment robuste et plus portable.

---

## ✅ 5. Qualité de code (PHPStan & PSR-12)

*   **Analyse statique (PHPStan)** :
```bash
    docker compose exec php_composer php -d memory_limit=512M vendor/bin/phpstan analyse
```
    > ⚠️ La limite mémoire par défaut (128M) est souvent insuffisante avec les extensions Doctrine/Symfony chargées — toujours augmenter via `-d memory_limit=512M`.

*   **Vérifier la conformité PSR-12 (sans corriger)** :
```bash
    docker compose exec php_composer vendor/bin/php-cs-fixer fix src/ --rules=@PSR12 --dry-run --diff
```
*   **Corriger automatiquement le style PSR-12** :
```bash
    docker compose exec php_composer vendor/bin/php-cs-fixer fix src/ --rules=@PSR12
```

---

## 💻 6. Commandes Symfony Utiles

*   **Installer un package Composer** :
```bash
    docker compose exec php_composer composer require <nom-du-package>
```
*   **Générer du code standard** :
```bash
    docker compose exec php_composer php bin/console make:controller
    docker compose exec php_composer php bin/console make:entity
    docker compose exec php_composer php bin/console make:test
```
*   **Vider le cache de l'application (Dev)** :
```bash
    docker compose exec php_composer php bin/console cache:clear
```

---

## 🚨 7. Dépannage rapide

### Erreur `Permission Denied` (Écriture du cache)
Le conteneur `php_composer` tourne avec un utilisateur non-root dont l'UID/GID doit correspondre au tien (voir section 0). Si des fichiers appartiennent à `root` malgré cette config (ex: générés avant la mise en place du fix), reprends possession :
```bash
sudo chown -R $(whoami):$(whoami) symfony/
```
Puis vérifie que `UID`/`GID` sont bien définis dans ton `.env` et rebuild si besoin :
```bash
docker compose build php_composer
```

### Erreur service "php_composer" is not running
Si le conteneur principal est arrêté et que tu veux lancer un script à la volée :
```bash
docker compose run --rm php_composer php bin/phpunit
```

### `docker` introuvable dans WSL2
Si la commande `docker` n'est plus reconnue depuis WSL après un redémarrage :
1. Vérifie que Docker Desktop est lancé sous Windows
2. Settings → Resources → WSL Integration → active ta distro
3. `wsl --shutdown` depuis PowerShell, puis rouvre ton terminal WSL

---

## 📅 TODO / Évolutions futures
- [ ] Intégrer et configurer NelmioApiDocBundle pour générer automatiquement la documentation Swagger/OpenAPI basée sur les DTOs.
