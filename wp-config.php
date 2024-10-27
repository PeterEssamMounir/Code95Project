<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'code 95 project' );

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
define( 'AUTH_KEY',         ';Zi,O<!+O.*`:TT^KXle]B@9o8D`b<pmXJpp4K[8uj]visS]BdIa%&#7u BCBLaj' );
define( 'SECURE_AUTH_KEY',  '`T)nYX4VLn~j{-E/0WPe${@<u25qn{S*`hsNR1Q<64^GILuXSh_+Ic[bxQ<VvI^g' );
define( 'LOGGED_IN_KEY',    '>IG^:]C3~Y{ap_U}Xp?6,freJdwWOF8+Nh+K@(veL-k8:7ly=}hgwQ6#*.9Nm`id' );
define( 'NONCE_KEY',        'C}=$WILh#Ln4bQlnnO%NL~nS;h-]}ORO*aRLm>d9V7,l2R|#l0guqt/7cKbJ.;_{' );
define( 'AUTH_SALT',        '$[xeWN{#2e[0.r~1By_!XVA&#L8$S7Fhi=x$YB<}%pQy6uetE?ZsddUdTQEOC%wk' );
define( 'SECURE_AUTH_SALT', 'W`^5<J#5HBv6`=FTxzu;GKx%F}%`wQ&c?0F9_7n3(:WZs&+->ql rq/~/HJmCSuE' );
define( 'LOGGED_IN_SALT',   'E,=GL:ZX|t!g9CE :?S4.V4S<5NyX.%:-yXSue9;fraRi|(*?=_!]X7YdFQ3rdL ' );
define( 'NONCE_SALT',       'SUgbU;Lwgy,Fo~4/z%q%&2V4c<P>+%NX/JR(gUbl4^*v?_y6;(!JUy+{D`2e*U)c' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
