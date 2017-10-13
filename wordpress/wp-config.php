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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '+#?yN3t!QJgdYUG%UO}uo6Qk;Dc]rjcMZn#;-mg]=69kl7B(-`+szJR[?FUQV_/A');
define('SECURE_AUTH_KEY',  'G>NubOmDr$ %f+2z$l|YWPDb?PGn #NnJc345=p)k;buS!hOwGJI.yifAk)X.-@*');
define('LOGGED_IN_KEY',    ';?aV;+[y>}qlt<]`U!R=3lBz:%VXXAF>AKISU`33Ev{Y#E}p6k82Bn>|E_bc~.`8');
define('NONCE_KEY',        ']dtVM;q+_Uh~h E^-G% }RfKKx?()?R,C)t~u)pxQo|0&:WKo<R5&VcvPgrr[$U1');
define('AUTH_SALT',        'JQYvAboGtgtFf+98c1f*RonXMsYw&@9Q9vI.&,.{;lBeBkY:ag;REo{T9 S!]u;C');
define('SECURE_AUTH_SALT', '[MmuG#xMST=+|y.4^(REjv;eigM1{{3(AT(#thTwu!]:K`s2)40U0%:il8c?N1_K');
define('LOGGED_IN_SALT',   'B,dMO*C^sTEGnBuJ)E<zFhdh0TtB&1|`rfoeAe,_,g*gK+l_xrmCZrdg@Cm8Y1%(');
define('NONCE_SALT',       '7jwPW)r~QO$,g2eKZBS/Hy*C7[qJ^@9E&-)hxp6k<}T_uy&y~k2ieT}Kn-l)9=O#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
