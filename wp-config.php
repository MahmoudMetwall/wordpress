<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'mahmoud' );

/** MySQL database username */
define( 'DB_USER', 'mahmoud' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mah@1999' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#o;FMu(oFRi9Y>2E;m/f+ouCi_(;: ,Zy#UN4^&&b6}HwW<zdEtuCKLcZ+u93HCW' );
define( 'SECURE_AUTH_KEY',  '~]AcIsj2@Gm>J(CtcMdbud00NcN4;4z45}Do,O>O#GubhYxBK*7=D+WbghvgG86+' );
define( 'LOGGED_IN_KEY',    '$c3u)3gwi>`Y|ABq,Lf_RrdVQo`0_*SmW}/?D]^+40?WjUB+0(lvbGW]J[Dm2o}Q' );
define( 'NONCE_KEY',        '$1[HMFGMC0l53jYm,[/g`Qi96j{nF6VRnomh.:i;ZTRm]X(opQaax&IIhKqQ_ [,' );
define( 'AUTH_SALT',        'e[g8PxK_2pulFK*HfK$oiPucB,~W,i96swQg%Z$JhR^J ^@hkE]I&@^pmM#CQWAp' );
define( 'SECURE_AUTH_SALT', 'Mh UPnFh,x03JDVI.XejM]}SrT=>Kl]9#9ZzAQiuMf$ixV7w-e~.JMA9Ic:%[8Wz' );
define( 'LOGGED_IN_SALT',   '@RNeV=`,ZL-oO^!*z;rk#1%^F+F3Uk]~svk!YpYUqO]I}SZH}E%)FUcm6F.[=b-F' );
define( 'NONCE_SALT',       '77o3RsQSP[/]0#Yo;yo,~zjSla8:KTMvuW,a;8HpRbp7wvJiU/YIY5Mrii7eU(Q1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
