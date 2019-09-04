<?php
# Database Configuration
define( 'DB_NAME', 'wp_twistedlegion' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '5FiK3qHXngce' );
define( 'DB_HOST', 'localhost:3306' );
define( 'DB_HOST_SLAVE', 'localhost:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'iVbO]R@_2bf:Qnf8D+m*(w`P{51G7Q$2Q.b;di0~+>YNh#PQ,1<W&{!|wk(BB_Ix');
define('SECURE_AUTH_KEY',  '7NKLP]A0#=NOWojb7S`}i$<IZ=UmWn202/Lfu,c2^MR#OAnUeGI=Hz{0M}JIp1OT');
define('LOGGED_IN_KEY',    'Q@FBvJ|UdY>,puly76itC425`jy/~$V.rA>)#vA}XI^]g9|[PW,rHcAJ7Nb/{YQU');
define('NONCE_KEY',        'KZ)T>TQ5q[y+Ogtu?_vts_nw:f|-jNlRT8CFfxK)%~4;ZCnzZ9@YDJn4:7^m_Tl^');
define('AUTH_SALT',        ']7ARrcZ+O+VIj2t4!]^ue/LQ<!ZEeE|qp&3ABIy! +aq*K8+^zyS_4?^T#.D3Pcm');
define('SECURE_AUTH_SALT', '%BPMP-mn*cp8sYPv[3?greL( IxYV$KPIi|&FFMni0,IrKD-![U]d04aYkME%M<~');
define('LOGGED_IN_SALT',   '!r=Nl<TGNxI,Fftf#;a1_bsQw3+?h0A0aZoX( 9T3OAR:JNdU+nK1PPDXE#PH0Tl');
define('NONCE_SALT',       '&=JgI*hm[6Sa o>~QNbJtSuCPU}UTvk*0[$cAU:cK_AJjq,<0lgZsJZs_++srF(#');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'twistedlegion' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '10b738c6f740edbb9213ae2f4088ecec506bb7cd' );

define( 'WPE_CLUSTER_ID', '100337' );

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

#$wpe_all_domains=array ( 0 => 'twistedlegion.com', 1 => 'twistedlegion.wpengine.com', 2 => 'www.twistedlegion.com', );

#$wpe_varnish_servers=array ( 0 => 'pod-100337', );

#$wpe_special_ips=array ( 0 => '104.196.146.230', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

#$wpe_netdna_domains=array ( 0 =>  array ( 'zone' => '2oy9l31lk5bl32khol13xozl', 'match' => 'www.twistedlegion.com', 'secure' => true, 'enabled' => true, ), 1 =>  array ( 'zone' => '19ngca1w2b3e1cd6ub2vd576', 'match' => 'twistedlegion.com', 'secure' => true, 'enabled' => true, ), 2 =>  array ( 'zone' => '3acacm4am00mqx1of1xrlkgz', 'match' => 'twistedlegion.wpengine.com', 'secure' => true, 'enabled' => true, ), );

#$wpe_netdna_domains_secure=array ( 0 =>  array ( 'zone' => '2oy9l31lk5bl32khol13xozl', 'match' => 'www.twistedlegion.com', 'secure' => true, 'enabled' => true, ), 1 =>  array ( 'zone' => '19ngca1w2b3e1cd6ub2vd576', 'match' => 'twistedlegion.com', 'secure' => true, 'enabled' => true, ), 2 =>  array ( 'zone' => '3acacm4am00mqx1of1xrlkgz', 'match' => 'twistedlegion.wpengine.com', 'secure' => true, 'enabled' => true, ), );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
