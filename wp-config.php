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
define( 'DB_NAME', 'dbwordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '=uuJIN]wQ sGaNO56U<xnQ3ofd}]t8Gm|>w.VB>L)?Wf;t,n--{0#P`Qej$8TMM#' );
define( 'SECURE_AUTH_KEY',  'A`T5+GX;:o*8w[:bYy .tZtIY~rHR+U`mY3FG[Jj_mg)f-_0/.X2hSmfq0)NzN/ ' );
define( 'LOGGED_IN_KEY',    '9WD).{B,_85#sF3wN|aP~zbkq`+Sk/Q[VG5UC><+c,2:N9d9_]~>R9#_G7o[b,>k' );
define( 'NONCE_KEY',        '4;-.2lF/g^Wu_3}L~od~HbY?>@dV$r2m`OD&lM6<bSiedxphpU0xicChG$s.tucw' );
define( 'AUTH_SALT',        'U2k;/s)Q|MkbP7IZ&[dM~75x /AAf~mwX{&=EWq+#HJ~,X^Es;#R~5n_`<2#G$^F' );
define( 'SECURE_AUTH_SALT', 'gl]_tRKFQ<@&SCoywgH5Jj;NIif c}5JIEw:Luf,:-oe:eUEhQf(PN<_f!CTp` n' );
define( 'LOGGED_IN_SALT',   'Oo17h d)NLSRt.6[OQrc-_Z.&z~dj[z{@e&/WRrT7;N[L4O^Q[9h[6N0,$88D_%g' );
define( 'NONCE_SALT',       'q49RWl9kk$Ou:H)eOiYj,D4dggC0c3O(Gwq8&f!}f+AP`:z*9}oQf5FyB6A|Jmnx' );

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
