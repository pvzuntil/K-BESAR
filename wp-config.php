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
define('AUTH_KEY',         '[j8<$>fPr}J@D=-9;0L8|iEL#)B/uSCOv:+ISD5y._c w6.<Nz u%q:OCjUaZ(n8');
define('SECURE_AUTH_KEY',  '~`be&L@o6yh[Jl3O |%QLvqAwvgEKU<`F3G`Oty]sF`m2Q,B^&g$B3-@@>piL8Xy');
define('LOGGED_IN_KEY',    'a$rIPDwp`EVUIz4F(+!cu{0Q`S>!D=Mdh/3.1{>JYidYu2[OZ,%bqXyxg+RBGa|>');
define('NONCE_KEY',        'nsDzM1@bw3<XZ/Qo>yrHQdk%s+G)J;P]4P3^eKM%;QN@8*9q[19K=hFak@:~eJ%1');
define('AUTH_SALT',        '.t3dd4N-Y@2Qw65j=4O#hr,[6G)Vkj!;`~lE8nieCfcKr#m^Sv9 o_c]| ry.x]y');
define('SECURE_AUTH_SALT', 'V#W%qkFx|v]>aqyTae MCJ>%,7R*1#1~/R*1fAlKI-dd,UcQL}P:UdZ~f^>7y_q~');
define('LOGGED_IN_SALT',   'Dmm<aek&H6 ZuuC~FouthBm<j4&;mS5w*^tdRC_Y/b:;?waRiu/Zr4f|&_rQXeJR');
define('NONCE_SALT',       'OFCZJ q%?CpS 9K)X3_g9I/iub~11$d#e/W+]wtwA7%2y#gF+~|p^Sue:Fnlzf*t');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// 

// define('WP_HOME', 'http://localhost/K-BESAR/');
// define('WP_SITEURL', 'http://localhost/K-BESAR/');
