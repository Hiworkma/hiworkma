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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hiwork' );

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
define( 'AUTH_KEY',         'w]xRu092#YH]rI*h{-Zrs1@FN[@bV[_ZN<G86lU^BiCn:VYw2e#U4Bsvy12EPs}=' );
define( 'SECURE_AUTH_KEY',  '5FGCWa}.1Xw?m}14{{-C-tsC}CG?GK:N/F`If3Mrs)q:RS+dnkX3z>4XBWVIAy}<' );
define( 'LOGGED_IN_KEY',    '3SN;IrzM<dIr 6:R6U&~&Aye!j:`]:Ncv;WeS<0eVO?yY auV9bE}ME]$#6l<:&x' );
define( 'NONCE_KEY',        '`m3GcP/-^O;YZ=TUeO@1f$5.Z0*HZIujvO1uo:tyu3:yE,)UcvD*1M@1@w}@pj5x' );
define( 'AUTH_SALT',        'Ig0@msilDbES<`Za^>P7jE-;+:?l4J|s2hW%P#MD&mq^J/eD2+BfhJE7&9XU{wVS' );
define( 'SECURE_AUTH_SALT', 'h5Dkt<xdrx_<?/Kk)HQtIaIcS6!P7:hO7dlh[KGW2b|%-1xu&qjiOGL)11tzDJ4W' );
define( 'LOGGED_IN_SALT',   'Tc&xV_+@J;)SBG xl1I<n2~RVUb 4uI|o)t(#)I+JXtaRD4K~/}0K=6hBGAh-3{Z' );
define( 'NONCE_SALT',       '=L 8,eCWC)@A!}m2&4cW![7X$,QLhA!09IBn<mml]?Yao1;<4{Q%gQ^039RbU&ab' );

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
