FROM wordpress:latest
COPY ./wp-config.php /var/www/html/wp-config.php
COPY ./theme/9devy-theme /var/www/html/wp-content/themes/9devy-theme
COPY ./theme/9devy-child /var/www/html/wp-content/themes/9devy-child
COPY ./plugins /var/www/html/wp-content/plugins
RUN chown -R www-data:www-data /var/www/html

