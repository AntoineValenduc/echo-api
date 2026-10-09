# Runbook - Echo API Down

## Informations générales

| Élément | Valeur |
|----------|----------|
| Service | Echo API |
| Criticité | Critique |
| Alerte | EchoApiDown |
| Équipe | Backend / DevOps |
| Endpoint de santé | `/health` |
| Endpoint de disponibilité | `/health/live` |
| Endpoint de disponibilité complète | `/health/ready` |
| Endpoint métriques | `/metrics` |

---

## Description

Cette procédure doit être suivie lorsqu'une alerte indique que l'API Echo est indisponible.

L'alerte est déclenchée lorsque Prometheus ne parvient plus à joindre l'application ou lorsque le endpoint de supervision retourne un statut d'erreur pendant plus d'une minute.

---

## Impact

### Impact utilisateur

- Les utilisateurs ne peuvent plus accéder à l'API.
- Les consommateurs externes reçoivent des erreurs HTTP.
- Certaines fonctionnalités métier deviennent indisponibles.

### Impact technique

- Les métriques Prometheus peuvent ne plus être collectées.
- Les traitements Messenger peuvent être perturbés.
- Les intégrations avec Keycloak peuvent être indisponibles.

---

## Détection

### Alerte Prometheus

```yaml
alert: EchoApiDown
expr: up{job="echo-api"} == 0
for: 1m
```

### Symptômes

- Grafana affiche l'application comme indisponible.
- Alertmanager déclenche une notification.
- Le endpoint `/health` retourne HTTP 503.
- Le endpoint `/metrics` n'est plus accessible.

---

# Diagnostic

## Étape 1 - Vérifier les conteneurs

```bash
docker ps
```

Les conteneurs suivants doivent être présents et en état `Up` :

```text
php_composer
server_sf
postgres_sy
redis
keycloak_service
```

### Action corrective

Si un conteneur est arrêté :

```bash
docker restart <nom_du_conteneur>
```

ou

```bash
docker compose up -d
```

---

## Étape 2 - Vérifier le healthcheck

Tester l'API :

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

## Étape 3 - Vérifier les logs Symfony

```bash
docker logs php_composer --tail 100
```

Rechercher :

```text
CRITICAL
ERROR
Exception
```

---

## Étape 4 - Vérifier Nginx

```bash
docker logs server_sf --tail 100
```

Vérifier la présence d'erreurs :

```text
502 Bad Gateway
504 Gateway Timeout
Connection refused
```

---

## Étape 5 - Vérifier PostgreSQL

Connexion :

```bash
docker exec -it postgres_sy psql -U echo_user -d echo_db
```

Test :

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

## Étape 6 - Vérifier Redis

```bash
docker exec -it redis redis-cli ping
```

Résultat attendu :

```text
PONG
```

---

## Étape 7 - Vérifier Keycloak

```bash
curl http://keycloak_service:8080/health/ready
```

Résultat attendu :

```json
{
  "status": "UP"
}
```

---

# Cas courants

## Cas n°1 : Symfony en erreur

### Symptômes

- Erreurs PHP dans les logs.
- Réponse HTTP 500.

### Action

Analyser :

```bash
docker logs php_composer
```

Corriger l'erreur applicative puis redéployer.

---

## Cas n°2 : Base PostgreSQL indisponible

### Symptômes

- `/health` indique :

```json
{
  "database": "DOWN"
}
```

### Action

```bash
docker restart postgres_sy
```

Vérifier ensuite :

```bash
docker logs postgres_sy
```

---

## Cas n°3 : Redis indisponible

### Symptômes

- `/health` indique :

```json
{
  "redis": "DOWN"
}
```

### Action

```bash
docker restart redis
```

---

## Cas n°4 : Keycloak indisponible

### Symptômes

- `/health` indique :

```json
{
  "keycloak": "DOWN"
}
```

### Action

```bash
docker restart keycloak_service
```

Puis vérifier :

```bash
curl http://keycloak_service:8080/health/ready
```

---

## Cas n°5 : Endpoint métriques inaccessible

### Symptômes

- Grafana n'affiche plus de données.
- Alertes Prometheus liées aux métriques.

### Vérifications

```bash
curl http://localhost:8080/metrics
```

Vérifier également :

```bash
docker logs php_composer
```

et

```bash
docker exec -it php_composer php -m
```

---

# Validation

Une fois la correction appliquée :

```bash
curl http://localhost:8080/health
```

Résultat attendu :

```json
{
  "status": "UP"
}
```

Puis vérifier :

- disparition de l'alerte dans Alertmanager ;
- retour à la normale dans Grafana ;
- collecte des métriques Prometheus.

---

# Escalade

Si le problème persiste après les actions précédentes :

1. Prévenir l'équipe Backend.
2. Fournir les logs concernés.
3. Joindre :
   - heure de l'incident ;
   - message d'erreur ;
   - actions déjà réalisées ;
   - état des conteneurs Docker.

---

# Historique des incidents

| Date | Description | Résolution |
|--------|--------|--------|
| À compléter | À compléter | À compléter |
`