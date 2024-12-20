FROM php:8.1-apache
ENV APACHE_SERVERNAME Illy_Vending

# Instalar dependencias adicionales de PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    nodejs \
    npm \
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

# Crear el proyecto Laravel (solo si no tienes un proyecto creado)
RUN composer create-project --prefer-dist laravel/laravel .

# Crear las carpetas necesarias para Laravel
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache

# Establecer permisos adecuados
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copiar el script de inicio
COPY start.sh /var/www/html/start.sh

# Hacer ejecutable el script de inicio
RUN chmod +x /var/www/html/start.sh

# Instalar dependencias de npm
RUN npm install

# Instalar Vite y sus dependencias
RUN npm install vite --save-dev

# Instalar dependencias de Node.js
RUN npm install --legacy-peer-deps
RUN npm install intl-tel-input


# Instalar Tailwind CSS, PostCSS y Autoprefixer
RUN npm install tailwindcss postcss autoprefixer --save-dev

# Instalar dependencias (incluyendo Font Awesome)
RUN npm install && npm install @fortawesome/fontawesome-free


# Compilar assets con Vite (en modo producción)
RUN npm run build

CMD ["apache2-foreground"]
