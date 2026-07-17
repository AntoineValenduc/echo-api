# ECHO : un projet Symfony & PostgreSQL sous Docker

Ce projet nommé ECHO est entièrement orchestré avec Docker. Il sépare proprement l'environnement système (géré à la racine) et le code applicatif (situé dans le dossier `/symfony`).

---

## 📌 Architecture & Accès rapides

| Service | Technologie | Port Externe | Accès local |
| :--- | :--- | :--- | :--- |
| **Serveur Web** | Nginx `1.31` | `8080` | [http://localhost:8080](http://localhost:8080) |
| **Base de Données** | PostgreSQL `18` | `5432` | `localhost:5432` |
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
*   **Vérifier que les conteneurs actifs** :
    ```bash
    docker compose ps
    ```
*   **Consulter les logs** (débug Nginx ou Postgres) :
    ```bash
    docker compose logs -f
    ```

---

## 🗄️ 2. Gestion de la Base de Données (Doctrine)

Puisque PHP tourne dans le conteneur `php_composer`, toutes les commandes Symfony doivent être exécutées à travers Docker.

*   **Créer la base de données** :
    ```bash
    docker compose exec php_composer php bin/console doctrine:database:create
    ```
*   **Générer une migration** (à faire après toute création/modification d'Entité) :
    ```bash
    docker compose exec php_composer php bin/console make:migration
    ```
*   **Appliquer les migrations** (met à jour les tables en base) :
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

---

## 🧪 3. Tests et Qualité (PHPUnit)

*   **Lancement de toute la suite de tests unitaires et fonctionnels** :
    ```bash
    docker compose exec php_composer php bin/phpunit
    ```

---

## 💻 4. Commandes Symfony Utiles

*   **Installer un package Composer** :
    ```bash
    docker compose exec php_composer composer require <nom-du-package>
    ```
*   **Générer du code (Contrôleur, Entité, Test...)** :
    ```bash
    docker compose exec php_composer php bin/console make:controller
    docker compose exec php_composer php bin/console make:entity
    docker compose exec php_composer php bin/console make:test
    ```
*   **Vider le cache de l'application** :
    ```bash
    docker compose exec php_composer php bin/console cache:clear
    ```

---

## 🚨 5. Dépannage rapide

### Erreur `Permission Denied` (Écriture du cache)
Si Symfony se plaint de ne pas pouvoir écrire dans `var/cache` ou `var/log`, on peut s'octroyer :
```bash
docker compose exec php_composer chmod -R 777 var/