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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adwise' );

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
define( 'AUTH_KEY',         'A_:(!m`LM7hWV{Hp4jsa~;b> 0+c*HWGIFy(091H;;9-;>oJ5/4JcGl^Y|nD~x$[' );
define( 'SECURE_AUTH_KEY',  'Rx+R~7]yoSb eG_ePtu^YduhZ~(1VZiDD)m!|?.EJ#G@:fO=~hU%;)%m#+r3@aID' );
define( 'LOGGED_IN_KEY',    '+gfJd~-E.1=AL4cA:AjnUyUesI8j?&%Qj0UE vQ+[gnHA$N/&*--*?r? ^=4i%;Z' );
define( 'NONCE_KEY',        'T4>G)V!h|Er=w [5{!_@GWa+P ^hUnxWx1L aYr7.2 e{q;v[}Ae/n,>U{ru+dgG' );
define( 'AUTH_SALT',        'w^>X{ANrTi@U(U>,R,Qe:>+w-{bnSz3hTZP]u=:1Soj[8f3z=/?XVXFA-8Y?fF:-' );
define( 'SECURE_AUTH_SALT', ';kc=jBX3]KWpz.IqQ?E3b+t>}IR]CseCw!uCwBpfMYar]3Jc5rOhz(tfAJ}Qo^M;' );
define( 'LOGGED_IN_SALT',   'Nq][.6OSs74+GW  VQjj(@e811hdl?vMqkvIc;7vlILDIbfKqhz^T#c;.~I$=(.I' );
define( 'NONCE_SALT',       'o`Y-/1WQ^$%1>h%^K%9r]mrs/xi0Wn=5u96}E:IbzF1na_OvySI_|o|X:4NSM ?6' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
