# Imagen base con PHP-FPM
FROM php:8.4-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y --no-install-recommends \
    nginx \
    mariadb-client \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece directorio de trabajo
WORKDIR /var/www/html

# Copia archivos del proyecto
COPY . /var/www/html

# Da permisos a Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Instala Breeze y Spatie Laravel Permission
RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && php artisan breeze:install \
    && npm install && npm run build \
    && composer require spatie/laravel-permission \
    && php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config" \
    && php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"

# Copia configuración de Nginx
COPY ./docker/nginx/default.conf /etc/nginx/sites-available/default

# Expone el puerto 80
EXPOSE 80
