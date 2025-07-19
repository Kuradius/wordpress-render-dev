FROM wordpress:php8.1-apache

RUN apt-get update \
  && apt-get install -y default-mysql-client \
  && rm -rf /var/lib/apt/lists/*

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

