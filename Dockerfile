FROM php:8-apache
COPY . /var/www/html/
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli