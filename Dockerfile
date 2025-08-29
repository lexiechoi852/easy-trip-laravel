FROM php:8.2-cli

WORKDIR /var/www

COPY . .

# Install required packages
RUN apt-get update && apt-get install -y \
    unzip git libpq-dev curl \
    && docker-php-ext-install pdo_pgsql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Copy entrypoint and make executable
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Optional: expose a port for clarity (Render uses $PORT)
EXPOSE 8000

ENTRYPOINT ["docker-entrypoint.sh"]
