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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']s]%b?}Mb!XwWL@UdFp+H>kLQ`583LM+@Q1r_8)n39ZT)xR V_Uzc<rs+BaeFb~Y' );
define( 'SECURE_AUTH_KEY',   'a)1ut>k_=OI_eMTRVoPED]?^krX+&=>JmR&I@s>~a2ntU=.E}#B4h_[O[,Xwha|S' );
define( 'LOGGED_IN_KEY',     'YlLuB Vz|N*l~ce!%&u=[BerBTD6IJmuQ_rL<;c~405KbGe[:78~/niC[ =,IzyM' );
define( 'NONCE_KEY',         'Mc[43[M(:N{{,gB>dcS>P<u@+^_TX{tmHF/*yRT0^;N$%N,?^nj5.zfs&P5sWvg-' );
define( 'AUTH_SALT',         ',p$vHD4pUZ+tbfcvro3Ns `[F]5YY(;mpr){k a2Cy7km})bAh{j+ECG=|8` duw' );
define( 'SECURE_AUTH_SALT',  '8Ptmk=kpo|Q_EgDg_ggy+`IljEk)]ATh{5J25)5Ln=_.2SLi.h]umdwV[5+C#=J{' );
define( 'LOGGED_IN_SALT',    ',:~#OVDIYmp|o%%!;?)I^EXD9`:LJCo~g$5Kb3X`v2k1Dc&G=;?t34[&$1_sD-(T' );
define( 'NONCE_SALT',        'M8jb@wY>%jL|;.fuIxn8?3%KRG9L^^b7l^`Cld-:DNB[WV=/RG,yN^p:hRjNTL.=' );
define( 'WP_CACHE_KEY_SALT', 'Ne8:hmk-OCPoqf#jT  l:L: +;TL EY xtdS,h^!ZRuHze9zkf{&#HKxd(Olj^2k' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
