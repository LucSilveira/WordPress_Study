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
define('AUTH_KEY',         'cVIH0X8MyXp2Odb4/Q7WGI2+hy2c9AGCLpaSRnHxtb0HCDJs2I6uKZVsskV8od5ZtJ9ZnrT7NCwCdcdELY5o5A==');
define('SECURE_AUTH_KEY',  'AMQK4z7zgiSbhy0LxK9yw4zZnUlzj0oVwvN5qla2urXLPPkA7slsRsWCIErsW6Me51C+c8MnUku4mSE1qW9sgQ==');
define('LOGGED_IN_KEY',    'MNmZBjuxk571xeJ9OwLlI7thUHj5t277fen2D5fUXyhyuk/yTA9w5MfjFNNvgDrfh2ihqUiRCqehldv2mjZ+IA==');
define('NONCE_KEY',        'mhn61I78ehkhVGpI5Iz2WJ2jH/I5bU+y3ws3WnyfGn4AXsBqeYjKpkvkAOJ6VWjfVFTCX74a4b84fA9uDm1Zpw==');
define('AUTH_SALT',        'uXQwVWVQ6gGs6Y1OTQaM76QRBAZQ2NZqhWq994e+zGcZ0jiMx9Im2r1LYFrPpQ+Mqq2nVC3yb/DOIxz1mcSDFQ==');
define('SECURE_AUTH_SALT', 'LTzxWQ0Kh8BnO6obq7LLvrGkT8wHH8yITmBrN9Qnmlo2CB9xg6rGP671gvw9fCN0b1eDTRaTFHkauIPTYr+IAw==');
define('LOGGED_IN_SALT',   'AKXz3i6tabPPxf+UGXE3c2bOAsq9qaIFL/cSdqWweHbNlAdGthd9LEm51Xt/sOAHNK1JucZLgUyuAIb7UlHSYQ==');
define('NONCE_SALT',       'HP2Nn5PNQUsHLWqq2sFsx/GqXg4vLIranjzTP7KW38ZHSlxDnhUx9L5OSksppjQOEnpbIHeW4u0LWeVIdL0Dpw==');


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
