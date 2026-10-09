# PostgreSQL Backup & Restore

## Objectif

Garantir la sauvegarde régulière de la base de données PostgreSQL de l'application Echo API et permettre sa restauration en cas d'incident.

---

# Sauvegarde

## Prérequis

Les conteneurs Docker doivent être démarrés :

```bash
docker compose up -d
```

Vérification :

```bash
docker ps
```

Le conteneur PostgreSQL attendu est :

```text
postgres_sy
```

---

## Script de sauvegarde

Fichier :

```text
scripts/backup-postgres.sh
```

Contenu :

```bash
#!/bin/sh

DATE=$(date +"%Y%m%d_%H%M%S")

pg_dump \
    -h postgres_sy \
    -U "$POSTGRES_USER" \
    -d "$POSTGRES_DB" \
    -F c \
    -f "/backups/echo_db_${DATE}.dump"

echo "Backup created successfully"
```

---

## Exécution manuelle

Depuis le projet :

```bash
docker compose run --rm postgres_backup
```

---

## Sauvegarde directe depuis PostgreSQL

```bash
docker exec postgres_sy \
pg_dump \
-U echo_user \
-d echo_db \
-F c \
-f /tmp/echo_db.dump
```

Récupération du fichier :

```bash
docker cp postgres_sy:/tmp/echo_db.dump .
```

---

## Format des sauvegardes

Nom des fichiers :

```text
echo_db_YYYYMMDD_HHMMSS.dump
```

Exemple :

```text
echo_db_20261009_143000.dump
```

---

## Vérification

Lister les sauvegardes :

```bash
ls -lah backups/
```

Exemple :

```text
echo_db_20261009_143000.dump
echo_db_20261010_020000.dump
```

---

# Restauration

## Objectif

Restaurer une sauvegarde PostgreSQL dans une base existante ou dans une base de test.

---

## Script de restauration

Fichier :

```text
scripts/restore-postgres.sh
```

Contenu :

```bash
#!/bin/sh

BACKUP_FILE=$1

if [ -z "$BACKUP_FILE" ]; then
    echo "Usage: restore-postgres.sh <backup.dump>"
    exit 1
fi

pg_restore \
    --clean \
    --if-exists \
    -h postgres_sy \
    -U "$POSTGRES_USER" \
    -d "$POSTGRES_DB" \
    "$BACKUP_FILE"
```

---

## Exécution

```bash
docker compose run --rm \
postgres_backup \
/scripts/restore-postgres.sh \
/backups/echo_db_20261009_143000.dump
```

---

# Test de restauration

## Création d'une base de test

Connexion :

```bash
docker exec -it postgres_sy psql -U echo_user
```

Création :

```sql
CREATE DATABASE echo_restore_test;
```

---

## Restauration dans la base de test

```bash
docker exec -it postgres_sy pg_restore \
-U echo_user \
-d echo_restore_test \
/tmp/echo_db.dump
```

---

## Validation

Connexion :

```bash
docker exec -it postgres_sy \
psql -U echo_user -d echo_restore_test
```

Exécution :

```sql
SELECT 1;
```

Résultat attendu :

```text
 ?column?
----------
        1
```

---

## Vérification des données

Exemple :

```sql
SELECT COUNT() FROM utilisateur;
```

Le nombre d'enregistrements doit être cohérent avec la base source.

---

# Reprise après incident

## Étape 1

Identifier la sauvegarde à restaurer :

```bash ls -lah backups/
```

---

## Étape 2

Arrêter temporairement l'application :

```bash
docker compose stop php_composer
docker compose stop server_sf
```

---

## Étape 3

Restaurer la sauvegarde :

```bash
docker compose run --rm \
postgres_backup \
/scripts/restore-postgres.sh \
/backups/echo_db_20261009_143000.dump
```

---

## Étape 4

Redémarrer l'application :

```bash
docker compose start php_composer
docker compose start server_sf
```

---

## Étape 5

Vérifier le fonctionnement :

```bash
curl http://localhost:8080/health
```

Résultat attendu :

```json
{
  "status": "UP"
}
```

---
## Validation du test

- ✅ Sauvegarde créée
- ✅ Dump exploitable
- ✅ Restauration exécutée
- ✅ Vérification des données
- ✅ Application opérationnelle

---

# Historique des tests

| Date | Environnement | Résultat | Commentaire |
|--------|--------|--------|--------|
| À compléter | Dev | ✅ / ❌ | À compléter |

---

# Fréquence recommandée

- Sauvegarde quotidienne : 02h00
- Conservation : 7 jours minimum
- Test de restauration : une fois par trimestre
- Vérification des sauvegardes : hebdomadaire