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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'WtZ?rBi`:}c5g/<lu$j+AG|ByRnof>ThMC[ar0P=I.ktHV$lnumVZ4;h_0x?|l)C');
define('SECURE_AUTH_KEY',  '3;E+8=(pA#W3NVue*cp+ 59s%:*;dA+ p*@4rs{Dwr/.-noZe)[FpYE|^8x+l^*N');
define('LOGGED_IN_KEY',    'aR&l4y?c--G-I$xJsz8d~[qBMkV8}IW;z0<J(r[CLfWs>dt+%%uzJuNA]~E&X_Xo');
define('NONCE_KEY',        '`&QD c=/O/?|]2v <q]~JCho0,Derms&gc*-I/u*Pw%oN{)]Fv(W!<S-JJ9]A{HS');
define('AUTH_SALT',        '{*+TC+?l)|@_pUnx4hKl}N%-AIvv^mXuA_sx ,~y]||=<(]Z:lR0a|HS5+P=89Uj');
define('SECURE_AUTH_SALT', '[dd:mg*xP%QC7g@,XeXX|[ =Fq!Vv($HTBwo45~ku2@_AJf_uD8,X3:frK-I1*RF');
define('LOGGED_IN_SALT',   '>7N%ANCQTD*sD:-_=Avj;&hyqSlAHP,-=Yodwal7!kIhTf4Mg+J;>hJ][0W}xVT=');
define('NONCE_SALT',       '0BB2db|j}y!X#%UO4s3BzRR:E~lbxy*~``io}h);2x|V^3hT./;y=%|I|>gnX!Dd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
