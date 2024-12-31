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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9076378_zrxt1' );

/** Database username */
define( 'DB_USER', 'i9076378_zrxt1' );

/** Database password */
define( 'DB_PASSWORD', 'U.mbGDhE0quXeqrHG6C67' );

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
define('AUTH_KEY',         'LsC8kXmUdX2IiUz5Joo5z0MscyHPeN8rGgvla84mZOGSCrE4e2XmjZeeipYzOaMY');
define('SECURE_AUTH_KEY',  'DsZS5XH8yiXggTSdu4HhSK8bn8nexI72A4pzxHClo81dI3MV0xK7Wh182b3aYZgT');
define('LOGGED_IN_KEY',    'tTpksimiQTNs93MqlAWZrOv3gHjQvZJXLMDp6UCx2ToWaGQS9oEuNZZCk5sFI6V1');
define('NONCE_KEY',        '90amwJ6Rmk6MV1mfvokduP6s41Rh3dqWRDlHJCdXG26CQKK6ri3lLcYa1mBHDBZf');
define('AUTH_SALT',        'HsxmztGHuke4qmcDEMBDy6j01eueNhIfGxULbS3gS0h0BllFnQJKPg9SynRONoDO');
define('SECURE_AUTH_SALT', 'vTQBm0GDWIUbwdBl5lVbNZXRweNxWCuJRYuNDxqytWYXdk43sHeLplfOh4thJ7Zg');
define('LOGGED_IN_SALT',   'viVUZ3PYVFOxrd7zW1JweL5XpJMrx1sQIQh9z7IH4nxhyC7SE59qnSt8miDywdXe');
define('NONCE_SALT',       'ahWm8J3ss9WwpxQ1G1s2Xa5csg4lG1Q32oq48J2AeqGflDfVKH7GYyGMlnJbZXJJ');

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
$table_prefix = 'sliw_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
