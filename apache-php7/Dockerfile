#apache tag is up to date php version
FROM php:apache

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
	git\
	zip\
	libcurl4-gnutls-dev\
    && docker-php-ext-install -j$(nproc) iconv mcrypt curl mysqli mbstring opcache pdo pdo_mysql\
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
WORKDIR /var/www/html
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get install apache2-utils
# ADD ./sites-available/funnest-tw.conf /etc/apache2/sites-available
# ADD ./sites-available/funnest52-tw.conf /etc/apache2/sites-available
RUN mkdir /var/www/html/public
# RUN a2dissite 000-default.conf
# RUN a2ensite funnest-tw.conf
# RUN a2ensite funnest52-tw.conf
RUN a2enmod rewrite
CMD ["apache2-foreground"]