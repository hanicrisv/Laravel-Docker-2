#Red bodega integrada#

** Proyecto Laravel con PHP, Nginx, MariaDB, Spatie permission laravel, Laravel Sail y Laravel Breeze **

**Pasos para levantar el entorno**

**Clonar el repositorio**
   ```bash
   git clone <url-repo>
    cd <carpeta>

**Configuración de variables de entorno**
    cp .env.example .env
    php artisan key:generate

**Levantar los contenedores**
./vendor/bin/sail up -d
./vendor/bin/sail down
