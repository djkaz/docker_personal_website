# Use a base image with PHP and a web server (e.g., Apache or Nginx)
FROM php:8.1-apache  
#Or php:8.1-fpm if you prefer Nginx

# Copy your website files into the container
COPY public/ /var/www/html/  
# Apaches default webroot

# Set file permissions (important for Apache)
RUN chown -R www-data:www-data /var/www/html/ && \
    chmod -R 755 /var/www/html/

# Expose port 80 (the default HTTP port)
EXPOSE 80

# (Optional) Install any additional PHP extensions you might need
# Example:
# RUN docker-php-ext-install pdo pdo_mysql

# (Optional) If you have a custom php.ini, copy it
# COPY php.ini /usr/local/etc/php/

# (Optional) If you need to run any commands before the server starts
# Example (if you needed to create a directory):
# RUN mkdir -p /var/www/html/uploads

# The CMD instruction is already defined in the base image (Apache starts)
# You generally don't need to override it unless you have a very specific startup command