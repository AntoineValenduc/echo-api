#!/bin/sh

DATE=$(date +"%Y%m%d_%H%M%S")
BACKUP_DIR="/backups"

mkdir -p "$BACKUP_DIR"

pg_dump \
  -h postgres_sy \
  -U echo_user \
  -d echo_db \
  -F c \
  -f "${BACKUP_DIR}/echo_db_${DATE}.dump"

echo "Backup created: ${BACKUP_DIR}/echo_db_${DATE}.dump"