<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u591303423_awEAx' );

/** Database username */
define( 'DB_USER', 'u591303423_RhPKp' );

/** Database password */
define( 'DB_PASSWORD', 'mjouS03I3V' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ',:S/E4w&$<r]_bcuG |W`+< k-7g!tsD4AG(YK;y%b>f?_5k4nmOUv6/YMw4dVW0' );
define( 'SECURE_AUTH_KEY',   'xuLtpCA>U[);+{ZQpn$dJ9d1L&w17U^^z@X[%qa{~vCBnUl;a7X3ctW~F=v:2?9w' );
define( 'LOGGED_IN_KEY',     'az/Z H,CTI3mX*V])aB{]+CoVJ#`%*(xo,p?E*/rW~->N>Z:#qQte4Y6B29qy`M-' );
define( 'NONCE_KEY',         'XPi5>0K0z@.P6a*hJv):kDzD0_hUyRb{=u=e4h(<OKHZ|eu-s|mU@CB]oF^85@E!' );
define( 'AUTH_SALT',         '(FoT3_mMcWT2%W5,7MQxLF0tpj/+1=k[jF.9:|G5 $mU79g9@.1I;M[>;2zg=9@P' );
define( 'SECURE_AUTH_SALT',  '4w57yR|G_QjJjp$9YG6eB$Pv.?oY2Y%M?[>nOSsjD_I2fBM?l~g53:l,]E+T `[5' );
define( 'LOGGED_IN_SALT',    'g`G:iEiiMoT!9F/&]wH!V6osS|2l_#/W~cQZYx*+ia0M7wc;%l}T^0/=j>%Au 2U' );
define( 'NONCE_SALT',        'y~F^-yxr<vti)?1|j#shR5NLheK+P__,PnQS>2z9[Y_>^nY?+/=DJNcs:Q4Eg)K=' );
define( 'WP_CACHE_KEY_SALT', 'Kh%>2gbq=dLJ_0%2w(Qmo}v@,)beAf0&M)A5N9IAB$2K5VMcU7%l),ho*s}=%R{D' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'b66f5d75b3cf1fa18c77030a8e402677' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
