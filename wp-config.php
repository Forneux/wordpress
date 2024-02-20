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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cI1}nC)GV16swAC9}`3Btab^oq.[(0 ,)<kK50ksrVsa!zd*SiUoH|ZPK4y3%.WG' );
define( 'SECURE_AUTH_KEY',  'Skue4/W`TBLlg-IMa5K(3$c|- !HPo7R+(U~)] -X4$u/~yLV=b%D0tsTx!8xT T' );
define( 'LOGGED_IN_KEY',    'YVt%QJ)+;%nES+Z7 ~kOn$xZ&IY1X(#V`K4l<VYst42{y>hC<M~v7s>?Pr%9W`j2' );
define( 'NONCE_KEY',        '7@D,J.,9U?ph,N33s/Xs0R|7P{&d0A1hVj+xx{?N^8>AMy~xm1gl~T)a|0j!A{y^' );
define( 'AUTH_SALT',        'F4mcidp@;G5`+!+l;j2L9gG(.%(GmJauC9aB2.%tgNn#sL_V`E5fHQD;M]Zi0$Gq' );
define( 'SECURE_AUTH_SALT', ';O]_=pp[zYp<k?bj;Oq)>zv?Fzk-5tvcu/hw1Y?!=9+&IWUsPl.=)+]ypu#lDjh)' );
define( 'LOGGED_IN_SALT',   '.m1NFT<7YQ&UbLbrwoiv3hBK+kZe4sS=os$P`|EW4b(`sRra@+)q-KI%jDy?j2W%' );
define( 'NONCE_SALT',       'R8WNm]38%MlWr[}CNs%C=`apS0R1+]rSOT+qjM,XN$CQ3 EWPg_4!Z+nr7n{=6&+' );

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
