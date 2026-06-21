#!/bin/bash
set -e

cd /var/www/html

# Generate an APP_KEY only if one is not already set (keeps sessions stable across restarts)
if ! grep -qE '^APP_KEY=base64:' .env 2>/dev/null; then
    echo "==> Generating application key..."
    php artisan key:generate --force
fi

# Wait for the database, then run migrations
echo "==> Waiting for the database and running migrations..."
until php artisan migrate --force; do
    echo "    Database not ready yet - retrying in 3s..."
    sleep 3
done

# Cache configuration/routes/views for performance
echo "==> Caching config, routes and views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Make sure runtime directories stay writable by php-fpm (www-data)
chown -R www-data:www-data storage bootstrap/cache

echo "==> InternMatch is ready."
exec "$@"
