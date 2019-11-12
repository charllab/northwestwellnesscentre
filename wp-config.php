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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GbO$;onO<&^N<q?)xV<sRQ6+vd^xH*CR7[Cq~hl^HDs_&;#:nWZXsM1gpm8*D*>d');
define('SECURE_AUTH_KEY',  ']Kw-/)wN9 P.iO]}cYz4Wz/tcJ)+563t5o||/jDIOa`xIja+FC-qoC+wuJ]m:-ft');
define('LOGGED_IN_KEY',    'sp SsXiI`,Y;DA_orB9n[`Rbe%IYKP{B><rF^Ucw`[d7-*z[3x$ain|QeqUKL!wB');
define('NONCE_KEY',        'O6-X9H4e2W+&(FY+kl!M<ctaGGwqO> 1v.`BqWpsJ<3~H_7ffSGly+?+I}O4Q:{s');
define('AUTH_SALT',        'fj+iSdXr%,x@YiJ-g`jH:4+;;zc#j<S/PIgjAU1A6-~nBk.VlfA@>pzzhrR8dXKS');
define('SECURE_AUTH_SALT', 'ujK+v{2#4>Jb+U<S.3B^.mumK]<T+`NfeGqJpWUn~c#@/1Q2SW^Wbt7W.C<IP%Ju');
define('LOGGED_IN_SALT',   '+41>,Z0CQJ=h7`w|k)!aSeP#G.Le:f^UUq|zoF=n+Zx>7>hf&HiE~%gb;14VJulu');
define('NONCE_SALT',       '?lP%P{yCbLY<ec6H0>`; ;IKz~3O6lW.*D$c)y:$C</KrT`e>0-B$25|)C_w.&<-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
