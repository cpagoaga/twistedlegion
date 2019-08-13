<?php
/*
Plugin Name: Aspen Footer Editor
Plugin URI: https://aspengrovestudios.com/
Description: An easy way to add or edit Footer Credit Text on Divi & Extra sites.
Version: 2.1.3
Author: Aspen Grove Studios
Author URI: https://aspengrovestudios.com/
License: GPL
*/
require plugin_dir_path( __FILE__ ) . 'ags-update-checker/ags-update-checker.php';
$MyUpdateChecker = PucFactory::buildUpdateChecker(
'https://aspengrovestudios.com/ags-update-server/?action=get_metadata&slug=aspen-footer-editor',
__FILE__, 
'aspen-footer-editor' 
);


require plugin_dir_path( __FILE__ ) . 'includes/functions.php';

function add_basic_js() {
	wp_register_script( 'custom-script', plugins_url( '/js/call.js', __FILE__ ), '', '1.1', true );
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'add_basic_js' );

function dfe_custom_css() {
	 wp_register_style( 'disable_divi_footer_css', plugins_url('css/custom.css', __FILE__ ),'','1.1', '' );
	 wp_enqueue_style( 'disable_divi_footer_css' );
}
add_action( 'wp_enqueue_scripts', 'dfe_custom_css' );
function load_wp_admin_style() {
        wp_register_style( 'wp_admin_css', plugins_url('css/admin.css', __FILE__ ),'','1.1', ''  );
        wp_enqueue_style( 'wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_wp_admin_style' );

// Add settings link on plugin page
function AFE_settings_link($links) { 
  $settings_link = '<a href="admin.php?page=aspen-footer-editor">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'AFE_settings_link' );