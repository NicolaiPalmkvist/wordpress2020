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
define( 'DB_NAME', 'nicolaipalmkvist_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'nicolaipalmkvist_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', '1qaz2wsx' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql24.unoeuro.com' );

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
define( 'AUTH_KEY',         'BkLSO<o <eSEtl3}gz}+>-o{?utfG(&CXes 51aBQe7oq+f-&ut`_Eb_OQoa>Vr1' );
define( 'SECURE_AUTH_KEY',  '9pU8Y^!!(s^FcL,E7Er0|lXP*IR,Vyk4MbH ;QNVw~v.Yl:TcS]a7{Ez}<J~opwj' );
define( 'LOGGED_IN_KEY',    'y>42]ChBw2vFsIP+w:&}.eWH.k{cM-lSaDwH#wX:>}aaUZ]v62Sd9YdM!L[*IIFH' );
define( 'NONCE_KEY',        ' ^f#GuuoF|3$2eMwEK|cBh#L=Z855~=1@[^R}GrR-zSL./2a7</oM4%s8p?Jchkj' );
define( 'AUTH_SALT',        '!(m9n]O&l=8%+<(Ja95tk7QX!bJbZ W$:.x0+h5~* +LyDj8/Sw,xqs+U-!9o8Z8' );
define( 'SECURE_AUTH_SALT', 'S;UlaKYPrHY~VB<,MpZd<,+01L+7UQJwd4Y`k4uw=l*HDi5tcUSC~2+U)E.yrVZR' );
define( 'LOGGED_IN_SALT',   ';Oc#G2<h~N4?*ODz@}rE@!ypDL3=P9|OE/prvw!w4#RbD*ZCD {E}Ff-GBff;G3y' );
define( 'NONCE_SALT',       'i=#L}Z}[p9|}6 Rt0]y6jgK*8u-`:3 00n{,KjY4TXn@axb1q]uy,<: l&ed rlY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nicolaipalmkvist';

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



