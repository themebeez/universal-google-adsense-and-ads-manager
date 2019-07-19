<?php

if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Content' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_Content {

		public function __construct() { }

		public function the_content( $content ) {

			global $post;

			$enable_ad_in_post_page = universal_google_adsense_and_ads_manager_get_option( 'enable_ad_in_post_page' );

			$disable_ad_content = get_post_meta( $post->ID, 'ugaam-disable-ad-content', true );

			if( ! is_singular() || $enable_ad_in_post_page == false || $disable_ad_content == 1 ) {

				return $content;
			}

			$ad_position = universal_google_adsense_and_ads_manager_get_option( 'post_page_ad_position' );

			if( $ad_position == 'before_post_content' || $ad_position == 'after_post_content' ) {

				if( $ad_position == 'before_post_content' ) {

					ob_start();

					/**
			        * Hook - universal_google_adsense_and_ads_manager_ad_content.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );

					$ad_content = ob_get_contents();

					ob_end_clean();

					$content = $ad_content . $content;

					return wpautop( $content, false );
				}

				if( $ad_position == 'after_post_content' ) {

					ob_start();

					/**
			        * Hook - universal_google_adsense_and_ads_manager_ad_content.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );

					$ad_content = ob_get_contents();

					ob_end_clean();

					$content = $content . $ad_content; 

					return wpautop( $content, false );
				}			

			} else {

				$fullcontent = '';

				$paragraphs = explode( '</p>', $content );

				$count = 1;

				$repeat_count = 1;

				$repeat_for = universal_google_adsense_and_ads_manager_get_option( 'post_page_repeat_ad_for' );

				$begin_after = universal_google_adsense_and_ads_manager_get_option( 'post_page_show_ad_after' );

				$repeat_after = universal_google_adsense_and_ads_manager_get_option( 'post_page_repeat_ad_after' ); 

				foreach( $paragraphs as $index => $paragraph ) {

					if( $count >= $begin_after && ( 0 === ( $count - $begin_after ) % $repeat_after ) && ( $repeat_count <= $repeat_for ) ) {

						ob_start();

						/**
				        * Hook - universal_google_adsense_and_ads_manager_ad_content.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );

						$ad_content = ob_get_contents();

						ob_end_clean();

						$fullcontent .= $paragraph . $ad_content;

						$repeat_count ++;
					} else {

						$fullcontent .= $paragraph;
					}

					$count++;
				}

				return wpautop( $fullcontent, false );
			}
		}
	}
}