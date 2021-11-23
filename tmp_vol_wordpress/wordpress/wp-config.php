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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpuserpass' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         ']uSkx8nhpB23{%K;K[ZdFO$V(M>3>8U<CMhdlu@$ilsAyco)B]H(|VV?W>ta4%5,' );
define( 'SECURE_AUTH_KEY',  ']{zm*u`6c/=Sww[Iq]Sxsq-1!,5wYn6 _v&>$Z.09VQ,)O`OA:<+^q`QL+UhUQFt' );
define( 'LOGGED_IN_KEY',    'X!vv= 4E#iM@!24PE^SDmJC_jD5iCb=7j9*4m_/+n*Q9)S#}[x$._KK^HHTskSSj' );
define( 'NONCE_KEY',        'Tx,KQIs!g9o[=a>Af=QlCq}0O=*X;iIhK!5WY8A+!F~~[~92ksfxh SuwIPxzIvF' );
define( 'AUTH_SALT',        'e9WQN/1]Mb$;yar-R@i*P-15=#7Ly[2D=fshdb1R@=gx e*MvT>$c(-2b0<Nr@F:' );
define( 'SECURE_AUTH_SALT', '+1&iW!Rrrm6}2r>&_8=?m#33%^K(12wb{reOCsWr>}QJ<9hX:~]VPUzwC!afRiO*' );
define( 'LOGGED_IN_SALT',   '(EjY-S[ToLq$9l8}Bv[Hc+se81D/0_:{x~x#hqxR05q8E8v+I,7hZwp?!9i?N^lX' );
define( 'NONCE_SALT',       '`g]*I]wAl[3zje|AZ7D[iY!YH<jh/LlHQ:@P,@a:ImQ]|3PJvVm>O/gW=z^|RH_k' );

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
