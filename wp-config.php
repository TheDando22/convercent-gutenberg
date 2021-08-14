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
define('AUTH_KEY',         'wU2WB9KqoaC5kjM+/dPUDh1phNdnQhQIe6BsTHAP/UKiNRUuSqgkWAUUdB77Guv68uN3N8jdeQG3PPuE3G/QQQ==');
define('SECURE_AUTH_KEY',  '+iG6QinaEwzV0CcVnaYWUKkxTGxyAv1wxYe3OJoGbnEb/2RaqHGEwraQIJF+6UIPgQxqKvxDJ8mMlqj7HEvp7w==');
define('LOGGED_IN_KEY',    'TZe8QKu0vcdgiUZFBKsFfAe1rhkxgmnQtfsQVY9HGYXkSwHn+/P/BmByj9tV4Z7kSCgmYTcLHCwHJWd5WPOgug==');
define('NONCE_KEY',        '/9SSvGiSUW7hrK7f8gE1V0UldAy7mRwc/19m7koJF3g93tnLXyp4bGbciP59jKVnOeqid5iDca+i0kg9NtePWQ==');
define('AUTH_SALT',        'q+nlfckXpGI+49GZaR3uJBwJvbmkZrj6wxt2SflvAjgB9YAYToMaWYAq15Bozba0aPyD3LfDfgLk0YyL3jUgPw==');
define('SECURE_AUTH_SALT', '+Yta/90C42OcFTfXbwFjvqQ3orc/nK1KRijK6mbBM9ZF5VzsE1t1eWDUnmaRJEvApTWcuyQj8chN7iR+y1lzVA==');
define('LOGGED_IN_SALT',   'GQwSI4lsQ2psmoJarwIyGISIZOHpWfMixmPSuFnnlpcbCn0qSKAIOn2xy2R50sTWxm1XRstG4bdDo7qb2AH7Zw==');
define('NONCE_SALT',       'xmQ0swsK/vT8eS2w6fMipFPAEcKkg1o2Xx5Hii86o59ikBvEMWuJ6YoJM/ElOE9CRsUzDZ6mY8fj3KEVmNYOYw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
