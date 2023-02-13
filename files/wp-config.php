<?php // hey day
define( 'WP_POST_REVISIONS', 5 );
define( 'AUTOSAVE_INTERVAL', 160 );

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
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
define( 'DB_NAME', '511908_2110214363a0cefc276dd9991cd59ad7' );

/** MySQL database username */
define( 'DB_USER', 'easywp_435113' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jbk6IClqVmxXNBMR+cNwu/VmpIdbgr3vb9AAL1cA+64=' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-cluster-0-mysql-master.database.svc.cluster.local:3306' );

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
define( 'AUTH_KEY',          '7p!`{+4}JE%Od}P&6lK36;)On3{PO+uvt,.$~r&3[iK&!Fb,kbZmN1*Q3{7&87-t' );
define( 'SECURE_AUTH_KEY',   'N5,<sERQ<PnGjPB7 (;K>r$Uv)T29B#Z+}Or!Mu&[r.;Ib,phDj5u/@GKC-5OI)V' );
define( 'LOGGED_IN_KEY',     'pB>/[/%Rx3e9oUT37s}e2yquXi}ErpWQM&*mg?vO9+I4 *|bb2E@e>rkJd0s87_P' );
define( 'NONCE_KEY',         'GY{^$M~+HV@XKP~~-nK(a+*P@G;A=5-H]PnUPyS22b-kzy]x268 Q) ]w>)I8TON' );
define( 'AUTH_SALT',         '%6`Pw1GQ py?0Az{*O6LE}`ap~ZswzAS=)$qdZSMXv21<8K5Fajt(uYnq{=oc9x:' );
define( 'SECURE_AUTH_SALT',  'J_bX*]-lvKn~`AV k{txVUd>L.<Vc9n8cgBMHoKb:/6XpD^^u1{x,@YYdKn0*t.e' );
define( 'LOGGED_IN_SALT',    '^Ma6-60+mgQ&QIU|qb/ 2e<wT4/xuBDN(0_uYv9`7uh;)4USY}-Z[c6EWwW-i3_4' );
define( 'NONCE_SALT',        '<|s]z=z.5cZT@cv:[Z{:Ny%U{f!`i~=wfULeb33|[dzrW{d9Li7683)o@ae)mET9' );
define( 'WP_CACHE_KEY_SALT', '(V!QgDkZI-~]ifb{9i=CyWPPv`:rDf[u*[K,zJ ** >;-{o]XnG_a|-FO(J?(Ad)' );

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
