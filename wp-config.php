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
define('DB_NAME', 'tapdoanngochung');

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

define('WP_MEMORY_LIMIT', '256M');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5:iP[yX|Oi}4d%~pS5E5z:`^u{n)e^Qc|jgdo3|PTm:S^/(<Pp:ch2k>y3.%xBcB');
define('SECURE_AUTH_KEY',  '=dmgkze_EL-O?KLKryX JGe9|.qL<Tgq6(H-bn_+I!?hT`1J ~@0W*IrKo*b|:!r');
define('LOGGED_IN_KEY',    'wn*bu3ZXii|(+n0l.e^.N;_z19wPq=Sd[p`Lk+9fc@q$~1;r[n~]*TnM(v! K~;?');
define('NONCE_KEY',        '|94t6ol$L66G$o3iu|y<:OD CS:avuov>4bNU{>)p__w&aSkB+[UNv:0*=gc0 &C');
define('AUTH_SALT',        'XOZk_K8x<M=RUm7QPsru-`aeePt`}P[?iUJ|)%qk7vkE %$#@1wV>hUc)|N),Wb+');
define('SECURE_AUTH_SALT', '|G|HPOsrLau0AGyX?k{yFWlk|Gje;j`nD&G458:eK%>9kC<0XeN46VkRl*C*|}<t');
define('LOGGED_IN_SALT',   'sTtB7CW3aoA[M)e*&OcB>PB7nj.?tWBCYNq+?HKJwjuoE|wl~03b?w$fNSYsuf0Q');
define('NONCE_SALT',       'luxoH;k0a(~.<77a +`zo!psV+3v>t=9ryu,XT%w#w7NKj13lxL!% EC]Gi-3n1*');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
