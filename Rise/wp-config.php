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
define( 'DB_NAME', 'rarjbgmy_rise' );

/** MySQL database username */
define( 'DB_USER', 'rarjbgmy_rise' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rarjbgmy_rise' );

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
define( 'AUTH_KEY',         '4#9Pf49YHmH.W9.T{.-?M,+.r}her[*Q{|*v9k]#]nx]<{P<(eh=~T]WnS0&ZF/-' );
define( 'SECURE_AUTH_KEY',  'o/A}!P!jHktqSI%#*gF<.C48)FyV[li=jp;vU<,PAk<*ds31rGJ;C&$[[2u^HA5#' );
define( 'LOGGED_IN_KEY',    '`U^Cax;EwY$9yW<u${Yee]Aq7cmj2&0oUj]S_|G-_7{_Bd]TmsyDK:[UK0[,~ySy' );
define( 'NONCE_KEY',        'bHkP,hkq!D(^0I_tcKdCbh68Gi}4RoAS^jyY6]B_`{04Bhr[%y7(n(akaT>P~L{k' );
define( 'AUTH_SALT',        'ZMY /NQdW#E=GAH%G*n<d&*?u*LO^y?S]QDOHUjn~$%isD9a>Lo=LkR[^~,p?!P4' );
define( 'SECURE_AUTH_SALT', '$>UH<$bVP:H5N}$TsJ$,Tz|K?`AgC46/#c}M^Fhg/lk`?>c$&dw$8k9DnlP8KheY' );
define( 'LOGGED_IN_SALT',   '/,oQO@6+iY ;[BMe3@6YMK3devn<3#xlSAno@+0aE(u;DT?GrHjOK]ar[QA)nEst' );
define( 'NONCE_SALT',       '^qv;|Fxhj}0jB:OT!c}lj|2+<&@q4Wsaj){THv]C`Rb=9,3z1>uiWwvZN@svjAN?' );

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
