<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'spscctgedu_southpoint' );

/** MySQL database username */
define( 'DB_USER', 'spscctgedu_ringersoft' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ringer54321' );

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
define( 'AUTH_KEY',         '`OSL[z}[?o$ts.W-R7_`{=ZY@[S0]tm_ylH5D?bexEo}%4=.syXvm8[G|!RAqanu' );
define( 'SECURE_AUTH_KEY',  ',97c8taYOE,Fy9e$9J+#UjNy6*9 Lx9baBx6jLU!PF`]EbHF_HDoH{G:hQ^:KY}=' );
define( 'LOGGED_IN_KEY',    'sP-_/5x&g-.>x:e!lR!$UU9+sp[|?8#UD>5LtNYzi@QoBVNN!mEY$ N8)hfm&&C$' );
define( 'NONCE_KEY',        'w/1x.A.&^qBUw??ZQ/U_ojvZtOEws^*aiSxZ1VkQZU,?^O9q*idlY~Ht&dQx8Gdt' );
define( 'AUTH_SALT',        'e+]x2a84J8;!NzQmi_>9E>4`/+^&T/9<WNE&jIL q0@Q8I.O0KI/PD!jNpt+LLhj' );
define( 'SECURE_AUTH_SALT', 'sVeM*dDq`qEGLt~{&).?1BW^G`4<a_aRl|cZtY{#N^#Sg*DyLxr:1TFT|0r`34Z:' );
define( 'LOGGED_IN_SALT',   ';OxIp8Jj<J)]EA4*%~G:^o17ReU.fA=*FO4H<n_xtzdO:x<fOlHHX4ohcd`(=s$]' );
define( 'NONCE_SALT',       '||Ue%L+Qn$=@~BGT}#md=k-l1?i5S=.,LeBn|rU9?,)fmv;M[ooF$zyZE0uo9LpQ' );

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
