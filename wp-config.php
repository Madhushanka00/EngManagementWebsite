<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1C*CmLd^u-vo!PaL&;du*o9&kHs] k|51FvSNZZ>1.TUh? S_81uQ0qiC^EQs[vv' );
define( 'SECURE_AUTH_KEY',  'G>HI&:>lcx=M?%5x+omnJ(oH-nJIGjWP;_;u1,q<;Me2[d]]*<t5 K%Jrm55:_RW' );
define( 'LOGGED_IN_KEY',    's.6`10*?6Nc_jA::s9w-D9}A?LV8a-7R%h)&N/F)0o2[}V3&Y`G(K;YSoR=Rwl~a' );
define( 'NONCE_KEY',        'ic0i|>=cf[3OG3L#NC2VbSL%htl5_OI+{0[h~aPa!T-w}B1*8)QFlYXK[|$bX`[k' );
define( 'AUTH_SALT',        '/dLdh}1cE=>V/.|$ gEgqz/O{0biQ6<5d*</k59n%f$1Xg@R Pc[TF/xSYoIm[zb' );
define( 'SECURE_AUTH_SALT', 'w_YWnLv]EpyU[9T+I0I~U^dNbtNF$_9%qFf4-]t|ak;Cay2~F${`EwI<psn1}7g|' );
define( 'LOGGED_IN_SALT',   'U)jA%>T,MO8+#5( 6I8v0)6C,}u,DP<jwj~(v8BiEE8|pNN|4p/Yy)pXGPQ-aMTP' );
define( 'NONCE_SALT',       'OJ/E6jrc7|^/.%?+rnxT%x]a!JB7< y+]y*uc@it33^7r_w,MO8|$y<sd_~5j8d<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
