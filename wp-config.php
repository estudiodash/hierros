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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hierros' );

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
define( 'AUTH_KEY',         '|&NC;~?l9D+ 89|S&.Yj=]Q#<.iX[u9&sB?-G%js@5{P}%zX+^-.rznE4bQx8RS/' );
define( 'SECURE_AUTH_KEY',  'N{~-vJ[YxHxN(Tgc6TDCjc_/94}SPq?+i;hsRZAQ-yg;A`LyPu^=*XY eZ9n-tF@' );
define( 'LOGGED_IN_KEY',    'AXp}fgEdm5s?_,@+}178HZy..amX+G;/M-qH5E! e/pDj?wldy;lAe,I9a {!bTA' );
define( 'NONCE_KEY',        '5DJg</v_^k~S{Xn_7}/]|,fgSkJ0vIukpIlNjVi9+hk)(E|0.h-YNNF;_U.tV*q^' );
define( 'AUTH_SALT',        'Jhn%$W6t}F/8@oUD{gwH*`@gSLpb%MCT.8]NESl.LPEBu%G&2nQu72#}-wNZ#_A ' );
define( 'SECURE_AUTH_SALT', '1G5a3b{C-,$7k9D;+9cY?%C{xaua]O6f|]*WB)*GRqn~A%K. DCgC[B0H-!~2_pC' );
define( 'LOGGED_IN_SALT',   'y@u8yK&m-rRM@]E6_Q1)Y8@IdUy4{-*`E]7v/w>@,ww=]#SMkL&(,<H&x4.) wYI' );
define( 'NONCE_SALT',       '%XmE0+AtZdHM;b8=7xn`~@.Ma6)[Pl:2kZFG`q*DHd3oqwC5@kMH$>IOA9y{ VA#' );

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
