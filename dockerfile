# Use the official PHP-Apache image as the base
FROM php:8.2-apache

# Copy your application code into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Install necessary PHP extensions (optional)
# Example: pdo_mysql for MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Set permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]