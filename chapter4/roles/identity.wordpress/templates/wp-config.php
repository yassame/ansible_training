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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         'vz!,)y&ITI*(vD;USSjOlDi *^<uPT3VD|IhSC#/H+!1A)Q2>Z7mj]kI5+e@HO.F' );
define( 'SECURE_AUTH_KEY',  ',<#-NBA~Uhx,)>|Ot/OQA||IMC;AFu,Yer[4u<Uha|hG?y@MckAKxjw5!6Bv!-=O' );
define( 'LOGGED_IN_KEY',    'hO&ra|{!4cs&2rrQO<>WPP>xT]O(s|Tv#[}~2CWru HmB){0ms,7iOE0{7(L_Rur' );
define( 'NONCE_KEY',        'Dyx~~:]xiSRr*I]mQw(Y6@S8%wS1,jLgb}%ow%F) `i2oukc`J.7C/f(EiX4QxpA' );
define( 'AUTH_SALT',        '+wgv;<IBFd&!JVlH;5dyov:;:0ii9?$M~s`H~jWO<8Ex-n<V{[Ae/xra+wY6+eYR' );
define( 'SECURE_AUTH_SALT', 't|G:GI}H2m)fFJ?/JVmUMHO%a2oY}R?ow@+nHfjby4x4Q=pa6Ru&!EHBS.dah0NJ' );
define( 'LOGGED_IN_SALT',   'y3(:H;#k6KJ/8/UUT-Y12&^6V|2WBIR|=&E>p4W>,Ir^Au(L=voIZaoSW8g+0Z*B' );
define( 'NONCE_SALT',       'H>xad0(IwVD4Ven/7nEyc;^?-.2N$2FWcI}v25G@)[J9Ut1~=.IuJ1iPT.DU|c5L' );

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
