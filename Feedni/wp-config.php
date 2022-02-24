<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'oiywldmy_feedni' );

/** MySQL database username */
define( 'DB_USER', 'oiywldmy_feedni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oiywldmy__feedni' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '97*!{Wv*2ySv6M%6@^h6B$Q&p%):js<uzr$f|gna7`nr;1k%i@u=Lb;vU?)z+nFL' );
define( 'SECURE_AUTH_KEY',  '3twmUEd[SGm:iTx;),bK@dU{%|9D=^fq!DA3})>_oo8WqF^6>nep>]#vn&K_I+%p' );
define( 'LOGGED_IN_KEY',    'm2hg{JC*5m/ld3GboJD7UO.6_DA6#$N-Nw;bV%TG5ivB5K[-* 6mc(bu&1c3YzuU' );
define( 'NONCE_KEY',        '#)(=h`Ft|x{/d~8-;AbFByS*23CRpuxX`{1Cv:bO1cxuZYo?c6uHX{x:oz-6?Ps)' );
define( 'AUTH_SALT',        '}e|/.yn1Pn13KIqa(O_>x%m|An&B8=Ld|c*g4(=.dI4K9hG4l1T8 /N AL_[$5D-' );
define( 'SECURE_AUTH_SALT', '6FB27pECFr3PK@vL+A1rdFzw10lt|55K8=jcuQov8#IN#FX:0!1;7a{SXt}p>)b0' );
define( 'LOGGED_IN_SALT',   ' (CY8s5o`vA.sxa];A2|F~U()Yl}u}SS`w8.,A7=OBCCMjSs BJ-1XT1T{I)I:^O' );
define( 'NONCE_SALT',       '0fHD*>z4{D0D>.?lbFPV@mC*dJnN=WaUpuV$s:!u>Zkbs_r^[!V$aRM#`rn5tly:' );

/**#@-*/

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
