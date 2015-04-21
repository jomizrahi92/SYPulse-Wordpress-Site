<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'REMOVED' ); //Added by WP-Cache Manager
define('DB_NAME', 'REMOVED');

/** MySQL database username */
define('DB_USER', 'REMOVED');

/** MySQL database password */
define('DB_PASSWORD', 'REMOVED');

/** MySQL hostname */
define('DB_HOST', 'REMOVED');

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
define('AUTH_KEY',         '/i3 l;>rJUHoxZ_<Gj{)U-rxz&)>^f:CBJX%|E>/f2e{NXvJjB0H<td{,k2- ZMZ');
define('SECURE_AUTH_KEY',  '@*oU? h`D8,kj=OgJXtkypG/-H>7J+9Gvf:Z*Guc%4Z_r5xZv,WB*|1t{F5Dy4R[');
define('LOGGED_IN_KEY',    'h,KdznDhOO=`DM >Z#)uaG$j/9SEmz*,nb-]T8bQ@n@@_W.yqGVj)ybi$rf[Oh!e');
define('NONCE_KEY',        '.ttbgc?,`Lk&q%^D+Q;b]+K _Knxkk:;+HEky`&5:fKyabxU]dK6%~}]rmr+(Hc{');
define('AUTH_SALT',        ',$MD*Zf8gkD#R>)mS.aWO:r&1?(JFL1`N#Xds:)bpyTQV;EZDE{, y/fk*D5VxVN');
define('SECURE_AUTH_SALT', 'w+4B5F08w,MU^s5|63lSP#nqAq71rNx|<hCZBu#3Qc:o|T-EfY7OkO>i{{3EVMXj');
define('LOGGED_IN_SALT',   'cI@dqT*!:fun0{sL-I`AK[@mhw mMOyt*4g3+!sjO@(a~s+.9O}ZM4;40h$dCWMD');
define('NONCE_SALT',       'q<Lo9-SZSNuOGOF0v*bGpm#Yp!v[M}KRu8C)*umGpClSLa-$U5[8Px $sl]W/|J6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>