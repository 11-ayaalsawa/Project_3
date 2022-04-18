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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '>A#.Ashyolh*-yWX!gMBOY%xM};Rzb|-hVK%8{2GD>6*g<&2z}:|@6orQ+9.^M@f' );
define( 'SECURE_AUTH_KEY',  'in|ZQ?0Tn<UHrh#8f`w).gn=r*6bW_PvSZMbQ.7l~kDQn1O. rv.I7ge_=Iewa#k' );
define( 'LOGGED_IN_KEY',    'SnbrryOE0ms!+eCL?A;7}_,J`S$}uul<wuR]pHj:}qg8vAr|f/ETVO(vq.B`cPID' );
define( 'NONCE_KEY',        '1%DxVvDvru:V!ceC9EhNX>Ye:y.z+i{(C$jpybF[x];Ie|$Um2/em=2;ufr&65FH' );
define( 'AUTH_SALT',        'Dc[z$Lbse .O:>|IDHx[<e<p&P2!82$4HbW[zF>byLFEsJT`z)/s.fX}LNil)OMY' );
define( 'SECURE_AUTH_SALT', 'Ip] i=i6!3too[SB#lA3dFMtnK36)-vpC@t.Z?fKB=Gg*|g<cZqb!0hg.SGy|Us9' );
define( 'LOGGED_IN_SALT',   'rjk~z?ih:4ES>[<B_<C#7m^#* R@T^8{&,/u!+<NN>/tN[%nXDW;Xe+:WAwhm*z$' );
define( 'NONCE_SALT',       'ClVhY8P20IU}7!I]}<_c^4|MSk$w4lHQw4.JmKV@D$*!ra%%:o6Ne2>MFv9eT.<(' );

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
