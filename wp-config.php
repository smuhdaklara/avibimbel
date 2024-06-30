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
define( 'DB_NAME', 'lms_avi_bimbel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '1#Ys7zd31|^G&,Q1%rj?M<Q8Ue(&<(@mqXWSiJKteK:.<tw<[=IUO$9Sq(wB0|=A' );
define( 'SECURE_AUTH_KEY',  'q~3.~jWKY_3mKz?0QxX5s7E{2]A_:tV@R8AJ!VJO)`4a})o0GO{l{Crv/_ xrCkP' );
define( 'LOGGED_IN_KEY',    '!&p&?PPxGU:)D,2L{nGti[|(9qm6|F`;TFMmX*:^a@>_P7hMiXJW,vZQI -K}r%]' );
define( 'NONCE_KEY',        'jRIxHN-v-mbzKP1$/6<TlljbO<9`K(Y#zfj~}8X.o#syT[g_!KmjhI_TUh+BJh,7' );
define( 'AUTH_SALT',        '1tcm=fg~f3fO/jXiG`!nAj37z;Wo?u7V^vP_qbXLv-[p>{H@z=A{~#HNhOq@n:%~' );
define( 'SECURE_AUTH_SALT', '4i4d8[{^wW9Ey.EFzq^X!q55 X/~K!|$%qa;M/[)zn7Qd.w)Ssx*>C9lmeQG1M25' );
define( 'LOGGED_IN_SALT',   '.!tOATb,Lf8MSulDAfd!oh`tp)S-6]HCbLWKSj$bH$!=2?=0_)wDZq6;8^QTVPeI' );
define( 'NONCE_SALT',       'VsJsAjP Chl]8:yPj=K)Yqwu12[?c+JFxOul2<_3LZdspwX8tVnh>_W,9vF3rTfF' );

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
