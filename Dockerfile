FROM php:8.1-apache
COPY . .
COPY .  /app /var/www/html/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get install -y \
    zip \
    unzip \
    git \
    libpq-dev \
    && docker-php-ext-install \
    pdo_mysql \
    && docker-php-ext-enable \
    pdo_mysql

RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache

RUN chmod 777  /var/www/html/storage \
    && chmod 777 -R /var/www/html/bootstrap/cache

RUN a2enmod rewrite && \
    sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

RUN composer install

RUN composer dump-autoload --optimize \
    && php artisan optimize

EXPOSE 80
