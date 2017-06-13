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
define('AUTH_KEY',         '|B4[6q_R=aSgHAkCljg<:RVrxSwoTGa[x-&V2yxO. 5PH%-wB g]~fL.VoKDEiCn');
define('SECURE_AUTH_KEY',  'x{zPZNZRon_DE@j|lcb$d)Ar*9-szW=3Zq*YFZyqhg(G|T;[}jC?rXdC89Yz1:6N');
define('LOGGED_IN_KEY',    ' 2=60ReJxPNFVQW*l$q-=m,+>$TR+M$+7dX3+U{:kD91mm<7*.PEOf%ik{K[*YL=');
define('NONCE_KEY',        'Pn0u+Gr.@I,tT%)02p392Mg?]+9J8<+[aZZCOF`C:-P}GP42g4_H?Av(&&S}T0Ij');
define('AUTH_SALT',        '.;^U^89R0WRC)1Xk[`EduYSLrZ?v)E5:^Cl:cZ}5cA3u++N vU2?2/XdLi)?Qc,?');
define('SECURE_AUTH_SALT', 'r*y*UI:/:Fint5B&E:$m7r.H+MBM1L_Yiq6|]RD$be{XcO+JHb1%V$)R<6qAC^61');
define('LOGGED_IN_SALT',   'M9,XAxqrQmmU)5&N2;Zh&|/O<i@Q5M,>SHg%W:FJ+>w2B)=Uv#v$gDcQ+$JU}qWj');
define('NONCE_SALT',       'l8ua-HJI3XEhUd^,n/ ~!kW5R&2_n:BweVT;wM[EJ-B;dA3Yjt2skAD5{|:VhhE2');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
