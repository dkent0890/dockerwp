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
define( 'DB_NAME', 'my_database' );

/** MySQL database username */
define( 'DB_USER', 'dima_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lbvf@0890' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'Lkpa-Ax@P<KIdu|OG8Oo3*7r}Ayi~RE9[t-!TRxKgv9w[XQi|}!PQ.+3Ho*&ur]B' );
define( 'SECURE_AUTH_KEY',  'd%+ZJwkS|G6svh`{*TEVm-X,deG^q?[y9pB@}Ws$*0=R>JD_l]f7-K)SVk=q-CEM' );
define( 'LOGGED_IN_KEY',    ':UHTiHljl?aAM-A?|DH;44t[ZilRfcHvc2d1SzM#Lu#}-.pqm: LCc#[#?)2VM20' );
define( 'NONCE_KEY',        'N/ioQ>*I*F-X-5Az#cFG;A&1@jji|_s23JL@.wp;}^zE.jFaQ~VB:i5zV[371|}6' );
define( 'AUTH_SALT',        'u-8zE%?3x9,[iU7+AQr}cK)rz9XEnP*t/&9[>M*A9RvlK8u_[ 9m=4A-KS-XApGj' );
define( 'SECURE_AUTH_SALT', 'A$c_Uk:0kcO28o|P{O+lAa|T6g9&+Pw->iD1btXwZB~{bl|]u/:(7IB`(XbYRK-{' );
define( 'LOGGED_IN_SALT',   'tb&aJy9h-^29k]ET=E0+`C[L6wrbBjh|is;=_LK)>90Vz eysJUUuC/-LoIZ3&r,' );
define( 'NONCE_SALT',       ':gT*2pVwc&]BI#>N+W(CRY=R;|[[1N %~ XB#Yyj+%S;hW02{itqTr`T_5o#P$@q' );

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
