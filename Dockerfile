FROM php:8.1 as php

RUN apt-get update -y

WORKDIR /var/www

COPY . .

COPY --from=composer:2.3.5 /user/bin/composer /user/bin/composer
## Image config
#ENV SKIP_COMPOSER 1
#ENV WEBROOT /var/www/html/public
#ENV PHP_ERRORS_STDERR 1
#ENV RUN_SCRIPTS 1
#ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

## Allow composer to run as root
#ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
