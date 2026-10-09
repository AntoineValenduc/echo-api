# Runbook - PostgreSQL Down

## Informations générales

| Élément | Valeur |
|----------|----------|
| Service | PostgreSQL |
| Criticité | Critique |
| Alerte | PostgresDown |
| Équipe | Backend / DevOps |
| Conteneur | postgres_sy |
| Base | echo_db |
| Utilisateur | echo_user |

---

# Description

Cette procédure doit être suivie lorsqu'une alerte indique que PostgreSQL est indisponible ou que l'application Symfony ne peut plus accéder à la base de données.

---

# Impact

## Impact utilisateur

- Les opérations nécessitant l'accès aux données échouent.
- L'API peut retourner des erreurs HTTP 500.
- Les fonctionnalités métier deviennent indisponibles.

## Impact technique

- Les requêtes Doctrine échouent.
- L'endpoint `/health` retourne un statut `DOWN`.
- Les traitements Messenger utilisant la base peuvent être interrompus.

---

# Détection

## Alerte Prometheus

```yaml
alert: PostgresDown
expr: up{job="postgres"} == 0
for: 1m
labels:
  severity: critical
```

## Symptômes

- Alerte Alertmanager.
- Grafana indique PostgreSQL indisponible.
- Erreurs SQL dans les logs Symfony.
- Endpoint `/health` :

```json
{
  "status": "DOWN",
  "checks": {
    "database": "DOWN"
  }
}
```

---

# Diagnostic

## Étape 1 - Vérifier le conteneur PostgreSQL

```bash
docker ps
```

Vérifier la présence du conteneur :

```text
postgres_sy
```

État attendu :

```text
Up
```

---

## Étape 2 - Vérifier les logs PostgreSQL

```bash
docker logs postgres_sy --tail 100
```

Rechercher :

```text
FATAL
PANIC
ERROR
database system is starting up
database system is shutting down
```

---

## Étape 3 - Vérifier la connectivité

Tester l'accès à PostgreSQL :

```bash
docker exec -it postgres_sy psql -U echo_user -d echo_db
```

---

## Étape 4 - Vérifier les requêtes

Une fois connecté :

```sql
SELECT version();
```

Puis :

```sql
SELECT now();
```

Et :

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

## Étape 5 - Vérifier la connexion depuis Symfony

Depuis le conteneur PHP :

```bash
docker exec -it php_composer sh
```

Puis :

```bash
php bin/console doctrine:query:sql "SELECT 1"
```

Résultat attendu :

```text
1
```

---

## Étape 6 - Vérifier les paramètres de connexion

Dans Symfony :

```bash
echo $DATABASE_URL
```

Valeur attendue :

```text
postgresql://echo_user:echo_password@postgres_sy:5432/echo_db
```

---

# Cas courants

## Cas n°1 : Conteneur arrêté

### Symptômes

```text
docker ps
```

n'affiche plus :

```text
postgres_sy
```

### Résolution

```bash
docker start postgres_sy
```

ou :

```bash
docker compose up -d
```

---

## Cas n°2 : Crash PostgreSQL

### Symptômes

Logs contenant :

```text
PANIC
FATAL
```

### Résolution

Redémarrage :

```bash
docker restart postgres_sy
```

Vérifier ensuite :

```bash
docker logs postgres_sy
```

---

## Cas n°3 : Identifiants incorrects

### Symptômes

```text
password authentication failed
```

### Vérification

Contrôler :

```env
POSTGRES_USER
POSTGRES_PASSWORD
DATABASE_URL
```

Puis :

```bash
php bin/console cache:clear
```

---

## Cas n°4 : Base saturée

### Symptômes

Temps de réponse élevés.

### Diagnostic

```sql
SELECT count() FROM pg_stat_activity;
```

Lister les connexions :

```sql SELECT pid,
       usename,
       application_name,
       state
FROM pg_stat_activity;
```

---

## Cas n°5 : Espace disque insuffisant

### Symptômes

```text No space left on device
```

### Diagnostic

```bash
df -h
```

### Résolution

- Supprimer les volumes inutiles.
- Libérer de l'espace disque.
- Étendre le stockage.

---

# Procédure de reprise

## Redémarrer PostgreSQL

```bash
docker restart postgres_sy
```

Attendre :

```bash docker logs -f postgres_sy
```

Jusqu'à voir :

```text database system is ready to accept connections
```

---

## Vérifier la base

```bash
docker exec -it postgres_sy \
psql -U echo_user -d echo_db \
-c "SELECT 1;"
```

---

## Vérifier Symfony

```bash
docker exec -it php_composer \
php bin/console doctrine:query:sql "SELECT 1"
```

---

## Vérifier le healthchecks
```bash
curl http://localhost:8080/health
```

Résultat attendu :

``json
{
  "status": "UP",
  "checks": {
    "database": "UP"
  }
}
``

---

# Validation

Les conditions suivantes doivent être réunies :
✅ PostgreSQL accessible

✅ Requêtes SQL exécutables

✅ Endpoint `/heaath` opérationnel

✅ Disparition de l'alerte Prometheus

✅ Retour à la normale dans Grafana

---

# Escalade

Si le problème persiste :

1. Collecter les logs PostgreSQL.
2. Collecter les logs Symfony.
3. Identifier les dernières modifications appliquées.
4. Informer l'équipe Backend/DevOps.

Informations à fournit :

- Heure de début de l'incidents- Message d'erreur observé
- État des conteneurs
- Actions déjà réalisées

---

# Historique des incidents

| Date | Description | Résolution |
|--------|--------|--------|
| À compléter | À compléter | À compléter |