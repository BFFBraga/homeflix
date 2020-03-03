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
define( 'DB_NAME', 'homeflixDBgumx');

/** MySQL database username */
define( 'DB_USER', 'homeflixDBgumx');

/** MySQL database password */
define( 'DB_PASSWORD', 'R1DfriALoz');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'Ro8Vkz>8NCRg{ETjy{AQq*.3Ibq^{BQjz>7}BXr^Ibr^L9Pex#6Le+]9Six#+]2');
define( 'SECURE_AUTH_KEY', '.2HWm+;DTbu.2Mbqfu{ATiy{AP~:D1GWp~:Kds_5KZOdl~;DWl+;Kapdt_5La>8Ng');
define( 'LOGGED_IN_KEY', 'Ucr^0FYv,7Mcr,3B0FVo@}CVr!4JYNcr,Pfy<6Mfu{*;ETm+{AMbr,3I7Mf${ATjy');
define( 'NONCE_KEY', 'Co@4>8Ncv|4Jy<6Qfu,y<EXm$EXmv,y>7Qfv,EUj${BQEU_2Hap*;Hethx#9Pex*');
define( 'AUTH_SALT', '.{AQfu<FYn@r^0Ffv,3Mcv,PDTi+]APi*;HWmap*2APiy<6Pf+q*;EXm+ds_1#5');
define( 'SECURE_AUTH_SALT', '1alt#6Lat.2ODSh+]9Pi}CVko@:Ccs!0JZo![8:CSl-[9Zo@1GVKZo7Mcv,3Mcyn$');
define( 'LOGGED_IN_SALT', 'Sds_1GZp~Jcr!0JYocz>7Qgz>7JZo@s!0JZv,8Ncv|4>Tjy<AQfyEXm$q*IQjy>');
define( 'NONCE_SALT', 'Fs@}GV^3IXnbr^3Pfu<7Mfu$r^JYn@0Mbv,3>7Mf]ATix<APEap*2Hap*{APfTiy');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
