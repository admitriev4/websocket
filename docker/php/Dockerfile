FROM php:8.0.3-apache
RUN docker-php-ext-install mysqli \
    pdo_mysql \
    && a2enmod \
    rewrite
RUN apt-get update

RUN apt-get -y install npm
RUN apt-get -y install redis-server

RUN npm install -g laravel-echo-server
RUN npm install --save laravel-echo
RUN npm install --save socket.io-client





