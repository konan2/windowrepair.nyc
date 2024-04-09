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


/// Give access for installing plugins
define( 'FS_METHOD', 'direct' ); 



// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'windowrepair-nyc' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'd22ser314' );

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
define( 'AUTH_KEY',         'av,I@q<6KZjYbWlho]W^Xg>lNPZ9g_HTMe*AF_/2?N6:|qyHWeG8jdJ#S URdaht' );
define( 'SECURE_AUTH_KEY',  '3sfj~OIZcZuScNx`pVg|75DBx1uK.%mC<|#vp^btq):&PvZ];KRvv)80d9$zmHpw' );
define( 'LOGGED_IN_KEY',    'q`mI~i~;*_~p-ZMTJ]?wcg>LS(XA=6i2g=!nnxJ%}XJ^E1ya9[Z%u)<]*NQ5C=$[' );
define( 'NONCE_KEY',        'V1kX=qQAwFFn9n`_qqLl4pk*A)n:<&|`L?XyM:@Tn!DicSk0,5K=qc)Ip)!Qm2eO' );
define( 'AUTH_SALT',        'Z_ZB;O@Z2_%/h*`q*w>kaHn>s@wP.~a$0E]( _h[]O?Ilr~$[GJO:TV TE,:zRR_' );
define( 'SECURE_AUTH_SALT', 'd7f&2J`9wv0uI__L{T:s; k$9]@]s:dN]mv-~``,p7u.1Z>{ZOSV`4S.?m 164|[' );
define( 'LOGGED_IN_SALT',   'J,2z2G4}d7hbKk-VM/r.3h V,J*zR]U_Y&Q+Em.H.T-ga<9{6H3)SWa|eqYycD,9' );
define( 'NONCE_SALT',       'P,6@BzJ9Zh/sSszaDRT<|-[l6&7l5X=cqvrJn<U%9.A71(%TB*iIw[f~svac:cZs' );

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
