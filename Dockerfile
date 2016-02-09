############################################################
# Dockerfile to build Project Euler container image
# Based on official php image.
############################################################

FROM php:5-fpm

MAINTAINER Francois-Xavier Soubirou

RUN apt-get update && \ 
    apt-get install -y zlib1g-dev && \
    docker-php-ext-install zip

COPY . /app

WORKDIR /app

RUN php -r "readfile('https://getcomposer.org/installer');" | php && \
    php composer.phar install --prefer-dist
