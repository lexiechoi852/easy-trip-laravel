FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql gd

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy everything
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Expose port
EXPOSE 9000

CMD ["php-fpm"]
