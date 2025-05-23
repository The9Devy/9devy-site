# Start from the official WordPress image
FROM wordpress:latest

# Install zip extension (optional for plugins requiring zip)
RUN apt-get update \
    && apt-get install -y libzip-dev unzip \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Copy WordPress core if included in the repo
# Uncomment the line below if your repo contains the full WP core
# COPY ./app/public /var/www/html/

# Copy custom themes into the WP themes directory
COPY ./app/public/wp-content/themes/9devy-theme  /var/www/html/wp-content/themes/9devy-theme
COPY ./app/public/wp-content/themes/9devy-child  /var/www/html/wp-content/themes/9devy-child

# Set ownership so Apache/PHP can read/write where needed
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/9devy-theme \
    && chown -R www-data:www-data /var/www/html/wp-content/themes/9devy-child

# Expose HTTP port
EXPOSE 80

# Use the default WordPress entrypoint and launch Apache in foreground
# This ensures the container stays alive and serves requests
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
