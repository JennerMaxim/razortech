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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'razortech_db' );

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
define( 'AUTH_KEY',         'dV.m~d(%%!E0~rO_//>f1de-=i6YR0.jEtWbbaLlLnKcFk}m&6+sv(H}].~(oLj-' );
define( 'SECURE_AUTH_KEY',  'B[[o);XxNc[m?*`rG3M;K4loc7QtKW<7M$^`wq%fZ;U@V%}VUP+aG2,}V|k>2m0?' );
define( 'LOGGED_IN_KEY',    'v,VwC)AmE>wPr.DhPbV]v4R(w]3jh}8`PU@wOpz,0Ve6m4@Rj/z_&xNycT*Et,(^' );
define( 'NONCE_KEY',        '2Um0uNJr Z[j@jDbgqt,1i0,UtHMux{iQV_~xg.`,p;.}4fP=1SZXm? [/gr]B;h' );
define( 'AUTH_SALT',        '=Fb$NO5V[*+q<eQZ&A9p}g-gA!s!?:8MetX {m8)rCq_bkA-u$/[+6TZply}f{rN' );
define( 'SECURE_AUTH_SALT', 'd$0r9I)gCk[m`{C0(/Hj6PBY8q]1w7o9::T1c+H :I0sg123Gm{EtI:<]2q74Yt-' );
define( 'LOGGED_IN_SALT',   '5_B4Qsv}<<Fer2BGDl<x  SzFRRtgbKubGpe7b0hZ8y&TU^`@TP-19&jFf9za{f;' );
define( 'NONCE_SALT',       'nu(EUY ^<Ze`}8[-.]E3$n%4zj7JP>/~c}Hf 15h ;s$ogT_GRT~F;jL*J$Aw%k{' );

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
