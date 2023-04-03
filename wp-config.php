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
define( 'DB_NAME', 'gbua_cakeshop' );

/** Database username */
define( 'DB_USER', 'gbua_cakeshop' );

/** Database password */
define( 'DB_PASSWORD', '6454z8ca3kyz' );

/** Database hostname */
define( 'DB_HOST', 'mysql315.1gb.ua' );

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
define( 'AUTH_KEY',         '-HGe4~:2mJF&_.V2~_*3#vC6(o2KEp.tk.T?7y)Hq;v2<naF7<=.Sai+=phP%Cft' );
define( 'SECURE_AUTH_KEY',  '@Ze;],mGc%4Z)6X>zOO^rDJJt) _5(s_9-v>e~!EsUmtl,&hW`s2dVYWis*zr`%J' );
define( 'LOGGED_IN_KEY',    '/8rBQh`@~y]M0^Q?sbsGS3Tm^~g-:HNLK>k#4%IpT{K! 2sAi5D!s(q/mx~soBtG' );
define( 'NONCE_KEY',        '+8:bZWeC+sq :7P|,.#Y@Sb~D`w|P>%9 @4e;MuWP32r8H,S[7M% dNLz@CIIBZE' );
define( 'AUTH_SALT',        'a.C3#jntx%4Ml0y|zbk|j;*vYXRRtu#37P+7A?B^=}cm;itlLI:Ia%8J;oa48Yg&' );
define( 'SECURE_AUTH_SALT', 'JHA-*65(4uLLt}ExzOxyz8#@M,W&@p%xP-L[93[Z[2$EGnV:N$n;3qfpA2U.6yX9' );
define( 'LOGGED_IN_SALT',   'Jfr|V.8Jt!Vxulm55He/)8u:>6,HwUHAh]`hs(f&cUje _.[wYy/hLmL.~O2rQ&A' );
define( 'NONCE_SALT',       'Q;BK6&LPj%q]C|ZEX]|wuiQmgtrrWpc~ A Ov8m Mm1d1/?Hm6*x1XL|63t]V,@9' );

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
