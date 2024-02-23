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
define( 'DB_NAME', 'bd1' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

/** Database hostname */
define( 'DB_HOST', 'basedatos' );

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
define( 'AUTH_KEY',         '*kBIpIq%-8@a:VY$N:a<0k|$YE}G5rjdHpXaQuI>EWAforJ-}>w]*HH d<e3!pIX' );
define( 'SECURE_AUTH_KEY',  '`:/N8jNoj<Fi,k0~=T;fa#X&X3_/Y~d9dS-A?guL=QqHxuB~6S@3_INzV9b/28Dm' );
define( 'LOGGED_IN_KEY',    'n~EA#IDl4DOx:(05my#%asM9~4C|Og8uT*rsP zIm@sD55Gg@HJZ?&5`O&rVs/{e' );
define( 'NONCE_KEY',        '.Jr{w+s-xucr`G*=LCD2vGZHOEqeV7G-6V[XcNv/{uOI:{nnC9SH&,E:*8 E,T?:' );
define( 'AUTH_SALT',        'Ym-q60RnSuUTvtY<+}}#TzY&xZXVe?fwEo =G[fy3zK}Sv9:`rx|EZCliZ,0)}=_' );
define( 'SECURE_AUTH_SALT', '?49!.v?ewA>?*8`)pswDDF~Vl:76 Jg#MSeAJ8%VE|XRO.y=-0Aw[$(9V--!ox;T' );
define( 'LOGGED_IN_SALT',   'Bw@0VxpM?evz_9JT91q4>}Uf_Q_k$@e5qLmGo(PR YUvi$cA02Zk4mn,N8DK2m4Y' );
define( 'NONCE_SALT',       '{$obO[%|z0`2|L3s?}nsT1#L=n-P|4unk:tu(3),i$p.0C[kz*R|=2 DH#nhsh$L' );

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
