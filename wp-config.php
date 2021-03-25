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
define( 'AUTH_KEY',         '-n2jOz]9sYD=wMB.v W)iXMk5F^f^E2/PJ^8bO:e=!,1FgIKdp^Gs{*g,fy>)NyZ' );
define( 'SECURE_AUTH_KEY',  'lOtP)MHwD1LLRDY/C?I<EOsjG}9b|8BK:C[U)8r#-T^l!o]]Q_z,I>GmJP:`Gxji' );
define( 'LOGGED_IN_KEY',    'mJZfIpA#[St]]b1V_{5HTzh=LvF]E[l taq0kxZd}(vV2:/NK[2x~PwRXyo}N1]R' );
define( 'NONCE_KEY',        '}uB}C[2P0E*Rl<nt+-xjIB=GT?HpYeYD]v3>YWChu8wMKBa>C& )J#}1 ],A>jg%' );
define( 'AUTH_SALT',        'h!Z+^/%GzwY[U-O[$zP0Mq7k}c[F,+!OyY*<|=N/0VjK7 o2lR#w:enG7[F^OM1,' );
define( 'SECURE_AUTH_SALT', 'r%Og/;1$]w-YR@weJ{u[^<9te]`Y#>=>-[/ 7k}vS@Un36n&!Z;<U)?D@wi^t@9h' );
define( 'LOGGED_IN_SALT',   ',?7dX@ceK-Y>boDfLBof}oa$fEZ/0MPJg@Uy.++<*nbb,-(Vv|=gnI|)F?@!VKJj' );
define( 'NONCE_SALT',       '3uxS1LPGseqByZKGuAJA-Zc%0GMhn>~`Afv0z!_IJ#T*eQ4k{,AxTt-v-<vaCYDc' );

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
