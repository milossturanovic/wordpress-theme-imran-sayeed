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
define( 'AUTH_KEY',          '@h`+aq(/]f^{AR_][a5I-bB+bWcYD+Iey<KEQc)qvCws-92V?G5*5;1vcwq[]1zg' );
define( 'SECURE_AUTH_KEY',   '-^om:ai)22*=%L%}%tI-}&b&X}.8U;>i+ijyl~<{O<X|@n3$_7kQ|3[`t60GO)&,' );
define( 'LOGGED_IN_KEY',     'G:%JS4SN5[D!P|r2]`]EgFI?AD^B]f^J$v1*W27#6h:Dw(Bu{#D0{[>Mz3!)[Go*' );
define( 'NONCE_KEY',         'mS 8qDgXogjDa>NB~x}LDhPe-C-wGO=7/b5IjlEiDsNO-Ys8zntKgl6&z,wXh,Q6' );
define( 'AUTH_SALT',         'N(+2>KNK3o$*?=WI1XJj@K<?pA+BP}}g`iW0j9XU|tdz!E`F%_v/V1IUWCMF%mvp' );
define( 'SECURE_AUTH_SALT',  'cH0.Y))Ys-CU^b F0,%sAL9cauq%0$Z^,`]YsV/YK?zbdi2cG0CuX%7W|)LbhF[-' );
define( 'LOGGED_IN_SALT',    'j4{PiJJ^gs6dy^/E(ad7,>8GleQw5:T?azf5k(x}#Qb ~<v#U>5iMkgQLKbc0th<' );
define( 'NONCE_SALT',        'RiuyO6K$R|pu8^~ceI^iUUKzd`6tB1<Wuq]Judj2&<..!J3O!/`VoeOfh+TFDKu}' );
define( 'WP_CACHE_KEY_SALT', 'RZEAlW%uzTD5>PQu fSN|xbdv]/uKOvn!I?a[C/eKSjQ2=}-W6d#7RuQAR8<U`Ib' );


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
