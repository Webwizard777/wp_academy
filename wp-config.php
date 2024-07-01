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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'j.#;F(%u{AI$|{2<d?vTd)Ua-:]eM)*6mk)N,{^~8:)mufmZXFU*{W.mq=,L`_zN' );
define( 'SECURE_AUTH_KEY',   '^/RT%x{j/DZO&R8WXy@a(Sests0bE}p]jaHUwk_ekLk]M48yRbx=22*f45Lt-K-l' );
define( 'LOGGED_IN_KEY',     'oBZOI|iL,d_,=rR8FyQf|#1wAsmQ):6?->DA 0|!^UN,;S)zx~[7b!Z5c|/WJxR!' );
define( 'NONCE_KEY',         'QSD4+&m Q9i<q+f]%Z}J;Fo)_ZSKS!4tMC}b3x?;Aluxe80X/|n4BieVh%mq(kQ2' );
define( 'AUTH_SALT',         'xq&ggv%rVK*HC^qyeW*WRT2!Re28_mS~DsGL}4KN(oavr0QT:1,!ODoB[!h}h l3' );
define( 'SECURE_AUTH_SALT',  '!Amn&s}P,`]DSoy;eA I0VB[:iuS@o792 [(2!oHFmYV&7>>YU=Ha WaAWw9zrAP' );
define( 'LOGGED_IN_SALT',    ' tQzM_lVPtCoCmaG/M3cAc6E}lO=KwcOBOgf:~Hv`ZKc!81<!8O*Z~?sBw,dr];s' );
define( 'NONCE_SALT',        '/b a*^Vzf>o^aob5O_JL<$g4o>dL]%3=Dz>^Iw:3Hq]2!ApSlm@vps=@asPrt2?J' );
define( 'WP_CACHE_KEY_SALT', '1whqSP9u>mk6TR8/iM.u!^;8;{9toCfieu;BO(~P#i+zN`F^i,H`h<O`4E!fySc#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
