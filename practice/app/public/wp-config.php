<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'D8Dv#5T;4|Lx:FlFW)GZx69W@8gE7x^%cGG{f>rn(zi^^=jEKq*Wi@L{nZ@ip;V%');
define('SECURE_AUTH_KEY',   'S#j#4Xu6]Gj+)V<&|WtqvIdA }8]{`R{8]7#c3a]yU?i*e+X^Iz{GAy6%iEj}mt5');
define('LOGGED_IN_KEY',     '.dmuw7?Mkc~hMQQuW_/U{`A0/d~=rdDBake3:Zf&%vHqM,BF#V1th5bKrR6aso[%');
define('NONCE_KEY',         'j(|Cj%/EU-x%}g5@Dh}S]]N~XILaTEj(T4q}s:Q*:[r$LIYV*p.`v9wX-ZdsPy+y');
define('AUTH_SALT',         'mUmVK8T[{tRgEfJqNwqW:j+<bHa%lU]mGd xx3*(xUm ZAUAE5h*rUXYwg2u_iD{');
define('SECURE_AUTH_SALT',  '5IK(_deARjl-uTI7StiNe0]n O[?R`>t3t^a)o]&qN9,]]u.,Ocw*P}:F(DAcP{j');
define('LOGGED_IN_SALT',    'F/g7 <-OJHlBJB!s.*07(GJV|NK/2m.&)`VM=<_nW BVc1q^mSy-t7D}53V]:u0)');
define('NONCE_SALT',        ' #!%wDd!.;auJEHuDhJ;/q?mH#D 0^ofTTu#L~wLMy($<1I;aqe2T/SS<X:zoEsL');
define('WP_CACHE_KEY_SALT', '#KW)$S*YO}E*KuU_2z$F7{xrNXMG)0r[jD $9Hs{=~TlRc%HIv(}k( |iyzhXwF>');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
