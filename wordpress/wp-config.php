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
define( 'DB_NAME', 'wordepress' );

/** Database username */
define( 'DB_USER', 'soufiane' );

/** Database password */
define( 'DB_PASSWORD', 'aaa1998aaa' );

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
define( 'AUTH_KEY',         '`[skFGEt|m]OxK_xVq}dROwT^_x&yt#i*_mNe9Yr(0*^EV~HbuP##-w7gBMV8`?K' );
define( 'SECURE_AUTH_KEY',  'O506`73%nrN3+GcheKnuTvo99Vr2z]RA<ALLU%BH:RN]snmzG38D<Fj_Bw?vR;Wv' );
define( 'LOGGED_IN_KEY',    '`(s@^T}yz9PMd>O[2w_FldKrk(gl!n/E0-9Dud=Yr,y6Ey7X;L19Q/p5A-o!P*lV' );
define( 'NONCE_KEY',        'G8iY*nw~(.6[e=:=S8AIegn<pSz;|A?e>pIFw7f-9 M ,twIX#B3O6b;l~Ec9K4n' );
define( 'AUTH_SALT',        '`Vz6LKMNh.%!:d@9cKI-AUftGdQs=1K/L@jIh->jnpUjrGAa;3j6o1NXx}u!$0ZF' );
define( 'SECURE_AUTH_SALT', '<mZlKHHzxIu>Js[fY#$YXCm}wz82|OY=tX=IzuzOiBjzVNDj7#hpXlY6]s<|TNQ+' );
define( 'LOGGED_IN_SALT',   '{QHQ/ZRpTsa>DsH<_on(tE$*UZZfqDonK7)>T998S{w)jVDp+5g1v:r%B+#,@#U@' );
define( 'NONCE_SALT',       'GWB[{r.uxLDDv+a}eEMLK<(A>ht!_$:c$gZw,SiHy8TcH~U3AkPC 8{DwASnoQ@A' );

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
