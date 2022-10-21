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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D>EN/fo~OC<~@I!6/gzUl:SLu67VI3FLgm- TdX]DQ)nQ%{]4qih@WS/u3hn *>0' );
define( 'SECURE_AUTH_KEY',  '@Zz$aTjdaIFY&e!2SAT^(i?Zor^22~VNkAL)T+n.Qsb;2i():]T{5>^ci?YZ/~s{' );
define( 'LOGGED_IN_KEY',    'd9FlIV+^#l,*Y7Kc&n=$l&Y0c]Y5}FCiQ$7XI<*wl Uv]7cFq<&[/kWeqk<9d>4+' );
define( 'NONCE_KEY',        'hby3GMdKCfvGS/V~E4yYLb#l,4q!kXnPyV??HXUNB[K}`Mi9+t4CR4Jk5 H0;xV ' );
define( 'AUTH_SALT',        'z>s;foj `|@BkjjdkpTV_7PI(cUV&N5vl`Ia`HTpL>ey>`LZA4cv2`G5bmo>a]C8' );
define( 'SECURE_AUTH_SALT', '.Iy|^4H{|;DbTw.jbMRxtjbP>$sc< gau$,:N1~j;tq(ve2A{pB/}+%~5%V@voE2' );
define( 'LOGGED_IN_SALT',   ' @:-Q:puivAp_y:})?`PQpne%sZY-oa#C:a&eUZZE|[R_q/[HP=W.EG5= QQ`Tr^' );
define( 'NONCE_SALT',       '~y?*]GaqrWIDP<d);V/u[9R:k>e8dIEY4/g}rFx7K@=c5mdQ^Alg6I1&kM83-;~x' );

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
