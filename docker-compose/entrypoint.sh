#!/bin/sh
set -e

cd /var/www/html && composer install --no-interaction

crontab /etc/crontab
service cron reload
service cron restart

# Fix file rights after volume mount
chmod 777 -R /var/www/html/storage/

# start services
#php-fpm -D
#nginx -g "daemon off;"
service nginx start

php-fpm
