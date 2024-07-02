<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u191721520_69yYu' );

/** Database username */
define( 'DB_USER', 'u191721520_Hta1O' );

/** Database password */
define( 'DB_PASSWORD', 'U8srryFpnS' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'kj=Ey&Rr.Qq6,jicpAPAba!RN[,v}+6=X9&) n$89tNzxw20X<;EWbf0|#LbR`}l' );
define( 'SECURE_AUTH_KEY',   ' n//dpjIxxskH^1sHT5haEAHmuG`Ml6PObT^N%fZw=4OYT?H-Be@@L[]2+D-)j|4' );
define( 'LOGGED_IN_KEY',     'fS%U)IJ(|%f*bT6o=DwJI80MWt,eoD(d3X*E$zSE<|*4mlW}7}^>L0O`~`:`i%`M' );
define( 'NONCE_KEY',         ' @BUL^xmM/m?f_6*[n>qZb_w/&lF@a{s NhQ,S{d`+Yax41$(L~TH(zo<3s358Tg' );
define( 'AUTH_SALT',         'zkLUKCE2uxG515FuttmlcZWZebG{>YlRC0qU&fk+c )g(rsN|:5SSmsj&0W*zz&s' );
define( 'SECURE_AUTH_SALT',  '3oCV8m|.O[?vJ^)#6)SZ(&= iRC wwG4M4aIc+ia0wh3vn/CHeIxR{JSzWn4+v8%' );
define( 'LOGGED_IN_SALT',    'dEa.EML+|D1Pf8wjW~m9ed>W<)Wk<sK$vPW1=3+E!j}M#ttd&#B|7Xx6Zx}?,Q:^' );
define( 'NONCE_SALT',        'lS`iF [Q%/2B*.3 2HdV% RmGL,N-nW-%dq~K@_]22V0~^kBL^ZrkyI;Bd`0*aZt' );
define( 'WP_CACHE_KEY_SALT', 'X>e?%8lguz?49A?j`0CZi`kwYf= }y%x$fmVSc0z5RMbYao=}ri:8JCRE;2A%m`r' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
