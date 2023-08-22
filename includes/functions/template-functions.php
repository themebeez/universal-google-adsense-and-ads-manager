<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Easy_Adsense_Ads_Manager
 */

if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_content_wrapper_class' ) ) {

	function universal_google_adsense_and_ads_manager_ad_content_wrapper_class() {

		$wrapper_class = '';

		if( is_home() ) {

			$wrapper_class = 'ugaam-home-ad-wrapper';

			$ad_alignment = universal_google_adsense_and_ads_manager_get_option( 'ad_alignment_in_home' );

			if( $ad_alignment == 'left' || $ad_alignment == 'default' ) {

				$wrapper_class .= ' is-left-align';
			}

			if( $ad_alignment == 'right' ) {

				$wrapper_class .= ' is-right-align';
			}

			if( $ad_alignment == 'center' ) {

				$wrapper_class .= ' is-center-align';
			}

			$enable_custom_css = universal_google_adsense_and_ads_manager_get_option( 'home_enable_custom_css' );

			if( $enable_custom_css == true ) {
 
				$custom_class = universal_google_adsense_and_ads_manager_get_option( 'home_custom_css_class' );

				if( !empty( $custom_class ) ) {

					$wrapper_class .= ' '.$custom_class;
				}
			}

			echo esc_attr( $wrapper_class );

			return;
		}

		if( is_archive() ) {

			$wrapper_class = 'ugaam-archive-ad-wrapper';

			$ad_alignment = universal_google_adsense_and_ads_manager_get_option( 'ad_alignment_in_archive' );

			if( $ad_alignment == 'left' || $ad_alignment == 'default' ) {

				$wrapper_class .= ' is-left-align';
			}

			if( $ad_alignment == 'right' ) {

				$wrapper_class .= ' is-right-align';
			}

			if( $ad_alignment == 'center' ) {

				$wrapper_class .= ' is-center-align';
			}

			$enable_custom_css = universal_google_adsense_and_ads_manager_get_option( 'archive_enable_custom_css' );

			if( $enable_custom_css == true ) {
 
				$custom_class = universal_google_adsense_and_ads_manager_get_option( 'archive_custom_css_class' );

				if( !empty( $custom_class ) ) {

					$wrapper_class .= ' '.$custom_class;
				}
			}

			echo esc_attr( $wrapper_class );

			return;
		}

		if( is_singular() ) {

			$wrapper_class = 'ugaam-singular-ad-wrapper';

			$ad_alignment = universal_google_adsense_and_ads_manager_get_option( 'ad_alignment_in_post_page' );

			if( $ad_alignment == 'left' || $ad_alignment == 'default' ) {

				$wrapper_class .= ' is-left-align';
			}

			if( $ad_alignment == 'right' ) {

				$wrapper_class .= ' is-right-align';
			}

			if( $ad_alignment == 'center' ) {

				$wrapper_class .= ' is-center-align';
			}

			$enable_custom_css = universal_google_adsense_and_ads_manager_get_option( 'post_page_enable_custom_css' );

			if( $enable_custom_css == true ) {
 
				$custom_class = universal_google_adsense_and_ads_manager_get_option( 'post_page_custom_css_class' );

				if( !empty( $custom_class ) ) {

					$wrapper_class .= ' '.$custom_class;
				}
			}

			echo esc_attr( $wrapper_class );

			return;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_sticky_header_wrapper_class' ) ) {

	function universal_google_adsense_and_ads_manager_sticky_header_wrapper_class() {

		$wrapper_class = 'is-sticky-header-ad-wrapper';

		$ad_alignment = universal_google_adsense_and_ads_manager_get_option( 'ad_alignment_in_header' );

		if( $ad_alignment == 'left' || $ad_alignment == 'default' ) {

			$wrapper_class .= ' is-left-align';
		}

		if( $ad_alignment == 'right' ) {

			$wrapper_class .= ' is-right-align';
		}

		if( $ad_alignment == 'center' ) {

			$wrapper_class .= ' is-center-align';
		}

		$enable_custom_css = universal_google_adsense_and_ads_manager_get_option( 'header_enable_custom_css' );

		if( $enable_custom_css == true ) {

			$custom_class = universal_google_adsense_and_ads_manager_get_option( 'header_custom_css_class' );

			if( !empty( $custom_class ) ) {

				$wrapper_class .= ' '.$custom_class;
			}
		}

		echo esc_attr( $wrapper_class );

		return;
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_sticky_footer_wrapper_class' ) ) {

	function universal_google_adsense_and_ads_manager_sticky_footer_wrapper_class() {

		$wrapper_class = 'is-sticky-footer-ad-wrapper';

		$ad_alignment = universal_google_adsense_and_ads_manager_get_option( 'ad_alignment_in_footer' );

		if( $ad_alignment == 'left' || $ad_alignment == 'default' ) {

			$wrapper_class .= ' is-left-align';
		}

		if( $ad_alignment == 'right' ) {

			$wrapper_class .= ' is-right-align';
		}

		if( $ad_alignment == 'center' ) {

			$wrapper_class .= ' is-center-align';
		}

		$enable_custom_css = universal_google_adsense_and_ads_manager_get_option( 'footer_enable_custom_css' );

		if( $enable_custom_css == true ) {

			$custom_class = universal_google_adsense_and_ads_manager_get_option( 'footer_custom_css_class' );

			if( !empty( $custom_class ) ) {

				$wrapper_class .= ' '.$custom_class;
			}
		}

		echo esc_attr( $wrapper_class );

		return;
	}
}