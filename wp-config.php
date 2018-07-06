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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'debran5_wp921');

/** MySQL database username */
define('DB_USER', 'debran5_wp921');

/** MySQL database password */
define('DB_PASSWORD', '.82LiQp.S5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a95pqxndhzaxstobq6dd7kaynbt0myhzul7ygt48imlqyna0iypfyvvj6lkvhedo');
define('SECURE_AUTH_KEY',  'u1htmksejl9orj8waseq8fzpjxp5cu1ei9n77wha4ftt6qi4kpglu3utkqv9alul');
define('LOGGED_IN_KEY',    '4brk7zjbrstlgnfvmmwzj16164yw0gyvhy9mx7yt20q9ncvunn2webwqqlpqlp8u');
define('NONCE_KEY',        'o67lewumt1yzevjjnwebnaox0toy7pbukngxyv5vdvutngnoqqdncuhkhsfikn9z');
define('AUTH_SALT',        'c1qmotrjeqz8tq5pxox6rli2ejc8hkyszlaicsrikoha3j3r9wdse7332tyas3ok');
define('SECURE_AUTH_SALT', 'iyrukhxr6fepaln9pl7i7fkzajydzs4aqvlzzis99sbnv8xrqgdi4ygfn7zk5xhf');
define('LOGGED_IN_SALT',   'calsinnrz9jrjsycrdlglbe4f3zqwa5smtria9tpyjhyk1415pfyxfrau9gr5vw7');
define('NONCE_SALT',       'asdp50lff7fv83cyn3p7nlldfcovhtsguncjzu7vzc9tsd2nxkrr1f6umlkunnos');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpho_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
