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
define( 'DB_NAME', 'nom-base-de-donnee' );

/** MySQL database username */
define( 'DB_USER', 'username-base-de-donnee' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password-base-de-donnee' );

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
define( 'AUTH_KEY',         '>8.~!G$|.T`.^[^EaiIXijMv.1%yeha/]a!mX=LZZ5Y]F<%13*0D>poMTEnX*Ror' );
define( 'SECURE_AUTH_KEY',  '7>B$YDW%KqU0(KTk93G#?7+@LbN9gh+(,4`nGDep]K-(ohM8Z919NKj}fXO0[l[|' );
define( 'LOGGED_IN_KEY',    '23-[EsFQ=@OKJx6k5o0^4glu=1.+y bdj]u;t=&Fcp<9r!H=b>9!=h]2-8 5n~4U' );
define( 'NONCE_KEY',        'n M_<t6NS:SWT~Tw]]JNZoh62V:L(bi3z.iHR%W tB{YZtk`e4?; {$.&HQle?QR' );
define( 'AUTH_SALT',        '(3|Mw^RzbO]O,wrNeLW5Q/U/yY#UL]Dh]8$=q,*ZO4x=r0W$j|Zr)Y8EyqDdH):Q' );
define( 'SECURE_AUTH_SALT', '[[P%s{NO2CZWd?p[kW-QK%K0MkDQWf#nh2PsW|rfSCE=Le|8sR,O`D#_(pmHTEz?' );
define( 'LOGGED_IN_SALT',   '`E|;tiWFAJu<zqmZFxy/b]is!}$q^~xv,M:J>byXa|V2L(D[RI,i_G8@]Zy(O>ly' );
define( 'NONCE_SALT',       'P2<=RA-hk23mVR56n!}a@%q9,=(cM_E(E$:0H?br2g?N ^#[uM`pB-4tt-I#(EE:' );

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
