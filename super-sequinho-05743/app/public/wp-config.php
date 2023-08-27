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
define('AUTH_KEY',         'OWf7H+7s31Yx0XHkfRtLq0/MpQus0Xof75C94a56pdyNySkPop7zjlTbkh+j8rdr3BiQHys9pfyTRGq/WYujmQ==');
define('SECURE_AUTH_KEY',  'UL2K2Pn5Z7smdSv/rm2J3FS2xg83JytS/ELjyZizussLo6OmGJgqVl/CEvXAlMjNWWZQ0Qbu8XUy4Gyhmbp8Yw==');
define('LOGGED_IN_KEY',    '9ar+MOCp3SuJYiN4lpmyYTV79Ymb5HZdx68bKqExS9FBgYLNo1razXXRN7P/kLmSGkHRVL3ErbLDooAK7nHYPw==');
define('NONCE_KEY',        'mw1sbYQbLYRxvIQpNp7+G4bc8ul9X37i/IUf6sbbzwxEfrwUBnFnxjUzpCuG+hkUDu3TpfSkQqGrNrk7V9v8wg==');
define('AUTH_SALT',        'vWVFiQOP+fZFtPXu1YzwmKOrguWGndt9wRp3UXG8UncyG8+5/1xJpYmKsUy7IDkefcxa8W+IyMItzFZqxetw/g==');
define('SECURE_AUTH_SALT', 'z7TeLS4L2BLsXaW/UjBPQ8r4yEtcpxM8Zu1qST+15+0KkYvL9uCjXbUK0Z80DJJrzhq9jQxces7bxUbCZdpOcw==');
define('LOGGED_IN_SALT',   'sfkuz9mJLKVWViYd6KbZ+H6AmdV4McujNAnCEN1RBnjpNUFBA+nLNQBAPRJCy8tdBMFTRI2CXLi+9BnvbF1eTA==');
define('NONCE_SALT',       'RBsL8kwm571yyYsOEbMntI3MqDPaNwAzGl08u/scSZRgkrJ447jLVw7uxf4LdDinOD2JTLbtpGjYoC2UGp7rYA==');


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
