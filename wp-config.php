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
define( 'DB_NAME', 'brrrmoney.wordpress.com_db' );

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
define( 'AUTH_KEY',         'S/Yv_+/*O1mW/~@dy,C=OQ1!.iB!ok[p-g>sgDcRw]8?c0WX}Oyk$M(F8t+<Ot`o' );
define( 'SECURE_AUTH_KEY',  'ZS]O:RRbXe$;p8+@QqQ}U0N4&>1kz3*j DVukp/z@h#zszO?Z>E6J=N!1)KYedSi' );
define( 'LOGGED_IN_KEY',    'Yh.`#x9xIxttQ#Gg+L]41n4=b3Ava^N<g~ eHfEy(8i`i{|j[O,t_*rcef{7Es:L' );
define( 'NONCE_KEY',        'CbyeL_vu%4*%9,RFMMM-S2#Rt<@sLpjx[(w7w$GN1v|Vor!6DAR/5iIP5JKTbH6_' );
define( 'AUTH_SALT',        'FzwB0/u[|YGv!9-PrSD+Q-cc1SCrr5NOE_]GDUYeI_c5D@F<@-N$V-AA]*W0&Bc:' );
define( 'SECURE_AUTH_SALT', 'o3YXz^%;%Cx`4Ew=$We~7yAf6aQ]3wgX9`A5L`Nh:q!@Hpm.(#bz3Jr|B# J(Xbo' );
define( 'LOGGED_IN_SALT',   '3YA;)H<l`Lsvxv(j?}e@l@htan /opIQS%lDps|ZIHh9sl^R-?mUob>u5]XZ]>iE' );
define( 'NONCE_SALT',       '$uBK>s$D: /KTBqI|)U#^Pzsza)Zzn y45~FZ&pTMx/qI+Cv+o^OM8sI?:>;ekG0' );

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
