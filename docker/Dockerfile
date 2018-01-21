FROM php:7-apache

MAINTAINER aayuov <ayaz.ayupov@gmail.com>

RUN a2enmod rewrite && \
    docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

