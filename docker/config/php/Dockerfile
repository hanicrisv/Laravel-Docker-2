# Imagen base con PHP-FPM
FROM php:8.4-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece directorio de trabajo
WORKDIR /var/www/html

# Copia solo los archivos necesarios para instalar dependencias primero
COPY composer.json composer.lock* package.json package-lock.json* ./

# Instala dependencias de Composer (si existen)
RUN if [ -f "composer.json" ]; then \
    composer install --no-interaction --prefer-dist --no-scripts --no-autoloader; \
    fi

# Copia el resto del código
COPY . .

# Da permisos a Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Optimiza autoloader
RUN if [ -f "composer.json" ]; then \
    composer dump-autoload --optimize; \
    fi

# Expone el puerto de PHP-FPM
EXPOSE 9000

# Comando para ejecutar PHP-FPM
CMD ["php-fpm"]