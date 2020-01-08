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

require_once(__DIR__ . '/../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/../'))->load();

defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'prod'));

/** WordPress content directory */
defined('WP_CONTENT_DIR') || define('WP_CONTENT_DIR', dirname( __FILE__ ).'/wp-content');

/** WordPress content URL */
defined('WP_CONTENT_URL') || define('WP_CONTENT_URL', (('on' == $_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/wp-content');

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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable cron as that is run via a script */
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
define('AUTH_KEY',         'a/Pi:rq/%|l`+Br!.U^D5D/*Gbo*8Y!6o=huf+|PP<hFyG+4j#;|s/,NvG+hMR@D');
define('SECURE_AUTH_KEY',  'tXMb<[ Q#9`eGDw#)&o}62hSPewDw{qif9doKfn{A5OXUWDOCW0K@Ez+&<H>nQ++');
define('LOGGED_IN_KEY',    '4W1;C+=xs2`<Z}ovz&u4=U8Yt<iAYYfwTKc [YRyj%HH^+D+?,{g{_.kx5EIPaOh');
define('NONCE_KEY',        '+VRV<cY^c2m8-[Z;2N3#n@RaNgG3&i12xybqF.2Z|-o:gXp-[-_dY&!qXV$24V&<');
define('AUTH_SALT',        'i:,~=-rh!25b/-a8hcXDLTZi$+&ChZoX-QT(HDeGq$`?s0 kG_)Mk0%}zL|Qa2nh');
define('SECURE_AUTH_SALT', ';(mFfP1E`NVjX&Cg$` LkS0peblV8,A3JDC[f[1jQQJ-Qe7gAYu6;e%E/?tvedAH');
define('LOGGED_IN_SALT',   'OvJ|n(6H$|F}k{8f]o13w+h&W AMs0LjTb>5!8- zuC|n(:j9B|cofs;K!ebWk9>');
define('NONCE_SALT',       '@ez5>oKZ5+[~/oUK-+2NC.efJEk}++[^+cna[Z$~->)mZ:LZ<1`M<H&U*kR^|bTS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_PREFIX');

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', getenv('WP_DEBUG'));

/* Disable Editing in Dashboard */
define('DISALLOW_FILE_EDIT', true);

/* Disable automatic updates */
define('AUTOMATIC_UPDATER_DISABLED', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
defined('ABSPATH') || define('ABSPATH', dirname(__FILE__).'/wordpress/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');