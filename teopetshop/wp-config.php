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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teopetshop' );

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
define( 'AUTH_KEY',         'y:b|QQjD)[*&_*B+q4gJ5(D{WS3mMb3<]S2=.RwL&6,H(DSwc]B7F$iQ5j!UuW@^' );
define( 'SECURE_AUTH_KEY',  'oZjLQd`b5OyCO:ogam31Bm~dKwQ@5.eRE+s/@V?v]-Hdj~6+,zY<sLS_RJB5Kv+1' );
define( 'LOGGED_IN_KEY',    'nC+orkF0m:cl3I()rp<*Ox29p3Ue%oplbDTDxl*5d+k<Jl5^o$C?gSc*W*X,IdTH' );
define( 'NONCE_KEY',        '7mAh}PAL|SCAuq/aG/P5--kD(5>A9b=mL7`Yx5PWiv%w.Q>H8CxR#l`M;S7a?3d6' );
define( 'AUTH_SALT',        'o|tES|=+#*V~X[XvegIi>h^qB*nsL4E<J^G{E!*Dcmp;Ep09 ~7}/CUt{K[GRuj&' );
define( 'SECURE_AUTH_SALT', '&.1!9YIrSMbd]d5Jf.!|p8P$CmlWme0Esr*|suMcTK! 1xohl^!Ya(|!ek;+!-L;' );
define( 'LOGGED_IN_SALT',   '`;nED~Dn|%O#9.YZB)XaFyblov8DUi}`|w-/2:-ANt.9uH<h.StBk@zWV.29ow,R' );
define( 'NONCE_SALT',       'C^0^0=J~U7|0yA>=<~9QEnvi7?(B!$&=Yi7/hPcu b.~@9tTyd,G+j/^mnXpId@n' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
