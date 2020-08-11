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
define( 'DB_NAME', 'New_Database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ySBVdB3DYMW~EpS=yshr>rH1y[op>o+ltR=cV_uWV9sfRrII[hs1u?rC2<_a%]Sb' );
define( 'SECURE_AUTH_KEY',  '$V7Wl2XdGbAd~jn*%P`*e3UTFy>Y&Q50JyUM/j28m|$htZ!>b8W-uNjE^kdqnOs9' );
define( 'LOGGED_IN_KEY',    '$cJ-BP7l>k6tkVOB dE?[WJf4_/wwYsPv}4mDVe&D}1BT*-dGI?i-H8p<O@gi0am' );
define( 'NONCE_KEY',        'YMD*beX{rT*sQQ`gFD9md}z1:kdx3OGMz|u3/EQ4H$1D)g<~aThQ/*-xED^@F_!`' );
define( 'AUTH_SALT',        'xcu3h=HMZ5fk5]ty4A3*wwX4o!Qx]U6e:&Qk2:{0s0LjkWktP3%_x|(LZl!Ubl?D' );
define( 'SECURE_AUTH_SALT', 'K8Bd~kK)AN#YgYH?*F-:9BwgW&$@Pi~3w|5oBg1b|P kaX]X.0iV^)dm9LKOX:Kf' );
define( 'LOGGED_IN_SALT',   'bpO0riPm#Q5g+J ko~|CB/q;{5f=#V##luyOqKt<mdzd/&_E?J<n?^LalM@EV}0R' );
define( 'NONCE_SALT',       '~Qcvu_`L?]~3hG4YhRj9{_Gx!`wGXNtAI2]%jNiXb-CCB^a!)od&+Q#_3fXbfy!o' );

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
set_time_limit(600);
