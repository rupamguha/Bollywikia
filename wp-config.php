<?php
define('WP_CACHE', true); // Added by WP Rocket
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rupamguh_bollywikia' );
/** MySQL database username */
define( 'DB_USER', 'rupamguh_bollywi' );
/** MySQL database password */
define( 'DB_PASSWORD', '3QK4~GhGxMAa' );
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
define( 'AUTH_KEY',         '~4)KuT?HLXQ7`kjz;<q{/Ko>t~|Lih_O_/T5pyJKIZg>Ce0i4o].99l_im4,O7p]' );
define( 'SECURE_AUTH_KEY',  'kT@8|jGor17l4*2Q1)!&XR c;trZUVfuz*)zoEh8eE Pt[)%} DD+5cs+k=zr=JZ' );
define( 'LOGGED_IN_KEY',    'S9[IW]>wAk_0>AL[*fb;NQpYc%-ymFDlv3yhlw~}#C *5tox2Za][IMLJ@AKdaS{' );
define( 'NONCE_KEY',        'u8Tr!uq)~df,Ofu}jUJ$n@k|,O!7)cd#2<a!^S;h>|^6nGh:U G_7{hNcd%Aw^AN' );
define( 'AUTH_SALT',        'KzzNWQ[_`_yz>V2)C*1.8i+9wlLOymx8#k2*6P!]@%U 7 FXwZ%n##Dr{X}THis3' );
define( 'SECURE_AUTH_SALT', 'nX7~U8D#GKmwkVL~M^Ro^xxG*tB?|>j@m~[;ee%wCIQ/zD^Q:t!NTnJ!t*EMp>6h' );
define( 'LOGGED_IN_SALT',   ' NA$h=mx:|,3hh1BtPE,H&pjNt1t;YOM$U]*AKkfm4{3C0}o}||;p;TEc+sz_wO3' );
define( 'NONCE_SALT',       '2!xi>]DEtZR&84n.3a+9dg;,e9Qn-9DnT@4g>TGv8xM!g5^cJNlh6?_(({JSl +R' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbolly_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

