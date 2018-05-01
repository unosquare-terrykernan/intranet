FROM wordpress:php7.2-apache

COPY ./wordpress /var/www/html

RUN apt-get update \
	&& apt-get install -y --no-install-recommends git-core \
	&& apt-get -y clean \
	&& rm -rf /var/lib/apt/lists/*

RUN {\
	echo 'upload_max_filesize=50M'; \
	echo 'post_max_size=50M'; \
	} >> /usr/local/etc/php/conf.d/uploads.ini

RUN a2enmod cgi

# docker build --rm -t unosquare/intranet:0.0.0 .
# docker run -d -e MYSQL_USER=user -e MYSQL_PASSWORD=password -e MYSQL_DATABASE=database  -e MYSQL_ROOT_PASSWORD=password --name wordpress-mariadb mariadb:5.5
# docker run --rm -ti -v C:\Users\leemkay\Development\Unosquare\intranet:/var/www:www-data:www-data -p 80:80 --link wordpress-mariadb:mariadb unosquare/intranet:0.0.0
# docker run --rm -ti --link wordpress-mariadb:mariadb unosquare/intranet:0.0.0