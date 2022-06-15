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
define( 'DB_NAME', 'iap22' );

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
define( 'AUTH_KEY',         '|K`xr&QPB_z7$&0.y1O8^o8uU`9p, Yo,co.Z|-`c(bN__bs+ugBVBbaf+Tqey?_' );
define( 'SECURE_AUTH_KEY',  'yUs(.,g0,}SX=, k;QKpL2B/UV6<u&o]CTCAWs(1_AbB 1$A[ Bg|sdDy8VRS~au' );
define( 'LOGGED_IN_KEY',    'TXm3@b&=42W&iN/$u]U#% f`HcPz%O~o<s!+J<69J4JOk%ou,+E4LScL*jM3-vtF' );
define( 'NONCE_KEY',        '1~J4~DJVwFJ8L[fjZ5b]m@k$x6quNooppCqimFK<^XO(rUV,u>qeyEu-=y:)1 W/' );
define( 'AUTH_SALT',        'CR:Ls>7O2LnPVtxCf,w mq{rvDx1}Gn~>>_v5$NIbM@5+V;3u:Fuy_}Cp7TTm^]8' );
define( 'SECURE_AUTH_SALT', ';f=;o)!bF$Z}z0_G_FC6[CyG0dM$&PemcNWWWCFr8c._YV?sx8(@Mrbyz}M^rzrU' );
define( 'LOGGED_IN_SALT',   ']0/>St[ pwgZL$@njJ-?ZPvtFQTV]u3FtB@4EY4x u&#ZJK,@GORUZx2+jtv5{(L' );
define( 'NONCE_SALT',       'hszuokXCm[%0C!q^SCzI)jbsm3[G#3wuO?]SNGlcpdQz*S_]`%;7q~+SZW;J9GYt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iap22_';

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
