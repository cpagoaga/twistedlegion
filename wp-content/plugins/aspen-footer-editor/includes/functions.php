<?php
/**
 * Aspen Footer Editor Functions
 **/

 /*.. Add capability ... */
 function add_dfe_caps() {
	$roles = apply_filters( 'dfe_roles', array( 'editor', 'administrator' ) );

	foreach ( $roles as $role ) {
		/* Retrieve the editor role to add the cap to */
		$role = get_role( $role );

		/* Add the capability to edit Aspen Footer Editor text */
		$role->add_cap( 'edit_footer_text' );
	}
}

add_action( 'admin_init', 'add_dfe_caps');
 
/*
 * Add the Aspen Footer Editor Menu 
 * under the 'Appearance' tab
 *
 * @uses   add_theme_page() To register the new sub-menu
 */
/*
function add_divi_footer_editor() {
	add_theme_page(
		__( 'Aspen Footer Editor', 'aspen-footer-editor' ),
		__( 'Aspen Footer Editor', 'aspen-footer-editor' ),
		'edit_footer_text',
		'aspen-footer-editor',
		'show_divi_footer_editor_page'
	);
}

add_action( 'admin_menu', 'add_divi_footer_editor', 100 );

*/


function add_divi_footer_editor() {
	if ('Divi' == get_template()){
	add_submenu_page( 'et_divi_options', 
		__( 'Aspen Footer Editor', 'aspen-footer-editor' ),
		__( 'Aspen Footer Editor', 'aspen-footer-editor' ),
		'edit_footer_text',
		'aspen-footer-editor',
		'show_divi_footer_editor_page'
	);
}
else {
	add_submenu_page( 'et_extra_options', 
		__( 'Aspen Footer Editor', 'aspen-footer-editor' ),
		__( 'Aspen Footer Editor', 'aspen-footer-editor' ),
		'edit_footer_text',
		'aspen-footer-editor',
		'show_divi_footer_editor_page'
	);
}
}

add_action( 'admin_menu', 'add_divi_footer_editor', 100 );






/**
 * Display the Divi footer editor page inside dashboard under Appearance
 * and save content to DB
 *
 * @uses   update_option() Saving the content in DB
 * @uses   wp_editor()     For wysiwyg editor
 * @uses   get_option()    To get the updated text from the DB
 * @uses   submit_button() To add a submit button
 *
 * @return void

 **/
function show_divi_footer_editor_page() {

	if ( isset( $_POST['divi_footer_editor'] ) ) {
		update_option( 'divi_footer_edtr', stripslashes( $_POST['divi_footer_editor'] ) );
	}

	echo '<div class="wrap">';

	screen_icon();
	printf ( '<h2>%s</h2>', __( 'Aspen Footer Editor', 'aspen-footer-editor' ) );
	echo '<div class="docs">' . '<a href="http://aspengrovestudios.com/docs/aspen-footer-editor-readme.pdf" target="_blank" title="Opens in a new tab.">Aspen Footer Editor documentation</a>' . '</div>';
	echo '<span class="dfe_des">Add your footer content using the wysiwyg editor (<em>applies to bottom footer section only</em>)</span>';

	echo '<form method="post" action="" style="margin: 20px 0;">';

	wp_editor( get_option( 'divi_footer_edtr', '' ), 'divi_footer_editor' );
	submit_button();

	echo '</form></div>';
	echo '<div id="add-custom-css">';
    echo '<h3>You can add inline-css to further style your footer content</h3>';
    echo 'Like <code>style="font-size:20px; padding-right:5px; float:right;" and so</code>';
    echo '<div class="see_example">' . '<h4>An Example</h4>' . '<code>&lt;p style="font-size:20px; margin-right:1%; background-color: blue; padding-right:5px;"&gt;Built by Aspen Grove Studios&lt;/p&gt;</code>' . '</div>';
    echo '<h5>or</h5>';
    echo '<div class="see_example">' . '<code>&lt;div style="background-color: white; float:right; display: inline; positive:relative;"&gt;Built by Aspen Grove Studios&lt;/div&gt;</code>' . '</div>';

}
/*** 
* Retrieving the content from DB 
* and hooking this to footer.php with 
* a defined class
***/

function get_divi_footer() {

	/* Retrieve the footer content from the DB */
	$divi_footer_editor = get_option( 'divi_footer_edtr' );
	//$divi_footer_editor .= do_shortcode('[year]');

	/* Apply filter and return the wp_editor content */

	echo apply_filters( 'get_divi_footer',  '<div id="footer-editor-info">' . $divi_footer_editor . '</div>' );
}
add_filter ('wp_footer', 'get_divi_footer');
add_filter( 'get_divi_footer', 'do_shortcode' );

function dfe_year_shortcode() {
$year = date('Y');
return $year;
}
add_shortcode('year', 'dfe_year_shortcode');
function display_time_shortcode($atts,$content,$tag){
     
    $values = shortcode_atts(array(
        'type' => 'other',
    ),$atts);  
     
    $output = '';
    if($values['type'] == 'year'){
        $output = date('Y');
    }
    else if($values['type'] == 'month'){
        $output = date('F');
    }
	else if($values['type'] == 'date'){
        $output = date_i18n( get_option( 'date_format' ));
    }
	else if($values['type'] == 'day'){
        $output = date_i18n('l');
    }
	else if($values['type'] == 'time'){
		$date = current_time( 'mysql' );
		$output = date('h:i a', strtotime($date));
    }
    else if($values['type'] == 'other'){
        $output = 'No time format has been specified';
    }
    else{
        $output = 'Time format error'; 
    }
     
    return $output;
     
}
add_shortcode('time','display_time_shortcode');

// Hooking shortcode dropdown to footer editor
add_filter('media_buttons','add_sc_dfe', 15);
function add_sc_dfe(){
	 $include = array(
	 'Current Year' => 'year',
	 'Current Month' => esc_html('time type="month"'),
	 'Current Date' => esc_html('time type="date"'),
	 'Current Day' => esc_html('time type="day"'),
	 'Current Time' => esc_html('time type="time"')
					);
    echo '&nbsp;<select id="sc_select"><option class="noclick">Shortcodes</option>';
    foreach ($include as $key => $val){
            $shortcodes_list .= '<option value="['.$val.']">'.$key.'</option>';
        }
     echo $shortcodes_list;
     echo '</select>';
}
add_action('admin_head', 'select_sc_js');
function select_sc_js() {
	echo '<script type="text/javascript">
	jQuery(document).ready(function(){
	   jQuery("#sc_select").change(function() {
			  send_to_editor(jQuery("#sc_select :selected").val());
        		  return false;
		});
	});
	</script>';
}