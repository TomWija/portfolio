<?php
/**se configuration for WordPress
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
define('DB_NAME', 'portfolioblog');

/** MySQL database username */
define('DB_USER', 'portfolioblog');

/** MySQL database password */
define('DB_PASSWORD', 'portfolioblog');

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
define('AUTH_KEY',         '/:C^a]^._c(8?Y|8+|qZNb$Fn^w3=cs+~CUZzzjxSK?jz|%k*| b$U<Kdzl=WmyW');
define('SECURE_AUTH_KEY',  '`L4+5}^NK*d3U_N{!/^r9mM&L *s:fyb=ol/+O-|;^$!-fS{gCB5t:)y8$-lhqsE');
define('LOGGED_IN_KEY',    'C}Ee;?A24hV:2.J6^))qKlJ>;5Q`c.krfADL,p&Mby0+G1`-:}Uwqk{A`6=9x8g4');
define('NONCE_KEY',        '#eO&$?eT.dMN>JcJOE,bZ~ QN0j2d~E1#uJ.]|4Z1a4_kE|OER(3Uk.R6 Z.f*@0');
define('AUTH_SALT',        'WCsRH_^_c276He?^W#DMXPJoUL!;#jbex%AEa(COtPE6jy_S5R2(i+!O9=`RSmhz');
define('SECURE_AUTH_SALT', 'i<ti}3(mJD]prC]$PeF6eK7B*IJd3y?1-0MvVBMW:>g;W:aa9b4htGv{nj:GvBlF');
define('LOGGED_IN_SALT',   'X;j{c-:rHJhpTXGcOGlA8R&e~6O}S*<tWNG>D#Y^Xvo{zqz$}#y1SzU:o_2DE8d=');
define('NONCE_SALT',       'GeN4uaV`IB2&%Q:5[f,<xXB*L|h)ol~50v&~g)EjH1oRh5?i}#^<,L09;Gu5$FJ!');

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

