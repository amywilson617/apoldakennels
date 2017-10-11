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
define('DB_NAME', 'Apolda Kennels');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0B90+jZM#@CC#{0zj%CN.l_:.j[Ty<AmHeod7tBxNF<COe9+TB1<i&*$T7Gj ;9J');
define('SECURE_AUTH_KEY',  '41.px@.>.adYmR5`>gvh0yH1OS;PhbivQil<7!2d>|kl5@{X?rNgtZN):M1|%#(/');
define('LOGGED_IN_KEY',    'NC`*i)#1AHroELs)|.me{|4){q~Qf~pzD|9}.Y/c]D6,O3484cUYUac5NxT2N@qN');
define('NONCE_KEY',        'N}5iCpc<n%Tq9C+ux?C-ruL.m_j!qZwQ?.V4u#FsPp%h0Dg!m-G0=d-d%tv47{us');
define('AUTH_SALT',        'H$3&H$R?,6WVMBeK/a7x$LXSeB78VWr.$.Clg] BX@Ca07KGlJ6Q ==;p* @FiBt');
define('SECURE_AUTH_SALT', '+3Y7QZ17~(J}v-on@ohh}}7L`@HZ50bB|yMTTvoB46B*#= |^[UTD}ZN<sW;^Pjx');
define('LOGGED_IN_SALT',   'Vr^:0F3$|Pl}{j|knMS<){Fn5Xl$_=a]sRfGG}8iza*?BOp$MtS, Qs!<)SWL#ut');
define('NONCE_SALT',       'k33wa:*ryw2D-Ag+Ed6JCT(wq` Oj&kv )vP>.-6;gv1y/FyHb$+njO$aT4]d&l7');

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
