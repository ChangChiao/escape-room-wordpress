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
define( 'DB_NAME', 'wordpress_practice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-ssuF~>rQ^c%BtT|*wP-ntR?dA>5ev4GR@b2@uwuetcoDl2}FS2+ni)!hf#YDpx]' );
define( 'SECURE_AUTH_KEY',  'jBI|GC6IYvi(tss9M+7IKZ~E[]Pp$=OBbKL:VSA~H%n4Ei0<_eA5(+7vH_28#.o<' );
define( 'LOGGED_IN_KEY',    '?Xo,mHk0UWCii}#3?eg=P7oh4: ^<y<OzG;a3/BbN}<t=+A>526Bw&u:8EBdNE%k' );
define( 'NONCE_KEY',        'O^4]:#5HBg*F =fQdM?eR[BveknRW4]LEvnr;)m.B]w:*sgMg/VW~_=fU,UBoH)K' );
define( 'AUTH_SALT',        'iNvTol3ToPlW,i0`Jb7-~&OQ*ow&IeO{7SXEz<(G7id+@Xa,uT??#I/wBu>[gMa$' );
define( 'SECURE_AUTH_SALT', '}yI}TPlC]{Pay2%&!N^cJ]9Vy>Z^Ql_N(FnkM0cq$Q@8jrS|&Tb Y}g}p}RBPH@/' );
define( 'LOGGED_IN_SALT',   'q*C:$?Nq|wvTWIE|HeVpZC^SonNIpjSAcvF)k3~~F*f.zgCL8v7OuO-f/CrN`m.V' );
define( 'NONCE_SALT',       'gWCy*kkb$:O#g?nK0-v5`lTA<Gf^VCIQ^`t=vT.MA mfU 5|rf9TCy).XD*f!?M,' );

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

define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

?>