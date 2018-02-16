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
 define('AUTH_KEY',         '4y~X_BTXK##4U,psoQsSX-` TPUm9o(POuBpSk+y8HnJlONcFYU!ACQ(LWaVkd-5');
 define('SECURE_AUTH_KEY',  'b:z;H-gf&->aCJhx|)o!.1Xdne;|FC]&E54WC51vqcq8m&;|.<<Yi|oS2Uy D;;C');
 define('LOGGED_IN_KEY',    'VHf)%Ax:e<+*E38/W ~/H1bGWXDp~[z9c+?v4Fc-7*{jY+{i|^WBXO!5EQhCyNyi');
 define('NONCE_KEY',        'LFWxl]5z@$+XTTuG9?B},#a$*T(!WK8R)7E0y3BauAeG9roB k UpXB/nbuayrj4');
 define('AUTH_SALT',        '<X6Apt-1_yS.$cyY>YjKg{Ui<Oe8=k~5-LXWrADi/DpdEk<1t<wp<IP0D~Xh0h@V');
 define('SECURE_AUTH_SALT', 'K$,>kS$Ds*_:@WAM1[oX4C7:YX`4{+;*vVt8Vj]e)-swi<+)HjgQ!1GQ;id5u2Gt');
 define('LOGGED_IN_SALT',   'PVxMl~i1jEpe~w`AuIV05MD5,&L{Y-~AqsfA(*%&&s`z,UXl?e6a,&vhrHRAz3M2');
 define('NONCE_SALT',       '&~|eb{vhgz5BSH2@b-J{X2x#7Z8nM7JD>$M% |Y4V,S~VR&:=YkBKH7r03x:H5{G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fwp1_';

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
