<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', getenv('C9_USER'));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//define('WP_SITEURL', 'http://' . getenv('C9_PROJECT') . '.' . getenv('C9_USER') . '.c9.io');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!KGb}-}-XtWt`F;-?2$<e{CD^E}i]GU>rS/Dw@noO2PEZbZof<_/p{en]VoBb-w/');
define('SECURE_AUTH_KEY',  'wA!zBn<D&R #mTt2^p.&fQIAcYP=k~^OcR|xl7*O<6$q`3k e~69{u_ @.!WjurH');
define('LOGGED_IN_KEY',    'h1^N@uv>Do]|n_<p|l9U|1~~_fj/F7p&I R-l]#Ep#)M[Cw7m@T9}r^i{y+^#cB_');
define('NONCE_KEY',        '/@-3(6Xq7u80Fks`fr>Zm(+<*r)c]E59`I@+C;b]AqkF%-z[6#Yk7-@N`(g9T/w,');
define('AUTH_SALT',        ']])^v4avEJg EE]^i|y<b$;L;~ea,]D{Djd%?spwv7k9~hyX#:7HQZ>lV)Ii]wrm');
define('SECURE_AUTH_SALT', 'Lz,*eJJYi0*==MJ!tiAz*Egvm%]]RE?0>:lxU[Kl__H-|-)7Q5.dx_iT$#IA7FV@');
define('LOGGED_IN_SALT',   'oMm$P<.d`PnMt$o#N:-M{Q1tO?77}2k[s-;tuH!l3u]7|w:W)l0Z#X1fLfr5~p63');
define('NONCE_SALT',       'qv*u/Y!giAqOMECgm_,EiG$5jFIjh(CBlk$ZMiq/@piC8Cbhc3_n~-aDPl#kjK.>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
