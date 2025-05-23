<?php
/**
 * The base configuration for WordPress
 *
 * This file has the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql5780689' );

/** MySQL database username */
define( 'DB_USER', 'MhJDX7RI9u' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sql5780689' );

/** MySQL hostname */
// IMPORTANT: Please verify this DB_HOST with your database hosting provider (e.g., Render.com).
// A private IP (like 192.168.x.x) is typically NOT accessible from a public cloud platform.
// Using the public IP previously identified from your environment variables.
define( 'DB_HOST', '173.29.195.50:4403' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * WordPress Site and Home URLs
 * These are crucial for correct styling and asset loading in the admin and front-end.
 * Replace 'https://ninedevy-site.onrender.com' with your actual custom domain if you're using one.
 * This is set based on the URL you were using for the unstyled login page.
 */
define( 'WP_HOME', 'https://www.9devy.com' );
define( 'WP_SITEURL', 'https://www.9devy.com' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the WordPress.org secret key service:
 * https://api.wordpress.org/secret-key/1.1/salt/
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wg1JCAlY!%M&z]yDS`@*D.Yw(fV1_)|G*`(G.{0xG=khw&C _>w.Gj19|`<YS]zA');
define('SECURE_AUTH_KEY',  'p^3|Iv(g5Sz;_}y%5GbZkvEA31|6j9iH[[~3`k&@NaIXeqQ|T053Xn E{H_^Qnpx');
define('LOGGED_IN_KEY',    '3RmL-k^4|:;sg5AG,X>R=#_;kFL$a^@kx%{0.E~})NSneS9-/}77(I0 g45H|Z6A');
define('NONCE_KEY',        'S+tiIr/<UPX8`(W&&Y0I4If$04@jJ3&%+SOM~|3mU[%q]BN[Zr6-0{+8Bb$T}=F7');
define('AUTH_SALT',        'nEw`wmK$/*@+7D4Y2./Rs)z+NI?:ozUERcv3@=-zU1{rv#!@?HT|88L;=2<pA-.e');
define('SECURE_AUTH_SALT', '-#ohVrcD i:nvyeB~t,Iaex6ez2@`+K_Dn`/o{(5gLAG_j_8Hs%,:)T47=jI8#=C');
define('LOGGED_IN_SALT',   'WgbSE0^T6.o<-M?*$t/%2Z9(|PVwJ|kkuc?A9~i)&bf@~Ii)FopU(gST(;LB*ek.');
define('NONCE_SALT',       '*NeJjXVAQ0M)R4F5*D37l+aW)quKlgz|*oD+K?@q`VZUqH@6>1:Z+nC{ay&gh6lX');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true ); // Logs errors to wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', false ); // Prevents errors from displaying on the front-end

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
