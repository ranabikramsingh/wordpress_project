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
define( 'DB_NAME', 'wordpress-project' );

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
define( 'AUTH_KEY',         'Q>8QOAgfd~QJ+PDf0Kd7blt4DE)K)zNTdQybj#J~h@`_{OahD,O`7UyVGn&RULWj' );
define( 'SECURE_AUTH_KEY',  'B6ztt!xy4TDR%DGWCFwcqhVIApSrC=NcY-H7el]cmEw<7ZwxRr;k1k!EA9!7cTZv' );
define( 'LOGGED_IN_KEY',    'grR?g;>AK~; T6|VA#eYdi-/MZ_([/as3DQJ0HcA+|J=pSKm430:@8x2fRk!@KtE' );
define( 'NONCE_KEY',        'H2+/-CeC#o# [*5r<(YE!,SHLrgiX9R8QeZDM`kE&,u$e8C1L <m-S!ZWA#(>H%Z' );
define( 'AUTH_SALT',        '5A.!7J73..^((7tr5XUh0_0+TUd*;n<?Gu@lKSFfC&.K&>Ke7~!oM~<S;y`j%uL9' );
define( 'SECURE_AUTH_SALT', 'LBmgv.|fMm5P_PeusTyVl9t+Y49^nrdgiY ^3wCqUv)6Kl#c%:Ml{qKxeHGD|RHx' );
define( 'LOGGED_IN_SALT',   '*$!xH]k#3ll=-TVHgV0Ke.7i}_z#]Z]d<-fm*#ox#Z`(>5qs<7ZFuP(&d-Kb`X=?' );
define( 'NONCE_SALT',       'I;um#e$P6kdPn`D^#o%879GhE(VWY1P^+*u|t:z]J6vS@;={FuP3y>tr3YKK+b:Y' );

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
// define( 'WP_DEBUG', false );
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
