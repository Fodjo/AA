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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         'e+sSL6^[5x>$-m&fR7E0q`JzzVugPGKuxuD,a]_d27TaH^DMj69z-GgbSHCOWL;K' );
define( 'SECURE_AUTH_KEY',  'BS^Ovec;{=>3hxj$W+{]/Sw(<+t!u r#}KJ2:f]+H4Xi7<a_T^.VwLnz}`-tfSy^' );
define( 'LOGGED_IN_KEY',    'zc{:nF{09}vqGnk*_-Lxe|=(7-k3/sk2jI.0:nI,ce}4Y@2S_c3:rN1Zid[ uKZe' );
define( 'NONCE_KEY',        'NXkJcH-,}L~Z@e<r=qwVy{|u8-m&9g1@ls>difSb+9#Wg[t%Fm|BYb#/.it.cMKN' );
define( 'AUTH_SALT',        'Xv3p:QPh2 xc]aRVY$7Mw$YZ2]7a|wbB:a,EmC~=^&o58D@yp!pJEMoZT|1_TW$h' );
define( 'SECURE_AUTH_SALT', '7bQO9R)b{XhD ,nAogBAa^Q1(xufB}KqH`;mQ_~V}}$$Cs!xgBO]DhJcpAEP7 60' );
define( 'LOGGED_IN_SALT',   'aGwbV(KrO_Cu$J.$;*-pDmOdqsvVj!ZfxNSq=Iba[t7[lpMJ1Z@DgRlu@FY=wx4t' );
define( 'NONCE_SALT',       'o~q|B{M:#-Nju z&4=RI%U/#<rjrpK!MG1KO=ai-lmT(XaU.8BF??s;m MNvT.a;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
set_time_limit(600);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
