#!/bin/bash

# Ejecutar los comandos necesarios después de que los contenedores estén activos
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
docker-compose exec app chmod -R 777 storage bootstrap/cache
docker exec -it management-users_app_1 bash -c "npm install vite && npm run build"

# Iniciar el servicio php artisan serve
php artisan serve --host=0.0.0.0 --port=8000
exec "$@"
