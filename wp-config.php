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
define( 'DB_NAME', 'ibbhaber' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ag9RnmlCcfX0xTyC0foRHE2LZ0SHnZOPPN1pYh1u99FG5LnBh1MoLMPxtwYBsGIF' );
define( 'SECURE_AUTH_KEY',  'pIj7s1biHQpwSqCTy0nWNFEVadhl5RywmNZyH2TWnVjxZxCXRuAkF9L3K4MZa9vn' );
define( 'LOGGED_IN_KEY',    'Bl0h8ZbL0NtirLrxwDOEJNHec0UojxCutjLc3QzfDnrNvyZav9JMF81bM0YAbSVt' );
define( 'NONCE_KEY',        'RDFAAiRDI4kfywJroWm8YFUgxl6CsD3TqOXRaxEOSxCdQ68D1tbbuPC2i8pLz58O' );
define( 'AUTH_SALT',        'h5Tg4OLAxB9cvncsvhFpWU6yJdbJSJMWrI08gVGY0uotgsCHd4RYSmFE4fWToSei' );
define( 'SECURE_AUTH_SALT', 'Hv8VvlFwm9W9teEtCBXIU0fRV7gQhPxYsDmnmjJ9pqaKGP8LpDyKgSJgNos3cFlM' );
define( 'LOGGED_IN_SALT',   'dqnOaO66lEWRKKOm6aV9j2aJCoHH4xhcH1aaEvlFGrvJmugbqMcXnuQXhOQx6ED0' );
define( 'NONCE_SALT',       'N1jPCzc6rtIMyHrusx1h1DhjDXGHKEnRMlo1IBlqYbSQRF9QjB88jPllg7tCl5GL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
