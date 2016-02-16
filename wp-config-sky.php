<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sky_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NGT[^evLA]r4u #5@mOo<!}?5 ^ZA4:n]L8BFD:`Fc0^B~l{1)#//>Ob9gDeMS&y');
define('SECURE_AUTH_KEY',  '`qO*gP9&8M3CV{|%@{fDI<cq#<l+1DpLVzGXo>o}[ds^;%YR@S,d@FF`Uvcm0ZJ-');
define('LOGGED_IN_KEY',    'y=@huhybB(9jViWqRYDudF^W(ec^]EIG)1ZI*OV6<DudeS3/x/emS=Q9,jx$Cw3*');
define('NONCE_KEY',        '|U)a$|c;cNG> v3<h%*-}OV4QV+H2A%LDu}C7XdT{W<lfNFgX1Cqi:I?}i~,^NI@');
define('AUTH_SALT',        'I!uvyyo*1zYZ/4l{O %&AJ<uapIilLmr3rr3n4r s*.n2]{VGta62Sao=G4:4rP4');
define('SECURE_AUTH_SALT', '}X?9bmA}`=mxV&tBR})hUFZ~fY{g9S[A3b3O|zS+tg9>9?6hFNUTqx83fQ]JXs|T');
define('LOGGED_IN_SALT',   'KA^Igu:b$R30^#Y&7xTMU|Z^3?fE1$vE{5nr,}<_5Y`_[d0%` o}KMS2gHqsOmG$');
define('NONCE_SALT',       ')9_L*K[+2RK,n.2,SY}VWMX,^*iTb(tL$>9t+^ZK]]8ZVy,lgkd8@oZ^(=T24y$0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
