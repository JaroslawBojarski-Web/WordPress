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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'x9sDjnJxg}O pt*J+a03^c=QgBhE(L3G`^~Tcv@OX}QBT!BUE+4J@/T#DZ{0szo%' );
define( 'SECURE_AUTH_KEY',  '6CkrN8{$YI]O%fsf).Lx[w268v#yhw]W_=#^@;g<!]Tdi5<]]54yC0~XUE v}yTi' );
define( 'LOGGED_IN_KEY',    '-a4<YI.zpE8?_]pOG?K(}$FAwG[FFtdn2&$~^IU,/_-^jZB0hh?pd[{+wGLC)~4X' );
define( 'NONCE_KEY',        'I2dz irCH&Sv8:?9g Gt0#fP]$+zb.@1_fZ#`Fnh=`rD]Ep[{T7t-!,.aleQxqf;' );
define( 'AUTH_SALT',        'xn/j*)D0!$wAvkzH$)Z!Fb2f2(v6$@d`id9b1OSJ(CLWG2a<//{tHI/Y<B,*H/LS' );
define( 'SECURE_AUTH_SALT', '#HpZ$o;/;#?Z5-7u06DBwK:7@TvQHVjl{OpTJJe>M/R#VVX a,&vj=XrF6f.Hm[J' );
define( 'LOGGED_IN_SALT',   '6HtCiEh)vBNTw8}/(rdRJXZ;>cC?tC5mPiYPV|#X`a}4Ifs|AV&Xji1P<*]ES*{{' );
define( 'NONCE_SALT',       '+}W-:2$1pfQfv<sjBXgq=p9R?#fv]fk(|vT$@<;9OZW]()smvkM3I<w>}0F0O}?#' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
