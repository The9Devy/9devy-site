<?php
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ); // Use environment variable for database name
/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ); // Use environment variable for database user
/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ); // Use environment variable for database password
/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ); // Use environment variable for DB host

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

define('WP_DEBUG', true); // Keep this for now to see errors, but disable in production.

// Use environment variables for unique WordPress salts here
define('AUTH_KEY',         'Gm5wY]_+%W1?F%tp5!WSd~#-o#DEcDel4((KXJ-4We9C79[y}Fy*bWndSpCDsw!|');
define('SECURE_AUTH_KEY',  '3M48QR^<Ww#X+.H*}>c}=r,}gM=^?4KnrJ#.*54ni(j@s(s8WD6e>#72M3Cr>q+<');
define('LOGGED_IN_KEY',    '8=W?(F@+{37bxk5+Xtn?QnEq9b++<9tlr:e6lSE1Q-qC}E!/G7.[RM2<W5%XzeD6');
define('NONCE_KEY',        '`uZA[DA$yS4(o=Bu$+p<!}Cfnid-WPO7YOR @xilIip1WI&~l:hK%R@&5L)P3qq?');
define('AUTH_SALT',        'mhGVb`8r}<vl+j;3xE$NF+9#X|LZ]pclL*)> N|]in.k_txSE:R8bnrwQP;|Nw@K');
define('SECURE_AUTH_SALT', ':ryXj?5|D@/f!YAtu9q+}ouow<F|2UIH1N[I&!{-jeXk|6`#OS:k4(M[g)P6L6;.');
define('LOGGED_IN_SALT',   'ajoT/d*<c:@!mD,Ls:l+I!V9uL%MxR/hDe{(-Yq|mkW71|&MO&@&yr`{ Ta%@Tp6');
define('NONCE_SALT',       'lE}eg<G%LYo`c<v}c-nk)Z)-{v/GBa|p<xZKyzCmgg`zib@5!]k;VPd1AEgkPLT;');

// Ensure the ABSPATH constant is defined
if ( ! defined('ABSPATH') ) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
