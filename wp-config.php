<?php
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ); // Use environment variable
/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ); // Use environment variable
/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ); // Use environment variable
/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ); // Use environment variable

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

define('WP_DEBUG', true); // Keep this for now to see errors, but disable in production.

// Add your unique WordPress salts here (generated from https://api.wordpress.org/secret-key/1.1/salt/)
// You can also get these from environment variables if your platform supports it,
// but hardcoding them here after generation is common.
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

if ( ! defined('ABSPATH') ) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';