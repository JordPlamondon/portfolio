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
define('DB_NAME', 'testproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'S(!}}*A-UOy6w3eW&>!,S~?`wbE0VOJrdFe*FqMh<xXErwm=RF-u)i,g{MhtVasJ');
define('SECURE_AUTH_KEY',  'T~llU1&X#F$GZAC@EoY&3s7l0;L`myc^bxV^xWn(,fonxu<EEy}v$y:MS-=~$Qts');
define('LOGGED_IN_KEY',    ':SYzO4pWt6<c XG2=*5o?{k!W`5uIzj)W5vI.4L,:x5,SU|__+z?~ViwT/wsp$jq');
define('NONCE_KEY',        '|>n| w:Hmp;:=yjA[Y(v5}r6p2OvmbQoq!3Dw_SOb-LfU>EKVUpEQEe<h-yxI^s[');
define('AUTH_SALT',        'FwdgX.o;O|83+mergz7s]w9LAnXkK(wp-@$v&f5[zcILPvJonRx;]cX9nRG-F~,k');
define('SECURE_AUTH_SALT', '(AiXG4wfTig$U|LH]u<;:-^Rrx7-Ow`TOusnHnDHUR4 n#xHmZAc,_oN!q_5$c3]');
define('LOGGED_IN_SALT',   ' gZNOYDM}Pp SgbUwDIBb}Btc3NOwi`]4i>omoKw*d+/luVZ>aJX}5*3q2fWiltv');
define('NONCE_SALT',       '&8Gi[mQ:$7dxmC@T2h0+*G.mF7w+FlPPe{hpvWzL%z20Xy1Oxxz@o/kzdk1tL~P/');

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
