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
define('DB_NAME', 'rarjbgmy_diver');

/** MySQL database username */
define('DB_USER', 'rarjbgmy_diver');

/** MySQL database password */
define('DB_PASSWORD', 'rarjbgmy_diver');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '0c92b9a39af475e14e488e0e4187dbeef8c8168bb9780968a0a8cbe6d18f04dd');
define('SECURE_AUTH_KEY', '51cfa54590fd9b1f644a2eda97b08fe2648b97931a9a355cf8bda8221c760136');
define('LOGGED_IN_KEY', '7e4cf77b0396fb8bfb9382ccd52522ea4e6da2e9a8b8ae156c5030b0fd50a5b3');
define('NONCE_KEY', 'b50b049477e8dfb6a3955e6bd0319f4084618b67e2eb39be2cdacd5ad8675788');
define('AUTH_SALT', '24eaf7c9a5edf028cc8dbd40d4b4ce889dfa8c903e927f88a8ec8822963c9d1e');
define('SECURE_AUTH_SALT', '1ab8ebda36f1add49e090c85aa029528eb204ae7a41d9888e43550591780f2b2');
define('LOGGED_IN_SALT', 'cd7742a89d976da6f5968046e49cda529b89d67aba57151240b9727eede0c57a');
define('NONCE_SALT', '62b689feea06a8f354a492c24ac5fee7eae690aff2e57ce7bb3b69198afe1c5b');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tMY_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
