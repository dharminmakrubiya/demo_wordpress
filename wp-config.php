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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_wordpress' );

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
define( 'AUTH_KEY',         '~j/0uQ#+2YW{rhOZD93FV~kk:V)#HdMTRf- %{K2b0La)aBT3F/#S*+m/(,{1d)B' );
define( 'SECURE_AUTH_KEY',  '`Nq-QpA/XrO^$=4OH:~fa5Ue=%/ 4lk!!>pjA$$kp#;j6),7A^]^y Uom+zX`d{2' );
define( 'LOGGED_IN_KEY',    'p(3xtMrNt/k$l4Qd^3o}V}ZI2~=,W+5H|}QOKT0*Ofn5~wgL 2bekY?@y= %ipSj' );
define( 'NONCE_KEY',        '`hk#%lBb<MA5PD^s|[`<F|=4b,r2VfQTtH=g.Ze6GSqagZeLli}1@h{O:;rk#,c3' );
define( 'AUTH_SALT',        'J2V?wqu=0^c2IxB_C.v,h[dJv{!Z{,38LxG3nG_%1s!;g`8no#(nM}MH<o6>{~+@' );
define( 'SECURE_AUTH_SALT', '~cQV=H.p`-na_=)51(}_}==j(@b>c~121E9v/,yX;]#/XJJU3rgJ&]h`PI=gT3[I' );
define( 'LOGGED_IN_SALT',   '|Q^[:~JZvDT4!+rR[[xegP! 8|0Odk.UHC-yAxL1_7P46UBKOenk9!ey_Od/=7@)' );
define( 'NONCE_SALT',       ')PY,;u91*,V1H0E#:9tMoK0z<BRa qYA#;1Q:?iiPWN8ricT]/,R;!o}UT5a3-vP' );

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
