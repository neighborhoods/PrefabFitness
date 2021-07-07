FROM nginx:alpine

ADD nginx.conf /etc/nginx/

ARG PHP_UPSTREAM=php-fpm-prefab_fitness

RUN apk update \
    && apk upgrade \
    && apk add --no-cache bash \
    && adduser -u 82 -D -S -G www-data www-data \
    && exit 0 ; exit 1 \
    && rm /etc/nginx/conf.d/default.conf \
    && echo "" > /etc/nginx/conf.d/upstream.conf

ADD upstream.conf /etc/nginx/conf.d/upstream.conf
ADD ./sites/*.conf /etc/nginx/conf.d/

RUN mkdir /etc/nginx/ssl
ADD certs/local.nhds/ /etc/nginx/ssl/

CMD ["nginx"]

EXPOSE 80 443
