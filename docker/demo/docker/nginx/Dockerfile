FROM alpine:3.7

RUN apk add --update --no-cache \
    nginx \
    curl \
  && rm -rf /var/cache/apk/* && rm -rf /tmp/*

COPY ./files/. /

RUN adduser -D -g '' -G www-data www-data

ENTRYPOINT ["entrypoint"]
CMD ["nginx"]

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=5s --retries=3 CMD curl -s http://0.0.0.0/health 1>/dev/null || exit 1
STOPSIGNAL SIGQUIT
