FROM php:8.4-fpm-alpine3.24

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

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl channel-update pecl.php.net \
    && pecl install redis \
    && docker-php-ext-enable redis

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

