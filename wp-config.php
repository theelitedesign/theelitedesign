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
define( 'AUTH_KEY',          'l/xMb8e]76GR_u5{:_+JuDPAC2x=-.>BEf{EkQEjb>xyM^djsD,A4`,R<^)jVS+N' );
define( 'SECURE_AUTH_KEY',   '7&:brwMXgwh9_TT?akAo!U%ufRT`ce3G4[8%-KQ$(O#2_.2yT)oDXV+=d`%<Re&F' );
define( 'LOGGED_IN_KEY',     '4{x#axLIBd-spja`V|,_!YpL(I&3|(xu}Y=`$$LA-.@D<?n$?o<i:j>N@6o% Hp{' );
define( 'NONCE_KEY',         '~6fO%[Hk:mT U2n] D[ucMr7ScDG)bIL&^,]FD]S_-%zzwNht1.uQ{:Tb_bnZIXF' );
define( 'AUTH_SALT',         'O9Y4d+wz]m_wHa~m$sYqC}bW[YA{BqjZ]}/Q=7IdazjNiky.]Ts~~aXgXfy{r8NU' );
define( 'SECURE_AUTH_SALT',  'mF_C+BbV+0p3FGCLu?^_64:-:Zbg^#@%GYw<=dilYo9u;/w#8ddd|VpCQs%9!{*F' );
define( 'LOGGED_IN_SALT',    'Y[*jO2U?cVBVBV|ad6x&bOSAp3y)+2/tmo],ibT1%*wsxTKrS-mS?rLJ[+/HB{a^' );
define( 'NONCE_SALT',        '3%7e2:yV)n:c-&MFN*B?,*52CFDz0l-pVqj+k=Xm>3]=QN^mE~s_Ld=$:@ASI{^(' );
define( 'WP_CACHE_KEY_SALT', '$MQT}(SCKK3R(t^Ne[osFKZU(:kf7@QHs^qrZ59Uebt(cz61a}wmC-5fNou#Wyd%' );


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
