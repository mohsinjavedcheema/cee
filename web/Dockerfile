# FROM php:7.2-apache

# LABEL name="Database Microservices" \   
#      maintainer="Mohsin Javed Cheema <mohsinjavedcheema@gmail.com>" \
#      summary="A Backend and Frontend Application"

# EXPOSE 80

# COPY src/ /var/www/html/

FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -yq --no-install-recommends \
    apt-utils \
    curl \
    # Install apache
    apache2 \
    # Install php 7.2
    libapache2-mod-php7.2 \
    php7.2-cli \
    php7.2-json \
    php7.2-curl \
    php7.2-fpm \
    php7.2-gd \
    php7.2-ldap \
    php7.2-mbstring \
    php7.2-mysql \
    php7.2-soap \
    php7.2-sqlite3 \
    php7.2-xml \
    php7.2-zip \
    php7.2-intl \
    php-imagick

RUN phpenmod pdo_mysql

EXPOSE 80

COPY src/ /var/www/html/

CMD apachectl -D FOREGROUND