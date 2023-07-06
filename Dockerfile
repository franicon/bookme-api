FROM php:7.4-apache

RUN apt-get update && \
    apt-get install -y \
        git \
        zip \
        unzip \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd

WORKDIR /var/www/html

COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction --no-scripts --no-autoloader

RUN composer dump-autoload
#
#RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
#RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]

