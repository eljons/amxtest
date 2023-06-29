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
define( 'DB_NAME', 'amx' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'v3RHXQJ1zokOvmJo9pyhpT7eoeTkAMZ8YRrnU7S130GfaEM3xYDe5XZcvPGPpQlR' );
define( 'SECURE_AUTH_KEY',  'v42oS8JVuLUFhaOxC8VK6Ln8BGYsGZPP58Ss6zUWAPQE6caKCogaoPydefQ4t4vY' );
define( 'LOGGED_IN_KEY',    '6hK0C1N8IAoM38Rzfx7oQgZSElU4TyY7N5EP9Qsi7RdBBPaVwLrVSY0CM3WZDSEU' );
define( 'NONCE_KEY',        'yc7ELittINjvJdZ85k6y2ggc2tIkhktuR5C0AldaBtwhrnFBFK3NHF1Ck8zL3Ofl' );
define( 'AUTH_SALT',        'VCqVHDCcz33r6EoNyUoCLEKYTbbSjtXHHCYUQ2oG71ff3DwV1aHeMhNx0TkbnzGS' );
define( 'SECURE_AUTH_SALT', 'sbtyDeZXGyKnjaYAhvtweoc2BAyjCEMwABlf6pxNCkB5IILR3QA3qH2ecPbxaW5z' );
define( 'LOGGED_IN_SALT',   '9Udxz3zM5lpgnNJug0jhrwAl0FPDbPWZy1JajuEw9qxKtDonKLIeDVHHsV0QnWmo' );
define( 'NONCE_SALT',       'NNCs7djpouGzGbfMNnBFuLnOwBkoiOqI6VUz9Dz8EbXRPM0MwQdWVOGPuAunTchA' );

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
