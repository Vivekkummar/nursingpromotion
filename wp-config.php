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
define( 'DB_NAME', 'nursingpromotion' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=rv6a4XkxVituNeZqx ^_J:e~J8DMW=:q#pw$Hy9+!8l3YcS hSk@yfpE9X$>?1~' );
define( 'SECURE_AUTH_KEY',  'L-a0,bi$kEj=>G;=F,%PU;X)6Y,_DYWBY}USAb:ikN}+43lO*7G[@H(9p0BNcip~' );
define( 'LOGGED_IN_KEY',    'L54{7Tj>aze~Q}}YCNwf~(+FCtr&<>~o&t&|(U{A/<5l*:P?(<cn)e%eLc:71J_G' );
define( 'NONCE_KEY',        '2Tjqy]1O|vHb?9&^2z?3-T6W=!L|?2{Rfr/H6WwV,`{nC%KP=,!L*[F03=JW44?=' );
define( 'AUTH_SALT',        '}F~UP.o>m!$13ckTaJ /NzK.1cu[LsgsnbDjh#G]+bPuR(OTu0$v1>LjS|:bUV^u' );
define( 'SECURE_AUTH_SALT', '|Evhg_{|MZ*^_;=$-mm[+-~=+?<T=vW$d`#,HL+Q!znNlK~0:WCXhSn0rFh!Y6 @' );
define( 'LOGGED_IN_SALT',   'Hi&;yB$mI4.ITo+<5t<e{rF.fQYQ&R@HZP;gHa.A/K!G/xV-ieI,`y8/f/,o/!2Q' );
define( 'NONCE_SALT',       '~/_M,mhaG4F; E+ G2a>R5T4)?_v]Xe0w{K6ZkI-4kw,$h3Ea}ZoK{A)C4uDPlh~' );

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
