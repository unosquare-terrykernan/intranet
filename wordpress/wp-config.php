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
define('DB_NAME', (isset($_ENV['DB_NAME']))?$_ENV['DB_NAME']:'unoWordpressxn84');

/** MySQL database username */
define('DB_USER', (isset($_ENV['DB_USER']))?$_ENV['DB_USER']:'w8w9gAn6SYp0');

/** MySQL database password */
define('DB_PASSWORD', (isset($_ENV['DB_PASSWORD']))?$_ENV['DB_PASSWORD']:'ePyzpUgN8YRS');

/** MySQL hostname */
define('DB_HOST', (isset($_ENV['DB_HOST']))?$_ENV['DB_HOST']:'unosquarewordpress.ce9q87nktug9.eu-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         (isset($_ENV['AUTH_KEY']))?$_ENV['AUTH_KEY']:'[VDov6_W/mgYAPQ.MABYWzee?Y}C1klu%X_BMgoXT:Yj=BdQ[r*q/%JMT7oGFDz_');
define('SECURE_AUTH_KEY',  (isset($_ENV['SECURE_AUTH_KEY']))?$_ENV['SECURE_AUTH_KEY']:'6}^L8(?4|QR}O5W+Mwh$8te=$3|21u&mW0guLkI{i0fSq^KvtCEu G{SX`/[#3+!');
define('LOGGED_IN_KEY',    (isset($_ENV['LOGGED_IN_KEY']))?$_ENV['LOGGED_IN_KEY']:'[[gI3]qLFpxHiC63qSqIPB$j8/d-1[Hh1pcsgRPOVt_t9WtIBe*R?f2I]5j <VWV');
define('NONCE_KEY',        (isset($_ENV['NONCE_KEY']))?$_ENV['NONCE_KEY']:'[4M,qYVWFi/zdR:=.,w<RanKW!*51&bM`)9~a/(iDj3r_?LBHXIAU8Q*gzY|&fmm');
define('AUTH_SALT',        (isset($_ENV['AUTH_SALT']))?$_ENV['AUTH_SALT']:'*o%ZC@mmpY23}DTXn9o/m#bIGw,D1Yi8UR7[;2TuQ$80:t$>4T0nB`E6/9{^ ( $');
define('SECURE_AUTH_SALT', (isset($_ENV['SECURE_AUTH_SALT']))?$_ENV['SECURE_AUTH_SALT']:'Fh$)7XIr0NAS:y1qVD2jMWTnxs0o1Sm7:___e6/5aOv{?XX80jUKrGPUqS2,b9!#');
define('LOGGED_IN_SALT',   (isset($_ENV['LOGGED_IN_SALT']))?$_ENV['LOGGED_IN_SALT']:']W%I#l8E:%U/RoRSI2(-];H=MhIJ1!`yAijBd!Q%|X=pO_DG5e+|.Z~ d*1?A_,Q');
define('NONCE_SALT',       (isset($_ENV['NONCE_SALT']))?$_ENV['NONCE_SALT']:'uON )e$1Ep|L4^ThF4v$#Rbvelc[1opz(P*muh;Vg9CdGL#BlZGbAC9@M}<n%B]c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = (isset($_ENV['WP_PREFIX']))?:'wp_';

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
define('WP_DEBUG', ( isset($_ENV['WP_DEBUG']) && $_ENV['WP_DEBUG'] == true )?true:false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
