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
define( 'DB_NAME', 'donuts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lD]Tg%$D4, R [}b^:N453vc8;9;E^{g6c$p6&,c&bg~<1|HK%e@td^)+FZ7=){[' );
define( 'SECURE_AUTH_KEY',  '&pK8cRq(2MhNYi_7^CS<o;5~1vVwI(vLt;K*H0PYzB<]Z}ghGnX$^Ktc?i;i=QUa' );
define( 'LOGGED_IN_KEY',    'owf;AC0okkUV/*gS[^>pxK3z=FR:o=?V)&&@>:R2-uaDLkvlb(91 *>oP44cspiu' );
define( 'NONCE_KEY',        'fpghE9-y^}@z#s6DEliac>_Tw`{L<,J-A1hqUqGirjJ`XlN^?ST@Vp=8[ cR-v^r' );
define( 'AUTH_SALT',        'D?|Cs4KFr`~tA~AEa=^><E0^)ENueyPJgbFbZx4)kAPl-) %tq0>8lho[.s8oQ0u' );
define( 'SECURE_AUTH_SALT', '}>?WMz<a(]nz^NgL(kDYOz#/Hi,urx [Q</yD knM+(l8S{qF,dSPh=8O:PI:hO_' );
define( 'LOGGED_IN_SALT',   '^&n>elZ/;e[%%%3+wp!;UU`:d=64i}DTS5DMyDM`[ rA`_B(]Kg%DIJH~gE$haa ' );
define( 'NONCE_SALT',       'VqnAhsnCZ]#}-[^s5a1|%dhRMj`*lE:57ksf.9vd75ugY_;%^;,!.A(t;Xhe:IF;' );

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
