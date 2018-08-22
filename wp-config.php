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
define('DB_NAME', 'finaltest');

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
define('AUTH_KEY',         '+g04,-yPttrof_qpciXn03FA89L20|;U,}QX*VROZM%t=4TnWMGFkA0I<HBeG(:0');
define('SECURE_AUTH_KEY',  'C-Pr<Pwtz]qd=M8fG.?h>Ar)I2|lvT03xwzQzPL{pRK)hQ_x~ E.d NpzD+R>(T|');
define('LOGGED_IN_KEY',    '6p%aT QS0ywRdktU/SO9Q[zL:+[7YA&75/,[1edy}Y<N/H9q!UXW^C?_s%JO[Ug-');
define('NONCE_KEY',        '[g5a/]FjqCxod?%VwpwpNxc0V_cdo]Zl7M VSjh^JR<E,>r*-:.+,_%0gh)s}R;K');
define('AUTH_SALT',        'SeLnWTS/?8G%+%nH[CSyV}FE1QcwCPmc0K m>]TLv|5OE6y?<;iihQHNY(=P:(q2');
define('SECURE_AUTH_SALT', '$y?CtZ7<!Ds`[%6vi0g[*](<0}#0SQ:Mm;yfI/=?6>d$HSf&(*u6pcP/tagJ`*.S');
define('LOGGED_IN_SALT',   'W?<hW_`F~`ua}o(mDw8zBlE>aYai%/3,dEoTLRAivCP.:;}R)+tHdu)@Un#DO~]p');
define('NONCE_SALT',       '9(i!*zD&V=8Py^MM`7P23med~y+px~zbI,/4gJZif$FcmdPmp>,9`Vh}V}|a8V=4');

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
