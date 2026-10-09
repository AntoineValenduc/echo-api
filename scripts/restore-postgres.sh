#!/bin/sh

DATE=$(date +"%Y%m%d_%H%M%S")
BACKUP_FILE=$1

pg_restore \
  --clean \
  --if-exists \
  -h postgres_sy \
  -U "$POSTGRES_USER" \
  -d "$POSTGRES_DB" \
  "$BACKUP_FILE"
`

echo "Backup restored: ${BACKUP_DIR}/echo_db_${DATE}.dump"