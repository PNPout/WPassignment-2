<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nd+JoABvHzKsYwpZG0D/07Ol0CW1jCDpj1MBOpF5ahqrXdzb8D/zbUkO/E20Ouu932vyiXjVijCl+MGrQ/Mnkg==');
define('SECURE_AUTH_KEY',  'm8SrqW5XtZqKdShYrc78YKkf8+IyBiBynNEHcoCKFy0T7ckH2xydIHvSUc22DmBdCsLjr0ahMWSR00QGLuLlNw==');
define('LOGGED_IN_KEY',    'U5aIdBcQaTAfOVeGelZN/QVtc9lHR5lFG0pgVoX4qDr2AAB3AUfTtDxzcQo6y9v3UEucC6R9SCVemFaARWiukw==');
define('NONCE_KEY',        'Ua8XWbFrb6uVTk6Jmzp6EMeEtY6BFTqVM4bQjCNmtFgQxXs1x66Pq4a+xSn7vsCEDufwCj0RCyweyWi6n/AYrw==');
define('AUTH_SALT',        'vb0N3Yom+Ikq2aWXXCQYrb02kanWNbDHQe9VUmGM/+SEA3ITsF8F9BMS5BSEcUAjvKwdwhirMVz6skZ08gkIog==');
define('SECURE_AUTH_SALT', 'mx5LJJ0s1v+JBND1cJ8RbgSoPKFiz6mfsZ9vBEdLs4AgSB1Fa8Y6bSTsotw8cO+P3LX5ceC7TpCV3XbEHE+coQ==');
define('LOGGED_IN_SALT',   'SuevMENGg1GrAbMH5zEOOTaH4xAM7o/pi2abQ6g5f65bnAajgx6rzb5xh6JZTXcMecZ1Fbl3zkkN8OFLWUt6iQ==');
define('NONCE_SALT',       '0tAKBpeAgRkPzS2/6xqaci5XHzn+IJGRj8lzkNPxc+GzYRH3P3mJPSn24pUQ/0O0JvhSeXQjxsCQGoNqUgYa5w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
