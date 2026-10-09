# Runbook - Keycloak Down

## Informations générales

| Élément | Valeur |
|----------|----------|
| Service | Keycloak |
| Criticité | Critique |
| Alerte | KeycloakDown |
| Équipe | Backend / DevOps |
| Conteneur | keycloak_service |
| Port | 8080 |
| URL interne | http://keycloak_service:8080 |
| Endpoint de santé | /health/ready |

---

# Description

Cette procédure doit être suivie lorsqu'une alerte indique que Keycloak est indisponible ou que l'application Symfony ne peut plus communiquer avec le serveur d'authentification.

Keycloak est utilisé pour :

- l'authentification des utilisateurs ;
- la gestion des rôles ;
- la validation des jetons JWT ;
- la sécurisation des APIs.

---

# Impact

## Impact utilisateur

- Impossible de se connecter.
- Échec des renouvellements de jetons.
- Accès refusé aux ressources protégées.
- Déconnexions inattendues.

## Impact technique

- Les appels d'authentification échouent.
- Le endpoint `/health` retourne un état dégradé.
- Les APIs sécurisées deviennent indisponibles.

---

# Détection

## Alerte Prometheus

```yaml
alert: KeycloakDown
expr: up{job="keycloak"} == 0
for: 1m
labels:
  severity: critical
```

## Symptômes

Alertmanager déclenche une notification.

L'endpoint health retourne :

```json
{
  "status": "DOWN",
  "checks": {
    "keycloak": "DOWN"
  }
}
```

Des erreurs apparaissent dans les logs Symfony :

```text
Connection refused
Connection timed out
401 Unauthorized
503 Service Unavailable
```

---

# Diagnostic

## Étape 1 - Vérifier le conteneur Keycloak

```bash
docker ps
```

Vérifier la présence du conteneur :

```text
keycloak_service
```

État attendu :

```text
Up
```

---

## Étape 2 - Vérifier les logs Keycloak

```bash
docker logs keycloak_service --tail 100
```

Rechercher :

```text
ERROR
FATAL
OutOfMemoryError
Failed to start
Database connection failed
```

---

## Étape 3 - Vérifier le endpoint de santé

```bash
curl http://keycloak_service:8080/health/ready
```

Résultat attendu :

```json
{
  "status": "UP"
}
```

ou un code HTTP :

```text
200 OK
```

---

## Étape 4 - Vérifier l'accessibilité depuis Symfony

Depuis le conteneur PHP :

```bash
docker exec -it php_composer sh
```

Puis :

```bash
curl http://keycloak_service:8080/health/ready
```

Résultat attendu :

```text
HTTP/1.1 200 OK
```

---

## Étape 5 - Vérifier la configuration Symfony

Vérifier la variable :

```bash
echo $KEYCLOAK_URL
```

Résultat attendu :

```text
http://keycloak_service:8080
```

---

## Étape 6 - Vérifier la résolution DNS

Depuis le conteneur PHP :

```bash
ping keycloak_service
```

ou

```bash
getent hosts keycloak_service
```

---

# Cas courants

## Cas n°1 : Conteneur arrêté

### Symptômes

Le conteneur n'apparaît pas dans :

```bash
docker ps
```

### Résolution

```bash
docker start keycloak_service
```

ou

```bash
docker compose up -d
```

---

## Cas n°2 : Base Keycloak indisponible

### Symptômes

Logs contenant :

```text
Database connection failed
Unable to obtain JDBC connection
Connection refused
```

### Diagnostic

Vérifier le conteneur PostgreSQL utilisé par Keycloak :

```bash
docker ps
```

Rechercher :

```text
pgsql_keycloak
```

Tester la connexion :

```bash
docker exec -it pgsql_keycloak psql \
-U keycloak_user \
-d keycloak_db \
-c "SELECT 1;"
```

### Résolution

```bash
docker restart pgsql_keycloak
```

Puis :

```bash
docker restart keycloak_service
```

---

## Cas n°3 : Mauvaise configuration d'URL

### Symptômes

Erreur de type :

```text
Connection refused
Name or service not known
```

### Vérification

Contrôler :

```bash
echo $KEYCLOAK_URL
```

et le fichier :

```env
KEYCLOAK_URL=http://keycloak_service:8080
```

---

## Cas n°4 : Temps de démarrage long

### Symptômes

Le conteneur est démarré mais :

```bash
/health/ready
```

retourne :

```text
503
```

### Vérification

Suivre les logs :

```bash
docker logs -f keycloak_service
```

Attendre le message :

```text
Keycloak started
```

---

## Cas n°5 : Saturation mémoire

### Symptômes

Logs contenant :

```text
OutOfMemoryError
Killed
```

### Diagnostic

```bash
docker stats
```

### Résolution

Augmenter les ressources allouées au conteneur.

Redémarrer :

```bash
docker restart keycloak_service
```

---

# Procédure de reprise

## Redémarrer Keycloak

```bash
docker restart keycloak_service
```

---

## Vérifier l'état du service

```bash
curl http://keycloak_service:8080/health/ready
```

Résultat attendu :

```text
200 OK
```

---

## Vérifier le healthcheck Symfony

```bash
curl http://localhost:8080/health
```

Résultat attendu :

```json
{
  "status": "UP",
  "checks": {
    "keycloak": "UP"
  }
}
```

---

## Vérifier l'authentification

Tester :

- la connexion utilisateur ;
- l'obtention d'un token ;
- l'accès à une route protégée.

---

# Validation

Les conditions suivantes doivent être réunies :

✅ Keycloak répond sur `/health/ready`

✅ Les utilisateurs peuvent se connecter

✅ Les tokens JWT sont émis correctement

✅ `/health` retourne `keycloak: UP`

✅ L'alerte KeycloakDown disparaît dans Alertmanager

✅ Les dashboards Grafana reviennent à la normale

---

# Escalade

Si le problème persiste :

1. Collecter les logs Keycloak.
2. Collecter les logs PostgreSQL Keycloak.
3. Vérifier les paramètres d'authentification.
4. Vérifier l'espace disque et la mémoire.
5. Informer l'équipe Backend/DevOps.

Informations à fournir :

- Heure de début de l'incident
- État des conteneurs
- Sortie des endpoints health
- Logs Keycloak
- Logs PostgreSQL Keycloak
- Actions déjà réalisées

---

# Historique des incidents

| Date | Description | Résolution |
|--------|--------|--------|
| À compléter | À compléter | À compléter |