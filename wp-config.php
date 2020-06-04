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
define( 'DB_NAME', 'arcelia_zavrsni_wp26' );

/** MySQL database username */
define( 'DB_USER', 'arcelia_goran' );

/** MySQL database password */
define( 'DB_PASSWORD', '-a!Xj)?vuXKJ' );

/** MySQL hostname */
define( 'DB_HOST', 'ftp.polaznik70.edunova.hr' );

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
define( 'AUTH_KEY',         '8p8z]7s-vAE{eqUB:G-Rz%_xv^_oUDM(t$g&p[f>MK+v}5?=U[ev^#m.T+-n,G/,' );
define( 'SECURE_AUTH_KEY',  'y&{)WevBqYk9M~@jS,`49}mO-7:R5lI5_Zz4X4)v5h +=RJYloy.jG9~B%zdmA0c' );
define( 'LOGGED_IN_KEY',    'Y|G2tmznUVaJh~n2qykcNd8c<>F^FZu3K^WJa.0^28i5Tki(1^*z.#~1Wq1oj*h8' );
define( 'NONCE_KEY',        'hrE-/ABRH5I@|dBJ+dSU>R{NC4/4Tie^%}.cA+T`.LzLh+<WcW]$iS@!%jOi]&#w' );
define( 'AUTH_SALT',        '$OA/NO7:?Klx0$XLKQ/$XLbb@e8PtSEu9j_!))-rq55I.VQ*{146T=hOrhJe%e8~' );
define( 'SECURE_AUTH_SALT', 'vJ2K^UP9U6rf(xW#5B-yq}qllA/quni.XU KG)Ob08ST->(W?hR;lL]0fyMPu.la' );
define( 'LOGGED_IN_SALT',   'q4g(a<FcH0bE6R)>,p`D$:]4$c[gSDO~1Pvfb n>q+|PRhu[{}?ye$gcy;,fndof' );
define( 'NONCE_SALT',       '@!4AY^c_?Vsi>5fo%#Jg^v dvy}0l(_8[PB2UulqlgpKY{ZH8*%=>T{:z&Sd`m`=' );

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
