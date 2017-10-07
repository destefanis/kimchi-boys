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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FGOxQ7v7xOO1vtD+eGkg15Fy5WYgbf/sPmApMMzEvdGCMCutNt1Sthlu4N0o0jckw/RwTOjYrxp/XgZQ2WxVBg==');
define('SECURE_AUTH_KEY',  '9368UVRR5gTULdFC+yxURhqhIFq/akN39j3vnEZmYFacCg02JxnsBOcEE25cQmZPww++IMgClyWgYZkhnYustw==');
define('LOGGED_IN_KEY',    'aKG1uDJewXuBbMPEi9wT36jBGAldZefcJSFVRjZuW7FpFoIo99KjQ3+LsxeuKv+MoYh4qnhfwv/W4YWKZ5DUww==');
define('NONCE_KEY',        'TRD16d1gv00AQ+QwI6Nl5c1JMdjve36s0ACFXh187uJQlJPyJrGSKVSbS1R50rS5dt9qsDs3LMW9zEKNUPZsig==');
define('AUTH_SALT',        'fWYs1ew3FCBihSpN/+XR2GPvoRe7VY0QcihgUYlQmre1l0MBx6X5MIQM17q2p1z9l0TBsVOXcYlOYQxEplgpeQ==');
define('SECURE_AUTH_SALT', 'mP5b3xjSdn0rHEr8pptGsagggwKFvs1xbqR/XA8XPGTP7aUnlS8i80GUgWqfXiWvrOtj83WdHBS+G020nmDNBg==');
define('LOGGED_IN_SALT',   'nEBiIQtanteHdtHj7PJOfRNwMXGbbSH6ChvPbRg9/E4KrCDHk8ZbQrqwskbxOTVf9yyhrPVUawJ8wtOwjAaRlQ==');
define('NONCE_SALT',       'SNuItwjVkWVA09gM+k+s+loZZRANDzs5CsDf8BXrwodBObMEKPvTibQVo4ml+P1MKyxoVH7sgU2Z5eGY7SB5BA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
