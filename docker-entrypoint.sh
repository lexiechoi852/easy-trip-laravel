#!/bin/bash
set -e

# Run Laravel migrations
php artisan migrate --force

# Seed the database
php artisan db:seed --force

# Start PHP-FPM
php-fpm

php artisan serve
