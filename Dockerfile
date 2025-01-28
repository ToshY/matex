FROM php:8.1-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
        git \
        unzip \
        libicu-dev \
        libzip-dev \
    && docker-php-ext-install zip intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=ghcr.io/composer/docker:2.8 /usr/bin/composer /usr/bin/composer

COPY . .
