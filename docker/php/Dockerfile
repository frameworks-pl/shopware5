FROM php:7.4.3-apache
RUN apt update
RUN apt install -qq -y vim git unzip iputils-ping libpq-dev sudo net-tools p7zip-full libzip-dev sendmail libpng-dev libicu-dev
RUN pecl install xdebug-3.1.6 && docker-php-ext-enable xdebug
RUN docker-php-ext-install gd intl pdo_mysql
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip
COPY docker/php/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN mkdir ~/.ssh


RUN a2enmod rewrite
