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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ')QlboGHMi*yID8WfA*xExdf>_kx]Fm{NC:?9JKj{z8U._8I.CVF>5kL(,:*!>S*2' );
define( 'SECURE_AUTH_KEY',  'u7?)aCls%i}pqGjC+2l5p0{M@Rc:z+.>0XPadB[_n1omv^CMuVHr>4}?.b.s|G~W' );
define( 'LOGGED_IN_KEY',    'cw{SOcIu ;|2A]l|RK4v!-D0IKJQ`g+, V@kgu`OXm7hWaq%p4V4KG]Qs!jTm3)5' );
define( 'NONCE_KEY',        '6j#zq<nEA!$&d}HUl@%^J);v6[XT|fM=.Xb#3+&Z&~/Bi ?_iJm~=y<fE9oer}c;' );
define( 'AUTH_SALT',        'q0,1|pwcy%AHpcA.P,pw`kEAtgDi;a(NxQ#MRHi}+`f[LP6I&{,6$f@c. ]83&+:' );
define( 'SECURE_AUTH_SALT', '-p2`ofev,[;a[)1#zY$, Y1/]PJ-I|TmdfdkHPA}{1mQ~lgUIRV<xu+n&)OZE#n-' );
define( 'LOGGED_IN_SALT',   '~k* }qR+dTfd#x/+m$X#_YMZ<#8RtuY 8:NAPUxV%>^/<2]v&7;gDM3>/iU?eE=T' );
define( 'NONCE_SALT',       '$Lk}eq7&#t{]J81);d%=|J:%]uc&A/u77`Z%}-/Z*AdG-|-w]eB_CLPLOh)pgb7q' );

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
