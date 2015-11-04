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
define('DB_NAME', 'a4687081_wp');

/** MySQL database username */
define('DB_USER', 'a4687081_mb');

/** MySQL database password */
define('DB_PASSWORD', 'mb11221');

/** MySQL hostname */
define('DB_HOST', 'sql6.000webhost.com');

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
define('AUTH_KEY',         'Ms},I,4N}dE+e2Lf;5|,m~L_13v|;<fX#l%2!a;d%~!@C$l~}1WEM%*,cMtr}rW[');
define('SECURE_AUTH_KEY',  '6*cL!B!f8GbKfo{}tvm}sF.$!OwORk^hMt(7-*@fqlmaM)g}KI(_C&c#&1$Wnk_e');
define('LOGGED_IN_KEY',    '.Y~jJ DM=gvzayX=hP% }d;sO-}+NPx!uTO#=I}x,``po-4Z+1Gs{F4ot2j(8y|E');
define('NONCE_KEY',        '8lfy+%5.BY+7v&u/Zl 2Kl@>xg/++xy!S^)F#b (Z#O]aXD?n$3z3cKjiubxVT0x');
define('AUTH_SALT',        'e)~; @=)`YTiQ[i$?,h;}|d?M|S#Gn9S.2jFOGri2jX~8;tTh-]DLV5V$|2MTR?L');
define('SECURE_AUTH_SALT', 'B^C?Ri-XeJ!k^?{}YTWoFH|s|9O:gNk/8k#^]ktwdx5r:k/=Cbd=:Wf8vC.0GeyY');
define('LOGGED_IN_SALT',   '[fMTuI@Gj<C-~D,2AsO8N`PWx+9ZymDxQZ#K+(0?a_C->&Pl(1X~gBffks?^n6au');
define('NONCE_SALT',       'wMq7FCm0aN=tLnL}a4alm+HwOe=SC|$7&/(P7{Ca3v2V*L$vz{H6kbW)=avI04;f');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
