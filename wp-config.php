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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'zA<}W--0wTBO=8urqEPOr_EX8]aZ%;y@y?Q6g`)7=?UKhKFjCje`E--n[8T{Yl0L' );
define( 'SECURE_AUTH_KEY',  '5;e}^k7 `#%?(/%=G%]Y0(=hQ&ODoVJgbn=!DxVR/[9zK-M1U eF/A>;d#y?DFVd' );
define( 'LOGGED_IN_KEY',    '}0MNRUj~)SdG-z5RV@JZ?%?n|I+k&P80g,#RCw%A^o-$sh.So.im`Y_U$K:g]|(*' );
define( 'NONCE_KEY',        'IN>}:,Sg^ )?%+q<31_:Un/r{<|}y%l^I`q#Pdgsi U!Lg,vPvef[F,<[d%--nkg' );
define( 'AUTH_SALT',        'q]Lpq]dA_<EVKKb=GwJLMc|~hrU,tf<ie.Xg+`ln_ToB`Fb.]^@iOE2P3E{{8rJ^' );
define( 'SECURE_AUTH_SALT', '[SW,ORt(zQZf3=b=4,9[#6g>H#O(U5:jw.kz4/[]}k[]OmUSQ4O@OC>9CE6C1=HS' );
define( 'LOGGED_IN_SALT',   'r=Gtv*?AQc@-K4#;5VWy!.@XS(;:{}Y01d *3C,>/-pnW6hib+Cl^I|-X.&H-peG' );
define( 'NONCE_SALT',       'r<V3v&pVFBZjMauvmhcys4+[:Hvyp[yVF[ksl=@sPzV}=)IRb[GS[2FO<ss}C:wO' );

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
