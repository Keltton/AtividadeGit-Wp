<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bancowp' );

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
define( 'AUTH_KEY',         ' :Bk+ 7Bii?h/1g)[eTT#S88>QV@b*-nKc8=CZjo:Z]dWZA4=zx,vJ^3>j`_-Fte' );
define( 'SECURE_AUTH_KEY',  '5gO=OvZZqlw+de%Wkl;_(I3M6-_<3S,6* @d;J%G>Bsl5-/?Dbk}Hy?I71<r^Z]x' );
define( 'LOGGED_IN_KEY',    'w%Yz_3oOHTwsxo0zdZH/L<$V:4UX2nd&,-4nkO75GSgjvfbr/#s18P3A6l(h<8k(' );
define( 'NONCE_KEY',        'R~C ?V~q:VwT)J_tN<+<U^Dcq}I897m0P2w?$Z`UB^ l:U1r.|B~Bs]#3gPD][Ey' );
define( 'AUTH_SALT',        '`h<VsG~/qWIn3s>G>7bqOD:R}fo0(^^68f*859Y}?,{7iZ6hk);Wpln&T1?|.e>1' );
define( 'SECURE_AUTH_SALT', 'AKx5WD*ITp)<{~6cvP/Bg8176-Uh2Y]>wtIu9Xr5QYQK%)VV<;yAZyD4ZzQePT*B' );
define( 'LOGGED_IN_SALT',   'cF^aJ:WOdy$%!TZ,%Vk0Kh5~VahNA9[4>d,jNFi@{hL7!mV^#J;[~R fP2Y~CO;l' );
define( 'NONCE_SALT',       'oT2QS5&h5.<GLQdw3}>Ep)h>t,opLT68g,/@R;Fq1n?CP yO8NrS[<,8i.*M^UKs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
