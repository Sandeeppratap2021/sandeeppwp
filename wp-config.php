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
define( 'DB_NAME', 'spwp' );

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
define( 'AUTH_KEY',         '-w`hV]jd@CNb0.8#b{R:5<iaNfN|Jw{Xs)`CN@5cgSJK@L<^-(j0^<7wS7xL,,ps' );
define( 'SECURE_AUTH_KEY',  '+>%rcjf{%r4V7KUI%FJd;.,s_UU@m`#iVP#}QEn~,3]D}j0o<xHE *J+3=%4#d/F' );
define( 'LOGGED_IN_KEY',    'm6+]k/OK>`E(>O:5Sf~aCe2WE$.<d|/O,_qR`;jQ(zBTQa>QN|BuZ;h,]Bv: rUX' );
define( 'NONCE_KEY',        'k2elxQ9(?(vQ@!MuyS;y#OuN)y)*<F6C=wox|5RG]&l%O|38hf;8f6}_)h:lQT+ ' );
define( 'AUTH_SALT',        '3QQ^1G+ZbQy4BSS[5G@k4&q0{:!dD5|8#5{z/A>NCGqu5d~2(;xpjLa2a|9JfOFP' );
define( 'SECURE_AUTH_SALT', '75tqSCAODA]!G4BuYQlH:*6{<*X;cZ!lsQ.:S&4ogqvHb!vd{l2AWYuMBo8]r<D2' );
define( 'LOGGED_IN_SALT',   'zJ+EmJ4SYR4U2pFWX@/Y?z6zq4t3}r~vK/yT(Dh|QjNDY4V_`( OS^0,7ayePuIo' );
define( 'NONCE_SALT',       ')W(~;n$R:/kYR!rv:YS5ei;+z(JV _Ab:LX1P*]}gwC|-XXv hw>>{*=RSkeaE9R' );

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
