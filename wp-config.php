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
define( 'DB_NAME', 'Mademoiselle' );

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
define( 'AUTH_KEY',         '@2@E^:)9%{Y}qO?Jq=BCrQ]1{VX:mtI1&rZ7O]^=HU/07n0a77q:[l$caRlkX}E~' );
define( 'SECURE_AUTH_KEY',  'R lj(]VV2x@Ze26NNtMy&UFMEHJgi%cnTgq:A5T|WIkf2v#}5K!F3Y_LZR/pejTV' );
define( 'LOGGED_IN_KEY',    't469_O^S8qCi582J_Z,z8[#2sM;QYZ2v92NtEE-5eh)`]^#zD/CkCJ#7|&!<n/86' );
define( 'NONCE_KEY',        '|PZ5:J#qjF6L{,`MvfFu)@K5X*H8Muj)*5X^.FdfMiLFRI4R_$58fa@{!2$L!0,)' );
define( 'AUTH_SALT',        '{CAE3cf6:tM|4>nU^hvvrZrS*O$y9=?Dk[P%_=g8e/T!_`C`nvxHVh =jF%>g]D]' );
define( 'SECURE_AUTH_SALT', '1`vuhJ0*;>/1-ig1dXeVj~UD;[q.+03HhD2~GVv9,w6>Zo<j7tK2@Zw^m^k+)!B_' );
define( 'LOGGED_IN_SALT',   'yz$Z7D^>.bH1_=pT?X(bpOZsHsxM}t/DGqRk.E#%Bo65B;woIuyPP`&I=BW]Qu8c' );
define( 'NONCE_SALT',       'idUVqR>bY6b(;%n<m-7:vs~eEeUwKDM]n-|:iXoB.{}x=R+TIq{dKbO:QvvinEly' );

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
