<?php

// ** MySQL settings - You can get this info from your web host ** //
define( 'DB_NAME', getenv('MYSQL_DATABASE'));
define( 'DB_USER', getenv('MYSQL_USER'));
define(	'DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define(	'DB_HOST', 'mariadb');
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**Authentication unique keys and salts.*/
define('AUTH_KEY',         'Le(CS=ep-exG(T&P~w%dM}!Hn`:LT^s,2=I)w|<}3p8]|-Oh?* g8d/mSJ1RaS:A');
define('SECURE_AUTH_KEY',  'xB_1zt,Bl+thn2Vl-IT(yQEM<M#QLo0{M8(8f+PEi%RID$@i/`]=h;(WM`qRdj58');
define('LOGGED_IN_KEY',    ' _+3aYlOo-`/+lVy~)2$_>Rp3r)H:| YDx[ZFSX)c@3!`]P4sAe+`{D$<`qgkF+t>');
define('NONCE_KEY',        'y9-Lv[)sZc NT)-[.{iFz=*sLHuBL:Hq31j!pJw>q#$Si**M%+_)?VV%Wzx?`4N$');
define('AUTH_SALT',        '!(UJlm;RB3_HaOl</3T3((VguHwS }D<..AOaTN.EVGR#b:?h-1)c<1FYS74(e-t');
define('SECURE_AUTH_SALT', 'AHpj.l6x+.|^)gf~uE/&m6bVd`o; q,?2%Y~A zQ|B(|cd vTk:UT#db2EzYEOmD');
define('LOGGED_IN_SALT',   '?20A8+s$k|Qou~!+}%yP.@%+ [bJju7;.|^RMIube*Pob{S(FI{.$ioMmKC1qBoL');
define('NONCE_SALT',       'B;t5+pK:~#JT~I`^3(mMwpWzt5,B&POn^&tbuT+vS_ T@1ozlo~@(|*^Nw]-w[Nj');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';