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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '<0^4EGM.ECm(xpj7Zd0@uh=3$7ypdtd5I[c7N#]6-`b/fAPxnFv|i?qs$E~i(p).');
define('SECURE_AUTH_KEY',  '.iSX+T.myO=y7k=};#j/y={wFkp^=. H~k@YvmIL r(B0eNSF~a%ky}NMc-gg,0t');
define('LOGGED_IN_KEY',    'CB|OtEjA]PLna`Im/$wE3t#w+dv]IVBP<XP#JTLI#rhCpDK`mJHvG}xn}vKZ#|iE');
define('NONCE_KEY',        '1lD0F>81=BCN6F:}KU`#_6g!YwL3~;Kb+;Si%<@(pk4Ml8w*a?7$yKQf`KK$n=b]');
define('AUTH_SALT',        '7,EPK$f/K<N.IT/1(6SL0Jc?v$~)=89441~SE &~c$9Wx_H:_:r-j49{P(%YYKq{');
define('SECURE_AUTH_SALT', '&fhTl6ST^<<XO`B5MNO~3VK1- h`?->B;z.bh8IOac*-LK7%G5QUhNY^d)Nj[,!f');
define('LOGGED_IN_SALT',   'Xtf19C H_,V7f<7DXoAuce)RYV]8~l,1/ajtx(;AQxk&i(vw2bnJ+NQzF8^..S@p');
define('NONCE_SALT',       '+AHF2H!LDL@Z$;ThxpQB*nz9=c$7~:`?R >d-|{:o>jS(@%e_TU] GY}MqbWoL*D');

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
