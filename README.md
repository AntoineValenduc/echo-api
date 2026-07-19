# ECHO : un projet Symfony & PostgreSQL sous Docker

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

Pour éviter tout conflit de configuration et s'assurer que le client HTTP de Symfony cible bien le conteneur Postgres de test, on injecte explicitement la `DATABASE_URL` et l'`APP_ENV` à l'exécution.

*   **Vider le cache de l'environnement de test** : 
    ```bash
    docker compose exec php_composer php bin/console cache:clear --env=test
    ```
*   **Lancer l'intégralité de la suite de tests (Unitaires + Intégration)** :
    ```bash
    docker compose exec php_composer env APP_ENV=test php bin/phpunit
    ```

---

## 💻 5. Commandes Symfony Utiles

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

## 🚨 6. Dépannage rapide

### Erreur `Permission Denied` (Écriture du cache)
En cas d'impossibilité d'écrire dans les dossiers `var/cache` ou `var/log` depuis l'hôte WSL/Linux :
```bash
docker compose exec php_composer chmod -R 777 var/
```

### Erreur service "php_composer" is not running
Si le conteneur principal est arrêté et que tu veux lancer un script à la volée :
```bash
docker compose run --rm php_composer php bin/phpunit
```

## 📅 TODO / Évolutions futures
- [ ] Intégrer et configurer NelmioApiDocBundle pour générer automatiquement la documentation Swagger/OpenAPI basée sur les DTOs.