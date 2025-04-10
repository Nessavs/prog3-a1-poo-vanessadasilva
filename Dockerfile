FROM php:8.2-apache

COPY . /var/www/html/

RUN a2enmod rewrite
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf
RUN chown -R www-data:www-data /var/www/html
