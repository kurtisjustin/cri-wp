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
define( 'DB_NAME', 'cri' );

/** MySQL database username */
define( 'DB_USER', 'cri' );

/** MySQL database password */
define( 'DB_PASSWORD', 'baN9Gw@p3cQmq^^Uh' );

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
define( 'AUTH_KEY',         'R;/vE}DFR`oONhLJ(FcR=o&U3*y`{7  <^7evx<{0}:X5SV{to]ZgR=$^bKW9Hn=' );
define( 'SECURE_AUTH_KEY',  'av51SXwe1Lky=}j*NDSx*d]=FvN(;2/7ax84WI,/,d;HGDXB_ePm3=fYG5Kb@gIZ' );
define( 'LOGGED_IN_KEY',    'C/q ;&6Z6=bk5ZF5|4:yiqS7!^=0T@:*XUG_Imo^tz0N3mwRRq3v}`&-qk7)o:W=' );
define( 'NONCE_KEY',        ';*g3_8P)r& :+fOW2oRpN|CIQ>A9TqFwEr~v,r]^zvg]tP1/-8?#Ql M%r~T:)A?' );
define( 'AUTH_SALT',        '_pETQf;|]ifN%MefIr<+XZG$D<PvpOu2oGacemGfmpI/[z O/0t 9<Al%Wd,Gz$A' );
define( 'SECURE_AUTH_SALT', 'JP6;D#h)*A*CDf$u4Li>FUf1feiw%xaJ;$0EtEUiUUVR^_]I>]0I*cOGJC2E,ddJ' );
define( 'LOGGED_IN_SALT',   'P(oB&i 0@a#KH{}h{fzB7SDsAi;0.w}[S]x}yq:I0B$AT2>/H]4a>qt3G,)(;q;3' );
define( 'NONCE_SALT',       'DR=+H.`lO^KYnTx CWU2sKqmHqNB*qLn4v#v]uYm;Nw!9g}=N`~2z;U{QpjKolhk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cri_';

define("ALLOW_UNFILTERED_UPLOADS", true);

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
