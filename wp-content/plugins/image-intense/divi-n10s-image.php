<?php

/**
* @package Divi_Image_N10S
* @version 3.2.4
*/

/*
* Plugin Name: Divi Image Intense
* Plugin URI: https://besuperfly.com/product/image-intense/
* Description: A hybrid mix of the Image, Text and Button modules. Includes Superfly text, overlay, blend, hover, button and background effect options!
* Author: Superfly
* Version: 3.2.4
* Author URI: https://besuperfly.com/about-superfly/
* License: GPL3
*/

//  Prepare for custom modules and hook in an action if appropriate
function Gird_N10S_Custom_Modules() {
	global $pagenow;

	$is_admin = is_admin();
	$action_hook = $is_admin ? 'wp_loaded' : 'wp';
	// list of admin pages where we need to load builder files
	$required_admin_pages = array( 'edit.php', 'post.php', 'post-new.php', 'admin.php', 'customize.php', 'edit-tags.php', 'admin-ajax.php', 'export.php' );
	$specific_filter_pages = array( 'edit.php', 'admin.php', 'edit-tags.php' );
	$is_edit_library_page = 'edit.php' === $pagenow && isset( $_GET['post_type'] ) && 'et_pb_layout' === $_GET['post_type'];
	$is_role_editor_page = 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'et_divi_role_editor' === $_GET['page'];
	$is_import_page = 'admin.php' === $pagenow && isset( $_GET['import'] ) && 'wordpress' === $_GET['import']; 
	$is_edit_layout_category_page = 'edit-tags.php' === $pagenow && isset( $_GET['taxonomy'] ) && 'layout_category' === $_GET['taxonomy'];

	if ( ! $is_admin || ( $is_admin && in_array( $pagenow, $required_admin_pages ) && ( ! in_array( $pagenow, $specific_filter_pages ) || $is_edit_library_page || $is_role_editor_page || $is_edit_layout_category_page || $is_import_page ) ) ) {
 		add_action($action_hook, 'N10S_Custom_Modules', 9789);
 	}
}
Gird_N10S_Custom_Modules();

// This function will be hooked as an action given the correct admin rights
function N10S_Custom_Modules() {
	if ( class_exists( "ET_Builder_Module" ) ) {
		include( "n10s-custom-modules.php" );
 	}
}

// Grab our n10s styling and scripts
add_action( 'wp_enqueue_scripts', 'n10s_enqueue_styles' );

function n10s_enqueue_styles() {
	wp_enqueue_style( 'n10s-hover', plugin_dir_url( __FILE__ ) . 'styles/n10s-styles.css' );
}

// Grab the n10s admin styling and add the js script file
add_action( 'admin_enqueue_scripts', 'n10s_enqueue_admin_style' );

function n10s_enqueue_admin_style() {
	wp_register_style( 'n10s_admin_style', plugin_dir_url( __FILE__ ) . 'styles/n10s-admin-style.css' );
	wp_enqueue_style( 'n10s_admin_style' );
}

/* Plugin updater section - 
	courtesy of Jānis Elsts at GitHub https://github.com/YahnisElsts/wp-update-server
*/

// Make it harder to find latest version. Keeps the honest people honest.
$updater = base64_decode('aHR0cHM6Ly9iZXN1cGVyZmx5LmNvbS90aGVtZXMtcGx1Z2lucy11cGRhdGVyL3BhY2thZ2VzL2ltYWdlLWludGVuc2UvaW1hZ2UtaW50ZW5zZS5qc29u');

require 'plugin-update-checker/plugin-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    $updater,
    __FILE__,
    'image-intense'
);