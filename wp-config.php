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
define( 'DB_NAME', 'ouruniverse' );

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
define( 'AUTH_KEY',         ',clyelCcNg;$m9[~.Y]*:vY^wPTV1r9e:0yi,sV/mYF&J:;ifJMg>;&E86@k2OiC' );
define( 'SECURE_AUTH_KEY',  '+BF@}#je;eNeU]<t@+6;/h19J]?b`k2pf/oCN3~}qQj^R1 %[::|!UQh[LBSaFW5' );
define( 'LOGGED_IN_KEY',    '6?pa<hg2W=12JySB#x^Nheu{>@Ou$Hg!prG>3.ypIg(kLdqi HQ o#kR(0$$;1}A' );
define( 'NONCE_KEY',        '`,t+e.OxF:wE9+_>H2)iL0c1;#AYOhy$- <x[G?l~CS[fv2+Kk>BC{f9%~o~0^Hc' );
define( 'AUTH_SALT',        'lZ&HGbPIu!/F|4Zmt$)aT$Qc}fNvWwB+mox(H_jJyPc)W3(./?MS;+fX6g UynwT' );
define( 'SECURE_AUTH_SALT', 'U>1h(XM8m:T#-.:Io6)q)h=oNmmvi]xb;CuFQuis{RV9+F~OX,=skEqo:er9~=MO' );
define( 'LOGGED_IN_SALT',   'r4dp,?%c Us7*~pIw_(dJ?p>lh-`0:dbi!<0`>hdavb)`f^E}O~l@jx(CwFc3 ]*' );
define( 'NONCE_SALT',       'm-_yq_~g:O>Mrf{utaKDOp7f15NUMM}?,(H:03.1?|}xzyETs&M_%*XD^*F:.&{O' );

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
