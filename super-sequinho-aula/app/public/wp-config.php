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
define('AUTH_KEY',         'DrNkJ6IQGhevljREBSh29Ne2AJ/kyrQKdUM/KYv8gdlS/jQYM2ReG8szktVFjFnZF8yneTwrMpSfB0vx/Ddwfg==');
define('SECURE_AUTH_KEY',  'IDSOa0wP19YqkHY3oDGR0K0dN/jgHo5KeOsZlcfIsLFgyqTgIbvqjUUiZTdjMugZBGhMxfI0JyttvAKU5iwINw==');
define('LOGGED_IN_KEY',    'QK52CTc//nW32SjfzPNv2TCgWJO5zl4njti3ihscyYLEQBS1+jndOYgoYKqr/DkuX1PhJfj5c1CnXzb+LE8ydA==');
define('NONCE_KEY',        'KX1ZhtvYj/DZpUari/BaCQTAfs/vP3hyo1XUjBJVzSXOUn6iVO/VWINUyTxyk+KAAjJO5V443A1seUz3GwZT8w==');
define('AUTH_SALT',        'Poo3uDq9UQtNr7PMK88GF15aFaqn+IyOqZq90toLXc/8G0MEF7maM1ec9i8xcq5EP0BUQ5vYHcfKejrQcZv3cQ==');
define('SECURE_AUTH_SALT', 'AbYbzJxAlsSwpCaxYGq64aZUaVFYCwrXsR07TWZmQqoMJrgpjG6FWPSsQbSir/BtdiiNzKYw5L4mbws9yGy0Sw==');
define('LOGGED_IN_SALT',   'Km7eIBQJ7vVULF2ghdSwHo9tS/w61kiCIBqb/fiOrqg8UYP49fzZ5lVyzVLaHhPhYqORK0dCfe6G6+udISywtQ==');
define('NONCE_SALT',       'L6IeFGGA86/W82/ofsQQCR9dbEamjP77n5vBty3phFnk5dGlkRy4Qo6EAs3TfepotrYpr8Ae5LIQmMo5gJuxhw==');


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
