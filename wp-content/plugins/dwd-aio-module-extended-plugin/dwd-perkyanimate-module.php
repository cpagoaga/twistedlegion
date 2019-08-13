<?php
class ET_Builder_Module_ALL_IN_ONE extends ET_Builder_Module {
	function init() {
		$this->name             = esc_html__( 'Perky Animate', 'et_builder' );
		$this->slug             = 'et_pb_aio_extended';
		$this->fb_support       = true;
		$this->main_css_element = '%%order_class%%';

		$this->whitelisted_fields = array(
			'title',
			'url',
			'url_new_window',
			'use_icon',
			'font_icon',
			'icon_color',
			'use_circle',
			'circle_color',
			'use_circle_border',
			'circle_border_color',
			'image',
			'alt',
			'icon_placement',
			'animation',
			'background_layout',
			'text_orientation',
			'content_new',
			'admin_label',
			'module_id',
			'module_class',
			'max_width',
			'use_icon_font_size',
			'icon_font_size',
			'max_width_tablet',
			'max_width_phone',
			'max_width_last_edited',
			'icon_font_size_tablet',
			'icon_font_size_phone',
			'icon_font_size_last_edited',
			//icon alignment
			'icon_alignment',
			'icon_hover_on_off',
			'icon_hover_style',
			//whole content animation
			'whole_content_animation_on_off',
			'whole_content_animation',
			'whole_content_animation_reveal',
			'whole_content_animation_speed',
			//animation icon/image
			'icon_animation_reveal',
			'icon_animation_speed',
			//title animation
			'title_animation_on_off',
			'title_animation',
			'title_animation_reveal',
			'title_animation_speed',
			//content animation
			'content_animation_on_off',
			'content_animation',
			'content_animation_reveal',
			'content_animation_speed',
			//btn animation
			'button_one_animation_on_off',
			'button_one_animation',
			'button_one_animation_reveal',
			'button_one_animation_speed',
			'button_two_animation_on_off',
			'button_two_animation',
			'button_two_animation_reveal',
			'button_two_animation_speed',
			//added
			'button_on_off',
			'use_whole_link_on_off',
			'use_whole_link_video_popup',
			'whole_link_url',
			'button_text',
			'popup_video_on_off',
			'button_url',
			'button_text_two',
			'popup_video_on_off_two',
			'button_url_two',
			//typing
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
			//rotator
			'rotator_effect',
			'rotator_static_on_off',
			'rotator_static_text',
			'rotator_static_break',
			'rotator_type',
			'rotator_speed',
			'rotator_effect_color',
			//textillate
			'textillate_effect',
			'textillate_in_effect',
			'textillate_in_type',
			'textillate_out_effect',
			'textillate_out_type',
			//textgif
			'textgif_on_off',
			'textgif_bg',
			//background text
			'use_background_text',
			'background_text',
			//fancyline
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
			//underline animation
			'title_underline_on_off',
			'title_underline_style',
			'title_underline_whole_div',
			'title_underline_style_adv',
			'title_underline_color',
			'title_underline_height',
			'title_underline_height_tablet',
			'title_underline_height_phone',
			'title_underline_height_last_edited',
			//animated gradient
			//'animated_gradient',
			//'animated_gradient_style',
			//'animated_gradient_speed',
			//overlay gradient
			'overlay_gradient',
			'overlay_gradient_hidden_show',
			'overlay_gradient_only_hover',
			'overlay_gradient_unoverlay_on_hover',
			'overlay_gradient_type',
			'overlay_gradient_color_one',
			'overlay_gradient_color_two',
			//bg
			'use_background_gradient',
			'background_gradient_type',
			'background_gradient_color_one',
			'background_gradient_color_two',
			'img_src',
			'img_alt',
			'img_zoomin_hover',
			'img_zoomin_hover_style',
			'img_hover_effect',
			'img_hover_effect_style',
			//module height
			'img_define_height',
			'img_define_height_tablet',
			'img_define_height_phone',
			'img_define_height_last_edited',
			//text aligment
			'text_alignment',
			//showborder
			'use_wrapper_border',
			'wrapper_style',
			'adv_wrapper_border',
			'wrapper_border_width',
			'wrapper_border_width_tablet',
			'wrapper_border_width_phone',
			'wrapper_border_width_last_edited',
			'wrapper_border_color',
			//AIO Wrap Content
			'aio_wrap_content_bg',
			//hidecontent
			'hide_content',
			'alternative_hover_content_on_off',
			'alternative_hover_title',
			'alternative_hover_alignment',
			'alternative_hover_bg',
			'alternative_hover_description',
			//shadow
			'shadow_on_off',
			'shadow_type',
			'bg_overlay_style',
			'hover_content_effect',
			//border
			'border_radius',
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
			//scroll fade
			'scroll_fade_column_on_off',
		);

		$et_accent_color = et_builder_accent_color();

		$this->fields_defaults = array(
			'url_new_window'      => array( 'off' ),
			'use_icon'            => array( 'off' ),
			'icon_color'          => array( $et_accent_color, 'add_default_setting' ),
			'use_circle'          => array( 'off' ),
			'circle_color'        => array( $et_accent_color, 'only_default_setting' ),
			'use_circle_border'   => array( 'off' ),
			'circle_border_color' => array( $et_accent_color, 'only_default_setting' ),
			'icon_placement'      => array( 'top' ),
			'animation'           => array( 'top' ),
			'background_layout'   => array( 'light' ),
			'text_orientation'    => array( 'center' ),
			'use_icon_font_size'  => array( 'off' ),
			//icon animation
			'icon_animation_reveal'               => array( 'off' ),
			'icon_animation_speed'               => array( '0' ),
			//whole animation
			'whole_content_animation_on_off'   => array( 'off' ),
			'whole_content_animation'               => array( 'fadeInUp' ),
			'whole_content_animation_reveal'               => array( 'off' ),
			'whole_content_animation_speed'               => array( '0' ),
			//title animation
			'title_animation_on_off'   => array( 'off' ),
			'title_animation'               => array( 'fadeIn' ),
			'title_animation_reveal'               => array( 'off' ),
			'title_animation_speed'               => array( '0' ),
			//content animation
			'content_animation_on_off'   => array( 'off' ),
			'content_animation'               => array( 'fadeInUp' ),
			'content_animation_reveal'               => array( 'off' ),
			'content_animation_speed'               => array( '0' ),
			//btn animation
			'button_one_animation_on_off'   => array( 'off' ),
			'button_one_animation'               => array( 'fadeInUp' ),
			'button_one_animation_reveal'               => array( 'off' ),
			'button_one_animation_speed'               => array( '0' ),
			//icon
			'icon_hover_on_off'	=> array( 'off' ),
			//added
			'button_on_off'  => array( 'off' ),
			'use_whole_link_on_off'  => array( 'off' ),
			'use_whole_link_video_popup'  => array( 'off' ),
			'popup_video_on_off' => array( 'off' ),
			'popup_video_on_off_two' => array( 'off' ),
			//typing
			'typing_effect'       => array( 'off' ),
			'typing_static_on_off'       => array( 'off' ),
			'typing_static_break'       => array( 'off' ),
			'typing_speed'        => array( '100' ),
			'typing_delay'        => array( '0' ),
			'typing_backdelay'        => array( '1000' ),
			'typing_loop'       => array( 'on' ),
			'rotator_effect'      => array( 'off' ),
			'rotator_static_on_off'       => array( 'off' ),
			'rotator_static_break'       => array( 'off' ),
			'rotator_type'      => array( 'fadeIn' ),
			'rotator_speed'       => array( '2000' ),
			//rotator
			'rotator_effect'      => array( 'off' ),
			'rotator_static_on_off'       => array( 'off' ),
			'rotator_static_break'       => array( 'off' ),
			'rotator_type'      => array( 'fadeIn' ),
			'rotator_speed'       => array( '2000' ),
			//textillate
			'textillate_effect'		=> array('off'),
			'textillate_in_effect'		=> array('flipInX'),
			'textillate_in_type'		=> array('sequence'),
			'textillate_out_effect'		=> array('flipInY'),
			'textillate_out_type'		=> array('reverse'),
			//textgif
			'textgif_on_off'      => array( 'off' ),
			//background text
			'use_background_text' => array('off'),
			//fancyline
			'title_fancyline' => array('off'),
			'title_fancy_orientation' => array('left'),
			'fancyline_styles_on_off' => array('off'),
			'fancyline_width' => array('40px'),
			'fancyline_height' => array('2px'),
			'fancyline_margin_top' => array('20px'),
			'fancyline_margin_bottom' => array('20px'),
			//title underline
			'title_underline_on_off' => array('off'),
			'title_underline_whole_div' => array('off'),
			'title_underline_style_adv' => array('off'),
			// animated gradient
			//'animated_gradient'   => array( 'off' ),
			//'animated_gradient_style'   => array( 'off' ),
			//'animated_gradient_speed'   => array( '0.001' ),
			//overlay gradient
			'overlay_gradient'   => array( 'off' ),
			'overlay_gradient_hidden_show' => array( 'off' ),
			'overlay_gradient_unoverlay_on_hover' => array( 'off' ),
			'overlay_gradient_only_hover'   => array( 'on' ),
			'overlay_gradient_type'   => array( 'top-to-bottom' ),
			//bg
			'use_background_gradient'   => array( 'off' ),
			'background_gradient_type'   => array( 'top-to-bottom' ),
			'img_zoomin_hover'	   => array( 'on' ),
			'img_zoomin_hover_style'	   => array( 'fast' ),
			'img_hover_effect'	   	   => array( 'off' ),
			'img_hover_effect_style'	=> array( 'img_grayscale_hover' ),
			'text_alignment' => array('bottom'),
			'use_wrapper_border'   => array( 'off' ),
			'adv_wrapper_border' => array( 'off' ),
			'wrapper_style'   => array( 'solid' ),
			//hidecontent
			'hide_content' => array( 'off' ),
			'alternative_hover_content_on_off' => array( 'off' ),
			'alternative_hover_alignment' => array( 'center' ),
			'shadow_on_off' => array( 'off' ),
			'use_background_text_alt_title'  => array( 'on' ),
			'bg_overlay_style'   => array( 'full_overlay' ),
			'hover_content_effect'   => array( 'dwd-fadein' ),
			//button mobile full
			'button_mobile_fullwidth' => array( 'off' ),
			'button_one_hover_effect_on_off' => array( 'off' ),
			'button_one_twod_hover_on_off' => array( 'off' ),
			'button_one_sb_hover_on_off' => array( 'off' ),
			'button_two_hover_effect_on_off' => array( 'off' ),
			'button_two_twod_hover_on_off' => array( 'off' ),
			'button_two_sb_hover_on_off' => array( 'off' ),
			//scrollmagic
			'scroll_fade_column_on_off' => array( 'off' ),
		);

		$this->options_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'et_builder' ),
					//added
					'title_effect'   => esc_html__( 'Title Effects', 'et_builder' ),
					//ended
					'link'         => esc_html__( 'Link', 'et_builder' ),
					'button'        => esc_html__( 'Button', 'et_builder' ),
					'image'        => esc_html__( 'Image & Icon', 'et_builder' ),
					'background'   => esc_html__( 'Background', 'et_builder' ),
					//added
					'border_wrapper'   => esc_html__( 'Border Wrapper', 'et_builder' ),
					'dwd_overlay_effect'   => esc_html__( 'Overlay', 'et_builder' ),
					'hide_content'   => esc_html__( 'Content Reveal Effect', 'et_builder' ),
					//ended
				),
			),
			'advanced' => array(
				'toggles' => array(
					'layout'      => esc_html__( 'Layout', 'et_builder' ),
					'icon_settings' => esc_html__( 'Image & Icon', 'et_builder' ),
					'text'          => array(
						'title'    => esc_html__( 'Text', 'et_builder' ),
						'priority' => 49,
					),
					'width'         => array(
						'title'    => esc_html__( 'Sizing', 'et_builder' ),
						'priority' => 65,
					),
					//added
					'border_radius'         => array(
						'title'    => esc_html__( 'Border Radius', 'et_builder' ),
						'priority' => 64,
					),
					'fancyline_styles' => esc_html__( 'Fancy Line Styling', 'et_builder' ),
					'title_underline_styles' => esc_html__( 'Title Underline Styling', 'et_builder' ),
					'wrapper_border_styles' => esc_html__( 'Wrapper Border Styling', 'et_builder' ),
					'material_shadow'  => esc_html__( 'Material Design', 'et_builder' ),
					'bgtext_styles'         => array(
						'title'    => esc_html__( 'Background Text Styling', 'et_builder' ),
						'priority' => 56,
					),
					'alttext_styles'         => array(
						'title'    => esc_html__( 'Alternative Hover', 'et_builder' ),
						'priority' => 56,
					),
				),
				'dwdtab' => array(
					'settings' => array(
						'toggles_disabled' => false,
					),
					'toggles' => array(
						'animation_area' => esc_html__( 'All Animation Settings', 'et_builder' ),
					),
				),
			),
			'custom_css' => array(
				'toggles' => array(
					'animation' => array(
						'title'    => esc_html__( 'Animation', 'et_builder' ),
						'priority' => 90,
					),
				),
			),
		);

		$this->advanced_options = array(
			'fonts' => array(
				'header' => array(
					'label'    => esc_html__( 'Header', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} h3, {$this->main_css_element} h3 a",
					),
					'font_size' => array(
						'default'      => '30px',
					),
					'line_height'    => array(
						'default' => '1.3em',
					),
					'letter_spacing' => array(
						'default' => '0px',
					),
				),
				'body'   => array(
					'label'    => esc_html__( 'Body', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} figure p",
					),
					'font_size' => array(
						'default'      => '14px',
					),
					'line_height' => array(
						'default' => '1.4em',
					),
					'letter_spacing' => array(
						'default' => '0px',
					),
					'hide_line_height'    => false,
					'hide_text_color'     => true,
					'hide_letter_spacing' => false,
				),
				//bg text
				'bgtext'   => array(
					'label'    => esc_html__( 'Background', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} span.background-text",
					),
					'font_size' => array(
						'toggle_slug'  => 'bgtext_styles',
						'default'      => '70px',
					),
					'font' => array(
						'toggle_slug'  => 'bgtext_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'bgtext_styles',
						'default' => '1.7em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'bgtext_styles',
						'default' => '0px',
					),
				),
				//border
				//alt text
				'alt_title_text'   => array(
					'label'    => esc_html__( 'Alternative Title', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .dwd-alt-title .dwd-alt-inner h4",
					),
					'font_size' => array(
						'toggle_slug'  => 'alttext_styles',
						'default'      => '14px',
					),
					'font' => array(
						'toggle_slug'  => 'alttext_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'alttext_styles',
						'default' => '1.7em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'alttext_styles',
						'default' => '0px',
					),
				),
				'alt_body_text'   => array(
					'label'    => esc_html__( 'Alternative Body', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .dwd-alt-title .dwd-alt-inner p",
					),
					'font_size' => array(
						'toggle_slug'  => 'alttext_styles',
						'default'      => '13px',
					),
					'font' => array(
						'toggle_slug'  => 'alttext_styles',
					),
					'line_height' => array(
						'toggle_slug'  => 'alttext_styles',
						'default' => '1.7em',
					),
					'letter_spacing' => array(
						'toggle_slug'  => 'alttext_styles',
						'default' => '0px',
					),
				),
			),
			'background' => array(
				'settings' => array(
					'color' => 'alpha',
				),
				'use_background_color'          => true,
				'use_background_image'          => true,
				'use_background_color_gradient' => true,
				'css'                           => array(
					'main' => '%%order_class%%',
				),
				/*'attribute_mapping'             => array(
					'background_image' => 'img_src',
				),*/
			),
			'border' => array(),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
					'main' => "{$this->main_css_element}.dwd-aio .dwd-after-wrap",
				),
			),
			'button' => array(
				'button_one' => array(
					'label' => esc_html__( 'Button One', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .et_pb_button_one.et_pb_button",
					),
				),
				'button_two' => array(
					'label' => esc_html__( 'Button Two', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .et_pb_button_two.et_pb_button",
					),
				),
			),
		);
		$this->custom_css_options = array(
			'blurb_image' => array(
				'label'    => esc_html__( 'Blurb Image', 'et_builder' ),
				'selector' => '.et_pb_main_blurb_image',
			),
			'blurb_icon' => array(
				'label'    => esc_html__( 'Icon', 'et_builder' ),
				'selector' => '.et_pb_main_blurb_image .et-pb-icon',
			),
			'blurb_title' => array(
				'label'    => esc_html__( 'Title', 'et_builder' ),
				'selector' => 'h3',
			),
			'blurb_content' => array(
				'label'    => esc_html__( 'Content Description', 'et_builder' ),
				'selector' => '.et_pb_blurb_content',
			),
			'content_button' => array(
				'label'    => esc_html__( 'Button', 'et_builder' ),
				'selector' => 'a.et_pb_promo_button.et_pb_button',
			),
			'background_img' => array(
				'label'    => esc_html__( 'Background Image (Effect)', 'et_builder' ),
				'selector' => '.dwd-background-image',
			),
			'aio_wrap' => array(
				'label'    => esc_html__( 'AIO Wrap', 'et_builder' ),
				'selector' => '.aio-wrap',
			),
			'background_text' => array(
				'label'    => esc_html__( 'Background Text', 'et_builder' ),
				'selector' => '.background-text',
			),
			'alt_inner' => array(
				'label'    => esc_html__( 'Alternative Container', 'et_builder' ),
				'selector' => '.dwd-alt-title .dwd-alt-inner',
			),
			'box_overlay_style' => array(
				'label'    => esc_html__( 'Box Overlay', 'et_builder' ),
				'selector' => '.et_pb_blurb_content:before',
			),
			'button_1' => array(
				'label'    => esc_html__( 'Button One', 'et_builder' ),
				'selector' => '.aio-wrap .et_pb_button_one.et_pb_button',
			),
			'button_2' => array(
				'label'    => esc_html__( 'Button Two', 'et_builder' ),
				'selector' => '.aio-wrap .et_pb_button_two.et_pb_button',
			),
		);
	}

	function get_fields() {
		// List of animation options
		//added
		$animation_type_list = array(
			'fadeIn' => esc_html__( 'fadeIn', 'et_builder' ),
			'dwd-animation-off' => esc_html__( 'No Animation', 'et_builder' ),
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
		$et_accent_color = et_builder_accent_color();

		$image_icon_placement = array(
			'top' => esc_html__( 'Top', 'et_builder' ),
		);

		if ( ! is_rtl() ) {
			$image_icon_placement['left'] = esc_html__( 'Left', 'et_builder' );
		} else {
			$image_icon_placement['right'] = esc_html__( 'Right', 'et_builder' );
		}

		$fields = array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'The title of your Perky Animate.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			//typing
			'typing_effect' => array(
				'label'           => esc_html__( 'Use Typing Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_typing_static_on_off, #et_pb_typing_speed, #et_pb_typing_delay, #et_pb_typing_backdelay, #et_pb_typing_loop, #et_pb_typing_effect_color, #et_pb_typing_cursor, #et_pb_rotator_effect, #et_pb_textillate_effect, #et_pb_textgif_on_off',
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
			//rotator
			'rotator_effect' => array(
				'label'           => esc_html__( 'Use Rotator Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_rotator_static_on_off,#et_pb_rotator_speed, #et_pb_rotator_type, #et_pb_rotator_effect_color, #et_pb_textillate_effect, #et_pb_textgif_on_off',
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
			//textillate
			'textillate_effect' => array(
				'label'           => esc_html__( 'Use Textillate Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_textillate_in_type, #et_pb_textillate_in_effect, #et_pb_textillate_out_type, #et_pb_textillate_out_effect, #et_pb_textgif_on_off',
				),
				'depends_show_if'   => 'off',
				'description'        => esc_html__( 'If enabled, you can choose whether if you want your title to have Textillate effect.', 'et_builder' ),
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
					'sequence'          => esc_html__( 'Sequence', 'et_builder' ),
					'reverse' => esc_html__( 'Reverse', 'et_builder' ),
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
			//textgif
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
			//Background Text
			'use_background_text' => array(
				'label'           => esc_html__( 'Use Text Behind Title', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_background_text',
				),
				'description'       => esc_html__( 'Here you can choose to have a text behind the title.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'background_text' => array(
				'label'           => esc_html__( 'Background Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your value to action background text here.', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			//Fancyline
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
			//title underline
			'title_underline_on_off' => array(
				'label'           => esc_html__( 'Use Underline Animation on Title', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_title_underline_style, #et_pb_title_underline_whole_div',
				),
				'description'       => esc_html__( 'Here you can choose to have underline on title (Underline) when hover', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'title_underline_style' => array(
				'label'           => esc_html__( 'Underline Hover Styles', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center-out' => esc_html__( 'Center Out', 'et_builder' ),
					'left-right-spread'  => esc_html__( 'Left to Right', 'et_builder' ),
					'right-left-spread'  => esc_html__( 'Right to Left', 'et_builder' ),
				),
				'description'       => esc_html__( 'This controls whether this title should have the fancy line appears before or after the Title depending if you use Subheading or not', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'title_underline_whole_div' => array(
				'label'           => esc_html__( 'Apply Underline Animation on Whole Div', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'description'       => esc_html__( 'Here you can choose to have underline on title when hover over the whole div as well', 'et_builder' ),
				'toggle_slug'     => 'title_effect',
			),
			'url' => array(
				'label'           => esc_html__( 'Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'If you would like to make your blurb a link, input your destination URL here.', 'et_builder' ),
				'toggle_slug'     => 'link',
			),
			'url_new_window' => array(
				'label'           => esc_html__( 'Url Opens', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'et_builder' ),
					'on'  => esc_html__( 'In The New Tab', 'et_builder' ),
				),
				'toggle_slug'     => 'link',
				'description'     => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'et_builder' ),
			),
			//added whole as link
			'use_whole_link_on_off' => array(
				'label'           => esc_html__( 'Link the whole div', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_use_whole_link_video_popup',
				),
				'description'       => esc_html__( 'Here you can choose whether to link and wrap the whole div.', 'et_builder' ),
				'toggle_slug'     => 'link',
			),
			'use_whole_link_video_popup' => array(
				'label'           => esc_html__( 'Use Video Popup on Whole div', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_whole_link_url',
				),
				'description'       => esc_html__( 'Video URL on Whole Div URL. If using YouTube as video, use the direct link eg https://www.youtube.com/watch?v=FkQuawiGWUw', 'et_builder' ),
				'toggle_slug'     => 'link',
			),
			'whole_link_url' => array(
				'label'           => esc_html__( 'Video URL', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the destination URL for your whole div video popup.', 'et_builder' ),
				'toggle_slug'     => 'link',
			),
			//added button
			'button_on_off' => array(
				'label'           => esc_html__( 'Show Button', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_button_text, #et_pb_popup_video_on_off, #et_pb_button_url, #et_pb_button_text_two, #et_pb_popup_video_on_off_two, #et_pb_button_url_two,#et_pb_button_ripple_one, #et_pb_button_one_hover_effect_on_off,#et_pb_button_ripple_two, #et_pb_button_two_hover_effect_on_off, #et_pb_button_ripple_two, #et_pb_button_mobile_fullwidth',
				),
				'description'       => esc_html__( 'Here you can choose whether to show button.', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			'button_text' => array(
				'label'           => esc_html__( 'Button #1 Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired button text, or leave blank for no button.', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			'button_url' => array(
				'label'           => esc_html__( 'Button #1 URL', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the destination URL for your button.', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			//added popup for button
			'popup_video_on_off' => array(
				'label'           => esc_html__( 'Video Popup #1', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'description'     => esc_html__( 'Video URL on Button One URL. If using YouTube as video, use the link eg https://www.youtube.com/watch?v=FkQuawiGWUw and supports Vimeo video link as well', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			//button two
			'button_text_two' => array(
				'label'           => esc_html__( 'Button #2 Text ', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired button text, or leave blank for no button.', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			'button_url_two' => array(
				'label'           => esc_html__( 'Button #2 URL', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the destination URL for your button.', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			//added popup for button
			'popup_video_on_off_two' => array(
				'label'           => esc_html__( 'Video Popup #2', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'description'     => esc_html__( 'Video URL on Button Two URL. If using YouTube as video, eg https://www.youtube.com/watch?v=FkQuawiGWUw and supports Vimeo video link as well', 'et_builder' ),
				'toggle_slug'     => 'button',
			),
			'button_mobile_fullwidth' => array(
				'label'           => esc_html__( 'Make Button Fullwidth on Mobile', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'       => 'button',
				'description'        => esc_html__( 'If enabled, single or both buttons will be full width at 100% width.', 'et_builder' ),
			),
			//ended
			'use_icon' => array(
				'label'           => esc_html__( 'Use Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'toggle_slug'     => 'image',
				'affects'         => array(
					'font_icon',
					'max_width',
					'use_icon_font_size',
					'use_circle',
					'icon_color',
					'image',
					'alt',
					'icon_hover_on_off',
				),
				'description' => esc_html__( 'Here you can choose whether icon set below should be used.', 'et_builder' ),
			),
			'font_icon' => array(
				'label'               => esc_html__( 'Icon', 'et_builder' ),
				'type'                => 'text',
				'option_category'     => 'basic_option',
				'class'               => array( 'et-pb-font-icon' ),
				'renderer'            => 'et_pb_get_font_icon_list',
				'renderer_with_field' => true,
				'toggle_slug'         => 'image',
				'description'         => esc_html__( 'Choose an icon to display with your blurb.', 'et_builder' ),
				'depends_default'     => true,
			),
			'icon_color' => array(
				'label'             => esc_html__( 'Icon Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( 'Here you can define a custom color for your icon.', 'et_builder' ),
				'depends_default'   => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'icon_settings',
			),
			'use_circle' => array(
				'label'           => esc_html__( 'Circle Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'use_circle_border',
					'circle_color',
				),
				'tab_slug'         => 'advanced',
				'toggle_slug'      => 'icon_settings',
				'description'      => esc_html__( 'Here you can choose whether icon set above should display within a circle.', 'et_builder' ),
				'depends_default'  => true,
			),
			'circle_color' => array(
				'label'           => esc_html__( 'Circle Color', 'et_builder' ),
				'type'            => 'color-alpha',
				'description'     => esc_html__( 'Here you can define a custom color for the icon circle.', 'et_builder' ),
				'depends_default' => true,
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'icon_settings',
			),
			'use_circle_border' => array(
				'label'           => esc_html__( 'Show Circle Border', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'layout',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'circle_border_color',
				),
				'description' => esc_html__( 'Here you can choose whether if the icon circle border should display.', 'et_builder' ),
				'depends_default'   => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'icon_settings',
			),
			'circle_border_color' => array(
				'label'           => esc_html__( 'Circle Border Color', 'et_builder' ),
				'type'            => 'color-alpha',
				'description'     => esc_html__( 'Here you can define a custom color for the icon circle border.', 'et_builder' ),
				'depends_default' => true,
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'icon_settings',
			),
			'image' => array(
				'label'              => esc_html__( 'Image', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'depends_show_if'    => 'off',
				'description'        => esc_html__( 'Upload an image to display at the top of your blurb.', 'et_builder' ),
				'toggle_slug'        => 'image',
			),
			'alt' => array(
				'label'           => esc_html__( 'Image Alt Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Define the HTML ALT text for your image here.', 'et_builder' ),
				'depends_show_if' => 'off',
				'toggle_slug'     => 'image',
			),
			'icon_placement' => array(
				'label'             => esc_html__( 'Image/Icon Placement', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => $image_icon_placement,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'icon_settings',
				'description'       => esc_html__( 'Here you can choose where to place the icon.', 'et_builder' ),
			),
			//icon alignment
			'icon_alignment' => array(
				'label'           => esc_html__( 'Image/Icon Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'left'  => esc_html__( 'Left', 'et_builder' ),
					'center'  => esc_html__( 'Center', 'et_builder' ),
					'right' => esc_html__( 'Right', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'icon_settings',
				'description'        => esc_html__( 'This setting determines the alignment of your Icon. Your icon can either be aligned left, centered, or right.', 'et_builder' ),
			),
			'animation' => array(
				'label'             => esc_html__( 'Image/Icon Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => $animation_type_list,
				'tab_slug'          => 'custom_css',
				'toggle_slug'       => 'animation',
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
			),
			//icon animation
			'icon_animation_reveal' => array(
				'label'           => esc_html__( 'Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_icon_animation_speed',
				),
				'tab_slug'          => 'custom_css',
				'toggle_slug'       => 'animation',
				'description'        => esc_html__( 'Reveal CSS animation as you scroll down a page.', 'et_builder' ),

			),
			'icon_animation_speed' => array(
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
				'tab_slug'          => 'custom_css',
				'toggle_slug'       => 'animation',
				'description'       => esc_html__( "This will delay the animation time eg 0.5", 'et_builder' ),
				'depends_show_if'     => 'on',
			),
			//icon hover
			'icon_hover_on_off' => array(
				'label'           => esc_html__( 'Hover Animation Style on Icon', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'toggle_slug'     => 'image',
				'affects'           => array(
					'#et_pb_icon_hover_style',
				),
				'description'        => esc_html__( 'This will applied animation on icon when hover', 'et_builder' ),
			),
			'icon_hover_style' => array(
				'label'           => esc_html__( 'Hover Animation Style', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => array(
					'flipping' => esc_html__( 'Flip', 'et_builder' ),
				),
				'toggle_slug'     => 'image',
				'description'        => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
			),
			//icon ended
			'background_layout' => array(
				'label'             => esc_html__( 'Text Color', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'color_option',
				'options'           => array(
					'light' => esc_html__( 'Dark', 'et_builder' ),
					'dark'  => esc_html__( 'Light', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'text',
				'description'       => esc_html__( 'Here you can choose whether your text should be light or dark. If you are working with a dark background, then your text should be light. If your background is light, then your text should be set to dark.', 'et_builder' ),
			),
			'text_orientation' => array(
				'label'             => esc_html__( 'Text Orientation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => et_builder_get_text_orientation_options(),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'text',
				'description'       => esc_html__( 'This will control how your blurb text is aligned.', 'et_builder' ),
			),
			//Alignment Placement
			'text_alignment' => array(
				'label'           => esc_html__( 'Text Vertical Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center'  => esc_html__( 'Center', 'et_builder' ),
					'top'  => esc_html__( 'Top', 'et_builder' ),
					'bottom' => esc_html__( 'Bottom', 'et_builder' ),
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'text',
				'description'        => esc_html__( 'This setting determines the vertical alignment of your content. Your content can either be vertically centered, or aligned to the bottom.', 'et_builder' ),
			),
			//Border Wrapper
			//Border Wrapper
			'use_wrapper_border' => array(
				'label'           => esc_html__( 'Use Border Wrapper', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'Off', 'et_builder' ),
					'on'  => esc_html__( 'On', 'et_builder' ),
				),
				'affects' => array(
					'#et_pb_wrapper_style, #et_pb_wrapper_border_width',
				),
				'description'        => esc_html__( 'If you would like to use a border wrapper.', 'et_builder' ),
				'toggle_slug'       => 'border_wrapper',
			),
			'wrapper_style' => array(
				'label'           => esc_html__( 'Border Style', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'solid'  => esc_html__( 'Solid', 'et_builder' ),
					'dotted'  => esc_html__( 'Dotted', 'et_builder' ),
					'dashed' => esc_html__( 'Dashed', 'et_builder' ),
				),
				'description'       => esc_html__( 'You can choose solid, dotted or dashed', 'et_builder' ),
				'toggle_slug'       => 'border_wrapper',
			),
			'adv_wrapper_border' => array(
				'label'           => esc_html__( 'Style Wrapper Border', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'layout',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects' => array(
					'wrapper_border_color',
					'wrapper_border_width',
					'wrapper_padding',
				),
				'shortcode_default' => 'off',
				'tab_slug'	       	=> 'advanced',
				'toggle_slug'       => 'wrapper_border_styles',
			),
			'wrapper_border_color' => array(
				'label'             => esc_html__( 'Border Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'option_category'   => 'layout',
				'default'           => '#ffffff',
				'shortcode_default' => '#ffffff',
				'tab_slug'	       	=> 'advanced',
				'toggle_slug'       => 'wrapper_border_styles',
				'depends_default'   => true,
			),
			'wrapper_border_width' => array(
				'label'           => esc_html__( 'Border Width', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'layout',
				'default'           => '2px',
				'shortcode_default' => '2px',
				'mobile_options'  => true,
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'wrapper_border_styles',
			),
			'wrapper_border_width_tablet' => array (
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'wrapper_border_styles',
			),
			'wrapper_border_width_phone' => array (
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'wrapper_border_styles',
			),
			'wrapper_border_width_last_edited' => array (
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'wrapper_border_styles',
			),
			//aio wrap content
			'aio_wrap_content_bg' => array(
				'label'             => esc_html__( 'Background Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'aiowrapcontent_styles',
			),
			//bg
			'img_src' => array(
				'label'              => esc_html__( 'Background Image (with Effects)', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'description'        => esc_html__( 'This is the background image with has alot of effects such as Image Zoom, Image Hover Filter and etc. The other Divi background UI at the bottom is only for the div itself and will set a background on the main wrapper. Upload your desired image, or type in the URL to the image you would like to display as background.', 'et_builder' ),
				'toggle_slug'       => 'background',
			),
			'img_alt' => array(
				'label'           => esc_html__( 'Image Alternative Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This defines the HTML ALT text. A short description of your image can be placed here.', 'et_builder' ),
				'toggle_slug'       => 'background',
			),
			//module height
			'img_define_height' => array(
				'label'           => esc_html__( 'Module Height', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'width',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'description'     => esc_html__( 'This defines the height of the Perky Animate module. A must to use when using with background image.', 'et_builder' ),
			),
			'img_define_height_tablet' => array (
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'width',
			),
			'img_define_height_phone' => array (
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'width',
			),
			'img_define_height_last_edited' => array (
				'type'     => 'skip',
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'width',
			),
			//shadow
			'shadow_on_off' => array(
				'label'           => esc_html__( 'Use Material Shadow', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on' => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_shadow_type',
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'material_shadow',
				'description'        => esc_html__( 'If enabled, you can have material shadow style on this div.', 'et_builder' ),
			),
			'shadow_type' => array(
				'label'           => esc_html__( 'Shadow Depth Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'z-depth-1'  => esc_html__( 'Depth 1', 'et_builder' ),
					'z-depth-2'  => esc_html__( 'Depth 2', 'et_builder' ),
					'z-depth-3' => esc_html__( 'Depth 3', 'et_builder' ),
					'z-depth-4' => esc_html__( 'Depth 4', 'et_builder' ),
					'z-depth-5' => esc_html__( 'Depth 5', 'et_builder' ),
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'       => 'material_shadow',
				'description'        => esc_html__( '1 to 5 determines how far raised or close to the page the element is.', 'et_builder' ),
			),
			'img_zoomin_hover' => array(
				'label'             => esc_html__( 'Image Zoom In on Hover', 'et_builder' ),
				'type'              => 'yes_no_button',
				'option_category'   => 'layout',
				'options'           => array(
					'off' => esc_html__( 'Off', 'et_builder' ),
					'on'  => esc_html__( 'On', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_img_zoomin_hover_style',
				),
				'description'       => esc_html__( 'If enabled, image will be zoomed in when a visitors hovers over the image', 'et_builder' ),
				'toggle_slug'       => 'background',
			),
			'img_zoomin_hover_style' => array(
				'label'           => esc_html__( 'Zoom In Speed', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'fast' => esc_html__( 'Fast', 'et_builder' ),
					'slow'  => esc_html__( 'Slow', 'et_builder' ),
				),
				'description'       => esc_html__( 'This you can define the speed of the zoom in when hover.', 'et_builder' ),
				'toggle_slug'       => 'background',
			),
			'img_hover_effect' => array(
				'label'           => esc_html__( 'Use Image Hover Filter', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_img_hover_effect_style',
				),
				'description'       => esc_html__( 'Here you can choose to have hover filters on the background image', 'et_builder' ),
				'toggle_slug'       => 'background',
			),
			'img_hover_effect_style' => array(
				'label'           => esc_html__( 'Filters', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'img_grayscale_hover' => esc_html__( 'Grayscale', 'et_builder' ),
					'img_sepia_hover'  => esc_html__( 'Sepia', 'et_builder' ),
					'img_saturate_hover' => esc_html__( 'Saturate', 'et_builder' ),
					'img_blur_hover' => esc_html__( 'Blur', 'et_builder' ),
					'img_contrast_hover' => esc_html__( 'Contrast', 'et_builder' ),
					'img_invert_hover' => esc_html__( 'Invert', 'et_builder' ),
					'img_brightness_hover' => esc_html__( 'Brightness', 'et_builder' ),
				),
				'description'       => esc_html__( 'This you can choose Grayscale, Sepia, Saturate or Blur', 'et_builder' ),
				'toggle_slug'       => 'background',
			),
			//background gradient
			'use_background_gradient' => array(
				'label'             => esc_html__( 'Background Gradient/Color', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_background_gradient_type, #et_pb_background_gradient_color_one, #et_pb_background_gradient_color_two',
				),
				'toggle_slug'       => 'background',
				'description'       => esc_html__( 'This will be removed in the near future. Please use the new Background UI instead. This will be here until all customers have started using the new background UI', 'et_builder' ),
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
				'toggle_slug'       => 'background',
				'depends_show_if'   => 'on',
				'description'       => esc_html__( 'Define the gradient type. Top to Bottom, Left to Right, Radial and Diagonal.', 'et_builder' ),
			),
			'background_gradient_color_one' => array(
				'label'             => esc_html__( 'First Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'depends_show_if'   => 'on',
				'toggle_slug'       => 'background',
			),
			'background_gradient_color_two' => array(
				'label'             => esc_html__( '2nd Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'depends_show_if'   => 'on',
				'toggle_slug'       => 'background',
			),
			//hide content
			'hide_content' => array(
				'label'           => esc_html__( 'Hide Content', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_alternative_hover_content_on_off,#et_pb_hover_content_effect, #et_pb_title_animation_on_off, #et_pb_content_animation_on_off, #et_pb_button_one_animation_on_off, #et_pb_button_two_animation_on_off',
				),
				'description'       => esc_html__( 'You can choose to hide the contents and only show on hover.', 'et_builder' ),
				'toggle_slug'       => 'hide_content',
			),
			'alternative_hover_content_on_off' => array(
				'label'           => esc_html__( 'Show Alternative Contents', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_alternative_hover_title, #et_pb_alternative_hover_description, #et_pb_alternative_hover_alignment, #et_pb_alternative_hover_bg',
				),
				'description'       => esc_html__( 'You can choose to show an alterative title. This title will appear centered when you hide the content.', 'et_builder' ),
				'toggle_slug'       => 'hide_content',
			),
			'alternative_hover_title' => array(
				'label'           => esc_html__( 'Alt Hover Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your value to action alternative hover title here.', 'et_builder' ),
				'toggle_slug'       => 'hide_content',
			),
			'alternative_hover_description' => array(
				'label'           => esc_html__( 'Alt Hover Description', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your value to action alternative hover content here.', 'et_builder' ),
				'toggle_slug'       => 'hide_content',
			),
			'alternative_hover_alignment' => array(
				'label'           => esc_html__( 'Alt Title Vertical Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center'  => esc_html__( 'Center', 'et_builder' ),
					'center-top'  => esc_html__( 'Center Top', 'et_builder' ),
					'center-bottom' => esc_html__( 'Center Bottom', 'et_builder' ),
					'left-top' => esc_html__( 'Left Top', 'et_builder' ),
					'left-bottom' => esc_html__( 'Left Bottom', 'et_builder' ),
					'right-top' => esc_html__( 'Right Top', 'et_builder' ),
					'right-bottom' => esc_html__( 'Right Bottom', 'et_builder' ),
				),
				'description'        => esc_html__( 'This setting determines the vertical alignment of your alternative title. Your alternative title can either be vertically centered, or aligned to the bottom.', 'et_builder' ),
				'toggle_slug'       => 'hide_content',
			),
			'alternative_hover_bg' => array(
				'label'             => esc_html__( 'Alternative Hover Background Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'alttext_styles',
			),
			'hover_content_effect' => array(
				'label'           => esc_html__( 'Hover Content Effect', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'         => array(
					'dwd-fadein' => esc_html__( 'Fade In', 'et_builder' ),
					'dwd-fadein-up' => esc_html__( 'Fade In Up', 'et_builder' ),
					'dwd-fadein-down' => esc_html__( 'Fade In Down', 'et_builder' ),
					'dwd-fadein-left' => esc_html__( 'Fade In Left', 'et_builder' ),
					'dwd-fadein-right' => esc_html__( 'Fade In Right', 'et_builder' ),
					'dwd-push-from-bottom' => esc_html__( 'Push Up (BG)', 'et_builder' ),
					'dwd-push-from-top' => esc_html__( 'Push Down (BG)', 'et_builder' ),
					'dwd-push-from-right' => esc_html__( 'Push Left (BG)', 'et_builder' ),
					'dwd-push-from-left' => esc_html__( 'Push Right (BG)', 'et_builder' ),
					'dwd-slide-up' => esc_html__( 'Slide Up', 'et_builder' ),
					'dwd-slide-down' => esc_html__( 'Slide Down', 'et_builder' ),
					'dwd-slide-left' => esc_html__( 'Slide Left', 'et_builder' ),
					'dwd-slide-right' => esc_html__( 'Slide Right', 'et_builder' ),
					'dwd-slide-top-left ' => esc_html__( 'Slide Top Left', 'et_builder' ),
					'dwd-slide-top-right' => esc_html__( 'Slide Top Right', 'et_builder' ),
					'dwd-slide-bottom-left' => esc_html__( 'Slide Bottom Left', 'et_builder' ),
					'dwd-slide-bottom-right' => esc_html__( 'Slide Bottom Right', 'et_builder' ),
					'dwd-hinge-up' => esc_html__( 'Hinge Up (BG)', 'et_builder' ),
					'dwd-hinge-down' => esc_html__( 'Hinge Down (BG)', 'et_builder' ),
					'dwd-hinge-left' => esc_html__( 'Hinge Left (BG)', 'et_builder' ),
					'dwd-hinge-right' => esc_html__( 'Hinge Right (BG)', 'et_builder' ),
					'dwd-flip-bottom'  => esc_html__( 'Flip Down', 'et_builder' ),
					'dwd-flip-up'  => esc_html__( 'Flip Up', 'et_builder' ),
					'dwd-flip-left'  => esc_html__( 'Flip Left', 'et_builder' ),
					'dwd-flip-right'  => esc_html__( 'Flip Right', 'et_builder' ),
					'dwd-flipping-bottom'  => esc_html__( 'Flip Down 360', 'et_builder' ),
					'dwd-flipping-top'  => esc_html__( 'Flip Up 360', 'et_builder' ),
					'dwd-flipping-left'  => esc_html__( 'Flip Left 360', 'et_builder' ),
					'dwd-flipping'  => esc_html__( 'Flip Right 360', 'et_builder' ),
					'dwd-flip-diag-1' => esc_html__( 'Flip Diagonal Top Left/Bottom Right', 'et_builder' ),
					'dwd-flip-diag-2' => esc_html__( 'Flip Diagonal Top Right/Bottom Left', 'et_builder' ),
					'dwd-zoom-in' => esc_html__( 'Zoom In', 'et_builder' ),
					'dwd-zoom-out' => esc_html__( 'Zoom Out (BG)', 'et_builder' ),
					'dwd-zoom-out-up' => esc_html__( 'Zoom Out Up (BG)', 'et_builder' ),
					'dwd-zoom-out-down' => esc_html__( 'Zoom Out Down (BG)', 'et_builder' ),
					'dwd-zoom-out-left' => esc_html__( 'Zoom Out Left (BG)', 'et_builder' ),
					'dwd-zoom-out-right' => esc_html__( 'Zoom Out Right (BG)', 'et_builder' ),
				),
				'depends_show_if'   => 'on',
				'description'       => esc_html__( 'Define the hover effect style. For pushing effect - Make sure you have a background color set as well.', 'et_builder' ),
				'toggle_slug'       => 'hide_content',
			),
			//overlay gradient
			'overlay_gradient' => array(
				'label'             => esc_html__( 'Overlay', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_overlay_gradient_type, #et_pb_overlay_gradient_color_one, #et_pb_overlay_gradient_color_two, #et_pb_bg_overlay_style, #et_pb_overlay_gradient_hidden_show',
				),
				'description'       => esc_html__( 'Set a background color - To use solid color, use the same color on both otherwise you can just choose to have different color to show gradient', 'et_builder' ),
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'bg_overlay_style' => array(
				'label'           => esc_html__( 'Overlay Styles', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'full_overlay' => esc_html__( 'Full Overlay Background', 'et_builder' ),
					'box_overlay'  => esc_html__( 'Box Overlay Background', 'et_builder' ),
				),
				'description'       => esc_html__( 'This will show a overlay behind the content when hover.', 'et_builder' ),
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'overlay_gradient_hidden_show' => array(
				'label'             => esc_html__( 'Show Overlay On Load', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_overlay_gradient_only_hover, #et_pb_overlay_gradient_unoverlay_on_hover',
				),
				'description'       => esc_html__( 'This will show the overlay on load - On top of it', 'et_builder' ),
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'overlay_gradient_only_hover' => array(
				'label'             => esc_html__( 'Only Show When Hover', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'default'         => 'on',
				'depends_show_if'   => 'off',
				'description'       => esc_html__( 'This option will only show the overlay when you hover over.', 'et_builder' ),
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'overlay_gradient_unoverlay_on_hover' => array(
				'label'             => esc_html__( 'Unoverlay Overlay on hover', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'No', 'et_builder' ),
					'on'   => esc_html__( 'Yes', 'et_builder' ),
				),
				'depends_show_if'   => 'on',
				'description'       => esc_html__( 'This option will only hide the overlay on load when you hover over.', 'et_builder' ),
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'overlay_gradient_type' => array(
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
				'description'       => esc_html__( 'Define the gradient type. Top to Bottom, Left to Right, Radial and Diagonal.', 'et_builder' ),
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'overlay_gradient_color_one' => array(
				'label'             => esc_html__( 'First Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'depends_show_if'   => 'on',
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			'overlay_gradient_color_two' => array(
				'label'             => esc_html__( '2nd Gradient Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'depends_show_if'   => 'on',
				'toggle_slug'     => 'dwd_overlay_effect',
			),
			//whole animation
			'whole_content_animation_on_off' => array(
				'label'           => esc_html__( 'Whole Content Animation Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_whole_content_animation,#et_pb_whole_content_animation_reveal, #et_pb_title_animation_on_off, #et_pb_content_animation_on_off, #et_pb_button_one_animation_on_off, #et_pb_button_two_animation_on_off',
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'whole_content_animation' => array(
				'label'             => esc_html__( 'Whole Content Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'depends_show_if'     => 'on',
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'whole_content_animation_reveal' => array(
				'label'           => esc_html__( 'Whole Content Animation Show/Hide on Scroll', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_whole_content_animation_speed',
				),
				'depends_show_if'     => 'on',
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'whole_content_animation_speed' => array(
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
				'depends_show_if'     => 'on',
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
			),
			'content_new' => array(
				'label'             => esc_html__( 'Content', 'et_builder' ),
				'type'              => 'tiny_mce',
				'option_category'   => 'basic_option',
				'description'       => esc_html__( 'Input the main text content for your module here.', 'et_builder' ),
				'toggle_slug'       => 'main_content',
			),
			//advance fancyline
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
			//title underline
			'title_underline_style_adv' => array(
				'label'           => esc_html__( 'Use Custom Styles for Title Underline', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'affects'           => array(
					'#et_pb_title_underline_color, #et_pb_title_underline_height',
				),
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'title_underline_styles',
			),
			'title_underline_color' => array(
				'label'             => esc_html__( 'Underline Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'title_underline_styles',
			),
			'title_underline_height' => array(
				'label'             => esc_html__( 'Underline Height', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'configuration',
				'mobile_options'  => true,
				'depends_default'   => true,
				'default'           => '3px',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'title_underline_styles',
			),
			'title_underline_height_tablet' => array (
				'type'     => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'title_underline_styles',
			),
			'title_underline_height_phone' => array (
				'type'     => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'title_underline_styles',
			),
			'title_underline_height_last_edited' => array(
				'type'      => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug'       => 'title_underline_styles',
			),
			'max_width' => array(
				'label'           => esc_html__( 'Image Max Width', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'depends_show_if' => 'off',
			),
			'use_icon_font_size' => array(
				'label'           => esc_html__( 'Use Icon Font Size', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'font_option',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'affects'     => array(
					'icon_font_size',
				),
				'depends_show_if' => 'on',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'icon_settings',
			),
			'icon_font_size_last_edited' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'icon_settings',
			),
			'icon_font_size' => array(
				'label'           => esc_html__( 'Icon Font Size', 'et_builder' ),
				'type'            => 'range',
				'option_category' => 'font_option',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'icon_settings',
				'default'         => '96px',
				'range_settings' => array(
					'min'  => '1',
					'max'  => '120',
					'step' => '1',
				),
				'mobile_options'  => true,
				'depends_default' => true,
			),
			'max_width_tablet' => array (
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'max_width_phone' => array (
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'max_width_last_edited' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
			),
			'icon_font_size_tablet' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'icon_settings',
			),
			'icon_font_size_phone' => array(
				'type'        => 'skip',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'icon_settings',
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
			//animation for title, subheadin & content
			//added
			'scroll_fade_column_on_off' => array(
				'label'           => esc_html__( 'Scrolling Fading Effect', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off'  => esc_html__( 'off', 'et_builder' ),
					'on'   => esc_html__( 'on', 'et_builder' ),
				),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'description'       => esc_html__( 'This will have a scrolling fading effect on all element inside the AIO. Make sure you do not apply any animation.', 'et_builder' ),

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
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'   => 'off',
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
			//content animation
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
				'depends_show_if'   => 'off',
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
			//btn animation
			'button_one_animation_on_off' => array(
				'label'           => esc_html__( 'Button #1 Animation Effect', 'et_builder' ),
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
				'depends_show_if'   => 'off',
			),
			'button_one_animation' => array(
				'label'             => esc_html__( 'Button Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_one_animation_reveal' => array(
				'label'           => esc_html__( 'Button Show/Hide on Scroll', 'et_builder' ),
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
			//button 2 animation
			'button_two_animation_on_off' => array(
				'label'           => esc_html__( 'Button #2 Animation Effect', 'et_builder' ),
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
				'depends_show_if'   => 'off',
			),
			'button_two_animation' => array(
				'label'             => esc_html__( 'Button #2 Animation', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'options'           => $animation_type_list,
				'description'       => esc_html__( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
				'tab_slug'    => 'dwdtab',
				'toggle_slug'       => 'animation_area',
				'depends_show_if'     => 'on',
			),
			'button_two_animation_reveal' => array(
				'label'           => esc_html__( 'Button Show/Hide on Scroll', 'et_builder' ),
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
			//border
			'border_radius' => array(
				'label'             => esc_html__( 'Border Radius', 'et_builder' ),
				'type'              => 'range',
				'option_category'   => 'layout',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'border_radius',
				'default'           => '0px',
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		$module_id             = $this->shortcode_atts['module_id'];
		$module_class          = $this->shortcode_atts['module_class'];
		$title                 = $this->shortcode_atts['title'];
		$url                   = $this->shortcode_atts['url'];
		$image                 = $this->shortcode_atts['image'];
		$url_new_window        = $this->shortcode_atts['url_new_window'];
		$alt                   = $this->shortcode_atts['alt'];
		$background_layout     = $this->shortcode_atts['background_layout'];
		$text_orientation      = $this->shortcode_atts['text_orientation'];
		$animation             = $this->shortcode_atts['animation'];
		$icon_placement        = $this->shortcode_atts['icon_placement'];
		$font_icon             = $this->shortcode_atts['font_icon'];
		$use_icon              = $this->shortcode_atts['use_icon'];
		$use_circle            = $this->shortcode_atts['use_circle'];
		$use_circle_border     = $this->shortcode_atts['use_circle_border'];
		$icon_color            = $this->shortcode_atts['icon_color'];
		$circle_color          = $this->shortcode_atts['circle_color'];
		$circle_border_color   = $this->shortcode_atts['circle_border_color'];
		$max_width             = $this->shortcode_atts['max_width'];
		$max_width_tablet      = $this->shortcode_atts['max_width_tablet'];
		$max_width_phone       = $this->shortcode_atts['max_width_phone'];
		$use_icon_font_size    = $this->shortcode_atts['use_icon_font_size'];
		$icon_font_size        = $this->shortcode_atts['icon_font_size'];
		$icon_font_size_tablet = $this->shortcode_atts['icon_font_size_tablet'];
		$icon_font_size_phone  = $this->shortcode_atts['icon_font_size_phone'];
		//icon alignment
		$icon_alignment        = $this->shortcode_atts['icon_alignment'];
		//icon hover
		$icon_hover_on_off        = $this->shortcode_atts['icon_hover_on_off'];
		$icon_hover_style        = $this->shortcode_atts['icon_hover_style'];
		//whole animation
		$whole_content_animation_on_off = $this->shortcode_atts['whole_content_animation_on_off'];
		$whole_content_animation               = $this->shortcode_atts['whole_content_animation'];
		$whole_content_animation_reveal               = $this->shortcode_atts['whole_content_animation_reveal'];
		$whole_content_animation_speed               = $this->shortcode_atts['whole_content_animation_speed'];
		//icon animation
		$icon_animation_reveal  = $this->shortcode_atts['icon_animation_reveal'];
		$icon_animation_speed  = $this->shortcode_atts['icon_animation_speed'];
		//title animation
		$title_animation_on_off = $this->shortcode_atts['title_animation_on_off'];
		$title_animation               = $this->shortcode_atts['title_animation'];
		$title_animation_reveal             = $this->shortcode_atts['title_animation_reveal'];
		$title_animation_speed               = $this->shortcode_atts['title_animation_speed'];
		//content animation
		$content_animation_on_off = $this->shortcode_atts['content_animation_on_off'];
		$content_animation               = $this->shortcode_atts['content_animation'];
		$content_animation_reveal               = $this->shortcode_atts['content_animation_reveal'];
		$content_animation_speed               = $this->shortcode_atts['content_animation_speed'];
		//btn animation
		$button_one_animation_on_off = $this->shortcode_atts['button_one_animation_on_off'];
		$button_one_animation               = $this->shortcode_atts['button_one_animation'];
		$button_one_animation_reveal               = $this->shortcode_atts['button_one_animation_reveal'];
		$button_one_animation_speed               = $this->shortcode_atts['button_one_animation_speed'];
		$button_two_animation_on_off = $this->shortcode_atts['button_two_animation_on_off'];
		$button_two_animation               = $this->shortcode_atts['button_two_animation'];
		$button_two_animation_reveal               = $this->shortcode_atts['button_two_animation_reveal'];
		$button_two_animation_speed               = $this->shortcode_atts['button_two_animation_speed'];
		//added
		$button_on_off        = $this->shortcode_atts['button_on_off'];
		$button_text           = $this->shortcode_atts['button_text'];
		$custom_icon_1                = $this->shortcode_atts['button_one_icon'];
		$button_custom_1              = $this->shortcode_atts['custom_button_one'];
		$custom_icon_2                = $this->shortcode_atts['button_two_icon'];
		$button_custom_2              = $this->shortcode_atts['custom_button_two'];
		$use_whole_link_on_off        = $this->shortcode_atts['use_whole_link_on_off'];
		$use_whole_link_video_popup        = $this->shortcode_atts['use_whole_link_video_popup'];
		$whole_link_url        = $this->shortcode_atts['whole_link_url'];
		$popup_video_on_off        = $this->shortcode_atts['popup_video_on_off'];
		$button_url        = $this->shortcode_atts['button_url'];
		$button_text_two          = $this->shortcode_atts['button_text_two'];
		$popup_video_on_off_two        = $this->shortcode_atts['popup_video_on_off_two'];
		$button_url_two        = $this->shortcode_atts['button_url_two'];
		//typing
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
		//rotator
		$rotator_effect          	  = $this->shortcode_atts['rotator_effect'];
		$rotator_static_on_off          	  = $this->shortcode_atts['rotator_static_on_off'];
		$rotator_static_text          	  = $this->shortcode_atts['rotator_static_text'];
		$rotator_static_break          	  = $this->shortcode_atts['rotator_static_break'];
		$rotator_type          	  = $this->shortcode_atts['rotator_type'];
		$rotator_speed          	  = $this->shortcode_atts['rotator_speed'];
		$rotator_effect_color         	  = $this->shortcode_atts['rotator_effect_color'];
		//textillate
		$textillate_effect         	  = $this->shortcode_atts['textillate_effect'];
		$textillate_in_effect         	  = $this->shortcode_atts['textillate_in_effect'];
		$textillate_in_type         	  = $this->shortcode_atts['textillate_in_type'];
		$textillate_out_effect         	  = $this->shortcode_atts['textillate_out_effect'];
		$textillate_out_type         	  = $this->shortcode_atts['textillate_out_type'];
		//textgif
		$textgif_on_off          	  = $this->shortcode_atts['textgif_on_off'];
		$textgif_bg          	  = $this->shortcode_atts['textgif_bg'];
		//background text
		$use_background_text         	  = $this->shortcode_atts['use_background_text'];
		$background_text = $this->shortcode_atts['background_text'];
		//fancyline
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
		//title underline
		$title_underline_on_off         = $this->shortcode_atts['title_underline_on_off'];
		$title_underline_style         = $this->shortcode_atts['title_underline_style'];
		$title_underline_whole_div         = $this->shortcode_atts['title_underline_whole_div'];
		$title_underline_style_adv         = $this->shortcode_atts['title_underline_style_adv'];
		$title_underline_color         = $this->shortcode_atts['title_underline_color'];
		$title_underline_height         = $this->shortcode_atts['title_underline_height'];
		$title_underline_height_tablet         = $this->shortcode_atts['title_underline_height_tablet'];
		$title_underline_height_phone         = $this->shortcode_atts['title_underline_height_phone'];
		$title_underline_height_last_edited         = $this->shortcode_atts['title_underline_height_last_edited'];
		//animated gradient
		//$animated_gradient            = $this->shortcode_atts['animated_gradient'];
		//$animated_gradient_style      = $this->shortcode_atts['animated_gradient_style'];
		//$animated_gradient_speed      = $this->shortcode_atts['animated_gradient_speed'];
		//overlay gradient
		$overlay_gradient            = $this->shortcode_atts['overlay_gradient'];
		$overlay_gradient_hidden_show           = $this->shortcode_atts['overlay_gradient_hidden_show'];
		$overlay_gradient_only_hover            = $this->shortcode_atts['overlay_gradient_only_hover'];
		$overlay_gradient_unoverlay_on_hover = $this->shortcode_atts['overlay_gradient_unoverlay_on_hover'];
		$overlay_gradient_type            = $this->shortcode_atts['overlay_gradient_type'];
		$overlay_gradient_color_one            = $this->shortcode_atts['overlay_gradient_color_one'];
		$overlay_gradient_color_two            = $this->shortcode_atts['overlay_gradient_color_two'];
		//bg
		$use_background_gradient            = $this->shortcode_atts['use_background_gradient'];
		$background_gradient_type            = $this->shortcode_atts['background_gradient_type'];
		$background_gradient_color_one            = $this->shortcode_atts['background_gradient_color_one'];
		$background_gradient_color_two            = $this->shortcode_atts['background_gradient_color_two'];
		$img_src			  = $this->shortcode_atts['img_src'];
		$img_alt			  = $this->shortcode_atts['img_alt'];
		$img_zoomin_hover	  = $this->shortcode_atts['img_zoomin_hover'];
		$img_zoomin_hover_style	  = $this->shortcode_atts['img_zoomin_hover_style'];
		$img_hover_effect	  = $this->shortcode_atts['img_hover_effect'];
		$img_hover_effect_style	  = $this->shortcode_atts['img_hover_effect_style'];
		//module height
		$img_define_height			  = $this->shortcode_atts['img_define_height'];
		$img_define_height_tablet	= $this->shortcode_atts['img_define_height_tablet'];
		$img_define_height_phone	= $this->shortcode_atts['img_define_height_phone'];
		$img_define_height_last_edited			  = $this->shortcode_atts['img_define_height_last_edited'];
		//Text Alignmnet
		$text_alignment	= $this->shortcode_atts['text_alignment'];
		//aio wrap content
		$aio_wrap_content_bg = $this->shortcode_atts['aio_wrap_content_bg'];
		//use Wrapper Border
		$use_wrapper_border	= $this->shortcode_atts['use_wrapper_border'];
		$wrapper_style	= $this->shortcode_atts['wrapper_style'];
		$adv_wrapper_border	= $this->shortcode_atts['adv_wrapper_border'];
		$wrapper_border_color = $this->shortcode_atts['wrapper_border_color'];
		$wrapper_border_width = $this->shortcode_atts['wrapper_border_width'];
		$wrapper_border_width_tablet = $this->shortcode_atts['wrapper_border_width_tablet'];
		$wrapper_border_width_phone = $this->shortcode_atts['wrapper_border_width_phone'];
		$wrapper_border_width_last_edited = $this->shortcode_atts['wrapper_border_width_last_edited'];
		//hidecontent
		$hide_content = $this->shortcode_atts['hide_content'];
		$alternative_hover_content_on_off	= $this->shortcode_atts['alternative_hover_content_on_off'];
		$alternative_hover_title	= $this->shortcode_atts['alternative_hover_title'];
		$alternative_hover_alignment = $this->shortcode_atts['alternative_hover_alignment'];
		$alternative_hover_bg = $this->shortcode_atts['alternative_hover_bg'];
		$alternative_hover_description = $this->shortcode_atts['alternative_hover_description'];
		//shadow
		$shadow_on_off = $this->shortcode_atts['shadow_on_off'];
		$shadow_type = $this->shortcode_atts['shadow_type'];
		$bg_overlay_style	= $this->shortcode_atts['bg_overlay_style'];
		$hover_content_effect	= $this->shortcode_atts['hover_content_effect'];
		//border
		$border_radius             = $this->shortcode_atts['border_radius'];
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
		$scroll_fade_column_on_off = $this->shortcode_atts['scroll_fade_column_on_off'];

		$module_class = ET_Builder_Element::add_module_order_class( $module_class, $function_name );

		if ( 'off' !== $use_icon_font_size ) {
			$font_size_values = array(
				'desktop' => $icon_font_size,
				'tablet'  => $icon_font_size_tablet,
				'phone'   => $icon_font_size_phone,
			);

			et_pb_generate_responsive_css( $font_size_values, '%%order_class%% .et-pb-icon', 'font-size', $function_name );
		}

		if ( '' !== $max_width_tablet || '' !== $max_width_phone || '' !== $max_width ) {
			$max_width_values = array(
				'desktop' => $max_width,
				'tablet'  => $max_width_tablet,
				'phone'   => $max_width_phone,
			);

			et_pb_generate_responsive_css( $max_width_values, '%%order_class%% .et_pb_main_blurb_image img', 'max-width', $function_name );
		}

		if ( is_rtl() && 'left' === $text_orientation ) {
			$text_orientation = 'right';
		}

		if ( is_rtl() && 'left' === $icon_placement ) {
			$icon_placement = 'right';
		}

		if ( '' !== $title && '' !== $url ) {
			$title = sprintf( '<a href="%15$s"%16$s><h3 class="%4$s%6$s%11$s%13$s%14$s%17$s"%12$s%5$s>%1$s%10$s%9$s%8$s%7$s %2$s%3$s</h3></a>',
				( 'on' !== $typing_effect && 'on' !== $rotator_effect ? $title : '' ),
                ( 'off' !== $typing_effect && 'off' === $typing_static_on_off ? sprintf( '<span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%1$s</span><span class="dwd-typing"></span>', $title ) : '' ),
				( 'off' !== $rotator_effect && 'off' === $rotator_static_on_off ? sprintf( '<span style="display:none;" class="dwd-rotator">%1$s</span>', $title ) : '' ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? ' dwd-animation' : '' ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$title_animation} data-dwd-animation-delay={$title_animation_speed}s" ) : '' ),
				( 'off' !== $title_animation_on_off && 'off' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( "$title_animation animated" ) : '' ),
				( 'off' !== $typing_effect && 'on' === $typing_static_on_off && 'off' !== $typing_static_break ? sprintf( '%1$s <br><span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%2$s</span><span class="dwd-typing"></span>', $title, $typing_static_text ) : '' ),
				( 'off' !== $rotator_effect  && 'on' === $rotator_static_on_off && 'off' !== $rotator_static_break ? sprintf( '%1$s <br><span style="display:none;" class="dwd-rotator">%2$s</span>', $title, $rotator_static_text ) : '' ),
				//break 9
				( 'off' !== $typing_effect && 'on' === $typing_static_on_off && 'on' !== $typing_static_break ? sprintf( '%1$s <span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%2$s</span><span class="dwd-typing"></span>', $title, $typing_static_text ) : '' ),
				( 'off' !== $rotator_effect  && 'on' === $rotator_static_on_off && 'on' !== $rotator_static_break ? sprintf( '%1$s <span style="display:none;" class="dwd-rotator">%2$s</span>', $title, $rotator_static_text ) : '' ),
				//textillate
				( 'off' !== $textillate_effect && 'off' === $rotator_static_on_off && 'off' === $typing_effect ? ' tlt' : '' ),
				( 'off' !== $textillate_effect && 'off' === $rotator_static_on_off && 'off' === $typing_effect ? esc_attr(" data-in-effect={$textillate_in_effect} data-out-effect={$textillate_out_effect} data-in-{$textillate_in_type}=true data-out-{$textillate_out_type}=true") : '' ),
				//textgif 13
				( 'off' !== $textgif_on_off ? ' textgif' : '' ),
				//fancy 14
				( 'off' !== $title_fancyline && 'after' == $title_before_after ? ' fancyline-title' : '' ),
				//link and targetwindow 15
				( '' !== $url ? esc_url($url) : '' ),
				//link end 16
				('on' === $url_new_window ? ' target="_blank"' : ''),
				//underline 17
				( 'off' !== $title_underline_on_off ? esc_attr( " $title_underline_style dwd-title-underline" ) : '' )
			);
		} else {

		if ( '' !== $title ) {
			$title = sprintf( '<h3 class="%4$s%6$s%11$s%13$s%14$s%15$s"%12$s%5$s>%1$s%10$s%9$s%8$s%7$s %2$s%3$s</h3>',
				( 'on' !== $typing_effect && 'on' !== $rotator_effect ? $title : '' ),
                ( 'off' !== $typing_effect && 'off' === $typing_static_on_off ? sprintf( '<span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%1$s</span><span class="dwd-typing"></span>', $title ) : '' ),
				( 'off' !== $rotator_effect && 'off' === $rotator_static_on_off ? sprintf( '<span style="display:none;" class="dwd-rotator">%1$s</span>', $title ) : '' ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? ' dwd-animation' : '' ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$title_animation} data-dwd-animation-delay={$title_animation_speed}s" ) : '' ),
				( 'off' !== $title_animation_on_off && 'off' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( "$title_animation animated" ) : '' ),
				( 'off' !== $typing_effect && 'on' === $typing_static_on_off && 'off' !== $typing_static_break ? sprintf( '%1$s <br><span style="display:none;" class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%2$s</span><span class="dwd-typing"></span>', $title, $typing_static_text ) : '' ),
				( 'off' !== $rotator_effect  && 'on' === $rotator_static_on_off && 'off' !== $rotator_static_break ? sprintf( '%1$s <br><span style="display:none;" class="dwd-rotator">%2$s</span>', $title, $rotator_static_text ) : '' ),
				//break 9
				( 'off' !== $typing_effect && 'on' === $typing_static_on_off && 'on' !== $typing_static_break ? sprintf( '%1$s <span class="dwd-typed" style="display:none;opacity:0;visibility:hidden;">%2$s</span><span class="dwd-typing"></span>', $title, $typing_static_text ) : '' ),
				( 'off' !== $rotator_effect  && 'on' === $rotator_static_on_off && 'on' !== $rotator_static_break ? sprintf( '%1$s <span class="dwd-rotator">%2$s</span>', $title, $rotator_static_text ) : '' ),
				//textillate
				( 'off' !== $textillate_effect && 'off' === $rotator_static_on_off && 'off' === $typing_effect ? ' tlt' : '' ),
				( 'off' !== $textillate_effect && 'off' === $rotator_static_on_off && 'off' === $typing_effect ? esc_attr(" data-in-effect={$textillate_in_effect} data-out-effect={$textillate_out_effect} data-in-{$textillate_in_type}=true data-out-{$textillate_out_type}=true") : '' ),
				//textgif 13
				( 'off' !== $textgif_on_off ? ' textgif' : '' ),
				//fancy 14
				( 'off' !== $title_fancyline && 'after' == $title_before_after ? ' fancyline-title' : '' ),
				//underline 15
				( 'off' !== $title_underline_on_off ? esc_attr( " $title_underline_style dwd-title-underline" ) : '' )
			);
		}

	}

		//border radius
		if ( ! empty( $border_radius ) ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio, %%order_class%%.dwd-aio .dwd-background-image, %%order_class%%.dwd-aio .gradient',
				'declaration' => sprintf(
					'-moz-border-radius: %1$s; -webkit-border-radius: %1$s; border-radius: %1$s;',
					esc_html( $border_radius )
				),
			) );
		}

		if ( $img_src !== '' && ! empty( $border_radius ) ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
				'declaration' => sprintf(
					'z-index:%1$s;',
					'1'
				),
			) );
		}

		if ( $img_src !== '' && ! empty( $border_radius ) ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
				'declaration' => sprintf(
					'-moz-border-radius: %1$s; -webkit-border-radius: %1$s; border-radius: %1$s; z-index:1;',
					esc_html( $border_radius )
				),
			) );
		}

		//title effect
		if ( '' !== $typing_effect_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_aio_container span.dwd-typing',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $typing_effect_color )
				),
			) );
		}

		if ( '' !== $typing_cursor ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_aio_container span.typed-cursor',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $typing_cursor )
				),
			) );
		}

		if ( '' !== $rotator_effect_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_aio_container span.dwd-rotator',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $rotator_effect_color )
				),
			) );
		}

		if ( '' !== trim( $image ) || '' !== $font_icon ) {
			if ( 'off' === $use_icon ) {
				$image = sprintf(
					'<img src="%1$s" alt="%2$s" class="%3$s%4$s"%5$s />',
					esc_url( $image ),
					esc_attr( $alt ),
					//esc_attr( " $animation" ), hide for now
					( 'off' === $icon_animation_reveal ? esc_attr( "$animation animated" ) : '' ),
					//added 4
					( 'off' !== $icon_animation_reveal ? esc_attr( " dwd-animation" ) : '' ),
					( 'off' !== $icon_animation_reveal ? esc_attr( " data-dwd-animation={$animation} data-dwd-animation-delay={$icon_animation_speed}s" ) : '' )
				);
			} else {
				$icon_style = sprintf( 'color: %1$s;', esc_attr( $icon_color ) );

				if ( 'on' === $use_circle ) {
					$icon_style .= sprintf( ' background-color: %1$s;', esc_attr( $circle_color ) );

					if ( 'on' === $use_circle_border ) {
						$icon_style .= sprintf( ' border-color: %1$s;', esc_attr( $circle_border_color ) );
					}
				}

				$image = sprintf(
					'<span class="et-pb-icon%2$s%3$s%4$s%6$s%8$s"%7$s style="%5$s">%1$s</span>',
					esc_attr( et_pb_process_font_icon( $font_icon ) ),
					//esc_attr( " animated $animation" ), hide for now
					( 'off' === $icon_animation_reveal ? esc_attr( " $animation animated" ) : '' ),
					( 'on' === $use_circle ? ' et-pb-icon-circle' : '' ),
					( 'on' === $use_circle && 'on' === $use_circle_border ? ' et-pb-icon-circle-border' : '' ),
					$icon_style,
					//added 6
					( 'off' !== $icon_animation_reveal ? esc_attr( " dwd-animation" ) : '' ),
					( 'off' !== $icon_animation_reveal ? esc_attr( " data-dwd-animation={$animation} data-dwd-animation-delay={$icon_animation_speed}s" ) : '' ),
					//icon hover 8
					('off' !== $icon_hover_on_off ? esc_attr(" dwd-icon-hover {$icon_hover_style}") : '')
				);
			}

			$image = sprintf(
				'<div class="et_pb_main_blurb_image%2$s%3$s">%1$s</div>',
				( '' !== $url
					? sprintf(
						'<a href="%1$s"%3$s>%2$s</a>',
						esc_url( $url ),
						$image,
						( 'on' === $url_new_window ? ' target="_blank"' : '' )
					)
					: $image
				),
				//2
				esc_attr( " dwd-icon-alignment-{$icon_alignment}" ),
				( 'on' === $title_fancyline ? ' fancyline-mb' : '' )
			);
		}
		//overlay gradient for fulloverlay
		if ( 'on' === $overlay_gradient && 'full_overlay' === $bg_overlay_style && 'top-to-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .gradient',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//left-to-right
		if ( 'on' === $overlay_gradient && 'full_overlay' === $bg_overlay_style && 'left-to-right' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .gradient',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to rigjt, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//radial
		if ( 'on' === $overlay_gradient && 'full_overlay' === $bg_overlay_style && 'radial' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .gradient',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal top
		if ( 'on' === $overlay_gradient && 'full_overlay' === $bg_overlay_style && 'diagonal-top' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .gradient',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal bottom
		if ( 'on' === $overlay_gradient && 'full_overlay' === $bg_overlay_style && 'diagonal-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .gradient',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}

		//overlay gradient for boxoverlay with borderwrap
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'top-to-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//left-to-right
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'left-to-right' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to rigjt, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//radial
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'radial' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal top
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'diagonal-top' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal bottom
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'diagonal-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}

		//overlay boxoverlay on load
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'top-to-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-box-overlay .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//left-to-right
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'left-to-right' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-box-overlay .et_pb_blurb_content:before',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to rigjt, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//radial
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'radial' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-box-overlay .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal top
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'diagonal-top' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-box-overlay .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal bottom
		if ( 'on' === $overlay_gradient && 'box_overlay' === $bg_overlay_style && 'diagonal-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-box-overlay .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}

		//overlay gradient for boxoverlay hide content
		if ( 'on' === $overlay_gradient && 'on' === $hide_content && 'box_overlay' === $bg_overlay_style && 'top-to-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-hide-content .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//left-to-right
		if ( 'on' === $overlay_gradient && 'on' === $hide_content && 'box_overlay' === $bg_overlay_style && 'left-to-right' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-hide-content .et_pb_blurb_content:before',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to rigjt, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//radial
		if ( 'on' === $overlay_gradient && 'on' === $hide_content && 'box_overlay' === $bg_overlay_style && 'radial' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-hide-content .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal top
		if ( 'on' === $overlay_gradient && 'on' === $hide_content && 'box_overlay' === $bg_overlay_style && 'diagonal-top' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-hide-content .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}
		//diagonal bottom
		if ( 'on' === $overlay_gradient && 'on' === $hide_content && 'box_overlay' === $bg_overlay_style && 'diagonal-bottom' == $overlay_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-hide-content .et_pb_blurb_content:before',
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
					esc_html( $overlay_gradient_color_one ),
					esc_html( $overlay_gradient_color_two )
				),
			) );
		}

		//bg gradient
		if ( 'on' === $use_background_gradient && 'top-to-bottom' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
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
		if ( 'on' === $use_background_gradient && 'left-to-right' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
				'declaration' => sprintf(
					'background: %1$s;
					background: -moz-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -webkit-gradient(left top, right top, color-stop(0%%, %1$s), color-stop(100%%, %2$s));
					background: -webkit-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -o-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: -ms-linear-gradient(left, %1$s 0%%, %2$s 100%%);
					background: linear-gradient(to rigjt, %1$s 0%%, %2$s 100%%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="%1$s", endColorstr="%2$s", GradientType=0 );
					',
					esc_html( $background_gradient_color_one ),
					esc_html( $background_gradient_color_two )
				),
			) );
		}
		//radial
		if ( 'on' === $use_background_gradient && 'radial' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
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
		if ( 'on' === $use_background_gradient && 'diagonal-top' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
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
		if ( 'on' === $use_background_gradient && 'diagonal-bottom' == $background_gradient_type ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio',
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

		if ( '' !== $img_define_height_tablet || '' !== $img_define_height_phone || '' !== $img_define_height ) {
			$img_define_height_responsive_active = et_pb_get_responsive_status( $img_define_height_last_edited );
			$bg_img_height_values = array(
				'desktop' => $img_define_height,
				'tablet'  => $img_define_height_responsive_active ? $img_define_height_tablet : '',
				'phone'   => $img_define_height_responsive_active ? $img_define_height_phone : '',
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $bg_img_height_values, '%%order_class%%.dwd-aio .et_pb_blurb_content figure', 'height', $function_name );

		}

		// fancyline before
		if ( 'on' == $fancyline_styles_on_off && '' !== $fancyline_color && 'on' == $title_fancyline && 'before' == $title_before_after ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .fancyline:before',
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

			et_pb_generate_responsive_css( $fancyline_width_values, '%%order_class%%.dwd-aio .fancyline:before', 'width', $function_name, $additional_css );

			$fancyline_height_responsive_active = et_pb_get_responsive_status( $fancyline_height_last_edited );
			$fancyline_height_values = array(
				'desktop' => $fancyline_height,
				'tablet'   => $fancyline_width_responsive_active ? $fancyline_height_tablet : '' ,
				'phone'   => $fancyline_height_responsive_active ? $fancyline_height_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_height_values, '%%order_class%%.dwd-aio .fancyline:before', 'height', $function_name, $additional_css );

			$fancyline_margin_top_responsive_active = et_pb_get_responsive_status( $fancyline_margin_top_last_edited );
			$fancyline_margin_top_values = array(
				'desktop' => $fancyline_margin_top,
				'tablet'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_tablet : '' ,
				'phone'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_top_values, '%%order_class%%.dwd-aio .fancyline', 'margin-top', $function_name, $additional_css );

			$fancyline_margin_bottom_responsive_active = et_pb_get_responsive_status( $fancyline_margin_bottom_last_edited );
			$fancyline_margin_bottom_values = array(
				'desktop' => $fancyline_margin_bottom,
				'tablet'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_tablet : '' ,
				'phone'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_bottom_values, '%%order_class%%.dwd-aio .fancyline', 'margin-bottom', $function_name, $additional_css );
		}

		// fancyline after
		if ( 'on' == $fancyline_styles_on_off && '' !== $fancyline_color && 'on' == $title_fancyline && 'after' == $title_before_after ) {

			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .fancyline:after',
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

			et_pb_generate_responsive_css( $fancyline_width_values, '%%order_class%%.dwd-aio .fancyline:after', 'width', $function_name, $additional_css );

			$fancyline_height_responsive_active = et_pb_get_responsive_status( $fancyline_height_last_edited );
			$fancyline_height_values = array(
				'desktop' => $fancyline_height,
				'tablet'   => $fancyline_height_responsive_active ? $fancyline_height_tablet : '' ,
				'phone'   => $fancyline_height_responsive_active ? $fancyline_height_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_height_values, '%%order_class%%.dwd-aio .fancyline:after', 'height', $function_name, $additional_css );

			$fancyline_margin_top_responsive_active = et_pb_get_responsive_status( $fancyline_margin_top_last_edited );
			$fancyline_margin_top_values = array(
				'desktop' => $fancyline_margin_top,
				'tablet'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_tablet : '' ,
				'phone'   => $fancyline_margin_top_responsive_active ? $fancyline_margin_top_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_top_values, '%%order_class%%.dwd-aio .fancyline', 'margin-top', $function_name, $additional_css );

			$fancyline_margin_bottom_responsive_active = et_pb_get_responsive_status( $fancyline_margin_bottom_last_edited );
			$fancyline_margin_bottom_values = array(
				'desktop' => $fancyline_margin_bottom,
				'tablet'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_tablet : '' ,
				'phone'   => $fancyline_margin_bottom_responsive_active ? $fancyline_margin_bottom_phone : '' ,
			);

			et_pb_generate_responsive_css( $fancyline_margin_bottom_values, '%%order_class%%.dwd-aio .fancyline', 'margin-bottom', $function_name, $additional_css );
		}

		//Title Underline
		if ( 'on' === $title_underline_style_adv && '' !== $title_underline_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .dwd-title-underline:hover:before',
				'declaration' => sprintf(
					'background: %1$s;',
					esc_html( $title_underline_color )
				),
			) );

			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .dwd-title-underline.center-out:before',
				'declaration' => sprintf(
					'background: %1$s;',
					esc_html( $title_underline_color )
				),
			) );

			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-title-underline-hover:hover .dwd-title-underline:before',
				'declaration' => sprintf(
					'background: %1$s;',
					esc_html( $title_underline_color )
				),
			) );

			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-title-underline-hover:hover .dwd-title-underline.center-out:before',
				'declaration' => sprintf(
					'background: %1$s;',
					esc_html( $title_underline_color )
				),
			) );
		}

		//Title Underline
		if ( 'on' === $title_underline_style_adv && '' !== $title_underline_height ) {

			$title_underline_height_responsive_active = et_pb_get_responsive_status( $title_underline_height_last_edited );
			$title_underline_height_values = array(
				'desktop' => $title_underline_height,
				'tablet'   => $title_underline_height_responsive_active ? $title_underline_height_tablet : '' ,
				'phone'   => $title_underline_height_responsive_active ? $title_underline_height_phone : '' ,
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $title_underline_height_values, '%%order_class%%.dwd-aio .dwd-title-underline:before', 'height', $function_name, $additional_css );
			et_pb_generate_responsive_css( $title_underline_height_values, '%%order_class%%.dwd-aio .dwd-title-underline', 'padding-bottom', $function_name, $additional_css );
		}

		//Wrapper Border && '' !== $wrapper_border_width && '' !== $wrapper_border_color
		if ( 'off' !== $adv_wrapper_border ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before',
				'declaration' => sprintf(
					'
					border-color: %1$s;
					',
					esc_html( $wrapper_border_color )
				),
			) );
		}

		if ( '' !== $wrapper_border_width_tablet || '' !== $wrapper_border_width_phone || '' !== $wrapper_border_width ) {
			$wrapper_border_width_responsive_active = et_pb_get_responsive_status( $wrapper_border_width_last_edited );
			$wrapper_border_width_values = array(
				'desktop' => $wrapper_border_width,
				'tablet'  => $wrapper_border_width_responsive_active ? $wrapper_border_width_tablet : '',
				'phone'   => $wrapper_border_width_responsive_active ? $wrapper_border_width_phone : '',
			);

			$additional_css = ' !important;';

			et_pb_generate_responsive_css( $wrapper_border_width_values, '%%order_class%%.dwd-aio.dwd-border-wrap .et_pb_blurb_content:before', 'border-width', $function_name );

		}

		//AIO Wrap content
		if ( '' !== $aio_wrap_content_bg ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .aio-wrap',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $aio_wrap_content_bg )
				),
			) );
		}
		//Alternative title
		if ( 'off' !== $alternative_hover_content_on_off && '' !== $alternative_hover_bg ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .dwd-alt-title .dwd-alt-inner',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $alternative_hover_bg )
				),
			) );
		}
		//button one hover
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-right' == $button_one_sb_hover_style or 'hvr-bubble-right' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-left-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-left' == $button_one_sb_hover_style or 'hvr-bubble-left' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-right-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-top' == $button_one_sb_hover_style or 'hvr-bubble-top' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-bottom-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_one_sb_hover_style_color && 'hvr-bubble-float-bottom' == $button_one_sb_hover_style or 'hvr-bubble-bottom' == $button_one_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_one.et_pb_button:before',
				'declaration' => sprintf(
					'border-top-color: %1$s;',
					esc_html( $button_one_sb_hover_style_color )
				),
			) );
		}
		//button two hover
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-right' == $button_two_sb_hover_style or 'hvr-bubble-right' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-left-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-left' == $button_two_sb_hover_style or 'hvr-bubble-left' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-right-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-top' == $button_two_sb_hover_style or 'hvr-bubble-top' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-bottom-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		if ( '' !== $button_two_sb_hover_style_color && 'hvr-bubble-float-bottom' == $button_two_sb_hover_style or 'hvr-bubble-bottom' == $button_two_sb_hover_style ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%%.dwd-aio .et_pb_promo_button.et_pb_button_two.et_pb_button:before',
				'declaration' => sprintf(
					'border-top-color: %1$s;',
					esc_html( $button_two_sb_hover_style_color )
				),
			) );
		}
		//Button
		$button_output = '';
		if ( 'off' !== $button_on_off && '' !== $button_text ) {
			$button_output .= sprintf('<a class="et_pb_promo_button et_pb_button et_pb_button_one%5$s%6$s%7$s%9$s%10$s%11$s%12$s" href="%1$s"%3$s%4$s%8$s>%2$s</a>',
				esc_url( $button_url ),
				esc_html( $button_text ),
				( 'on' === $url_new_window ? ' target="_blank"' : '' ),
				'' !== $custom_icon_1 && 'on' === $button_custom_1 ? sprintf(
					' data-icon="%1$s"',
					esc_attr( et_pb_process_font_icon( $custom_icon_1 ) )
				) : '',
				'' !== $custom_icon_1 && 'on' === $button_custom_1 ? ' et_pb_custom_button_icon' : '',
				( 'off' !== $popup_video_on_off ? ' dwd-popup-video' : '' ),
				//%7$s
				( 'on' === $button_one_animation_on_off && 'off' !== $button_one_animation_reveal ? ' dwd-animation' : '' ),
				//%8$s
				( 'on' === $button_one_animation_on_off && 'on' === $button_one_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$button_one_animation} data-dwd-animation-delay={$button_one_animation_speed}s" ) : '' ),
				//%9$s
				( 'off' !== $button_one_animation_on_off && 'off' !== $button_one_animation_reveal ? '' : esc_attr( " $button_one_animation animated" ) ),
				//%10$s
				( 'off' !== $button_mobile_fullwidth ? ' dwd-mobile-fullwidth' : '' ),
				//11
				( 'on' === $button_one_hover_effect_on_off && 'off' !== $button_one_twod_hover_on_off ? esc_attr( " $button_one_twod_hover_style" ) : '' ),
				//12
				( 'on' === $button_one_hover_effect_on_off && 'off' !== $button_one_sb_hover_on_off ? esc_attr( " $button_one_sb_hover_style dwd-btn-hover" ) : '' ),
				( 'off' !== $popup_video_on_off ? ' dwd-popup-video' : '' )
			);
		}

		if ( 'off' !== $button_on_off && '' !== $button_text_two ) {
			$button_output .= sprintf('<a class="et_pb_promo_button et_pb_button et_pb_button_two%5$s%6$s%7$s%9$s%10$s%11$s%12$s" href="%1$s"%3$s%4$s%6$s%8$s>%2$s</a>',
				esc_url( $button_url_two ),
				esc_html( $button_text_two ),
				( 'on' === $url_new_window ? ' target="_blank"' : '' ),
				'' !== $custom_icon_2 && 'on' === $button_custom_2 ? sprintf(
					' data-icon="%1$s"',
					esc_attr( et_pb_process_font_icon( $custom_icon_2 ) )
				) : '',
				'' !== $custom_icon_2 && 'on' === $button_custom_2 ? ' et_pb_custom_button_icon' : '',
				( 'off' !== $popup_video_on_off_two ? ' dwd-popup-video' : '' ),
				//%7$s
				( 'on' === $button_two_animation_on_off && 'off' !== $button_two_animation_reveal ? ' dwd-animation' : '' ),
				//%8$s
				( 'on' === $button_two_animation_on_off && 'on' === $button_two_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$button_two_animation} data-dwd-animation-delay={$button_two_animation_speed}s" ) : '' ),
				//%9$s
				( 'off' !== $button_two_animation_on_off && 'off' !== $button_two_animation_reveal ? '' : esc_attr( " $button_two_animation animated" ) ),
				//%10$s
				( 'off' !== $button_mobile_fullwidth ? ' dwd-mobile-fullwidth' : '' ),
				//11
				( 'on' === $button_two_hover_effect_on_off && 'off' !== $button_two_twod_hover_on_off ? esc_attr( " $button_two_twod_hover_style" ) : '' ),
				//12
				( 'on' === $button_two_hover_effect_on_off && 'off' !== $button_two_sb_hover_on_off ? esc_attr( " $button_two_sb_hover_style dwd-btn-hover" ) : '' )
			);
		}

		$class = " et_pb_module et_pb_bg_layout_{$background_layout} et_pb_text_align_{$text_orientation}";

		$output = sprintf(
			'<div%5$s class="et_pb_blurb dwd-aio%4$s%6$s%7$s%14$s%15$s%19$s%20$s%21$s%22$s%23$s%24$s%25$s%26$s%27$s%28$s%33$s%34$s%35$s%37$s%42$s%43$s%44$s%46$s%47$s%49$s%52$s%53$s%54$s%57$s%58$s%59$s"%45$s%48$s%50$s>
				<div class="dwd-after-wrap%36$s">
					%29$s
					%60$s
					%38$s
					<div class="et_pb_blurb_content%39$s%41$s"%40$s>
						<figure>
							<div class="aio-wrap">
								<div class="aio-wrap-inner%51$s">
									%2$s
									<div class="et_pb_aio_container%9$s"%10$s%11$s%12$s%13$s%16$s%17$s%32$s>
										%55$s
										%30$s
										%3$s
										%56$s
										%31$s
										%8$s
									</div>
								</div>
							</div>
						</figure>
					</div> <!-- .et_pb_blurb_content -->
				</div>
			</div> <!-- .dwd-aio -->',
			$this->shortcode_content,
			$image,
			$title,
			esc_attr( $class ),
			( '' !== $module_id ? sprintf( ' id="%1$s"', esc_attr( $module_id ) ) : '' ),
			( '' !== $module_class ? sprintf( ' %1$s', esc_attr( $module_class ) ) : '' ),
			sprintf( ' et_pb_blurb_position_%1$s', esc_attr( $icon_placement ) ),
			//added button 8 && '' !== $url
			( '' !== $button_output ? $button_output : '' ),
			( '' !== $url && '' !== $button_text ? sprintf( ' aio_button_active' ) : '' ),
			//add effect data 10%
			( '' !== $typing_speed && 'off' !== $typing_effect ? esc_attr( " data-typing-speed={$typing_speed}" ) : '' ),
			( '' !== $typing_delay && 'off' !== $typing_effect ? esc_attr( " data-typing-delay={$typing_delay}" ) : '' ),
			( '' !== $typing_backdelay && 'off' !== $typing_effect ? esc_attr( " data-typing-backdelay={$typing_backdelay}" ) : '' ),
			//typing loop 13
			( 'off' !== $typing_loop && 'on' === $typing_effect ? esc_attr( " data-typing-loop=false" ) : esc_attr( " data-typing-loop=true" ) ),
			( 'off' !== $typing_effect ? ' et_pb_typing_effect' : '' ),
			//rotator 15
			( 'off' !== $rotator_effect ? ' et_pb_rotator_effect' : '' ),
			( '' !== $rotator_speed && 'off' !== $rotator_effect ? esc_attr( " data-rotator-speed={$rotator_speed}" ) : '' ),
			( '' !== $rotator_type && 'off' !== $rotator_effect ? esc_attr( " data-rotator-type={$rotator_type}" ) : '' ),
			//BG 18
			( '' !== $img_src ? sprintf( ' <img src="%1$s"%2$s class="img-cover" />', esc_url( $img_src ),
			( '' !== $img_alt ? esc_attr( " alt={$img_alt}" ) : '' )
			) : '' ),
			//bg effect 19
			( 'on' === $img_zoomin_hover && 'fast' === $img_zoomin_hover_style ? ' aio-image-zoom-hover' : '' ),
			( 'on' === $img_hover_effect && 'img_grayscale_hover' === $img_hover_effect_style ? ' aio-grayscale-hover' : '' ),
			( 'on' === $img_hover_effect && 'img_sepia_hover' == $img_hover_effect_style ? ' aio-sepia-hover' : '' ),
			( 'on' === $img_hover_effect && 'img_saturate_hover' == $img_hover_effect_style ? ' aio-saturate-hover' : '' ),
			( 'on' === $img_hover_effect && 'img_blur_hover' == $img_hover_effect_style ? ' aio-blur-hover' : '' ),
			( 'on' === $img_hover_effect ? ' aio-background' : '' ),
			//txt alignment 25
			( 'bottom' === $text_alignment ? ' alignment-bottom' : '' ),
			( 'center' === $text_alignment ? ' alignment-center' : '' ),
			( 'top' === $text_alignment ? ' alignment-top' : '' ),
			( 'on' === $use_background_gradient ? ' background-gradient' : '' ),
			//img 29
			( '' !== $img_src ? sprintf( ' <div class="dwd-background-image" style="background-image: url(%1$s); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>', esc_attr( $img_src ) ) : '' ),
			//background text
			( 'off' !== $use_background_text ? sprintf( '<span class="background-text">%1$s</span>', $background_text ) : '' ),
			//%31$s  //content
			( $this->shortcode_content ? sprintf( '<div class="%2$s%4$s"%3$s>%1$s</div>', $this->shortcode_content,
			( 'on' === $content_animation_on_off && 'off' !== $content_animation_reveal && 'off' === $whole_content_animation_on_off ? ' dwd-animation' : '' ),
			( 'on' === $content_animation_on_off && 'off' !== $content_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$content_animation} data-dwd-animation-delay={$content_animation_speed}s" ) : '' ),
			( 'off' !== $content_animation_on_off && 'off' === $content_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " $content_animation animated" ) : '' )
			) : '' ),
			//TextGif 32
			( 'off' !== $textgif_on_off && '' !== $textgif_bg ? esc_attr( " data-textgif-bg={$textgif_bg}" ) : '' ),
			( 'off' !== $use_wrapper_border ? esc_attr( " dwd-border-wrap border-wrapper-{$wrapper_style}" ) : '' ),
			//hidecontent 34
			( 'on' === $hide_content ? ' dwd-hide-content': '' ),
			( 'full_overlay' === $bg_overlay_style ? ' dwd-show-fulloverlay' : ' dwd-box-overlay' ),
			( 'off' !== $hover_content_effect && 'on' === $hide_content ? esc_attr( " dwd-hovercontent-effect $hover_content_effect" ) : '' ),
			( 'off' !== $overlay_gradient_hidden_show ? ' dwd-show-overlay-onload' : ' dwd-show-overlay-none' ),
			( 'off' !== $alternative_hover_content_on_off ? sprintf( '<div class="dwd-alt-title%2$s"><div class="dwd-alt-inner">%1$s%3$s</div></div>',
				( '' !== $alternative_hover_title ? sprintf( '<h4>%1$s</h4>', $alternative_hover_title ) : '' ),
				( '' !== $alternative_hover_alignment ? esc_attr( " dwd-alt-title-{$alternative_hover_alignment}" ) : '' ),
				( '' !== $alternative_hover_description ? sprintf( '<p>%1$s</p>', $alternative_hover_description ) : '' )
			) : '' ),
			//whole animation 39 - 41
			( 'off' !== $whole_content_animation_on_off ? esc_attr( " dwd-animation" ) : '' ),
			( 'off' !== $whole_content_animation_on_off && 'off' !== $whole_content_animation_reveal ? esc_attr( " data-dwd-animation={$whole_content_animation} data-dwd-animation-delay={$whole_content_animation_speed}s" ) : '' ),
			( 'off' !== $whole_content_animation_on_off && 'off' === $whole_content_animation_reveal ? esc_attr( " $whole_content_animation animated" ) : '' ),
			//hoverimage add for slow 42
			( 'on' === $img_zoomin_hover && 'slow' === $img_zoomin_hover_style ? ' aio-image-zoom-hover-slow' : '' ),
			//link as overlay on hover 43
			( 'on' === $overlay_gradient_only_hover ? ' dwd-overlay-hover' : '' ),
			//link as whole 44
			( 'off' !== $use_whole_link_on_off ? ' dwd-whole-link' : '' ),
			( '' !== $url ? esc_attr( " data-dwd-link={$url} href={$url}") : '' ),
			( 'on' === $url_new_window ? ' dwd-new-window' : ''),
			( 'off' !== $use_whole_link_video_popup ? ' dwd-popup-video' : '' ),
			( 'off' !== $use_whole_link_video_popup ? esc_attr( " href={$whole_link_url}") : '' ),
			//underline whole div 49
			( 'off' !== $title_underline_whole_div ? ' dwd-title-underline-hover' : '' ),
			( '' !== $whole_link_url ? esc_attr( " data-dwd-video={$whole_link_url}") : '' ),
			//border wrap content 51
			( 'off' !== $use_wrapper_border ? ' border-wrapper' : '' ),
			( 'off' !== $scroll_fade_column_on_off ? ' dwd-sm-fade' : '' ),
			//unhover overlay 53
			( 'off' !== $overlay_gradient_unoverlay_on_hover ? ' dwd-unhover-overlay-onload' : ' dwd-unhover' ),
			//Shadow 54
			( 'off' !== $shadow_on_off ? esc_attr( " $shadow_type") : '' ),
			//fancy before 55
			( 'off' !== $title_fancyline && 'before' == $title_before_after ? sprintf( ' <hr class="fancyline%1$s%2$s%3$s%5$s"%4$s></hr>',
				esc_attr( " fancyline_{$title_before_after}" ),
				esc_attr( " fancyline_text_{$title_fancy_orientation}" ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? ' dwd-animation' : '' ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$title_animation} data-dwd-animation-delay={$title_animation_speed}s" ) : '' ),
				( 'off' !== $title_animation_on_off && 'off' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( "$title_animation animated" ) : '' )
			) : '' ),
			//fancy after 56
			( 'off' !== $title_fancyline && 'after' == $title_before_after ? sprintf( ' <hr class="fancyline%1$s%2$s%3$s%5$s"%4$s></hr>',
				esc_attr( " fancyline_{$title_before_after}" ),
				esc_attr( " fancyline_text_{$title_fancy_orientation}" ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? ' dwd-animation' : '' ),
				( 'on' === $title_animation_on_off && 'on' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( " data-dwd-animation={$title_animation} data-dwd-animation-delay={$title_animation_speed}s" ) : '' ),
				( 'off' !== $title_animation_on_off && 'off' === $title_animation_reveal && 'off' === $whole_content_animation_on_off ? esc_attr( "$title_animation animated" ) : '' )
			) : '' ),
			//add on for image filter 57 - 59
			( 'on' === $img_hover_effect && 'img_brightness_hover' == $img_hover_effect_style ? ' aio-brightness-hover' : '' ),
			( 'on' === $img_hover_effect && 'img_contrast_hover' == $img_hover_effect_style ? ' aio-contrast-hover' : '' ),
			( 'on' === $img_hover_effect && 'img_invert_hover' == $img_hover_effect_style ? ' aio-invert-hover' : '' ),
			//gradient 60
			( 'off' !== $overlay_gradient ? sprintf( '<span class="gradient"></span>' ) : '' )
			//ended
		);
		//Animation
    	if (wp_script_is( 'dwd-animate', 'enqueued' )) {
    		return;
	    } else {
	    	wp_enqueue_style( 'dwd-animate-s' );
	    }
		if ( $popup_video_on_off == 'on' or $popup_video_on_off_two == 'on' or $use_whole_link_video_popup == 'on') {
		    wp_enqueue_script( 'dwd-video-popup-start-s' );
		}
		//typing
		if( $typing_effect == 'on' ) {
			$handle = 'dwd-typed';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-typed-load-s' );
		    } else {
		    	wp_enqueue_script( 'dwd-typed-s' );
		    	wp_enqueue_script( 'dwd-typed-load-s' );
		    }
		}
		//rotator
		if ( $rotator_effect == 'on' ) {
			$handle = 'dwd-morptext';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-textrotator-s' );
		    } else {
		    	wp_enqueue_script( 'dwd-morphext-s' );
		    	wp_enqueue_script( 'dwd-textrotator-s' );
		    }
		}
		//textillate
		if ( $textillate_effect == 'on' ) {
			$handle = 'dwd-textillate';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-textillate-start-s' );
		    } else {
		    	wp_enqueue_script( 'dwd-lettering-s' );
		    	wp_enqueue_script( 'dwd-textillate-s' );
		    	wp_enqueue_script( 'dwd-textillate-start-s' );
		    }
		}
		//textgif
		if ( $textgif_on_off == 'on' ) {
			$handle = 'dwd-textgif';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		wp_enqueue_script( 'dwd-textgif-start-s' );
		    } else {
		    	wp_enqueue_script( 'dwd-textgif-s' );
		    	wp_enqueue_script( 'dwd-textgif-start-s' );
		    }
		}
		//whole link
		if ( $use_whole_link_on_off === 'on') {
			wp_enqueue_script( 'dwd-whole-link-s' );
		}
		//hover button
		if ( $button_one_hover_effect_on_off == 'on' or $button_two_hover_effect_on_off == 'on' ) {
			$handle = 'dwd-hover-button';
			$list = 'enqueued';
		    	if (wp_script_is( $handle, $list )) {
		    		return;
		    } else {
		    	wp_enqueue_style( 'dwd-hover-button-s' );
		    }
		}
		if ( $button_one_hover_effect_on_off == 'on' or $button_two_hover_effect_on_off == 'on') {
		    wp_enqueue_script( 'dwd-hover-button-s-js' );
		}
		if ( $scroll_fade_column_on_off == 'on' ) {
		    $handle = 'dwd-scrollmagic';
			$list = 'enqueued';
	    	if (wp_script_is( $handle, $list )) {
	    		wp_enqueue_script( 'dwd-tweenmax-s' );
	    		wp_enqueue_script( 'dwd-animation-gsap-s' );
	    		wp_enqueue_script( 'dwd-scroll-fading-s' );
		    } else {
		    	wp_enqueue_script( 'dwd-scrollmagic-s' );
		    	wp_enqueue_script( 'dwd-tweenmax-s' );
	    		wp_enqueue_script( 'dwd-animation-gsap-s' );
	    		wp_enqueue_script( 'dwd-scroll-fading-s' );
		    }
		}
		
		return $output;
	}
}
$et_builder_module_all_in_one = new ET_Builder_Module_ALL_IN_ONE();
add_shortcode( 'et_pb_aio_extended', array($et_builder_module_all_in_one, '_shortcode_callback') );