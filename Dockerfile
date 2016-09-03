FROM wordpress:4.6.0-apache
MAINTAINER Coffee and Code <info@coffeeandcode.com>

COPY app/wp-config.php /var/www/html/
