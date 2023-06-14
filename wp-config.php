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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'colegiobd' );

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
define( 'AUTH_KEY',         'MT]#)iJ7Yj%!@m%/DM(J^?nt<$8A{H1FF0X6lknt`l#99Mi83!8rgGPVM3?}2xp;' );
define( 'SECURE_AUTH_KEY',  'Sy!nS;:}bap2G4Xe<ld`T]LM>nY:y8t<mUzP%>V*d2 Wzmct?$se?S-~$v 9*d#;' );
define( 'LOGGED_IN_KEY',    ':JUt!ci}vF-i_e9}B]DE/OW.C+sRCnmP^rU8)l;i-Y3&s}hfm_#DIij|G{h|<1%8' );
define( 'NONCE_KEY',        'XD}~]ZC< u;6,.bQ*a[>jFS#Lh5$&,dCS+F?DA]QB= #<|b-I62}n.c?iEYfh|/}' );
define( 'AUTH_SALT',        'g=O@F0r8BsYt-~|,zwn3dy#R$L`4eZiHS~L(VN-0U:/5B;7:W4s6A|2phA,mkRYf' );
define( 'SECURE_AUTH_SALT', 'V^^R1+6+b8g(/lI{n*$AwrBW%..qKDGtG.SXC{m@%0PR{H&lHhI||jT3EI*yO7Gb' );
define( 'LOGGED_IN_SALT',   'G/-^XA`FC{};@~2urKOq{!Bo8AKNZOb5$ox0@{a7ltb#zqV3+6F|CRmN*rTrrRjt' );
define( 'NONCE_SALT',       '~#x:e><WM%H21^n@oW$}/_mBqf&~0Q3@,vz3tw`ot[5:y!Vv6<Br_T+<z}Ch*PcI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'allen_';

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
