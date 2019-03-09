FROM php:7.1-apache

RUN apt-get update && apt-get install -y \
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
    && a2enmod \
        rewrite \
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
        mcrypt \
        mbstring \
        mysqli \
        pdo_mysql \
        zip \
    && pecl install \
        mongodb \
        xdebug \
    && docker-php-ext-enable mongodb

ADD php.ini /usr/local/etc/php
