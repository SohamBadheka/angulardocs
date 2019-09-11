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
define('DB_NAME', 'i538135_wp3');

/** MySQL database username */
define('DB_USER', 'i538135_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'H][hKBJN5elVB(W7eG(31#~0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'HjxHFcuQn9kjYzqijuYO8tUA8TZUdTRw7dchvlJYr6T9UnebslGLqcLYLFyCrSP7');
define('SECURE_AUTH_KEY',  'gv1UP4ByoxbCcSfy11yjkHeyYt2WuKMC7ixMidSFWvg18Vdy3BTvluJRaWMLgl9X');
define('LOGGED_IN_KEY',    'dEvR3DJcMHMcP2XsMaVmek06onyphOlvPeIrEdzbhUaqGLN21h8K0EOcLqDoQnNn');
define('NONCE_KEY',        '7XF4xKrkympKBDcxDhH3pqL7tSNHGLCScdy33l8QiDUxj7c9jTftgCpxnw71tEZA');
define('AUTH_SALT',        'BPSZOFD0buB1B1ck0Ocz6vUegrmCkRUCqQzDR32BIgp65z5PevstUV3DvtUbjO3Z');
define('SECURE_AUTH_SALT', 'T6VZvLZz5rYYRK8evzVnsjKRIsa2cjCgsXEAQE6dcoSc0qLnHBwJYzgnTD2JkHe7');
define('LOGGED_IN_SALT',   'LIYUfOEl4PDL1ojLz8obPEKzhzjGGW7kb2ntuHxUpgcpoYsYbFBU96y04mGXS8gX');
define('NONCE_SALT',       'YOThmMyCbjBVSAYgBDOe9W1XynKRmk9EGtyxJW8JRPA8pjImxwUOF5kdQCX5QCe5');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
