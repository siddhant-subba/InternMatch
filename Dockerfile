# ---- InternMatch production image (Caddy + php-fpm + supervisor) ----
FROM php:8.2-fpm

# System packages, PHP extensions and supervisor
RUN apt-get update && apt-get install -y --no-install-recommends \
        supervisor \
        git \
        unzip \
        libzip-dev \
        libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring bcmath zip pcntl opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer + Caddy binaries from their official images
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY --from=caddy:2    /usr/bin/caddy    /usr/bin/caddy

WORKDIR /var/www/html

# Install PHP dependencies first so Docker can cache this layer
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# Copy the rest of the application
COPY . .

# Finish autoloader + lock down writable directories
RUN composer dump-autoload --optimize --no-dev \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Container configuration
COPY docker/php.ini          /usr/local/etc/php/conf.d/zz-internmatch.ini
COPY docker/Caddyfile        /etc/caddy/Caddyfile
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh    /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
