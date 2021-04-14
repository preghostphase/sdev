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
define('AUTH_KEY',         'r5MEIp5skd+zQpJFmmJbHI9H6DTjgZwLK3DTnlGfvZE6BtYYBlLqVxOEtDShIpy4FsszzVmgSdT37g9PxL0MIA==');
define('SECURE_AUTH_KEY',  'JSygYLcXvrx2IWZIGCE3hwb73NqG4EmHnrY1P3ll3drho+9Mhh0/Ku2vz/ZTmL64pSO0Sn1v7i0CL72W0KwCpA==');
define('LOGGED_IN_KEY',    'H/qGTmhTPJnKd11asHHbBZtKNOK8MhpcKeagHkQ4vUcfLdOWWXjLYNpZYQH0lQc0isJ4g1X75S3+mn7Qb0Lc9g==');
define('NONCE_KEY',        'GlJqdtjTyB8SmJ5f0WAG0XpuenDOobTrwQy/DTrQ0eeHb73582MN5Yv5ndpX3ERNhx7ttkuxzOgeZMo7vydE4A==');
define('AUTH_SALT',        'XB1MGAukTwElTULiUFUTGfyXGVNlfBB/KpeHcXJC6uttQCxLl7WgdFpCxlL+VQp8mMrj+RQ0dNmRX2yebas99w==');
define('SECURE_AUTH_SALT', 'iIOCwbvl3g/TIL2zhi4dE0fBzf+wQ+cjOPEfPtRkftANkYsCwZFDGWL6aP1wiHFM39QrrWgyfTcj+8jt7/hGkQ==');
define('LOGGED_IN_SALT',   'SQO5/m0jCMQv9vdSOBooP4Iva7C1r2QF/4c9JFs7ovPL5p21spEhyEiUR/aoQUL/lmiDUihw0QY8cvxDWCbxoA==');
define('NONCE_SALT',       '9+SGshFgqlVgNhyoufGWH7rJuxFQl5mCuhdPAR05/oMMQypXybQpyLpaWbdHABaHHrAmfp2OpWf0wkqNtN0uZg==');

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
