# Runbook - Redis Down

## Informations générales

| Élément | Valeur |
|----------|----------|
| Service | Redis |
| Criticité | Critique |
| Alerte | RedisDown |
| Équipe | Backend / DevOps |
| Conteneur | redis |
| Port | 6379 |

---

# Description

Cette procédure doit être suivie lorsqu'une alerte indique que Redis est indisponible ou que l'application Symfony ne peut plus communiquer avec Redis.

Redis est utilisé pour :

- Le transport Symfony Messenger
- Le stockage des métriques Prometheus
- La mise en cache éventuelle de l'application

---

# Impact

## Impact utilisateur

- Certaines fonctionnalités peuvent être ralenties ou indisponibles.
- Les traitements asynchrones peuvent être interrompus.
- Les métriques Prometheus peuvent ne plus être enregistrées.

## Impact technique

- Symfony Messenger peut être bloqué.
- Les workers peuvent ne plus traiter les messages.
- Les métriques peuvent cesser d'être collectées.

---

# Détection

## Alerte Prometheus

```yaml
alert: RedisDown
expr: up{job="redis"} == 0
for: 1m
labels:
  severity: critical
```

## Symptômes

- Alerte Alertmanager.
- Grafana indique Redis indisponible.
- Endpoint `/health` :

```json
{
  "status": "DOWN",
  "checks": {
    "redis": "DOWN"
  }
}
```

- Erreurs Symfony contenant :

```text
Connection refused
RedisException
Connection timed out
```

---

# Diagnostic

## Étape 1 - Vérifier le conteneur Redis

```bash
docker ps
```

Vérifier la présence du conteneur :

```text
redis
```

État attendu :

```text
Up
```

---

## Étape 2 - Vérifier les logs Redis

```bash
docker logs redis --tail 100
```

Rechercher :

```text
ERROR
OOM
MISCONF
FATAL
```

---

## Étape 3 - Vérifier la disponibilité Redis

Tester Redis :

```bash
docker exec -it redis redis-cli ping
```

Résultat attendu :

```text
PONG
```

---

## Étape 4 - Vérifier depuis Symfony

Entrer dans le conteneur PHP :

```bash
docker exec -it php_composer sh
```

Puis :

```bash
php bin/console about
```

S'assurer que Symfony est opérationnel.

---

## Étape 5 - Vérifier la variable d'environnement

```bash
echo $REDIS_URL
```

Résultat attendu :

```text
redis://redis:6379
```

---

## Étape 6 - Vérifier la résolution DNS

Depuis le conteneur PHP :

```bash
ping redis
```

ou :

```bash
getent hosts redis
```

Résultat attendu :

```text
redis <ip_du_conteneur>
```

---

# Cas courants

## Cas n°1 : Conteneur arrêté

### Symptômes

`docker ps` ne montre plus le conteneur Redis.

### Résolution

```bash
docker start redis
```

ou

```bash
docker compose up -d
```

---

## Cas n°2 : Redis ne répond plus

### Symptômes

```bash
redis-cli ping
```

renvoie :

```text
Could not connect
```

### Résolution

```bash
docker restart redis
```

---

## Cas n°3 : OOM (Out Of Memory)

### Symptômes

Logs contenant :

```text
OOM command not allowed
```

ou

```text
maxmemory limit reached
```

### Résolution

Analyser l'utilisation mémoire :

```bash
docker exec -it redis redis-cli INFO memory
```

Redémarrer Redis si nécessaire :

```bash
docker restart redis
```

Prévoir une augmentation de la mémoire disponible.

---

## Cas n°4 : Redis saturé

### Diagnostic

```bash
docker exec -it redis redis-cli INFO stats
```

et :

```bash
docker exec -it redis redis-cli INFO clients
```

Vérifier :

- nombre de connexions
- nombre de commandes par seconde
- utilisation mémoire

---

## Cas n°5 : Erreur réseau Docker

### Symptômes

Le conteneur Redis répond localement mais pas depuis Symfony.

### Diagnostic

Depuis le conteneur PHP :

```bash
ping redis
```

ou :

```bash
nc -zv redis 6379
```

### Résolution

Redémarrer les conteneurs :

```bash
docker compose restart
```

---

# Vérification Messenger

Si Messenger utilise Redis :

```bash
php bin/console messenger:stats
```

Résultat attendu :

```text
transport(s) available
```

Sans erreur Redis.

---

# Vérification Prometheus

Tester le endpoint :

```bash
curl http://localhost:8080/metrics
```

Vérifier l'absence d'erreurs liées à Redis.

---

# Procédure de reprise

## Redémarrer Redis

```bash
docker restart redis
```

---

## Vérifier la disponibilité

```bash
docker exec -it redis redis-cli ping
```

Résultat attendu :

```text
PONG
```

---

## Vérifier Symfony

```bash
curl http://localhost:8080/health
```

Résultat attendu :

```json
{
  "status": "UP",
  "checks": {
    "redis": "UP"
  }
}
```

---

## Vérifier Messenger

```bash
php bin/console messenger:stats
```

Aucune erreur Redis ne doit apparaître.

---

## Vérifier Prometheus

Dans Grafana :

- Vérifier que les métriques remontent
- Vérifier la disparition de l'alerte RedisDown

---

# Validation

Les conditions suivantes doivent être réunies :

✅ Redis répond à `PING`

✅ Le conteneur est en état `Up`

✅ `/health` indique `redis: UP`

✅ Messenger fonctionne

✅ Les métriques Prometheus sont collectées

✅ L'alerte RedisDown est résolue

---

# Escalade

Si le problème persiste :

1. Collecter les logs Redis.
2. Collecter les logs Symfony.
3. Vérifier l'état du réseau Docker.
4. Vérifier la consommation mémoire.
5. Informer l'équipe Backend/DevOps.

Informations à fournir :

- Heure de début de l'incident
- Message d'erreur observé
- État du conteneur Redis
- Sortie de `redis-cli INFO`
- Actions déjà réalisées

---

# Historique des incidents

| Date | Description | Résolution |
|--------|--------|--------|
| À compléter | À compléter | À compléter |
`