#!/bin/bash
#composer install
if [ ! -e .env ]
then
    cp .env.example .env
    php artisan key:generate
    php artisan migrate --seed
fi

#chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod 0777 ./storage/logs ./storage/framework ./bootstrap/cache
