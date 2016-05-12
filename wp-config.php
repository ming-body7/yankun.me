<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */
define('DB_NAME','wordpress');
/** MySQL database password */
define('DB_USER','root');
define('DB_PASSWORD','19911216');
/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'n-gha9>%iXpjpLQMm(K!w(d} PzgXrh+zlDE~d&=s:W21Vvr-USk/#:#=f^5omdF');
define('SECURE_AUTH_KEY',  'dkCeA>jkCH=i~o,5z]_pXWw;<=;9FP!2p2)Wk><+Upr])3prcBA0e1f3GS!ig,:-');
define('LOGGED_IN_KEY',    'k]u-y86jc#J,Fkc-,=s5B4,a&/3]I!a{1sT5&n<RGfJ;Cr~xr9~SAq 7g7z7s1_u');
define('NONCE_KEY',        '{.DH6>]z+p+TlfL#S-g` { R*Qw5_b)4cSP,1 DG1%GY/^+Q|H7KL`RuMc[0eG*d');
define('AUTH_SALT',        'Snl4?#QiaxQJMP1;noVkYwt(N`T5%./7lA6ZS`a2@!P`h&|s3<| ;L$` t(.V+BV');
define('SECURE_AUTH_SALT', '#AwXP9U%,]edwn$(d{m8q{V$@)0SgIq?)Jz8Fx>=!407V&U#jm@0F>U`*.p]FFxU');
define('LOGGED_IN_SALT',   '#-zOos|vUej4MwWz3X#hJ%#B{7SG7dt>cVF-Tlwq-5+@Fmx;_-/wAxB3.zbRVI|2');
define('NONCE_SALT',       't;4Ey:.o8;Vc+;1~6NW5BpGZ1%>jP:k[0yYKq9$.YfSu37@IB|eEl8^Y&gQ+cCGr');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'zksJ0yQCK8');
define('WP_ALLOW_REPAIR', true);
require_once(ABSPATH . 'wp-settings.php');
