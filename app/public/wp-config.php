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


define('AUTH_KEY',         'xA4ytC9Dt9KdaFQiC5ZBFcWRADbTC18aCl4AL2MlBEed6eqbJD/ST2ZEdqbjXNGPrOAuIHTw2y3izSmRO9k/Bg==');
define('SECURE_AUTH_KEY',  '3HDe5z5zXjS7SfiskoBovN6SPKSuVzWeR9I6xAcIik4HiXaYU3J4cNv3UbjUIFQX0srZUlI7J4bAmdPlqMHvLQ==');
define('LOGGED_IN_KEY',    'PgDopfX6opQK6RjKmbYp5oHAvFE7uvZa+2fpxYFGd73sOYQc4ZDZL3qEndkyHdcvhar7CiN/WERK2NEpwM2k8A==');
define('NONCE_KEY',        'InG1oTqOjuGLbUIWHoqfwXUAEnUgLuvfpJZT6XhvFxNsAe7tMWrZMYz1ihg1YF/jNOCek8ENb5C6sy1oxk2ODQ==');
define('AUTH_SALT',        'xmkp3kDY+M+5LxyBNFZURC3/OGhCtpKB+Y3QZD2Npvr+vezK15m6PksXW3Zof+t6F5GpFfFOcZiUeWrXaWoJxA==');
define('SECURE_AUTH_SALT', 'va/sCPZv9OYfRorl+sbhFltLcUTU0GDt4l4KnKl6nEkZsPMDh92xNF2fxS1bbZVwLUx1xbW2SO4DWAjPXXGg+A==');
define('LOGGED_IN_SALT',   'AuU/+kJOosmY13vygbI9smV5hn5vj+7vPHTugY0vMJ3RP9eL6RtsTVytDFhR7GZqAjYRqAGnU0udZmdIjSohJw==');
define('NONCE_SALT',       '/4ly6lAInK0Obz6+CIvDbZzZQ3MhcAE0SJwrLOE7+t8irqSO99LmZ7G7YnCb9MeCdbMZhGRi2NnyO/YcVSfW/g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
