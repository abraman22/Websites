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
define('DB_NAME', 'thecourtneydavis');

/** MySQL database username */
define('DB_USER', 'mangodeveloper');

/** MySQL database password */
define('DB_PASSWORD', 'mangoDEV');

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
define('AUTH_KEY',         'fSLsORFUysSz13hdGqK87Xu8Hwr0dxpPvFgMLD1qdNd56mcokx7HC6H5PGdaJt8d');
define('SECURE_AUTH_KEY',  'E0VLS2XgyUZESonImT1fwwTU6eb0YH6IMp4b4Dl9KnDVvUdugv2XVA1ewvKEkFPH');
define('LOGGED_IN_KEY',    '2L7CmvSRcxE0o9GzGpVatsw5w29meaDGWGQbbswm4862SZWXtgXx8SHL4P0rjR71');
define('NONCE_KEY',        'pkcQKdVHB9N3Z9OtQTQIeBB4U4tx5NkxJ7V2e9p4UgmPOMHfLWdN0qIK1aBMZKEq');
define('AUTH_SALT',        'ROku61GlCuplzdrz0CNs6n0SLJjem38qpUSYb9Vp1j9DMlCjZmv9spGUUwmxeDo8');
define('SECURE_AUTH_SALT', 'DH1J2Uwfrbw6Jl3lawpyz13zBdVIYlWZNO4N0ljBV1iJfSvQ5dGpTkWaCjCcPRNN');
define('LOGGED_IN_SALT',   'CqfJXm2z8ydh6LuyeOAm23HTUJ0lnX5HabA2o31PRztKTq7XR29LU0J1BA5NM8tW');
define('NONCE_SALT',       'MMx7yUbrRslRFbxObAnWy0MWql9IyesjN6gcsHM86h5o9TMOSTFM7h89zIOgrH6M');

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
