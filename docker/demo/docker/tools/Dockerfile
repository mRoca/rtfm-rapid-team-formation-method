FROM alpine:3.7

RUN apk add --update --no-cache \
    ca-certificates \
    php7-cli \
    php7-apcu \
    php7-ctype \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-imagick \
    php7-json \
    php7-intl \
    php7-mcrypt \
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-xml \
    php7-zlib \
    php7-phar \
    php7-tokenizer \
    php7-session \
    php7-simplexml \
    php7-xmlwriter \
    php7-zip \
    curl \
    curl-dev \
    bash \
    su-exec \
 && rm -rf /var/cache/apk/* && rm -rf /tmp/*

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

RUN addgroup www-data && adduser -h /var/www -D -g '' -G www-data www-data

COPY ./files/. /

WORKDIR /srv
ENTRYPOINT ["entrypoint"]

ENV ENTRYPOINT_USER www-data
USER www-data
