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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0#8^1/~Yb7mFO)!B>Pla(w++}y_ )M6)9Tr!)3VcCN7.wc)A]?4=d1psnEpNA@;.' );
define( 'SECURE_AUTH_KEY',  'a2]//=a%|Q]F+lAG(D>2Rj~?xd9~BtJ<R%.{r+IM>r5pX7yVpactKg#hWo(RUx[M' );
define( 'LOGGED_IN_KEY',    '`wp5M2e%w=i0yqFq$w(g}a 9z]^a(JoRDIw8c/H8i2e,|;fi.Oplv[~&4eDuv`x-' );
define( 'NONCE_KEY',        '31o-__7aELr;/epVk(MD@|G<.aqlx_^iF7!Yg.jg,Hp|sNKEu+J$tm-Z~e2B}QM#' );
define( 'AUTH_SALT',        '3rW;gS!ZgQ@R@hV2pUlf$[sM,b4z:b]77bE_O+U?1Iw.Uo/X7eN`gf!<c,!.QM_W' );
define( 'SECURE_AUTH_SALT', '$  d|pX_K7 ^}c*5LR%b=q[`X[p:c/f9b09J`TSbIyOKNjB{mV+:}of.S8zGzN8n' );
define( 'LOGGED_IN_SALT',   'v~bK?}FX }lHd6pcY+CW{w=:Fiz=?FnJ_E>(LFRKdM63Rb(wZGWEFr;je>i3v[qy' );
define( 'NONCE_SALT',       ' SU4^OA7r?[a&={>O1y8(u.$1$MzAj5R)^ROSC R<B$PFYcSs #;m8p*uy&OI6*)' );

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
