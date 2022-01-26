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
define( 'DB_NAME', 'oysterwear_db' );

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
define( 'AUTH_KEY',         'B_Co<s5Zzzo/#QUBkK[/0d9?JBpwlUx/#S}8m`nxj6yp+[l!%G$9 {O?t@N}bC00' );
define( 'SECURE_AUTH_KEY',  'LX]bXQV+hr/(*=%7>pb6KWWQH??;#;l!0; bk0%-T8F<3aq&o~`j%vqzgUO#r8CX' );
define( 'LOGGED_IN_KEY',    'xxE}&O+7Egt8aJ1z*4o)]6e,g!0~WP8O7MYypWE`i=g*g*aK^J8[uZPE.(!{RV_9' );
define( 'NONCE_KEY',        'Mc|z%X8u^2Po^.32-2EPNys+D#61K.R>`G~qGEh~&x`u cyAXvfCEOwCdJEW6i~9' );
define( 'AUTH_SALT',        'KV.u!aWS{nR,gA,DZEcvCCukDD48HpAO%/kn+3cPxN-jJ3=,%Y36{nKJ9O+Hui]6' );
define( 'SECURE_AUTH_SALT', ']X$mZQ>VFNI.d8Nkt3:12E# D=/@rb.heRt?DbVnhJ}gT&!qtmu4*9r5ykkv_9nf' );
define( 'LOGGED_IN_SALT',   '%ktj-[.n)Keu.Ui{A.lZ{&n.f~oB]X,#F`1P-q1iu8H%DK-6UY%-sfKWUGO`K66g' );
define( 'NONCE_SALT',       ')uCvGYV %#n6WJ&8%,LAyS133XvC=?CT/:K7Ht1=^}R,z{YTKsc,%nMAg/YrL}g@' );

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
