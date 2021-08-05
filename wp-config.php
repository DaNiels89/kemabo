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
define( 'DB_NAME', 'kema_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'sIIAZ3eGsMkiOjqQoIGJdBVooV/nT6tlNA6+/aG06rNzTOD/1GFK92uPtdDSbVxR/lhkYVZ9sbo2kgco692B3w==');
define('SECURE_AUTH_KEY',  '8A6KD2+2UdhES3hgw5EcZtxwt4X01EQJJBw6KXTsO1bEm1YxvRAd2HGt/eNF6YhEGLkizA/FO1/B609rcNiPhQ==');
define('LOGGED_IN_KEY',    'v2JCmaeo6+AGVbG/0JNIpymnoG4d1OnYsRf3tKiWKJ7fMSqiDSDQmN3jpm6euzENlg7z+QDfbyFm4dR5Lsnt3w==');
define('NONCE_KEY',        'PLEuFC0eDEjfFYX6G1499lgPrIfj0TerWZuBtMs0qaTXNNUxxst69z416EuhT25jiwdp8haigFFcYemKXj5OZA==');
define('AUTH_SALT',        'l9JlUIkp1T+c1Y0ZFFb8oHy3AvCJ4dMI34AvU6uf1eOJ2uAKWY7gHT/CSP7QeSfJJI8HNMRBMyKDHtueqPDBLA==');
define('SECURE_AUTH_SALT', '1gQRKuUhJqkFHjOFwej7ryWCXsSAEzggIn0Ic2ke1JO3UVqcDwN9H3bUe1iTM0wR35GV8WN4KwNNJe8jNtBqLg==');
define('LOGGED_IN_SALT',   'OF8i5hRxqZikH1Ri3KxL9TdKZyuYfGK+WPJB2pBYtoYbRIu5FQ+5fMXbRjNcx9wVpgkG/4GqzX1Y/I2x91mAuA==');
define('NONCE_SALT',       'Ny/jZpO3wZ5Sr1dWbTbNViTwoY3ppCZO51Kl0S9d9Dk4UHIKcWwtHjtpyRRlotepnNXHjODFF96disVrZ/T4ow==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
