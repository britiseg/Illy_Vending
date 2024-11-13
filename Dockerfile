FROM php:8.1-apache-bullseye
ENV APACHE_SERVERNAME Illy_Vending

# Instalar dependencias adicionales de PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite

# Cambiar el DocumentRoot de Apache
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Establecer el directorio de trabajo
WORKDIR /var/www/html/

# Copiar Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Crear el proyecto Laravel (esto generará el archivo package.json)
RUN composer create-project --prefer-dist laravel/laravel .

# Crear las carpetas necesarias para Laravel
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache

# Establecer permisos adecuados
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instalar Node.js versión 18 y npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instalar dependencias de npm y Vite después de que Laravel haya sido creado
RUN npm install \
    && npm install vite --save-dev \
    && npm install tailwindcss postcss autoprefixer --save-dev \
    && npm install @fortawesome/fontawesome-free

# Copiar el script de inicio
COPY start.sh /var/www/html/start.sh
RUN chmod +x /var/www/html/start.sh

# Compilar assets con Vite (en modo producción)
RUN npm run build

CMD ["apache2-foreground"]
