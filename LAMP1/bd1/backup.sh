#bin/bash
docker compose exec basedatos /bin/bash -c " mariadb-dump -uuser -pabc123. bd1">./bd1/backup.sql