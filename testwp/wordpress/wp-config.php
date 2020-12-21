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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',*-G%]Vs#Ns:@ @$k46@b{qHA^p7VmgjK<0rS0wIuslDc80a$?I~]OP<,c]c<,iX' );
define( 'SECURE_AUTH_KEY',  'tj&k<7t2#>!XgcpU*R UHuJHB?|.App@RBXh.;`{b?~S-OH^6hL?,|=ITJ%;w9|f' );
define( 'LOGGED_IN_KEY',    'J~7w n>v]pf3,anUb|l lsD~ CKMT7Yx=m0JW}tKl$r88KXAk{VNKDE+KcDL~B|q' );
define( 'NONCE_KEY',        'R8r@_0JH$.lnij-D7^{lyZAm>7Ip*e:q)~%v~BmiG:]Raz@Og.of=zB)~bDadBi=' );
define( 'AUTH_SALT',        'qO$NHZxj![nb^OLeyN`fRn@MCp~-S=T3zn{t~o<G*detUWpxX+R:y7F!S -W`w!(' );
define( 'SECURE_AUTH_SALT', 'VMgc~!N$mi)aZ[Erhry_LUF@({5(zH@f0Js/D%Z?!yXBv]e/Y9.?ceU~lbJ;7UE}' );
define( 'LOGGED_IN_SALT',   '3o=N6}q0=}9M37K3ThgvV{=npXFc0=?[<cwJIlSd2Z^$|ZKv2ZI8u= lj(/yrYM^' );
define( 'NONCE_SALT',       'SlKVvjy @B4Ii |&;3u5M((7i?Ue~X}ODB+(]<Ng+v_xE!lDgpZ~ag#mc:dms0*A' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
