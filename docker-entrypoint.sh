#!/bin/bash
set -e

php artisan migrate:fresh --seed
## Run Laravel migrations
#php artisan migrate --force
#
## Seed the database
#php artisan db:seed --force

php artisan serve --host 0.0.0.0 --port $PORT
