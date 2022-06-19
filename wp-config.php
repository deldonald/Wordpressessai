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
define( 'DB_NAME', 'bdboutique' );

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
define( 'AUTH_KEY',         'W&0S]52WN#v(6x%ellHv9>>@_8Dr+*c~(?DBOIy{](rb{<>$Cp./HDbO7@!i)@8U' );
define( 'SECURE_AUTH_KEY',  '2Xjb6U#Q@!_,[$:V:lM zA]h:/R/0kX~xGu[;YHBojv>c`r=F6k+#s<Lfl5uC<_m' );
define( 'LOGGED_IN_KEY',    'zQT)O^]WDC+Hk.HSWm7G}nS1 Q_cP=3$v_h5;/L}/>`aQ8`!#GE7YkK=8ye(spO-' );
define( 'NONCE_KEY',        'r+[4!lw$!}m5EU]$-kcK:1la~zX>A3z,yg><ItiGVEhw-osm%dwA^?J~rlF06415' );
define( 'AUTH_SALT',        'z=^:*f@aFI`1M35}kLTN5<9$l(S{|88x< &X|niMTw(mKS2&|w(*IWLf8]st%i:L' );
define( 'SECURE_AUTH_SALT', '(!Hf~k%wo:?+NvdM_8[`V%rSdCm_bY#-9;*0]MAxsv &&=X446;3)m7+oAHqZN=|' );
define( 'LOGGED_IN_SALT',   'Mz]lEpM[ k%k{H9d<s]z*0d8X: ?jHgg,n8fclw9O#/s}l0aUP$c-64BCH7]s53]' );
define( 'NONCE_SALT',       'E80?s*O6yU.gUra<h+i#jnYn}pmJCr_Tv0~cHXKuS-d| }s:hX/en9eH)Kd:Kfjr' );

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
