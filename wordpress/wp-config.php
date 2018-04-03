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
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'memdocker_db_1');

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
define('AUTH_KEY',         'UpF>X4TP9gt}Ul5/P&CG0F G]``9b^2&sN|1pXo_nEiTk}|XeNj|p#H4[gXSuQ7j');
define('SECURE_AUTH_KEY',  'Qk%V4@&9M6I9@%J&5/Tv8B8tav;/>_L,wm89^ej JB!&bq>|)?.YKJK~u=^;><c|');
define('LOGGED_IN_KEY',    'Pg}4Y(S,TDwBqElIpM_04?O/X7D,a54qVAqTc&dL>?hpgkS7Kvmsp>/23t1V5)!x');
define('NONCE_KEY',        'ylG(q/$Q#UF&(UEYuf7<5`QhK7E}W$==JvWycD^B.bC&N+P+BRty;9t0S43$UI@&');
define('AUTH_SALT',        ':T/i5XX&)xVDB1nOJQl|i0.B!HT<qK<G~|8G:q%d6Y%iT?n[U/YNo30$8yA]oG8U');
define('SECURE_AUTH_SALT', 'D/$!XI6c}}1dK7ha)}yBYJiu>I|VpR]&Om_v08@Y6e&28SHgO,@+} BcFU:s1OxI');
define('LOGGED_IN_SALT',   'P::7>/x~F8:]4y?jwOOGcM4E6DzK^S(KZd~*)^v~]p0SxnhJ,^F_]Nt/17N{,s^S');
define('NONCE_SALT',       '1wg_!~~*MKbvw7sQ_2&gMmQ)$](9`5IFz7G#HGji9VnR=R79XP sy]cjIlmQOinv');

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
