FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    nginx \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    && docker-php-ext-install \
        pdo_pgsql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy dependency files first (cache layer — only invalidated if composer files change)
COPY composer.json composer.lock ./

# Install dependencies without running scripts (artisan not available yet)
RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --no-scripts \
    --no-autoloader

# Copy full application (artisan is now present)
COPY . .

# Generate optimized autoloader and run post-install scripts
RUN composer dump-autoload --optimize \
    && php artisan package:discover --ansi

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Nginx config
COPY nginx.conf /etc/nginx/conf.d/default.conf

ENV PORT=8080
EXPOSE 8080

CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]