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
define('DB_NAME', 'nbfitness');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-;KnPMXZMk@MJuJfm6u&-V$pM+^y*|Ha-C)10JU`[0{UWOagTSOOwwy)HED _his');
define('SECURE_AUTH_KEY',  'LygjEJvSiXz6?Em&k2i(sWW%y,b(w1JuW]ERde/sJM;ILv-wgGQFLgGN0^D009-9');
define('LOGGED_IN_KEY',    '{=F <p<hK=qhj(<{N,^K%>8V/cx@Z.#f~=fn5D9@.%,k2B LfXct-z&=#`ubtE:d');
define('NONCE_KEY',        'gWmU<&_eOAu^{Sn<ns_@_]y(v(qUY(Cfs#VuZlJtZV#MWg.h^hV{Vg_SC82.V@nx');
define('AUTH_SALT',        'MJ/|n1NZuVqLBFD]ItRABa3_qf@g6`h/#EnX8:)b 8_~):Qa}dh?C$NoF-EN=zAU');
define('SECURE_AUTH_SALT', 'M2/pq0Z3}sN.!;nhUCekI_Jk<ZA}Ru/fk%o9sJz8lKR_2{:*fqmy*L(MlnL+V|/|');
define('LOGGED_IN_SALT',   ';vOMB|{&p[eusxEm#@eofxV7/Y/10NW{V?COUpFj,.H6 19`EjCNThu s%{._S%9');
define('NONCE_SALT',       '8si;g_opGh6]Sg}_`Tx=%@&_5RZdvt?<1Ef5c#1iT8[*~oGp`1v-c.3tLCE=$qM.');
   define('WP_HOME','http://localhost/nbfitness');
   define('WP_SITEURL','http://localhost/nbfitness');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nbf_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
