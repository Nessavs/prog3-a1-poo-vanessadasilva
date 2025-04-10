FROM php:8.2-apache

# Copia todos os arquivos do projeto pro container
COPY . /var/www/html/

# Ativa o mod_rewrite (opcional, se usar URLs amigáveis)
RUN a2enmod rewrite
