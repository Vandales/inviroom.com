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
define( 'DB_NAME', 'inviroom' );

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
define( 'AUTH_KEY',         'Zx{x>J={-a2y(D<2S%SBj%w#_3_y=Gqbu `r!8RpVc.+hc(-lgfXARf[k*D88i;O' );
define( 'SECURE_AUTH_KEY',  '(Zy)]94I:7t@yfXM/3N2$d,*JH$|ho^CMlzw{l,zgn~Ei]@l5U3wShhpC]%8ct!o' );
define( 'LOGGED_IN_KEY',    'zT/HG]q#[<:F$gx%RLymJAux`ia^lLkMR%wK8yIN;7Gpa`R/`;bar~R}eRY mx#8' );
define( 'NONCE_KEY',        '1zo)GD}I8r7L_YvW3]=pEPh-9q08Gd|IW;[7MI*~ihmc~Z-pX1}>odGWL!I0?nI$' );
define( 'AUTH_SALT',        '<4)G?tTM[y&K+DEwVV,UC2E0gG0cpvMfqbCu2wt1a1nJoN8c7z5__;w5yvl,/jB}' );
define( 'SECURE_AUTH_SALT', 'J0-@[lSKyi|bK,d}`OxR<TJ:YnHbHc[7ZWLe[yE>U8,q/sQ=2=;Z5T8QmP6CRi6^' );
define( 'LOGGED_IN_SALT',   'X]y/ )0hT.k*]*p-!_P?(vk=5XvyEY7[#A?q|Nl^BH?C-+Sz5vTs[/-ds0DF;d:)' );
define( 'NONCE_SALT',       'A3EvzQ4pYg|w>/ZSV:KqX{4,tEX9z7FQ_;W?U_egWt~d2#ESYI_i0w9r Luq2-Rd' );

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
