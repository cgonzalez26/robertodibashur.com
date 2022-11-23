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
define('DB_NAME', 'bdashur');

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
define('AUTH_KEY',         '%|fL/4 DjAq1$~7,=1ycIr{XoQvw 7xn=GpoiupdH1Rvt4Lja+xrou3~Se^J*&:m');
define('SECURE_AUTH_KEY',  '/Bt9CgKO[L@l58Km=s)#9b8sm1PIW&(k%JTr;Ibx[t1)!T+N)w}ux_$AJWW7EZY_');
define('LOGGED_IN_KEY',    '&p`I>Mw$tvm)U28kfkN+>9{oxJW$WhS1^(3[%Z?nir<:4^*M:9f|~DxM 4UUN>=x');
define('NONCE_KEY',        'P?U}/DZu<5&SRf%um$Y%7!{J@qCRO^6KS%1;/#0/t9(oj%{&h[zUWvl2/O*K4MX~');
define('AUTH_SALT',        ':8YHb)Ppmvn9%>|>!j_5cxR2m`-GOlcTv4XtTBM7R#b961AwDZz~E-&#SV;zn797');
define('SECURE_AUTH_SALT', 'F7+g3!+Yk[dne%jGrG-}GOwho<c6/0pIKBF$D2+g2,=f/Ufx_`c:ODo{t*P[PYm6');
define('LOGGED_IN_SALT',   'C9O0@VrJA4+O73^VbX_KO Mg>[I$|4,M.ui|u&)4sOPb.#y@,>O>:N`7@9/u-D,{');
define('NONCE_SALT',       '0wBP1M>1-p$T|ZXnl*hV<Y:o4[2svHrdUP/XYdqsSTh(PVGx#qHz58OlRB.CMt1M');

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
