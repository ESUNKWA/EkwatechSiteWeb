# ==========================================================
# STAGE 1 : Construction des assets frontend avec Vite
# ==========================================================

FROM node:20-alpine AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY vite.config.js ./
COPY resources ./resources

RUN npm run build


# ==========================================================
# STAGE 2 : Application Laravel
# ==========================================================

FROM php:8.2-apache

WORKDIR /var/www/html

# Extensions PHP nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpq-dev \
    unzip \
    && docker-php-ext-install \
    pdo \
    zip \
    pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

# Activation du module Apache nécessaire à Laravel
RUN a2enmod rewrite

# Installation de Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copie du projet Laravel
COPY . .

# Installation des dépendances PHP
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Copie des assets générés par Vite
COPY --from=frontend /app/public/build ./public/build

# Permissions nécessaires à Laravel
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache

# Configuration du DocumentRoot Apache
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri \
    -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# Port HTTP du conteneur
EXPOSE 80

# Démarrage d'Apache
CMD ["apache2-foreground"]