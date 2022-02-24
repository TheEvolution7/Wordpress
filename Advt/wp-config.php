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
define( 'DB_NAME', 'oiywldmy_advt' );

/** MySQL database username */
define( 'DB_USER', 'oiywldmy_advt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oiywldmy_advt' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n<FQ^F|,?Ly>9v8.V=PCd?>@,t$<kw?A]Cb>_Qp!-Al,5[cy{To,QbZ?{W {M]7#' );
define( 'SECURE_AUTH_KEY',  '|w#1gOD|l`$[N/11iRKmrU(](B#rC,[efTQa3,Fo^w`}7kxE{RkMLcMj|m2EMJ[L' );
define( 'LOGGED_IN_KEY',    'G:? B|<[VOys8:XMx.$68inO{MAz.c|1Ed:3*xs9wlePYDqw1P}gNS<RAPW|$b2c' );
define( 'NONCE_KEY',        '%5E@U=KKbe0>Q>r6%Y/5fDw=Ia~Jhb~dtN63Fb 43b}C![Y:cx[GZ ~pdEvlP L6' );
define( 'AUTH_SALT',        '+y9yLM5Uytg{YFK:$fNUB+@sHMvhelW^0y7dlD<:=YU=qBH?;40@K3P#R96Q;@|}' );
define( 'SECURE_AUTH_SALT', 'TA]yQgEnItCS9h(/NcIfo;Fj+ici?cLu Y] }-6Cb3v3<%_6]5(]V61mPE2F _90' );
define( 'LOGGED_IN_SALT',   '~?Zr1_mDMb0=LXt>=X5pwzuPkgTH(tw6p|h@|i`{Lc =<?hcEm8VniY}uXll%]5l' );
define( 'NONCE_SALT',       '.7zYz3n2[gV_d(v7>o.?>Z5X.R}(xA+d^lcL6~<?$8pY`heY^{F*e<q||c_>wahW' );

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
