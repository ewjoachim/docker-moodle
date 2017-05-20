FROM php:apache

LABEL maintainer "ewjoachim@gmail.com"

VOLUME ["/var/moodle_data", "etc/moodle.d/50-custom.php"]

COPY php.ini /usr/local/etc/php/
COPY config /etc/moodle.d/
COPY config.php /var/www/html/config.php

RUN set -xe && \
    curl -L https://github.com/moodle/moodle/archive/MOODLE_33_STABLE.tar.gz \
		| tar -xz -C /var/www/html --strip-components=1 && \
	apt-get update && \
	apt-get install -y libpq-dev libpng-dev libxml2-dev libicu-dev && \
	rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/lib/cache/* /var/lib/log/* && \
   	docker-php-ext-install -j$(nproc) pgsql zip gd xmlrpc soap intl opcache

