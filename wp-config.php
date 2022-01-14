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
define( 'DB_NAME', 'uniqueflim_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'B]l8&wnkM^HuIz/xo.vgY4X]x3L8SUOMl8>q`CD=MtJDPXrBm?g?B(IwbT8}Zxrb' );
define( 'SECURE_AUTH_KEY',  'Fkd=oUl,/5HZy,xa$=A!z3rH2VkmT`*%<_o<<sHg Qo5J}U^ynk<S7)D]f;0i~4a' );
define( 'LOGGED_IN_KEY',    'PMB0>wbu/kcU3WE?8dC#1]l1Kv.M-Sc9u^F!`=k`)+AG1GC/<`a1cToY:?%:+&uX' );
define( 'NONCE_KEY',        '#^l!c)4WEST?Gd@[{y{73_LtsbA+A>7#J;2$P_?jeB@{9+R_;_[x2^0.T[/r~5rS' );
define( 'AUTH_SALT',        '#dcv<|kf+Nw[IczNIeuuJk<8:MhK*SKps?1}W,~|.Co4u:#L36R.|Kwzzk63e!BR' );
define( 'SECURE_AUTH_SALT', ' 8iSw%)[K7KhVkw=y^rBNh?dReBoEZAZw1 6vQKB~`akhsXr,o5$rl(:4EYs3rA/' );
define( 'LOGGED_IN_SALT',   'qD?0Ax)uj=gf?|sP~-k0>1q}pUfD-X+$+um#lP[ayO}52^2MmD|gNy$a!ClJk;gh' );
define( 'NONCE_SALT',       '1|}{ Gdov K~s YjdAOEn6@niu|26iP6Ow1C(xCwQ_>O- 5:tUo1@93rQJC>:E&_' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
