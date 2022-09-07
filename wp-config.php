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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


 //Using environment variables for memory limits
$wp_memory_limit = (getenv('WP_MEMORY_LIMIT') && preg_match("/^[0-9]+M$/", getenv('WP_MEMORY_LIMIT'))) ? getenv('WP_MEMORY_LIMIT') : '128M';
$wp_max_memory_limit = (getenv('WP_MAX_MEMORY_LIMIT') && preg_match("/^[0-9]+M$/", getenv('WP_MAX_MEMORY_LIMIT'))) ? getenv('WP_MAX_MEMORY_LIMIT') : '256M';

/** General WordPress memory limit for PHP scripts*/
define('WP_MEMORY_LIMIT', $wp_memory_limit );

/** WordPress memory limit for Admin panel scripts */
define('WP_MAX_MEMORY_LIMIT', $wp_max_memory_limit );

// ** Database settings - You can get this info from your web host ** //

// ** MySQL settings - You can get this info from your web host ** //
$connectstr_dbhost = getenv('DATABASE_HOST');
$connectstr_dbname = getenv('DATABASE_NAME');
$connectstr_dbusername = getenv('DATABASE_USERNAME');;
$connectstr_dbpassword = getenv('DATABASE_PASSWORD');

/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
define('DB_PASSWORD',$connectstr_dbpassword);

/** MySQL hostname */
define('DB_HOST', $connectstr_dbhost);

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** SSL*/
define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);

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
define('AUTH_KEY',         'I-rYz)CRL>j~3A@<%ls7`4yD~W}{3.7~*J)LC<A/{[?Zi gzYzY-=~lZAf<b 48I');
define('SECURE_AUTH_KEY',  'b-r@E,pMsG`>z_l~e+1vJ.`m/Z|4_I21r#(;2-!hyN2Hh5Dv4s]+D9+}UcOVQZ ^');
define('LOGGED_IN_KEY',    'DMNuef-uucfM8(vG|.<k)b+]GBPWa7iNs UFT$#8`@nJ=VFh^EU;sJY~F&=S33^}');
define('NONCE_KEY',        'nj{YD-# nyrlC)`t q:Jlrfc+( 4!N]0Z].d<,yDE[<]8$QK(<ztnI/t-[j{ivd4');
define('AUTH_SALT',        'Wj[H,0nxuuR+Qs2Od})J4^_5N+VlXbSOP%2ZYzF<poI+sN<YiL<?M<Z~<fOLK/0W');
define('SECURE_AUTH_SALT', 'gVrI?0^Ux7egoEx+.:`?`g;%iz`TIk-`Iqr7>A</}eM{*8X9+jDekXVlBt+}-Lyx');
define('LOGGED_IN_SALT',   'W,7veZW+ Gibq@pzg:7j8:[96G|W:-+}}5BND-,+<gx^vK5]h,pJAw/h-@0c-r_.');
define('NONCE_SALT',       'JTS|$}+)=qP-]}1ts6|``e_IS2c595=*%1>_D~H]yCSk8M2<x#+5RD:lxAA0?Wo?');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
