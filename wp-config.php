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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '8OF}uAq!Q/??8$H-hZbP--H`<dwN,6VGz0dx8eHZu$sicalqAV&Yy{]0[tE8=.2?' );
define( 'SECURE_AUTH_KEY',  'T~^qN{6L6h,]R:Qv%~M>k{M_G(tpR;@P}4{LgnO6a(y1^1=pp10=?9/`b1}98<jI' );
define( 'LOGGED_IN_KEY',    '2Q>5;AG2#^ZEP~bRee8)cchkMe))-zqtCOnJ[Ei>Tw5yEe: 3_15R!}~B-Q6TzG6' );
define( 'NONCE_KEY',        'Nhlmkl4S94?,(TbZxy(wOUhoJj& f][sK0l*61Q{k;03AGsRL7X|6d5rCblaQ]h<' );
define( 'AUTH_SALT',        ' WNG!wvL`u^7^8`et8y<Rh-o3u8f<Jet^q hQSa|C}UU]R`s^<q<Ou`9uin;6ghS' );
define( 'SECURE_AUTH_SALT', '%4`O;ppM95smY3+SxVFUooz|7+}jYLUy.VC=bkCIm7+=##OEGFb[s!q]k; +ozRM' );
define( 'LOGGED_IN_SALT',   '0q>>~-O* dpxsb_D-m.>)N~mLeEv xjarjT{DDTVoEU9/;j2|L4P>:Qm l8qg<1*' );
define( 'NONCE_SALT',       'reS2W2y^%mHn:O2+7_[]]4<=>JCJ&l) O(gxGU!ehfRnv;(H-&08q(qPnub1Oywr' );

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
