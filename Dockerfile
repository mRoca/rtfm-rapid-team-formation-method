FROM nginx:1.15-alpine

COPY web /usr/share/nginx/html

RUN sed -i -e "s/#gzip\s*on;/gzip = on;/g" /etc/nginx/nginx.conf
