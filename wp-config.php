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
define( 'DB_NAME', 'de_oude_rijn' );

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
define( 'AUTH_KEY',         '`/<X^augX6V-op*{R1Dy;tbEEV@l}j8oLt7z9AXDf%F0+maA>KQ`l;$`viNfDA20' );
define( 'SECURE_AUTH_KEY',  'edxvvSuK1B%F/J.g#G.x5Y~bTMm?6_@KC[V1pvA:D_DxBY[[t1lbAY6!+e9,LaSz' );
define( 'LOGGED_IN_KEY',    'u>g%}5a%uq*pSF})a!&UUQ)G)6UKuxyo9NRV>;FNa%eYz&);+M`yD7,7C,N4]CKT' );
define( 'NONCE_KEY',        'UvoV#947>l`,hGkoC7_!-)s)UiQzX(VBs;,aJz5:sn!dG3 |0>G-Fn4N?>WIDq70' );
define( 'AUTH_SALT',        'rHG<}9*wcH*470<rR9kn,~6JKcYYZ?g/hha4#NG*C/YADVy/,8db!oa[w4L}2Z]E' );
define( 'SECURE_AUTH_SALT', 'VNi>vB!/#-I?&%V{ngO^^K][At=;i@c:|B16Asit1k9Iw5;H:Yg>i$L|-jH3(?Zd' );
define( 'LOGGED_IN_SALT',   ',g1-t4U*fTlAv.b^vW2u:c(=9[1gS|hnEc<bfEQTv=NWP[uaVHFMdhkc`^KRHX:=' );
define( 'NONCE_SALT',       '{[q)b/i5<r0qQi(QaBOKGx{@zaro=?jtD-18FZQofosIbHrU<5n=Ha$e4!@2G()M' );

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
