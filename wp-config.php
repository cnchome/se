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

define( 'DB_NAME', "se" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '&74$V.,ak.$c$945i=o#%w b9*H*^3#6Yda^[WIVw)J(.3Y>y>qP%FBbMun-O~3u' );

define( 'SECURE_AUTH_KEY',  'YB) 5>Koj|}zekYOXLYF@<K)ma4/-ys]#j~o),2O4kkyW^3nW.C.hf+PvbOtec<*' );

define( 'LOGGED_IN_KEY',    'H%A7hJ&N>tavTAKd>o:qy;VF)2l_}f^S|#yXF;p@o70)k6dC383iI3y?&#<dNm7d' );

define( 'NONCE_KEY',        'Z}}QB/Sn:)> 3i_8(e89^axD`36L@[b}e-,p5|gAX/20ud}-oZfnym6:eb|`^(7Z' );

define( 'AUTH_SALT',        'h[gzF,GImFS#t|ewBx%XM{I#8tGko4z{602k5(E^UAt{,n5(9@%C5f97uvcTe]AY' );

define( 'SECURE_AUTH_SALT', 'B@z?7`w!&2+T_CM}1E)9_PdO/1zdrx_C<ubp?R?>2Yacj{4L3~AdX;hi(l]o%{?m' );

define( 'LOGGED_IN_SALT',   'S8-[q,8ivb)`! i/HY^/vR6%US0NqU iYM)6>2Fcu{B$,W`}eX0gRsVDE/^?{sbf' );

define( 'NONCE_SALT',       '~ sv4dPExPA]0OXVbi5)?Fa/1rJoHYnMv~loS1=-|l1Y]2G_+}cX~Z%^Mp(}fkjf' );


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

