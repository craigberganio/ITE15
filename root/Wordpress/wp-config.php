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
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '4IxOSUV&,0Z5s1#7]Qe2B2f=t/g>%$rz>cMB@(}mr.=_I-A(Z7VoH`3@jueHkP,x');
define('SECURE_AUTH_KEY',  'xyxvu;tP~2T!bH$(gE=@)egX: h5Yt3SepB+L0q[^&H!I3Gj^J%$]0J7S/|OQuJ-');
define('LOGGED_IN_KEY',    'xO`lBUb@la4Th.BiV^q5fdzTy)yWExYZjh<yJLbM|YZK=1K`9t,xtcwehP2X@lO*');
define('NONCE_KEY',        'iZ]CZZAA^k+azT^Wgt]f,|ImAzpl- c8:jjsBD=l mdh !)dXbJ NVyH3ktdML`l');
define('AUTH_SALT',        'R2&vK1%-.]M,1g,!k.dw[exuirD2p2S:CdqK4-%t0B[Fc`pzXhh4dZMLK_T>Lh(K');
define('SECURE_AUTH_SALT', ' eUJ:^o&Uy!VijE4^-EpyWfO#g1F[sC3L*y&XVLGSl>EG[*VT,v99NeXt>P99R~1');
define('LOGGED_IN_SALT',   '@PJ:+zl[FrqE ^SPrNN*^?Zyj-wm%1Kdq~E|j7WJy^2JK|9H0ds/w-25?UJ] O=Z');
define('NONCE_SALT',       '5Me`:t`/3s9%s_r[f7.PS<sxUU!k,>]mTsKo+)E(`I-%tRzy!Tt&YdFq72|GYr9D');

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
