<?php
//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL

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
define('FS_METHOD', 'direct');

define('WP_HOME','https://wordpress.gyw.daaula.com.br');
define('WP_SITEURL','https://wordpress.gyw.daaula.com.br');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_database' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Darede@132' );

/** MySQL hostname */
define( 'DB_HOST', 'dbweb-pd.ckkuwbhur7xy.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'k[<]*H-]:w/`9CnLp3/d*S3-SDRr77AoDkH{Yt2=q/HM-bzUW2s4B5}BoJHQ4}=R' );
define( 'SECURE_AUTH_KEY',  'Eg,[&-5gETUZM_@|pnECmF@/>hD]r4l0jD/8CH`c,I}}Cj*/b9CR]p}:SL*JfcD4' );
define( 'LOGGED_IN_KEY',    '.o*Jb7ikmY{nk#~^T`D^#R4EZ3_|BIM7r{dLjX}#.i3UK`~y;Tm>HvDb? `-?}-B' );
define( 'NONCE_KEY',        'P!b:ftJEA)J,?LRV`>=!jM/gl)j5j<<b(2~BDyCd;EB;#|Rawco^^U5$^HCDHKG^' );
define( 'AUTH_SALT',        ')+)q~^{e6TXeyq}NCoCc`[h`r<@%L~S?,}#B04ttavAZiAISmR+5[{j4%YMTPI$o' );
define( 'SECURE_AUTH_SALT', 'j`$6(0euh8/yCpqkO#m vEr/pLw+a INom!BR~Q+qV<4ZSF1pBJ=WRiA-aY|P~0j' );
define( 'LOGGED_IN_SALT',   'cFgP~9cf8AH.CX21mEeu?5g C>^5h+:=;b^Sa}lrB29vS)c{1r}3T|)3)8l:NDz~' );
define( 'NONCE_SALT',       'e(~>se4(?{y/yT?QgY})DzWi-~xP-lJ1@3 u[GA<VM?78T!$FJCn+h!n%M*8>dTr' );

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
