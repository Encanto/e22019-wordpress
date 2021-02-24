<?php
# Database Configuration
define( 'DB_NAME', 'wp_e22019' );
define( 'DB_USER', 'e22019' );
define( 'DB_PASSWORD', '4HxAwzpcf-ZLbTR9ew58' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'NX^WN;JC+<y-.&YjR,Lvz<7hiUvURX~1^)x[7aB}~`BK$^wf_lo$}I-y#4LhQ=hT');
define('SECURE_AUTH_KEY',  'gr|v,wT^ZYVz&~|&o?SJRd-?~_Cm_D%QaNXW)x:?p-u%/3xo5FJ#6!a+=BC,P61o');
define('LOGGED_IN_KEY',    'fYvm[-:4k_/:zd|[]J|gla]-?.`q*o7WJ%{nZMsg1%ScbZTeJ}--xt-P8^o:*_=h');
define('NONCE_KEY',        '^.4NNI|Y5#h3xir?`E{E*WJJo$i$1T-|tazTwv:y-T>Na{19W8Hdup<-f|[f0kc-');
define('AUTH_SALT',        ';%?bnb%15H!MXzq3VXSh?y@Ur[||(P&I AeBe[+#9N_GP,aW4VP-6zd}.zoj4)g6');
define('SECURE_AUTH_SALT', 'OksH(Y+[,ZEh|Y|hQh|b7{}?FScL]=4Alr`tX${?/?<qQsCMK=t}cJCfi5+eHz`V');
define('LOGGED_IN_SALT',   'd-XFD,s8w8]9NIPCg*4/UX*v}P#tJ=[ye2^/~Y%neC!#|0PPR&TpylO4}VZCO+S+');
define('NONCE_SALT',       '>>aH{NapXfXji`$:I0UO^-rbZe&}YSlMt=1VW8V7>N?0VDWm5Y&x0ViV-Kiz;aq*');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'e22019' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'f9553d65db0a5f53b86e3ae348e5e6c49a8fdcc3' );

define( 'WPE_CLUSTER_ID', '100275' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'e22019.wpengine.com', 1 => 'e22019.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100275', );

$wpe_special_ips=array ( 0 => '104.198.24.86', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');


































































