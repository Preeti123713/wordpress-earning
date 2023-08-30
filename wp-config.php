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
define( 'AUTH_KEY',         'mLhjN|L+Xrs976 )4@`Bg3P6:x03lEXS^Z{8VE6t>P6_Z0`dWtDa%vhkb~*g^:PS' );
define( 'SECURE_AUTH_KEY',  ')+sw1HTUAYh*fVb}+};.+IrScy)YV;.2MjrWyewb})u]9><Dx{Xj(qTh#}`lg@5>' );
define( 'LOGGED_IN_KEY',    'r$&f Ke|a>tb9jT^=XVV<U`eG`?E)hm2Rxltf~_IF3Zf`^(8mv?R!8kV,$Br}<+]' );
define( 'NONCE_KEY',        '_iZZW!Kesh3qWeC]1%/oH}Iz*fejjg?J3c;Wkl6@W[0Tw04{$3(1+_XCoSC`/`m)' );
define( 'AUTH_SALT',        ';y[zYjWZ{ULQw6Wwu6M&*Uhv5?w<_%}r111$p5iVp9KHm_%a2 Nq*E3I<&1I1`ba' );
define( 'SECURE_AUTH_SALT', 'QxpvnULPW|]aOqj<1By,+PfiLLSMEWQ&=wu=UwORRT`FKKZxZD&=mp#@^p~$sbA%' );
define( 'LOGGED_IN_SALT',   '!/r_UK[g#LiKX69C8H*YVkP+%?BDFG?>ZmwD@I*>= ..$J$,Qg23Dx:IRa.Zb$nT' );
define( 'NONCE_SALT',       '}?pHmix<R/XO~jonmMw5Q0^vm7pV<<+_]3<#rP5+$}UB</RDU<yBc%iOh3KZ -fn' );

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
