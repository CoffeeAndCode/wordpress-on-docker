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

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_SERVER['WORDPRESS_DB_NAME']);

/** MySQL database username */
define('DB_USER', $_SERVER['WORDPRESS_DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER['MYSQL_ROOT_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_SERVER['WORDPRESS_DB_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=;:??K%JeHtFgX.|G[R~=t-}XpP70)oI.L|a7(Y;([!w`JL6xY%9:TrR^8k[7Sj~');
define('SECURE_AUTH_KEY',  '*,+ }joSb}&Q?)>+od`-Yumf!^V|2.,;5>4+_QzuS&mTud-Y q!/+eP//Sa;Tq5/');
define('LOGGED_IN_KEY',    ')RVqVV)-GJ0 AF}Zmr}+`g$nnqK]zD;5vJ[ivL+n-A3~Uc|uaP-:D,Qck%-I;=.V');
define('NONCE_KEY',        'KK-Tb(yBeM2d.ZHc2+9Fl8wh@JsjYUf:g>Ph!Vx=Ye!t~p1BAr{b9[+&_e?.cIVe');
define('AUTH_SALT',        '^@*rP?Bn-]J`}O}y3RD9^;H.1T<3L-I3/X]:E|~:G`IcmkbP;/+tx=nxa>wBx_wt');
define('SECURE_AUTH_SALT', '}]lC~Mo-0G6N5ay@<_J=^jeG:j?]kRs/a-?|HFx}3CR(wmKT*lh IE$#8RLNvy8.');
define('LOGGED_IN_SALT',   'Uj5_}y=xchlmt[3:feWrr9%9]-<7(@1u(+U3HwOv[f$2.Pakx3MU<3ue|R0?<XW}');
define('NONCE_SALT',       ' R6s!4:h/VyX-svl>qW#]VC<9NjDxFfP#:4L)DW(QF4UI]zF!5m%|xAj:tCGt,Td');

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
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
