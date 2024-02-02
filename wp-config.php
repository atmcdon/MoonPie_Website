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
define( 'AUTH_KEY',          'rVzYB%,&dRGq)`f{2-Wts%f>?@S;i8=dHxU:QOAIVP=MZVajf-y!9]#LbngA=A|c' );
define( 'SECURE_AUTH_KEY',   'pr7]Qb($;*h5$b=*SrJtoM&ljHe6y%:](you*dN4<pRHjz3i]d1HO;}^.ZitY~jl' );
define( 'LOGGED_IN_KEY',     '0zJ9jdgKUsT:H{TXD8dC*TIcvR%0n2Qu<Ge4DOvy^]Ua?9l=EapJ{j#gX7}o/P`4' );
define( 'NONCE_KEY',         '/W[2P29AM3?MYW]$[zF7*c|#Jbk8oG6}6_e4H}>X3wEZ^4HpH5Ir8;g!W4EAvf@.' );
define( 'AUTH_SALT',         'HLga/bmz*dB_M-Z_6#?Cn@_l}hzF@p/-.[4Zh_7}PISU.ccHI/|A;HdT W[k_mIG' );
define( 'SECURE_AUTH_SALT',  '|sH7H^#%Oy*}N!G7wnFtXP61}*!I@<M0dLtk.eA}q-f|;NwJB~m$W:l~zFoy3}cy' );
define( 'LOGGED_IN_SALT',    '?}pTy-k)s_kQwWYzc5O^L]X`_Z~>{rB L)|bu1Vp.?ML8JWB~H_h1~!JTF-WJ=Ki' );
define( 'NONCE_SALT',        'r7n6f2RAD2!e4kTtQMljn2:`?A1Ycz0I !-j9s0u6dUb=WA{ny6/N{e!Fj+j%]5M' );
define( 'WP_CACHE_KEY_SALT', '?|S<rn=fm(d>^Y&z!w;jx{Rt*`PwWYZW!BRc;djkACwj8$36UyezGN~O2b%8 C#&' );


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
