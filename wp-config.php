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
define( 'DB_NAME', 'testworldpress_db' );

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
define( 'AUTH_KEY',         'Z,}XB|)u+TD5<KZH|2%[y%oj:Dtq*~6(L8)eFeP*ahq=Z1X^zW(5v/su,.^Xa@*%' );
define( 'SECURE_AUTH_KEY',  ', ?c%6s[&y$%N zZ2Z%3A5mwB0b3#y3uX[KBO;TJ4b;3gjB%LsINx=q534bcX^ys' );
define( 'LOGGED_IN_KEY',    '5S_~|S:`g6l]Hvs.Q:.xCHjZ{$;7w?eF!7F}pd6VS{-Z3[]XQ&KNxEYigJdu-FnB' );
define( 'NONCE_KEY',        '(F<pma1IR-9&1N5B0P%a#w1Et7m,(Zd:ZK{C9R`xyN^0(=d_%y!d}nOC;]2r@b6.' );
define( 'AUTH_SALT',        'brGjfG@8 jp)2z{72)P>-cW`::z5V((cKJz}2W;#**?0=xEj-fHL~n~~sUkHerkn' );
define( 'SECURE_AUTH_SALT', '!,(2`Poz2#v5*Kk49*W{[=4MG;^obq2)k_cC7AvFo-Fyn-,|~!UC)z12ft59eScY' );
define( 'LOGGED_IN_SALT',   'e2ACI%7p98d{!*HD:Q.5-pe2r#vu3#YgK-uA7[}T-E9dr))u}@_J:qP(!+`y;iIX' );
define( 'NONCE_SALT',       'Cv(E,hZ8Vbj__n,x6z;5&QW|J~or&:~cEqT,2raD(`u{$1jz3y;POjd3ooI!a1aN' );

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
