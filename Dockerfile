FROM php:8.0-apache

WORKDIR /var/www

RUN apt-get update \
 && docker-php-ext-install pdo pdo_mysql \
 && a2enmod rewrite

COPY . /var/www/

# set file permissions
RUN chown -R www-data:www-data /var/www

EXPOSE 8000

CMD ["apache2-foreground"]


