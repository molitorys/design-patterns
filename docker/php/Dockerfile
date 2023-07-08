FROM php:8.2-fpm

RUN apt-get update && apt-get install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip default-mysql-client libpng-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu redis \
    && docker-php-ext-enable apcu \
    && docker-php-ext-enable redis \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-install gd \
    && docker-php-ext-install exif

COPY docker/php/php.ini /usr/local/etc/php

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer