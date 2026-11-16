
# Frontend build stage
FROM node:24-alpine AS frontend

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci --fetch-retries=10 --fetch-retry-mintimeout=20000 --fetch-retry-maxtimeout=120000 --fetch-timeout=600000
COPY . .
RUN npm run build


# PHP application stage
FROM php:8.5-fpm-bookworm AS app

WORKDIR /var/www/html

# System dependencies
RUN sed -i 's|http://deb.debian.org|https://deb.debian.org|g' /etc/apt/sources.list.d/debian.sources \
    && apt-get update -o Acquire::Retries=10 \
    && apt-get install -y -o Acquire::Retries=10 \
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
   && docker-php-ext-install \
    bcmath \
    gd \
    intl \
    pdo_mysql \
    zip \
    opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Application files
COPY . .

# Install PHP dependencies
RUN composer install \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# Copy built frontend assets
COPY --from=frontend /app/public/build ./public/build

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
