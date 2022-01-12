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
define( 'DB_NAME', 'admin_itdbnewwww' );

/** MySQL database username */
define( 'DB_USER', 'admin_itdbnewwww' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ke7ZLPuNkZ' );

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
define( 'AUTH_KEY',         'Lk5nxNeYY<PA@q<m{gc_?#W=SuGr}Ano{KU<fQ-_M,Uci9wGQTyvfGL1$]TKM;[M' );
define( 'SECURE_AUTH_KEY',  '+UbVEo988yDd~yLz|yjJL5W&LOS*)e%KCOMz*@@VJC2iYQo*I>gbgf=Cd|OM@ZS+' );
define( 'LOGGED_IN_KEY',    ')Xw4aSUrV4O=fXd^OA];M5rpn$=G!ylSN4h_[b6H)haEfLNSko,ZCm%xC8-Va8:W' );
define( 'NONCE_KEY',        '?pGnpcw?c17hXNL1#%`N=D4e;vEq|Jgi 6N2+P^O J:k1iKygj((SVZ)CpTx<)T`' );
define( 'AUTH_SALT',        '~9WW1tnAk>C`+eo>hAP*W;/TPOE.`]yIn#(MX`Y*+g*fCZ#G-h6&I&XSCcu_$6`.' );
define( 'SECURE_AUTH_SALT', 'fHqzeTnz]PCk><)!u?ka9iv# `^TL5v<!ge1#&l&Mfyhum`x.M0.(iFd-F}dL[^Q' );
define( 'LOGGED_IN_SALT',   'j5;%e{rC(-FB08kJyu?_Zmd;5}N>9fb,uttg8 d^BCtF9 Wu8]%/2=&&Nw<16`!i' );
define( 'NONCE_SALT',       'FN|s3WYZ-mF6Qldd)jC*apYFIbW!.!zoanr`$yu^^+!.O1Vjjavj3ce|j:,[+`@#' );

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
