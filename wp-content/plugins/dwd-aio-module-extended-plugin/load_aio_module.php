<?php
/**
 * @package DWD_PERKY_ANIMATE
 * @version 1.6.3
 */
/*
Plugin Name: Perky Animate Module
Plugin URI: https://diviwebdesign.com/
Description: Divi Perky Animate Module - A custom module you will always need for your Divi sites! CTA - Blurb - Image, Title effects and Animations into one module.
Author: Divi Web Design
Version: 1.6.3
Author URI: https://diviwebdesign.com/
*/

require_once (dirname(__FILE__).'/core/update-checker.php');
require_once (dirname(__FILE__).'/core/dwd-core.php');
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require (dirname(__FILE__).'/core/persist-admin-notices-dismissal.php');
$licpath = base64_decode('ZG93bmxvYWRzL21vZHVsZXMv');

function dwd_aio_scripts(){
	wp_enqueue_style('dwd-perky-animate', plugin_dir_url( __FILE__ ) . 'css/dwd-perky-animate.css');
    wp_register_style('dwd-animate-s', plugin_dir_url( __FILE__ ) . 'css/animate.css');
    wp_enqueue_style('dwd-imghover-s', plugin_dir_url( __FILE__ ) . 'css/imagehover.css');
    wp_register_style('dwd-hover-button-s', plugin_dir_url( __FILE__ ) . 'css/hover.css' );
	wp_enqueue_script('dwd-animation-load-s', plugin_dir_url( __FILE__ ) . 'js/animation-load.js', array('jquery'), '1.0', true);
	wp_register_script('dwd-typed-s', plugin_dir_url( __FILE__ ) . 'js/typed.js', array('jquery'), null, false);
    wp_register_script('dwd-typed-load-s', plugin_dir_url( __FILE__ ) . 'js/aiotypingeffect.js', array('jquery'), null, false);
    wp_register_script('dwd-morptext-s', plugin_dir_url( __FILE__ ) . 'js/morphext.min.js', array('jquery'), null, false);
    wp_register_script('dwd-textrotator-s', plugin_dir_url( __FILE__ ) . 'js/textrotator.js', array('dwd-morptext-s'), '1.0', false);
    wp_register_script('dwd-lettering-s', plugin_dir_url( __FILE__ ) . 'js/jquery.lettering.js', array('jquery'), null, true);
    wp_register_script('dwd-textillate-s', plugin_dir_url( __FILE__ ) . 'js/jquery.textillate.js', array('dwd-lettering-s'), null, true);
    wp_register_script('dwd-textillate-start-s', plugin_dir_url( __FILE__ ) . 'js/textillate-start.js', array('dwd-textillate-s'), null, true);
    wp_register_script('dwd-textgif-s', plugin_dir_url( __FILE__ ) . 'js/textHoler.js', array('jquery'), null, true);
    wp_register_script('dwd-textgif-start-s', plugin_dir_url( __FILE__ ) . 'js/textgif-start.js', array('dwd-textgif-s'), null, true);
	wp_register_script('dwd-video-popup-start-s', plugin_dir_url( __FILE__ ) . 'js/magnific-popup-start.js', array('jquery'), null, true);
    wp_register_script('dwd-whole-link-s', plugin_dir_url( __FILE__ ) . 'js/whole-link.js', array('jquery'), null, true);
    wp_register_script('dwd-hover-button-s-js', plugin_dir_url( __FILE__ ) . 'js/hover-btn.js', array('jquery'), null, true);
    wp_register_script('dwd-tweenlite-s', plugin_dir_url( __FILE__ ) . 'js/TweenLite.min.js', array('jquery'), null, true);
    wp_register_script('dwd-tweenmax-s', plugin_dir_url( __FILE__ ) . 'js/TweenMax.min.js', array('jquery'), null, true);
    wp_register_script('dwd-scrollmagic-s', plugin_dir_url( __FILE__ ) . 'js/ScrollMagic.min.js', array('jquery'), null, true);
    wp_register_script('dwd-scroll-fading-s', plugin_dir_url( __FILE__ ) . 'js/scrolling-fading.js', array('jquery'), null, true);
    wp_register_script('dwd-animation-gsap-s', plugin_dir_url( __FILE__ ) . 'js/animation.gsap.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'dwd_aio_scripts');

function dwd_aio_admin() {
    wp_enqueue_style('dwd-perky-admin', plugin_dir_url( __FILE__ ) . 'css/dwd-admin-perky.css');
}

add_action('admin_enqueue_scripts', 'dwd_aio_admin');

function DWD_PERKY_ANIMATE_MODULE(){
	if ( class_exists( 'ET_Builder_Module' ) ) {
		include('dwd-perkyanimate-module.php');
	}
}

add_action('et_builder_ready', 'DWD_PERKY_ANIMATE_MODULE');

add_filter('et_builder_main_tabs', 'add_dwd_tabs' );

if ( ! function_exists( 'add_dwd_tabs' ) ) :
function add_dwd_tabs($tabs) {
    $tabs['dwdtab'] = esc_html__( 'Pro Settings', 'et_builder' );
    return $tabs;
}
endif;

add_filter('et_pb_new_layout_module_tabs', 'add_dwd_new_layout' );

if ( ! function_exists( 'add_dwd_new_layout' ) ) :
function add_dwd_new_layout($tabs) {
    $tabs['dwdtab'] = esc_html__( 'Include Pro Settings', 'et_builder' );
    return $tabs;
}
endif;

/*addclass to body if using Perky*/
add_filter( 'body_class','perky_body_classes' );

function perky_body_classes( $classes ) {
    $classes[] = 'dwd-body';
    return $classes; 
}

/*License Check*/
$lic = get_option( 'fhe_license_key' );
$lic_a = get_option( 'aio_license_key' );
$lic_m = get_option( 'map_license_key' );
$aio_activated_status = get_option( 'aio_license_key_activated' );
if ( $aio_activated_status == 'activated') {
    $myUpdateChecker = new DWD_AIO_PluginUpdateChecker(
        'https://diviwebdesign.com/'.$licpath.'aio.json',
        __FILE__,
        'dwd-perky-animate-module-plugin'
    );
}
if ( empty( $lic_a )) {
    function dwd_aio_license_notice() {
        if ( ! AIOPAnD::is_admin_notice_active( 'aio-disable-done-notice-forever' ) ) {
            return;
        }
    	$class = 'notice notice-info is-dismissible';
    	$message = __( 'Please enter your Perky Animate Module plugin license key to get regular update and support by Navigating to Settings -> Divi Extended. You were given a license key when you purchased this item.', 'dwd-aio' );

    	printf( '<div data-dismissible="aio-disable-done-notice-forever" class="%1$s"><p>%2$s</p></div>', $class, $message );
    }
    add_action( 'admin_notices', 'dwd_aio_license_notice' );
}
add_action( 'admin_init', array( 'AIOPAnD', 'init' ) );