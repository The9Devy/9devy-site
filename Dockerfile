FROM wordpress:latest

# Copy your custom theme into the container
COPY ./theme/9devy-theme /var/www/html/wp-content/themes/9devy-theme

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/9devy-theme

EXPOSE 80
