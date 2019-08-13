<?php
/*
Plugin Name: Enliven'em!
Plugin URI: http://enlivenem.com
Description: SVG Animation Engine for WordPress.
Version: 1.5
Author: DeeThemes
Author URI: http://codecanyon.net/user/DeeThemes
Copyright © 2014-2017 | DeeThemes | http://enlivenem.com
*/

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit;

//Require minimum version of WordPress and check for other "SVG" plugins
function enlivenem_wordpress_version() {
	global $wp_version;
	
	$plugin = plugin_basename( __FILE__ );
	$plugin_data = get_plugin_data( __FILE__, false );

	if ( version_compare( $wp_version, '4.5', '<' ) ) {
		if( is_plugin_active( $plugin ) ) {
			deactivate_plugins( $plugin );
			wp_die( "'" . $plugin_data['Name'] . "' requires WordPress 4.5 or higher, and has been deactivated! Please upgrade WordPress and try again.<br /><br />Back to <a href='" . admin_url() . "'>WordPress Dashboard</a>." );
		}
	}

	//check if plugins with overlapping functions are active
	$is_active_plugin_1 = is_plugin_active( 'svg-support/svg-support.php' );
	$is_active_plugin_2 = is_plugin_active( 'scalable-vector-graphics-svg/scalable-vector-graphics.php' );

	if ( $is_active_plugin_1 || $is_active_plugin_2 ) {
		if ($is_active_plugin_1) {
			$overlap_plugin_data = get_plugin_data( 
				str_replace('enlivenem-for-wp/', '', plugin_dir_path(__FILE__)) . '/svg-support/svg-support.php'
				, false );
		}
		if ($is_active_plugin_2) {
			$overlap_plugin_data = get_plugin_data( 
				str_replace('enlivenem-for-wp/', '', plugin_dir_path(__FILE__)) . '/scalable-vector-graphics-svg/scalable-vector-graphics.php'
				, false );
		}
		if( is_plugin_active( $plugin ) ) {
			deactivate_plugins( $plugin );
			wp_die( "<strong>" . $plugin_data['Name'] . " plugin</strong> requires that the other SVG plugin - <strong>". $overlap_plugin_data['Name'] ."</strong> with overlapping functionality must be deactivated, please deactivate it first and try again.<br /><br />Back to <a href='" . admin_url() . "plugins.php'>WordPress Plugins</a>." );
		}
	}
}
add_action( 'admin_init', 'enlivenem_wordpress_version' );


//Check for plugin updates
if ( is_admin() ) {
	require('update-notifier/update-notifier.php');
}


//Setting default options when plugin is activated
function enlivenem_generator_activation() {
	$tmp = get_option( 'enlivenem_options' );
	if( ( !is_array($tmp) ) ) {
		delete_option( 'enlivenem_options' );
		$arr = array(
			'css_selectors' => '', //additional CSS selectors of elements for start SVG animations
			'admin_only' => '1', //allow SVG upload to administrators only
			'sanitize_svg' => '1', //sanitize uploading SVG files
			'disable_thumb' => '0' //disable SVG file thumbnails in Media lib
		);
		update_option( 'enlivenem_options', $arr );
	}
}
register_activation_hook( __FILE__, 'enlivenem_generator_activation' );


// Checks for new option 'disable_thumb'
function enlivenem_check_for_new_options() {
	$saved = get_option('enlivenem_options');
	if ( ! array_key_exists( 'disable_thumb' , $saved ) ) {
		$new = array(
			'disable_thumb' => '0' //disable SVG file thumbnails in Media lib
		);
		$tmp = array_merge( $saved, $new );
		update_option( 'enlivenem_options', $tmp );
	}
}
add_action('plugins_loaded', 'enlivenem_check_for_new_options');


// Registering settings and validation and sanitization of the plugin's options
function enlivenem_admin_init(){
	register_setting( 'enlivenem_plugin_options', 'enlivenem_options', 'enlivenem_validate_options' );
}
function enlivenem_validate_options($input) {
	// 2 steps validation of a string with comma separated CSS selectors
	$input['css_selectors'] = enlivenem_sanitize_css_selectors( sanitize_text_field( $input['css_selectors'] ) );

	// validate input for restrict SVG upload to administrators only
	if ( isset( $input['admin_only'] ) ) {
		if ( $input['admin_only'] === '1' ) {
			$input['admin_only'] = '1';
		} else {
			$input['admin_only'] = '0';
		}
	} else {
		$input['admin_only'] = '0';
	}

	// validate input for option of sanitizing SVG uploads
	if ( isset( $input['sanitize_svg'] ) ) {
		if ( $input['sanitize_svg'] === '1' ) {
			$input['sanitize_svg'] = '1';
		} else {
			$input['sanitize_svg'] = '0';
		}
	} else {
		$input['sanitize_svg'] = '0';
	}

	// validate input for option of disabling SVG thumbnails in Media lib
	if ( isset( $input['disable_thumb'] ) ) {
		if ( $input['disable_thumb'] === '1' ) {
			$input['disable_thumb'] = '1';
		} else {
			$input['disable_thumb'] = '0';
		}
	} else {
		$input['disable_thumb'] = '0';
	}

	//write the result JS file to wp-content/plugins/enlivenem-for-wp/js/
	enlivenem_save_result_file($input['css_selectors']);

	//return validated and sanitized array
	return $input;
}
//Sanitizes a comma separated CSS selectors with class and id names to ensure it only contains valid characters.
//Complex selectors (for ex. [name*="value"]) are not allowed.
//Allowed characters: A-Z, a-z, 0-9, _, -, .(dot), >,  (space), #, ,(comma)
function enlivenem_sanitize_css_selectors( $selectors ) {
	$selectors = htmlspecialchars_decode( $selectors );

	//Strip out any % encoded octets
	$sanitized = preg_replace( '|%[a-fA-F0-9][a-fA-F0-9]|', '', $selectors );

	//Limit to A-Z, a-z, 0-9, _, -, .(dot), >,  (space), #, ,(comma)
	$sanitized = preg_replace( '/[^A-Za-z0-9 _,.#>-]/', '', $sanitized );

	//convert the ">" (greater-than) sign to &gt; for storing in a database
	$sanitized = htmlspecialchars($sanitized);

	return apply_filters( 'enlivenem_sanitize_css_selectors', $sanitized );
}
add_action( 'admin_init', 'enlivenem_admin_init' );


// Add plugin menu page
function enlivenem_add_options_page() {
	global $enlivenem_settings_page;
	$enlivenem_settings_page = add_options_page( "Enliven&nbsp;&#8216;em! Plugin Settings Page", "Enliven&nbsp;&#8216;em!", 'manage_options', __FILE__, 'enlivenem_display_settings' );
}
add_action( 'admin_menu', 'enlivenem_add_options_page' );


// Display a "Settings" link on the main Plugins page
function enlivenem_plugin_action_links( $links, $file ) {
	if ( $file == plugin_basename( __FILE__ ) ) {
		$enlivenem_links = '<a href="' . get_admin_url() . 'options-general.php?page=enlivenem-for-wp/enlivenem-for-wp.php">' . __('Settings') . '</a>';
		// make the 'Settings' link appear first
		array_unshift( $links, $enlivenem_links );
	}
	return $links;
}
add_filter( 'plugin_action_links', 'enlivenem_plugin_action_links', 10, 2 );


// Display a more plugins link in meta
function enlivenem_more_deethemes_plugins( $links, $file ) {
	if ( $file == plugin_basename( __FILE__ ) ) {
		return array_merge(
			$links,
			array( '<a href="http://codecanyon.net/collections/5913152-wordpress-plugins-by-deethemes?ref=DeeThemes" target="_blank">More plugins by DeeThemes</a>' )
		);
	}
	return $links;
}
add_filter( 'plugin_row_meta', 'enlivenem_more_deethemes_plugins', 10, 2 );


//Allow SVG through WordPress Media Uploader
function enlivenem_cc_mime_types($mimes) {
	$options = get_option( 'enlivenem_options' );
	if( $options['admin_only'] === '0' || current_user_can( 'administrator' ) ) {//allow to administrators only
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	} else {
		return $mimes;
	}
}
add_filter('upload_mimes', 'enlivenem_cc_mime_types');


//Sanitize SVG code of a file during uploading into media library: remove all JavaScript tags and attributes.
function sanitize_svg( $file ) {
	$options = get_option( 'enlivenem_options' );
	if( $file['type'] == 'image/svg+xml' && $options['sanitize_svg'] === '1' ) {
		
		require_once 'svg-sanitizer.php';

		$svg = new EnlivenEmSvgSanitizer();
		
		$svg->load_svg( $file['tmp_name'] );
		$svg->sanitize_svg();
		$sanitized_svg = $svg->save_svg();

		global $wp_filesystem;
		$creds = request_filesystem_credentials( admin_url(), '', FALSE, FALSE, array() );
		if ( ! WP_Filesystem( $creds ) ) {
			request_filesystem_credentials( admin_url(), '', TRUE, FALSE, NULL );
		}
		
		$replaced = $wp_filesystem->put_contents( $file['tmp_name'], $sanitized_svg, FS_CHMOD_FILE );
	}

	return $file;
}
add_filter( 'wp_handle_upload_prefilter', 'sanitize_svg' );


//Fixing SVG width and height attributes to show correctly in TinyMCE editor
function enlivenem_fix_svg_size_attributes( $out, $id ) {
	$image_url  = wp_get_attachment_url( $id );
	$file_ext   = pathinfo( $image_url, PATHINFO_EXTENSION );
	if ( ! is_admin() || 'svg' !== $file_ext )
	{
		return false;
	}
	return array( $image_url, null, null, false );
}
add_filter( 'image_downsize', 'enlivenem_fix_svg_size_attributes', 10, 2 );


//Fixing SVG width and height attributes to show correctly in Media Library in grid mode
function enlivenem_prepare_attachment_for_js_filter($response, $attachment, $meta){
	$options = get_option( 'enlivenem_options' );
	if ( $options['disable_thumb'] === '1' ) {
		return $response;
	}
	if( $response['mime'] == 'image/svg+xml' && empty($response['sizes']) ){
		$svg_file_path = get_attached_file( $attachment->ID );

		$orig_size = enlivenem_get_original_svg_size( $svg_file_path );

		$response['sizes'] = array(
			'full' => array(
				'url' => $response['url'],
				'width' => $orig_size[0],
				'height' => $orig_size[1]
			)
		);

		$arr = array( 'width' => $orig_size[0], 'height' => $orig_size[1] );
		wp_update_attachment_metadata( $attachment->ID, $arr );
	}
	return $response;
}
//get width and height attributes of uploded SVG
function enlivenem_get_original_svg_size($file) {
	$arr = array();
	$xml_get = simplexml_load_file($file);
	$xml_attrs = $xml_get->attributes();
	
	$width = (string) $xml_attrs->width; 
	if ( empty($width) ) {
		$width = '100%';
	}
	
	$height = (string) $xml_attrs->height; 
	if ( empty($height) ) {
		$height = '100%';
	}

	$arr[] = $width;
	$arr[] = $height;

	return $arr;
}
add_filter('wp_prepare_attachment_for_js', 'enlivenem_prepare_attachment_for_js_filter', 10, 3);


//Shortcode function (creates wrapper parent container for SVG image with class "enlivenem"
function enlivenem_wrapper_shortcode ($atts = null, $content = null) {
	extract( shortcode_atts( array(
		'class' => null,
		'style' => null,
		'source' => null
		), $atts ) );
		
	if ( !is_null($source) ) {
		$source = '<img class="enlivenem" src="' . $source . '" />';
		if ( !is_null($class) ) {
			$class = ' class="' . $class . '"';
		} else {
			$class = '';
		}
		if ( !is_null($style) ) {
			$style = ' style="' . $style . '"';
		} else {
			$style = '';
		}
		
		return '<div' . $class . $style . '>' . $source . '</div>';
	} else {
		return '';
	}
}
add_shortcode('enlivenem_wrapper', 'enlivenem_wrapper_shortcode');


//Register styles for admin back-end
function enlivenem_svg_thumbs_styles() {
	wp_register_style( 'svg_thumb_styles', plugins_url( 'css/enlivenem-admin.css', __FILE__),false, '1.5' );
	wp_enqueue_style( 'svg_thumb_styles' );
}
add_action( 'admin_enqueue_scripts', 'enlivenem_svg_thumbs_styles' );


//Define styles and scripts for site's front-end
function enlivenem_scripts() {
	wp_register_style( 'enlivenem_css', plugins_url( 'css/enlivenem.css', __FILE__ ), false, '1.5' );
	wp_enqueue_style( 'enlivenem_css' );
	
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'enlivenem_tools', plugins_url( 'js/enlivenem.tools.js', __FILE__ ), false, '1.5', true );
	wp_enqueue_script( 'enlivenem_tools' );
	
	wp_register_script( 'enlivenem_js', plugins_url( 'js/enlivenem.min.js', __FILE__ ), array( 'jquery', 'enlivenem_tools'), '1.5', true );
	wp_enqueue_script( 'enlivenem_js' );
}
add_action('wp_enqueue_scripts', 'enlivenem_scripts');


//function for saving the resulting JS file (enlivenem.min.js)
function enlivenem_save_result_file($input) { 
	$filename_core = plugin_dir_path( __FILE__ ) . 'js/enlivenem.core.txt';
	if ( ! file_exists( $filename_core ) || ! is_readable( $filename_core ) ) {
		wp_die( '<div class="error"><h3>"enlivenem.core.txt" could not be read</h3>Cannot read the source file <strong>'.$filename_core.'</strong><br> Please check that the file exists and/or you need to make this file <strong>readable</strong>. See <a href="http://codex.wordpress.org/Changing_File_Permissions">the Codex</a> for more information.</div>' );
	};
	
	$filename = plugin_dir_path( __FILE__ ) . 'js/enlivenem.min.js';
	if ( ! file_exists( $filename ) || ! is_writable( $filename ) ) {
		wp_die( '<div class="error"><h3>"enlivenem.min.js" could not be created</h3>The file <strong>'.$filename.'</strong> cannot be saved.<br>Please check that the file exists and/or you need to make this file <strong>writable</strong> before you can use the plugin. See <a href="http://codex.wordpress.org/Changing_File_Permissions">the Codex</a> for more information.</div>' );
	};
	
	$enlivenem_core_code = file_get_contents( $filename_core );
	
	//preparing parameters for resulting file
	if ( ! empty( $input ) ) {
		$enlivenem_option_result = "/*PLEASE DO NOT EDIT THIS FILE. Make any changes in your Dashboard on Enliven 'em Settings page*/" . "\n"
			. ';jQuery(document).ready(function($){'
			. '$("' . htmlspecialchars_decode( $input ) . '").addClass("enlivenem");});' . "\n";

		$enlivenem_option_result .= $enlivenem_core_code;

		//saving result file to a disk
		$res = file_put_contents ($filename, $enlivenem_option_result, LOCK_EX);
		if ( $res === false ) {
			add_settings_error( 'enlivenemFileSaveError', esc_attr( 'settings_updated' ), 'An error occurred! The resulting file is not saved. Please try again.', 'error' );
		};
	} else {//no additional CSS selectors
		//saving result file to a disk
		$res = file_put_contents ($filename, $enlivenem_core_code, LOCK_EX);
		if ( $res === false ) {
			add_settings_error( 'enlivenemFileSaveError', esc_attr( 'settings_updated' ), 'An error occurred! The resulting file is not saved. Please try again.', 'error' );
		};
	};//end check $input empty
}


//Visual part of Enliven 'em settings page
function enlivenem_display_settings() {
	if( ! current_user_can( 'manage_options' ) ) {
		wp_die( "You can't manage options." );
	}
	$options = get_option('enlivenem_options');
?>
<div class="wrap">
	<h2>Enliven&nbsp;&#8216;em! Plugin Settings</h2>
	
	<form method="post" action="options.php">
		<?php settings_fields('enlivenem_plugin_options'); ?>

		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th>Restricted to Administrators</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>Restricted to Administrators</span>
							</legend>
							<p><label for="admin_only"><input type="checkbox" id="admin_only" name="enlivenem_options[admin_only]" value="1" <?php checked( '1', $options['admin_only'] ); ?>> Yes</label></p>
							<p>
								If checked, only Administrators will be able to upload SVG files.
							</p>
							<p>
								If <strong>not</strong> checked, anyone with Media Library access or upload_files capability will be able to upload SVG files (they are Administrators, Authors and Editors).
							</p>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th>Sanitize SVG Uploading</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>Sanitize SVG Uploading</span>
							</legend>
							<p><label for="sanitize_svg"><input type="checkbox" id="sanitize_svg" name="enlivenem_options[sanitize_svg]" value="1" <?php checked( '1', $options['sanitize_svg'] ); ?>> Yes</label></p>
							<p>
								If checked, any SVG files which are uploaded via Media Library will be checked for correct SVG tags and attributes.<br>
							</p>
							<p>
								<strong>Important:</strong> <code>&lt;script&gt;</code> tag, <code>contentScriptType</code> attribute and all SVG event attributes like <code>onactivate</code>, <code>onbegin</code>, <code>onclick</code>, etc. will be <strong>removed</strong>!
							</p>
							<p>
								<em>It is <strong>strongly</strong> recommended do not disable this option unless you are absolutely sure about your uploading SVG code.</em>
							</p>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th>Disable SVG thumbnails</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>Disable SVG thumbnails</span>
							</legend>
							<p><label for="disable_thumb"><input type="checkbox" id="disable_thumb" name="enlivenem_options[disable_thumb]" value="1" <?php checked( '1', $options['disable_thumb'] ); ?>> Yes</label></p>
							<p>
								Please check this option if you have any issues with SVG thumbnails in the Media library in "Grid" view.<br>
							</p>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th>Additional CSS Selectors</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>Additional CSS Selectors</span>
							</legend>
							<p>
								<label for="css_selectors">
									In general, all <code>&lt;img&gt;</code> and <code>&lt;svg&gt;</code> elements with class <code>enlivenem</code> will start their animations.
								</label>
							</p>
							<p>
								<label for="css_selectors">
									However, you can define here additional CSS selectors for elements which you want to animate but you don't want or can't add class <code>enlivenem</code> to them (for example in theme files).
								</label>
							</p>
							<p>
								<label for="css_selectors">
									For example you have a <code>&lt;div&gt;</code> with class <code>logo</code> within <code>&lt;img&gt;</code> tag with SVG file as source. In that case you can add the following code: <code>div.logo img</code> into the field below.
								</label>
							</p>
							<p>
								<label for="css_selectors">
									Due to security reasons only these characters are allowed: <code>A-Z</code> <code>a-z</code> <code>0-9</code> <code>_</code> <code>-</code> <code>.</code> <code>&gt;</code> <code>&nbsp;</code>(space) <code>#</code> <code>,</code>
								</label>
							</p>
							<p>
								<label for="css_selectors">
									If you want to remove previously added selectors, simply leave the field <strong>blank</strong>.
								</label>
							</p>
							<p>
								<input type="text" id="css_selectors" class="large-text code" name="enlivenem_options[css_selectors]" value="<?php echo  sanitize_text_field( $options['css_selectors'] ) ; ?>">
							</p>
							<p>
								<label for="css_selectors">
									Also you may define several CSS selectors for different elements with <strong>comma</strong> separation. For example: 
									<code>.logo img, #some-id, .some-class, div.with_another_class > img</code>
								</label>
							</p>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
		
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes') ?>">
		</p>
	</form>
</div>

<?php } ?>