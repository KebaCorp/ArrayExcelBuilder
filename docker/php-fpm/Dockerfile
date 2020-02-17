FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
        unzip \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libxslt-dev \
        libicu-dev \
        libmcrypt-dev \
        libxml2-dev \
        libsodium-dev \
        zlib1g-dev \
        libpcre3-dev \
        libcurl4-openssl-dev \
        pkg-config \
        libssl-dev \
    && ACCEPT_EULA=Y \
        DEBIAN_FRONTEND=noninteractive \
        apt-get install \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure \
        gd \
    && docker-php-ext-install \
        gd \
        mbstring \
        mysqli \
        pdo_mysql \
        zip \
    && pecl install \
        apcu_bc \
        xdebug-2.7.1 \
    && docker-php-ext-enable xdebug

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer

# Php.ini
ADD php.ini /usr/local/etc/php

WORKDIR /var/www
