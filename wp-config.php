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
define('DB_NAME', 'mmsoft');

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
define('AUTH_KEY',         '@T-l+}c-F&4YOG1XDOdCJUR&E!:25V^)-d7<@S;h5f5Qgf-)iP@`Fow)m,-wfr%%');
define('SECURE_AUTH_KEY',  'lq20KSAuVl9y|J/B%HI1@D*-}<4%pgG:wZ?sY2-G9:oAk|cj_|^1]Ax8Rf;cyLV%');
define('LOGGED_IN_KEY',    'nr,o0+zna5?$uND&S.1%w6KIaHiA<Ke]Q|R(a$M-i{W&?xul(*j<5|~M$])#q00/');
define('NONCE_KEY',        '6_C=(7APy`|#bWDo(R<8(Yk>uZrX,+c_ZI,Bhy a*2$YReS-pk]s7~2]r[DgR9R|');
define('AUTH_SALT',        'b*D)2)$J:8n^k,AZ~_^rB<c{PYz|ZxLF}O%=AT~UH3<jt$+^f[@HaGVQU*CPhJEI');
define('SECURE_AUTH_SALT', '-;|%&?wvUnm^zway0im@y?(owLe^*rx(;H?RBJbSMzc8!|Kkej-b3eeaiaqG^^P(');
define('LOGGED_IN_SALT',   '}FVbDbUuEO;k#hwv)D$exja)lN^M|UG/3;>38eKwcqAWUN~I,Gm2sF{_9/9VpT4$');
define('NONCE_SALT',       '7W|5#?>o9?_@*gcG*]6jmgX@W*Hw--0$L{Ts(/S|B#cc1|Ovkh]C^)c[R|_?cg* ');

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
