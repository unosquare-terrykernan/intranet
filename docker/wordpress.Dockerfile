FROM wordpress:php7.2-apache

COPY ./wordpress /var/www/html
RUN chown -R www-data:www-data /var/www/html

RUN apt-get update \
	&& apt-get install -y --no-install-recommends git-core vim \
	&& apt-get -y clean \
	&& rm -rf /var/lib/apt/lists/*

RUN {\
	echo 'upload_max_filesize=50M'; \
	echo 'post_max_size=50M'; \
	} >> /usr/local/etc/php/conf.d/uploads.ini

ENV DB_NAME false
ENV DB_USER false
ENV DB_PASSWORD false
ENV DB_HOST false
ENV DB_WP_PREFIX false
ENV WP_DEBUG false

RUN a2enmod cgi