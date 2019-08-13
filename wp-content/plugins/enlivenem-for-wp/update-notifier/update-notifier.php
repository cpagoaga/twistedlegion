<?php
/**************************************************************
 *                                                            *
 *   Provides a notification to the user everytime            *
 *   your WordPress plugin is updated                         *
 *                                                            *
 *   Based on the script by Unisphere:                        *
 *   https://github.com/unisphere/unisphere_notifier          *
 *                                                            *
 *   Author: Pippin Williamson                                *
 *   Profile: http://codecanyon.net/user/mordauk              *
 *   Follow me: http://twitter.com/pippinsplugins             *
 *                                                            *
 **************************************************************/
 
// Constants for the plugin name, folder and remote XML url
define( 'ENLIVENEM_NOTIFIER_PLUGIN_NAME', 'Enliven&nbsp;&#8216;em!' ); // The plugin name
//define( 'ENLIVENEM_NOTIFIER_PLUGIN_SHORT_NAME', 'ABC' ); // The plugin short name, only if needed to make the menu item fit. Remove this if not needed
define( 'ENLIVENEM_NOTIFIER_PLUGIN_FOLDER_NAME', 'enlivenem-for-wp' ); // The plugin folder name
define( 'ENLIVENEM_NOTIFIER_PLUGIN_FILE_NAME', 'enlivenem-for-wp.php' ); // The plugin file name
define( 'ENLIVENEM_NOTIFIER_PLUGIN_XML_FILE', 'http://enlivenem.com/notifier.xml' ); // The remote notifier XML file containing the latest version of the plugin and changelog
define( 'ENLIVENEM_PLUGIN_NOTIFIER_CACHE_INTERVAL', 43200 ); // The time interval for the remote XML cache in the database (43200 seconds = 12 hours)
define( 'ENLIVENEM_PLUGIN_NOTIFIER_CODECANYON_USERNAME', 'DeeThemes' ); // Your Codecanyon username


// Adds an update notification to the WordPress Dashboard menu
function enlivenem_update_plugin_notifier_menu() {  
	if ( function_exists( 'simplexml_load_string' ) ) { // Stop if simplexml_load_string funtion isn't available
		$xml            = enlivenem_get_latest_plugin_version( ENLIVENEM_PLUGIN_NOTIFIER_CACHE_INTERVAL ); // Get the latest remote XML file on our server
		$plugin_data    = get_plugin_data( WP_PLUGIN_DIR . '/' . ENLIVENEM_NOTIFIER_PLUGIN_FOLDER_NAME . '/' . ENLIVENEM_NOTIFIER_PLUGIN_FILE_NAME ); // Read plugin current version from the style.css

		if ( (string) $xml->latest > (string) $plugin_data['Version'] ) { // Compare current plugin version with the remote XML version
			if ( defined( 'ENLIVENEM_NOTIFIER_PLUGIN_SHORT_NAME' ) ) {
				$menu_name = ENLIVENEM_NOTIFIER_PLUGIN_SHORT_NAME;
			} else {
				$menu_name = ENLIVENEM_NOTIFIER_PLUGIN_NAME;
			}
			add_dashboard_page( ENLIVENEM_NOTIFIER_PLUGIN_NAME . ' Plugin Updates', $menu_name . ' <span class="update-plugins count-1"><span class="update-count">New Update</span></span>', 'administrator', 'enlivenem-plugin-update-notifier', 'enlivenem_update_notifier');
		}
	}   
}
add_action('admin_menu', 'enlivenem_update_plugin_notifier_menu');  


// Adds an update notification to the WordPress 3.1+ Admin Bar
function enlivenem_update_notifier_bar_menu() {
	if ( function_exists( 'simplexml_load_string' ) ) { // Stop if simplexml_load_string funtion isn't available
		global $wp_admin_bar, $wpdb;

		if ( ! is_super_admin() || ! is_admin_bar_showing() ) // Don't display notification in admin bar if it's disabled or the current user isn't an administrator
		return;

		$xml        = enlivenem_get_latest_plugin_version( ENLIVENEM_PLUGIN_NOTIFIER_CACHE_INTERVAL ); // Get the latest remote XML file on our server
		$plugin_data    = get_plugin_data( WP_PLUGIN_DIR . '/' . ENLIVENEM_NOTIFIER_PLUGIN_FOLDER_NAME . '/' .ENLIVENEM_NOTIFIER_PLUGIN_FILE_NAME ); // Read plugin current version from the main plugin file

		if( (string) $xml->latest > (string) $plugin_data['Version'] ) { // Compare current plugin version with the remote XML version
			$wp_admin_bar->add_menu( array( 'id' => 'plugin_update_notifier', 'title' => '<span><span id="ab-updates">' . ENLIVENEM_NOTIFIER_PLUGIN_NAME . ' New Update</span></span>', 'href' => get_admin_url() . 'index.php?page=enlivenem-plugin-update-notifier' ) );
		}
	}
}
add_action( 'admin_bar_menu', 'enlivenem_update_notifier_bar_menu', 1000 );


// The notifier page
function enlivenem_update_notifier() { 
	$xml            = enlivenem_get_latest_plugin_version( ENLIVENEM_PLUGIN_NOTIFIER_CACHE_INTERVAL ); // Get the latest remote XML file on our server
	$plugin_data    = get_plugin_data( WP_PLUGIN_DIR . '/' . ENLIVENEM_NOTIFIER_PLUGIN_FOLDER_NAME . '/' .ENLIVENEM_NOTIFIER_PLUGIN_FILE_NAME ); // Read plugin current version from the main plugin file ?>

	<style>
		.update-nag { display: none; }
		#instructions {max-width: 670px;}
		h3.title {margin: 30px 0 0 0; padding: 30px 0 0 0; border-top: 1px solid #ddd;}
	</style>

	<div class="wrap">

		<div id="icon-tools" class="icon32"></div>
		<h2><?php echo ENLIVENEM_NOTIFIER_PLUGIN_NAME ?> Plugin Update</h2>
		<div id="message" class="updated below-h2"><p>There is a new version of the <strong><?php echo ENLIVENEM_NOTIFIER_PLUGIN_NAME; ?></strong> plugin available. You have version <?php echo $plugin_data['Version']; ?> installed. Update to version <strong><?php echo $xml->latest; ?></strong></p></div>
		
		<div id="instructions">
			<h3>Update Download and Instructions</h3>
			
			<p>If you <strong>did</strong> make any changes to the plugin files backup them first!</p>

			<p>To update the Plugin, login to <a href="http://www.codecanyon.net/?ref=<?php echo ENLIVENEM_PLUGIN_NOTIFIER_CODECANYON_USERNAME; ?>">CodeCanyon</a>, head over to your <strong>Downloads</strong> section and re-download the plugin like you did when you bought it.</p>
			
			<p>Deactivate and delete the current <strong>(<?php echo $plugin_data['Version']; ?>)</strong> version of <strong>Enliven 'em!</strong> plugin. Please do not worry, all your settings stay in your database.</p>
			
			<p>Install and activate the new version <strong>(<?php echo $xml->latest; ?>)</strong> of the plugin as usual and click <b>Save Changes</b> button on a plugin's setting page.</p>
		</div>
		
		<h3 class="title">Changelog</h3>
		<?php echo $xml->changelog; ?>

	</div>
	
<?php } 


// Get the remote XML file contents and return its data (Version and Changelog)
// Uses the cached version if available and inside the time interval defined
function enlivenem_get_latest_plugin_version( $interval ) {
	$notifier_file_url = ENLIVENEM_NOTIFIER_PLUGIN_XML_FILE;    
	$last = get_option( 'enlivenem_notifier_cache_last_updated' );
	$now = time();
	// check the cache
	if ( ! $last || ( ( $now - $last ) > $interval ) ) {
		// cache doesn't exist, or is old, so refresh it
		if( function_exists( 'curl_init' ) ) { // if cURL is available, use it...
			$ch = curl_init( $notifier_file_url );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch, CURLOPT_HEADER, 0 );
			curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
			$cache = curl_exec( $ch );
			curl_close( $ch );
		} else {
			$cache = file_get_contents( $notifier_file_url ); // ...if not, use the common file_get_contents()
		}

		if ( $cache ) {         
			// we got good results  
			update_option( 'enlivenem_notifier_cache', htmlspecialchars( $cache ) );
			update_option( 'enlivenem_notifier_cache_last_updated', time() );
		} 
		// read from the cache file
		$notifier_data = get_option( 'enlivenem_notifier_cache' );
	}
	else {
		// cache file is fresh enough, so read from it
		$notifier_data = get_option( 'enlivenem_notifier_cache' );
	}

	// Let's see if the $xml data was returned as we expected it to.
	// If it didn't, use the default 1.0 as the latest version so that we don't have problems when the remote server hosting the XML file is down
	if( strpos( (string) htmlspecialchars_decode( $notifier_data ), '<notifier>' ) === false ) {
		$notifier_data = '<?xml version="1.0" encoding="UTF-8"?><notifier><latest>1.0</latest><changelog></changelog></notifier>';
	}

	// Load the remote XML data into a variable and return it
	$xml = simplexml_load_string( htmlspecialchars_decode( $notifier_data ) ); 

	return $xml;
}
