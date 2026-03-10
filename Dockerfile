FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    cron \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    nano \
    vim \
    unzip \
    git \
    curl \
    nginx \
    libzip-dev \
    libicu-dev \
    htop \
    mc

RUN pecl update-channels

# Install extensions
RUN docker-php-ext-install  \
    mbstring  \
    pdo_mysql  \
    mysqli  \
    exif  \
    pcntl  \
    bcmath  \
    gd  \
    zip \
    intl

# ionCube Loader для php 8.2(зроблено для прода під лінукс)
RUN curl -fsSL https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz -o /tmp/ioncube.tar.gz \
    && tar -xzf /tmp/ioncube.tar.gz -C /tmp \
    && cp /tmp/ioncube/ioncube_loader_lin_8.2.so /usr/local/lib/php/extensions/no-debug-non-zts-20220829/ \
    && chmod 755 /usr/local/lib/php/extensions/no-debug-non-zts-20220829/ioncube_loader_lin_8.2.so \
    && echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20220829/ioncube_loader_lin_8.2.so" > /usr/local/etc/php/conf.d/00-ioncube.ini \
    && rm -rf /tmp/ioncube /tmp/ioncube.tar.gz

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer
COPY --from=composer/composer:latest /usr/bin/composer /usr/bin/composer

RUN mkdir -p /var/log/php-fpm /var/log/nginx

COPY ./docker-compose/entrypoint.sh /var/www/entrypoint.sh
RUN chmod +x /var/www/entrypoint.sh

COPY ./docker-compose/nginx/default.conf /etc/nginx/sites-available/default
COPY ./docker-compose/crontab/crontab /etc/crontab
COPY ./docker-compose/php-fpm/docker.conf /usr/local/etc/php-fpm.d/docker.conf

# Set working directory
WORKDIR /var/www/html

COPY . .

EXPOSE 80

ENTRYPOINT ["/var/www/entrypoint.sh"]
