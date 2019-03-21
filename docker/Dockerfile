FROM php:7.3-apache 
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite headers

ADD app.conf /etc/apache2/sites-available/
RUN a2ensite app
