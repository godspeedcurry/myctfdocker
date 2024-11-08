FROM php:7.4.21-zts-alpine

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN echo "phar.readonly = 0" >  /usr/local/etc/php/php.ini

ENTRYPOINT ["php", "-t", "/var/www/html", "-S", "0:80"]