<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'connector' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z_Amk2wqe<Ke;qj;Ca<YKGG1XHe)~64Vww9!W8x)~h>S?C_UYHMx%a<*8/T>C_<U' );
define( 'SECURE_AUTH_KEY',  '<_dfY]VACKoI(Tfn%#YVN.NzG)7Px1IPQ9qLTLZ,H@4S*H~l38WVL*8d3xx+Q%]?' );
define( 'LOGGED_IN_KEY',    'z]L=t?x7vwTt!kGC8${zW9@}KWTZ}]gToT9&N$ftg)VvBrrtC|~(!?!:.hWj{($K' );
define( 'NONCE_KEY',        'Gb%(oj!19o>r&B](*].76pF~;ijk?FJ^O:anHvsC[m,x$,>|N1v.hCrC@L?~Xx{V' );
define( 'AUTH_SALT',        '!Ujwc5X-VN6WA%|-+f:11OHchFkcMrHN.V*7tGpz5E1gI`|j|}qXWePP)6OSS]^9' );
define( 'SECURE_AUTH_SALT', 'ue?g/u(BZT%LG//&eGyKY9{)?Z!Wl)h0gUUA-G~:]F09ORaH9536`i(iZ~niRk.M' );
define( 'LOGGED_IN_SALT',   'm=j5F86_cRkrJlfcx@w6+L4_$OPkAz-0!GcYv$cSG(^FA-onk}!M8x$wx<V/Lp!l' );
define( 'NONCE_SALT',       'R2|=mJZ@fwWb ,CM*a>;~^HG9Eu$?Yf9T<(Gxw6jn]([hu.&GH+`4HIPkb(gORLx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
