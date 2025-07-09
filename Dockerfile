FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy all project files to Apache's root folder
COPY . /var/www/html/

# Set ownership (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose default HTTP port
EXPOSE 80
