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
define('DB_NAME', 'wp_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'jM(Y8?J3e|9]%[(.lSTd|X9K Z;)z=X[ebDA&-3uH Pq?22{!FJN-`a_]PV4|)#v');
define('SECURE_AUTH_KEY',  'qi;MfF4d,;hjA+K0|?G~Y6Wps?hdN#L+}DC$6+z<-?0+6kn2s9C%PM4+U]N^E!5q');
define('LOGGED_IN_KEY',    'S9,`5D_Ev-yO%>y(j++Z1w?>-hJ=]LR?jE]_dD@tGLxAT@x/B Of79$]+CA V%Ag');
define('NONCE_KEY',        'l[B7+Z3c%1o~`hT#tN.qa&92%R}!-OR&qeNKBNL-Hn+d+~8cg`- 1rxF3r>!;BU*');
define('AUTH_SALT',        'bnjHA/TeVM!P=/d=`S}eK,+4+,V e-sF](}+Fr:{.q8IfWS+]3{qK2!,CP$J-E$t');
define('SECURE_AUTH_SALT', '1O;[;Dv~`duub!P97W)aR 3(48NnYMb^`+(Is>q<d^fpi!frz/7k=-#RKfki-B2D');
define('LOGGED_IN_SALT',   ';Z6u{a 3|jv*sl>=_ <0$LNtLF)#*PrL4)5o s7eB@gTI0x*.SrD8A|CSgiQ3*@r');
define('NONCE_SALT',       '|-J?bJn#fk-E2-fihBJ`v5u-T>:U-8u[|1EUQ;O.6Q}HBD8cAtJ[JdUqmhi$Z72e');
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
