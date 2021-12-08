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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DOzccCt6%kjjMPsDr|:P<Tm.}Wf[Q<]b/G}kj;z9])&!CirM)I+aMz`+8S|Ev+!3' );
define( 'SECURE_AUTH_KEY',  'sM=afUKsDmVRfNeRnw+l|C&T2-=KZSJwjD_&@`aKN2iLsTI9TQcjr-c%4fzglMsh' );
define( 'LOGGED_IN_KEY',    'L:.Q?JX69EVO4VXt@@jLOIe:JKg*N.[o&iRudhE[L(^F>-qXZWv~i8w|fl{MVkgs' );
define( 'NONCE_KEY',        'yr|mg3)ezZg8O]8>JG[S=Rw%-dMWBr*S_%Ra<r5#{POiJ>TL*im@0v^Lt~y|%K(W' );
define( 'AUTH_SALT',        'B5K[5!exFgw7H8$Z;~m~} n^1HwkFc*j>laQU~Dj2(RHCEd9),*UNkF6l@kgbj;H' );
define( 'SECURE_AUTH_SALT', 'YDwRb1GZ9Us;<D1CbD+y7P:/ybkl)H7IFZRmI)e3zjiKEXn*Sz37uX@HMrIKIWW;' );
define( 'LOGGED_IN_SALT',   'JQo_$j3O;IsFf omRx{#L32mas1y?,1Y`milw}l,J=S.}C3(n[/ =|(R:f[k_Br)' );
define( 'NONCE_SALT',       'iC`6 #ZtUL~po,n<bT|&YTbFYtstn_j0XT+]fQKn_^5J|6m86wk}UzvTwy~X<XfP' );

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
