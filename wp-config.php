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
define( 'DB_NAME', 'wordpressBrief9' );

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
define( 'AUTH_KEY',         'va+?G>]Fi,$,zcMH-4&c|WKL{h4G/49wtU1c-m$nC4?pdNX(?;P@WUeR-@Pnj)MN' );
define( 'SECURE_AUTH_KEY',  '-*kFRz1XsPc,x_r8],uCqV=7$s-v T?8%P{V5B:]j$%c]d1{]4<zmc[j#]>}43Wj' );
define( 'LOGGED_IN_KEY',    'Z<G#ruLl3I_.rIRwQ_%)rq@k5 H<B{;=Ivgc#i?@)651~*G)|jabsRWTfq3Tz,4%' );
define( 'NONCE_KEY',        'B)YxUUKr,& %5{.x{v/F#IH#Z%SNhz;7sY%se%ngys;:&DcGrGk22g<nzzO7ssZh' );
define( 'AUTH_SALT',        '+lNpz})?8o{BJ_9&*-|t:RK%`v`Jul!XTT24Z)[.tmVZxJj4T0wi`UU(e5{Ok8j.' );
define( 'SECURE_AUTH_SALT', 'fhnBYT+[6tMsl%,Y[=!B;Mn,(Xnor _J!1N@ga_a.SOG45f,U]2J:Ib/pb[SKofs' );
define( 'LOGGED_IN_SALT',   '7ST7|$|.Y$sm6WLZjgd]mFMz^$y.Pw>SY?4e6@}[Cfj7.!|B=5Ez1X6Vb|vH3yU:' );
define( 'NONCE_SALT',       '7vK^`,3hf O;#G6AP5hHrtS9>?$.+d=C)Kg!,o pn7E,56zH_hET;M;L,%Y`S|Wg' );

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
