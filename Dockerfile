FROM wordpress

# COPY . /var/www/html

RUN apt-get update \
	&& apt-get -y upgrade \
	&& apt-get -y clean \
	&& rm -rf /var/lib/apt/lists/* \
	&& echo upload_max_filesize=50M > /usr/local/etc/php/conf.d/uploads.ini \
	&& echo post_max_size=50M >> /usr/local/etc/php/conf.d/uploads.ini

