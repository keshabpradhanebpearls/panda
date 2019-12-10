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
define( 'DB_NAME', 'pendal' );

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
define( 'AUTH_KEY',         ':;.H((bxO@cwk]yf)1!_Z%|YGq$57AWto%^8j_=kJ?Z$I%jd4G!CPwJ0@eM|2:h:' );
define( 'SECURE_AUTH_KEY',  '~4;1ez6N8mN8l(LmkeRs &ER>1_g>uHKbc5ku[m`hCI/YV_,}8S`gaLs, +dG2PQ' );
define( 'LOGGED_IN_KEY',    'dIhuK_(v~ZJw&wg+,22 `&lsE( $TbW(2I;SWZMyX.Fo:n&Uw(GFCxyuj}aFH(IX' );
define( 'NONCE_KEY',        'jjz*_i.MRG:@@<3YLHacDlW]lBw%W(E;&3]{4 _RUmrkgj1&qqA)ng{o=n=k&EgT' );
define( 'AUTH_SALT',        '<SN>Eno,H, if/5lNi-(LA.*FKXrVzjsw^&xus^6nS,^xRf_C@d}gY7 rrg#`W:#' );
define( 'SECURE_AUTH_SALT', '*3U?n%Mia*,syh/9335A(q=x9yL+qn=_3q)$A1zh]v1nUVA2wpi{6K<aQ)Y8c^T>' );
define( 'LOGGED_IN_SALT',   'NPPQ?`y~G(s6Gf~iks );W,qhmmr.*RSS^frL ]6>St3FC(D5}@</Md.u62Q015N' );
define( 'NONCE_SALT',       'ULN1(4eWyIYg$ubQ@neKA:NWxGXnXE@k*8d^EX^5WzAyO((CE-pX11k{V3}7#) &' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qj58v3jfxk_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
