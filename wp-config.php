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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '2306NHF' );

/** Database username */
define( 'DB_USER', 'trishan' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '`RyjDbkp{aHl[43xVpvTOlr)h-Ff}*UAo],#j]_z1PVbP(xvFcpYX < W2-4Wt5d' );
define( 'SECURE_AUTH_KEY',  '0pNK$bK<|=0qUvkj@fNPQWAyv&Ge^o+.8Jwh3^P2}hb12d3tULmiJ9Cc4J(CrmAq' );
define( 'LOGGED_IN_KEY',    'n5?_f[g()@pzkP(UU::S2l~Q H^z[Ksgo- ?;v}F7SJ37%{vd#>F;JgHvVdN3E[E' );
define( 'NONCE_KEY',        'z!$[>.Id<+|a_d)brZ;9;  <ovpH#;:O,.8:<B[n.2RFL9<09C83}O8rMChCU}CQ' );
define( 'AUTH_SALT',        '2`AxJ,qO3*QGprrt0*>etvS-Au*H&jKV/G{ PQczAr#<7@c2%TevH;Rz$q$ddYZf' );
define( 'SECURE_AUTH_SALT', 'p%7Uk7(m#UuD:[kl%x,BjA/=gXmlnZVwSpt/jj~HLSJa0WvRCHGhR^A<-4s p=^9' );
define( 'LOGGED_IN_SALT',   '<2c+=Lzd&)y=2)`!68dyXut:d Cfb*8j!m+-84Hxt[Nobs5`}>e*FQK-~7qEt8Eg' );
define( 'NONCE_SALT',       'p)n#EcP}G5J.=9!dOp>8)P ?rrq$dW%x^.G7.W)8oL%BF$2@a%4j{L)H=wNK Vc!' );

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
