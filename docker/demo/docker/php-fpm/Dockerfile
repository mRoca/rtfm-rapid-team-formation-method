FROM phpdockerio/php7-fpm:latest

# Install php extensions
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.0-mysql php7.0-redis \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Blackfire.io
RUN export VERSION=`php -r "echo PHP_MAJOR_VERSION.PHP_MINOR_VERSION;"` \
    && curl -A "Docker" -o /tmp/blackfire-probe.tar.gz -D - -L -s https://blackfire.io/api/v1/releases/probe/php/linux/amd64/${VERSION} \
    && tar zxpf /tmp/blackfire-probe.tar.gz -C /tmp \
    && mv /tmp/blackfire-*.so `php -r "echo ini_get('extension_dir');"`/blackfire.so \
    && echo "extension=blackfire.so\nblackfire.agent_socket=\${BLACKFIRE_PORT}\nblackfire.log_file=/var/log/blackfire.log\nblackfire.log_level=4" > /etc/php/7.0/fpm/conf.d/blackfire.ini

WORKDIR "/var/www"
