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
define( 'DB_NAME', 'jardindu_wp345' );

/** MySQL database username */
define( 'DB_USER', 'jardindu_wp345' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pS9]tsd5!2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b0zprnszkjyx29jjjgwcabxkdnpnaxi9xcbztdxa7hxzjuocpfhaiqjsh5dm558x' );
define( 'SECURE_AUTH_KEY',  'dpeskubafa9gunrjjqsywcdptwsp9ug5loowbnhcaafdfggm4cyqmtvvowtt1yxb' );
define( 'LOGGED_IN_KEY',    '6f9tpkfxzjfd94fesudh7lbynjiuuf0ti6cayncl0u0yjryrbm2er7rl13u6ylox' );
define( 'NONCE_KEY',        'fw0eszt8jkknorqtdub9nkgho5vk231dfylktrphhdiynhsrhmd9k7nogff6sb8a' );
define( 'AUTH_SALT',        '1ru90bkylkj0tpcmab9ij3aacj0eqazb6bpe8r0xugfrtcshbxvznit38qvjs39a' );
define( 'SECURE_AUTH_SALT', 'df8kl9hkib756t86mlk7fsjjijybfpygbcjp50qbzamcfgwnsvz31jazpjpattff' );
define( 'LOGGED_IN_SALT',   'rgvcxtezfilfkn4z0ydypglsa569tsthbtvamjykw21zfpklbetxv86ng5xwkisx' );
define( 'NONCE_SALT',       'qhgwlyvxqigtm5mqfeugjrx6df4uglfx5wipqi2zwynzcsox0zx0carz6hacxxxb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj0_';

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
