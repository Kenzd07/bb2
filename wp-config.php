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
define( 'DB_NAME', 'projet' );

/** Database username */
define( 'DB_USER', 'kenzobts' );

/** Database password */
define( 'DB_PASSWORD', 'azerty123321.' );

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
define( 'AUTH_KEY',         'adRVjsnlc7OUw_es=EEDuXLD-J([C{ zW4[rGP^T`)BG7HzEHT(2]Md=#)G.DJQ^' );
define( 'SECURE_AUTH_KEY',  'Lat(E<i_Hab?eYBEh|[P{iB%]7t96G#_FsQoeo4&[ov,Pkl|O>#Vj(7S2bve/id,' );
define( 'LOGGED_IN_KEY',    '^;GW=D.P8Z).m7.Hb4=4{S7S0LxcyuvL!-nQPP*!#eJ(&FdOznesq{y=,}<mpWJR' );
define( 'NONCE_KEY',        'G.ith?]a7y:qvt@_*>[CS7,4@V? 7.M_2rG]=_IY,+yW!:K8KWR%xuLO PNH8BqB' );
define( 'AUTH_SALT',        '1T&z~25[Y/G?YQ7HGw@TQcBPHTFL:UXfv[N=ElS]Uf{,=;jtTI2h^_&:z%</|n:0' );
define( 'SECURE_AUTH_SALT', ' SKNdDxkTsds55CT}^lj+:em5x;$,JIHa0uqb#G|Dd=2dw5;UyNNEbl1q;FaK|+G' );
define( 'LOGGED_IN_SALT',   'I;o>%Vw1-7-fh9*,sq2FrZuL{G>ZC?:!ln3:fmUzXuH&QLck]ATe<d&X%$CG5.D3' );
define( 'NONCE_SALT',       'XOk2Qlol3Pnxi}Kf%<PFuZ5iKP|;7e@znS%gt.onpTfrZeK H*_9cl*WGxC)$.Ja' );

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
