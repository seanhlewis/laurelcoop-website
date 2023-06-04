<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'demouser' );

/** Database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         ', ckaWo)`B$lliE13]%)e?KxWKzqIP{<D-__y>Zqb!|ODN0rZ4M:o5$!Ei%5*C)]' );
define( 'SECURE_AUTH_KEY',  '<a8Y#*PRH_n;d#O1Ui0NK*sjW/uT)H#hp1A.XQ%BT9$6s-?TeUV-rSu6k/Nd$N0y' );
define( 'LOGGED_IN_KEY',    'r}c5(&8u)gVV664f.1}&vzjA{CjHfths`![F|QFuFAzP(zF4NGEvEUxAI7*uP)P.' );
define( 'NONCE_KEY',        '$NG@a&yAtoagBbrXWNTCkhUB,YY;}TAVFZ]@UY!eI zoH99m8Z$M:j;PO` IrGOx' );
define( 'AUTH_SALT',        'PwZ#4E9i?0QNRx/?.40p_q5EA&gt12#E7Y{kzT^C/3c7=r{prsSK5,ca[l*XB</N' );
define( 'SECURE_AUTH_SALT', ';vTIkOK703U{ f,QEIAOB9M=h+fO{2/78jg_PiW0jGtg^F47lSCa%N*7<JX4@1Nc' );
define( 'LOGGED_IN_SALT',   'CM5Y5GEX)`_WJs:oH^C*bq6 Dz?IMUK8*9l.!QXkt366*TZ/Zp/CEu#VQlwas63Y' );
define( 'NONCE_SALT',       '1Uz3?*S;>)Yax9!d$WJ5[Yjr_riKmER6J3*8c??yJtg6E9*Cmg%dsFP`JSrBzSn1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */
define ('WP_ALLOW_REPAIR', true);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
