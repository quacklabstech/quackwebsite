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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ql8897ab78_blog77629' );

/** Database username */
define( 'DB_USER', 'ql8897ab78_blogmda887099' );

/** Database password */
define( 'DB_PASSWORD', 'd_5~tTCfa*%&' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'g*#af)?1MQ8UzEyBm{<SA@ }yL@F{1)GxO|c~%XV`*f&@d([Isjr[Z*Ky7.B]j(N' );
define( 'SECURE_AUTH_KEY',  ' !Og:-CX8-kd@;GiX62/H lI<WD]<z%KXAeLAw|N:@8o]V,^?[<{>Vc`fQD^Yl=l' );
define( 'LOGGED_IN_KEY',    'N~r6oAYbkpB3QB|#zi7R}9nE<mnx7_|vU!Ff.@6_II(;&mmDI$AhybKdb_kb3YaL' );
define( 'NONCE_KEY',        'AfsW#nKUhS-t}NS9~4o$lolaG~3!abHw^mPUTs0>za0qFl)W7 Ff|9Gd:~.B|i7<' );
define( 'AUTH_SALT',        'lO5#m$^ny=a.PuLt=/ETxtZ>1{!~GAb+3r=f^G0bp:xsO*M0yyy3GhG#UjBQ?3pF' );
define( 'SECURE_AUTH_SALT', 'fW%-JXX*j5[mk<(R8^*;J)M.+z Ov~r{(`!/m+. T5OCoym=xGJ!wZ!m0&5@R<+@' );
define( 'LOGGED_IN_SALT',   'FJ3,rB2:A<8sK}$WZ5ba_XLpDIvMTL+Zo/-2=jrd#%@5wLxK,/9d+7b-xjjQj4N0' );
define( 'NONCE_SALT',       'OGVU}rYx_A9-N~<n69=8zk89wd]fRG3$1i]JV3iq{!?)Z8 GTOh|iE,@;59Z%1jC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QLwordp88177db_';
define('DISALLOW_FILE_EDIT',1);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
