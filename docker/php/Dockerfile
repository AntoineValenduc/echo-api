FROM php:8.5-fpm-alpine3.24

RUN apk update \
    && apk add \
    bash \
    zip \
    libzip-dev \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
