# Use the official PHP-Apache image
FROM php:8.2-apache

# Set the working directory to /var/www/html (Apache's default)
WORKDIR /var/www/html

# Copy the project files into the container
COPY . /var/www/html/

# Install necessary PHP extensions (e.g., pdo_mysql for database interaction, if needed)
RUN docker-php-ext-install pdo pdo_mysql

# Set permissions for the project files
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable Apache rewrite module (useful for modern PHP apps like Laravel)
RUN a2enmod rewrite

# Expose port 80 for HTTP traffic
EXPOSE 80

RUN echo "DirectoryIndex index.html index.php" > /etc/apache2/conf-enabled/directory-index.conf

# Start Apache
CMD ["apache2-foreground"]