<?php
class ET_Builder_Module_Fullwidth_Header_Extended extends ET_Builder_Module {
	function init() {
		$this->name             = esc_html__( 'Fullwidth Header Extended', 'et_builder' );
		$this->slug             = 'et_pb_fullwidth_header_extended';
		$this->fb_support       = true;
		$this->fullwidth        = true;
		$this->main_css_element = '%%order_class%%';

		$this->whitelisted_fields = array(
			'title',
			'subhead',
			'background_layout',
			'text_orientation',
			'header_fullscreen',
			'header_scroll_down',
			'scroll_down_icon',
			'scroll_down_icon_color',
			'scroll_down_icon_size',
			'scroll_down_icon_size_tablet',
			'scroll_down_icon_size_phone',
			'scroll_down_icon_size_last_edited',
			'title_font_color',
			'subhead_font_color',
			'content_font_color',
			'max_width',
			'max_width_tablet',
			'max_width_phone',
			'max_width_last_edited',
			'button_one_text',
			'button_one_url',
			'button_two_text',
			'button_two_url',
			'background_image',
			'background_color',
			'background_overlay_color',
			'parallax',
			'parallax_method',
			'background_size',
			'background_position',
			'background_repeat',
			'background_blend',
			'logo_image_url',
			'logo_title',
			'logo_alt_text',
			'content_orientation',
			'header_image_url',
			'image_orientation',
			'content_new',
			'admin_label',
			'module_id',
			'module_class',
			//added
			'typing_effect',
			'typing_static_on_off',
			'typing_static_text',
			'typing_static_break',
			'typing_speed',
			'typing_delay',
			'typing_backdelay',
			'typing_loop',
			'typing_effect_color',
			'typing_cursor',
			'typing_underline_on_off',
			'typing_underline_color',
			'typing_underline_border',
			'typing_background_on_off',
			'typing_background_color',
			'rotator_effect',
			'rotator_static_on_off',
			'rotator_static_text',
			'rotator_static_break',
			'rotator_type',
			'rotator_speed',
			'rotator_effect_color',
			'textillate_effect',
			'textillate_effect_loop',
			'textillate_effect_type',
			'textillate_effect_time',
			'textillate_in_effect',
			'textillate_in_type',
			'textillate_out_effect',
			'textillate_out_type',
			'textgif_on_off',
			'shuffle_text_on_off',
			'shuffle_text_change',
			'textgif_bg',
			'title_fancyline',
			'title_before_after',
			'title_fancy_orientation',
			'fancyline_styles_on_off',
			'fancyline_color',
			'fancyline_width',
			'fancyline_height',
			'fancyline_margin_top',
			'fancyline_margin_top_tablet',
			'fancyline_margin_top_phone',
			'fancyline_margin_top_last_edited',
			'fancyline_margin_bottom',
			'fancyline_margin_bottom_tablet',
			'fancyline_margin_bottom_phone',
			'fancyline_margin_bottom_last_edited',
			'fancyline_width_tablet',
			'fancyline_width_phone',
			'fancyline_width_last_edited',
			'fancyline_height_tablet',
			'fancyline_height_phone',
			'fancyline_height_last_edited',
			'title_gradient_on_off',
			'title_gradient_color_one',
			'title_gradient_color_two',
			'subhead_before_after',
			'whole_header_animation_on_off',
			'whole_animation',
			'whole_animation_reveal',
			'whole_animation_speed',
			'title_animation_on_off',
			'title_animation',
			'title_animation_reveal',
			'title_animation_speed',
			'subheading_animation_on_off',
			'subheading_animation',
			'subheading_animation_reveal',
			'subheading_animation_speed',
			'content_animation_on_off',
			'content_animation',
			'content_animation_reveal',
			'content_animation_speed',
			'button_one_animation_on_off',
			'button_two_animation_on_off',
			'button_one_animation',
			'button_two_animation',
			'button_one_animation_reveal',
			'button_two_animation_reveal',
			'button_one_animation_speed',
			'button_two_animation_speed',
			'logo_image_animation_on_off',
			'logo_image_animation',
			'logo_image_animation_reveal',
			'logo_image_animation_speed',
			'header_image_animation_on_off',
			'header_image_animation',
			'header_image_animation_reveal',
			'header_image_animation_speed',
			'header_scroll_down_effect_on_off',
			'header_scroll_down_effect',
			'subhead_gradient_on_off',
			'subhead_gradient_color_one',
			'subhead_gradient_color_two',
			'content_gradient_on_off',
			'content_gradient_color_one',
			'content_gradient_color_two',
			'animated_gradient',
			'animated_gradient_style',
			'animated_gradient_speed',
			'background_image_alt',
			'background_gradient',
			'background_gradient_type',
			'background_gradient_color_one',
			'background_gradient_color_two',
			'kenburns_effect',
			'kenburns_effect_type',
			'kenburns_effect_speed',
			'interactive_background_effect',
			'slicey_blurry_effect',
			'slicey_blurry_effect_type',
			'particles_effect',
			'particles_effect_value',
			'particles_effect_size',
			'particles_effect_shape',
			'particles_effect_color',
			'particles_effect_color_link',
			'particles_effect_width',
			'particles_effect_speed',
			'particles_effect_direction',
			'hide_particles_effect_phone',
			'moving_particles_effect',
			'moving_particles_circle_color',
			'moving_particles_line_color',
			'hide_moving_particles_effect_phone',
			'custom_scroll_down_icon_on_off',
			'custom_scroll_down_icon_src',
			'icon_max_width',
			'icon_max_width_tablet',
			'icon_max_width_phone',
			'icon_max_width_last_edited',
			'search_on_off',
			's_background_layout',
			's_text_orientation',
			'include_categories',
			'exclude_posts',
			'exclude_pages',
			'hide_button',
			'search_field_bg',
			'search_button_color',
			'search_icon_button',
			'search_icon_color',
			'hide_search_txt',
			'search_button_align_on_off',
			'search_button_align',
			'placeholder',
			'placeholder_color',
			'search_max_width_on_off',
			'search_max_width',
			'search_max_width_tablet',
			'search_max_width_phone',
			'search_max_width_last_edited',
			'woocommerce_search_on_off',
			'popup_video_on_off_one',
			'popup_video_on_off_two',
			'url_new_window_one',
			'url_new_window_two',
			//button mobile full
			'button_mobile_fullwidth',
			'button_one_hover_effect_on_off',
			'button_one_twod_hover_on_off',
			'button_one_twod_hover_style',
			'button_one_sb_hover_on_off',
			'button_one_sb_hover_style',
			'button_one_sb_hover_style_color',
			'button_two_hover_effect_on_off',
			'button_two_twod_hover_on_off',
			'button_two_twod_hover_style',
			'button_two_sb_hover_on_off',
			'button_two_sb_hover_style',
			'button_two_sb_hover_style_color',
			'header_image_custom_url_on_off',
			'header_image_custom_url',
			'header_image_custom_url_new_window',
			//popup content one
			'use_popup_one_on_off',
			'popup_one_id',
			'use_popup_two_on_off',
			'popup_two_id',
			'scroll_fade_header_on_off',
			'divider_on_off',
			'divider_placement',
			'divider_type',
			'divider_height',
			'divider_height_tablet',
			'divider_height_phone',
			'divider_height_last_edited',
			'divider_width',
			'divider_width_tablet',
			'divider_width_phone',
			'divider_width_last_edited',
			'divider_position',
			'divider_position_tablet',
			'divider_position_phone',
			'divider_position_last_edited',
			'divider_rotate',
			'divider_rotate_tablet',
			'divider_rotate_phone',
			'divider_rotate_last_edited',
			'divider_color',
			//header height
			'header_height',
			'header_height_tablet',
			'header_height_phone',
			'header_height_last_edited',
			//header_scroll_down hide
			'hide_header_scroll_down_phone',
			'wider_mobile_space',
			//logo_width_size
			'logo_width',
			'logo_width_tablet',
			'logo_width_phone',
			'logo_width_last_edited',
			//end
		);

		$this->fields_defaults = array(
			'background_layout'   => array( 'light' ),
			'text_orientation'    => array( 'left' ),
			'header_fullscreen'   => array( 'off' ),
			'header_scroll_down'  => array( 'off' ),
			'scroll_down_icon'    => array( ';', 'add_default_setting' ),
			'parallax'            => array( 'off' ),
			'parallax_method'     => array( 'off' ),
			'content_orientation' => array( 'center' ),
			'image_orientation'   => array( 'center' ),
			//added
			'typing_effect'       => array( 'off' ),
			'typing_static_on_off'       => array( 'off' ),
			'typing_static_break'       => array( 'off' ),
			'typing_speed'        => array( '100' ),
			'typing_delay'        => array( '0' ),
			'typing_backdelay'        => array( '1000' ),
			'typing_loop'       => array( 'on' ),
			'typing_underline_on_off'       => array( 'off' ),
			'typing_underline_border' => array( '4px' ),
			'typing_background_on_off'       => array( 'off' ),
			'rotator_effect'      => array( 'off' ),
			'rotator_static_on_off'       => array( 'off' ),
			'rotator_static_break'       => array( 'off' ),
			'rotator_type'      => array( 'fadeIn' ),
			'rotator_speed'       => array( '2000' ),
			'title_fancyline' => array('off'),
			'title_fancy_orientation' => array('left'),
			'fancyline_styles_on_off' => array('off'),
			'fancyline_width' => array('40px'),
			'fancyline_height' => array('2px'),
			'fancyline_margin_top' => array('20px'),
			'fancyline_margin_bottom' => array('20px'),
			'subhead_before_after' => array('after'),
			'textillate_effect'		=> array('off'),
			'textillate_effect_loop'		=> array('on'),
			'textillate_effect_type'		=> array('char'),
			'textillate_effect_time'               => array( '2000' ),
			'textillate_in_effect'		=> array('flipInX'),
			'textillate_in_type'		=> array('sequence'),
			'textillate_out_effect'		=> array('flipInY'),
			'textillate_out_type'		=> array('reverse'),
			'textgif_on_off'      => array( 'off' ),
			'shuffle_text_on_off'      => array( 'off' ),
			'title_gradient_on_off' => array( 'off' ),
			'whole_header_animation_on_off'   => array( 'off' ),
			'whole_animation'               => array( 'fadeIn' ),
			'whole_animation_reveal'               => array( 'off' ),
			'whole_animation_speed'               => array( '0' ),
			'title_animation_on_off'   => array( 'off' ),
			'title_animation'               => array( 'fadeIn' ),
			'title_animation_reveal'               => array( 'off' ),
			'title_animation_speed'               => array( '0' ),
			'subheading_animation_on_off'   => array( 'off' ),
			'subheading_animation'               => array( 'fadeIn' ),
			'subheading_animation_reveal'               => array( 'off' ),
			'subheading_animation_speed'               => array( '0' ),
			'content_animation_on_off'   => array( 'off' ),
			'content_animation'               => array( 'fadeInUp' ),
			'content_animation_reveal'               => array( 'off' ),
			'content_animation_speed'               => array( '0' ),
			'button_one_animation_on_off'   => array( 'off' ),
			'button_two_animation_on_off'   => array( 'off' ),
			'button_one_animation'               => array( 'fadeInUp' ),
			'button_one_animation_reveal'               => array( 'off' ),
			'button_one_animation_speed'               => array( '0' ),
			'button_two_animation'               => array( 'fadeInUp' ),
			'button_two_animation_reveal'               => array( 'off' ),
			'button_two_animation_speed'               => array( '0' ),
			'logo_image_animation_on_off' =>array('off'),
			'logo_image_animation'        =>array( 'fadeInUp' ),
			'logo_image_animation_reveal' =>array('off'),
			'logo_image_animation_speed' =>array('0'),
			'header_image_animation_on_off' =>array('off'),
			'header_image_animation' =>array( 'fadeInUp' ),
			'header_image_animation_reveal' => array('off'),
			'header_image_animation_speed' => array('0'),
			'header_scroll_down_effect_on_off'  => array( 'off' ),
			'header_scroll_down_effect'  => array( 'bounce' ),
			'subhead_gradient_on_off' => array( 'off' ),
			'content_gradient_on_off' => array( 'off' ),
			'animated_gradient'   => array( 'off' ),
			'animated_gradient_style'   => array( 'off' ),
			'animated_gradient_speed'   => array( '0.001' ),
			'background_gradient'   => array( 'off' ),
			'background_gradient_type'   => array( 'top-to-bottom' ),
			'kenburns_effect'    => array( 'off' ),
			'kenburns_effect_type' => array( 'dwd-zoomin' ),
			'kenburns_effect_speed' => array( '17' ),
			'interactive_background_effect' => array( 'off' ),
			'slicey_blurry_effect' => array( 'off' ),
			'slicey_blurry_effect_type' => array( 'dwd-slicey-type-one' ),
			'particles_effect'    => array( 'off' ),
			'particles_effect_value'    => array( '100' ),
			'particles_effect_size'    => array( '3' ),
			'particles_effect_speed'    => array( '6' ),
			'particles_effect_width' => array( '1' ),
			'particles_effect_shape' => array( 'circle' ),
			'particles_effect_direction' => array( 'none' ),
			'hide_particles_effect_phone'    => array( 'off' ),
			'moving_particles_effect' => array( 'off' ),
			'hide_moving_particles_effect_phone' => array( 'off' ),
			'custom_scroll_down_icon_on_off'	=> array( 'off' ),
			'search_on_off'	=> array( 'off' ),
			's_text_orientation'  => array( 'left' ),
			's_background_layout' => array( 'light' ),
			'placeholder'	=> array( 'Type some keyword to start searching..' ),
			'search_icon_button'	=> array( 'off' ),
			'hide_search_txt'	=> array( 'off' ),
			'search_button_align_on_off'	=> array( 'off' ),
			'woocommerce_search_on_off'	=> array( 'off' ),
			//'search_max_width'	=> array( '500px' ),
			'popup_video_on_off_one' => array( 'off' ),
			'popup_video_on_off_two' => array( 'off' ),
			//new window
			'url_new_window_one'	=> array( 'off' ),
			'url_new_window_two'	=> array( 'off' ),
			//button mobile full
			'button_mobile_fullwidth' => array( 'off' ),
			'button_one_hover_effect_on_off' => array( 'off' ),
			'button_one_twod_hover_on_off' => array( 'off' ),
			'button_one_sb_hover_on_off' => array( 'off' ),
			'button_two_hover_effect_on_off' => array( 'off' ),
			'button_two_twod_hover_on_off' => array( 'off' ),
			'button_two_sb_hover_on_off' => array( 'off' ),
			'header_image_custom_url_on_off' => array( 'off' ),
			'header_image_custom_url_new_window'  => array( 'off' ),
			'use_popup_one_on_off' => array( 'off' ),
			'use_popup_two_on_off' => array( 'off' ),
			//scrollmagic
			'scroll_fade_header_on_off' => array( 'off' ),
			'divider_on_off' => array( 'off' ),
			'divider_placement' => array( 'dwd-d-after' ),
			'hide_header_scroll_down_phone' => array( 'off' ),
			'wider_mobile_space' => array( 'off' ),
			//end
		);

		$this->options_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'et_builder' ),
					//added
					'title_effect'   => esc_html__( 'Title Effects', 'et_builder' ),
					//ended
					'links'        => esc_html__( 'Links, Video Popup and Content Popup', 'et_builder' ),
					'images'       => esc_html__( 'Images', 'et_builder' ),
					'background'   => esc_html__( 'Background', 'et_builder' ),
					//added
					'search_form'   => esc_html__( 'Search Form', 'et_builder' ),
					'section_seperator'   => esc_html__( 'Section Seperator', 'et_builder' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'layout'      => esc_html__( 'Layout', 'et_builder' ),
					'scroll_down' => esc_html__( 'Scroll Down Icon', 'et_builder' ),
					'image'       => esc_html__( 'Image', 'et_builder' ),
					'text'        => array(
						'title'    => esc_html__( 'Text', 'et_builder' ),
						'priority' => 49,
					),
					'width'       => array(
						'title'    => esc_html__( 'Sizing', 'et_builder' ),
						'priority' => 65,
					),
					//added
					'particles'   => esc_html__( 'Particles', 'et_builder' ),
					'title_styles'   => esc_html__( 'Title Styling', 'et_builder' ),
					'subhead_styles' => esc_html__( 'Subhead Styling', 'et_builder' ),
					'content_styles' => esc_html__( 'Content Styling', 'et_builder' ),
					'fancyline_styles' => esc_html__( 'Fancy Line Styling', 'et_builder' ),
					'search_styles' => esc_html__( 'Search Styling', 'et_builder' ),
					'divider_styles' => esc_html__( 'Section Seperator Styling', 'et_builder' ),
					//end
				),
			),
			'dwdtab' => array(
				'toggles' => array(
					'animation_area' => esc_html__( 'All Animation Settings', 'et_builder' ),
				),
			),
			'custom_css' => array(
				'toggles' => array(
					'attributes' => array(
						'title'    => esc_html__( 'Attributes', 'et_builder' ),
						'priority' => 95,
					),
				),
			),
		);

		$this->advanced_options = array(
			'fonts' => array(
				'title' => array(
					'label'    => esc_html__( 'Title', 'et_builder' ),
					'css'      => array(
						'main' => "%%order_class%%.et_pb_fullwidth_header .header-content h1",
					),
					'font_size' => array(
						'toggle_slug'  => 'title_styles',
						'default'      => '30px',
					),
					'font' => array(
						'toggle_slug'  => 'title_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'title_styles',
						'default' => '1.3em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'title_styles',
						'default' => '0px',
					),
					'hide_line_height'    => false,
					'hide_text_color'     => true,
					'hide_letter_spacing' => false,
				),
				'subhead' => array(
					'label'    => esc_html__( 'Subhead', 'et_builder' ),
					'css'      => array(
						'main' => "%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_subhead",
					),
					'font_size' => array(
						'toggle_slug'  => 'subhead_styles',
						'default'	   => '18px',
					),
					'font' => array(
						'toggle_slug'  => 'subhead_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'subhead_styles',
						'default' => '1.7em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'subhead_styles',
						'default' => '0px',
					),
					'hide_line_height'    => false,
					'hide_text_color'     => true,
					'hide_letter_spacing' => false,
				),
				'content' => array(
					'label'    => esc_html__( 'Content', 'et_builder' ),
					'css'      => array(
						'main' => "%%order_class%%.et_pb_fullwidth_header p",
					),
					'font_size' => array(
						'toggle_slug'  => 'content_styles',
						'default'      => '14px',
					),
					'font' => array(
						'toggle_slug'  => 'content_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'content_styles',
						'default' => '1.7em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'content_styles',
						'default' => '0px',
					),
					'hide_line_height'    => false,
					'hide_text_color'     => true,
					'hide_letter_spacing' => false,
				),
				'input' => array(
					'label'    => esc_html__( 'Input', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} input.et_pb_s",
						'placeholder' => true,
					),
					'font' => array(
						'toggle_slug'  => 'search_styles',
					),
					'line_height'    => array(
						'default' => '1em',
						'toggle_slug'  => 'search_styles',
					),
					'font_size'      => array(
						'default' => '14px',
						'toggle_slug'  => 'search_styles',
					),
					'letter_spacing' => array(
						'default' => '0px',
						'toggle_slug'  => 'search_styles',
					),
				),
				'search_button' => array(
					'label'          => esc_html__( 'Search Button', 'et_builder' ),
					'css'            => array(
						'main' => "{$this->main_css_element} button.et_pb_searchsubmit",
					),
					'font' => array(
						'toggle_slug'  => 'search_styles',
					),
					'line_height'    => array(
						'default' => '1em',
						'toggle_slug'  => 'search_styles',
					),
					'font_size'      => array(
						'default' => '14px',
						'toggle_slug'  => 'search_styles',
					),
					'letter_spacing' => array(
						'default' => '0px',
						'toggle_slug'  => 'search_styles',
					),
				),
			),
			'button' => array(
				'button_two' => array(
					'label' => esc_html__( 'Button Two', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .et_pb_button_two.et_pb_button",
					),
				),
				'button_one' => array(
					'label' => esc_html__( 'Button One', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .et_pb_button_one.et_pb_button",
					),
				),
			),
			'background' => array(
				'use_background_color'          => true,
				'use_background_image'          => true,
				'use_background_color_gradient' => true,
				'css'                           => array(
					'main' => '.et_pb_fullwidth_header%%order_class%%',
				),
			),
			'scroll_down_icon_size' => array(
				'font_size' => array(
					'default'      => '42px',
				),
				'hide_line_height'    => true,
				'hide_text_color'     => true,
				'hide_letter_spacing' => true,
			),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
		);

		$this->custom_css_options = array(
			'header_container' => array(
				'label'    => esc_html__( 'Header Container', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container',
			),
			'header_content' => array(
				'label'    => esc_html__( 'Header Content', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .header-content',
			),
			'header_image' => array(
				'label'    => esc_html__( 'Header Image', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .header-image img',
			),
			'logo' => array(
				'label'    => esc_html__( 'Logo', 'et_builder' ),
				'selector' => '.header-content img',
			),
			'title' => array(
				'label'    => esc_html__( 'Title', 'et_builder' ),
				'selector' => '.header-content h1',
			),
			'subtitle' => array(
				'label'    => esc_html__( 'Subtitle', 'et_builder' ),
				'selector' => '.header-content .et_pb_fullwidth_header_subhead',
			),
			'content_description' => array(
				'label'    => esc_html__( 'Content Description', 'et_builder' ),
				'selector' => '.et_pb_header_content',
			),
			'button_1' => array(
				'label'    => esc_html__( 'Button One', 'et_builder' ),
				'selector' => '.header-content-container .header-content .et_pb_button_one.et_pb_button',
			),
			'button_2' => array(
				'label'    => esc_html__( 'Button Two', 'et_builder' ),
				'selector' => '.header-content-container .header-content .et_pb_button_two.et_pb_button',
			),
			'scroll_button_wrap' => array(
				'label'    => esc_html__( 'Header Scroll Wrapper', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_scroll',
			),
			'scroll_button' => array(
				'label'    => esc_html__( 'Scroll Down Button Icon/Image', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_scroll a .et-pb-icon',
			),
			//added
			'typing_custom' => array(
				'label'    => esc_html__( 'Typing Effect', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .dwd-typing',
			),
			'rotator_custom' => array(
				'label'    => esc_html__( 'Rotator Effect', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .dwd-rotator',
			),
			'input_field' => array(
				'label'    => esc_html__( 'Input Field', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container input.et_pb_s',
			),
			'search_button'      => array(
				'label'    => esc_html__( 'Search Button', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .et_pb_search_extended button.et_pb_searchsubmit',
			),
			'search_icon'      => array(
				'label'    => esc_html__( 'Search Icon', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .et_pb_search_extended button.et_pb_searchsubmit .dwd_search_icon:before',
			),
		);
	}

	function get_fields() {
		// List of animation options
		//added
		$animation_type_list = array(
			'fadeIn' => esc_html__( 'fadeIn', 'et_builder' ),
			'bounce'    => esc_html__( 'bounce', 'et_builder' ),
			'flash'   => esc_html__( 'flash', 'et_builder' ),
			'pulse'     => esc_html__( 'pulse', 'et_builder' ),
			'rubberBand'  => esc_html__( 'rubberBand', 'et_builder' ),
			'shake' => esc_html__( 'shake', 'et_builder' ),
			'swing'    => esc_html__( 'swing', 'et_builder' ),
			'tada'   => esc_html__( 'tada', 'et_builder' ),
			'wobble'     => esc_html__( 'wobble', 'et_builder' ),
			'jello'     => esc_html__( 'jello', 'et_builder' ),
			'bounceIn'  => esc_html__( 'bounceIn', 'et_builder' ),
			'bounceInDown' => esc_html__( 'bounceInDown', 'et_builder' ),
			'bounceInLeft' => esc_html__( 'bounceInLeft', 'et_builder' ),
			'bounceInRight'    => esc_html__( 'bounceInRight', 'et_builder' ),
			'bounceInUp'   => esc_html__( 'bounceInUp', 'et_builder' ),
			'fadeInDown'     => esc_html__( 'fadeInDown', 'et_builder' ),
			'fadeInDownBig'  => esc_html__( 'fadeInDownBig', 'et_builder' ),
			'fadeInLeft' => esc_html__( 'fadeInLeft', 'et_builder' ),
			'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'et_builder' ),
			'fadeInRight'    => esc_html__( 'fadeInRight', 'et_builder' ),
			'fadeInRightBig'   => esc_html__( 'fadeInRightBig', 'et_builder' ),
			'fadeInDown'     => esc_html__( 'fadeInDown', 'et_builder' ),
			'fadeInDownBig'  => esc_html__( 'fadeInDownBig', 'et_builder' ),
			'fadeInUp' => esc_html__( 'fadeInUp', 'et_builder' ),
			'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'et_builder' ),
			'slideInUp' => esc_html__( 'slideInUp', 'et_builder' ),
			'slideInDown' => esc_html__( 'slideInDown', 'et_builder' ),
			'slideInLeft' => esc_html__( 'slideInLeft', 'et_builder' ),
			'slideInRight' => esc_html__( 'slideInRight', 'et_builder' ),
			'flip' => esc_html__( 'flip', 'et_builder' ),
			'flipInX' => esc_html__( 'flipInX', 'et_builder' ),
			'flipInY'    => esc_html__( 'flipInY', 'et_builder' ),
			'flipOutX' => esc_html__( 'flipOutX', 'et_builder' ),
			'flipOutY'    => esc_html__( 'flipOutY', 'et_builder' ),
			'rotateIn'   => esc_html__( 'rotateIn', 'et_builder' ),
			'rotateInDownLeft'     => esc_html__( 'rotateInDownLeft', 'et_builder' ),
			'rotateInDownRight'  => esc_html__( 'rotateInDownRight', 'et_builder' ),
			'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'et_builder' ),
			'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'et_builder' ),
			'zoomIn'    => esc_html__( 'zoomIn', 'et_builder' ),
			'zoomInDown'   => esc_html__( 'zoomInDown', 'et_builder' ),
			'zoomInLeft'     => esc_html__( 'zoomInLeft', 'et_builder' ),
			'zoomInRight'  => esc_html__( 'zoomInRight', 'et_builder' ),
			'zoomInUp' => esc_html__( 'zoomInUp', 'et_builder' ),
			'lightSpeedIn' => esc_html__( 'lightSpeedIn', 'et_builder' ),
			'lightSpeedOut' => esc_html__( 'lightSpeedOut', 'et_builder' ),
			'rollIn' => esc_html__( 'rollIn', 'et_builder' ),
			'rollOut' => esc_html__( 'rollOut', 'et_builder' ),
			'hinge' => esc_html__( 'hinge', 'et_builder' ),
		);
		//2dhover animation
		$two_d_hover_animation_type_list = array(
			'hvr-grow' => esc_html__( 'Grow', 'et_builder' ),
			'hvr-shrink'    => esc_html__( 'Shrink', 'et_builder' ),
			'hvr-pulse'   => esc_html__( 'Pulse Grow', 'et_builder' ),
			'hvr-pulse-shrink'     => esc_html__( 'Pulse Shrink', 'et_builder' ),
			'hvr-push'  => esc_html__( 'Push', 'et_builder' ),
			'hvr-pop' => esc_html__( 'Pop', 'et_builder' ),
			'hvr-bounce-in'    => esc_html__( 'Bounce In', 'et_builder' ),
			'hvr-bounce-out'   => esc_html__( 'Bounce Out', 'et_builder' ),
			'hvr-rotate'     => esc_html__( 'Rotate', 'et_builder' ),
			'hvr-grow-rotate'     => esc_html__( 'Grow Rotate', 'et_builder' ),
			'hvr-float'  => esc_html__( 'Float', 'et_builder' ),
			'hvr-sink' => esc_html__( 'Sink', 'et_builder' ),
			'hvr-bob' => esc_html__( 'Bob', 'et_builder' ),
			'hvr-hang'    => esc_html__( 'Hang', 'et_builder' ),
			'hvr-skew'   => esc_html__( 'Skew', 'et_builder' ),
			'hvr-skew-forward'     => esc_html__( 'Skew Forward', 'et_builder' ),
			'hvr-skew-backward'  => esc_html__( 'Skew Backward', 'et_builder' ),
			'hvr-wobble-horizontal' => esc_html__( 'Wobble Horizontal', 'et_builder' ),
			'hvr-wobble-vertical' => esc_html__( 'Wobble Vertical', 'et_builder' ),
			'hvr-wobble-to-bottom-right'    => esc_html__( 'Wobble To Bottom Right', 'et_builder' ),
			'hvr-wobble-to-top-right'   => esc_html__( 'Wobble To Top Right', 'et_builder' ),
			'hvr-wobble-top'     => esc_html__( 'Wobble Top', 'et_builder' ),
			'hvr-wobble-bottom'  => esc_html__( 'Wobble Bottom', 'et_builder' ),
			'hvr-wobble-skew' => esc_html__( 'Wobble Skew', 'et_builder' ),
			'hvr-buzz' => esc_html__( 'Buzz', 'et_builder' ),
			'hvr-buzz-out' => esc_html__( 'Buzz Out', 'et_builder' ),
			'hvr-forward' => esc_html__( 'Forward', 'et_builder' ),
			'hvr-backward' => esc_html__( 'Backward', 'et_builder' ),
		);
		//Speech Button
		$sb_hover_animation_type_list = array(
			'hvr-bubble-top'    => esc_html__( 'Bubble Top', 'et_builder' ),
			'hvr-bubble-right'     => esc_html__( 'Bubble Right', 'et_builder' ),
			'hvr-bubble-bottom'   => esc_html__( 'Bubble Bottom', 'et_builder' ),
			'hvr-bubble-left'  => esc_html__( 'Bubble Left', 'et_builder' ),
			'hvr-bubble-float-top' => esc_html__( 'Bubble Float Top', 'et_builder' ),
			'hvr-bubble-float-right' => esc_html__( 'Bubble Float Right', 'et_builder' ),
			'hvr-bubble-float-bottom'    => esc_html__( 'Bubble Float Bottom', 'et_builder' ),
			'hvr-bubble-float-left'   => esc_html__( 'Bubble Float Left', 'et_builder' ),
		);
		//Icon Button
		$icon_hover_animation_type_list = array(
			'hvr-icon-forward'    => esc_html__( 'Icon Forward', 'et_builder' ),
			'hvr-icon-down'     => esc_html__( 'Icon Down', 'et_builder' ),
			'hvr-icon-up'   => esc_html__( 'Icon Up', 'et_builder' ),
			'hvr-icon-spin'  => esc_html__( 'Icon Spin', 'et_builder' ),
		);
		//end
		$fields = array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter your page title here.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			// added new effect
			'typing_effect' => array(
				'label'           => esc_html__( 'Use Typing Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_typing_static_on_off, #et_pb_typing_speed, #et_pb_typing_delay, #et_pb_typing_backdelay, #et_pb_typing_loop, #et_pb_typing_effect_color, #et_pb_typing_cursor, #et_pb_rotator_effect, #et_pb_textillate_effect, #et_pb_textgif_on_off,#et_pb_typing_underline_on_off,#et_pb_typing_background_on_off,#et_pb_shuffle_text_on_off',
				),
				'description'        => esc_html__( 'If enabled, you can choose whether if you want your title to have typing or rotator effect. Use | to separate e.g text1|text2|text3', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_loop' => array(
				'label'           => esc_html__( 'Disable Typing Loop', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'depends_default'   => true,
				'default'           => 'on',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'description'        => esc_html__( 'If disabled, typing effect will not loop infinite. It will stop after completed.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_static_on_off' => array(
				'label'           => esc_html__( 'Static + Typing Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_typing_static_text, #et_pb_typing_static_break',
				),
				'description'        => esc_html__( 'If enabled, you can have static text and typing
				effect on the title at the same time.For the static text input , type in the "title" input field above.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_static_text' => array(
				'label'           => esc_html__( 'Input for Typing Effect', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'For the typing effect, enter the input by using | to separate e.g text1|text2|text3.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_static_break' => array(
				'label'           => esc_html__( 'Typing Effect on a new line', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'description'        => esc_html__( 'If enabled, you can have static text on the first line and typing
				effect on the other line.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_speed' => array(
				'label'             => esc_html__( 'Animation Speed (in ms)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '100',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '200',
						'step' => '5',
				),
				'description'       => esc_html__( 'Here you can designate the speed of the typing effect,
				if typing effect option is enabled above, lesser value will have faster effect.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_delay' => array(
				'label'             => esc_html__( 'Start Delay Speed (in ms)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '500',
						'step' => '10',
				),
				'description'       => esc_html__( 'Time before typing starts
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_backdelay' => array(
				'label'             => esc_html__( 'Delay Time Before Backspacing (in ms)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '1000',
				'range_settings'  => array(
						'min'  => '500',
						'max'  => '2000',
						'step' => '100',
				),
				'description'       => esc_html__( 'Time before typing starts
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_effect_color' => array(
				'label'             => esc_html__( 'Typing Font Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'description'       => esc_html__( "This will be apply to the typing text effect only
				", 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_cursor' => array(
				'label'             => esc_html__( 'Typing Cursor Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'toggle_slug'     => 'title_effect',
			),
			'typing_underline_on_off' => array(
				'label'           => esc_html__( 'Underline (Border Bottom) on Typing Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_typing_underline_color,#et_pb_typing_underline_border',
				),
				'description'        => esc_html__( 'If enabled, you can have a border bottom on the typing effect.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_underline_color' => array(
				'label'             => esc_html__( 'Underline Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'toggle_slug'     => 'title_effect',
			),
			'typing_underline_border' => array(
				'label'             => esc_html__( 'Underline Border', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '4px',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '50',
						'step' => '1',
				),
				'description'       => esc_html__( "This will control the underline thickness", 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_background_on_off' => array(
				'label'           => esc_html__( 'Background Color on Typing Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_typing_background_color',
				),
				'description'        => esc_html__( 'If enabled, you can have background behind the typing effect.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'typing_background_color' => array(
				'label'             => esc_html__( 'Background Typing Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'toggle_slug'     => 'title_effect',
			),
			'rotator_effect' => array(
				'label'           => esc_html__( 'Use Rotator Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_rotator_static_on_off,#et_pb_rotator_speed, #et_pb_rotator_type, #et_pb_rotator_effect_color, #et_pb_textillate_effect, #et_pb_textgif_on_off, #et_pb_shuffle_text_on_off',
				),
				'depends_show_if'   => 'off',
				'description'        => esc_html__( 'If enabled, you can choose whether if you want your title to have rotator effect. Use | to separate e.g text1|text2|text3', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'rotator_static_on_off' => array(
				'label'           => esc_html__( 'Static + Rotator Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_rotator_static_text, #et_pb_rotator_static_break',
				),
				'description'        => esc_html__( 'If enabled, you can have static text and rotator
				effect on the title at the same time.For the static text input , type in the "title" input field above.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'rotator_static_text' => array(
				'label'           => esc_html__( 'Input for Rotator Effect', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'For the rotator effect, enter the input by using | to separate e.g text1|text2|text3.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'rotator_static_break' => array(
				'label'           => esc_html__( 'Rotator Effect on a new line', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'description'        => esc_html__( 'If enabled, you can have static text on the first line and rotator
				effect on the other line.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'rotator_type' => array(
				'label'             => esc_html__( 'Animation Type', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the effect animation of the text rotator.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'rotator_speed' => array(
				'label'             => esc_html__( 'Animation Speed (in ms)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '2000',
				'range_settings'  => array(
						'min'  => '2000',
						'max'  => '3000',
						'step' => '50',
				),
				'description'       => esc_html__( "Here you can designate the speed of the typing effect, option is enabled above, enter the value from 2000 onwards.
				", 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'rotator_effect_color' => array(
				'label'             => esc_html__( 'Rotator Font Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'description'       => esc_html__( "This will be apply to the rotator text effect only
				", 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_effect' => array(
				'label'           => esc_html__( 'Use Textillate Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_textillate_effect_loop, #et_pb_textillate_effect_type,#et_pb_textillate_effect_time,#et_pb_textillate_in_type, #et_pb_textillate_in_effect, #et_pb_textillate_out_type, #et_pb_textillate_out_effect, #et_pb_textgif_on_off, #et_pb_shuffle_text_on_off',
				),
				'depends_show_if'   => 'off',
				'description'        => esc_html__( 'If enabled, you can choose whether if you want your title to have Textillate effect.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_effect_loop' => array(
				'label'           => esc_html__( 'Use Loop', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => array(
					'false'  => esc_html__( 'No', 'et_builder' ),
					'true' => esc_html__( 'Yes', 'et_builder' ),
				),
				'description'        => esc_html__( 'If disabled, textillate effect will not loop infinite. It will only take animate In Animation.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_effect_type' => array(
				'label'           => esc_html__( 'Textillate Type', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => array(
					'char'  => esc_html__( 'Character', 'et_builder' ),
					'word' => esc_html__( 'Words', 'et_builder' ),
				),
				'description'        => esc_html__( 'You can choose Character or Word type to animate. If character, it will animate each letter else if you choose Word, it will animate the Word instead.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_effect_time' => array(
				'label'             => esc_html__( 'Textillate Time (ms)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '2000',
				'range_settings'  => array(
						'min'  => '500',
						'max'  => '8000',
						'step' => '5',
				),
				'description'       => esc_html__( 'This will set the minimum display time for each text before it is replaced.
				', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_in_type' => array(
				'label'             => esc_html__( 'In Animation Type', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => array(
					'sequence'          => esc_html__( 'Sequence', 'et_builder' ),
					'reverse' => esc_html__( 'Reverse', 'et_builder' ),
					'sync'        => esc_html__( 'Sync', 'et_builder' ),
					'shuffle'        => esc_html__( 'Shuffle', 'et_builder' ),
				),
				'description'       => esc_html__( 'Choose the animation type. Shuffle will reverse the character sequence. ', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_in_effect' => array(
				'label'             => esc_html__( 'In Animation Effect', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'default'           => 'flipInX',
				'options'         => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the effect starting animation of the textillate.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_out_type' => array(
				'label'             => esc_html__( 'Out Animation Type', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => array(
					'reverse' => esc_html__( 'Reverse', 'et_builder' ),
					'sequence'          => esc_html__( 'Sequence', 'et_builder' ),
					'sync'        => esc_html__( 'Sync', 'et_builder' ),
					'shuffle'        => esc_html__( 'Shuffle', 'et_builder' ),
				),
				'description'       => esc_html__( 'Choose the animation type. Shuffle will reverse the character sequence. ', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textillate_out_effect' => array(
				'label'             => esc_html__( 'Out Animation Effect', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'default'           => 'flipInY',
				'options'         => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the effect exit animation of the textillate.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textgif_on_off' => array(
				'label'           => esc_html__( 'Use TextGIF Background', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_textgif_bg'
				),
				'depends_show_if'   => 'off',
				'description'        => esc_html__( 'If enabled, you can have gif on the text background text animation.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'textgif_bg' => array(
				'label'              => esc_html__( 'TextGIF Background Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an background', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an background', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Background', 'et_builder' ),
				'description'        => esc_html__( 'Upload your desired GIF image, or type in the URL to the image you would like to display.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'shuffle_text_on_off' => array(
				'label'           => esc_html__( 'Use Shuffle Text', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_shuffle_text_change'
				),
				'depends_show_if'   => 'off',
				'description'        => esc_html__( 'If enabled, you can shuffle the text title.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'shuffle_text_change' => array(
				'label'           => esc_html__( 'Overwrite Random Shuffle Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'       => esc_html__( "Enter only if you want to have your own random character text. Use without space e.g 'diviwebdesign'", 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			//added gradient text
			'title_gradient_on_off' => array(
				'label'             => esc_html__( 'Title Gradient', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_title_gradient_color_one, #et_pb_title_gradient_color_two',
				),
				'toggle_slug'  => 'title_styles',
				'tab_slug'        => 'advanced',
				'description'       => esc_html__( 'Set title gradient color (This will not work with Typing, Rotator or any other title effect.', 'et_builder' ),
			),
			'title_gradient_color_one' => array(
				'label'             => esc_html__( 'First Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'  => 'title_styles',
				'tab_slug'        => 'advanced',
				'depends_show_if'   => 'on',
			),
			'title_gradient_color_two' => array(
				'label'             => esc_html__( '2nd Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'  => 'title_styles',
				'tab_slug'        => 'advanced',
				'depends_show_if'   => 'on',
			),
			'subhead_gradient_on_off' => array(
				'label'             => esc_html__( 'Sub Heading Gradient', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_subhead_gradient_color_one, #et_pb_subhead_gradient_color_two',
				),
				'toggle_slug'  => 'subhead_styles',
				'tab_slug'        => 'advanced',
				'description'       => esc_html__( 'Set Sub Heading gradient color', 'et_builder' ),
			),
			'subhead_gradient_color_one' => array(
				'label'             => esc_html__( 'First Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'  => 'subhead_styles',
				'tab_slug'        => 'advanced',
				'depends_show_if'   => 'on',
			),
			'subhead_gradient_color_two' => array(
				'label'             => esc_html__( '2nd Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'  => 'subhead_styles',
				'tab_slug'        => 'advanced',
				'depends_show_if'   => 'on',
			),
			'content_gradient_on_off' => array(
				'label'             => esc_html__( 'Content Gradient', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_content_gradient_color_one, #et_pb_content_gradient_color_two',
				),
				'toggle_slug'  => 'content_styles',
				'tab_slug'        => 'advanced',
				'description'       => esc_html__( 'Set Content gradient color', 'et_builder' ),
			),
			'content_gradient_color_one' => array(
				'label'             => esc_html__( 'First Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'  => 'content_styles',
				'tab_slug'        => 'advanced',
				'depends_show_if'   => 'on',
			),
			'content_gradient_color_two' => array(
				'label'             => esc_html__( '2nd Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'  => 'content_styles',
				'tab_slug'        => 'advanced',
				'depends_show_if'   => 'on',
			),
			//end
			'title_fancyline' => array(
				'label'           => esc_html__( 'Use Fancy line on Title', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_title_before_after, #et_pb_title_fancy_orientation',
				),
				'description'       => esc_html__( 'Here you can choose to have fancy line on title (Underline)', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'title_before_after' => array(
				'label'           => esc_html__( 'Fancy line before or after Title', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'before' => esc_html__( 'Before', 'et_builder' ),
					'after'  => esc_html__( 'After', 'et_builder' ),
				),
				'description'       => esc_html__( 'This controls whether this title should have the fancy line appears before or after the Title depending if you use Subheading or not', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'title_fancy_orientation' => array(
				'label'             => esc_html__( 'Fancy Line Orientation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'         => array(
					'left' => esc_html__( 'Left', 'et_builder' ),
					'center'  => esc_html__( 'Center', 'et_builder' ),
					'right'  => esc_html__( 'Right', 'et_builder' ),
				),
				'description'       => esc_html__( 'This controls the how your fancy line is aligned', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'subhead' => array(
				'label'           => esc_html__( 'Subheading Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'If you would like to use a subhead, add it here. Your subhead will appear below your title in a small font.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			//added
			'subhead_before_after' => array(
				'label'           => esc_html__( 'Subheading Before or After Title', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'before' => esc_html__( 'Before', 'et_builder' ),
					'after'  => esc_html__( 'After', 'et_builder' ),
				),
				'description'       => esc_html__( 'This controls whether this text appears before or after the Title text. ', 'et_builder' ),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'layout',
			),
			'whole_header_animation_on_off' => array(
				'label'           => esc_html__( 'Use Header Animation', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_whole_animation,
					#et_pb_whole_animation_reveal,
					#et_pb_title_animation_on_off,
					#et_pb_subheading_animation_on_off,
					#et_pb_content_animation_on_off,
					#et_pb_button_one_animation_on_off,
					#et_pb_button_two_animation_on_off'
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'        => esc_html__( 'If enabled, you can define the animation of the whole header section. However you are not able to use animation on Title, Subhead, Content and Button if this is enabled. ', 'et_builder' ),
			),
			'whole_animation' => array(
				'label'             => esc_html__( 'Whole Header Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			'whole_animation_reveal' => array(
				'label'           => esc_html__( 'Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_whole_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
				'description'        => esc_html__( 'Reveal CSS animation as you scroll down a page.', 'et_builder' ),
			),
			'whole_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			//end of added codes
			'background_layout' => array(
				'label'           => esc_html__( 'Text Color', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'color_option',
				'options'         => array(
					'light' => esc_html__( 'Dark', 'et_builder' ),
					'dark'  => esc_html__( 'Light', 'et_builder' ),
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'text',
				'description'       => esc_html__( 'Here you can choose the value of your text. If you are working with a dark background, then your text should be set to light. If you are working with a light background, then your text should be dark.', 'et_builder' ),
			),
			'text_orientation' => array(
				'label'             => esc_html__( 'Text & Logo Orientation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => et_builder_get_text_orientation_options(),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'layout',
				'description'       => esc_html__( 'This controls the how your text is aligned within the module.', 'et_builder' ),
			),
			'header_fullscreen' => array(
				'label'           => esc_html__( 'Make Fullscreen', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_content_orientation, #et_pb_header_height',
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'layout',
				'description'       => esc_html__( 'Here you can choose whether the header is expanded to fullscreen size.', 'et_builder' ),
			),
			'header_scroll_down' => array(
				'label'           => esc_html__( 'Show Scroll Down Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'scroll_down',
				'affects'           => array(
					'#et_pb_header_scroll_down_effect_on_off, #et_pb_custom_scroll_down_icon_on_off, #et_pb_hide_header_scroll_down_phone',
				),
				'description'       => esc_html__( 'Here you can choose whether the scroll down icon is shown.', 'et_builder' ),
			),
			'scroll_down_icon' => array(
				'label'               => esc_html__( 'Icon', 'et_builder' ),
				'type'                => 'text',
				'option_category'     => 'configuration',
				'class'               => array( 'et-pb-font-icon' ),
				'renderer'            => 'et_pb_get_font_down_icon_list',
				'renderer_with_field' => true,
				'description'         => esc_html__( 'Choose an icon to display for the scroll down icon.', 'et_builder' ),
				//depends on custom icon
				'depends_show_if'     => 'off',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			//added
			'custom_scroll_down_icon_on_off' => array(
				'label'           => esc_html__( 'Custom Scroll Image/Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_scroll_down_icon, #et_pb_custom_scroll_down_icon_src, #et_pb_icon_max_width, #et_pb_scroll_down_icon_color, #et_pb_scroll_down_icon_size',
				),
				'description'       => esc_html__( 'Here you can choose to upload your own scroll down image/icon.', 'et_builder' ),
				'depends_show_if'     => 'on',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			'custom_scroll_down_icon_src' => array(
				'label'              => esc_html__( 'Scroll Image/Icon URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Scroll Image', 'et_builder' ),
				//added depends to show
				'depends_show_if'   => 'on',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
				//end
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
			),
			'icon_max_width' => array(
				'label'           => esc_html__( 'Scroll Icon Width (in px)', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'mobile_options'  => true,
				'validate_unit'   => true,
				//added depends to show
				'depends_show_if'   => 'on',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
				//end
			),
			'icon_max_width_tablet' => array(
				'type' => 'skip',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			'icon_max_width_phone' => array(
				'type' => 'skip',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			'icon_max_width_last_edited' => array(
				'type'     => 'skip',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			'header_scroll_down_effect_on_off' => array(
				'label'           => esc_html__( 'Animation on Scroll Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_header_scroll_down_effect',
				),
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
				'description'       => esc_html__( 'Here you can choose whether the apply animation on scroll down icon.', 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			'header_scroll_down_effect' => array(
				'label'             => esc_html__( 'Animation Type', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => $animation_type_list,
				'description'       => esc_html__( 'This set a infinite effect animation of the scroll down icon.', 'et_builder' ),
				'depends_show_if'     => 'on',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			'hide_header_scroll_down_phone' => array(
				'label'           => esc_html__( 'Hide Scroll Down Icon on Mobile', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'scroll_down',
				'depends_show_if'     => 'on',
			),
			//end
			//search added
			'search_on_off' => array(
				'label'           => esc_html__( 'Include Search Form', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_woocommerce_search_on_off, #et_pb_s_background_layout, #et_pb_s_text_orientation, #et_pb_hide_search_txt, #et_pb_search_icon_button, #et_pb_hide_button, #et_pb_placeholder, #et_pb_search_button_align_on_off, #et_pb_search_button_align',
				),
				'toggle_slug'         => 'search_form',
				'description'       => esc_html__( 'Here you can choose whether to show search bar on the header.', 'et_builder' ),
			),
			'woocommerce_search_on_off' => array(
				'label'           => esc_html__( 'WooCommerce Search', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'Off', 'et_builder' ),
					'on'  => esc_html__( 'On', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_exclude_pages, #et_pb_exclude_posts, include_categories',
				),
				'toggle_slug'         => 'search_form',
				'description'       => esc_html__( 'Turning this on will search for WooCommerce Products from search results instead of posts/pages', 'et_builder' ),
			),
			's_background_layout' => array(
				'label'           => esc_html__( 'Text Color', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'light' => esc_html__( 'Dark', 'et_builder' ),
					'dark'  => esc_html__( 'Light', 'et_builder' ),
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Here you can choose the value of your text. If you are working with a dark background, then your text should be set to light. If you are working with a light background, then your text should be dark.', 'et_builder' ),
			),
			's_text_orientation' => array(
				'label'           => esc_html__( 'Text Orientation', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'left'   => esc_html__( 'Left', 'et_builder' ),
					'right'  => esc_html__( 'Right', 'et_builder' ),
					'center' => esc_html__( 'Center', 'et_builder' ),
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'This controls the how your text is aligned within the module.', 'et_builder' ),
			),
			'exclude_pages' => array(
				'label'           => esc_html__( 'Exclude Pages', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'depends_show_if'  => 'off',
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Turning this on will exclude Pages from search results', 'et_builder' ),
			),
			'exclude_posts' => array(
				'label'           => esc_html__( 'Exclude Posts', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'         => array(
					'include_categories',
				),
				'depends_show_if'  => 'off',
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Turning this on will exclude Posts from search results', 'et_builder' ),
			),
			'include_categories' => array(
				'label'            => esc_html__( 'Exclude Categories', 'et_builder' ),
				'renderer'         => 'et_builder_include_categories_option',
				'option_category'  => 'basic_option',
				'renderer_options' => array(
					'use_terms' => false,
				),
				'depends_show_if'  => 'off',
				'toggle_slug'         => 'search_form',
				'description'      => esc_html__( 'Choose which categories you would like to exclude from the search results.', 'et_builder' ),
			),
			'search_icon_button' => array(
				'label'           => esc_html__( 'Show Search Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Turning this on will show the Search Icon on the button before text', 'et_builder' ),
			),
			'hide_search_txt' => array(
				'label'           => esc_html__( 'Hide Search Text', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Turning this on will hide the Search Text', 'et_builder' ),
			),
			'hide_button' => array(
				'label'           => esc_html__( 'Hide Button', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Turning this on will hide the Search button', 'et_builder' ),
			),
			'search_button_align_on_off' => array(
				'label'           => esc_html__( 'Align Button', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_search_button_align',
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'Turning this on will align the Search button placement', 'et_builder' ),
			),
			'search_button_align' => array(
				'label'           => esc_html__( 'Search Button Orientation', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'left'   => esc_html__( 'Left', 'et_builder' ),
					'right'  => esc_html__( 'Right', 'et_builder' ),
				),
				'toggle_slug'         => 'search_form',
				'description'     => esc_html__( 'This controls the how your Button is aligned within the search input.', 'et_builder' ),
			),
			'placeholder' => array(
				'label'       => esc_html__( 'Placeholder Text', 'et_builder' ),
				'type'        => 'text',
				'toggle_slug'         => 'search_form',
				'description' => esc_html__( 'Type the text you want to use as placeholder for the search field.', 'et_builder' ),
			),
			//search ended
			'scroll_down_icon_color' => array(
				'label'             => esc_html__( 'Scroll Down Icon Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'scroll_down',
				//added depends to show
				'depends_show_if'   => 'off',
				//end
			),
			'scroll_down_icon_size' => array(
				'label'           => esc_html__( 'Scroll Down Icon Size', 'et_builder' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'mobile_options'  => true,
				'default'           => '42px',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'scroll_down',
				//added depends to show
				'depends_show_if'   => 'off',
				//end
			),
			'scroll_down_icon_size_tablet' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'scroll_down',
			),
			'scroll_down_icon_size_phone' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'scroll_down',
			),
			'scroll_down_icon_size_last_edited' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'scroll_down',
			),
			//animation for title, subheadin & content
			//added
			'scroll_fade_header_on_off' => array(
				'label'           => esc_html__( 'Scrolling Fading Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( 'This will have a scrolling fading effect on all element inside the header. Make sure you do not apply any animation.', 'et_builder' ),

			),
			'title_animation_on_off' => array(
				'label'           => esc_html__( 'Title Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_title_animation, #et_pb_title_animation_reveal',
				),
				'depends_show_if'     => 'off',
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'title_animation' => array(
				'label'             => esc_html__( 'Title Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'title_animation_reveal' => array(
				'label'           => esc_html__( 'Title Animation Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_title_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'title_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'subheading_animation_on_off' => array(
				'label'           => esc_html__( 'Subheading Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_subheading_animation, #et_pb_subheading_animation_reveal',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'off',
			),
			'subheading_animation' => array(
				'label'             => esc_html__( 'Subheading Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'subheading_animation_reveal' => array(
				'label'           => esc_html__( 'Subheading Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_subheading_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'subheading_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'content_animation_on_off' => array(
				'label'           => esc_html__( 'Content Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_content_animation,#et_pb_content_animation_reveal',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'off',
			),
			'content_animation' => array(
				'label'             => esc_html__( 'Content Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'content_animation_reveal' => array(
				'label'           => esc_html__( 'Content Animation Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_content_animation_speed',
				),
				'depends_show_if'     => 'on',
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'content_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			//search max width
			'search_max_width_on_off' => array(
				'label'           => esc_html__( 'Use Custom Styles for Search', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_search_max_width, #et_pb_search_max_width_tablet, #et_pb_search_max_width_phone, #et_pb_search_button_color, #et_pb_search_icon_color, #et_pb_search_field_bg, #et_pb_placeholder_color',
				),
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'search_styles',
			),
			'search_max_width' => array(
				'label'           => esc_html__( 'Search Max Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'search_styles',
				'mobile_options'  => true,
				'validate_unit'   => true,
			),
			'search_max_width_tablet' => array(
				'type' => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			'search_max_width_phone' => array(
				'type' => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			'search_max_width_last_edited' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			'search_icon_color' => array(
				'label'        => esc_html__( 'Search Icon Color', 'et_builder' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'tab_slug'     => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			'search_button_color' => array(
				'label'        => esc_html__( 'Button and Border Color', 'et_builder' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'tab_slug'     => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			'search_field_bg' => array(
				'label'        => esc_html__( 'Input Field Background Color', 'et_builder' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'tab_slug'     => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			'placeholder_color' => array(
				'label'        => esc_html__( 'Placeholder Color', 'et_builder' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'tab_slug'     => 'advanced',
				'toggle_slug' => 'search_styles',
			),
			//end
			'title_font_color' => array(
				'label'             => esc_html__( 'Title Font Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'title',
			),
			'subhead_font_color' => array(
				'label'             => esc_html__( 'Subhead Font Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'subhead',
			),
			'content_font_color' => array(
				'label'             => esc_html__( 'Content Font Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'content',
			),
			'max_width' => array(
				'label'           => esc_html__( 'Container Max Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'        => esc_html__( 'You can have custom width on the header. By default, Divi set a max-width of 800px on .header-content', 'et_builder' ),
			),
			'max_width_tablet' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'max_width_phone' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'max_width_last_edited' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'wider_mobile_space' => array(
				'label'           => esc_html__( 'Wider Mobile Space', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'description'        => esc_html__( 'You can a wider width space on mobile. Very useful if you have many text on the content area or long button text. This will adjust the width to 95%.', 'et_builder' ),
			),
			//logo width
			'logo_width' => array(
				'label'           => esc_html__( 'Logo Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'        => esc_html__( 'You can have custom responsive width for logo image.', 'et_builder' ),
			),
			'logo_width_tablet' => array(
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
			),
			'logo_width_phone' => array(
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
			),
			'logo_width_last_edited' => array(
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
			),
			//header height
			'header_height' => array(
				'label'           => esc_html__( 'Header Height', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'        => esc_html__( 'You can have custom responsive height on the header when not using Fullscreen mode.', 'et_builder' ),
				'depends_show_if'    => 'off',
			),
			'header_height_tablet' => array(
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
			),
			'header_height_phone' => array(
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
			),
			'header_height_last_edited' => array(
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
			),
			//animations for buttons
			//added
			'fancyline_styles_on_off' => array(
				'label'           => esc_html__( 'Use Custom Styles for Fancy Line', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_fancyline_color, #et_pb_fancyline_width, #et_pb_fancyline_height, #et_pb_fancyline_margin_top, #et_pb_fancyline_margin_bottom',
				),
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_color' => array(
				'label'             => esc_html__( 'Line Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_width' => array(
				'label'             => esc_html__( 'Line Width', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'mobile_options'  => true,
				'depends_default'   => true,
				'default'           => '40px',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_width_tablet' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_width_phone' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_width_last_edited' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_height' => array(
				'label'             => esc_html__( 'Line Height', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'mobile_options'  => true,
				'depends_default'   => true,
				'default'           => '2px',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_height_tablet' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_height_phone' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_height_last_edited' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_margin_top' => array(
				'label'       => esc_html__( 'Line Top Spacing', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'mobile_options'  => true,
				'depends_default'   => true,
				'default'           => '20px',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
				'description' => esc_html__( 'Enter the top margin you want to use in PX', 'et_builder' ),
			),
			'fancyline_margin_top_tablet' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_margin_top_phone' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_margin_top_last_edited' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_margin_bottom' => array(
				'label'       => esc_html__( 'Line Bottom Spacing', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'mobile_options'  => true,
				'depends_default'   => true,
				'default'           => '20px',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
				'description' => esc_html__( 'Enter the bottom margin you want to use in PX', 'et_builder' ),
			),
			'fancyline_margin_bottom_tablet' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_margin_bottom_phone' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'fancyline_margin_bottom_last_edited' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'fancyline_styles',
			),
			'button_one_animation_on_off' => array(
				'label'           => esc_html__( 'Button One Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_one_animation,#et_pb_button_one_animation_reveal,#et_pb_button_one_hover_effect_on_off',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'off',
			),
			'button_one_animation' => array(
				'label'             => esc_html__( 'Button One Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_one_animation_reveal' => array(
				'label'           => esc_html__( 'Button One Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_one_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_one_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			//hover #1
			'button_one_hover_effect_on_off' => array(
				'label'           => esc_html__( 'Use Button Hover Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_one_twod_hover_on_off,#et_pb_button_one_sb_hover_on_off',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'        => esc_html__( 'If enabled, you can have hover animation on Button #1. Animation are from http://ianlunn.github.io/Hover/', 'et_builder' ),
			),
			'button_one_twod_hover_on_off' => array(
				'label'           => esc_html__( 'Use 2D Hover Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_one_twod_hover_style',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'button_one_twod_hover_style' => array(
				'label'             => esc_html__( '2D Transitions', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $two_d_hover_animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_one_sb_hover_on_off' => array(
				'label'           => esc_html__( 'Use Speech Bubbles', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_one_sb_hover_style,#et_pb_button_one_sb_hover_style_color',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'button_one_sb_hover_style' => array(
				'label'             => esc_html__( 'Speech Bubbles Transitions', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $sb_hover_animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_one_sb_hover_style_color' => array(
				'label'             => esc_html__( 'Hover Effect Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( 'Here you can define a custom color for your hover effect color. Some effect might require this', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_two_animation_on_off' => array(
				'label'           => esc_html__( 'Button Two Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_two_animation,#et_pb_button_two_animation_reveal,#et_pb_button_two_hover_effect_on_off',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'off',
			),
			'button_two_animation' => array(
				'label'             => esc_html__( 'Button Two Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_two_animation_reveal' => array(
				'label'           => esc_html__( 'Button Two Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_two_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_two_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			//hover #2
			'button_two_hover_effect_on_off' => array(
				'label'           => esc_html__( 'Use Button Hover Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_two_twod_hover_on_off,#et_pb_button_two_sb_hover_on_off',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'        => esc_html__( 'If enabled, you can have hover animation on Button #2. Animation are from http://ianlunn.github.io/Hover/', 'et_builder' ),
			),
			'button_two_twod_hover_on_off' => array(
				'label'           => esc_html__( 'Use 2D Hover Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_two_twod_hover_style',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'button_two_twod_hover_style' => array(
				'label'             => esc_html__( '2D Transitions', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $two_d_hover_animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_two_sb_hover_on_off' => array(
				'label'           => esc_html__( 'Use Speech Bubbles', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_two_sb_hover_style,#et_pb_button_two_sb_hover_style_color',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'button_two_sb_hover_style' => array(
				'label'             => esc_html__( 'Speech Bubbles Transitions', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $sb_hover_animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_two_sb_hover_style_color' => array(
				'label'             => esc_html__( 'Hover Effect Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( 'Here you can define a custom color for your hover effect color. Some effect might require this', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_mobile_fullwidth' => array(
				'label'           => esc_html__( 'Make Button Fullwidth on Mobile', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'tab_slug'    => 'dwdtab',
				'description'        => esc_html__( 'If enabled, single or both buttons will be full width at 100% width.', 'et_builder' ),
			),
			//end
			'button_one_text' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s Text', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the text for the Button.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'button_one_url' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s URL', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the URL for the Button.', 'et_builder' ),
				'toggle_slug'     => 'links',
			),
			//added popup for button one
			'popup_video_on_off_one' => array(
				'label'           => esc_html__( 'Video Popup on Button One', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_url_new_window_one,#et_pb_use_popup_one_on_off',
				),
				'toggle_slug'     => 'links',
				'description'     => esc_html__( 'Video URL on Button One URL. If using YouTube as video, use the link eg https://www.youtube.com/watch?v=FkQuawiGWUw and supports Vimeo video link as well', 'et_builder' ),
			),
			'url_new_window_one' => array(
				'label'           => esc_html__( 'Url Opens (Button One)', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'et_builder' ),
					'on'  => esc_html__( 'In The New Tab', 'et_builder' ),
				),
				'depends_show_if'     => 'off',
				'description' => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'et_builder' ),
				'toggle_slug'     => 'links',
			),
			'use_popup_one_on_off' => array(
				'label'           => esc_html__( 'Use Popup on Button #1', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_popup_one_id',
				),
				'depends_show_if'     => 'off',
				'toggle_slug'     => 'links',
				'description'     => esc_html__( 'If you wish to use content popup on Button #1. Go to Pro Settings to set your Title, Content, Button and Images.', 'et_builder' ),
			),
			'popup_one_id' => array(
				'label'           => esc_html__( 'The Popup ID You created', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'toggle_slug'     => 'links',
			),
			//button two
			'button_two_text' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s Text', 'et_builder' ), '#2' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the text for the Button.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'button_two_url' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s URL', 'et_builder' ), '#2' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the URL for the Button.', 'et_builder' ),
				'toggle_slug'     => 'links',
			),
			'popup_video_on_off_two' => array(
				'label'           => esc_html__( 'Video Popup on Button Two', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_url_new_window_two,#et_pb_use_popup_two_on_off',
				),
				'toggle_slug'     => 'links',
				'description'     => esc_html__( 'Video URL on Button Two URL. If using YouTube as video, eg https://www.youtube.com/watch?v=FkQuawiGWUw and supports Vimeo video link as well ', 'et_builder' ),
			),
			'url_new_window_two' => array(
				'label'           => esc_html__( 'Url Opens (Button Two)', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'et_builder' ),
					'on'  => esc_html__( 'In The New Tab', 'et_builder' ),
				),
				'depends_show_if'     => 'off',
				'description' => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'et_builder' ),
				'toggle_slug'     => 'links',
			),
			//use popup button two
			'use_popup_two_on_off' => array(
				'label'           => esc_html__( 'Use Popup on Button #2', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_popup_two_id',
				),
				'depends_show_if'     => 'off',
				'toggle_slug'     => 'links',
				'description'     => esc_html__( 'If you wish have a popup on this button, you cant have video and content popup on the same button. If you turned on Video popup, this option will be hidden.', 'et_builder' ),
			),
			'popup_two_id' => array(
				'label'           => esc_html__( 'The Popup ID You created', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'toggle_slug'     => 'links',
			),
			'background_image_alt' => array(
				'label'           => esc_html__( 'Background Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Put a title alt for background image.', 'et_builder' ),
				'toggle_slug'     => 'background',
			),
			'background_overlay_color' => array(
				'label'             => esc_html__( 'Background Overlay Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'toggle_slug'       => 'background',
			),
			//added for animated gradient and particles effect
			'particles_effect' => array(
				'label'           => esc_html__( 'Use Particles Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_particles_effect_size,#et_pb_particles_effect_color,#et_pb_particles_effect_color_link,#et_pb_particles_effect_shape,#et_pb_particles_effect_width,#et_pb_particles_effect_speed,#et_pb_particles_effect_value,#et_pb_hide_particles_effect_direction,#et_pb_hide_particles_effect_phone',
				),
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'If enabled, you can have particles background effect on the header. This effect can only be used in one section.', 'et_builder' ),
			),
			'particles_effect_value' => array(
				'label'           => esc_html__( 'Number of Particles', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
				'description'     => esc_html__( 'This defines the number of particles you wish to display. Default is 100', 'et_builder' ),
			),
			'particles_effect_size' => array(
				'label'             => esc_html__( 'Particles Size', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '3',
				'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
				),
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
				'description'       => esc_html__( "Change the size of particles.
				", 'et_builder' ),
			),
			'particles_effect_shape' => array(
				'label'           => esc_html__( 'Shape of the Particles', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'circle' => esc_html__( 'Circle', 'et_builder' ),
					'triangle' => esc_html__( 'Triangle', 'et_builder' ),
					'edge' => esc_html__( 'Edge', 'et_builder' ),
					'polygon' => esc_html__( 'Polygon', 'et_builder' ),
					'star' => esc_html__( 'Star', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
				'description'        => esc_html__( 'Different types of particles shape to choose from.', 'et_builder' ),
			),
			'particles_effect_width' => array(
				'label'             => esc_html__( 'Particles Line Linked', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '1',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '50',
						'step' => '1',
				),
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
				'description'       => esc_html__( "Change the width of the particles line.
				", 'et_builder' ),
			),
			'particles_effect_speed' => array(
				'label'             => esc_html__( 'Particles Speed', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '6',
				'range_settings'  => array(
						'min'  => '1',
						'max'  => '20',
						'step' => '0.1',
				),
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
				'description'       => esc_html__( "Change the particles speed.
				", 'et_builder' ),
			),
			'particles_effect_color' => array(
				'label'             => esc_html__( 'Particles Shape Color', 'et_builder' ),
				'type'              => 'color',
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
			),
			'particles_effect_color_link' => array(
				'label'             => esc_html__( 'Particles Link Color', 'et_builder' ),
				'type'              => 'color',
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
			),
			'particles_effect_direction' => array(
				'label'           => esc_html__( 'Particles Direction', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'none' => esc_html__( 'None', 'et_builder' ),
					'top' => esc_html__( 'Top', 'et_builder' ),
					'right' => esc_html__( 'Right', 'et_builder' ),
					'left' => esc_html__( 'Left', 'et_builder' ),
					'top-right' => esc_html__( 'Top Right', 'et_builder' ),
					'top-left' => esc_html__( 'Top Left', 'et_builder' ),
					'bottom' => esc_html__( 'Bottom', 'et_builder' ),
					'bottom-right' => esc_html__( 'Bottom Right', 'et_builder' ),
					'bottom-left' => esc_html__( 'Bottm Left', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
				'description'        => esc_html__( 'Particles will move in the directions you specify. Default is none which will stay static.', 'et_builder' ),
			),
			'hide_particles_effect_phone' => array(
				'label'           => esc_html__( 'Hide Particles Effects on Mobile', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'depends_show_if'   => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'particles',
			),
			'kenburns_effect' => array(
				'label'           => esc_html__( 'Use Background KenBurns Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_kenburns_effect_type, #et_pb_interactive_background_effect, #et_pb_kenburns_effect_speed',
				),
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'If enabled, you can have background KenBurns Effect. Background image recommended size is 1920 × 1280. Note: If you are using left, right on Zoom In or Zoom out, Zoom in and Zoom out effect will be used on Mobile devices instead.', 'et_builder' ),
			),
			'kenburns_effect_type' => array(
				'label'           => esc_html__( 'KenBurns Effect Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'dwd-zoomin' => esc_html__( 'Zoom In', 'et_builder' ),
					'dwd-zoomin-left'  => esc_html__( 'Zoom In Left', 'et_builder' ),
					'dwd-zoomin-right'  => esc_html__( 'Zoom In Right', 'et_builder' ),
					'dwd-zoomout' => esc_html__( 'Zoom Out', 'et_builder' ),
					'dwd-zoomout-left' => esc_html__( 'Zoom Out Left', 'et_builder' ),
					'dwd-zoomout-right' => esc_html__( 'Zoom Out Right', 'et_builder' ),
				),
				'toggle_slug'       => 'background',
			),
			'kenburns_effect_speed' => array(
				'label'             => esc_html__( 'KenBurns Speed', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '17',
				'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
				),
				'toggle_slug'       => 'background',
				'description'       => esc_html__( "The speed of the KenBurns Effect. Lesser value will speed up the KenBurns Effect. Note: This will not apply to mobile devices. The default speed is 17s", 'et_builder' ),
			),
			'interactive_background_effect' => array(
				'label'           => esc_html__( 'Use Interactive Background Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'       => 'background',
				'depends_show_if'   => 'off',
				'description'        => esc_html__( 'If enabled, you can have interactive background effect. This will move your background image on mouse move. Mobile and Tablet will not have this effect. Note: KenBurns and Parallax will not work with this. Make sure you turn them off.', 'et_builder' ),
			),
			'slicey_blurry_effect' => array(
				'label'           => esc_html__( 'Use Slicey Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_slicey_blurry_effect_type',
				),
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'This will replicate boxes from the background URL you provided with the same background image and make these boxes move in perspective towards the viewer. This will spice up and add some jazz to background image. Note: This might not work with older browsers. (Inspired by Filippo Bello’s Portfolio)', 'et_builder' ),
			),
			'slicey_blurry_effect_type' => array(
				'label'           => esc_html__( 'Slicey Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'dwd-slicey-type-one' => esc_html__( 'Big Multiple Boxes', 'et_builder' ),
					'dwd-slicey-type-two'  => esc_html__( 'Layer Illusion', 'et_builder' ),
				),
				'toggle_slug'       => 'background',
			),
			'animated_gradient' => array(
				'label'           => esc_html__( 'Animated Gradient Background', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_animated_gradient_style, #et_pb_animated_gradient_speed',
				),
				'depends_show_if'   => 'off',
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'If enabled, your background will have animated gradient effect', 'et_builder' ),
			),
			'animated_gradient_style' => array(
				'label'           => esc_html__( 'Animated Gradient Style', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'Solid', 'et_builder' ),
					'on'  => esc_html__( 'Transparent', 'et_builder' ),
				),
				'depends_show_if'   => 'on',
				'toggle_slug'       => 'background',
				'description'       => esc_html__( 'Define the style, used for the animated gradient effect. If you wish to use background image or parallax, please set it on the fullwidth settings instead of this.', 'et_builder' ),
			),
			'animated_gradient_speed' => array(
				'label'             => esc_html__( 'Animated Gradient Speed', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0.001',
				'range_settings'  => array(
						'min'  => '0.001',
						'max'  => '0.030',
						'step' => '0.001',
				),
				'toggle_slug'       => 'background',
				'description'       => esc_html__( "Change the speed of the animated gradient background.
				", 'et_builder' ),
			),
			'background_gradient' => array(
				'label'             => esc_html__( 'Overlay Gradient', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_animated_gradient, #et_pb_background_gradient_type, #et_pb_background_gradient_color_one, #et_pb_background_gradient_color_two',
				),
				'toggle_slug'       => 'background',
				'description'       => esc_html__( 'Set a overlay gradient color', 'et_builder' ),
			),
			'background_gradient_type' => array(
				'label'           => esc_html__( 'Gradient Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'left-to-right' => esc_html__( 'Left to Right →', 'et_builder' ),
					'top-to-bottom'  => esc_html__( 'Top to Bottom ↓', 'et_builder' ),
					'radial'  => esc_html__( 'Radial ○', 'et_builder' ),
					'diagonal-top'  => esc_html__( 'Diagonal ↘', 'et_builder' ),
					'diagonal-bottom'  => esc_html__( 'Diagonal ↗', 'et_builder' ),
				),
				'depends_show_if'   => 'on',
				'toggle_slug'       => 'background',
				'description'       => esc_html__( 'Define the gradient type. Top to Bottom, Left to Right, Radial and Diagonal.', 'et_builder' ),
			),
			'background_gradient_color_one' => array(
				'label'           => esc_html__( 'Gradient Start', 'et_builder' ),
				'type'            => 'color-alpha',
				'option_category' => 'configuration',
				'description'     => esc_html__( '', 'et_builder' ),
				'depends_show_if' => 'on',
				'default'         => '#2b87da',
				'depends_to'      => array(
					'background_gradient',
				),
				'toggle_slug'       => 'background',
			),
			'background_gradient_color_two' => array(
				'label'           => esc_html__( 'Gradient End', 'et_builder' ),
				'type'            => 'color-alpha',
				'option_category' => 'configuration',
				'description'     => esc_html__( '', 'et_builder' ),
				'depends_show_if' => 'on',
				'default'         => '#29c4a9',
				'depends_to'      => array(
					'background_gradient',
				),
				'toggle_slug'       => 'background',
			),
			'moving_particles_effect' => array(
				'label'           => esc_html__( 'Use Moving Particles Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_moving_particles_circle_color,#et_pb_moving_particles_line_color,#et_pb_hide_moving_particles_effect_phone',
				),
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'If enabled, you can have moving particles background effect on the header. This effect can only be used in one section.', 'et_builder' ),
			),
			'moving_particles_circle_color' => array(
				'label'             => esc_html__( 'Moving Circle Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'depends_show_if'   => 'on',
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'Only RGBA is accepted. Make sure you use rgba instead of #hex color code.', 'et_builder' ),
			),
			'moving_particles_line_color' => array(
				'label'             => esc_html__( 'Moving Line Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'depends_show_if'   => 'on',
				'toggle_slug'       => 'background',
				'description'        => esc_html__( 'Only RGBA is accepted. Make sure you use rgba instead of #hex color code.', 'et_builder' ),
			),
			'hide_moving_particles_effect_phone' => array(
				'label'           => esc_html__( 'Hide Moving Particles on Mobile', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'       => 'background',
				'depends_show_if'   => 'on',
			),
			//end
			'logo_image_url' => array(
				'label'              => esc_html__( 'Logo Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
				'toggle_slug'        => 'images',
			),
			//animation for logo image
			//added
			'logo_image_animation_on_off' => array(
				'label'           => esc_html__( 'Logo Image Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_logo_image_animation,#et_pb_logo_image_animation_reveal',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'        => esc_html__( 'If enabled, you can have animation on the logo image.', 'et_builder' ),
			),
			'logo_image_animation' => array(
				'label'             => esc_html__( 'Logo Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			'logo_image_animation_reveal' => array(
				'label'           => esc_html__( 'Logo Image Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_logo_image_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'logo_image_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			//end
			'logo_alt_text' => array(
				'label'           => esc_html__( 'Logo Image Alternative Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_default' => true,
				'depends_to'      => array(
					'logo_image_url',
				),
				'description'     => esc_html__( 'This defines the HTML ALT text. A short description of your image can be placed here.', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'logo_title' => array(
				'label'           => esc_html__( 'Logo Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_default' => true,
				'depends_to'      => array(
					'logo_image_url',
				),
				'description'     => esc_html__( 'This defines the HTML Title text.', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'content_orientation' => array(
				'label'           => esc_html__( 'Text Vertical Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center'  => esc_html__( 'Center', 'et_builder' ),
					'top' => esc_html__( 'Top', 'et_builder' ),
					'bottom' => esc_html__( 'Bottom', 'et_builder' ),
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'text',
				'description'        => esc_html__( 'This setting determines the vertical alignment of your content. Your content can either be vertically centered, or aligned to the bottom.', 'et_builder' ),
				'depends_show_if'    => 'on',
			),
			'header_image_url' => array(
				'label'              => esc_html__( 'Header Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
				'toggle_slug'        => 'images',
			),
			'header_image_custom_url_on_off' => array(
				'label'           => esc_html__( 'Use Custom Link for Header Image', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_header_image_custom_url, #et_pb_header_image_custom_url_new_window'
				),
				'description'        => esc_html__( 'If enabled, you can have a custom link for your header image.', 'et_builder' ),
				'toggle_slug'        => 'links',
			),
			'header_image_custom_url' => array(
				'label'           => esc_html__( 'Header Image URL', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the URL for the Header Image', 'et_builder' ),
				'toggle_slug'        => 'links',
			),
			'header_image_custom_url_new_window' => array(
				'label'           => esc_html__( 'Url Opens', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'et_builder' ),
					'on'  => esc_html__( 'In The New Tab', 'et_builder' ),
				),
				'description' => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'et_builder' ),
				'toggle_slug'        => 'links',
			),
			//animation for header image
			'header_image_animation_on_off' => array(
				'label'           => esc_html__( 'Header Image Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_header_image_animation, #et_pb_header_image_animation_reveal',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'        => esc_html__( 'If enabled, you can have animation on the header image.', 'et_builder' ),
			),
			'header_image_animation' => array(
				'label'             => esc_html__( 'Header Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			'header_image_animation_reveal' => array(
				'label'           => esc_html__( 'Header Image Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_header_image_animation_speed',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'header_image_animation_speed' => array(
				'label'             => esc_html__( 'Delay Speed (in s)', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'depends_default'   => true,
				'default'           => '0',
				'range_settings'  => array(
						'min'  => '0',
						'max'  => '10',
						'step' => '0.1',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			//end
			'image_orientation' => array(
				'label'           => esc_html__( 'Image Vertical Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center'  => esc_html__( 'Vertically Centered', 'et_builder' ),
					'top' => esc_html__( 'Top', 'et_builder' ),
					'bottom' => esc_html__( 'Bottom', 'et_builder' ),
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'image',
				'description'        => esc_html__( 'This controls the orientation of the image within the module.', 'et_builder' ),
			),
			//divider
			'divider_on_off' => array(
				'label'           => esc_html__( 'Use Section Separators', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_divider_type,#et_pb_divider_placement,#et_pb_divider_color,#et_pb_divider_height,#et_pb_divider_width,#et_pb_divider_rotate',
				),
				'toggle_slug'       => 'section_seperator',
				'description'     => esc_html__( 'If you wish to use Section Separators on this Section.', 'et_builder' ),
			),
			'divider_placement' => array(
				'label'           => esc_html__( 'Section Separator Placement', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'dwd-d-before' => esc_html__( 'Before', 'et_builder' ),
					'dwd-d-after' => esc_html__( 'After', 'et_builder' ),
				),
				'toggle_slug'       => 'section_seperator',
				'description'        => esc_html__( 'Define the placement of the section Separator. Before or After.', 'et_builder' ),
			),
			'divider_type' => array(
				'label'           => esc_html__( 'Section Separator Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'dwd-d-style-triangles' => esc_html__( 'Triangles', 'et_builder' ),
					'dwd-d-style-halfcircle' => esc_html__( 'Half Circle', 'et_builder' ),
					'dwd-d-style-multitriangles' => esc_html__( 'Multi Triangles', 'et_builder' ),
					'dwd-d-style-diagonal' => esc_html__( 'Diagonal', 'et_builder' ),
				),
				'toggle_slug'       => 'section_seperator',
				'description'        => esc_html__( 'Different types of section separator to choose from. * Remember to go to Design Advanced Setttings to set the desire color of your choice.', 'et_builder' ),
			),
			'divider_color' => array(
				'label'             => esc_html__( 'Separator Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'    => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_height' => array(
				'label'           => esc_html__( 'Custom Separator Height', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'  => 'divider_styles',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'        => esc_html__( 'You can have custom separator height', 'et_builder' ),
			),
			'divider_height_tablet' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_height_phone' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_height_last_edited' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_width' => array(
				'label'           => esc_html__( 'Custom Separator Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'  => 'divider_styles',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'        => esc_html__( 'You can have custom separator width', 'et_builder' ),
			),
			'divider_width_tablet' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_width_phone' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_width_last_edited' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_position' => array(
				'label'           => esc_html__( 'Custom Positioning', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'  => 'divider_styles',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'        => esc_html__( 'Divide the height by 2. E.g if your height is 20px, you will have to use -10px (Remember to use negative pixel - ). If you are using Diagonal Separator, use percentage instead of px eg -50%', 'et_builder' ),
			),
			'divider_position_tablet' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_position_phone' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_position_last_edited' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_rotate' => array(
				'label'           => esc_html__( 'Custom Rotate Positioning', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'  => 'divider_styles',
				'description'        => esc_html__( 'Only use this when you are using Diagonal Separator (You can use negative value or positive value etc default value -5 or 5', 'et_builder' ),
			),
			'divider_rotate_tablet' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_rotate_phone' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'divider_rotate_last_edited' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
				'toggle_slug'  => 'divider_styles',
			),
			'content_new' => array(
				'label'           => esc_html__( 'Content', 'et_builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the subheading text.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'disabled_on' => array(
				'label'           => esc_html__( 'Disable on', 'et_builder' ),
				'type'            => 'multiple_checkboxes',
				'options'         => array(
					'phone'   => esc_html__( 'Phone', 'et_builder' ),
					'tablet'  => esc_html__( 'Tablet', 'et_builder' ),
					'desktop' => esc_html__( 'Desktop', 'et_builder' ),
				),
				'additional_att'  => 'disable_on',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'This will disable the module on selected devices', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'visibility',
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'et_builder' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'et_builder' ),
				'toggle_slug' => 'admin_label',
			),
			'module_id' => array(
				'label'           => esc_html__( 'CSS ID', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'classes',
				'option_class'    => 'et_pb_custom_css_regular',
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'classes',
				'option_class'    => 'et_pb_custom_css_regular',
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		$module_id                    = $this->shortcode_atts['module_id'];
		$module_class                 = $this->shortcode_atts['module_class'];
		$title                        = $this->shortcode_atts['title'];
		$subhead                      = $this->shortcode_atts['subhead'];
		$background_layout            = $this->shortcode_atts['background_layout'];
		$text_orientation             = $this->shortcode_atts['text_orientation'];
		$title_font_color             = $this->shortcode_atts['title_font_color'];
		$subhead_font_color           = $this->shortcode_atts['subhead_font_color'];
		$content_font_color           = $this->shortcode_atts['content_font_color'];
		$button_one_text              = $this->shortcode_atts['button_one_text'];
		$button_one_url               = $this->shortcode_atts['button_one_url'];
		$button_two_text              = $this->shortcode_atts['button_two_text'];
		$button_two_url               = $this->shortcode_atts['button_two_url'];
		$header_fullscreen            = $this->shortcode_atts['header_fullscreen'];
		$header_scroll_down           = $this->shortcode_atts['header_scroll_down'];
		$scroll_down_icon             = $this->shortcode_atts['scroll_down_icon'];
		$scroll_down_icon_color       = $this->shortcode_atts['scroll_down_icon_color'];
		$scroll_down_icon_size        = $this->shortcode_atts['scroll_down_icon_size'];
		$scroll_down_icon_size_tablet = $this->shortcode_atts['scroll_down_icon_size_tablet'];
		$scroll_down_icon_size_phone  = $this->shortcode_atts['scroll_down_icon_size_phone'];
		$scroll_down_icon_size_last_edited = $this->shortcode_atts['scroll_down_icon_size_last_edited'];
		$background_image             = $this->shortcode_atts['background_image'];
		$background_overlay_color     = $this->shortcode_atts['background_overlay_color'];
		$parallax                     = $this->shortcode_atts['parallax'];
		$parallax_method              = $this->shortcode_atts['parallax_method'];
		$logo_image_url               = $this->shortcode_atts['logo_image_url'];
		$header_image_url             = $this->shortcode_atts['header_image_url'];
		$content_orientation          = $this->shortcode_atts['content_orientation'];
		$image_orientation            = $this->shortcode_atts['image_orientation'];
		$custom_icon_1                = $this->shortcode_atts['button_one_icon'];
		$button_custom_1              = $this->shortcode_atts['custom_button_one'];
		$custom_icon_2                = $this->shortcode_atts['button_two_icon'];
		$button_custom_2              = $this->shortcode_atts['custom_button_two'];
		$max_width                    = $this->shortcode_atts['max_width'];
		$max_width_tablet             = $this->shortcode_atts['max_width_tablet'];
		$max_width_phone              = $this->shortcode_atts['max_width_phone'];
		$max_width_last_edited        = $this->shortcode_atts['max_width_last_edited'];
		$logo_title                   = $this->shortcode_atts['logo_title'];
		$logo_alt_text                = $this->shortcode_atts['logo_alt_text'];
		//added
		$typing_effect          	  = $this->shortcode_atts['typing_effect'];
		$typing_static_on_off          	  = $this->shortcode_atts['typing_static_on_off'];
		$typing_static_text          	  = $this->shortcode_atts['typing_static_text'];
		$typing_static_break          	  = $this->shortcode_atts['typing_static_break'];
		$typing_speed          		  = $this->shortcode_atts['typing_speed'];
		$typing_delay          		  = $this->shortcode_atts['typing_delay'];
		$typing_backdelay          		  = $this->shortcode_atts['typing_backdelay'];
		$typing_loop          		  = $this->shortcode_atts['typing_loop'];
		$typing_effect_color          		  = $this->shortcode_atts['typing_effect_color'];
		$typing_cursor          		  = $this->shortcode_atts['typing_cursor'];
		$typing_underline_on_off          		  = $this->shortcode_atts['typing_underline_on_off'];
		$typing_underline_color         		  = $this->shortcode_atts['typing_underline_color'];
		$typing_underline_border	= $this->shortcode_atts['typing_underline_border'];
		$typing_background_on_off          		  = $this->shortcode_atts['typing_background_on_off'];
		$typing_background_color         		  = $this->shortcode_atts['typing_background_color'];
		$rotator_effect          	  = $this->shortcode_atts['rotator_effect'];
		$rotator_static_on_off          	  = $this->shortcode_atts['rotator_static_on_off'];
		$rotator_static_text          	  = $this->shortcode_atts['rotator_static_text'];
		$rotator_static_break          	  = $this->shortcode_atts['rotator_static_break'];
		$rotator_type          	  = $this->shortcode_atts['rotator_type'];
		$rotator_speed          	  = $this->shortcode_atts['rotator_speed'];
		$rotator_effect_color         	  = $this->shortcode_atts['rotator_effect_color'];
		$textillate_effect         	  = $this->shortcode_atts['textillate_effect'];
		$textillate_effect_loop         	  = $this->shortcode_atts['textillate_effect_loop'];
		$textillate_effect_type         	  = $this->shortcode_atts['textillate_effect_type'];
		$textillate_effect_time         	  = $this->shortcode_atts['textillate_effect_time'];
		$textillate_in_effect         	  = $this->shortcode_atts['textillate_in_effect'];
		$textillate_in_type         	  = $this->shortcode_atts['textillate_in_type'];
		$textillate_out_effect         	  = $this->shortcode_atts['textillate_out_effect'];
		$textillate_out_type         	  = $this->shortcode_atts['textillate_out_type'];
		$textgif_on_off          	  = $this->shortcode_atts['textgif_on_off'];
		$textgif_bg          	  = $this->shortcode_atts['textgif_bg'];
		$shuffle_text_on_off          	  = $this->shortcode_atts['shuffle_text_on_off'];
		$shuffle_text_change          	  = $this->shortcode_atts['shuffle_text_change'];
		$title_gradient_on_off          	  = $this->shortcode_atts['title_gradient_on_off'];
		$title_gradient_color_one          	  = $this->shortcode_atts['title_gradient_color_one'];
		$title_gradient_color_two          	  = $this->shortcode_atts['title_gradient_color_two'];
		$title_fancyline         = $this->shortcode_atts['title_fancyline'];
		$title_before_after         = $this->shortcode_atts['title_before_after'];
		$title_fancy_orientation         = $this->shortcode_atts['title_fancy_orientation'];
		$fancyline_styles_on_off         = $this->shortcode_atts['fancyline_styles_on_off'];
		$fancyline_width         = $this->shortcode_atts['fancyline_width'];
		$fancyline_height        = $this->shortcode_atts['fancyline_height'];
		$fancyline_color         = $this->shortcode_atts['fancyline_color'];
		$fancyline_margin_top         = $this->shortcode_atts['fancyline_margin_top'];
		$fancyline_margin_top_tablet         = $this->shortcode_atts['fancyline_margin_top_tablet'];
		$fancyline_margin_top_phone         = $this->shortcode_atts['fancyline_margin_top_phone'];
		$fancyline_margin_top_last_edited        = $this->shortcode_atts['fancyline_margin_top_last_edited'];
		$fancyline_margin_bottom         = $this->shortcode_atts['fancyline_margin_bottom'];
		$fancyline_margin_bottom_tablet         = $this->shortcode_atts['fancyline_margin_bottom_tablet'];
		$fancyline_margin_bottom_phone         = $this->shortcode_atts['fancyline_margin_bottom_phone'];
		$fancyline_margin_bottom_last_edited        = $this->shortcode_atts['fancyline_margin_bottom_last_edited'];
		$fancyline_width_tablet             = $this->shortcode_atts['fancyline_width_tablet'];
		$fancyline_width_phone             = $this->shortcode_atts['fancyline_width_phone'];
		$fancyline_width_last_edited        = $this->shortcode_atts['fancyline_width_last_edited'];
		$fancyline_height_tablet             = $this->shortcode_atts['fancyline_height_tablet'];
		$fancyline_height_phone             = $this->shortcode_atts['fancyline_height_phone'];
		$fancyline_height_last_edited        = $this->shortcode_atts['fancyline_height_last_edited'];
		$subhead_before_after         = $this->shortcode_atts['subhead_before_after'];
		$whole_header_animation_on_off = $this->shortcode_atts['whole_header_animation_on_off'];
		$whole_animation              = $this->shortcode_atts['whole_animation'];
		$whole_animation_reveal              = $this->shortcode_atts['whole_animation_reveal'];
		$whole_animation_speed              = $this->shortcode_atts['whole_animation_speed'];
		$title_animation_on_off = $this->shortcode_atts['title_animation_on_off'];
		$title_animation               = $this->shortcode_atts['title_animation'];
		$title_animation_reveal             = $this->shortcode_atts['title_animation_reveal'];
		$title_animation_speed               = $this->shortcode_atts['title_animation_speed'];
		$subheading_animation_on_off = $this->shortcode_atts['subheading_animation_on_off'];
		$subheading_animation               = $this->shortcode_atts['subheading_animation'];
		$subheading_animation_reveal               = $this->shortcode_atts['subheading_animation_reveal'];
		$subheading_animation_speed               = $this->shortcode_atts['subheading_animation_speed'];
		$content_animation_on_off = $this->shortcode_atts['content_animation_on_off'];
		$content_animation               = $this->shortcode_atts['content_animation'];
		$content_animation_reveal               = $this->shortcode_atts['content_animation_reveal'];
		$content_animation_speed               = $this->shortcode_atts['content_animation_speed'];
		$button_one_animation_on_off = $this->shortcode_atts['button_one_animation_on_off'];
		$button_one_animation               = $this->shortcode_atts['button_one_animation'];
		$button_one_animation_reveal               = $this->shortcode_atts['button_one_animation_reveal'];
		$button_one_animation_speed               = $this->shortcode_atts['button_one_animation_speed'];
		$button_two_animation_on_off = $this->shortcode_atts['button_two_animation_on_off'];
		$button_two_animation               = $this->shortcode_atts['button_two_animation'];
		$button_two_animation_reveal               = $this->shortcode_atts['button_two_animation_reveal'];
		$button_two_animation_speed               = $this->shortcode_atts['button_two_animation_speed'];
		$logo_image_animation_on_off = $this->shortcode_atts['logo_image_animation_on_off'];
		$logo_image_animation               = $this->shortcode_atts['logo_image_animation'];
		$logo_image_animation_reveal               = $this->shortcode_atts['logo_image_animation_reveal'];
		$logo_image_animation_speed               = $this->shortcode_atts['logo_image_animation_speed'];
		$header_image_animation_on_off = $this->shortcode_atts['header_image_animation_on_off'];
		$header_image_animation               = $this->shortcode_atts['header_image_animation'];
		$header_image_animation_reveal               = $this->shortcode_atts['header_image_animation_reveal'];
		$header_image_animation_speed               = $this->shortcode_atts['header_image_animation_speed'];
		$header_scroll_down_effect_on_off           = $this->shortcode_atts['header_scroll_down_effect_on_off'];
		$header_scroll_down_effect           = $this->shortcode_atts['header_scroll_down_effect'];
		$subhead_gradient_on_off          	  = $this->shortcode_atts['subhead_gradient_on_off'];
		$subhead_gradient_color_one          	  = $this->shortcode_atts['subhead_gradient_color_one'];
		$subhead_gradient_color_two          	  = $this->shortcode_atts['subhead_gradient_color_two'];
		$content_gradient_on_off          	  = $this->shortcode_atts['content_gradient_on_off'];
		$content_gradient_color_one          	  = $this->shortcode_atts['content_gradient_color_one'];
		$content_gradient_color_two          	  = $this->shortcode_atts['content_gradient_color_two'];
		$exclude_categories = $this->shortcode_atts['include_categories'];
		$search_on_off          = $this->shortcode_atts['search_on_off'];
		$s_background_layout  = $this->shortcode_atts['s_background_layout'];
		$s_text_orientation   = $this->shortcode_atts['s_text_orientation'];
		$exclude_posts      = $this->shortcode_atts['exclude_posts'];
		$exclude_pages      = $this->shortcode_atts['exclude_pages'];
		$hide_button        = $this->shortcode_atts['hide_button'];
		$placeholder        = $this->shortcode_atts['placeholder'];
		$search_button_color       = $this->shortcode_atts['search_button_color'];
		$search_field_bg           = $this->shortcode_atts['search_field_bg'];
		$search_icon_button       = $this->shortcode_atts['search_icon_button'];
		$search_icon_color 		  = $this->shortcode_atts['search_icon_color'];
		$hide_search_txt 		  = $this->shortcode_atts['hide_search_txt'];
		$search_button_align_on_off 		  = $this->shortcode_atts['search_button_align_on_off'];
		$search_button_align 		  = $this->shortcode_atts['search_button_align'];
		$placeholder_color  = $this->shortcode_atts['placeholder_color'];
		$search_max_width_on_off        = $this->shortcode_atts['search_max_width_on_off'];
		$search_max_width        = $this->shortcode_atts['search_max_width'];
		$search_max_width_tablet        = $this->shortcode_atts['search_max_width_tablet'];
		$search_max_width_phone       = $this->shortcode_atts['search_max_width_phone'];
		$search_max_width_last_edited       = $this->shortcode_atts['search_max_width_last_edited'];
		$woocommerce_search_on_off          = $this->shortcode_atts['woocommerce_search_on_off'];
		$popup_video_on_off_one				= $this->shortcode_atts['popup_video_on_off_one'];
		$popup_video_on_off_two				= $this->shortcode_atts['popup_video_on_off_two'];
		$url_new_window_one        = $this->shortcode_atts['url_new_window_one'];
		$url_new_window_two        = $this->shortcode_atts['url_new_window_two'];
		//end
		$custom_scroll_down_icon_on_off          	  = $this->shortcode_atts['custom_scroll_down_icon_on_off'];
		$custom_scroll_down_icon_src          	  = $this->shortcode_atts['custom_scroll_down_icon_src'];
		$icon_max_width                    = $this->shortcode_atts['icon_max_width'];
		$icon_max_width_tablet             = $this->shortcode_atts['icon_max_width_tablet'];
		$icon_max_width_phone              = $this->shortcode_atts['icon_max_width_phone'];
		$icon_max_width_last_edited              = $this->shortcode_atts['icon_max_width_last_edited'];
		$header_scroll_down           = $this->shortcode_atts['header_scroll_down'];
		$scroll_down_icon             = $this->shortcode_atts['scroll_down_icon'];
		$scroll_down_icon_color       = $this->shortcode_atts['scroll_down_icon_color'];
		$scroll_down_icon_size        = $this->shortcode_atts['scroll_down_icon_size'];
		$scroll_down_icon_size_tablet = $this->shortcode_atts['scroll_down_icon_size_tablet'];
		$scroll_down_icon_size_phone  = $this->shortcode_atts['scroll_down_icon_size_phone'];
		$animated_gradient            = $this->shortcode_atts['animated_gradient'];
		$animated_gradient_style      = $this->shortcode_atts['animated_gradient_style'];
		$animated_gradient_speed      = $this->shortcode_atts['animated_gradient_speed'];
		$background_image_alt = $this->shortcode_atts['background_image_alt'];
		$background_gradient            = $this->shortcode_atts['background_gradient'];
		$background_gradient_type            = $this->shortcode_atts['background_gradient_type'];
		$background_gradient_color_one            = $this->shortcode_atts['background_gradient_color_one'];
		$background_gradient_color_two            = $this->shortcode_atts['background_gradient_color_two'];
		$kenburns_effect          	  = $this->shortcode_atts['kenburns_effect'];
		$kenburns_effect_type          	  = $this->shortcode_atts['kenburns_effect_type'];
		$kenburns_effect_speed          	  = $this->shortcode_atts['kenburns_effect_speed'];
		$interactive_background_effect          	  = $this->shortcode_atts['interactive_background_effect'];
		$slicey_blurry_effect          	  = $this->shortcode_atts['slicey_blurry_effect'];
		$slicey_blurry_effect_type          	  = $this->shortcode_atts['slicey_blurry_effect_type'];
		$particles_effect          	  = $this->shortcode_atts['particles_effect'];
		$particles_effect_value          	  = $this->shortcode_atts['particles_effect_value'];
		$particles_effect_size          	  = $this->shortcode_atts['particles_effect_size'];
		$particles_effect_shape	= $this->shortcode_atts['particles_effect_shape'];
		$particles_effect_width          	  = $this->shortcode_atts['particles_effect_width'];
		$particles_effect_color          	  = $this->shortcode_atts['particles_effect_color'];
		$particles_effect_direction	= $this->shortcode_atts['particles_effect_direction'];
		$particles_effect_color_link          	  = $this->shortcode_atts['particles_effect_color_link'];
		$particles_effect_speed          	  = $this->shortcode_atts['particles_effect_speed'];
		$hide_particles_effect_phone          	  = $this->shortcode_atts['hide_particles_effect_phone'];
		$moving_particles_effect          	  = $this->shortcode_atts['moving_particles_effect'];
		$moving_particles_circle_color          	  = $this->shortcode_atts['moving_particles_circle_color'];
		$moving_particles_line_color          	  = $this->shortcode_atts['moving_particles_line_color'];
		$hide_moving_particles_effect_phone          	  = $this->shortcode_atts['hide_moving_particles_effect_phone'];
		//button mobile fullwidth
		$button_mobile_fullwidth =	$this->shortcode_atts['button_mobile_fullwidth'];
		//hover button
		$button_one_hover_effect_on_off =	$this->shortcode_atts['button_one_hover_effect_on_off'];
		$button_one_twod_hover_on_off =	$this->shortcode_atts['button_one_twod_hover_on_off'];
		$button_one_twod_hover_style =	$this->shortcode_atts['button_one_twod_hover_style'];
		$button_one_sb_hover_on_off =	$this->shortcode_atts['button_one_sb_hover_on_off'];
		$button_one_sb_hover_style =	$this->shortcode_atts['button_one_sb_hover_style'];
		$button_one_sb_hover_style_color =	$this->shortcode_atts['button_one_sb_hover_style_color'];
		$button_two_hover_effect_on_off =	$this->shortcode_atts['button_two_hover_effect_on_off'];
		$button_two_twod_hover_on_off =	$this->shortcode_atts['button_two_twod_hover_on_off'];
		$button_two_twod_hover_style =	$this->shortcode_atts['button_two_twod_hover_style'];
		$button_two_sb_hover_on_off =	$this->shortcode_atts['button_two_sb_hover_on_off'];
		$button_two_sb_hover_style =	$this->shortcode_atts['button_two_sb_hover_style'];
		$button_two_sb_hover_style_color =	$this->shortcode_atts['button_two_sb_hover_style_color'];
		$header_image_custom_url_on_off          	  = $this->shortcode_atts['header_image_custom_url_on_off'];
		$header_image_custom_url       	  = $this->shortcode_atts['header_image_custom_url'];
		$header_image_custom_url_new_window  = $this->shortcode_atts['header_image_custom_url_new_window'];
		//use popup
		$use_popup_one_on_off = $this->shortcode_atts['use_popup_one_on_off'];
		$popup_one_id  = $this->shortcode_atts['popup_one_id'];
		$use_popup_two_on_off = $this->shortcode_atts['use_popup_two_on_off'];
		$popup_two_id  = $this->shortcode_atts['popup_two_id'];
		$scroll_fade_header_on_off = $this->shortcode_atts['scroll_fade_header_on_off'];
		$divider_on_off = $this->shortcode_atts['divider_on_off'];
		$divider_type = $this->shortcode_atts['divider_type'];
		$divider_placement = $this->shortcode_atts['divider_placement'];
		$divider_height = $this->shortcode_atts['divider_height'];
		$divider_height_tablet = $this->shortcode_atts['divider_height_tablet'];
		$divider_height_phone = $this->shortcode_atts['divider_height_phone'];
		$divider_height_last_edited       = $this->shortcode_atts['divider_height_last_edited'];
		$divider_width = $this->shortcode_atts['divider_width'];
		$divider_width_tablet = $this->shortcode_atts['divider_width_tablet'];
		$divider_width_phone = $this->shortcode_atts['divider_width_phone'];
		$divider_width_last_edited       = $this->shortcode_atts['divider_width_last_edited'];
		$divider_position = $this->shortcode_atts['divider_position'];
		$divider_position_tablet = $this->shortcode_atts['divider_position_tablet'];
		$divider_position_phone = $this->shortcode_atts['divider_position_phone'];
		$divider_position_last_edited       = $this->shortcode_atts['divider_position_last_edited'];
		$divider_rotate = $this->shortcode_atts['divider_rotate'];
		$divider_rotate_tablet = $this->shortcode_atts['divider_rotate_tablet'];
		$divider_rotate_phone = $this->shortcode_atts['divider_rotate_phone'];
		$divider_rotate_last_edited       = $this->shortcode_atts['divider_rotate_last_edited'];
		$divider_color = $this->shortcode_atts['divider_color'];
		$header_height                    = $this->shortcode_atts['header_height'];
		$header_height_tablet             = $this->shortcode_atts['header_height_tablet'];
		$header_height_phone              = $this->shortcode_atts['header_height_phone'];
		$header_height_last_edited        = $this->shortcode_atts['header_height_last_edited'];
		$hide_header_scroll_down_phone        = $this->shortcode_atts['hide_header_scroll_down_phone'];
		$wider_mobile_space        = $this->shortcode_atts['wider_mobile_space'];
		$logo_width                    = $this->shortcode_atts['logo_width'];
		$logo_width_tablet             = $this->shortcode_atts['logo_width_tablet'];
		$logo_width_phone              = $this->shortcode_atts['logo_width_phone'];
		$logo_width_last_edited        = $this->shortcode_atts['logo_width_last_edited'];
		//end
		if ( is_rtl() && 'left' === $text_orientation) {
			$text_orientation = 'right';
		}

		//added for search
		if ( is_rtl() && 'left' === $s_text_orientation) {
			$s_text_orientation = 'right';
		}

		$module_class = ET_Builder_Element::add_module_order_class( $module_class, $function_name );

		if ( '' !== $max_width_tablet || '' !== $max_width_phone || '' !== $max_width ) {
			$max_width_responsive_active = et_pb_get_responsive_status( $max_width_last_edited );
			$max_width_values = array(
				'desktop' => $max_width,
				'tablet'  => $max_width_responsive_active ? $max_width_tablet : '',
				'phone'   => $max_width_responsive_active ?  $max_width_phone : '',
			);


			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $max_width_values, '%%order_class%% .header-content', 'max-width', $function_name, $additional_css );
		}

		//header height

		if ( '' !== $header_height_tablet || '' !== $header_height_phone || '' !== $header_height ) {
			$header_height_responsive_active = et_pb_get_responsive_status( $header_height_last_edited );
			$header_height_values = array(
				'desktop' => $header_height,
				'tablet'  => $header_height_responsive_active ? $header_height_tablet : '',
				'phone'   => $header_height_responsive_active ?  $header_height_phone : '',
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $header_height_values, '%%order_class%% .et_pb_fullwidth_header_container', 'min-height', $function_name, $additional_css );
		}

		//logo width
		if ( '' !== $logo_width_tablet || '' !== $logo_width_phone || '' !== $logo_width ) {
			$logo_width_responsive_active = et_pb_get_responsive_status( $logo_width_last_edited );
			$logo_width_values = array(
				'desktop' => $logo_width,
				'tablet'  => $logo_width_responsive_active ? $logo_width_tablet : '',
				'phone'   => $logo_width_responsive_active ?  $logo_width_phone : '',
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $logo_width_values, '%%order_class%% .et_pb_fullwidth_header_container .et_pb_fullwidth_logo_image', 'width', $function_name, $additional_css );
		}

		if ( '' !== $title_font_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content h1',
				'declaration' => sprintf(
					'color: %1$s !important;',
					esc_html( $title_font_color )
				),
			) );
		}

		if ( '' !== $subhead_font_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_subhead',
				'declaration' => sprintf(
					'color: %1$s !important;',
					esc_html( $subhead_font_color )
				),
			) );
		}

		if ( '' !== $content_font_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header p',
				'declaration' => sprintf(
					'color: %1$s !important;',
					esc_html( $content_font_color )
				),
			) );
		}

		if ( '' !== $scroll_down_icon_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $scroll_down_icon_color )
				),
			) );
		}

		if ( '' !== $scroll_down_icon_size || '' !== $scroll_down_icon_size_tablet || '' !== $scroll_down_icon_size_phone ) {
			$icon_size_responsive_active = et_pb_get_responsive_status( $scroll_down_icon_size_last_edited );

			$icon_size_values = array(
				'desktop' => $scroll_down_icon_size,
				'tablet'  => $icon_size_responsive_active ? $scroll_down_icon_size_tablet : '',
				'phone'   => $icon_size_responsive_active ? $scroll_down_icon_size_phone : '',
			);

			et_pb_generate_responsive_css( $icon_size_values, '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon', 'font-size', $function_name );
		}

		//added custom image/icon size
		if ( '' !== $icon_max_width_tablet || '' !== $icon_max_width_phone || '' !== $icon_max_width ) {
			$icon_max_width_responsive_active = et_pb_get_responsive_status( $icon_max_width_last_edited );

			$icon_max_width_values = array(
				'desktop' => $icon_max_width,
				'tablet'  => $icon_max_width_responsive_active ? $icon_max_width_tablet : '',
				'phone'   => $icon_max_width_responsive_active ? $icon_max_width_phone : '',
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $icon_max_width_values, '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll.dwd-custom-scroll a .et-pb-icon img', 'width', $function_name, $additional_css );
		}

		//title gradient
		if ( 'on' === $title_gradient_on_off && 'on' !== $typing_effect && 'on' !== $rotator_effect ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .header-content h1',
				'declaration' => sprintf(
					'-webkit-background-clip: text !important;
					-moz-background-clip: text !important;
					background-clip: text !important;
					-webkit-text-fill-color: transparent;
					background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to right, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $title_gradient_color_one ),
					esc_html( $title_gradient_color_two )
				),
			) );
		}

		if ( 'on' === $subhead_gradient_on_off ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .header-content .et_pb_fullwidth_header_subhead',
				'declaration' => sprintf(
					'-webkit-background-clip: text !important;
					-moz-background-clip: text !important;
					background-clip: text !important;
					-webkit-text-fill-color: transparent;
					background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to right, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $subhead_gradient_color_one ),
					esc_html( $subhead_gradient_color_two )
				),
			) );
		}

		if ( 'on' === $content_gradient_on_off ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .header-content .et_pb_header_content p',
				'declaration' => sprintf(
					'-webkit-background-clip: text !important;
					-moz-background-clip: text !important;
					background-clip: text !important;
					-webkit-text-fill-color: transparent;
					background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to right, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $content_gradient_color_one ),
					esc_html( $content_gradient_color_two )
				),
			) );
		}

		if ( 'on' === $background_gradient && 'top-to-bottom' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_gradient',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(top, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, left bottom, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(top, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(top, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(top, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to bottom, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $background_gradient_color_one ),
					esc_html( $background_gradient_color_two )
				),
			) );
		}
		//left-to-right
		if ( 'on' === $background_gradient && 'left-to-right' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_gradient',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to right, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $background_gradient_color_one ),
					esc_html( $background_gradient_color_two )
				),
			) );
		}
		//radial
		if ( 'on' === $background_gradient && 'radial' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_gradient',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-radial-gradient(center, ellipse cover, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(radial, center center, 0px, center center, 100%%, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-radial-gradient(center, ellipse cover, %1$s 0%%, %2$s 100%%);
					background: -o-radial-gradient(center, ellipse cover, %1$s 0%%, %2$s 100%%);
					background: -ms-radial-gradient(center, ellipse cover, %1$s 0%%, %2$s 100%%);
					background: radial-gradient(ellipse at center, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=1 );
					',
					esc_html( $background_gradient_color_one ),
					esc_html( $background_gradient_color_two )
				),
			) );
		}
		//diagonal top
		if ( 'on' === $background_gradient && 'diagonal-top' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_gradient',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(-45deg, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right bottom, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(-45deg, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(-45deg, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(-45deg, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(135deg, %1$s 0%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=1 );
					',
					esc_html( $background_gradient_color_one ),
					esc_html( $background_gradient_color_two )
				),
			) );
		}
		//diagonal bottom
		if ( 'on' === $background_gradient && 'diagonal-bottom' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_gradient',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(45deg, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left bottom, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(45deg, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(45deg, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(45deg, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(45deg, %1$s 0%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=1 );
					',
					esc_html( $background_gradient_color_one ),
					esc_html( $background_gradient_color_two )
				),
			) );
		}

		if ( '' !== $typing_effect_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content h1 span.dwd-typing',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $typing_effect_color )
				),
			) );
		}

		if ( '' !== $typing_cursor ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content h1 span.typed-cursor',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $typing_cursor )
				),
			) );
		}

		if ( '' !== $rotator_effect_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content h1 span.dwd-rotator',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $rotator_effect_color )
				),
			) );
		}

		if ( 'off' !== $typing_underline_on_off && '' !== $typing_underline_color  ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content h1 span.dwd-typing',
				'declaration' => sprintf(
					'border-bottom: %2$s solid %1$s;',
					esc_html( $typing_underline_color ),
					esc_html( $typing_underline_border )
				),
			) );
		}

		if ( 'off' !== $typing_background_on_off && '' !== $typing_background_color  ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content h1 span.dwd-typing',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $typing_background_color )
				),
			) );
		}

		// fancyline before
		if ( 'on' == $fancyline_styles_on_off && '' !== $fancyline_color && 'on' == $title_fancyline && 'before' == $title_before_after ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline:before',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $fancyline_color )
				),
			) );
		}
		if ( 'on' == $fancyline_styles_on_off && 'on' == $title_fancyline && 'before' == $title_before_after ) {
			$fancyline_width_responsive_active = et_pb_get_responsive_status( $fancyline_width_last_edited );
			$fancyline_width_values = array(
				'desktop' => $fancyline_width,
				'tablet'   => $fancyline_width_responsive_active ? $fancyline_width_tablet : '' ,
				'phone'   => $fancyline_width_responsive_active ? $fancyline_width_phone : '' ,
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $fancyline_width_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline:before', 'width', $function_name, $additional_css );

			$fancyline_height_responsive_active = et_pb_get_responsive_status( $fancyline_height_last_edited );
			$fancyline_height_values = array(
				'desktop' => $fancyline_height,
				'tablet'   => $fancyline_width_responsive_active ? $fancyline_height_tablet : '' ,
				'phone'   => $fancyline_height_responsive_active ? $fancyline_height_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_height_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline:before', 'height', $function_name, $additional_css );

			$fancyline_margin_top_responsive_active = et_pb_get_responsive_status( $fancyline_margin_top_last_edited );
			$fancyline_margin_top_values = array(
				'desktop' => $fancyline_margin_top,
				'tablet'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_tablet : '' ,
				'phone'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_top_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline', 'margin-top', $function_name, $additional_css );

			$fancyline_margin_bottom_responsive_active = et_pb_get_responsive_status( $fancyline_margin_bottom_last_edited );
			$fancyline_margin_bottom_values = array(
				'desktop' => $fancyline_margin_bottom,
				'tablet'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_tablet : '' ,
				'phone'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_bottom_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline', 'margin-bottom', $function_name, $additional_css );
		}

		// fancyline after
		if ( 'on' == $fancyline_styles_on_off && '' !== $fancyline_color && 'on' == $title_fancyline && 'after' == $title_before_after ) {

			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline:after',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $fancyline_color )
				),
			) );
		}
		if ( 'on' == $fancyline_styles_on_off && 'on' == $title_fancyline && 'after' == $title_before_after ) {
			$fancyline_width_responsive_active = et_pb_get_responsive_status( $fancyline_width_last_edited );
			$fancyline_width_values = array(
				'desktop' => $fancyline_width,
				'tablet'   => $fancyline_width_responsive_active ? $fancyline_width_tablet : '' ,
				'phone'   => $fancyline_width_responsive_active ? $fancyline_width_tablet : '' ,
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $fancyline_width_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline:after', 'width', $function_name, $additional_css );

			$fancyline_height_responsive_active = et_pb_get_responsive_status( $fancyline_height_last_edited );
			$fancyline_height_values = array(
				'desktop' => $fancyline_height,
				'tablet'   => $fancyline_height_responsive_active ? $fancyline_height_tablet : '' ,
				'phone'   => $fancyline_height_responsive_active ? $fancyline_height_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_height_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline:after', 'height', $function_name, $additional_css );

			$fancyline_margin_top_responsive_active = et_pb_get_responsive_status( $fancyline_margin_top_last_edited );
			$fancyline_margin_top_values = array(
				'desktop' => $fancyline_margin_top,
				'tablet'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_tablet : '' ,
				'phone'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_top_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline', 'margin-top', $function_name, $additional_css );

			$fancyline_margin_bottom_responsive_active = et_pb_get_responsive_status( $fancyline_margin_bottom_last_edited );
			$fancyline_margin_bottom_values = array(
				'desktop' => $fancyline_margin_bottom,
				'tablet'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_tablet : '' ,
				'phone'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_bottom_values, '%%order_class%%.et_pb_fullwidth_header .header-content .fancyline', 'margin-bottom', $function_name, $additional_css );
		}
		//search
		if ( 'on' === $search_max_width_on_off && '' !== $search_max_width_tablet || '' !== $search_max_width_phone || '' !== $search_max_width ) {
			$search_max_width_responsive_active = et_pb_get_responsive_status( $search_max_width_last_edited );
			$search_max_width_values = array(
				'desktop' => $search_max_width,
				'tablet'   => $search_max_width_responsive_active ? $search_max_width_tablet : '' ,
				'phone'   => $search_max_width_responsive_active ? $search_max_width_phone : '' ,
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $search_max_width_values, '%%order_class%%.et_pb_fullwidth_header .et_pb_search_extended .et_pb_searchform', 'max-width', $function_name, $additional_css );
		}

		if ( '' !== $search_icon_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% .et_pb_searchsubmit .dwd_search_icon:before',
				'declaration' => sprintf(
					'color:%1$s !important;',
					esc_html( $search_icon_color )
				),
			) );
		}

		if ( '' !== $search_button_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% button.et_pb_searchsubmit',
				'declaration' => sprintf(
					'background: %1$s !important;border-color:%1$s !important;',
					esc_html( $search_button_color )
				),
			) );

			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% .et_pb_search_extended input.et_pb_s',
				'declaration' => sprintf(
					'border-color:%1$s !important;',
					esc_html( $search_button_color )
				),
			) );
		}


		if ( '' !== $search_field_bg ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% .et_pb_search_extended input.et_pb_s',
				'declaration' => sprintf(
					'background: %1$s !important;',
					esc_html( $search_field_bg )
				),
			) );
		}

		if ( '' !== $placeholder_color ) {
			$placeholder_selectors = array(
				'%%order_class%% form input.et_pb_s::-webkit-input-placeholder',
				'%%order_class%% form input.et_pb_s::-moz-placeholder',
				'%%order_class%% form input.et_pb_s:-ms-input-placeholder',
			);

			foreach ( $placeholder_selectors as $single_selector ) {
				ET_Builder_Element::set_style( $function_name, array(
					'selector'    => $single_selector,
					'declaration' => sprintf(
						'color: %1$s !important;',
						esc_html( $placeholder_color )
					),
				) );
			}
		}

		//ended
		if ( '' !== $background_overlay_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_overlay',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $background_overlay_color )
				),
			) );
		}

		if ( '' !== $background_image && 'off' === $parallax && 'on' === $kenburns_effect && 'off' === $interactive_background_effect  ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header:before',
				'declaration' => sprintf(
					'background: url(%1$s);',
					esc_url( $background_image )
				),
			) );
		}

		if ( '' !== $background_image && 'off' === $parallax && 'off' === $kenburns_effect && 'off' === $interactive_background_effect ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header',
				'declaration' => sprintf(
					'background-image: url(%1$s);',
					esc_url( $background_image )
				),
			) );
		}

		if ( '' !== $background_image && 'off' === $parallax && 'on' === $interactive_background_effect && 'off' === $kenburns_effect ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .dwd-interactive-bg',
				'declaration' => sprintf(
					'background-image: url(%1$s);',
					esc_url( $background_image )
				),
			) );
		}

		//KenBurns Speed
		if ( 'on' === $kenburns_effect && 'dwd-zoomin' == $kenburns_effect_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-kensburn.dwd-zoomin:before',
				'declaration' => sprintf(
					'animation: dwd-zoomin %1$s forwards;
				    -ms-animation: dwd-zoomin %1$s forwards;
				    -webkit-animation: dwd-zoomin %1$s forwards;
				    -o-animation: dwd-zoomin %1$s forwards;
				    -moz-animation: dwd-zoomin %1$s forwards;
					',
					esc_attr( "{$kenburns_effect_speed}s" )
				),
			) );
		}

		if ( 'on' === $kenburns_effect && 'dwd-zoomin-left' == $kenburns_effect_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-kensburn.dwd-zoomin-left:before',
				'declaration' => sprintf(
					'animation: dwd-zoomin-left %1$s forwards;
				    -ms-animation: dwd-zoomin-left %1$s forwards;
				    -webkit-animation: dwd-zoomin-left %1$s forwards;
				    -o-animation: dwd-zoomin-left %1$s forwards;
				    -moz-animation: dwd-zoomin-left %1$s forwards;
					',
					esc_attr( "{$kenburns_effect_speed}s" )
				),
			) );
		}

		if ( 'on' === $kenburns_effect && 'dwd-zoomin-right' == $kenburns_effect_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-kensburn.dwd-zoomin-right:before',
				'declaration' => sprintf(
					'animation: dwd-zoomin-right %1$s forwards;
				    -ms-animation: dwd-zoomin-right %1$s forwards;
				    -webkit-animation: dwd-zoomin-right %1$s forwards;
				    -o-animation: dwd-zoomin-right %1$s forwards;
				    -moz-animation: dwd-zoomin-right %1$s forwards;
					',
					esc_attr( "{$kenburns_effect_speed}s" )
				),
			) );
		}

		if ( 'on' === $kenburns_effect && 'dwd-zoomout' == $kenburns_effect_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-kensburn.dwd-zoomout:before',
				'declaration' => sprintf(
					'animation: dwd-zoomout %1$s forwards;
				    -ms-animation: dwd-zoomout %1$s forwards;
				    -webkit-animation: dwd-zoomout %1$s forwards;
				    -o-animation: dwd-zoomout %1$s forwards;
				    -moz-animation: dwd-zoomout %1$s forwards;
					',
					esc_attr( "{$kenburns_effect_speed}s" )
				),
			) );
		}

		if ( 'on' === $kenburns_effect && 'dwd-zoomout-left' == $kenburns_effect_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-kensburn.dwd-zoomout-left:before',
				'declaration' => sprintf(
					'animation: dwd-zoomout-left %1$s forwards;
				    -ms-animation: dwd-zoomout-left %1$s forwards;
				    -webkit-animation: dwd-zoomout-left %1$s forwards;
				    -o-animation: dwd-zoomout-left %1$s forwards;
				    -moz-animation: dwd-zoomout-left %1$s forwards;
					',
					esc_attr( "{$kenburns_effect_speed}s" )
				),
			) );
		}

		if ( 'on' === $kenburns_effect && 'dwd-zoomout-right' == $kenburns_effect_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-kensburn.dwd-zoomout-right:before',
				'declaration' => sprintf(
					'animation: dwd-zoomout-right %1$s forwards;
				    -ms-animation: dwd-zoomout-right %1$s forwards;
				    -webkit-animation: dwd-zoomout-right %1$s forwards;
				    -o-animation: dwd-zoomout-right %1$s forwards;
				    -moz-animation: dwd-zoomout-right %1$s forwards;
					',
					esc_attr( "{$kenburns_effect_speed}s" )
				),
			) );
		}

		//Section Seperator
		if ( '' !== $divider_color && 'dwd-d-after' == $divider_placement ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-separator::after',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $divider_color )
				),
			) );
		}

		if ( '' !== $divider_color && 'dwd-d-after' == $divider_placement && 'dwd-d-style-multitriangles' == $divider_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-separator::after',
				'declaration' => sprintf(
					'box-shadow: -%3$s %2$s 0 %1$s, %3$s -%2$s 0 %1$s;',
					esc_html( $divider_color ),
					( '' !== $divider_width ? esc_html( $divider_width ) : '50px' ),
					( '' !== $divider_height ? esc_html( $divider_height ) : '50px' )
				),
			) );
		}

		if ( 'dwd-d-before' == $divider_placement && 'dwd-d-style-diagonal' == $divider_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-separator.dwd-d-style-diagonal::before',
				'declaration' => sprintf(
					'-webkit-transform: rotate(%1$s) !important;
				    transform: rotate(%1$s) !important;
				    -webkit-transform-origin: %2$s 0 !important;
				    transform-origin: %2$s 0 !important;',
					esc_attr( "{$divider_rotate}deg" ),
					esc_attr( "{$divider_rotate}%" )
				),
			) );
		}

		if ( 'dwd-d-after' == $divider_placement && 'dwd-d-style-diagonal' == $divider_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-separator.dwd-d-style-diagonal::after',
				'declaration' => sprintf(
					'-webkit-transform: rotate(%1$s) !important;
				    transform: rotate(%1$s) !important;
				    -webkit-transform-origin: %2$s 0 !important;
				    transform-origin: %2$s 0 !important;',
					esc_attr( "{$divider_rotate}deg" ),
					esc_attr( "{$divider_rotate}%" )
				),
			) );
		}

		if ( '' !== $divider_color && 'dwd-d-before' == $divider_placement ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-separator::before',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $divider_color )
				),
			) );
		}

		if ( '' !== $divider_color && 'dwd-d-before' == $divider_placement && 'dwd-d-style-multitriangles' == $divider_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-separator::before',
				'declaration' => sprintf(
					'box-shadow: -%3$s %2$s 0 %1$s, %3$s -%2$s 0 %1$s;',
					esc_html( $divider_color ),
					( '' !== $divider_width ? esc_html( $divider_width ) : '50px' ),
					( '' !== $divider_height ? esc_html( $divider_height ) : '50px' )
				),
			) );
		}

		if ( 'on' === $divider_on_off && 'dwd-d-before' == $divider_placement || '' !== $divider_width_tablet || '' !== $divider_width_phone || '' !== $divider_width || '' !== $divider_height_tablet || '' !== $divider_height_phone || '' !== $divider_height ) {
			$divider_width_responsive_active = et_pb_get_responsive_status( $divider_width_last_edited );
			$divider_width_values = array(
				'desktop' => $divider_width,
				'tablet'   => $divider_width_responsive_active ? $divider_width_tablet : '' ,
				'phone'   => $divider_width_responsive_active ? $divider_width_phone : '' ,
			);

			et_pb_generate_responsive_css( $divider_width_values, '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-d-before.dwd-separator::before', 'width', $function_name );

			$divider_height_responsive_active = et_pb_get_responsive_status( $divider_height_last_edited );
			$divider_height_values = array(
				'desktop' => $divider_width,
				'tablet'   => $divider_height_responsive_active ? $divider_height_tablet : '' ,
				'phone'   => $divider_height_responsive_active ? $divider_height_phone : '' ,
			);

			et_pb_generate_responsive_css( $divider_height_values, '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-d-before.dwd-separator::before', 'height', $function_name );

			$divider_position_responsive_active = et_pb_get_responsive_status( $divider_position_last_edited );
			$divider_position_values = array(
				'desktop' => $divider_position,
				'tablet'   => $divider_position_responsive_active ? $divider_position_tablet : '' ,
				'phone'   => $divider_position_responsive_active ? $divider_position_phone : '' ,
			);

			et_pb_generate_responsive_css( $divider_position_values, '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-d-before.dwd-separator::before', 'top', $function_name );
		}

		if ( 'on' === $divider_on_off && 'dwd-d-after' == $divider_placement || '' !== $divider_width_tablet || '' !== $divider_width_phone || '' !== $divider_width || '' !== $divider_height_tablet || '' !== $divider_height_phone || '' !== $divider_height ) {
			$divider_width_responsive_active = et_pb_get_responsive_status( $divider_width_last_edited );
			$divider_width_values = array(
				'desktop' => $divider_width,
				'tablet'   => $divider_width_responsive_active ? $divider_width_tablet : '' ,
				'phone'   => $divider_width_responsive_active ? $divider_width_phone : '' ,
			);

			et_pb_generate_responsive_css( $divider_width_values, '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-d-after.dwd-separator::after', 'width', $function_name );

			$divider_height_responsive_active = et_pb_get_responsive_status( $divider_height_last_edited );
			$divider_height_values = array(
				'desktop' => $divider_width,
				'tablet'   => $divider_height_responsive_active ? $divider_height_tablet : '' ,
				'phone'   => $divider_height_responsive_active ? $divider_height_phone : '' ,
			);

			et_pb_generate_responsive_css( $divider_height_values, '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-d-after.dwd-separator::after', 'height', $function_name );

			$divider_position_responsive_active = et_pb_get_responsive_status( $divider_position_last_edited );
			$divider_position_values = array(
				'desktop' => $divider_position,
				'tablet'   => $divider_position_responsive_active ? $divider_position_tablet : '' ,
				'phone'   => $divider_position_responsive_active ? $divider_position_phone : '' ,
			);

			et_pb_generate_responsive_css( $divider_position_values, '%%order_class%%.dwd-fwe.et_pb_fullwidth_header.dwd-d-after.dwd-separator::after', 'bottom', $function_name );
		}

		//button one hover
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-right' == $button_one_sb_hover_style or 'hvr-bubble-right' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-left-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-left' == $button_one_sb_hover_style or 'hvr-bubble-left' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-right-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-top' == $button_one_sb_hover_style or 'hvr-bubble-top' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-bottom-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-bottom' == $button_one_sb_hover_style or 'hvr-bubble-bottom' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-top-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		//button two hover
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-right' == $button_two_sb_hover_style or 'hvr-bubble-right' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-left-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-left' == $button_two_sb_hover_style or 'hvr-bubble-left' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-right-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-top' == $button_two_sb_hover_style or 'hvr-bubble-top' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-bottom-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-bottom' == $button_two_sb_hover_style or 'hvr-bubble-bottom' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-fwe.et_pb_fullwidth_header .et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-top-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}

		$button_output = '';
		if ( '' !== $button_one_text ) {
			$button_output .= sprintf(
				'<a %2$s%10$s class="et_pb_more_button et_pb_button et_pb_button_one%4$s%5$s%7$s%8$s%11$s%12$s%13$s"%3$s%6$s%9$s>%1$s</a>',
				( '' !== $button_one_text ? esc_attr( $button_one_text ) : '' ),
				( '' !== $button_one_url ? esc_html( "href={$button_one_url}") : '' ),
				'' !== $custom_icon_1 && 'on' === $button_custom_1 ? sprintf(
					' data-icon="%1$s"',
					esc_attr( et_pb_process_font_icon( $custom_icon_1 ) )
				) : '',
				'' !== $custom_icon_1 && 'on' === $button_custom_1 ? ' et_pb_custom_button_icon' : '',
				//add
				//%5$
				( 'off' !== $button_one_animation_reveal ? ' dwd-animation' : '' ),
				//%6$s
				( 'off' !== $button_one_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " data-dwd-animation={$button_one_animation} data-dwd-animation-delay={$button_one_animation_speed}s" ) : '' ),
				//%7$s
				( 'off' !== $button_one_animation_on_off && 'on' !== $button_one_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " $button_one_animation animated" ) : '' ),
				//%8$s
				( 'off' !== $popup_video_on_off_one ? ' dwd-popup-video' : '' ),
				//%9$s
				('on' === $url_new_window_one ? ' target="_blank"' : ''),
				( '' !== $popup_one_id && 'on' === $use_popup_one_on_off ? esc_html( "href=# data-mfp-src=#{$popup_one_id}" ) : '' ),
				//%11$s
				( 'off' !== $use_popup_one_on_off ? ' dwd-popup-content' : '' ),
				//12
				( 'on' === $button_one_hover_effect_on_off && 'off' !== $button_one_twod_hover_on_off ? esc_attr( " $button_one_twod_hover_style" ) : '' ),
				//13
				( 'on' === $button_one_hover_effect_on_off && 'off' !== $button_one_sb_hover_on_off ? esc_attr( " $button_one_sb_hover_style dwd-btn-hover" ) : '' )
			);
		}

		if ( '' !== $button_two_text ) {
			$button_output .= sprintf(
				'<a %2$s%10$s class="et_pb_more_button et_pb_button et_pb_button_two%4$s%5$s%7$s%8$s%11$s%12$s%13$s"%3$s%6$s%9$s>%1$s</a>',
				( '' !== $button_two_text ? esc_attr( $button_two_text ) : '' ),
				( '' !== $button_two_url ? esc_html( "href={$button_two_url}" ) : '' ),
				'' !== $custom_icon_2 && 'on' === $button_custom_2 ? sprintf(
					' data-icon="%1$s"',
					esc_attr( et_pb_process_font_icon( $custom_icon_2 ) )
				) : '',
				'' !== $custom_icon_2 && 'on' === $button_custom_2 ? ' et_pb_custom_button_icon' : '',
				//add
				//%5$
				( 'off' !== $button_two_animation_reveal ? ' dwd-animation' : '' ),
				//%6$s
				( 'off' !== $button_two_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " data-dwd-animation={$button_two_animation} data-dwd-animation-delay={$button_two_animation_speed}s" ) : '' ),
				//%7$s
				( 'off' !== $button_two_animation_on_off && 'off' !== $button_two_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " $button_two_animation animated" ) : '' ),
				//%8$s
				( 'off' !== $popup_video_on_off_two ? ' dwd-popup-video' : '' ),
				//%9$s
				('on' === $url_new_window_two ? ' target="_blank"' : '' ),
				( '' !== $popup_two_id && 'on' === $use_popup_two_on_off ? esc_html( "href=# data-mfp-src=#{$popup_two_id}") : '' ),
				//%11$s
				( 'off' !== $use_popup_two_on_off  ? ' dwd-popup-content' : '' ),
				//12
				( 'on' === $button_two_hover_effect_on_off && 'off' !== $button_two_twod_hover_on_off ? esc_attr( " $button_two_twod_hover_style" ) : '' ),
				//13
				( 'on' === $button_two_hover_effect_on_off && 'off' !== $button_two_sb_hover_on_off ? esc_attr( " $button_two_sb_hover_style dwd-btn-hover" ) : '' )
			);
		}

		$video_background = $this->video_background();

		$class = " et_pb_module et_pb_bg_layout_{$background_layout} et_pb_text_align_{$text_orientation}";

		$header_content = '';
		if ( '' !== $title || '' !== $subhead || '' !== $content || '' !== $button_output || '' !== $logo_image_url ) {
			$logo_image = '';
			if ( '' !== $logo_image_url ){
				$logo_image = sprintf(
					'<img class="et_pb_fullwidth_logo_image%4$s%6$s"%5$s%3$s src="%1$s" alt="%2$s"  />',
					esc_url( $logo_image_url ),
					esc_attr( $logo_alt_text ),
					( '' !== $logo_title ? sprintf( ' title="%1$s"', esc_attr( $logo_title ) ) : '' ),
					//added
					//%4$s
					( 'off' !== $logo_image_animation_reveal ? ' dwd-animation' : '' ),
					//%5$s
					( 'off' !== $logo_image_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " data-dwd-animation={$logo_image_animation} data-dwd-animation-delay={$logo_image_animation_speed}s" ) : '' ),
					//%6$s
					( 'off' !== $logo_image_animation_on_off && 'off' === $logo_image_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " $logo_image_animation animated" ) : '' )
				);
			}
			//ended
			$header_content = sprintf(
				'<div class="header-content-container%6$s%7$s %9$s"%8$s>
					<div class="header-content">
						<div class="et_pb_header_description" %11$s %12$s %13$s %14$s %15$s %16$s%17$s>
						%3$s
						%2$s
						%20$s
						%1$s
						%21$s
						%22$s
						%10$s
						%18$s
						%19$s
						%5$s
						</div>
					</div>
				</div>',
			//%1$s	//title
			( $title ? sprintf( '<h1 class="%4$s%6$s%11$s%13$s%14$s%14$s%15$s"%12$s %5$s>%1$s%10$s%9$s%8$s%7$s%2$s%3$s%16$s</h1>',
				( 'on' !== $typing_effect && 'on' !== $rotator_effect && 'on' !== $shuffle_text_on_off ? $title : '' ),
				( 'off' !== $typing_effect && 'off' === $typing_static_on_off ? sprintf( ' <span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%1$s</span><span class="dwd-typing"></span>', $title ) : '' ),
				( 'off' !== $rotator_effect && 'off' === $rotator_static_on_off ? sprintf( '<span style="display:none;" class="dwd-rotator">%1$s</span>', $title ) : '' ),
				( 'off' !== $title_animation_reveal ? ' dwd-animation' : '' ),
				( 'off' !== $title_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( "data-dwd-animation={$title_animation} data-dwd-animation-delay={$title_animation_speed}s data-title-delay={$title_animation_speed}" ) : '' ),
				( 'off' !== $title_animation_on_off && 'off' === $title_animation_reveal ? esc_attr( " $title_animation animated" ) : '' ),
				( 'off' !== $typing_effect && 'on' === $typing_static_on_off && 'off' !== $typing_static_break ? sprintf( '%1$s <br><span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%2$s</span><span class="dwd-typing"></span>', $title, $typing_static_text ) : '' ),
				( 'off' !== $rotator_effect  && 'on' === $rotator_static_on_off && 'off' !== $rotator_static_break ? sprintf( '%1$s <br><span style="display:none;" class="dwd-rotator">%2$s</span>', $title, $rotator_static_text ) : '' ),
				//break 9
				( 'off' !== $typing_effect && 'on' === $typing_static_on_off && 'on' !== $typing_static_break ? sprintf( '%1$s <span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%2$s</span><span class="dwd-typing"></span>', $title, $typing_static_text ) : '' ),
				( 'off' !== $rotator_effect && 'on' === $rotator_static_on_off && 'on' !== $rotator_static_break ? sprintf( '%1$s <span style="display:none;" class="dwd-rotator">%2$s</span>', $title, $rotator_static_text ) : '' ),
				//textillate
				( 'off' !== $textillate_effect && 'off' === $rotator_static_on_off && 'off' === $typing_effect ? ' tlt' : '' ),
				( 'off' !== $textillate_effect && 'off' === $rotator_static_on_off && 'off' === $typing_effect ? esc_attr(" data-in-effect={$textillate_in_effect} data-out-effect={$textillate_out_effect} data-in-{$textillate_in_type}=true data-out-{$textillate_out_type}=true data-textillate-loop={$textillate_effect_loop} data-textillate-type={$textillate_effect_type} data-textillate-time={$textillate_effect_time}") : '' ),
				//textgif 13
				( 'off' !== $textgif_on_off ? ' textgif' : '' ),
				//14
				( 'off' !== $typing_background_on_off ? ' dwd-typing-background' : '' ),
				//15
				( 'off' !== $title_fancyline && 'after' == $title_before_after ? ' fancyline-title' : '' ),
				( 'off' !== $shuffle_text_on_off ? sprintf( '<span class="dwd-shuffle-text" data-dwd-shuffle-text="%2$s">%1$s<span>', $title, $shuffle_text_change ) : '' )
				) : '' ),
				//%2$s  //subhead before
				( $subhead_before_after == 'before' ? sprintf( '<span class="et_pb_fullwidth_header_subhead%2$s%4$s"%3$s>%1$s</span>',$subhead,
				( 'off' !== $subheading_animation_reveal ? ' dwd-animation' : '' ),
				( 'off' !== $subheading_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr(
				" data-dwd-animation={$subheading_animation} data-dwd-animation-delay={$subheading_animation_speed}s" ) : '' ),
				( 'off' !== $subheading_animation_on_off && 'off' === $subheading_animation_reveal ? esc_attr( " $subheading_animation animated") : '' )
				) : '' ),
				//%3$s //logo_image
				$logo_image,
				$this->shortcode_content,
				//description skipped
				//%5$s  //button
				( '' !== $button_output ? $button_output : '' ),
				( '' !== $content_orientation ? sprintf( ' %1$s', $content_orientation ) : '' ),
				//header animation
				( 'off' !== $whole_header_animation_on_off ? esc_attr( " dwd-animation" ) : '' ),
				( 'off' !== $whole_header_animation_on_off && 'off' !== $whole_animation_reveal ? esc_attr( "data-dwd-animation={$whole_animation} data-dwd-animation-delay={$whole_animation_speed}s" ) : '' ),
				( 'off' !== $whole_header_animation_on_off && 'off' === $whole_animation_reveal ? esc_attr( "$whole_animation animated" ) : '' ),
				//%10$s  //content
				( $this->shortcode_content ? sprintf( '<div class="et_pb_header_content%2$s%4$s"%3$s>%1$s</div>', $this->shortcode_content,
				( 'off' !== $content_animation_reveal ? ' dwd-animation' : '' ),
				( 'off' !== $content_animation_reveal ? esc_attr( " data-dwd-animation={$content_animation} data-dwd-animation-delay={$content_animation_speed}s" ) : '' ),
				( 'off' !== $content_animation_on_off && 'off' === $content_animation_reveal ? esc_attr( " $content_animation animated" ) : '' )
				) : '' ),
				//add effect data 11%
				( '' !== $typing_speed && 'off' !== $typing_effect ? esc_attr( "data-typing-speed={$typing_speed}" ) : '' ),
				( '' !== $typing_delay && 'off' !== $typing_effect ? esc_attr( "data-typing-delay={$typing_delay}" ) : '' ),
				( '' !== $typing_backdelay && 'off' !== $typing_effect ? esc_attr( "data-typing-backdelay={$typing_backdelay}" ) : '' ),
				//typing loop 14
				( 'off' !== $typing_loop && 'on' === $typing_effect ? esc_attr( "data-typing-loop=false" ) : esc_attr( "data-typing-loop=true" ) ),
				//rotator speed 15%
				( '' !== $rotator_speed && 'off' !== $rotator_effect ? esc_attr( "data-rotator-speed={$rotator_speed}" ) : '' ),
				( '' !== $rotator_type && 'off' !== $rotator_effect ? esc_attr( "data-rotator-type={$rotator_type}" ) : '' ),
				//textgif bg 17
				( 'off' !== $textgif_on_off && '' !== $textgif_bg ? esc_attr( " data-textgif-bg={$textgif_bg}" ) : '' ),
				//search 18
				('off' !== $search_on_off && 'off' === $woocommerce_search_on_off ? sprintf ( '<div class="et_pb_search_extended%7$s%6$s%9$s%10$s"><form role="search" method="get" class="et_pb_searchform" action="%1$s"><label class="screen-reader-text" for="s">Search for:</label><input type="text" value="" name="s" class="et_pb_s"%5$s><input type="hidden" name="et_pb_searchform_submit" value="et_search_proccess"/>%2$s%3$s%4$s<button type="submit" value="Search" class="et_pb_searchsubmit">%8$s</button></form></div>',
				esc_url( home_url( '/' ) ),
				'' !== $exclude_categories ? sprintf( '<input type="hidden" name="et_pb_search_cat" value="%1$s" />',
				esc_attr( $exclude_categories ) ) : '',
				'on' !== $exclude_posts ? '<input type="hidden" name="et_pb_include_posts" value="yes" />' : '',
				'on' !== $exclude_pages ? '<input type="hidden" name="et_pb_include_pages" value="yes" />' : '',
				'' !== $placeholder ? sprintf( ' placeholder="%1$s"', esc_attr( $placeholder ) ) : '',
				('off' !== $search_on_off ? esc_attr( " et_pb_bg_layout_{$s_background_layout} et_pb_text_align_{$s_text_orientation}" ) : '' ),
				'on' === $hide_button ? ' et_pb_hide_search_button' : '',
				'on' === $search_icon_button ? sprintf( '<span class="dwd_search_icon"></span><span class="dwd_search_button_txt">Search</span>' ) : '',
				'on' === $hide_search_txt ? ' dwd_hide_search_txt' : '',
				//search 10%
				'on' == $search_button_align_on_off ? esc_attr( " dwd_search_button_{$search_button_align}" ) : ''
				) : '' ),
				//woosearch 19
				('off' !== $search_on_off && 'on' === $woocommerce_search_on_off ? sprintf ( '<div class="et_pb_search_extended%7$s%6$s%9$s%10$s">
					<form role="search" method="get" class="et_pb_searchform" action="%1$s">
					<label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
					<input type="search" id="woocommerce-product-search-field" class="et_pb_s" %5$s value="" name="s" title="Search for:" />
					<button type="submit" value="Search" class="et_pb_searchsubmit">%8$s</button>
					<input type="hidden" name="post_type" value="product" />
					</form>
					</div>',
				esc_url( home_url( '/' ) ),
				'' !== $exclude_categories ? sprintf( '<input type="hidden" name="et_pb_search_cat" value="%1$s" />',
				esc_attr( $exclude_categories ) ) : '',
				'on' !== $exclude_posts ? '<input type="hidden" name="et_pb_include_posts" value="yes" />' : '',
				'on' !== $exclude_pages ? '<input type="hidden" name="et_pb_include_pages" value="yes" />' : '',
				'' !== $placeholder ? sprintf( ' placeholder="%1$s"', esc_attr( $placeholder ) ) : '',
				('off' !== $search_on_off ? esc_attr( " et_pb_bg_layout_{$s_background_layout} et_pb_text_align_{$s_text_orientation}" ) : '' ),
				'on' === $hide_button ? ' et_pb_hide_search_button' : '',
				'on' === $search_icon_button ? sprintf( '<span class="dwd_search_icon"></span><span class="dwd_search_button_txt">Search</span>' ) : '',
				'on' === $hide_search_txt ? ' dwd_hide_search_txt' : '',
				//search 10%
				'on' == $search_button_align_on_off ? esc_attr( " dwd_search_button_{$search_button_align}" ) : ''
				) : '' ),
				//fancy before 20
				( 'off' !== $title_fancyline && 'before' == $title_before_after ? sprintf( ' <hr class="fancyline%1$s%2$s"></hr>',
				esc_attr( " fancyline_{$title_before_after}" ),
				esc_attr( " fancyline_text_{$title_fancy_orientation}" )
				) : '' ),
				//fancy after 21
				( 'off' !== $title_fancyline && 'after' == $title_before_after ? sprintf( ' <hr class="fancyline%1$s%2$s"></hr>',
				esc_attr( " fancyline_{$title_before_after}" ),
				esc_attr( " fancyline_text_{$title_fancy_orientation}" )
				) : '' ),
				//%22$s  //subhead aftter
				( $subhead_before_after == 'after' ? sprintf( '<span class="et_pb_fullwidth_header_subhead%2$s%4$s"%3$s>%1$s</span>',$subhead,
				( 'off' !== $subheading_animation_reveal ? ' dwd-animation' : '' ),
				( 'off' !== $subheading_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr(
				" data-dwd-animation={$subheading_animation} data-dwd-animation-delay={$subheading_animation_speed}s" ) : '' ),
				( 'off' !== $subheading_animation_on_off && 'off' === $subheading_animation_reveal ? esc_attr( " $subheading_animation animated") : '' )
				) : '' )
			);	
		//ended
		}

		$header_image = '';
		if ( '' !== $header_image_url && 'off' !== $header_image_custom_url_on_off && '' !== $header_image_custom_url ) {
			$header_image = sprintf(
				'<div class="header-image-container%2$s">
					<div class="header-image%3$s%5$s"%4$s>
						<a href="%6$s"%7$s>
							<img src="%1$s" />
						</a>
					</div>
				</div>',
				( '' !== $header_image_url ? esc_url( $header_image_url ) : ''),
				( '' !== $image_orientation ? sprintf( ' %1$s', $image_orientation ) : '' ),
				//added
				//%3$s
				( 'off' !== $header_image_animation_reveal ? ' dwd-animation' : '' ),
				//%4$s
				( 'off' !== $header_image_animation_reveal && 'off' === $whole_header_animation_on_off? esc_attr( " data-dwd-animation={$header_image_animation} data-dwd-animation-delay={$header_image_animation_speed}s" ) : '' ) ,
				//%5$s
				( 'off' !== $header_image_animation_on_off && 'off' === $header_image_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " $header_image_animation animated" ) : '' ),
				//6
				$header_image_custom_url,
				( 'on' === $header_image_custom_url_new_window ? ' target="_blank"' : '' )
			);

			$module_class .= ' et_pb_header_with_image';

			} else {
			if ( '' !== $header_image_url && 'on' !== $header_image_custom_url_on_off ) {
				$header_image = sprintf(
					'<div class="header-image-container%2$s">
						<div class="header-image%3$s%5$s"%4$s>
							<img src="%1$s" />
						</div>
					</div>',
					( '' !== $header_image_url ? esc_url( $header_image_url ) : ''),
					( '' !== $image_orientation ? sprintf( ' %1$s', $image_orientation ) : '' ),
					//added
					//%3$s
					( 'off' !== $header_image_animation_reveal ? ' dwd-animation' : '' ),
					//%4$s
					( 'off' !== $header_image_animation_reveal && 'off' === $whole_header_animation_on_off? esc_attr( " data-dwd-animation={$header_image_animation} data-dwd-animation-delay={$header_image_animation_speed}s" ) : '' ) ,
					//%5$s
					( 'off' !== $header_image_animation_on_off && 'off' === $header_image_animation_reveal && 'off' === $whole_header_animation_on_off ? esc_attr( " $header_image_animation animated" ) : '' )
				);

				$module_class .= ' et_pb_header_with_image';

			}
		}

		$scroll_down_output = '';
		if ( 'off' !== $header_scroll_down || '' !== $scroll_down_icon ) {
			$scroll_down_output .= sprintf(
				'<a href="#"><span class="scroll-down et-pb-icon %2$s">%1$s%3$s</a>',
				( 'off' !== $custom_scroll_down_icon_on_off ? '' : esc_html( et_pb_process_font_icon( $scroll_down_icon, 'et_pb_get_font_down_icon_symbols' ) ) ),
				//added animation on scroll down icon
				( 'off' !== $header_scroll_down_effect_on_off ? esc_attr( "$header_scroll_down_effect animated infinite" ) : '' ),
				( 'off' !== $custom_scroll_down_icon_on_off ? sprintf( ' <img src="%1$s" />', $custom_scroll_down_icon_src ) : '' )
			);
		}

		//slicey blurry
		$slicey_blurry = '';
		if ( 'off' !== $slicey_blurry_effect && 'dwd-slicey-type-one' == $slicey_blurry_effect_type ){
			$slicey_blurry = sprintf(
				'<div class="dwd-slicey-wrap dwd-slicey-type-one">
					<div class="dwd-slicey-box dwd-slicey-box-one">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					<div class="dwd-slicey-box dwd-slicey-box-six">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					<div class="dwd-slicey-box dwd-slicey-box-seven">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					<div class="dwd-slicey-box dwd-slicey-box-two">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					<div class="dwd-slicey-box dwd-slicey-box-three">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					
					<div class="dwd-slicey-box dwd-slicey-box-five">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					<div class="dwd-slicey-box dwd-slicey-box-four">
						<div class="dwd-slicey-box-shadow"></div>
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
				</div>',
				esc_attr( $background_image )
			);
		}

		if ( 'off' !== $slicey_blurry_effect && 'dwd-slicey-type-two' == $slicey_blurry_effect_type ){
			$slicey_blurry = sprintf(
				'<div class="dwd-slicey-wrap dwd-slicey-type-two">
					<div class="dwd-slicey-box dwd-slicey-box-one">
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
					<div class="dwd-slicey-box dwd-slicey-box-two">
						<div class="dwd-slicey-box-item" style="background-image: url(%1$s);"></div>
					</div>
				</div>',
				esc_attr( $background_image )
			);
		}

		$output = sprintf(
			'<section%9$s class="dwd-fwe et_pb_fullwidth_header%1$s%7$s%8$s%10$s%11$s%13$s%14$s%16$s%19$s%21$s%22$s%23$s%27$s%28$s%29$s%30$s"%32$s>
				%25$s
				%6$s
				%31$s
				%12$s
				%15$s
				%20$s
				%26$s
				<div class="et_pb_fullwidth_header_container%5$s">
					%2$s
					%3$s
				</div>
				<div class="et_pb_fullwidth_header_gradient"></div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll%17$s%24$s">%4$s</div>
			</section>
			',
			( 'off' !== $header_fullscreen ? ' et_pb_fullscreen' : '' ),
			( '' !== $header_content ? $header_content : '' ),
			( '' !== $header_image ? $header_image : '' ),
			( 'off' !== $header_scroll_down ? $scroll_down_output : '' ),
			( '' !== $text_orientation ? sprintf( ' %1$s', esc_attr( $text_orientation ) ) : '' ),
			( '' !== $background_image && 'on' === $parallax
				? sprintf(
					'<div class="et_parallax_bg%2$s" style="background-image: url(%1$s);"></div>',
					esc_attr( $background_image ),
					( 'off' === $parallax_method ? ' et_pb_parallax_css' : '' )
				)
				: ''
			),
			( '' !== $background_image && 'on' === $parallax ? ' et_pb_section_parallax' : '' ),
			esc_attr( $class ),
			( '' !== $module_id ? sprintf( ' id="%1$s"', esc_attr( $module_id ) ) : '' ),
			( '' !== $module_class ? sprintf( ' %1$s', esc_attr( $module_class ) ) : '' ),
			//added to check if animated bg is on
			//%11$s
			( $animated_gradient == 'on' ? '' : '' ),
			//%12$s
			( 'on' === $animated_gradient
				? sprintf(
					'<div class="et_pb_bg_animated%1$s"%2$s></div>',
					( 'off' == $animated_gradient_style ? ' et_pb_animated_solid_bg' : ' et_pb_animated_transparent_bg' ),
					( $animated_gradient === 'on' ? esc_attr(" data-animated-gradient-speed={$animated_gradient_speed}" ) : '' )
				)
				: ''
			),
			//%13$s
			( 'off' !== $typing_effect ? ' et_pb_typing_effect' : '' ),
			//%14$s
			( 'off' !== $rotator_effect ? ' et_pb_rotator_effect' : '' ),
			//%15$s
			( 'off' !== $particles_effect
				? sprintf(
				'<div id="particles-js"%9$s%1$s%2$s%3$s%4$s%5$s%6$s%7$s%8$s></div>',
				( '' !== $particles_effect_color ? esc_attr(" data-particles-color={$particles_effect_color}") : ' data-particles-color=#ffffff' ),
				( '' !== $particles_effect_color_link ? esc_attr(" data-particles-color-link={$particles_effect_color_link}") : ' data-particles-color-link=#ffffff' ),
				esc_attr( " data-particles-speed={$particles_effect_speed}" ),
				esc_attr( " data-particles-value={$particles_effect_value}" ),
				esc_attr( " data-particles-size={$particles_effect_size}" ),
				esc_attr( " data-particles-shape={$particles_effect_shape}" ),
				esc_attr( " data-particles-width={$particles_effect_width}" ),
				esc_attr( " data-particles-direction={$particles_effect_direction}" ),
				( 'off' !== $hide_particles_effect_phone  ? sprintf(' class="dwd-hidden-sm"' ) : '' )
				)
				: '' 
			),
			//16
			( 'off' !== $typing_static_on_off  ? ' dwd-typing-static' : '' ),
			//17
			( 'off' !== $custom_scroll_down_icon_on_off  ? ' dwd-custom-scroll' : '' ),
			//18
			( 'off' !== $textillate_effect ? ' et_pb_textillate_effect' : '' ),
			//19
			( 'off' !== $button_mobile_fullwidth ? ' dwd-mobile-fullwidth' : '' ),
			//movingnodes %20$s
			( 'off' !== $moving_particles_effect
				? sprintf(
					' <canvas id="movingnodes"%3$s%2$s%1$s></canvas>',
					( '' !== $moving_particles_circle_color ? esc_attr(" data-dwd-movingnodes-circle-color={$moving_particles_circle_color}" ) : esc_attr(" data-dwd-movingnodes-circle-color=rgba(255,255,255,0.5)" ) ),
					( '' !== $moving_particles_line_color ? esc_attr(" data-dwd-movingnodes-line-color={$moving_particles_line_color}" ) : esc_attr(" data-dwd-movingnodes-line-color=rgba(255,255,255,0.5)" ) ),
					( 'off' !== $hide_moving_particles_effect_phone ? sprintf(' class="dwd-hidden-sm"' ) : '' )
			) : '' ),
			//kenburns 21
			( 'off' !== $kenburns_effect ? esc_attr(" dwd-kensburn $kenburns_effect_type" ) : '' ),
			//22 scrollmagic
			( 'off' !== $scroll_fade_header_on_off ? ' dwd-sm-fade' : '' ),
			//23
			( 'off' !== $divider_on_off ? esc_attr(" dwd-separator $divider_placement $divider_type" ) : '' ),
			//24 hide scroll on mobile
			( 'off' !== $hide_header_scroll_down_phone ? ' dwd-hidden-sm' : '' ),
			//25 interactive bg
			( 'off' !== $interactive_background_effect ? sprintf(' <div class="dwd-interactive-bg"%1$s></div>',
				( '' !== $background_image_alt && 'off' !== $interactive_background_effect ? sprintf( ' title="%1$s"',
					esc_attr( $background_image_alt )
				) : '' )
			) : '' ),
			( 'off' !== $slicey_blurry_effect ? $slicey_blurry : '' ),
			( 'off' !== $slicey_blurry_effect ? ' dwd-slicey-blury' : '' ),
			//28
			( 'off' !== $wider_mobile_space ? ' dwd-wider-mobile' : '' ),
			( 'off' !== $interactive_background_effect ? ' dwd-interactive' : '' ),
			'' !== $video_background ? ' et_pb_section_video et_pb_preload' : '',
			$video_background,
			//background alt 32
			( '' !== $background_image_alt && 'on' !== $interactive_background_effect ? sprintf( ' title="%1$s"',
				esc_attr( $background_image_alt )
			) : '' )
		);
		// check if on and which method..
	    if (!wp_script_is( 'dwd-animation-load-s', 'enqueued' )) {
    		wp_enqueue_script( 'dwd-animation-load' );
	    }
		if( $typing_effect == 'on' ) {
			$handle = 'dwd-typed-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-typed-script' );
		    } else {
		    	wp_enqueue_script( 'dwd-typed' );
		    	wp_enqueue_script( 'dwd-typed-script' );
		    }
		}
		if ( $rotator_effect == 'on' ) {
			$handle = 'dwd-morptext-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-textrotator' );
		    } else {
		    	wp_enqueue_script( 'dwd-morphext' );
		    	wp_enqueue_script( 'dwd-textrotator' );
		    }
		}
		if ( $textillate_effect == 'on' ) {
			$handle = 'dwd-textillate-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-textillate-start' );
		    } else {
		    	wp_enqueue_script( 'dwd-lettering' );
		    	wp_enqueue_script( 'dwd-textillate' );
		    	wp_enqueue_script( 'dwd-textillate-start' );
		    }
		}
		if ( $particles_effect == 'on' ) {
			$handle = 'dwd-particles-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-particles-start' );
		    } else {
		    	wp_enqueue_script( 'dwd-particles' );
				wp_enqueue_script( 'dwd-particles-start' );
		    }
		}
		if ( $moving_particles_effect == 'on' ) {
			$handle = 'dwd-tweenlite-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-movingnodes' );
		    } else {
		    	wp_enqueue_script( 'dwd-tweenlite' );
		    	wp_enqueue_script( 'dwd-movingnodes' );
		    }
		}
		if ( $animated_gradient == 'on' && $animated_gradient_style == 'off' ) {
			wp_enqueue_script( 'dwd-animated-bg' );
		}
		if ( $animated_gradient == 'on' && $animated_gradient_style == 'on' ) {
			wp_enqueue_script( 'dwd-animated-transparent-bg' );
		}
		if ( $textgif_on_off == 'on' ) {
			$handle = 'dwd-textgif-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-textgif-start' );
		    } else {
		    	wp_enqueue_script( 'dwd-textgif' );
		    	wp_enqueue_script( 'dwd-textgif-start' );
		    }
		}
		if ( $shuffle_text_on_off == 'on' ) {
			$handle = 'dwd-shuffle-letter-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-shuffle-start' );
		    } else {
		    	wp_enqueue_script( 'dwd-shuffle-letter' );
		    	wp_enqueue_script( 'dwd-shuffle-start' );
		    }
		}
		if ( $popup_video_on_off_one or $popup_video_on_off_two == 'on' ) {
		    $handle = 'dwd-magnific-popup-start-s';
			$list = 'enqueued';
	    	if (wp_script_is( $handle, $list )) {
	    		return;
		    } else {
		    	wp_enqueue_script( 'dwd-magnific-popup-start' );
		    }
		}
		if ( $button_one_hover_effect_on_off == 'on' or $button_two_hover_effect_on_off == 'on' ) {
			$handle = 'dwd-hover-button-s';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		return;
		    } else {
		    	wp_enqueue_style( 'dwd-hover-button' );
		    }
		}
		if ( $button_one_hover_effect_on_off == 'on' or $button_two_hover_effect_on_off == 'on') {
		    	wp_enqueue_script( 'dwd-hover-button-js' );
		}
		if ( $scroll_fade_header_on_off == 'on' ) {
		    $handle = 'dwd-scrollmagic-s';
			$list = 'enqueued';
	    	if (wp_script_is( $handle, $list )) {
	    		wp_enqueue_script( 'dwd-tweenmax' );
	    		wp_enqueue_script( 'dwd-animation-gsap' );
	    		wp_enqueue_script( 'dwd-scroll-fading' );
		    } else {
		    	wp_enqueue_script( 'dwd-scrollmagic' );
		    	wp_enqueue_script( 'dwd-tweenmax' );
	    		wp_enqueue_script( 'dwd-animation-gsap' );
	    		wp_enqueue_script( 'dwd-scroll-fading' );
		    }
		}
		if ( $interactive_background_effect == 'on' ) {
			wp_enqueue_script( 'dwd-tweenmax' );
	    	wp_enqueue_script( 'dwd-interactive-bg' );
		}
		if ( $slicey_blurry_effect == 'on' ) {
			wp_enqueue_script( 'dwd-scrollmagic' );
	    	wp_enqueue_script( 'dwd-tweenmax' );
    		wp_enqueue_script( 'dwd-animation-gsap' );
	    	wp_enqueue_script( 'dwd-slicey-blurry' );
		}
		return $output;
	}
}

$et_builder_fullwidth_header_extended = new ET_Builder_Module_Fullwidth_Header_Extended();
add_shortcode( 'et_pb_fullwidth_header_extended', array($et_builder_fullwidth_header_extended, '_shortcode_callback') );

class ET_Builder_Module_Fullwith_Text_Extended extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Fullwidth Text Extender', 'et_builder' );
		$this->slug       = 'et_pb_text_extender';
		$this->fullwidth        = true;
		$this->fb_support = true;

		$this->whitelisted_fields = array(
			'background_layout',
			'text_orientation',
			'content_new',
			'admin_label',
			'module_id',
			'module_class',
			'max_width',
			'max_width_tablet',
			'max_width_phone',
		);

		$this->fields_defaults = array(
			'background_layout' => array( 'light' ),
			'text_orientation'  => array( 'left' ),
		);

		$this->main_css_element = '%%order_class%%';
		$this->advanced_options = array(
			'fonts' => array(
				'header'   => array(
					'label'    => esc_html__( 'Header', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} h3",
					),
					'description'       => esc_html__( 'H3 Tag', 'et_builder' ),
				),
				'text'   => array(
					'label'    => esc_html__( 'Text', 'et_builder' ),
					'css'      => array(
						'line_height' => "{$this->main_css_element} p",
						'color' => "{$this->main_css_element}.et_pb_text_extender",
					),
				),
			),
			'background' => array(
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'border' => array(),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
		);
		$this->custom_css_options = array(
			'header' => array(
				'label'    => esc_html__( 'Header', 'et_builder' ),
				'selector' => '.et_pb_text_extender h3',
			),
		);
	}

	function get_fields() {
		$fields = array(
			'background_layout' => array(
				'label'             => esc_html__( 'Text Color', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => array(
					'light' => esc_html__( 'Dark', 'et_builder' ),
					'dark'  => esc_html__( 'Light', 'et_builder' ),
				),
				'description'       => esc_html__( 'Here you can choose the value of your text. If you are working with a dark background, then your text should be set to light. If you are working with a light background, then your text should be dark.', 'et_builder' ),
			),
			'text_orientation' => array(
				'label'             => esc_html__( 'Text Orientation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => et_builder_get_text_orientation_options(),
				'description'       => esc_html__( 'This controls the how your text is aligned within the module.', 'et_builder' ),
			),
			'content_new' => array(
				'label'           => esc_html__( 'Content', 'et_builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Here you can create the content that will be used within the module.', 'et_builder' ),
			),
			'max_width' => array(
				'label'           => esc_html__( 'Max Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'mobile_options'  => true,
				'tab_slug'        => 'advanced',
				'validate_unit'   => true,
			),
			'max_width_tablet' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
			),
			'max_width_phone' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
			),
			'max_width_last_edited' => array(
				'type'     => 'skip',
				'tab_slug' => 'advanced',
			),
			'disabled_on' => array(
				'label'           => esc_html__( 'Disable on', 'et_builder' ),
				'type'            => 'multiple_checkboxes',
				'options'         => array(
					'phone'   => esc_html__( 'Phone', 'et_builder' ),
					'tablet'  => esc_html__( 'Tablet', 'et_builder' ),
					'desktop' => esc_html__( 'Desktop', 'et_builder' ),
				),
				'additional_att'  => 'disable_on',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'This will disable the module on selected devices', 'et_builder' ),
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'et_builder' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'et_builder' ),
			),
			'module_id' => array(
				'label'           => esc_html__( 'CSS ID', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'et_pb_custom_css_regular',
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'et_pb_custom_css_regular',
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		$module_id            = $this->shortcode_atts['module_id'];
		$module_class         = $this->shortcode_atts['module_class'];
		$background_layout    = $this->shortcode_atts['background_layout'];
		$text_orientation     = $this->shortcode_atts['text_orientation'];
		$max_width            = $this->shortcode_atts['max_width'];
		$max_width_tablet     = $this->shortcode_atts['max_width_tablet'];
		$max_width_phone      = $this->shortcode_atts['max_width_phone'];

		$module_class = ET_Builder_Element::add_module_order_class( $module_class, $function_name );

		$this->shortcode_content = et_builder_replace_code_content_entities( $this->shortcode_content );

		if ( '' !== $max_width_tablet || '' !== $max_width_phone || '' !== $max_width ) {
			$max_width_values = array(
				'desktop' => $max_width,
				'tablet'  => $max_width_tablet,
				'phone'   => $max_width_phone,
			);

			et_pb_generate_responsive_css( $max_width_values, '%%order_class%%', 'max-width', $function_name );
		}

		if ( is_rtl() && 'left' === $text_orientation ) {
			$text_orientation = 'right';
		}

		$class = " et_pb_module et_pb_bg_layout_{$background_layout} et_pb_text_align_{$text_orientation}";

		$output = sprintf(
			'<div%3$s class="et_pb_text_extender%2$s%4$s">
				%1$s
			</div> <!-- .et_pb_text -->',
			$this->shortcode_content,
			esc_attr( $class ),
			( '' !== $module_id ? sprintf( ' id="%1$s"', esc_attr( $module_id ) ) : '' ),
			( '' !== $module_class ? sprintf( ' %1$s', esc_attr( $module_class ) ) : '' )
		);

		return $output;
	}
}

$et_builder_fullwidth_text_extender = new ET_Builder_Module_Fullwith_Text_Extended();
add_shortcode( 'et_pb_text_extender', array($et_builder_fullwidth_text_extender, '_shortcode_callback') );


class ET_Builder_Module_Fullwidth_DWD_Popup extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Popup', 'et_builder' );
		$this->slug       = 'et_pb_fullwidth_dwd_popup';
		$this->fb_support       = true;
		$this->fullwidth        = true;

		$this->whitelisted_fields = array(
			//'background_layout',
			//'text_orientation',
			'content_new',
			'admin_label',
			'module_class',
			'max_width',
			'max_width_tablet',
			'max_width_phone',
			'max_width_last_edited',
			//add
			'use_popup_one_id',
			'use_popup_one_title_on_off',
			'use_popup_one_title',
			'use_popup_one_button_on_off',
			'use_popup_one_button_one_text',
			'use_popup_one_button_one_url',
			'use_popup_one_button_two_text',
			'use_popup_one_button_two_url',
			//'use_popup_one_background_url_on_off',
			//'use_popup_one_background_url',
			'use_popup_one_text_align',
			'use_popup_one_text_color',
			'use_popup_one_overlay_color',
			'use_popup_one_overlay_bg_color',
			'use_popup_one_close_color',
			'use_popup_one_remove_shadow',
		);

		$this->fields_defaults = array(
			'use_popup_one_text_color' => array( 'light' ),
			'use_popup_one_text_align'  => array( 'left' ),
			'use_popup_one_title_on_off' => array( 'off' ),
			'use_popup_one_button_on_off' => array( 'off' ),
			//'use_popup_one_background_url_on_off' => array( 'off' ),
		);

		$this->options_toggles = array(
			'general'  => array(
				'toggles' => array(
					'popup_id' => esc_html__( 'Popup ID Name', 'et_builder' ),
					'main_content' => esc_html__( 'Text', 'et_builder' ),
					'button' => esc_html__( 'Button', 'et_builder' ),
				),
			),
			'advanced' => array(
				'settings' => array(
					'toggles_disabled' => true,
				),
				'toggles' => array(
					'layout'      => esc_html__( 'Layout', 'et_builder' ),
					'text' => array(
						'title'    => esc_html__( 'Text', 'et_builder' ),
					),
					'width' => array(
						'title'    => esc_html__( 'Sizing', 'et_builder' ),
						'priority' => 65,
					),
					'popup_styles' => esc_html__( 'Popup Styling', 'et_builder' ),
				),
			),
		);

		$this->main_css_element = '%%order_class%%';
		$this->advanced_options = array(
			'fonts' => array(
				'popup_title_one' => array(
					'label'    => esc_html__( 'Popup Title', 'et_builder' ),
					'css'      => array(
						'main' => ".mfp-content {$this->main_css_element}.dwd-popup-one h4",
					),
					'font_size' => array(
						'toggle_slug'  => 'popup_styles',
						'default'      => '18px',
					),
					'font' => array(
						'toggle_slug'  => 'popup_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'popup_styles',
						'default' => '1em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'popup_styles',
						'default' => '0px',
					),
					'hide_line_height'    => false,
					'hide_text_color'     => true,
					'hide_letter_spacing' => false,
				),
				'popup_content_one' => array(
					'label'    => esc_html__( 'Popup Content', 'et_builder' ),
					'css'      => array(
						'main' => ".mfp-content {$this->main_css_element}.dwd-popup-one p",
					),
					'font_size' => array(
						'toggle_slug'  => 'popup_styles',
						'default'      => '14px',
					),
					'font' => array(
						'toggle_slug'  => 'popup_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'popup_styles',
						'default' => '1.7em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'popup_styles',
						'default' => '0px',
					),
					'hide_line_height'    => false,
					'hide_text_color'     => true,
					'hide_letter_spacing' => false,
				),
			),
			'background' => array(
				'use_background_color'          => true,
				'use_background_image'          => true,
				'use_background_color_gradient' => true,
				'css'                           => array(
					'main' => '%%order_class%%.dwd-fw-popup',
				),
			),
			'button' => array(
				'button_one_popup_one' => array(
					'label' => esc_html__( 'Popup Button #1', 'et_builder' ),
					'css'      => array(
						'main' => ".mfp-content {$this->main_css_element}.dwd-popup-one .et_pb_button_one.et_pb_button",
					),
				),
				'button_one_popup_two' => array(
					'label' => esc_html__( 'Popup Button #2', 'et_builder' ),
					'css'      => array(
						'main' => ".mfp-content {$this->main_css_element}.dwd-popup-one .et_pb_button_two.et_pb_button",
					),
				),
			),
			'border' => array(),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
		);
	}

	function get_fields() {
		$fields = array(
			'use_popup_one_id' => array(
				'label'           => esc_html__( 'Popup ID', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'toggle_slug'     => 'popup_id',
			),
			'use_popup_one_title_on_off' => array(
				'label'           => esc_html__( 'Display Title on Popup', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_use_popup_one_title',
				),
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( 'If you wish to use title on the popup', 'et_builder' ),
			),
			'use_popup_one_title' => array(
				'label'           => sprintf( esc_html__( 'Popup Title %1$s', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( 'Enter the Title for the Popup.', 'et_builder' ),
			),
			'use_popup_one_text_align' => array(
				'label'             => esc_html__( 'Text Orientation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => et_builder_get_text_orientation_options(),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'layout',
				'description'       => esc_html__( 'This controls the how your text is aligned within the popup.', 'et_builder' ),
			),
			'use_popup_one_text_color' => array(
				'label'             => esc_html__( 'Text Color', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => array(
					'light' => esc_html__( 'Dark', 'et_builder' ),
					'dark'  => esc_html__( 'Light', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'text',
				'description'       => esc_html__( 'Here you can choose the value of your text. If you are working with a dark background, then your text should be set to light. If you are working with a light background, then your text should be dark.', 'et_builder' ),
			),
			'use_popup_one_button_on_off' => array(
				'label'           => esc_html__( 'Use Button on Popup', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_use_popup_one_button_one_text,#et_pb_use_popup_one_button_one_url,#et_pb_use_popup_one_button_two_text,#et_pb_use_popup_one_button_two_url',
				),
				'toggle_slug'     => 'button',
				'description'     => esc_html__( 'If you wish to have Button on the popup', 'et_builder' ),
			),
			'use_popup_one_button_one_text' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s Text', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'button',
				'description'     => esc_html__( 'Enter the text for the Button.', 'et_builder' ),
			),
			'use_popup_one_button_one_url' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s URL', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'button',
				'description'     => esc_html__( 'Enter the URL for the Button.', 'et_builder' ),
			),
			'use_popup_one_button_two_text' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s Text', 'et_builder' ), '#2' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'button',
				'description'     => esc_html__( 'Enter the text for the Button.', 'et_builder' ),
			),
			'use_popup_one_button_two_url' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s URL', 'et_builder' ), '#2' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'button',
				'description'     => esc_html__( 'Enter the URL for the Button.', 'et_builder' ),
			),
			'use_popup_one_overlay_color' => array(
				'label'             => esc_html__( 'Popup Overlay Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'    => 'advanced',
				'toggle_slug'  => 'popup_styles',
				//end
			),
			
			'use_popup_one_close_color' => array(
				'label'             => esc_html__( 'Popup Close Icon Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'    => 'advanced',
				'toggle_slug'  => 'popup_styles',
				//end
			),
			'use_popup_one_remove_shadow' => array(
				'label'           => esc_html__( 'Remove Shadow on Popup Container', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'tab_slug'    => 'advanced',
				'toggle_slug'  => 'popup_styles',
			),
			'content_new' => array(
				'label'           => esc_html__( 'Popup Content', 'et_builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( 'Here you can create the content that will be used within the module.', 'et_builder' ),
			),
			'max_width' => array(
				'label'           => esc_html__( 'Max Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'mobile_options'  => true,
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
				'validate_unit'   => true,
			),
			'max_width_tablet' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'max_width_phone' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'max_width_last_edited' => array(
				'type'     => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'disabled_on' => array(
				'label'           => esc_html__( 'Disable on', 'et_builder' ),
				'type'            => 'multiple_checkboxes',
				'options'         => array(
					'phone'   => esc_html__( 'Phone', 'et_builder' ),
					'tablet'  => esc_html__( 'Tablet', 'et_builder' ),
					'desktop' => esc_html__( 'Desktop', 'et_builder' ),
				),
				'additional_att'  => 'disable_on',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'This will disable the module on selected devices', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'visibility',
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'et_builder' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'et_builder' ),
				'toggle_slug' => 'admin_label',
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'classes',
				'option_class'    => 'et_pb_custom_css_regular',
			),
		);

		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		//$module_id            = $this->shortcode_atts['module_id'];
		$module_class         = $this->shortcode_atts['module_class'];
		//$background_layout    = $this->shortcode_atts['background_layout'];
		//$text_orientation     = $this->shortcode_atts['text_orientation'];
		$max_width            = $this->shortcode_atts['max_width'];
		$max_width_tablet     = $this->shortcode_atts['max_width_tablet'];
		$max_width_phone      = $this->shortcode_atts['max_width_phone'];
		$max_width_last_edited = $this->shortcode_atts['max_width_last_edited'];
		//added
		//use popup
		$use_popup_one_id  = $this->shortcode_atts['use_popup_one_id'];
		$use_popup_one_title_on_off = $this->shortcode_atts['use_popup_one_title_on_off'];
		$use_popup_one_title = $this->shortcode_atts['use_popup_one_title'];
		$use_popup_one_button_on_off = $this->shortcode_atts['use_popup_one_button_on_off'];
		$use_popup_one_button_one_text = $this->shortcode_atts['use_popup_one_button_one_text'];
		$use_popup_one_button_one_url = $this->shortcode_atts['use_popup_one_button_one_url'];
		$use_popup_one_button_two_text = $this->shortcode_atts['use_popup_one_button_two_text'];
		$use_popup_one_button_two_url = $this->shortcode_atts['use_popup_one_button_two_url'];
		//$use_popup_one_background_url_on_off = $this->shortcode_atts['use_popup_one_background_url_on_off'];
		//$use_popup_one_background_url = $this->shortcode_atts['use_popup_one_background_url'];
		$use_popup_one_text_align = $this->shortcode_atts['use_popup_one_text_align'];
		$use_popup_one_text_color = $this->shortcode_atts['use_popup_one_text_color'];
		$use_popup_one_overlay_color = $this->shortcode_atts['use_popup_one_overlay_color'];
		$use_popup_one_close_color = $this->shortcode_atts['use_popup_one_close_color'];
		$use_popup_one_remove_shadow = $this->shortcode_atts['use_popup_one_remove_shadow'];

		$module_class = ET_Builder_Element::add_module_order_class( $module_class, $function_name );

		$this->shortcode_content = et_builder_replace_code_content_entities( $this->shortcode_content );

		if ( '' !== $max_width_tablet || '' !== $max_width_phone || '' !== $max_width ) {
			$max_width_responsive_active = et_pb_get_responsive_status( $max_width_last_edited );

			$max_width_values = array(
				'desktop' => $max_width,
				'tablet'  => $max_width_responsive_active ? $max_width_tablet : '',
				'phone'   => $max_width_responsive_active ? $max_width_phone : '',
			);

			et_pb_generate_responsive_css( $max_width_values, '%%order_class%%', 'max-width', $function_name );
		}

		//popup
	
		if ( '' !== $use_popup_one_overlay_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => ".{$use_popup_one_id}.mfp-bg",
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $use_popup_one_overlay_color )
				),
			) );
		}

		if ( '' !== $use_popup_one_close_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '.dwd-custom-popup-one-styles %%order_class%%.dwd-popup-one button.mfp-close',
				'declaration' => sprintf(
					'color: %1$s; opacity: 1;',
					esc_html( $use_popup_one_close_color )
				),
			) );
		}

		if ( '' !== $use_popup_one_remove_shadow ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '.dwd-custom-popup-one-styles %%order_class%%.dwd-popup-one',
				'declaration' => sprintf(
					'box-shadow: none;'
				),
			) );
		}

		if ( is_rtl() && 'left' === $use_popup_one_text_align ) {
			$use_popup_one_text_align = 'right';
		}

		$button_output = '';
		if ( '' !== $use_popup_one_button_one_text ) {
			$button_output .= sprintf(
				'<a %2$s class="et_pb_more_button et_pb_button et_pb_button_one">%1$s</a>',
				( '' !== $use_popup_one_button_one_text ? esc_attr( $use_popup_one_button_one_text ) : '' ),
				( '' !== $use_popup_one_button_one_url ? esc_html( "href={$use_popup_one_button_one_url}" ) : esc_html( 'href=#') )
			);
		}

		if ( '' !== $use_popup_one_button_two_text ) {
			$button_output .= sprintf(
				'<a %2$s class="et_pb_more_button et_pb_button et_pb_button_two">%1$s</a>',
				( '' !== $use_popup_one_button_two_text ? esc_attr( $use_popup_one_button_two_text ) : '' ),
				( '' !== $use_popup_one_button_two_url ? esc_html( "href={$use_popup_one_button_two_url}" ) : esc_html( 'href=#') )
			);
		}

		$class = " et_pb_module et_pb_bg_layout_{$use_popup_one_text_color} et_pb_text_align_{$use_popup_one_text_align}";

		$output = sprintf(
			'<div%2$s class="dwd-fw-popup%5$s%6$s white-popup mfp-hide dwd-popup-one">%1$s%3$s%4$s</div>',
			( 'on' == $use_popup_one_title_on_off ? sprintf( '<h4>%1$s</h4>', esc_attr( $use_popup_one_title ) ) : '' ),
			( '' !== $use_popup_one_id ? esc_attr(" id=$use_popup_one_id") : '' ),
			$this->shortcode_content,
			$button_output,
			esc_attr( $class ),
			( '' !== $module_class ? sprintf( ' %1$s', esc_attr( $module_class ) ) : '' )
		);

		wp_enqueue_script( 'dwd-popup-start' );

		return $output;
		
	}
}
$et_builder_module_fullwidth_dwd_popup = new ET_Builder_Module_Fullwidth_DWD_Popup();
add_shortcode( 'et_pb_dwd_popup', array($et_builder_module_fullwidth_dwd_popup, '_shortcode_callback') );

if ( ! function_exists( 'et_pb_get_responsive_status' ) ) :
function et_pb_get_responsive_status( $last_edited ) {
	$parsed_last_edited = is_string( $last_edited ) ? explode( '|', $last_edited ) : array( 'off', 'desktop' );

	return isset( $parsed_last_edited[0] ) ? $parsed_last_edited[0] === 'on' : false;
}
endif;