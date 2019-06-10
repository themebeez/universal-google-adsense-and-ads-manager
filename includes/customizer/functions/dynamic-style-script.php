<?php


if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Dynamic_Style_Scripts' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_Dynamic_Style_Scripts {

		public function __construct() {

			add_action( 'wp_head', array( $this, 'dynamic_style' ) );
			add_action( 'wp_head', array( $this, 'header_script' ) );
			add_action( 'wp_footer', array( $this, 'footer_script' ) );
		}


		public function dynamic_style() {

			$home_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'home_ad_margin' );
			$home_ad_margin = array();
			if( !empty( $home_ad_content_margin ) ) {

				$home_ad_margin = explode( ',', $home_ad_content_margin );
			}

			$archive_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_margin' );
			$archive_ad_margin = array();
			if( !empty( $archive_ad_content_margin ) ) {

				$archive_ad_margin = explode( ',', $archive_ad_content_margin );
			}

			$single_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'post_page_ad_margin' );
			$post_page_ad_margin = array();

			if( !empty( $single_ad_content_margin ) ) {

				$post_page_ad_margin = explode( ',', $single_ad_content_margin );
			}

			$header_sticky_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'header_ad_margin' );
			$header_ad_margin = array();

			if( !empty( $header_sticky_ad_content_margin ) ) {

				$header_ad_margin = explode( ',', $header_sticky_ad_content_margin );
			}

			$footer_sticky_ad_content_margin = universal_google_adsense_and_ads_manager_get_option( 'footer_ad_margin' );
			$footer_ad_margin = array();

			if( !empty( $footer_sticky_ad_content_margin ) ) {

				$footer_ad_margin = explode( ',', $footer_sticky_ad_content_margin );
			}
			?>
			<style>
				@media( min-width: 992px ) {
					<?php
					if( !empty( $home_ad_margin ) ) {
						?>
						.ugaam-home-ad-wrapper {
							margin: <?php echo esc_attr( $home_ad_margin[0] ); ?>px <?php echo esc_attr( $home_ad_margin[1] ); ?>px <?php echo esc_attr( $home_ad_margin[2] ); ?>px <?php echo esc_attr( $home_ad_margin[3] ); ?>px;
						}
						<?php
					}

					if( !empty( $archive_ad_margin ) ) {
						?>
						.ugaam-archive-ad-wrapper {
							margin: <?php echo esc_attr( $archive_ad_margin[0] ); ?>px <?php echo esc_attr( $archive_ad_margin[1] ); ?>px <?php echo esc_attr( $archive_ad_margin[2] ); ?>px <?php echo esc_attr( $archive_ad_margin[3] ); ?>px;
						}
						<?php
					}

					if( !empty( $post_page_ad_margin ) ) {
						?>
						.ugaam-singular-ad-wrapper {
							margin: <?php echo esc_attr( $post_page_ad_margin[0] ); ?>px <?php echo esc_attr( $post_page_ad_margin[1] ); ?>px <?php echo esc_attr( $post_page_ad_margin[2] ); ?>px <?php echo esc_attr( $post_page_ad_margin[3] ); ?>px;
						}
						<?php
					}

					if( !empty( $header_ad_margin ) ) {
						?>
						.ugaam-sticky-header-ad-wrapper {
							margin: <?php echo esc_attr( $header_ad_margin[0] ); ?>px <?php echo esc_attr( $header_ad_margin[1] ); ?>px <?php echo esc_attr( $header_ad_margin[2] ); ?>px <?php echo esc_attr( $header_ad_margin[3] ); ?>px;
						}
						<?php
					}

					if( !empty( $footer_ad_margin ) ) {
						?>
						.ugaam-sticky-footer-ad-wrapper {
							margin: <?php echo esc_attr( $footer_ad_margin[0] ); ?>px <?php echo esc_attr( $footer_ad_margin[1] ); ?>px <?php echo esc_attr( $footer_ad_margin[2] ); ?>px <?php echo esc_attr( $footer_ad_margin[3] ); ?>px;
						}
						<?php
					}
					?>
				}

				@media( max-width: 991.98px ) {

					<?php
					if( !empty( $home_ad_margin ) ) {
						?>
						.ugaam-home-ad-wrapper {
							margin: <?php echo esc_attr( $home_ad_margin[4] ); ?>px <?php echo esc_attr( $home_ad_margin[5] ); ?>px <?php echo esc_attr( $home_ad_margin[6] ); ?>px <?php echo esc_attr( $home_ad_margin[7] ); ?>px;
						}
						<?php
					}

					if( !empty( $archive_ad_margin ) ) {
						?>
						.ugaam-archive-ad-wrapper {
							margin: <?php echo esc_attr( $archive_ad_margin[4] ); ?>px <?php echo esc_attr( $archive_ad_margin[5] ); ?>px <?php echo esc_attr( $archive_ad_margin[6] ); ?>px <?php echo esc_attr( $archive_ad_margin[7] ); ?>px;
						}
						<?php
					}

					if( !empty( $post_page_ad_margin ) ) {
						?>
						.ugaam-singular-ad-wrapper {
							margin: <?php echo esc_attr( $post_page_ad_margin[4] ); ?>px <?php echo esc_attr( $post_page_ad_margin[5] ); ?>px <?php echo esc_attr( $post_page_ad_margin[6] ); ?>px <?php echo esc_attr( $post_page_ad_margin[7] ); ?>px;
						}
						<?php
					}

					if( !empty( $header_ad_margin ) ) {
						?>
						.ugaam-sticky-header-ad-wrapper {
							margin: <?php echo esc_attr( $header_ad_margin[4] ); ?>px <?php echo esc_attr( $header_ad_margin[5] ); ?>px <?php echo esc_attr( $header_ad_margin[6] ); ?>px <?php echo esc_attr( $header_ad_margin[7] ); ?>px;
						}
						<?php
					}

					if( !empty( $footer_ad_margin ) ) {
						?>
						.ugaam-sticky-footer-ad-wrapper {
							margin: <?php echo esc_attr( $footer_ad_margin[4] ); ?>px <?php echo esc_attr( $footer_ad_margin[5] ); ?>px <?php echo esc_attr( $footer_ad_margin[6] ); ?>px <?php echo esc_attr( $footer_ad_margin[7] ); ?>px;
						}
						<?php
					}
					?>
				}

				@media( max-width: 767.98px ) {
					
					<?php
					if( !empty( $home_ad_margin ) ) {
						?>
						.ugaam-home-ad-wrapper {
							margin: <?php echo esc_attr( $home_ad_margin[8] ); ?>px <?php echo esc_attr( $home_ad_margin[9] ); ?>px <?php echo esc_attr( $home_ad_margin[10] ); ?>px <?php echo esc_attr( $home_ad_margin[11] ); ?>px;
						}
						<?php
					}

					if( !empty( $archive_ad_margin ) ) {
						?>
						.ugaam-archive-ad-wrapper {
							margin: <?php echo esc_attr( $archive_ad_margin[8] ); ?>px <?php echo esc_attr( $archive_ad_margin[9] ); ?>px <?php echo esc_attr( $archive_ad_margin[10] ); ?>px <?php echo esc_attr( $archive_ad_margin[11] ); ?>px;
						}
						<?php
					}

					if( !empty( $post_page_ad_margin ) ) {
						?>
						.ugaam-singular-ad-wrapper {
							margin: <?php echo esc_attr( $post_page_ad_margin[8] ); ?>px <?php echo esc_attr( $post_page_ad_margin[9] ); ?>px <?php echo esc_attr( $post_page_ad_margin[10] ); ?>px <?php echo esc_attr( $post_page_ad_margin[11] ); ?>px;
						}
						<?php
					}

					if( !empty( $header_ad_margin ) ) {
						?>
						.ugaam-sticky-header-ad-wrapper {
							margin: <?php echo esc_attr( $header_ad_margin[8] ); ?>px <?php echo esc_attr( $header_ad_margin[9] ); ?>px <?php echo esc_attr( $header_ad_margin[10] ); ?>px <?php echo esc_attr( $header_ad_margin[11] ); ?>px;
						}
						<?php
					}

					if( !empty( $footer_ad_margin ) ) {
						?>
						.ugaam-sticky-footer-ad-wrapper {
							margin: <?php echo esc_attr( $footer_ad_margin[8] ); ?>px <?php echo esc_attr( $footer_ad_margin[9] ); ?>px <?php echo esc_attr( $footer_ad_margin[10] ); ?>px <?php echo esc_attr( $footer_ad_margin[11] ); ?>px;
						}
						<?php
					}
					?>
				}
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