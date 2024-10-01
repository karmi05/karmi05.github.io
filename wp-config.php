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
define( 'DB_NAME', 'webEjemplo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'oG ^5T($8ObZWfk^CE]2:C;;uiHp8~#F:N*xQnii3c DNbN,(n,MV7Aa>Xoeg._3' );
define( 'SECURE_AUTH_KEY',  'p-x3>+KrmaFk3U~Q}o`&[<%VLZE=KWOp~/zq*?GvZ[AWo${!d2c:>:[I2n60!nY@' );
define( 'LOGGED_IN_KEY',    'XLB%}!e}QO~1y<Z>;r3s^(%%Ak*qHa1[]|Uqu_{TBYJoo6j(!nX+gQ$@Ndz?69a ' );
define( 'NONCE_KEY',        ':HuyyX#q, +KeO6RA@ZXur;^Qr3l~ P{n=e$*s.>:-8)}DstQA6):UW3;SVTcN!s' );
define( 'AUTH_SALT',        'c,?_^h;;p, ^Q_!$?g-GEx,mjTD*R%|zv`K[kVklq(C]$w8do?4_44xr-Q2:(}C]' );
define( 'SECURE_AUTH_SALT', '1!~Xzfz,~P$-(7>==Sh}YGL_egU<ipFq*yR6>[4d#%8}Gqlxz]Z8WWFI /({E A>' );
define( 'LOGGED_IN_SALT',   'Z[RNo^rPht`!E4*VE2Tr8F,lB}4=pJ/Hf}g(hfM6[f+$=pH>oFUSj:JIP0p4^tN|' );
define( 'NONCE_SALT',       'seapv3_4iT&Zvz0CAbiYTj)=ck+ePoGlJE:7K0#R(;~$DVZ-sHsna1E0CV79anT^' );

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
