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
define( 'DB_NAME', 'brf_7' );

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
define( 'AUTH_KEY',         'B#}g*aZI.9h+A}v[=j zK=h<9|?w@/ Wx^R{A`3gkfOBqc!O<BTB2dvfC[g@yR)Q' );
define( 'SECURE_AUTH_KEY',  'zk01G-1?N=)=N4D,2<9tLCqK#Kb!LZj~Q/F*_ Sr;)/T]Kfuw+F]2hCFF#.RGgPr' );
define( 'LOGGED_IN_KEY',    'vMZTpY<.&I`@!Ek){dv&Jj==9cr!dAKGF]h`r[x+xi^xfqz0Jv]SY8YC@tSW9_Yu' );
define( 'NONCE_KEY',        'D1{]H_E*A03T`}o${y>g5e/ZjQ7h.%^o0?/&W&& Ln>PI;-fG+<|4QQ%Rf]lJGDh' );
define( 'AUTH_SALT',        'lN$%SvytgdkO./y[RgEl4wM;>2B)oV-bQxlW1OIJ6+RJz_]x|Xl^1Kx][U^/5r%?' );
define( 'SECURE_AUTH_SALT', ')Dg8^.x7dc.SS[olr2B5Rvob.ay^Ac;XYdobMLrv5Z?b6)Q6cY-ju?MDCKh>?ip]' );
define( 'LOGGED_IN_SALT',   '/uNa7rH@Jl5zF=2NuNR?:z#Z{+1i`s<(S!X@K]|e?D)R8c4x1EPac+~XiaY}sqh%' );
define( 'NONCE_SALT',       'cxJ0+p&`{&7jvBC4eF6:A;@/whw>N)db]oU`Rt3O*Yt@4C~DOY8,f;bHt~0Jt]fN' );

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
