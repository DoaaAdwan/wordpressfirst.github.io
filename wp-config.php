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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T|Z#Rb~C97D@wz&vh5P(E}G7zS<,1T3Il?B3iS_!/{%<Ux<,|=@mn]/mF7!CM!Gn' );
define( 'SECURE_AUTH_KEY',  'l%_GN;=4>uPXI[WYDE#`@U-%-JXk,h6DL<^~n2_iSr%}?R?9Ictn8D9~_:<t+uo&' );
define( 'LOGGED_IN_KEY',    '3!}+>tLN&f5Hh6Z]vII+0Gmi*BJcpQ5S8{~P/~1XehXIg]6:c5?m?|Ljs IX`%b9' );
define( 'NONCE_KEY',        '8L0[Z[Y+%%<P>/p>-qPC#UINx-p:!1x=hU#jG-XU9x}!FtGiB[+t)dOhjQ?+%!qr' );
define( 'AUTH_SALT',        'z0AUDMCPwZ;fR9?;(}rB(.;j%[R]xDDX^,[ZwC(acZ[G|465%^@0^`@*{#G0]GW!' );
define( 'SECURE_AUTH_SALT', 'g7!%^L2uPhceP3eZG3orNCSK,2&*@O*VS6[[?C,lf^v1ncdA7S;AiN7|9#.;/Y>h' );
define( 'LOGGED_IN_SALT',   'X?q5a{7i,QW=^0,YLfL1J}Pjr<T!q<Pv/;meRG1Q[&9;{Ftal6S~ARu]PSOGd@B8' );
define( 'NONCE_SALT',       'ilo4cV@:=5!NE$uunaQ#b%K+0_VPlJT4ja$jxeJ-r4<Z&nKiZU.R8I{4svZY 7Si' );

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
