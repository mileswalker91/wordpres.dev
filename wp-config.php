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
define('DB_NAME', 'part3');

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
 define('AUTH_KEY',         'R~!4u#PG+$v5~}DdD_l{%gcyx*9kJL=B{&oXtU)@]Nn-&fJwwjZK<?hL4U7=R^k*');
 define('SECURE_AUTH_KEY',  'b4MIm4fN+:6+p*)t{Z2#ZNp+P$fJaJv-S|s%F3cI}M#]?ug/5-SmT!OyZ;W${cVW');
 define('LOGGED_IN_KEY',    '+Mm[KsXt-[(k(D-*Y+fPm;etlYGuxZ0MfG+BvY;Pg{:k?+amR@/8]}st?WehVqOG');
 define('NONCE_KEY',        'J~tH665j@uikfiRVwOYc;[?H;.ArGpZh9$35G^%<76x)Y`d#N*=|s=7-zb>2V6`+');
 define('AUTH_SALT',        '-`3|36>//hnc28A!j2hc;NrmO8xj!}USb_#2+T3:7/DMOwJ!qWMo4i{}Gr[YRuN+');
 define('SECURE_AUTH_SALT', '11Hw=79yj4/FZK&*8EaN^r 3Nm31y.knK=ET8VM|g<jEsonsd0}lCsk1EEskA@! ');
 define('LOGGED_IN_SALT',   '+ ;6`[)5zTml):MZslPYnyj*dQ+v(ki[Xs{L/xE9)/UD|jE6q{y7X(A-^p~$e6C-');
 define('NONCE_SALT',       'L*7+n82RtX1CcSF5@$V-0j=BeT+Y+WQp`Qe+RZp5(>YHQ.Wuz[*P2Q`-D5;E@4;a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'par3_';

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
