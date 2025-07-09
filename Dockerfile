FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy project files to Apache folder
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
