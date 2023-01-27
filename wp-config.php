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
define( 'DB_NAME', 'qdatabase' );

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
define( 'AUTH_KEY',         'ciMA!]dTRHB?d x`DsBH38d-7_6U t4yROyS|XQ<P%PQa8F*_sxWriem`+5na|Cg' );
define( 'SECURE_AUTH_KEY',  'Dm$pkXa?O]x:y~3E4s%^+/JNFx>|)>>}+Y8]z9/z~XI]OEl?eAuw`5X<tiLw]Ur]' );
define( 'LOGGED_IN_KEY',    '!*b|8l~c4D%0<^+K&l!l=~@[j>L{:#c>Q<i?MSKa`cOZeP:i&K]%2jBsO0CWf/mh' );
define( 'NONCE_KEY',        '1r6Jx<O8EK>l$!HfRym/uOM`qkD&yE@7D=Sdr^iA.|muDOKlOE1U#vOeJ$&AD90^' );
define( 'AUTH_SALT',        'Y*j) *FyKD_N4sQ) odj^gX/ro;WS?&{Z9/W_9FV%vY,o%*}cX^`b5-K+I+9YITC' );
define( 'SECURE_AUTH_SALT', '8LGiG~4 jT?#G7c]PPmOB(#JVCgVO):$v~j`+{h5=&tU%?lL/Z^>mqGX]9ftpN$e' );
define( 'LOGGED_IN_SALT',   '(ff71,F7+Pz$>q,!O6XaWAsX+P b[ecd!=-TY:?[/KWt8D/,.eT3=vi1p` u>V7o' );
define( 'NONCE_SALT',       'H)b:tshk0|2OXH|~1Q((IwKm`R+KKxIj,g9^SrSB@z?nzZH#PbS(_&&Wifts[ ,U' );

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
