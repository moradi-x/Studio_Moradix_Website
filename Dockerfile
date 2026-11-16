
# PHP application stage
FROM php:8.5-fpm-bookworm AS app

WORKDIR /var/www/html

# System dependencies
RUN apt-get -o Acquire::Retries=10 -o Acquire::http::Timeout=120 update \
    && apt-get -o Acquire::Retries=10 -o Acquire::http::Timeout=120 install -y \
        git \
        unzip \
        libicu-dev \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
   && docker-php-ext-install bcmath \
    && docker-php-ext-install gd \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Application files
COPY . .



# Copy built frontend assets
COPY public/build ./public/build

# Create Laravel storage directories and public storage link
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    storage/app/backups \
    storage/app/public \
    bootstrap/cache \
    && ln -s ../storage/app/public public/storage \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]


# Nginx web stage
FROM nginx:alpine AS web

COPY --from=app /var/www/html/public /var/www/html/public
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
