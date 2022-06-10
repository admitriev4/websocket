FROM php:8.0.3-apache
RUN docker-php-ext-install mysqli \
    pdo_mysql \
    && a2enmod \
    rewrite
RUN apt-get update

RUN apt-get -y install npm

RUN npm install vue
RUN npm install -g laravel-echo-server