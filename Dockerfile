
FROM php:8.2-cli

# Install PHP and system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
       pdo \
       pdo_mysql \
       mbstring \
       zip \
       exif \
       pcntl \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 \
    /usr/bin/composer /usr/bin/composer

# Install Node.js
RUN curl -fsSL \
    https://deb.nodesource.com/setup_20.x \
    | bash - \
    && apt-get update \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Application directory
WORKDIR /app

# Copy project files
COPY . .

# Remove leftover Vite development server file
RUN rm -f public/hot

# Install Laravel dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Install frontend dependencies
RUN npm ci

# Build Tailwind CSS and JavaScript
RUN npm run build

# Verify the Vite production manifest
RUN test -f public/build/manifest.json

# Clear Laravel cached configuration and views
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Laravel writable directories
RUN mkdir -p storage/logs bootstrap/cache \
    && chmod -R ug+rwX \
       storage bootstrap/cache

# Render port
EXPOSE 10000

# Start Laravel
CMD php artisan serve \
    --host=0.0.0.0 \
    --port=${PORT:-10000}
