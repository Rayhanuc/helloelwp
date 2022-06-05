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
define( 'DB_NAME', 'helloelwp' );

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
define( 'AUTH_KEY',         'L/nd3u#-s[. i(70#6UNG*ULDi!5x<<mMO7w;FsAgjPytC6!oB:q,Q>c#Y<W~jC-' );
define( 'SECURE_AUTH_KEY',  '}IY9(3E|`5Ji,p%lrTi+F-_Q<<:L) 6(//PQqL@Fd!mvq>{jp{0(zU!S/L@ec~f8' );
define( 'LOGGED_IN_KEY',    '`h4(:~zUiWU(w<[E|dQyI+G`5_,KE=pi2G4*&bs_aoUM>S-p+l[zLw{L}S7AU5;[' );
define( 'NONCE_KEY',        'K[f4XY@N!nLZ-7PJP|L-[ P4x).Ha*^1Po4+2Zp9@3V)k!?! W*WLs=O1rcbJTPR' );
define( 'AUTH_SALT',        'D]|NI&zw[)@kB|ppUjd@R4do?>_kGFsK4iGbM~t8w:uM-9BX(~n(EO 0dC)g;5=-' );
define( 'SECURE_AUTH_SALT', 'j)+*OkUW?t9[4d-`C/|7;o|~&~Fe2uH|nScnIu#qK pQxn@0vmqkXubq6x1QsR5C' );
define( 'LOGGED_IN_SALT',   's?R|,qyJ2rh(z?q%Y@i&Yq-gf#E3{NGQ6;JQVQUB_cd l!^!rXFxkxOmXhTRu@@$' );
define( 'NONCE_SALT',       '&RP_&kD5m.IE!5#0mas&(6CjKXe[e!Y@np&EL8Q,y@i^hCzI47m]<3b{@]1p-]Zi' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
