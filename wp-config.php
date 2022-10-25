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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Zmuw9pEj' );

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
define( 'AUTH_KEY',          'xU 9US3)NM,4_)Sf[eR rp4wV[gcu!]LD{L[H7-Ya+L^#$fk[3++n}a$Iz)PWKNq' );
define( 'SECURE_AUTH_KEY',   '0jg$36,9$>Bm* b$5Jf?MU9Xj,j!,<~f.j#_AjlWNsDJeBO0|qTNJ^{{^{GL|]{W' );
define( 'LOGGED_IN_KEY',     'BU;4])2*K$+TrdyP~Fcf*B <(n_3&gpf9MLxh*{xh-hDTN~dO>%Whm[-S`S$0qmP' );
define( 'NONCE_KEY',         '`pW^r)GCNl]Mo<HWj3Oj{*&*Y_x$}%e;44s`N-:`YF_OB0Y3T=SY2ir81$5K:v$D' );
define( 'AUTH_SALT',         '1hBf8|;*I(PpAlO~259:tk[N~}u;*Sum^5rGF8Xe{I9s)GoMmY53{q9>ntie&C?;' );
define( 'SECURE_AUTH_SALT',  'x!4O@~@>HwQ.S7.Ef?p63*do$#|a[7U8ZbKV%o/b^ER_1Fxr?S9109PQ&%4W%)JX' );
define( 'LOGGED_IN_SALT',    'khd0wnqxStu{IGs6c5S{5(Au#prV0CJhprp-`;<w^RmOPz~o%Lh%$hz/fN3=oR%d' );
define( 'NONCE_SALT',        'F#N!hB2cK-KC}p-w?sY]^=HfJDoVE^|@<YdM;^N#dK#3:A#ScOjZZI7:uk,wuCS.' );
define( 'WP_CACHE_KEY_SALT', 'Pi,|EC$KU&>B>Cj|^;C$N=M6QOlfWYKw?t99;8giMqFSN+VaNo%aUxt~roP?_;5T' );


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
