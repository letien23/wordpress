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
define( 'DB_NAME', 'word_press' );

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
define( 'AUTH_KEY',         'GX%&5F:!V6DI9ekvW}h82?4ZR{ iL;JvH]}*X]dT9/gSld(F71v{*fg_@|]i:WLc' );
define( 'SECURE_AUTH_KEY',  'yGMI?EL}OnSsRmps]~XYJk=h)BC3|CO:QTiE0S*]N}V;CAS5bwnT{1T!9,B4d0iV' );
define( 'LOGGED_IN_KEY',    'P(-@qDE]<uv;~U|`w)Geb`6*v,d+CQAM((u@]*r^sAI2[]Oh-mwN@mfk}<Q$REgU' );
define( 'NONCE_KEY',        '%mhe8;]4_;VmnEVeto3)9~WCwSOa5.qHfPmsp9+9C^}5)|0<f1EYoYY;;>5.Pq8o' );
define( 'AUTH_SALT',        'I:m$^lyB7b06@-::jjw6JIb%9G!{.c6BBMrE]4BJb-Atm51U8kUPl 3w;vDBPW|h' );
define( 'SECURE_AUTH_SALT', 'cr_9N#D3*`Ldy&xM=@djZ26sh_Msc$7b:Y09UMGHW:%.c7z!{)25Y Igw;I_R#Et' );
define( 'LOGGED_IN_SALT',   ' ~{u=iqXBW>DzzLQ(EO(g-5JXSVj]x-H=$0gL=,pfs, DMEKkDML?0_UX!VvKOZ+' );
define( 'NONCE_SALT',       'q&8tN1@ooT~3x/~Y}$#:PfHE_+J7[dnJo6c<F*l5N+u=#c]9}h>?Hq}yGHMb-1*4' );

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
