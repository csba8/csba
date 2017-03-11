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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '8kjBm7V!sch&C:0p:4lw(?TnW34BKf0]9^V?2+gXHt}o=fJOErszj*#)r]-iTx(7');
define('SECURE_AUTH_KEY',  'e9o8{#|Wu~%3n0--iniIhx*pT/Jr!fow/#7C-%M G[Jz;d8geUlCu{3U%%ZOj?oG');
define('LOGGED_IN_KEY',    'vqy#&1sGo[]vwz}4WF3.f_b/)##|L`sNVWt4pDL6b,Ph+Md61(7/NEOELwD5Qu4%');
define('NONCE_KEY',        '6|d6P!Azgr0iV}||uAlDVu p~@n:oh1Ye-|LLQwe<OD#S @C;7/^@?Og{)!bRXac');
define('AUTH_SALT',        '0ZhC:&V{GCGhNt?5qFLG:;htO>|$NEIn8m}~/K%e1DwZrYH7Sd{nDnl>M>*rRR~J');
define('SECURE_AUTH_SALT', '&5-Z|11&6n7`EusM&r=MzNwuRg|c_Y_U0m(kRg{gL..@`^PH^0D~JA,93+|em#:`');
define('LOGGED_IN_SALT',   'p7P[|B9=Q mcQ5ttfK-dS*hmi:}+l%Ltfb8%V&,5.&N^{;4h2,}jwq5JNLr%-4Y1');
define('NONCE_SALT',       '2/IJVsg3xjHV@hz(wJjp:5H:}S10OL|$;^ubnZl2b` MF#na{_N$@_9^[{~pd^#*');

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
