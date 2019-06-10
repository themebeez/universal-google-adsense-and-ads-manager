<?php

if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Sticky_Ads' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_Sticky_Ads {

		public function __construct() {  }

		public function sticky_header_ad() {

			$enabled_ad = universal_google_adsense_and_ads_manager_get_option( 'enable_sticky_ad_on_header' );

			if( $enabled_ad == false ) {

				return;
			} else {

				/**
		        * Hook - universal_google_adsense_and_ads_manager_sticky_header_ad_content.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_sticky_header_ad_content_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_sticky_header_ad_content' );
			}
		}

		public function sticky_footer_ad() {

			$enabled_ad = universal_google_adsense_and_ads_manager_get_option( 'enable_sticky_ad_on_footer' );

			if( $enabled_ad == false ) {

				return;
			} else {

				/**
		        * Hook - universal_google_adsense_and_ads_manager_sticky_footer_ad_content.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_sticky_footer_ad_content_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_sticky_footer_ad_content' );
			}
		}
	}
}