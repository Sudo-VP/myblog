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
define( 'DB_NAME', 'coffeecode' );

/** MySQL database username */
define( 'DB_USER', 'vinhpx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PhamXuanVinh08101997' );

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
define( 'AUTH_KEY',         '8vu!Y6O0GlDwM}l__yhi(gfSl`9(4 }1##hx`*qVU9CyBA~w:qVM{lLcE6GjP8cU' );
define( 'SECURE_AUTH_KEY',  ' Ru>*5O-k[PU<r(bHTF!X(w6Q>AMU|V8bCUEa46atM8SVYOgKxg8@9]]tcW2!~Ti' );
define( 'LOGGED_IN_KEY',    '222Ta(*usm$pAAr;9Xyhu,yKX#^_KkZ2k==,`w650m*s(J5J)jcpa>.g{5$S=sF4' );
define( 'NONCE_KEY',        'J5:=H*}sd9wrLIOasn%XYYvbuJp/^>Rfrx2>Nu]/i,6th`>c)Bsz%52-H7dSb-`=' );
define( 'AUTH_SALT',        '%<D.xB,td-Id7;F|<!;yQ*!j,2 `:Q>/jz(}RUcs?&|0*ix!Hy+91iqTzK$UrT)S' );
define( 'SECURE_AUTH_SALT', 'DjZy|Gm`~&`B/+X*(bcY)HHM-C{~Ziez$q<,IFB};l|uwkjbH,%/no IE43Z:h3T' );
define( 'LOGGED_IN_SALT',   '$^:s&,`PZmgSh8=IW^}D ib[I*KiEWbS]nF[)> QBt=z9CuR35,qK><4UJX^5kH ' );
define( 'NONCE_SALT',       '})qtk9E8gTUe}OdG-B9)eoNfa1l#P.BX,Ml!!F%uVt*Z=veVCg$1mMLr!/ny#ahh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cfcode_';

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
