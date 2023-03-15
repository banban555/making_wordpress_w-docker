FROM    debian:buster

RUN 	apt-get update -y && apt-get upgrade -y
RUN 	apt-get install -y php
RUN 	apt-get install -y php-mysql
RUN 	apt-get install -y tar
RUN 	apt-get install -y php-fpm
RUN		apt-get install -y wget

RUN		wget https://wordpress.org/latest.tar.gz

RUN		tar xzvf latest.tar.gz
RUN		rm latest.tar.gz
RUN		mv -f wordpress /var/www/
RUN		chown -R www-data:www-data /var/www/wordpress

RUN 	rm -rf /var/www/wordpress/wp-config-sample.php

COPY	./conf/wp-config.php /var/www/wordpress
COPY	./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN 	mkdir -p /run/php/

ENTRYPOINT     ["php-fpm7.3", "-F"]

EXPOSE 9000

