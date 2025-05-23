FROM wordpress:latest
COPY ./theme/9devy-theme /var/www/html/wp-content/themes/9devy-theme
COPY ./theme/9devy-child /var/www/html/wp-content/themes/9devy-child
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/9devy-theme
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/9devy-child
EXPOSE 80
