You can create a Docker image for your existing PHP website without a database relatively easily. Here's a breakdown of the process and a sample Dockerfile:

1. Project Structure:

Organize your website files.  A common structure is to have your PHP files in a directory (often named public or www).  For this example, my PHP files are in the directory called public.

my-website/
├── public/
│   ├── index.php
│   ├── services.php
│   ├── aboutus.php
│   ├── portfolio.php
│   ├── contact.php
└── Dockerfile
2. Create a Dockerfile:

Create a file named Dockerfile (no extension) in the root of your website directory (my-website in this example). 
This file will contain the instructions for building your Docker image.   

Dockerfile

# Use a base image with PHP and a web server (e.g., Apache or Nginx)
FROM php:8.1-apache  # Or php:8.1-fpm if you prefer Nginx

# Copy your website files into the container
COPY public/ /var/www/html/  # Apache's default webroot

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
Explanation of the Dockerfile:

FROM php:8.1-apache: This line specifies the base image. It uses the official PHP image with Apache pre-installed. You can choose a different PHP version (e.g., php:7.4-apache, php:8.2-apache) or use php:*-fpm if you prefer Nginx. Using -apache or -fpm simplifies the setup as the webserver is already configured in the base image.   
COPY public/ /var/www/html/: This copies your website files from the public directory on your host machine to the /var/www/html directory inside the Docker container (Apache's default webroot).
RUN chown ... && chmod ...: This is crucial for Apache. It sets the correct ownership and permissions on your website files so that the Apache user (www-data) can access and serve them.   
EXPOSE 80: This tells Docker that the container will be listening on port 80. It's important for networking.   
(Optional) RUN docker-php-ext-install ...: Use this to install any additional PHP extensions your website requires (e.g., MySQL, GD, etc.). Since you don't have a database, you likely won't need this.
(Optional) COPY php.ini ...: If you have a custom php.ini file, copy it into the container.
(Optional) RUN ...: Use this for any pre-startup commands, like creating directories or installing packages.

3. Build the Docker Image:

Open a terminal in the my-website directory (where your Dockerfile is) and run the following command:

Bash

docker build -t alexswebsite .
docker build: The command to build a Docker image.
-t my-website-image: This tags your image with the name my-website-image. Choose a descriptive name.
.: This specifies the build context (the current directory).
4. Run the Docker Container:

After the image is built, run it:

Bash

docker run -p 8090:80 my-website-image
docker run: The command to run a Docker container.
-p 8090:80: This maps port 8080 on your host machine to port 80 in the container. You can access your website by going to http://localhost:8090 in your browser. The first number is the host port, and the second is the container port.
my-website-image: The name of the image you built.
5. Access your website:

Open your web browser and go to http://localhost:8090 (or the port you mapped). You should see your website.
