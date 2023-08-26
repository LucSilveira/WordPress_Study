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
define('AUTH_KEY',         'w6hxpZhsc2mvuWunxva2NsZl/2cs0Q9iBcCWUjyzuq3wEbfLvN6lAuQQDKDJjm97ibojw3rjJ437/F0CGZzbqw==');
define('SECURE_AUTH_KEY',  'IfTZhJk8z/gEU0c/WRc4SnMezMmZDokwKzZXoiCynyoN4kuB0y/mPUeJBntEzyOZhToNrC5jdMbE+/mJHBDe6Q==');
define('LOGGED_IN_KEY',    '/8JX3LFPjgGz/9u+V/EY9oJ3rV7W9mv9Cnr3B+p8CwnTDaI56S2eXaLNoCkMVmAij5lEcYl4b8013dmJ8iI6gw==');
define('NONCE_KEY',        'xoR7AlEBb5SitTr8FWXaK76Bc2cw/qJBuKOavvDhxrUuEDrd7vPOY/l5S2GyHvcLWXyseerM2bAvd1OwqFS81Q==');
define('AUTH_SALT',        'HHK02Cj2Z5ZhWRjeFDT0VkSaBQKqVPZOJU9EO+ugzMTuHTwGI91VjKKbFDWpdZZktqX91vOHU5UsSwhvlZMHIQ==');
define('SECURE_AUTH_SALT', 'U0X7nebmdy8Pfi0wFofGAXcLIbc3vqrE82BoriVwogk3DvQcnpvwC1arSzrb9z4uZ/BUWaSDSb98/9X2RPoJJw==');
define('LOGGED_IN_SALT',   'F2s4LU08G9pamqpfaZdyM1AjLAk+qovrl20qYrvAuPBqv7QdmcA5LuL3vYvVpRczbZ254UZzOybpYx5buAr6Aw==');
define('NONCE_SALT',       'wGBQuv0lnxT8ACizxWBvJ65Ziw0it8HCbJuPavx5EM1+SHMpw07gmxNa6yUgbmPifJeE3QLoI2CK374YQCkfmg==');


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
