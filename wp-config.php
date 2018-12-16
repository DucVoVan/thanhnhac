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
define( 'WP_AUTO_UPDATE_CORE', false );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thanhnhac');

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
define('AUTH_KEY',         'vGW1:4x[N,qAE:Tr5QI|J`aQ:,Lgo6,?::+97QovJ }E@(%]y-)z*r{5a#^eVG11');
define('SECURE_AUTH_KEY',  '+Va<73ECs>ES}9Zn/UN:y_o|8Dz8|L% X:eu~7LkzZ28S6QF_==4Mo$Q#:.,Xv{4');
define('LOGGED_IN_KEY',    '%.%j06A0$!QMw>QefpzE`Q~H}P8#z$5MZFYblA3iiUBF7eu=w%@| -vcGw0^FW#h');
define('NONCE_KEY',        'T!a50a6=c#XE MKAeQ)&XXSL3s2 YmHN1%(? |4<a)UAQ-S9yI|Wf`Nk/Ua~Xe:T');
define('AUTH_SALT',        'S.?%[(favu}}/#CmPl.VDr~Gi(lX]/l6%e9e[)@|%/UZGFjV.-vbx`&vTi):g-sJ');
define('SECURE_AUTH_SALT', ']V]n5DgbA~3w<0 CA>XFENc64)gSM9(oSmaN~ |}.X=fWZsZ-WEf8#z ;<!z4Rku');
define('LOGGED_IN_SALT',   '/6b]0{=G,K#B41+d!y9ZW2yq 0@nh;1Kr{cV+Pw6Xf?m<00]Er}kb7>H(+Ku]~,e');
define('NONCE_SALT',       'e>oMW X&>k@Mg[)88q&],(%{TD0Jb$ GZxG(jKQSgK*r4Zm*iabD=IADQE+NYp^?');

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
define(‘WP_MEMORY_LIMIT’, ‘250M’);