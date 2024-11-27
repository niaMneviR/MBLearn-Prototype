# Use the official PHP image
FROM php:8.0-apache

# Install system dependencies required for PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Set the working directory
WORKDIR /var/www/html

# Copy your application files from your local project directory to the working directory in the container
COPY . .

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql

# Expose the port
EXPOSE 80