FROM wordpress:latest

# Copy your wp-config.php
COPY ./wp-config.php /var/www/html/wp-config.php

# Copy your themes
COPY ./theme/9devy-theme /var/www/html/wp-content/themes/9devy-theme
COPY ./theme/9devy-child /var/www/html/wp-content/themes/9devy-child

# Ensure correct permissions
RUN chown -R www-data:www-data /var/www/html