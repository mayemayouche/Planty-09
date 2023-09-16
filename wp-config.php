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
define('AUTH_KEY',         'HY6jZqkNpWN4PaAt2VFnXySYk0X1+35fUwwbss4ss/pM5wjqMM+tI63/FFY1wQCOPmUVw2Gdd1NSRqSCmW3q4g==');
define('SECURE_AUTH_KEY',  'HabojmgsLDHIAxF3PaeAOljplKtflkanLgjZz9jXmGFSHGDa98t1UaVUkJAzvGqj8fg4sTYCGTSwuxDwy+pDEw==');
define('LOGGED_IN_KEY',    'xO129fzV708hgxkZER/6bF9j6yRyZ6umDegyxuBL7DW/t8N0RUL/eBOUaJjIbIV66Gg5AeLD0mUd1v4GIde7zg==');
define('NONCE_KEY',        'B5rj7mOWc4Qh0zW3e4IsJM8cbCiTrsrnmu/up0zX9j1+/3ANntjgfOk/7jOX+/07n1hM4V6sKMYjs/Obd3EkDA==');
define('AUTH_SALT',        '1Lv4iu5vSNdvjpG71O3Opy+WO/beX12OCaNkmTMrV511E3rUBsxr7l4Xr3fFTPoimcuxhhj73JcZa7NyfNC24w==');
define('SECURE_AUTH_SALT', 'Av/MPeCz/9/S0DNYR8aeviqmbFpBzESDyCH+T6D6Zguy9JijoVlmXXymmj+6gSskiwt88qSi9/wxHs+0++BW1Q==');
define('LOGGED_IN_SALT',   'HFS0Ba9IqgW7oVmTlEgFXZ2xTq6kHroWuPNPdMEiEO7FUR0wCHvLRspH7KFHltBj3bFMUxIgGffk3b9rMlvHXg==');
define('NONCE_SALT',       'JqH4RZFbOc3vRnGt44UQ7NqvxeDFVcFvjhiuu4M7sU9spO45OSccX3YHOsCJgsBg6e8c1Ea2Y0gdxY7vhUrS1Q==');


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
