FROM neighborhoods/php-fpm:7.4
RUN apt-get update -y && apt-get install -y unzip procps git

#Add composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

ARG PROJECT_NAME=use_case_84

ARG INSTALL_XDEBUG=false
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
