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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '.bhCl .4~u/31PkFQPf:F!`-VgbozU^10^TR-w;FXmf^qmBbE!3&F8Ut#=)BQnmP' );
define( 'SECURE_AUTH_KEY',   'q[u%!X{Mpl}e|B7xUjP>%9]re+q)EW:VYcduhgV5yu19fFn*aWoXU2JN[XBU,mxn' );
define( 'LOGGED_IN_KEY',     'Yv!]N 5L,Bl.v 46#y5Kq`s8G_}eIl>O8-)oT3+!dK:2[c:.#R=i_p336+p1$El;' );
define( 'NONCE_KEY',         '`cN`bb]G>$Evs;a(]wAd2;e384O~oFfB_m$WU})Z+oW2yqu{X.[[pHPMEF%Y,l|s' );
define( 'AUTH_SALT',         'HC?$)zQ[P`}!{`D/1pSs@n,sMn_7S3^F/fU!nb]<WFo5jhn$-KNj|N=QXhTVKT7!' );
define( 'SECURE_AUTH_SALT',  'DMi|RP@nc{2H>NQMBB+H0ZId3VUBoe3]`%Sf`o/en;H<Q1m@~E&NZN9!t~OoydGG' );
define( 'LOGGED_IN_SALT',    'V16)S2S6=.8Qk~OGii~Jh#iu#Xnx: =A3)#CR{{WHl<]XoQz3|eUs6-v94 OErAY' );
define( 'NONCE_SALT',        '4%NjFIJxpP^k2C%EpVY#nB9vG#g`Z&6Ss&GefN6Ps~hH9i#)2+In.BmYQ~6im|tZ' );
define( 'WP_CACHE_KEY_SALT', 'M<f&p,:Cp$pb{N!s-58U-:| A2@Q$AeN8=~YTZ7dt9:6@@&`!U/ _Yp:n=B#}m;?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
