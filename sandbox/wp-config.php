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
define( 'DB_NAME', 'o255754_ucyj1' );

/** Database username */
define( 'DB_USER', 'o255754_ucyj1' );

/** Database password */
define( 'DB_PASSWORD', 'T.Mahp2VSU68ynLj08c31' );

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
define('AUTH_KEY',         'F9tbkfMWNUA98uMvVONPdotYxw1qZBcTOTZ6JKL8yiBVTvkxuTEzllXzLQ5EQFKk');
define('SECURE_AUTH_KEY',  'CfL56dSlagz8Hfsfe12rP3mPW9u4X6wB8VWriLHi9rlqg4PiYdzYHjrjT7TJY0iI');
define('LOGGED_IN_KEY',    'BK3jAirr6s1OhLXIce2oJn5djF6xcGc1M1tTiEYujJ4N3qmhtDYAX9230VIOq03L');
define('NONCE_KEY',        '9RbhT2IyL4qLaNBQztBpwG69TXObIgOxBnUVTfRnAniZHgfubT4FlLoo1j5wNHf8');
define('AUTH_SALT',        '1zygM9C3oDLL1oVMR7oONAg0KfwXFoUymB4phqPHPWfaACVJqa3ZU263voVVmFd1');
define('SECURE_AUTH_SALT', 'RX4dg23GqSogb4SepigoUby5lkyOjIjv7xghZyuI7CkA27wUkmjZIAEtETNEWdOl');
define('LOGGED_IN_SALT',   '2HdiIam6Ckeuf3e9d96S9nr4LFzINBSpTMbrCLKEHnBB28CXQ4PAYNqHjk4tZonz');
define('NONCE_SALT',       '3NMKnZaSzNEb4HtLS8VnZMEaHc22JpUk9eNCPF9AjaN5qsh0iFG4RgEPIl65alZo');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vofd_';

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
