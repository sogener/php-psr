FROM phpdockerio/php80-fpm:latest
WORKDIR "/var/www/sites"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        php8.0-memcache \
        php8.0-memcached \
        php8.0-mysql; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
