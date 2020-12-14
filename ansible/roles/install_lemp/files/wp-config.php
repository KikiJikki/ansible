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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Useruseruser@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '9<6RUnNs6]}!HH`oL+#R ,c]2Zu]$8Mk_XQ]Rln _Tapm=_yo0I}B|U|};z?Bezf');
define('SECURE_AUTH_KEY',  's??G|M1kwBQIL^7)s+w2d*DF>l5x{GSUDsqK]g!(rpRnrg{(D4%%@zj;%vJ8z;84');
define('LOGGED_IN_KEY',    'VGUG]l&z^hT?l+.+KR5[-}mVDyDEBNFH[:{`BmE,RZR5KD#VD}Fn|!~K<Ln0[XV-');
define('NONCE_KEY',        'ppP}E;Uw1K[z>-ER=y.+*|ON7,x.$@7~*>|bPm+8ik=N*.&ydRhd a26fftm{sP ');
define('AUTH_SALT',        'v!7M,+o_k:j}`Kge8uw%vru)Ii.i-9.AcVzAdX,>Z65?h$&{=Cqd1<C%MwLMp.=G');
define('SECURE_AUTH_SALT', '/Ux5:8$/&<~72O=p_W0_k z+gPf:AZklRECv1H?9Z4s0:LCp9j^+mE8|Wa?KA2E8');
define('LOGGED_IN_SALT',   'i]P-b.53E]S+P&<nZesJ r4]4UoN}nVbU9WQ]z)UWoq#Z>8djz~>L7d:K85BV&c}');
define('NONCE_SALT',       'k~rj[^9.CAO<Xz$Vt0XF,u5OkhkR `&%{R-GNIoH/ZCv+5F2{qHFtA/I0~65:(zL');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
