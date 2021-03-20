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
define( 'DB_NAME', 'amar_gyan' );

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
define( 'AUTH_KEY',         'Ga@sd^nNa#T2,EUSkiGq[7{yp|e#A/pHs]+tw}EUF}j7CPTeWq8WP.mH2JR Wj6R' );
define( 'SECURE_AUTH_KEY',  '6,9F8Sg&xlO:)Yk:_HIXlzOH0_IDf0wrSsQ7mxvlu?BG-oC!qFDq7Ya+>(N:C%K?' );
define( 'LOGGED_IN_KEY',    '_[H(RR!f.z~NY<&L84H_wUVMM:#s}2<Z/U[Z~8VGESIt%blJZ]+pp$qGDP&$`{lf' );
define( 'NONCE_KEY',        'Xkf_-Vo[6^((5xs-`e$y )08R{G`I^L+v?gDQbkF.l!}%^_x97zeA])SIoc}5mTk' );
define( 'AUTH_SALT',        '5#nLSW/h7Q=L:ogX$)N%%62a,S6i-NUa@g* cXP~(mE=8!9cOLt6UfN/j -dYGhd' );
define( 'SECURE_AUTH_SALT', 'r#=[&cZLncwjm*yMJ-Iz=2ad:}Q4tr_SDO67O;?+hX[gq`h(#H@L}C;Sb**W@DJp' );
define( 'LOGGED_IN_SALT',   'lg.h@`)[!*TrGV:?jbyWSCb{g9=6v:!f7U(7jam0m.` R@sg6rm51gXhim~rmWoj' );
define( 'NONCE_SALT',       '-_nz2rze62VdnPU[E8!`Z<%kGE@+RpPEGP<*#n[|0^1<+M9[)6Rvd>Vf= >#b:+U' );

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
