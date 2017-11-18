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
define('DB_NAME', 'memo01');

/** MySQL database username */
define('DB_USER', 'memo01');

/** MySQL database password */
define('DB_PASSWORD', 'bepjange1324');

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
define('AUTH_KEY',         'Bx2})O-1tYrE$XIInxbDv(RN!q.=L5)eYad/D+^mGSho;`lV~!y{%;`]E92=%Y+M');
define('SECURE_AUTH_KEY',  'Qo$Ljxp#P 8KKz]6;b#Y&]z[9R7LPWEi9!Ca9hp@+nYJXsawk}sOnx63= t*E2`%');
define('LOGGED_IN_KEY',    'ggr)GGz_F=M.!TH&;4w8D4<`d5|tj@#6%&[:h.7c#SoE,^>kFtK21W0N@4J!l;9?');
define('NONCE_KEY',        'Ai`J!{=`LU)3+r6Y7q|Z;dB-YGi-_5UPN=[Te85I!{Z*[q~Z;n}#J.{>?k&%VNV8');
define('AUTH_SALT',        '/H^(A*<u$AP(ZIf98EP TVt)MK(?Ix_p*LWWCqgI}/}X,r5nT/9X#tF};U[=3zAH');
define('SECURE_AUTH_SALT', 'D@SRWI={;2v13n.;y*wB.pXPf&KQp3$~A.ok h : iGYH`VJUR0l%{YkYCvU.*0f');
define('LOGGED_IN_SALT',   'lihKwwyzLB;D:iNp)b:~4{;S pd2`)Z:tS$>Q*v|`^^eaW{=~g6b,P%W:}07|DgB');
define('NONCE_SALT',       'Lg2?BRFkTSM;`wP/a6~8L_~ro-op^7~Shw`O{B3)0`S@mB[O^=8Z@vUF~^-e8nHQ');

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
