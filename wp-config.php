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
define( 'DB_NAME', 'mentalimon' );

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
define( 'AUTH_KEY',         '$em[rEFc {;<UH+YOi&|Y@7-_ptld:N 7?E4(uKMhEQjfh3591R,+w,c2w,hc6s$' );
define( 'SECURE_AUTH_KEY',  'dg{]q) &(C(K:}s),` dfP9TkVKzpnoGG;*K5lB>M6YS#]yFaod{|CJ*[hkCtJ7i' );
define( 'LOGGED_IN_KEY',    'b.?i$eHX#E8TAL<;+vm|)/j$r,w4<:>.|OvR_>^Jh&DJvD<svR#C>M]uv=ZCPyQe' );
define( 'NONCE_KEY',        'Bh]]4XG3@R)uPe3m?(DsaU0pe_yF(;*5<glu.S`_oOt}5HyD9@@X*IAZT7O`wOFf' );
define( 'AUTH_SALT',        'Ihj~Wo3J!c^ hTE2zwU<gs-5dwzV5-4_[M%^>7|O.{,vnLdt<Q]RaJ^f2k&c*[t#' );
define( 'SECURE_AUTH_SALT', '}rq(kt0Dool^]9UC6N~U(J7doa]hQ-f]I6jff@hUIj=qg2~PEit7}`7+@_ +N|pT' );
define( 'LOGGED_IN_SALT',   '[=*TdVfZj&t%?$m35xS~gipb3b{%qV]3[E!DSh+?j2wWO|Sp&L,PlEQv5W$S5H@O' );
define( 'NONCE_SALT',       'uW-TukZ0-yDwVo6L3bm`GwYa*0G}!,LP/D1u aW{oKkZN;jVxzan%qO%`0zxD$&Z' );

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
