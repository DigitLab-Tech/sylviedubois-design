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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ca15f3609746148241893290b4fb27559235254068b2f2d8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'FT=ls5NwoPz|J64.i0}ANYP:A&*~L]^}*,cFA-?]*0ke!c&n8n[y-1+EW,k*hzpr' );
define( 'SECURE_AUTH_KEY',  't@OH@[E42PF!TjwE)EBuA{;%A*q daE/Zwq^PLGWGIpPTKVDHo+A(f0ylUdSZSs.' );
define( 'LOGGED_IN_KEY',    'aTswVQCf:24uDww_-B<G`e)wq;`$+s0!-?iw;c?<S.lJQVfzHm`YXte( !R)Vseu' );
define( 'NONCE_KEY',        'Nh?t2B7N`}};bZ~tu0dt{8]INd~BA@Dw[fG_iHnd5gcy?zxm:}Qo-DfNCV{k{81,' );
define( 'AUTH_SALT',        '0H@IR)-djy0I.vdP,FS8%gw*YVAM*xl_UXiH=NrP?(KRt5PwD?H+:pnjK6*02467' );
define( 'SECURE_AUTH_SALT', '&{4/CW*QwNyK/^smbzziE01i8GgQOXZgr <hMRmS(sKx6{($`F,+N2rNeGZZWvBw' );
define( 'LOGGED_IN_SALT',   '^j QH&WvJ,&QS>@}}!fSVC2%_M9@;R(*-M(FBDMX(q^4#VsDJg$adI$7OCN=7=Pt' );
define( 'NONCE_SALT',       'uNb`OqEk:?!]hR/enN1Rki-^}nu-SD-fuQuH/xte(n4kZ%HJb|L:vT6t{Z845oYw' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
