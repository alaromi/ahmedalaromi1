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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahmed' );

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
define( 'AUTH_KEY',         'nEF!#*~NA{VdX$ V(Bgb5h,U[)6@F:lhao_bkMzk3awCyZ}%jBBW:eeKkDMVbeNs' );
define( 'SECURE_AUTH_KEY',  'e.9VX2?hP-Eh2X1C.eqY/803N0Xe#I/t 3=oDBT|-NaL9CgyQF~5~a{H_>4iw,W/' );
define( 'LOGGED_IN_KEY',    'D=H]6*dHKoqQ;2~.vqbdP`wIAVOm>wvQM[KZAow<U`d;6Yg&30wK#MG$d]k.O}d7' );
define( 'NONCE_KEY',        '!n;0e+<T/D4r/]kJ~6Z~:CuWFJ;#zbx~4yjy^/K~Me,Wj)~v5{:4bWw9Ru(Y#Naw' );
define( 'AUTH_SALT',        '73e^vYo/I+:Ms4-4)l9XVFP$Ci4imC6rZZTQG)mx~#z#`X[ 3|bW7,sy|)EGOi[P' );
define( 'SECURE_AUTH_SALT', 'O8[ Si;Wx-_om#gc_XH)[7S-h]SkABBpWrHTRj.VPGcF#OoZ(rXI!b`Ejgp]&;@^' );
define( 'LOGGED_IN_SALT',   'X,2[z]OOqa;jZm4]%[F_CS/ut6gigYTg>on^k,Qkx8E(N,0a>]QVk$lURp d7cb^' );
define( 'NONCE_SALT',       'LmRMm8{[a6l*zcc#ncHQ|`W._s}xaZ!yDl?3HgzDd2vcd:6+7Tk~Yng}~bnJwDC1' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
