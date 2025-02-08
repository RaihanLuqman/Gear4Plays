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
define( 'DB_NAME', 'gear4play' );

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
define( 'AUTH_KEY',         '.?XkqtM21J6^0_nF7J+ j34>w:I+:*^6xuH>JW8+=m6jqHV?T%]`9Z>+it)GZBHm' );
define( 'SECURE_AUTH_KEY',  '=j*|HcXvLp$_>xD^!dlk Y>pFbEH3{7LFL><}aZRi0_J>|>6|]|1Xz()S :9bK8a' );
define( 'LOGGED_IN_KEY',    'W>hh3F/*U;2?<1OzH!Cy-7v$d$kw8?:Kru{g,(>ae[z^Sl>+ui(y :X287nIy&Bn' );
define( 'NONCE_KEY',        'A^QgqX}I[yE?E|ccmG!nOzR{JX qFuY2~b-D42k.*bk,CR`9&v#_6/#[IpE:2pe%' );
define( 'AUTH_SALT',        '~,h/$xTV}H)AB0<F5Oe}@s6z2|@74`>9?,lc8yo/pEO)fsj2gJ9V.@oV?:C-gsIZ' );
define( 'SECURE_AUTH_SALT', 'J9~igMXe3:Z%H1iX-da_SF90V>}}Bc%[]WC]_5Vy?}%|#S#S ~DKh&gsa)A^rqv3' );
define( 'LOGGED_IN_SALT',   '[WjJ[.e}mI2jS>J^$E+?|b7e*6#Mg[GT$M<r3sw1 J0JE *^e@$!/C-Yl>uXNj6[' );
define( 'NONCE_SALT',       'wIFbRz,haD@8a~C6/Q@PU_pfB#ZS;R.;!SpHp{: >%[MFR%Ggp_)hIPHTUN=Sk[N' );

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
