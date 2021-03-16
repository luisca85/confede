<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'comra-web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_kCp?oKz!fh$H8g h|>KhquV<vY**)Qxu0Vwxpnb;:Zm(Q=xKdrul|BpHqv.Pr!%' );
define( 'SECURE_AUTH_KEY',  'E^<tFx[TVp0qu+a9.W5H.P^dkI6Q$9O&9QSxEpLH wUqfz^@rGy7lwWuutkiAamm' );
define( 'LOGGED_IN_KEY',    'YxP>U(D8>VT&1[zIsnTY[aX$VMs+x<nH#6D-JaLL[lu0Lt`|H#x~6}ozi,8yK_mM' );
define( 'NONCE_KEY',        '7.s0oV:_(!;MH&}Y*V )k}Hu@R1o7Jm(|1Zw>3rZGh[s~X:K>B`ahC[-5nnGT}9y' );
define( 'AUTH_SALT',        'm|`Lv#THuop@~# b!KV_D0cq2Ufw ,{`KYK,m-@-Dule6ZPG>FeIM]U%NvBEbv[P' );
define( 'SECURE_AUTH_SALT', 'SmVF)u~b=&Ara4j)@Q! .#dL9?^sHevRh#%f[v5Js?<Pu|#v<8.~@ig&9g+IbSH.' );
define( 'LOGGED_IN_SALT',   'lSYGQrgq@JCBn$86xAGp${C&%kY%6mKqVGLH1VRzLxAxVDj.K>Nlxu4gwf`E&t$b' );
define( 'NONCE_SALT',       ' UefOUMsG=&}$c!YlSV<$bYHTumv^5oy:{O#+qo%x)VAq%xB@9,2;[{3 (H^3r ,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
