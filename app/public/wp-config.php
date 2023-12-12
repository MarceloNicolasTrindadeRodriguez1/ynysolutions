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
define( 'AUTH_KEY',          '?5:>`1{nZXfMQ)UgJp>BH7NlFKn_&A&cz>o3+} wa JB=IsxU+h`%#Y!3*@VK#Bu' );
define( 'SECURE_AUTH_KEY',   ':W!rj+p!Kg3zs|R;]E4lTp?Od!#/mtG@cYTf!W+LY_H-DL0p_EAiZo/^r59Hw4WI' );
define( 'LOGGED_IN_KEY',     '>G.VPWo}]QqDpeEvVZYfY=K#x@+8Fd_e-y,Boop$-5VU-J#1ye!*9xQFSHL8Yp+`' );
define( 'NONCE_KEY',         '*48P a0YPu?yxZMB(4sEL6,jcXm*^,:o9-Q5h&4TC]w~9u?o3Lmed|8ktbOx;Wdu' );
define( 'AUTH_SALT',         'JX$E)jV{Q!iq#5[:@o;+1l[2imx~i,X~<]B_kIxv9I[+:pf$untS*L(KKubW||p?' );
define( 'SECURE_AUTH_SALT',  'lt<`a/x~3uV?jU>5w!>(CeSnVQ u#N*~]x@-a)_WCBo#IIuQtbw 3T6D7O34PUf2' );
define( 'LOGGED_IN_SALT',    'd(F*xVZCx?&Tv=t}&((b*N|/@MDl/@hUyKg&}gsK;m8pV!~8r<tk| O4h10>COD_' );
define( 'NONCE_SALT',        '<wPcu}KY1<Z3tmT]eMS^911~$: oB>|3(T;uG8~)^ YU}Bhn 589AjmPE4A7`Ayx' );
define( 'WP_CACHE_KEY_SALT', '@-R-)V7]KxPFU*bO%_djmAC3+Q`mx&[|2Zh.%NG7|=1)S<e2JCI4dXkOgKNuYhDF' );


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
