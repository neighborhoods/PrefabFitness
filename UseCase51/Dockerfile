FROM php:7.3-fpm
RUN apt-get update -y && apt-get install -y unzip procps
RUN apt-get install -y libgmp-dev
RUN ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/
RUN docker-php-ext-configure gmp
RUN docker-php-ext-install gmp
ARG PROJECT_NAME=use_case_51

ARG INSTALL_XDEBUG=true
ARG COMPOSER_INSTALL=false

ENV PROJECT_DIR=/var/www/html/prefabfitness/${PROJECT_NAME}.neighborhoods.com
ENV IS_DOCKER=1

RUN usermod -u 1000 www-data
RUN mkdir -p $PROJECT_DIR
WORKDIR $PROJECT_DIR

COPY . $PROJECT_DIR

# Copy xdebug configration for remote debugging
COPY docker/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY docker/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN bash docker/build.sh \
    --xdebug ${INSTALL_XDEBUG} \
    --composer-install ${COMPOSER_INSTALL}

RUN if [ ! -d "data/cache/" ]; then mkdir -p data/cache/; fi
RUN chmod -R a+rw data/cache/

CMD ["php-fpm"]

EXPOSE 9000
