<<<<<<< HEAD
<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cjedmondson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'FyZssmyu<VmuBVn<K(${[51Z^9z~b*Y *[}owuNB7@#bEQ7;=X9-+R^KvT3*s-cQ');
define('SECURE_AUTH_KEY',  '+S%8y|afhexD?oq[^E){>vx0XG+Q7Tp92DB3S |3?hA8|bZith%p;3b_&7RqEF71');
define('LOGGED_IN_KEY',    '>6w `y.*-{IPC@KB}7gmH?zk9KEY ;M:XWp<I 1* N{I5q@Y4M:KXW8lU[KSwYYF');
define('NONCE_KEY',        'LnG3K=p*6!~O]f69[FEplK,XW,s`5%:$d&#{`-6>B/|~+jc35/lG0ks*as^Fosqy');
define('AUTH_SALT',        '0EJ<&Py=I:u+``EB.ovpFVg1~|+wu`4.+Vsr=M0t %xNVBJ?^ (Cz2!EY&7!WzJs');
define('SECURE_AUTH_SALT', '7VW<:1&W9XVZV%=BR-It{,z$7!2Xf_Ry#cG(v!Bvtvz[(q^kGB/-W9ENl@T1mqIx');
define('LOGGED_IN_SALT',   '{X>7[=#>g&#+Q6Qsy#f{vO(-E#/:=bX_B>Vd2BC7Ci%rfJ-+K>#E5%;+gaRj_+b!');
define('NONCE_SALT',       '(`?Om)>ngH3vmWHTj`U!sF~Rbu?j(P4ON$)f_6sdZF7bhqAnPm&o|wO;A^Z](<jR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
=======
<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cjedmondson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>:/z>5(-^zr[< z*kC}9f -=[y2NID=-AV+5TpG6,0Dr? P=j#a}Dt=-<vThWBUR');
define('SECURE_AUTH_KEY',  'h|k}mxJw+~ohAR$cj(x@ (-NpfWq/O.?y1(. Q$:M=y*h{OevGv[!CuOym:jCpCW');
define('LOGGED_IN_KEY',    'Yffl!EGb![A24])(d%Bbn-Le8>INB{BC^{tzc^a^xO?a`&]1qAz)gT?z4JRi}U#e');
define('NONCE_KEY',        '?m(w&C*;=wk%~iXbYY2BI(QPHxD9S5D.|G+T3)#F1pp#0O-`^tn+<xPeAd+[G3Mx');
define('AUTH_SALT',        '%7^ d|X=+ND{Ym}*[Uzj?^I-.$%$F%SKs6>@PQFXoQF<wY-:?-dMTR9jhWWO9<p?');
define('SECURE_AUTH_SALT', '&s99^-#5>xmt(|>pPz&3zQL]i~a]AQ=H *(mk -;%2-4Q:=pUgV6A?14Mf+_P;M_');
define('LOGGED_IN_SALT',   'aSmb9tqa*U2.I6se^kg#I,`/,eb1|rmt)O/n3or;BHouBnwxG/--MiQD~k{.9vJF');
define('NONCE_SALT',       '=.^)7(,^@~e2dAu5%l=imKGR}s]`Q!Te`vM:wPhpRc?Td9Qdys&,dG{sIxN{JEGI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
>>>>>>> a058b930d24c37e6437e1da0508457f3860540b5
