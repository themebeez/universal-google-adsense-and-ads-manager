<?php
/**
 * Collection of reuseable customizer functions.
 *
 * @package Easy_Adsense_Ads_Manager
 */


/**
 *	Function to register new customizer panel
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_panel' ) ) {
	
	function universal_google_adsense_and_ads_manager_add_panel( $id, $title, $desc, $priority ) {

		global $wp_customize;

		$panel_id = 'universal_google_adsense_and_ads_manager_panel_' . $id;

		if( $priority == ''  ) {

			$priority = 10;
		}

		$wp_customize->add_panel( $panel_id,
			array(
				'title' => $title,
				'description' => $desc,
				'priority' => $priority,
			)
		);
	}	
}


/**
 *	Function to register new customizer section
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_section' ) ) {

	function universal_google_adsense_and_ads_manager_add_section( $id, $title, $desc, $panel, $priority ) {

		global $wp_customize;

		$section_id = 'universal_google_adsense_and_ads_manager_section_' . $id;

		$panel_id = 'universal_google_adsense_and_ads_manager_panel_' . $panel;

		$section_args = array(
			'title'	=> $title,
			'desciption' => $desc,
		);

		if( !empty( $panel ) ) {
			$section_args['panel'] = $panel_id;
		}

		if( !empty( $priority ) ) {
			$section_args['priority'] = $priority;
		}

		$wp_customize->add_section( $section_id, $section_args );
	}
}


/**
 *	Function to register new customizer text field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_text_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_text_field( $id, $label, $desc, $active_callback, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'description' => $desc,
			'type' => 'text',
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id, 
			array(
				'sanitize_callback'		=> 'sanitize_text_field',
				'default'				=> $defaults[$id],
				'capability'        => 'edit_theme_options',
			) 
		);	

		$wp_customize->add_control( $field_id, $control_args );
	}
}


/**
 *	Function to register new customizer textarea field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_textarea_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_textarea_field( $id, $label, $desc, $active_callback, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'description' => $desc,
			'type' => 'textarea',
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id, 
			array(
				'sanitize_callback'		=> 'sanitize_textarea_field',
				'default'				=> $defaults[$id],
				'capability'        => 'edit_theme_options',
			) 
		);	

		$wp_customize->add_control( $field_id, $control_args );
	}
}



/**
 *	Function to register new customizer number field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_number_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_number_field( $id, $label, $desc, $active_callback, $section, $max, $min, $step ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'description' => $desc,
			'type' => 'number',
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		if( !empty( $max ) && !empty( $min ) && !empty( $step ) ) {

			$control_args['input_attrs'] = array(
				'min' => $min,
				'max' => $max,
				'step' => $step
			);

			$wp_customize->add_setting( $field_id, 
				array(
				'default' => $defaults[$id],
				'sanitize_callback' => 'universal_google_adsense_and_ads_manager_sanitize_range',
				'capability'        => 'edit_theme_options',
				)
			);	

		} else {

			$wp_customize->add_setting( $field_id, 
				array(
					'default' => $defaults[$id],
					'sanitize_callback' => 'universal_google_adsense_and_ads_manager_sanitize_number',
					'capability'        => 'edit_theme_options',
				) 
			);	
		}		

		$wp_customize->add_control( $field_id, $control_args );
	}	
}


/**
 *	Function to register new customizer url field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_url_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_url_field( $id, $label, $desc, $active_callback, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'description' => $desc,
			'type' => 'url',
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id, 
			array(
				'sanitize_callback'		=> 'esc_url_raw',
				'default'				=> $defaults[$id],
				'capability'        => 'edit_theme_options',
			) 
		);	

		$wp_customize->add_control( $field_id, $control_args );
	}
}


/**
 *	Function to register new customizer toggle field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_toggle_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_toggle_field( $id, $label, $description, $active_callback, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label'				=> $label,
			'description'		=> $description,
			'type'				=> 'ios', // ios, light, flat
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id, 
			array(
				'sanitize_callback'		=> 'wp_validate_boolean',
				'default'				=> $defaults[$id],
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control( new Easy_Adsense_Ads_Manager_Customizer_Toggle_Control( $wp_customize, $field_id, $control_args ) );
	}
}


/**
 *	Function to register new customizer select field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_select_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_select_field( $id, $label, $desc, $choices, $active_callback, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'description' => $desc,
			'type' => 'select',
			'choices' => $choices,
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id,
			array(
				'sanitize_callback'		=> 'universal_google_adsense_and_ads_manager_sanitize_select',
				'default'				=> $defaults[$id],
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control( $field_id, $control_args );
	}
}



/**
 *	Function to register new customizer image field
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_image_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_image_field( $id, $label, $desc, $active_callback, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'desciption' => $desc,
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id, 
			array(
				'sanitize_callback'		=> 'esc_url_raw',
				'default'				=> $defaults[$id],
			)
		);

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $field_id, $control_args ) );
	}
}



/**
 * Function to register new customizer for box spacing
 */
if( ! function_exists( 'universal_google_adsense_and_ads_manager_add_responsive_dimension_field' ) ) {

	function universal_google_adsense_and_ads_manager_add_responsive_dimension_field( $id, $label, $desc, $active_callback, $setings, $section ) {

		global $wp_customize;

		$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

		$field_id = 'universal_google_adsense_and_ads_manager_field_'. $id;

		$section_id = 'universal_google_adsense_and_ads_manager_section_'. $section;

		$control_args = array(
			'label' => $label,
			'desciption' => $desc,
			'section' => $section_id,
		);

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		$wp_customize->add_setting( $field_id, 
			array(
				'sanitize_callback'		=> 'sanitize_text_field',
				'default'				=> $defaults[$id],
			)
		);

		$wp_customize->add_control( new Easy_Adsense_Ads_Manager_Responsive_Dimension_Control( $wp_customize, $field_id, $control_args ) );
	}
}