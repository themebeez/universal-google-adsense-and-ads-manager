<?php
/**
 * 
 */

if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Loop' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_Loop {

		public function __construct() { }


		public function loop_start( $query ) {

			if( is_singular() || ! $query->is_main_query() ) {

				return;
			}

			$enable_ad_in_home = universal_google_adsense_and_ads_manager_get_option( 'enable_ad_in_home' );

			if( is_home() && $enable_ad_in_home == true ) {

				$home_ad_position = universal_google_adsense_and_ads_manager_get_option( 'home_ad_position' );

				if( $home_ad_position == 'before_first_post' ) {

					/**
			        * Hook - universal_google_adsense_and_ads_manager_ad_content.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );
				}


				if( $home_ad_position == 'between_posts' ) {
					
					if ( $query->is_main_query() && ! is_singular() ) {

						add_action( 'the_post', array( $this, 'inside_loop' ) );
						add_action( 'loop_end', array( $this, 'inside_loop' ) );
					} else {

						remove_action( 'the_post', array( $this, 'inside_loop' ) );
					}
				}	
			}

			$enable_ad_in_archive = universal_google_adsense_and_ads_manager_get_option( 'enable_ad_in_archive' );

			if( is_archive() && $enable_ad_in_archive == true ) {

				$archive_ad_position = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_position' );

				if( $archive_ad_position == 'before_first_post' ) {

					/**
			        * Hook - universal_google_adsense_and_ads_manager_ad_content.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );
				}


				if( $archive_ad_position == 'between_posts' ) {
					
					if ( $query->is_main_query() && ! is_singular() ) {

						add_action( 'the_post', array( $this, 'inside_loop' ) );
						add_action( 'loop_end', array( $this, 'inside_loop' ) );
					} else {

						remove_action( 'the_post', array( $this, 'inside_loop' ) );
					}
				}	
			}
		}

		public function loop_end( $query ) {

			if( is_singular() || ! $query->is_main_query() ) {

				return;
			}

			$enable_ad_in_home = universal_google_adsense_and_ads_manager_get_option( 'enable_ad_in_home' );

			if( is_home() && $query->is_main_query() && $enable_ad_in_home == true ) {

				$home_ad_position = universal_google_adsense_and_ads_manager_get_option( 'home_ad_position' );

				if( $home_ad_position == 'after_last_post' ) {

					/**
			        * Hook - universal_google_adsense_and_ads_manager_ad_content.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );
				}
			}

			$enable_ad_in_archive = universal_google_adsense_and_ads_manager_get_option( 'enable_ad_in_archive' );

			if( is_archive() && $query->is_main_query() && $enable_ad_in_archive  == true ) {

				$archive_ad_position = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_position' );

				if( $archive_ad_position == 'after_last_post' ) {

					/**
			        * Hook - universal_google_adsense_and_ads_manager_ad_content.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );
				}
			}

			remove_action( 'the_post', array( $this, 'inside_loop' ) );
		}

		public function inside_loop() {

			if( is_singular() ) {

				return;
			}
			
			static $count = 0;

			static $repeat_count = 0;

			if( is_home() ) {

				$begin_after = universal_google_adsense_and_ads_manager_get_option( 'home_show_ad_after' );

				$repeat_ad = universal_google_adsense_and_ads_manager_get_option( 'home_repeat_ad' );

				if( $repeat_ad == true ) {

					$repeat_for = universal_google_adsense_and_ads_manager_get_option( 'home_repeat_ad_for' );		
					$repeat_after = universal_google_adsense_and_ads_manager_get_option( 'home_repeat_ad_after' );


					if( $count >= $begin_after && 0 === ( $count - $begin_after ) % $repeat_after && $repeat_count < $repeat_for ) {
						
						/**
				        * Hook - universal_google_adsense_and_ads_manager_ad_content.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );

						$repeat_count ++;
					}
				} else {

					if( $count == $begin_after ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_ad_content.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );
					}
				}

				$count++;
			}

			if( is_archive() ) {

				$begin_after = universal_google_adsense_and_ads_manager_get_option( 'archive_show_ad_after' );

				$repeat_ad = universal_google_adsense_and_ads_manager_get_option( 'archive_repeat_ad' );

				if( $repeat_ad == true ) {

					$repeat_for = universal_google_adsense_and_ads_manager_get_option( 'archive_repeat_ad_for' );		
					$repeat_after = universal_google_adsense_and_ads_manager_get_option( 'archive_repeat_ad_after' );


					if( $count >= $begin_after && 0 === ( $count - $begin_after ) % $repeat_after && $repeat_count < $repeat_for ) {
						
						/**
				        * Hook - universal_google_adsense_and_ads_manager_ad_content.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );

						$repeat_count ++;
					}
				} else {

					if( $count == $begin_after ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_ad_content.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_ad_content_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_ad_content' );
					}
				}

				$count++;
			}	
		}
	}
}