<?php

$labels = array(

	'enable_ad' => esc_html__( 'Show Ad Content', 'universal-google-adsense-and-ads-manager' ),
	'ad_alignment' => esc_html__( 'Select Ad Alignment', 'universal-google-adsense-and-ads-manager' ),
	'ad_type' => esc_html__( 'Select Ad Type', 'universal-google-adsense-and-ads-manager' ),
	'ad_img' => esc_html__( 'Upload Ad Image', 'universal-google-adsense-and-ads-manager' ),
	'ad_link' => esc_html__( 'Insert Ad Link', 'universal-google-adsense-and-ads-manager' ),
	'desktop_tablet_adsense' => esc_html__( 'Insert Ad Script Code - For Large Devices', 'universal-google-adsense-and-ads-manager' ),
	'mobile_adsense' => esc_html__( 'Insert Ad Script Code - For Small Devices', 'universal-google-adsense-and-ads-manager' ),
	'ad_position' => esc_html__( 'Select Ad Postion', 'universal-google-adsense-and-ads-manager' ),
	'initial_ad_position_after_posts' => esc_html__( 'Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ),
	'initial_ad_position_after_paragraphs' => esc_html__( 'Show Ad Content After N Paragraphs', 'universal-google-adsense-and-ads-manager' ),
	'enable_ad_repeat' => esc_html__( 'Repeatedly Show Ad Content', 'universal-google-adsense-and-ads-manager' ),
	'repeat_for' => esc_html__( 'Repeatedly Show Ad Content For N Times', 'universal-google-adsense-and-ads-manager' ),
	'repeat_after_posts' => esc_html__( 'Repeatedly Show Ad Content After N Posts', 'universal-google-adsense-and-ads-manager' ),
	'repeat_after_paragraphs' => esc_html__( 'Repeatedly Show Ad Content After N Paragraphs', 'universal-google-adsense-and-ads-manager' ),
	'enable_css_margin' => esc_html__( 'Enable custom css and margin.', 'universal-google-adsense-and-ads-manager' ),
	'css_class' => esc_html__( 'Custom CSS Class', 'universal-google-adsense-and-ads-manager' ),
	'ad_margin' => esc_html__( 'Margin Around Ad', 'universal-google-adsense-and-ads-manager' ),
	'header_script' => esc_html__( 'Header Script', 'universal-google-adsense-and-ads-manager' ),
	'footer_script' => esc_html__( 'Footer Script', 'universal-google-adsense-and-ads-manager' ),
);

$descriptions = array(
	'css_class' => esc_html__( 'Add CSS classes and separate them with a space.', 'universal-google-adsense-and-ads-manager' ),
	'ad_margin' => esc_html__( 'Set margin around the Ad.', 'universal-google-adsense-and-ads-manager' ),
	'header_script' => esc_html__( 'Add your analytics code, meta tags for website ownership verification and any thing else that should go in the head tag of your website.', 'universal-google-adsense-and-ads-manager' ),
	'footer_script' => esc_html__( 'Any scripts and tags that should be added to your website footer.', 'universal-google-adsense-and-ads-manager' ),
);

$defaults = universal_google_adsense_and_ads_manager_get_default_theme_options();

if( ! function_exists( 'universal_google_adsense_and_ads_manager_panel_declaration' ) ) {

	function universal_google_adsense_and_ads_manager_panel_declaration() {

		$panels = array(
			array(
				'id' => 'ugaam',
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
				'panel' => 'ugaam',
				'priority' => 1,
			),
			array(
				'id' => 'archive_page_ad',
				'title' => esc_html__( 'Archive Page', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'ugaam',
				'priority' => 1,
			),
			array(
				'id' => 'single_ad',
				'title' => esc_html__( 'Single Post/Page', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'ugaam',
				'priority' => 1,
			),
			array(
				'id' => 'sticky_header_ad',
				'title' => esc_html__( 'Sticky Header Ads', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'ugaam',
				'priority' => 1,
			),
			array(
				'id' => 'sticky_footer_ad',
				'title' => esc_html__( 'Sticky Footer Ads', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'ugaam',
				'priority' => 1,
			),
			array(
				'id' => 'header_footer_scripts',
				'title' => esc_html__( 'Header/Footer Scripts', 'universal-google-adsense-and-ads-manager' ),
				'description' => '',
				'panel' => 'ugaam',
				'priority' => 1,
			),
		);

		if( !empty( $sections ) ) {

			foreach( $sections as $section ) {

				universal_google_adsense_and_ads_manager_add_section( $section['id'], $section['title'], $section['description'], $section['panel'], $section['priority'] );
			}
		}
	}
}
universal_google_adsense_and_ads_manager_section_declaration();



/*******************************************************************************************************
******************************* Blog Page Control Fields Declaration ***********************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_ad_in_home', $labels['enable_ad'], '', '', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_home', $labels['ad_alignment'], '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), 'universal_google_adsense_and_ads_manager_enabled_home_ad', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'home_ad_type', $labels['ad_type'], '', universal_google_adsense_and_ads_manager_ad_type_choices(), 'universal_google_adsense_and_ads_manager_enabled_home_ad', 'blog_page_ad' );

universal_google_adsense_and_ads_manager_add_image_field( 'home_custom_ad_image', $labels['ad_img'], '', 'universal_google_adsense_and_ads_manager_custom_home_ad', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'home_custom_ad_link', $labels['ad_link'], '', 'universal_google_adsense_and_ads_manager_custom_home_ad', 'blog_page_ad' );

universal_google_adsense_and_ads_manager_add_textarea_field( 'home_ad_script_desk_n_tab', $labels['desktop_tablet_adsense'], '', 'universal_google_adsense_and_ads_manager_adsense_home_ad', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'home_ad_script_mobile', $labels['mobile_adsense'], esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), 'universal_google_adsense_and_ads_manager_adsense_home_ad', 'blog_page_ad' );

universal_google_adsense_and_ads_manager_add_select_field( 'home_ad_position', $labels['ad_position'], '', universal_google_adsense_and_ads_manager_ad_position_choices(), 'universal_google_adsense_and_ads_manager_enabled_home_ad', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'home_show_ad_after', $labels['initial_ad_position_after_posts'], '', 'universal_google_adsense_and_ads_manager_ad_between_posts_in_home', 'blog_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'home_repeat_ad', $labels['enable_ad_repeat'], '', 'universal_google_adsense_and_ads_manager_ad_between_posts_in_home', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'home_repeat_ad_for', $labels['repeat_for'], '', 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_home', 'blog_page_ad', '', '', '' );
universal_google_adsense_and_ads_manager_add_number_field( 'home_repeat_ad_after', $labels['repeat_after_posts'], '', 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_home', 'blog_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'home_enable_custom_css', $labels['enable_css_margin'], '', 'universal_google_adsense_and_ads_manager_enabled_home_ad', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'home_custom_css_class', $labels['css_class'], $descriptions['css_class'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_home', 'blog_page_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'home_ad_margin', $labels['ad_margin'], $descriptions['ad_margin'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_home', 'blog_page_ad' );


/*******************************************************************************************************
******************************* Archive Page Control Fields Declaration ********************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_ad_in_archive', $labels['enable_ad'], '', '', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_archive', $labels['ad_alignment'], '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), 'universal_google_adsense_and_ads_manager_enabled_archive_ad', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'archive_ad_type', $labels['ad_type'], '', universal_google_adsense_and_ads_manager_ad_type_choices(), 'universal_google_adsense_and_ads_manager_enabled_archive_ad', 'archive_page_ad' );

universal_google_adsense_and_ads_manager_add_image_field( 'archive_custom_ad_image', $labels['ad_img'], '', 'universal_google_adsense_and_ads_manager_custom_archive_ad', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'archive_custom_ad_link', $labels['ad_link'], '', 'universal_google_adsense_and_ads_manager_custom_archive_ad', 'archive_page_ad' );

universal_google_adsense_and_ads_manager_add_textarea_field( 'archive_ad_script_desk_n_tab', $labels['desktop_tablet_adsense'], '', 'universal_google_adsense_and_ads_manager_adsense_archive_ad', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'archive_ad_script_mobile', $labels['mobile_adsense'], esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), 'universal_google_adsense_and_ads_manager_adsense_archive_ad', 'archive_page_ad' );

universal_google_adsense_and_ads_manager_add_select_field( 'archive_ad_position', $labels['ad_position'], '', universal_google_adsense_and_ads_manager_ad_position_choices(), 'universal_google_adsense_and_ads_manager_enabled_archive_ad', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'archive_show_ad_after', $labels['initial_ad_position_after_posts'], '', 'universal_google_adsense_and_ads_manager_ad_between_posts_in_archive', 'archive_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'archive_repeat_ad', $labels['enable_ad_repeat'], '', 'universal_google_adsense_and_ads_manager_ad_between_posts_in_archive', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'archive_repeat_ad_for', $labels['repeat_for'], '', 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_archive', 'archive_page_ad', '', '', '' );
universal_google_adsense_and_ads_manager_add_number_field( 'archive_repeat_ad_after', $labels['repeat_after_posts'], '', 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_archive', 'archive_page_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'archive_enable_custom_css', $labels['enable_css_margin'], '', 'universal_google_adsense_and_ads_manager_enabled_archive_ad', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'archive_custom_css_class', $labels['css_class'], $descriptions['css_class'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_archive', 'archive_page_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'archive_ad_margin', $labels['ad_margin'], $descriptions['ad_margin'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_archive', 'archive_page_ad' );


/*******************************************************************************************************
******************************* Single Post/Page Control Fields Declaration ****************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_ad_in_post_page', $labels['enable_ad'], '', '', 'single_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_post_page', $labels['ad_alignment'], '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), 'universal_google_adsense_and_ads_manager_enabled_post_page_ad', 'single_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'post_page_ad_type', $labels['ad_type'], '', universal_google_adsense_and_ads_manager_ad_type_choices(), 'universal_google_adsense_and_ads_manager_enabled_post_page_ad', 'single_ad' );

universal_google_adsense_and_ads_manager_add_image_field( 'post_page_custom_ad_image', $labels['ad_img'], '', 'universal_google_adsense_and_ads_manager_custom_post_page_ad', 'single_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'post_page_custom_ad_link', $labels['ad_link'], '', 'universal_google_adsense_and_ads_manager_custom_post_page_ad', 'single_ad' );

universal_google_adsense_and_ads_manager_add_textarea_field( 'post_page_ad_script_desk_n_tab', $labels['desktop_tablet_adsense'], '', 'universal_google_adsense_and_ads_manager_adsense_post_page_ad', 'single_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'post_page_ad_script_mobile', $labels['mobile_adsense'], esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), 'universal_google_adsense_and_ads_manager_adsense_post_page_ad', 'single_ad' );

universal_google_adsense_and_ads_manager_add_select_field( 'post_page_ad_position', $labels['ad_position'], '', universal_google_adsense_and_ads_manager_single_ad_position_choices(), 'universal_google_adsense_and_ads_manager_enabled_post_page_ad', 'single_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'post_page_show_ad_after', $labels['initial_ad_position_after_paragraphs'], '', 'universal_google_adsense_and_ads_manager_ad_between_posts_in_post_page', 'single_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'post_page_repeat_ad', $labels['enable_ad_repeat'], '', 'universal_google_adsense_and_ads_manager_ad_between_posts_in_post_page', 'single_ad' );
universal_google_adsense_and_ads_manager_add_number_field( 'post_page_repeat_ad_for', $labels['repeat_for'], '', 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_post_page', 'single_ad', '', '', '' );
universal_google_adsense_and_ads_manager_add_number_field( 'post_page_repeat_ad_after', $labels['repeat_after_paragraphs'], '', 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_post_page', 'single_ad', '', '', '' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'post_page_enable_custom_css', $labels['enable_css_margin'], '', 'universal_google_adsense_and_ads_manager_enabled_post_page_ad', 'single_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'post_page_custom_css_class', $labels['css_class'], $descriptions['css_class'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_post_page', 'single_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'post_page_ad_margin', $labels['ad_margin'], $descriptions['ad_margin'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_post_page', 'single_ad' );


/*******************************************************************************************************
******************************* Sticky Header Ad Control Fields Declaration ****************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_sticky_ad_on_header', $labels['enable_ad'], '', '', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_header', $labels['ad_alignment'], '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_header', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'header_ad_type', $labels['ad_type'], '', universal_google_adsense_and_ads_manager_ad_type_choices(), 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_header', 'sticky_header_ad' );

universal_google_adsense_and_ads_manager_add_image_field( 'header_custom_ad_image', $labels['ad_img'], '', 'universal_google_adsense_and_ads_manager_custom_header_ad', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'header_custom_ad_link', $labels['ad_link'], '', 'universal_google_adsense_and_ads_manager_custom_header_ad', 'sticky_header_ad' );

universal_google_adsense_and_ads_manager_add_textarea_field( 'header_ad_script_desk_n_tab', $labels['desktop_tablet_adsense'], '', 'universal_google_adsense_and_ads_manager_adsense_header_ad', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'header_ad_script_mobile', $labels['mobile_adsense'], esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), 'universal_google_adsense_and_ads_manager_adsense_header_ad', 'sticky_header_ad' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'header_enable_custom_css', $labels['enable_css_margin'], '', 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_header', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'header_custom_css_class', $labels['css_class'], $descriptions['css_class'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_header', 'sticky_header_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'header_ad_margin', $labels['ad_margin'], $descriptions['ad_margin'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_header', 'sticky_header_ad' );



/*******************************************************************************************************
******************************* Sticky Footer Ad Control Fields Declaration ****************************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_toggle_field( 'enable_sticky_ad_on_footer', $labels['enable_ad'], '', '', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'ad_alignment_in_footer', $labels['ad_alignment'], '', universal_google_adsense_and_ads_manager_ad_alignment_choices(), 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_footer', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_select_field( 'footer_ad_type', $labels['ad_type'], '', universal_google_adsense_and_ads_manager_ad_type_choices(), 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_footer', 'sticky_footer_ad' );

universal_google_adsense_and_ads_manager_add_image_field( 'footer_custom_ad_image', $labels['ad_img'], '', 'universal_google_adsense_and_ads_manager_custom_footer_ad', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_url_field( 'footer_custom_ad_link', $labels['ad_link'], '', 'universal_google_adsense_and_ads_manager_custom_footer_ad', 'sticky_footer_ad' );

universal_google_adsense_and_ads_manager_add_textarea_field( 'footer_ad_script_desk_n_tab', $labels['desktop_tablet_adsense'], '', 'universal_google_adsense_and_ads_manager_adsense_footer_ad', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'footer_ad_script_mobile', $labels['mobile_adsense'], esc_html__( 'If you want to show same Ad on mobiles as in desktop, paste the above code below ', 'universal-google-adsense-and-ads-manager' ), 'universal_google_adsense_and_ads_manager_adsense_footer_ad', 'sticky_footer_ad' );

universal_google_adsense_and_ads_manager_add_toggle_field( 'footer_enable_custom_css', $labels['enable_css_margin'], '', 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_footer', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_text_field( 'footer_custom_css_class', $labels['css_class'], $descriptions['css_class'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_footer', 'sticky_footer_ad' );
universal_google_adsense_and_ads_manager_add_responsive_dimension_field( 'footer_ad_margin', $labels['ad_margin'], $descriptions['ad_margin'], 'universal_google_adsense_and_ads_manager_custom_css_margin_in_footer',  'sticky_footer_ad' );


/*******************************************************************************************************
******************************* Header/Footer Scripts Control Fields Declaration ***********************
*******************************************************************************************************/
universal_google_adsense_and_ads_manager_add_textarea_field( 'header_script', $labels['header_script'], $descriptions['header_script'], '', 'header_footer_scripts' );
universal_google_adsense_and_ads_manager_add_textarea_field( 'footer_script', $labels['footer_script'], $descriptions['footer_script'], '', 'header_footer_scripts' );