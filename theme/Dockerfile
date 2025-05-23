# Use the official WordPress image as a base
FROM wordpress:latest

# Copy your custom theme into the container
# Assuming 'app' folder contains your '9devy-theme' files and Dockerfile is in the 'theme' directory
# If you run 'docker build .' from the 'theme' directory, './app' refers to the 'app' folder within 'theme'.
COPY ./app /var/www/html/wp-content/themes/9devy-theme

# Set correct permissions for the theme directory
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/9devy-theme
RUN chmod -R 755 /var/www/html/wp-content/themes/9devy-theme

# Expose port 80 (default for WordPress)
EXPOSE 80

# The default command from the base WordPress image will run Apache and PHP-FPM
# CMD ["apache2-foreground"]
