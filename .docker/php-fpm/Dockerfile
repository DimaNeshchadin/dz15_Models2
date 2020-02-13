FROM php:7.4.1-fpm

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install mysqli

RUN apt update
RUN apt install libpq-dev -y

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY .docker/php-fpm/xdebug-dev.ini /usr/local/etc/php/conf.d/xdebug-dev.ini

COPY . /src/app/

WORKDIR /src/app/

RUN chown -R www-data:www-data /src/app
