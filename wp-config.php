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
define( 'DB_NAME', 'prac2022' );

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
define( 'AUTH_KEY',         'qNP8;SP5WB5r-1b.2U M>`JSzbWq4u;vpf~Xh_Vfk6LQhX|m(lsvkOh%w8*IgoH3' );
define( 'SECURE_AUTH_KEY',  'Ty8OU_J8WL5g[lGHopD/4.Q*sXP^&3ZswIG y~xM#]Ap)1,=jJ6-6R1NxzK_Lp|p' );
define( 'LOGGED_IN_KEY',    'IN;DS&W>um,&6]C>X9ZLHq[by_ gn5-2V(wpMv&&Fhnml&ZNVd>o]e3Eb8 TW3ba' );
define( 'NONCE_KEY',        'V^N[U6 DT8@Yt[BNA]CQcc$2~_(k}[6~;O1J.SV}?`nld8j7Eg6ZToZ6#(4?;10S' );
define( 'AUTH_SALT',        'UH}1dA_3^#b THDhO5#cfrcD[7rz5;`T66;W:?Nns3)Z<}^MdVp8Fpi.+*).c5,H' );
define( 'SECURE_AUTH_SALT', 'yr6i`[XGIuuik T[uoQ8 oXPEJ_M=Yt47(_Je(k 4^yR3XI[8_Nh&;g`kL-O#)t#' );
define( 'LOGGED_IN_SALT',   '27*cU43gqW]*;.*`7_2P7_:!0?#o!EDlv%C(*FICJ]o;w;9z_28L%D)~e.S4=0gj' );
define( 'NONCE_SALT',       '1178-[n]fF3@v1~[Ya^HVZ^ $L+F|cyyawG{NRK`}e<}:o?oKYUjyJK!f}Tw,,C!' );

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
