<?php
/*
 * Customizer Select Field's Choices
 */

if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_alignment_choices' ) ) {

	function universal_google_adsense_and_ads_manager_ad_alignment_choices() {

		return array( 
			'default' => esc_html__( 'None(Default)', 'universal-google-adsense-and-ads-manager' ),
			'left' => esc_html__( 'Left', 'universal-google-adsense-and-ads-manager' ),
			'right' => esc_html__( 'Right', 'universal-google-adsense-and-ads-manager' ),
			'center' => esc_html__( 'Center', 'universal-google-adsense-and-ads-manager' ),
		);
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_type_choices' ) ) {

	function universal_google_adsense_and_ads_manager_ad_type_choices() {

		return array( 
			'custom_ad' => esc_html__( 'Custom Ad', 'universal-google-adsense-and-ads-manager' ),
			'adsense_ad' => esc_html__( 'AdSense Ad', 'universal-google-adsense-and-ads-manager' ),
		);
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_position_choices' ) ) {

	function universal_google_adsense_and_ads_manager_ad_position_choices() {

		return array( 
			'before_first_post' => esc_html__( 'Before First Post', 'universal-google-adsense-and-ads-manager' ),
			'after_last_post' => esc_html__( 'After Last Post', 'universal-google-adsense-and-ads-manager' ),
			'between_posts' => esc_html__( 'Between Posts', 'universal-google-adsense-and-ads-manager' ),
		);
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_single_ad_position_choices' ) ) {

	function universal_google_adsense_and_ads_manager_single_ad_position_choices() {

		return array( 
			'before_post_content' => esc_html__( 'Before Post Content', 'universal-google-adsense-and-ads-manager' ),
			'after_post_content' => esc_html__( 'After Post Content', 'universal-google-adsense-and-ads-manager' ),
			'within_post_content' => esc_html__( 'Within Post Content', 'universal-google-adsense-and-ads-manager' ),
		);
	}
}