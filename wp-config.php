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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'leenverbiest');

/** MySQL database password */
define('DB_PASSWORD', 'L33nv3Rmysql');

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
define('AUTH_KEY',         'TDf-2I80P !-EpxbERbZHt|]_(3XlXK]*w^)e_9*x#0ed.O!m|z(P6YUgBsU86m;');
define('SECURE_AUTH_KEY',  'RQ]a58azKL,;3xX6VHCk6gKn9a80<Z :Sp+^:fB+p(4/1M&5V{ .Jfnu ,,D+(`^');
define('LOGGED_IN_KEY',    'y4V^e!vj%W(=itO ]maGd[^jj~B=C}:k9!,?_~Ct+*/7]VG<z,ZLF<5&~}b6(HJ6');
define('NONCE_KEY',        'Khx/z0Bl+xFOeCKcT!W.k$eF#hCL<~)zG6q%v2mSnYnMe}%5uyDe&0}a#WUt]6hZ');
define('AUTH_SALT',        'e{!)j_6nsW9#T>o-$/=t=,|RjXC+^Im2]Z:>PQ|;e$`U+tE|R]]!|g#%*.IU8|*q');
define('SECURE_AUTH_SALT', 'vd3Pz}T]odL}!d_C+:kJb{d62$xR.}coj 3#BQ-,<: CPLTWrv1q[bZ{7G0|Zx&O');
define('LOGGED_IN_SALT',   'm20S~~Hx-B.Xft;o1YMI;dh%{?*8D+FoI.8{?V|5=&e*7#>5DHpH .&ymG[aThn)');
define('NONCE_SALT',       'drBmdT+.;+$iE=h]oY-JU@njOaKH$kr&[CCNg71fK6*V=ZCwv#/UwONdk(,YiWJq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'abc13_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
