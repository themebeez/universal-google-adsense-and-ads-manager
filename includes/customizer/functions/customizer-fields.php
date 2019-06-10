<?php

$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

if( ! function_exists( 'universal_google_adsense_and_ads_manager_panel_declaration' ) ) {

	function universal_google_adsense_and_ads_manager_panel_declaration() {

		$panels = array(
			array(
				'id' => 'eaam',
				'title' => esc_html__( 'Universal Google AdSense &amp; Ad Manager', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'priority' => 300,
			),
		);

		if( !empty( $panels ) ) {

			foreach( $panels as $panel ) {

				universal_google_adsense_and_ads_manager_add_panel( $panel['id'], $panel['title'], $panel['description'], $panel['priority'] );
			}
		}
	}
}
universal_google_adsense_and_ads_manager_panel_declaration();


if( ! function_exists( 'universal_google_adsense_and_ads_manager_section_declaration' ) ) {

	function universal_google_adsense_and_ads_manager_section_declaration() {

		$sections = array(
			array(
				'id' => 'blog_page_ad',
				'title' => esc_html__( 'Blog Page', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'eaam',
				'priority' => 1,
			),
			array(
				'id' => 'archive_page_ad',
				'title' => esc_html__( 'Archive Page', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'eaam',
				'priority' => 1,
			),
			array(
				'id' => 'single_ad',
				'title' => esc_html__( 'Single Post/Page', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'eaam',
				'priority' => 1,
			),
			array(
				'id' => 'sticky_header_ad',
				'title' => esc_html__( 'Sticky Header Ads', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'eaam',
				'priority' => 1,
			),
			array(
				'id' => 'sticky_footer_ad',
				'title' => esc_html__( 'Sticky Footer Ads', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'eaam',
				'priority' => 1,
			),
			array(
				'id' => 'header_footer_scripts',
				'title' => esc_html__( 'Header/Footer Scripts', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'eaam',
				'priority' => 1,
			),
		);

		if( !empty( $sections ) ) {

			foreach( $sections as $section ) {

				universal_google_adsense_and_ads_manager_add_section( $section['id'], $section['title'], $section['description'], $section['panel'], $section['priority'] );
			}
		}

		if( class_exists( 'Woocommerce' ) ) {

			universal_google_adsense_and_ads_manager_add_section( 'woocommerce_sidebar', esc_html__( 'Woocommerce Sidebar', 'universal-google-adsense-and-ads-manager' ), '', 'woocommerce', '' );
		}
	}
}
universal_google_adsense_and_ads_manager_section_declaration();



/*******************************************************************************************************
******************************* Blog Page Control Fields Declaration ***********************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_ad_in_home', esc_html__( 'Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_home', esc_html__( 'Select Ad Alignment', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'home_ad_type', esc_html__( 'Select Ad Type', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_type_choices(), '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_image_field( 'home_custom_ad_image', esc_html__( 'Upload Ad Image', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'home_custom_ad_link', esc_html__( 'Insert Ad Link', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'home_ad_script_desk_n_tab', esc_html__( 'Insert Ad Script Code - For Large Devices', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'home_ad_script_mobile', esc_html__( 'Insert Ad Script Code - For Small Devices', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'home_ad_position', esc_html__( 'Select Ad Postion', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_position_choices(), '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'home_show_ad_after', esc_html__( 'Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'home_repeat_ad', esc_html__( 'Repeatedly Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'home_repeat_ad_for', esc_html__( 'Repeatedly Show Ad Content For N Times', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad', '', '', '' );
universal_google_adsense_and_ads_manager_add_number_field( 'home_repeat_ad_after', esc_html__( 'Repeatedly Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'home_enable_custom_css', esc_html__( 'Enable custom css and margin.', 'universal-google-adsense-and-ads-manager' ), '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'home_custom_css_class', esc_html__( 'Custom CSS Class', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Add CSS classes and separate them with a space.', 'universal-google-adsense-and-ads-manager' ), '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'home_ad_margin', esc_html__( 'Margin Around Ad', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Set margin around the Ad.', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_home_ad_padding_settings( 'home_ad_margin' ), 'blog_page_ad' );


/*******************************************************************************************************
******************************* Archive Page Control Fields Declaration ********************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_ad_in_archive', esc_html__( 'Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_archive', esc_html__( 'Select Ad Alignment', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'archive_ad_type', esc_html__( 'Select Ad Type', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_type_choices(), '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_image_field( 'archive_custom_ad_image', esc_html__( 'Upload Ad Image', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'archive_custom_ad_link', esc_html__( 'Insert Ad Link', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'archive_ad_script_desk_n_tab', esc_html__( 'Insert Ad Script Code - For Large Devices', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'archive_ad_script_mobile', esc_html__( 'Insert Ad Script Code - For Small Devices', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'archive_ad_position', esc_html__( 'Select Ad Postion', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_position_choices(), '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'archive_show_ad_after', esc_html__( 'Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'archive_repeat_ad', esc_html__( 'Repeatedly Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'archive_repeat_ad_for', esc_html__( 'Repeatedly Show Ad Content For N Times', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad', '', '', '' );
universal_google_adsense_and_ads_manager_add_number_field( 'archive_repeat_ad_after', esc_html__( 'Repeatedly Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'archive_enable_custom_css', esc_html__( 'Enable custom css and margin.', 'universal-google-adsense-and-ads-manager' ), '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'archive_custom_css_class', esc_html__( 'Custom CSS Class', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Add CSS classes and separate them with a space.', 'universal-google-adsense-and-ads-manager' ), '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'archive_ad_margin', esc_html__( 'Margin Around Ad', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Set margin around the Ad.', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_home_ad_padding_settings( 'archive_ad_margin' ), 'archive_page_ad' );


/*******************************************************************************************************
******************************* Single Post/Page Control Fields Declaration ****************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_ad_in_post_page', esc_html__( 'Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_post_page', esc_html__( 'Select Ad Alignment', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'post_page_ad_type', esc_html__( 'Select Ad Type', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_type_choices(), '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_image_field( 'post_page_custom_ad_image', esc_html__( 'Upload Ad Image', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'post_page_custom_ad_link', esc_html__( 'Insert Ad Link', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'post_page_ad_script_desk_n_tab', esc_html__( 'Insert Ad Script Code - For Large Devices', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'post_page_ad_script_mobile', esc_html__( 'Insert Ad Script Code - For Small Devices', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'post_page_ad_position', esc_html__( 'Select Ad Postion', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_single_ad_position_choices(), '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'post_page_show_ad_after', esc_html__( 'Show Ad Content After N Paragraphs', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'post_page_repeat_ad', esc_html__( 'Repeatedly Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'post_page_repeat_ad_for', esc_html__( 'Repeatedly Show Ad Content For N Times', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad', '', '', '' );
universal_google_adsense_and_ads_manager_add_number_field( 'post_page_repeat_ad_after', esc_html__( 'Repeatedly Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'post_page_enable_custom_css', esc_html__( 'Enable custom css and margin.', 'universal-google-adsense-and-ads-manager' ), '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'post_page_custom_css_class', esc_html__( 'Custom CSS Class', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Add CSS classes and separate them with a space.', 'universal-google-adsense-and-ads-manager' ), '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'post_page_ad_margin', esc_html__( 'Margin Around Ad', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Set margin around the Ad.', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_home_ad_padding_settings( 'post_page_ad_margin' ), 'single_ad' );


/*******************************************************************************************************
******************************* Sticky Header Ad Control Fields Declaration ****************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_sticky_ad_on_header', esc_html__( 'Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_header', esc_html__( 'Select Ad Alignment', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'header_ad_type', esc_html__( 'Select Ad Type', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_type_choices(), '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_image_field( 'header_custom_ad_image', esc_html__( 'Upload Ad Image', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'header_custom_ad_link', esc_html__( 'Insert Ad Link', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'header_ad_script_desk_n_tab', esc_html__( 'Insert Ad Script Code - For Large Devices', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'header_ad_script_mobile', esc_html__( 'Insert Ad Script Code - For Small Devices', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), '', 'sticky_header_ad' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'header_enable_custom_css', esc_html__( 'Enable custom css and margin.', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'header_custom_css_class', esc_html__( 'Custom CSS Class', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Add CSS classes and separate them with a space.', 'universal-google-adsense-and-ads-manager' ), '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'header_ad_margin', esc_html__( 'Margin Around Ad', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Set margin around the Ad.', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_home_ad_padding_settings( 'header_ad_margin' ), 'sticky_header_ad' );



/*******************************************************************************************************
******************************* Sticky Footer Ad Control Fields Declaration ****************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_sticky_ad_on_footer', esc_html__( 'Show Ad Content', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_footer', esc_html__( 'Select Ad Alignment', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'footer_ad_type', esc_html__( 'Select Ad Type', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_ad_type_choices(), '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_image_field( 'footer_custom_ad_image', esc_html__( 'Upload Ad Image', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'footer_custom_ad_link', esc_html__( 'Insert Ad Link', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'footer_ad_script_desk_n_tab', esc_html__( 'Insert Ad Script Code - For Large Devices', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'footer_ad_script_mobile', esc_html__( 'Insert Ad Script Code - For Small Devices', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), '', 'sticky_footer_ad' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'footer_enable_custom_css', esc_html__( 'Enable custom css and margin.', 'universal-google-adsense-and-ads-manager' ), '', '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'footer_custom_css_class', esc_html__( 'Custom CSS Class', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Add CSS classes and separate them with a space.', 'universal-google-adsense-and-ads-manager' ), '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'footer_ad_margin', esc_html__( 'Margin Around Ad', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Set margin around the Ad.', 'universal-google-adsense-and-ads-manager' ), '', universal_google_adsense_and_ads_manager_home_ad_padding_settings( 'footer_ad_margin' ), 'sticky_footer_ad' );


/*******************************************************************************************************
******************************* Header/Footer Scripts Control Fields Declaration ***********************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_textarea_field( 'header_script', esc_html__( 'Header Script', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Add your analytics code, meta tags for website ownership verification and any thing else that should go in the head tag of your website.', 'universal-google-adsense-and-ads-manager' ), '', 'header_footer_scripts' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'footer_script', esc_html__( 'Footer Script', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Any scripts and tags that should be added to your website footer.', 'universal-google-adsense-and-ads-manager' ), '', 'header_footer_scripts' );