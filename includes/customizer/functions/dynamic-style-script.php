<?php


if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Dynamic_Style_Scripts' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_Dynamic_Style_Scripts {

		public function __construct() {

			add_action( 'wp_head', array( $this, 'dynamic_style' ) );
			add_action( 'wp_head', array( $this, 'header_script' ) );
			add_action( 'wp_footer', array( $this, 'footer_script' ) );
		}


		public function dynamic_style() {
			?>
			<style>
				<?php

				$enable_home_css_margin = universal_google_adsense_and_ads_manager_get_option( 'home_enable_custom_css' );

				if( $enable_home_css_margin == true ) {

					$home_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'home_ad_margin' );

					$home_ad_margin = array();

					if( !empty( $home_ad_content_margin ) ) {

						$home_ad_margin = explode( ',', $home_ad_content_margin );
					}

					if( !empty( $home_ad_margin ) ) {
						?>
						@media( min-width: 992px ) {
							.ugaam-home-ad-wrapper {
								margin: <?php echo esc_attr( $home_ad_margin[0] ); ?>px <?php echo esc_attr( $home_ad_margin[1] ); ?>px <?php echo esc_attr( $home_ad_margin[2] ); ?>px <?php echo esc_attr( $home_ad_margin[3] ); ?>px;
							}
						}

						@media( max-width: 991.98px ) {
							.ugaam-home-ad-wrapper {
								margin: <?php echo esc_attr( $home_ad_margin[4] ); ?>px <?php echo esc_attr( $home_ad_margin[5] ); ?>px <?php echo esc_attr( $home_ad_margin[6] ); ?>px <?php echo esc_attr( $home_ad_margin[7] ); ?>px;
							}
						}

						@media( max-width: 767.98px ) {
							.ugaam-home-ad-wrapper {
								margin: <?php echo esc_attr( $home_ad_margin[8] ); ?>px <?php echo esc_attr( $home_ad_margin[9] ); ?>px <?php echo esc_attr( $home_ad_margin[10] ); ?>px <?php echo esc_attr( $home_ad_margin[11] ); ?>px;
							}
						}
						<?php
					}
				}

				$enable_archive_css_margin = universal_google_adsense_and_ads_manager_get_option( 'archive_enable_custom_css' );

				if( $enable_archive_css_margin == true ) {

					$archive_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_margin' );

					$archive_ad_margin = array();

					if( !empty( $archive_ad_content_margin ) ) {

						$archive_ad_margin = explode( ',', $archive_ad_content_margin );
					}

					if( !empty( $archive_ad_margin ) ) {
						?>
						@media( min-width: 992px ) {
							.ugaam-archive-ad-wrapper {
								margin: <?php echo esc_attr( $archive_ad_margin[0] ); ?>px <?php echo esc_attr( $archive_ad_margin[1] ); ?>px <?php echo esc_attr( $archive_ad_margin[2] ); ?>px <?php echo esc_attr( $archive_ad_margin[3] ); ?>px;
							}
						}

						@media( max-width: 991.98px ) {
							.ugaam-archive-ad-wrapper {
								margin: <?php echo esc_attr( $archive_ad_margin[4] ); ?>px <?php echo esc_attr( $archive_ad_margin[5] ); ?>px <?php echo esc_attr( $archive_ad_margin[6] ); ?>px <?php echo esc_attr( $archive_ad_margin[7] ); ?>px;
							}
						}

						@media( max-width: 767.98px ) {
							.ugaam-archive-ad-wrapper {
								margin: <?php echo esc_attr( $archive_ad_margin[8] ); ?>px <?php echo esc_attr( $archive_ad_margin[9] ); ?>px <?php echo esc_attr( $archive_ad_margin[10] ); ?>px <?php echo esc_attr( $archive_ad_margin[11] ); ?>px;
							}
						}
						<?php
					}
				}

				$enable_post_page_css_margin = universal_google_adsense_and_ads_manager_get_option( 'post_page_enable_custom_css' );

				if( $enable_post_page_css_margin == true ) {

					$single_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'post_page_ad_margin' );

					$post_page_ad_margin = array();

					if( !empty( $single_ad_content_margin ) ) {

						$post_page_ad_margin = explode( ',', $single_ad_content_margin );
					}

					if( !empty( $post_page_ad_margin ) ) {
						?>
						@media( min-width: 992px ) {
							.ugaam-singular-ad-wrapper {
								margin: <?php echo esc_attr( $post_page_ad_margin[0] ); ?>px <?php echo esc_attr( $post_page_ad_margin[1] ); ?>px <?php echo esc_attr( $post_page_ad_margin[2] ); ?>px <?php echo esc_attr( $post_page_ad_margin[3] ); ?>px;
							}
						}

						@media( max-width: 991.98px ) {
							.ugaam-singular-ad-wrapper {
								margin: <?php echo esc_attr( $post_page_ad_margin[4] ); ?>px <?php echo esc_attr( $post_page_ad_margin[5] ); ?>px <?php echo esc_attr( $post_page_ad_margin[6] ); ?>px <?php echo esc_attr( $post_page_ad_margin[7] ); ?>px;
							}
						}

						@media( max-width: 767.98px ) {
							.ugaam-singular-ad-wrapper {
								margin: <?php echo esc_attr( $post_page_ad_margin[8] ); ?>px <?php echo esc_attr( $post_page_ad_margin[9] ); ?>px <?php echo esc_attr( $post_page_ad_margin[10] ); ?>px <?php echo esc_attr( $post_page_ad_margin[11] ); ?>px;
							}
						}
						<?php
					}
				}

				$enable_header_css_margin = universal_google_adsense_and_ads_manager_get_option( 'header_enable_custom_css' );

				if( $enable_header_css_margin == true ) {

					$header_sticky_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'header_ad_margin' );

					$header_ad_margin = array();

					if( !empty( $header_sticky_ad_content_margin ) ) {

						$header_ad_margin = explode( ',', $header_sticky_ad_content_margin );
					}

					if( !empty( $header_ad_margin ) ) {
						?>
						@media( min-width: 992px ) {
							.is-sticky-header-ad-wrapper {
								margin: <?php echo esc_attr( $header_ad_margin[0] ); ?>px <?php echo esc_attr( $header_ad_margin[1] ); ?>px <?php echo esc_attr( $header_ad_margin[2] ); ?>px <?php echo esc_attr( $header_ad_margin[3] ); ?>px;
							}
						}

						@media( max-width: 991.98px ) {
							.is-sticky-header-ad-wrapper {
								margin: <?php echo esc_attr( $header_ad_margin[4] ); ?>px <?php echo esc_attr( $header_ad_margin[5] ); ?>px <?php echo esc_attr( $header_ad_margin[6] ); ?>px <?php echo esc_attr( $header_ad_margin[7] ); ?>px;
							}
						}

						@media( max-width: 767.98px ) {
							.is-sticky-header-ad-wrapper {
								margin: <?php echo esc_attr( $header_ad_margin[8] ); ?>px <?php echo esc_attr( $header_ad_margin[9] ); ?>px <?php echo esc_attr( $header_ad_margin[10] ); ?>px <?php echo esc_attr( $header_ad_margin[11] ); ?>px;
							}
						}
						<?php
					}
				}

				$enable_footer_css_margin = universal_google_adsense_and_ads_manager_get_option( 'footer_enable_custom_css' );

				if( $enable_footer_css_margin == true ) {

					$footer_sticky_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'footer_ad_margin' );

					$footer_ad_margin = array();

					if( !empty( $footer_sticky_ad_content_margin ) ) {

						$footer_ad_margin = explode( ',', $footer_sticky_ad_content_margin );
					}

					if( !empty( $footer_ad_margin ) ) {
						?>
						@media( min-width: 992px ) {
							.is-sticky-footer-ad-wrapper {
								margin: <?php echo esc_attr( $footer_ad_margin[0] ); ?>px <?php echo esc_attr( $footer_ad_margin[1] ); ?>px <?php echo esc_attr( $footer_ad_margin[2] ); ?>px <?php echo esc_attr( $footer_ad_margin[3] ); ?>px;
							}
						}

						@media( max-width: 991.98px ) {
							.is-sticky-footer-ad-wrapper {
								margin: <?php echo esc_attr( $footer_ad_margin[4] ); ?>px <?php echo esc_attr( $footer_ad_margin[5] ); ?>px <?php echo esc_attr( $footer_ad_margin[6] ); ?>px <?php echo esc_attr( $footer_ad_margin[7] ); ?>px;
							}
						}		

						@media( max-width: 767.98px ) {
							.is-sticky-footer-ad-wrapper {
								margin: <?php echo esc_attr( $footer_ad_margin[8] ); ?>px <?php echo esc_attr( $footer_ad_margin[9] ); ?>px <?php echo esc_attr( $footer_ad_margin[10] ); ?>px <?php echo esc_attr( $footer_ad_margin[11] ); ?>px;
							}
						}			
						<?php
					}
				}
				?>
			</style>
			<?php
		}		

		public function header_script() {

			$header_script = universal_google_adsense_and_ads_manager_get_option( 'header_script' );

			if( !empty( $header_script ) ) {

				echo stripslashes( $header_script );
			}
		}

		public function footer_script() {

			$footer_script = universal_google_adsense_and_ads_manager_get_option( 'footer_script' );

			if( !empty( $footer_script ) ) {

				echo stripslashes( $footer_script );
			}
		}
	}
}

$dynamic_style_script = new Universal_Google_AdSense_And_Ads_Manager_Dynamic_Style_Scripts();