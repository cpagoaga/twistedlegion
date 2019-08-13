<?php
/**
 * @package DWD_Custom_FullWidth_Header_Extended
 * @version 1.9.9.1
 */
/*
Plugin Name: Divi Custom Fullwidth Header Extended
Plugin URI: https://diviwebdesign.com/
Description: A Custom Fullwidth Header for Divi Builder. Start building and impress your visitors with title effects, background effects, animation and more!
Author: Divi Web Design
Version: 1.9.9.1
Author URI: https://diviwebdesign.com/
*/

define( 'DWD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
require_once (dirname(__FILE__).'/core/update-checker.php');
require_once (dirname(__FILE__).'/core/dwd-core.php');
include_once ( ABSPATH . 'wp-admin/includes/plugin.php' );
require (dirname(__FILE__).'/core/persist-admin-notices-dismissal.php');
$licpath = base64_decode('ZG93bmxvYWRzL21vZHVsZXMv');

function dwd_header_extended() {
    wp_enqueue_style('dwd-animate', DWD_PLUGIN_URL . 'css/animate.css');
    wp_enqueue_style('dwd-fullwidth', DWD_PLUGIN_URL . 'css/dwd-fullwidth-header.css');
    wp_register_style('dwd-hover-button', DWD_PLUGIN_URL . 'css/hover.css' );
    wp_enqueue_script('dwd-fhe-custom', DWD_PLUGIN_URL . 'js/dwd-fhe-custom.js', array('jquery'), '1.0', true);
    wp_register_script('dwd-animation-load', DWD_PLUGIN_URL . 'js/animation-load.js', array('jquery'), '1.0', true);
    wp_register_script('dwd-typed', DWD_PLUGIN_URL . 'js/typed.js', array('jquery'), null, false);
    wp_register_script('dwd-typed-script', DWD_PLUGIN_URL . 'js/headertypingeffect.js', array('jquery'), null, false);
    wp_register_script('dwd-lettering', DWD_PLUGIN_URL . 'js/jquery.lettering.js', array('jquery'), null, true);
    wp_register_script('dwd-textillate', DWD_PLUGIN_URL . 'js/jquery.textillate.js', array('dwd-lettering'), null, true);
    wp_register_script('dwd-textillate-start', DWD_PLUGIN_URL . 'js/textillate-start.js', array('dwd-textillate'), null, true);
    wp_register_script('dwd-morptext', DWD_PLUGIN_URL . 'js/morphext.min.js', array('jquery'), null, false);
    wp_register_script('dwd-textrotator', DWD_PLUGIN_URL . 'js/textrotator.js', array('dwd-morptext'), '1.0', false);
    wp_register_script('dwd-particles', DWD_PLUGIN_URL . 'js/particles.min.js', array('jquery'), null, true);
    wp_register_script('dwd-particles-start', DWD_PLUGIN_URL . 'js/particles-start.js', array('dwd-particles'), null, true);
    wp_register_script('dwd-animated-bg', DWD_PLUGIN_URL . 'js/animated-bg.js', array('jquery'), null, true);
    wp_register_script('dwd-animated-transparent-bg', DWD_PLUGIN_URL . 'js/animated-transparent-bg.js', array('jquery'), null, true);
    wp_register_script('dwd-textgif', DWD_PLUGIN_URL . 'js/textHoler.js', array('jquery'), null, true);
    wp_register_script('dwd-textgif-start', DWD_PLUGIN_URL . 'js/textgif-start.js', array('dwd-textgif'), null, true);
    wp_register_script('dwd-tweenlite', DWD_PLUGIN_URL . 'js/TweenLite.min.js', array('jquery'), null, true);
    wp_register_script('dwd-movingnodes', DWD_PLUGIN_URL . 'js/movingnodes.js', array('dwd-tweenlite'), null, true);
    wp_register_script('dwd-hover-button-js', DWD_PLUGIN_URL . 'js/hover-btn.js', array('jquery'), null, true);
    wp_register_script('dwd-magnific-popup-start', DWD_PLUGIN_URL . 'js/magnific-popup-start.js', array('jquery'), null, true);
    wp_register_script('dwd-popup-start', DWD_PLUGIN_URL . 'js/popup-start.js', array('jquery'), null, true);
    wp_register_script('dwd-tweenmax', DWD_PLUGIN_URL . 'js/TweenMax.min.js', array('jquery'), null, true);
    wp_register_script('dwd-scrollmagic', DWD_PLUGIN_URL . 'js/ScrollMagic.min.js', array('jquery'), null, true);
    wp_register_script('dwd-scroll-fading', DWD_PLUGIN_URL . 'js/scrolling-fading.js', array('jquery'), null, true);
    wp_register_script('dwd-animation-gsap', DWD_PLUGIN_URL . 'js/animation.gsap.js', array('jquery'), null, true);
    wp_register_script('dwd-shuffle-letter', DWD_PLUGIN_URL . 'js/jquery.shuffleLetters.js', array('jquery'), null, true);
    wp_register_script('dwd-shuffle-start', DWD_PLUGIN_URL . 'js/shuffle-start.js', array('dwd-shuffle-letter'), null, true);
    wp_register_script('dwd-interactive-bg', DWD_PLUGIN_URL . 'js/interactive-bg.js', array('dwd-tweenmax'), null, true);
    wp_register_script('dwd-slicey-blurry', DWD_PLUGIN_URL . 'js/slicey-blurry.js', array('dwd-tweenmax'), null, true);
}
add_action( 'wp_enqueue_scripts', 'dwd_header_extended' );

function dwd_header_extended_admin() {
    wp_enqueue_style('dwd-header-style', DWD_PLUGIN_URL . 'css/admin-header-extended.css');
}
add_action('admin_enqueue_scripts', 'dwd_header_extended_admin');

function DWD_Fullwidth_Header_Extended(){
	if(class_exists("ET_Builder_Module")){
		include('fullwidth-header-extended.php');
	}
}

add_action('et_builder_ready', 'DWD_Fullwidth_Header_Extended');

/*Custom Tab*/
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

/*Custom Fonts*/
if ( ! function_exists( 'et_builder_get_google_fonts' ) ) :
function et_builder_get_google_fonts() {
    $google_fonts = array(
        'Abel' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'sans-serif',
        ),
        'Amatic SC' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Arimo' => array(
            'styles'        => '400,400italic,700italic,700',
            'character_set' => 'latin,cyrillic-ext,latin-ext,greek-ext,cyrillic,greek,vietnamese',
            'type'          => 'sans-serif',
        ),
        'Arvo' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Bevan' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Bitter' => array(
            'styles'        => '400,400italic,700',
            'character_set' => 'latin,latin-ext',
            'type'          => 'serif',
        ),
        'Black Ops One' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'cursive',
        ),
        'Boogaloo' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Bree Serif' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'serif',
        ),
        'Calligraffitti' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Cantata One' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'serif',
        ),
        'Cardo' => array(
            'styles'        => '400,400italic,700',
            'character_set' => 'latin,greek-ext,greek,latin-ext',
            'type'          => 'serif',
        ),
        'Changa One' => array(
            'styles'        => '400,400italic',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Cherry Cream Soda' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Chewy' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Comfortaa' => array(
            'styles'        => '400,300,700',
            'character_set' => 'latin,cyrillic-ext,greek,latin-ext,cyrillic',
            'type'          => 'cursive',
        ),
        'Coming Soon' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Covered By Your Grace' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Crafty Girls' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Crete Round' => array(
            'styles'        => '400,400italic',
            'character_set' => 'latin,latin-ext',
            'type'          => 'serif',
        ),
        'Crimson Text' => array(
            'styles'        => '400,400italic,600,600italic,700,700italic',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Cuprum' => array(
            'styles'        => '400,400italic,700italic,700',
            'character_set' => 'latin,latin-ext,cyrillic',
            'type'          => 'sans-serif',
        ),
        'Dancing Script' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Dosis' => array(
            'styles'        => '400,200,300,500,600,700,800',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        'Droid Sans' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'sans-serif',
        ),
        'Droid Serif' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Francois One' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        'Fredoka One' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'The Girl Next Door' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Gloria Hallelujah' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Happy Monkey' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'cursive',
        ),
        'Indie Flower' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Josefin Slab' => array(
            'styles'        => '400,100,100italic,300,300italic,400italic,600,700,700italic,600italic',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Judson' => array(
            'styles'        => '400,400italic,700',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Kreon' => array(
            'styles'        => '400,300,700',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Lato' => array(
            'styles'        => '400,100,100italic,300,300italic,400italic,700,700italic,900,900italic',
            'character_set' => 'latin',
            'type'          => 'sans-serif',
        ),
        'Lato Light' => array(
            'parent_font' => 'Lato',
            'styles'      => '300',
        ),
        'Leckerli One' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Lobster' => array(
            'styles'        => '400',
            'character_set' => 'latin,cyrillic-ext,latin-ext,cyrillic',
            'type'          => 'cursive',
        ),
        'Lobster Two' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Lora' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Luckiest Guy' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Merriweather' => array(
            'styles'        => '400,300,900,700',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Metamorphous' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'cursive',
        ),
        'Montserrat' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'sans-serif',
        ),
        'Noticia Text' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin,vietnamese,latin-ext',
            'type'          => 'serif',
        ),
        'Nova Square' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Nunito' => array(
            'styles'        => '400,300,700',
            'character_set' => 'latin',
            'type'          => 'sans-serif',
        ),
        'Old Standard TT' => array(
            'styles'        => '400,400italic,700',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Open Sans' => array(
            'styles'        => '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
            'character_set' => 'latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic',
            'type'          => 'sans-serif',
        ),
        'Open Sans Condensed' => array(
            'styles'        => '300,300italic,700',
            'character_set' => 'latin,cyrillic-ext,latin-ext,greek-ext,greek,vietnamese,cyrillic',
            'type'          => 'sans-serif',
        ),
        'Open Sans Light' => array(
            'parent_font' => 'Open Sans',
            'styles'      => '300',
        ),
        'Oswald' => array(
            'styles'        => '400,300,700',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        'Pacifico' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Passion One' => array(
            'styles'        => '400,700,900',
            'character_set' => 'latin,latin-ext',
            'type'          => 'cursive',
        ),
        'Patrick Hand' => array(
            'styles'        => '400',
            'character_set' => 'latin,vietnamese,latin-ext',
            'type'          => 'cursive',
        ),
        'Permanent Marker' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Play' => array(
            'styles'        => '400,700',
            'character_set' => 'latin,cyrillic-ext,cyrillic,greek-ext,greek,latin-ext',
            'type'          => 'sans-serif',
        ),
        'Playfair Display' => array(
            'styles'        => '400,400italic,700,700italic,900italic,900',
            'character_set' => 'latin,latin-ext,cyrillic',
            'type'          => 'serif',
        ),
        'Poiret One' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext,cyrillic',
            'type'          => 'cursive',
        ),
        'PT Sans' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin,latin-ext,cyrillic',
            'type'          => 'sans-serif',
        ),
        'PT Sans Narrow' => array(
            'styles'        => '400,700',
            'character_set' => 'latin,latin-ext,cyrillic',
            'type'          => 'sans-serif',
        ),
        'PT Serif' => array(
            'styles'        => '400,400italic,700,700italic',
            'character_set' => 'latin,cyrillic',
            'type'          => 'serif',
        ),
        'Raleway' => array(
            'styles'        => '400,100,200,300,600,500,700,800,900',
            'character_set' => 'latin',
            'type'          => 'sans-serif',
        ),
        'Raleway Light' => array(
            'parent_font' => 'Raleway',
            'styles'      => '300',
        ),
        'Reenie Beanie' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Righteous' => array(
            'styles'        => '400',
            'character_set' => 'latin,latin-ext',
            'type'          => 'cursive',
        ),
        'Roboto' => array(
            'styles'        => '400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic',
            'character_set' => 'latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese',
            'type'          => 'sans-serif',
        ),
        'Roboto Condensed' => array(
            'styles'        => '400,300,300italic,400italic,700,700italic',
            'character_set' => 'latin,cyrillic-ext,latin-ext,greek-ext,cyrillic,greek,vietnamese',
            'type'          => 'sans-serif',
        ),
        'Roboto Light' => array(
            'parent_font' => 'Roboto',
            'styles'      => '100',
        ),
        'Rock Salt' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Rokkitt' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Sanchez' => array(
            'styles'        => '400,400italic',
            'character_set' => 'latin,latin-ext',
            'type'          => 'serif',
        ),
        'Satisfy' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Schoolbell' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Shadows Into Light' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Source Sans Pro' => array(
            'styles'        => '400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        'Source Sans Pro Light' => array(
            'parent_font' => 'Source Sans Pro',
            'styles'      => '300',
        ),
        'Special Elite' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Squada One' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Tangerine' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Ubuntu' => array(
            'styles'        => '400,300,300italic,400italic,500,500italic,700,700italic',
            'character_set' => 'latin,cyrillic-ext,cyrillic,greek-ext,greek,latin-ext',
            'type'          => 'sans-serif',
        ),
        'Unkempt' => array(
            'styles'        => '400,700',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Vollkorn' => array(
            'styles'        => '400,400italic,700italic,700',
            'character_set' => 'latin',
            'type'          => 'serif',
        ),
        'Walter Turncoat' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        'Yanone Kaffeesatz' => array(
            'styles'        => '400,200,300,700',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        //ended
        'Architects Daughter' => array(
            'styles'        => '400',
            'character_set' => 'latin',
            'type'          => 'cursive',
        ),
        //added
        'Cabin' => array(
            'styles'        => '400,400italic,500,500italic,600,600italic,700,700italic',
            'character_set' => 'latin,latin-ext,vietnamese',
            'type'          => 'sans-serif',
        ),
        //added
        'Josefin Sans' => array(
            'styles'        => '400,100,100italic,300,300italic,400italic,600,700,700italic,600italic',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        
        //added
        'Nunito Sans' => array(
            'styles'        => '400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic',
            'character_set' => 'latin,latin-ext,vietnamese',
            'type'          => 'sans-serif',
        ),
        //added
        'Oxygen' => array(
            'styles'        => '300,400,700',
            'character_set' => 'latin,latin-ext',
            'type'          => 'sans-serif',
        ),
        
    );

    return apply_filters( 'et_builder_google_fonts', $google_fonts );
}
endif;

/*License Check*/

$lic = get_option( 'fhe_license_key' );
$lic_a = get_option( 'aio_license_key' );
$lic_m = get_option( 'map_license_key' );
$fhe_activated_status = get_option( 'fhe_license_key_activated' );
if ( $fhe_activated_status == 'activated') {
    $myUpdateChecker = new DWD_FHE_PluginUpdateChecker(
        'https://diviwebdesign.com/'.$licpath.'fhe.json',
        __FILE__,
        'dwd-custom-fullwidth-header-extended'
    );
}
if ( empty( $lic )) {
    function dwd_fhe_license_notice() {
        if ( ! FHEPAnD::is_admin_notice_active( 'fhe-disable-done-notice-forever' ) ) {
            return;
        }

        $class = 'notice notice-info is-dismissible';
        $message = __( 'Please enter your Fullwidth Header Extended Module plugin license key to get regular update and support by Navigating to Settings -> Divi Extended. You were given a license key when you purchased this item.', 'dwd-fhe' );

        printf( '<div data-dismissible="fhe-disable-done-notice-forever" class="%1$s"><p>%2$s</p></div>', $class, $message );
    }
    add_action( 'admin_notices', 'dwd_fhe_license_notice' );
}

add_action( 'admin_init', array( 'FHEPAnD', 'init' ) );