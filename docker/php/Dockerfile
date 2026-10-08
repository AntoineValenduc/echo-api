FROM php:8.4-fpm-alpine3.24

RUN apk update && apk add --no-cache \
    bash \
    zip \
    unzip \
    git \
    curl \
    libzip-dev

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions \
    /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions \
    pdo_pgsql \
    redis

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer