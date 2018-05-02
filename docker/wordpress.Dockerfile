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

ENV DB_NAME 'unoWordpressxn84'
ENV DB_USER 'w8w9gAn6SYp0'
ENV DB_PASSWORD 'ePyzpUgN8YRS'
ENV DB_HOST 'unosquarewordpress.ce9q87nktug9.eu-west-1.rds.amazonaws.com'
ENV DB_WP_PREFIX 'wp_'
ENV WP_DEBUG true

# Tokens 
ENV AUTH_KEY '[VDov6_W/mgYAPQ.MABYWzee?Y}C1klu%X_BMgoXT:Yj=BdQ[r*q/%JMT7oGFDz_'
ENV SECURE_AUTH_KEY '6}^L8(?4|QR}O5W+Mwh$8te=$3|21u&mW0guLkI{i0fSq^KvtCEu G{SX`/[#3+!'
ENV LOGGED_IN_KEY '[[gI3]qLFpxHiC63qSqIPB$j8/d-1[Hh1pcsgRPOVt_t9WtIBe*R?f2I]5j <VWV'
ENV NONCE_KEY '[4M,qYVWFi/zdR:=.,w<RanKW!*51&bM`)9~a/(iDj3r_?LBHXIAU8Q*gzY|&fmm'
ENV AUTH_SALT '*o%ZC@mmpY23}DTXn9o/m#bIGw,D1Yi8UR7[;2TuQ$80:t$>4T0nB`E6/9{^ ( $'
ENV SECURE_AUTH_SALT 'Fh$)7XIr0NAS:y1qVD2jMWTnxs0o1Sm7:___e6/5aOv{?XX80jUKrGPUqS2,b9!#'
ENV LOGGED_IN_SALT ']W%I#l8E:%U/RoRSI2(-];H=MhIJ1!`yAijBd!Q%|X=pO_DG5e+|.Z~ d*1?A_,Q'
ENV NONCE_SALT 'uON )e$1Ep|L4^ThF4v$#Rbvelc[1opz(P*muh;Vg9CdGL#BlZGbAC9@M}<n%B]c'

RUN a2enmod cgi