#Red bodega integrada#

** Proyecto Laravel con PHP, Nginx, MariaDB, Spatie permission laravel, Laravel Sail y Laravel Breeze **

**Pasos para levantar el entorno**

**Clonar el repositorio**
   ```bash
   git clone <url-repo>
    cd <carpeta>

**Configuración de variables de entorno**
    cp .env.example .env

# Base de datos
DDB_DATABASE=laravel
DB_USERNAME=laravel_user
DB_PASSWORD=password
DB_ROOT_PASSWORD=rootpassword

***********
DB_CONNECTION=mysql
DB_HOST=mariadb
DB_PORT=3306
DB_DATABASE=Usuario
DB_USERNAME=Hani
DB_PASSWORD=

**Levantar los contenedores**
./vendor/bin/sail up -d
./vendor/bin/sail down
