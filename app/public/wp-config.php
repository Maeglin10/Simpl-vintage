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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '!g}2z%(nL3*-9x}ca01mVf]z{h<Ua.^:.,8S9% 3q?Qo~!QT4FqkbNPy~YHF}M)s' );
define( 'SECURE_AUTH_KEY',   'rvh}6o!k<H[`Fytyhp[@`3,hF((UXn&mAM0._)3.:U]Z7DTO(^$F&++[vgXJ#gQE' );
define( 'LOGGED_IN_KEY',     ' jT+m;QN#sb*+!ZSGG)mP46<XoqniE1c/8zCGY_fo).T*h{hI@y8j.K=ilTHjw4Z' );
define( 'NONCE_KEY',         'sE+1mn~=vFIR6-E?;&(/;}heggK$h~>XYHt&muru8A}5k(sxGI/ALC`2H0BSfz]L' );
define( 'AUTH_SALT',         '{$TNO5:>]cj#36ilR->1w<vgGGs$ g:=5F5P2-gCU)EwKa/{$G{Ar 3Dm^nWgB-+' );
define( 'SECURE_AUTH_SALT',  'X]4=P,(s!uQn5&(6uyp]X<?h@zFZ_@9=N:7r||rC8-t>=vP{~8=jA?mWt9AQjS,1' );
define( 'LOGGED_IN_SALT',    'kkiuzowYw7Z01zNq^s~KAPNKJ~*K&lrD&HP]Ftn >zTjz6c5lKLa7y}Nk d]#uI&' );
define( 'NONCE_SALT',        '8el+sd}5N&tDdIlcmuAf+f2ItUMiq?h4E;b#[.9f=F*3BB @N.UWF7bduv64.3MH' );
define( 'WP_CACHE_KEY_SALT', '3wO%Q|pzbCkDG>:`QbZoYSo}){?(qn*]l@J-= ?$x0^A30}xo>L>nS$_r@=8[G;8' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
