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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme_creation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'U*pR?3T?%VT4lT(?-e[~<8o5|tN<m iW3~)H;,!T/1WFz0^$/g~iQb-76^[y%_)^' );
define( 'SECURE_AUTH_KEY',  'niZcV[i)L4DmaeBf@rq4lwI0pdYu-_c`N%W01hg|&*[)=AIl`?<??M`jF2l/WFal' );
define( 'LOGGED_IN_KEY',    'T1ck7>MLqwE fFJ2fpY~+*?:Q]hO>wPi7:zX1`pjH{xbt6b<H~jM9H!S/;}U??Cz' );
define( 'NONCE_KEY',        'dq:ge]H]}%TUXwNaUsN+3b*f.hcD6tYLqYl[|f6bTLnSDso%(t*${B$8(Vxo>xhS' );
define( 'AUTH_SALT',        'Rv-BSz>nO%KIM`|N:A8!wBlcAf+CJi?( 4V^R=3}8`0@ixIVaxY|rafl>JFAC|~Y' );
define( 'SECURE_AUTH_SALT', 'Sr$x;G{%mbAG`%n_|1dN5GyiWZyBepRU4fet$091j&=]ruNJP^UA_DMy`@)l *pc' );
define( 'LOGGED_IN_SALT',   'g4PE!a9g/w#mSlN}4#Ws24bm~gCmW4:yF9.gc~G(pgC>OvpdGo5A@:!K&h_YgsR<' );
define( 'NONCE_SALT',       'FkAQny<Gt$8Zl%<72++KY7>d4RBq8sD<+9_8`ICiq%rST0YZYk}2Hmiz8@vHP@R-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
