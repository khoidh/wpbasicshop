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
define('DB_NAME', 'wpbasicshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']U5UU5nA*(>C,%0+NLf4q@%t=k<t<-dh#^7DMVQ,pB`Ex;uj{^yJ;bRgz@19U!nm');
define('SECURE_AUTH_KEY',  '9kMDGKEp6,PDzoE`di87=LP*k[Gs3.DsK?ew[e$0xxe[1S;}XNcG{5mL BRwD(2P');
define('LOGGED_IN_KEY',    '>mukOzLX1h(|S.8>exZuoivn@G|r ):AG8Q`U5Z0~,#=i5EcJq-/S@WO`$E-k2NC');
define('NONCE_KEY',        'Hn)i9w6.q]@P_~ZpR9?`>^pGf^Q/Zg|/jBTkJjy;n/.k+]pNo9cB%Fmb-C~uQgUC');
define('AUTH_SALT',        's`wEZx[eQ274=_xj FaI;gpKH7m5^-3N:hY,1j{uY+:16xbo*8Wh0;-ib,8MZ2a]');
define('SECURE_AUTH_SALT', ')^/S1`/jQ@JT70Dw2PesmKRb)&7M~s`|w-bN7y%H*X6m9Y-n1vMNNewA^).G_qM|');
define('LOGGED_IN_SALT',   'U8&z)GYScgCN=c[t3:PmRMm::5UbRb@[%t!9v$>=G0D.jbqkX:yb}o4A04)mx :<');
define('NONCE_SALT',       'uvf_HQP*BoO[?ra0={Ewvk:V3UR>J]Vf8ak*40k3Di6wGd~;2Nwx3ZqY-),SZP$]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
