FROM php:5.6-apache

MAINTAINER Name<rakesh635@gmail.com>

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev \
&& docker-php-ext-install pdo_mysql mysqli gd iconv 

# Copy site into place.
ADD . /var/www/samplephpcurd

ADD entrypoint.sh /

RUN chmod 775 /entrypoint.sh

# Update the default apache site with the config we created.
ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf

# By default, simply start apache.
RUN service apache2 restart
