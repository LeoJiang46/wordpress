<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.31.52' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[+$3+b(UTUn4*UsiYRXtzj(>N0QU?}+:j2s/]6Wt@S0eQiyk~]U>e06R C}hpXDU' );
define( 'SECURE_AUTH_KEY',  ']&*:hm2+W5n_4cIcs]B,Y$O/L>G4Ps3(3?$Ae&Px|j`%gbe%UKH6lwjQe X,jK{L' );
define( 'LOGGED_IN_KEY',    'X5os60%T)a^@nLc#P${lD3d_WK;yl-T}$5i+~lihu~xphPCVv4N$32]/cz)$C_i`' );
define( 'NONCE_KEY',        'suQ4d%XRz_Ya@Wt)wfXdm/ITIP(9JRf)~v+MwE*pjax_qV`PPr6YO%RU-MQ(Ll}7' );
define( 'AUTH_SALT',        ':=xP6eQ:LGE?D|beNpQN6fJ;VP3X:uNSu@VuY+b7bu[&AKg0T3x) SiSkm Yk3$>' );
define( 'SECURE_AUTH_SALT', '@kLNF7&z+~9e*3m@r6|vt{u2g_qVd3S#;]s?xU]0e]!w[p/$=2I&^5OG5iLl61w<' );
define( 'LOGGED_IN_SALT',   ']0F4v-IBJbAy~7Ze2Mr?C.0 Y.d UHf6|?P0jG?4i]>h>J>`Be5:JU*gXVWo}I@p' );
define( 'NONCE_SALT',       'vwK9>]_,pswat?st?y(c=NZ~V}T5SF >))D8L]3g$s2r4+%L+5_GwTu3pBJAgF];' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
