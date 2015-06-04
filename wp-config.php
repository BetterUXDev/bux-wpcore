<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'bux_db');

define('WP_ENV', 'development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'l_j%T#c|`z^Vyl`Ip^iIZs N.a SKA;B^&o{w<-(^*-xl{In!Pm1U+Z!A5^V} EC');
define('SECURE_AUTH_KEY',  '#f B0>Ux+*L:FfXRF-E{Pd 4&$<saf.J[DnXFKXA Qt]+H3|]7r@|ctf(3 )7!h@');
define('LOGGED_IN_KEY',    'n)s VD=A&/b$[4pX 1:}2q6{BkL+cC&=lm3mV|$NX?wcxxn,u0%UO0Gd<1eQ/Iv{');
define('NONCE_KEY',        'uu.[;.pv~lOG;0|+7JKOl}tbUBK fH.rUnm]Z2Qm<H*biZ8Y/@7lK/]`@V<B;R4}');
define('AUTH_SALT',        'Goqokt>3Qe`Zu|aJjaCX-Z8Tc=P&WLXZt&&JXswIPZ#+VpBhe]I<WSHvnqr&e<a8');
define('SECURE_AUTH_SALT', '-Ja7O_F.1LUw`6Y?bn-M;9T-Rq*Zd(M-l$3{mX/Z$v1iE!wCyQoNmHN#+u(~)W|L');
define('LOGGED_IN_SALT',   'yqx]MRD;U=aB!8wq6D=11W9Lu{Pa Bc%({ZKVE>AO6%S?_,#Ltcr7EZ@(H1:~;4n');
define('NONCE_SALT',       '`2 mjKv(tn!}yYI]Y&`bou]_z#IL2uoUD!~YE_)EM$`{0HbQ?2{E||dV!3;D*9i1');

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
require_once(ABSPATH . 'wp-settings.php');
