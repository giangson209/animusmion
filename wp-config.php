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
define( 'DB_NAME', 'milktea' );

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
define( 'AUTH_KEY',         'qugqncy)Ux(^dNOS.UHw([sQ^1?Wwad1f>>CDrMCdlDEi)ZR>~3@V=1rsP(H!:Zm' );
define( 'SECURE_AUTH_KEY',  '`ftL1%KM2;^<;K|816]u_Fr;;;]q-W_no1NmoZJ1-)Aei_zq?8gV$=I?j#_~X)`|' );
define( 'LOGGED_IN_KEY',    '-;g lzMz/5=Bxt:`$+M@<.qf$*Y<X4c&=Y29oE#NiC*R^e62x@/eN1W)})Q<sp:N' );
define( 'NONCE_KEY',        'iE?*!N2t?U|N:KovNbqnzTJI*YZl~m]tAklbi=?;s<FxBc(1Dv[_J<Z)e|xp2z_e' );
define( 'AUTH_SALT',        'nn!,XY7yGDhka= 2ONZ}eg4U)xu6ItnLH}k(mGz u>V(1O1}:}lcQMp8+%<2$Qr_' );
define( 'SECURE_AUTH_SALT', 'yR|5Ga-;W*]^;sJ+rCzp=i,~~t30<esJW+6_$6g@o[::K2pNgI5XPa0;^+bF;E^V' );
define( 'LOGGED_IN_SALT',   '0%V:}.;b`oi-c?r!_Kd*2#d:Jn*br65-%EjI-H&oT|_P9coVn:xEm#/EJP}yf}=D' );
define( 'NONCE_SALT',       'u#bZ%nH.0]+J)Yg]|l(xNAqG1o_;nGvC<oj[g64}bMsZUt0Z`nIqrcx!IU_X@HF1' );

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
