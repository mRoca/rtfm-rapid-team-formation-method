FROM alpine:3.7

RUN apk add --update --no-cache \
    ca-certificates \
    php7-fpm \
    php7-apcu \
    php7-curl \
    php7-json \
    php7-mbstring \
    php7-opcache \
    curl \
    fcgi \
 && rm -rf /var/cache/apk/* && rm -rf /tmp/*

RUN addgroup www-data && adduser -h /var/www -D -g '' -G www-data www-data

COPY ./files/. /

ENV APP_ENV=prod

ENTRYPOINT ["entrypoint"]
CMD ["php-fpm7", "-F"]

WORKDIR /srv
EXPOSE 9001

HEALTHCHECK --interval=30s --timeout=5s CMD REDIRECT_STATUS=true SCRIPT_FILENAME=/srv/ping.php REQUEST_URI=/ REQUEST_METHOD=GET cgi-fcgi -bind -connect 127.0.0.1:9001
STOPSIGNAL SIGQUIT
