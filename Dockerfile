# STAGE 1 : assets Vite
FROM node:20-alpine AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY vite.config.js ./
COPY resources ./resources
RUN npm run build

# STAGE 2 : Laravel avec FrankenPHP
FROM dunglas/frankenphp:1-php8.2-bookworm

WORKDIR /app

RUN install-php-extensions pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction

COPY --from=frontend /app/public/build ./public/build

RUN chown -R www-data:www-data storage bootstrap/cache

# Écoute en HTTP simple sur le port 80 (HTTPS géré en amont)
ENV SERVER_NAME=:80
EXPOSE 80
# Le CMD par défaut de l'image lance FrankenPHP, qui sert /app/public
