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
define( 'DB_NAME', 'test-wordpress' );

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
define( 'AUTH_KEY',         '-Cq3|~7:^TvJ:M&08v$H&E?<OVo{b6IQ`7RGy*~28;LeBK=UrG$Qz#18@xQB<oPL' );
define( 'SECURE_AUTH_KEY',  'an.C!Cuq?CZw<+4C^aIOB]Nqu2sdY{Q/_9&6aL^=wX >Yd:lW)aHy=/q8V^X^i**' );
define( 'LOGGED_IN_KEY',    'q[5S)>bi<JjfB]1,e@QOh37!)!P(jf5{%H^7}qQMX!_UkRw[c~k>RR<nq,e[3[1|' );
define( 'NONCE_KEY',        '%a/2,7oe1D4UrGQg8%(Q!X]^]gA!)5V#&E>$(i)7oL!&V)#`q35%79@&O.$Lls`^' );
define( 'AUTH_SALT',        'a[7z]:Jq]s&{+Z})|cM%(@E.&hLp:B`&ufQl*%zg}8<):2pR]&#liMm7u+afNsk>' );
define( 'SECURE_AUTH_SALT', '#z6yZQrh$dQ=u>0=l;|{rH2do^@i:P*!@I.zaXj%AHoxW?Y0%|bf{kzq,R+NtGIW' );
define( 'LOGGED_IN_SALT',   'u/N=?jM*_X0$.;Hl_n$+rf,spr(,$Tdh(YQ>&c)vFx:2TW~H_CMy,o)s(]-5!UN1' );
define( 'NONCE_SALT',       'bjwpk9~nVJW^[kIB!_}0RG=V]7VOGZUzhcL::Wt&t;V@5$FH6[~~jjeBmQb^:&S@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_test_wordpress_';

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
