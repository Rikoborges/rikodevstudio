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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'T?e_FkxM;-&:siNa==b.C>Us/:#KP|P)cWiRir+?&Fv`sV|],P|4p`IZftq;gkk4' );
define( 'SECURE_AUTH_KEY',   's#cO^vx;o!:Bb(nJ8rb@F4,QS<~=9FMo!X.gxw{ Y}d;!IR&_PCw<wQ#:%X<dZ(U' );
define( 'LOGGED_IN_KEY',     'Tz{MZrjMZ>+Y7DtkU!Hnzs3Pb>A^2>!Wlqde$Bgdxj%bRK#{-@Z_[(+<_zGK/v0[' );
define( 'NONCE_KEY',         ' t&?^8`jtpL*97e=PUSAMm(S,Olo1n1&Bv&gaUHSiM{E.w:qHgdj0Z%J9JTng.L5' );
define( 'AUTH_SALT',         'E/6r*lB3O04?pJ]m5(*1|12cEXU{L17o6TR/JFESh.rMs]i5UjHQMh/c?!k_an.f' );
define( 'SECURE_AUTH_SALT',  '=+ING[o$S$JD&FKwjx/c v)poO^sB2udzrWt[QdPUYn;(M][4B#>*v=w}JA{_?!r' );
define( 'LOGGED_IN_SALT',    'aV0h.xeS2h.G>iWO{35aoA.I5F6!$ZZwGZ)-oh3kohUjQ1UScfcfc:qz&m$q+`YH' );
define( 'NONCE_SALT',        'w9L[>MT_XKR|Xi?19SMtA20m{DAo~oF-;#I5i3bfAKY^o/8mg3j+xsu}AUk`:,xm' );
define( 'WP_CACHE_KEY_SALT', '2nLfz@Ka2PILTh:1}*d]ezbXOQf;}>F{,_2r8=6kcK]({huE3PE.KRF/,8Gn%ufk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
