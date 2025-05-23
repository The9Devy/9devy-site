<?php
define( 'DB_NAME', '9devy_llc' );
define( 'DB_USER', '9devy_user' );
define( 'DB_PASSWORD', 'DevySecurePass123!' );
define( 'DB_HOST', '173.29.195.50:4403' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';

