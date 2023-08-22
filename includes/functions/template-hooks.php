<?php
/**
 * Collection of template hooks.
 */

if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_ad_template() {
		?><div class="ugaam-ad-wrapper-outer <?php universal_google_adsense_and_ads_manager_ad_content_wrapper_class(); ?>"><div class="ugaam-ad-wrapper"><div class="ugaam-ad-wrapper-inner"><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_ad', 'universal_google_adsense_and_ads_manager_before_ad_template', 10 );

if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_ad_template() {
		?></div></div></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_ad', 'universal_google_adsense_and_ads_manager_after_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_custom_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_custom_ad_template() {
	?>
		<div class="ugaam-custom-ad">
			<button type="button" class="ugaam-ad-close-button">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.9997 10.8284L7.04996 15.7782L5.63574 14.364L11.9997 8L18.3637 14.364L16.9495 15.7782L11.9997 10.8284Z"></path></svg>
			</button>
	<?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_custom_ad', 'universal_google_adsense_and_ads_manager_before_custom_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_custom_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_custom_ad_template() {
		?></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_custom_ad', 'universal_google_adsense_and_ads_manager_after_custom_ad_template' );

if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_adsense_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_adsense_ad_template() {
	?>
		<div class="ugaam-adsense-ad">
			<button type="button" class="ugaam-ad-close-button">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.9997 10.8284L7.04996 15.7782L5.63574 14.364L11.9997 8L18.3637 14.364L16.9495 15.7782L11.9997 10.8284Z"></path></svg>
			</button>
	<?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad', 'universal_google_adsense_and_ads_manager_before_adsense_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_adsense_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_adsense_ad_template() {
		?></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad', 'universal_google_adsense_and_ads_manager_after_adsense_ad_template', 10 );

if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template() {
		?><div class="ugaam-desktop-tablet-adsense-ad"><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet', 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template() {
		?></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet', 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template', 10 );



if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template() {
		?><div class="ugaam-mobile-adsense-ad"><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile', 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template() {
		?></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile', 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_sticky_header_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_sticky_header_ad_template() {
	?>
		<div 
			class="ugaam-ad-wrapper-outer ugaam-sticky-ad is-sticky-header-ad <?php universal_google_adsense_and_ads_manager_sticky_header_wrapper_class(); ?>"
			data_display-ad="false"
			data_ad-location="header"
		>
			<div class="ugaam-ad-wrapper">
				<div class="ugaam-ad-wrapper-inner">
	<?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_sticky_header_ad', 'universal_google_adsense_and_ads_manager_before_sticky_header_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_sticky_header_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_sticky_header_ad_template() {
		?></div></div></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_sticky_header_ad', 'universal_google_adsense_and_ads_manager_after_sticky_header_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_before_sticky_footer_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_before_sticky_footer_ad_template() {
	?>
		<div 
			class="ugaam-ad-wrapper-outer ugaam-sticky-ad is-sticky-footer-ad <?php universal_google_adsense_and_ads_manager_sticky_footer_wrapper_class(); ?>"
			data_display-ad="false"
			data_ad-location="footer"
			>
				<div class="ugaam-ad-wrapper">
					<div class="ugaam-ad-wrapper-inner">
	<?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_before_sticky_footer_ad', 'universal_google_adsense_and_ads_manager_before_sticky_footer_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_after_sticky_footer_ad_template' ) ) {

	function universal_google_adsense_and_ads_manager_after_sticky_footer_ad_template() {
		?></div></div></div><?php
	}
}
add_action( 'universal_google_adsense_and_ads_manager_after_sticky_footer_ad', 'universal_google_adsense_and_ads_manager_after_sticky_footer_ad_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_content_template' ) ) {

	function universal_google_adsense_and_ads_manager_ad_content_template() {

		/**
        * Hook - universal_google_adsense_and_ads_manager_before_ad.
        *
        * @hooked universal_google_adsense_and_ads_manager_before_ad_template - 10
        */
        do_action( 'universal_google_adsense_and_ads_manager_before_ad' );

		if( is_archive() ) {

			$ad_type = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_type' );

			if( $ad_type == 'custom_ad' ) {

				$custom_ad_img = universal_google_adsense_and_ads_manager_get_option( 'archive_custom_ad_image' );
				$custom_ad_link = universal_google_adsense_and_ads_manager_get_option( 'archive_custom_ad_link' );

				/**
		        * Hook - universal_google_adsense_and_ads_manager_before_custom_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_before_custom_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_before_custom_ad' );

		        if( !empty( $custom_ad_link ) ) {
			        ?>
			        <a href="<?php echo esc_url( $custom_ad_link ); ?>"><?php
			   	}

			   	if( !empty( $custom_ad_img ) ) {
			   		?>
		        	<img src="<?php echo esc_url( $custom_ad_img ); ?>"><?php
			   	}
			   	
			   	if( !empty( $custom_ad_link ) ) {
			        ?>
		        	</a><?php
		        }
		        /**
		        * Hook - universal_google_adsense_and_ads_manager_after_custom_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_after_custom_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_after_custom_ad' );
			} else {

				$desktop_tablet_adsense = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_script_desk_n_tab' );
				$mobile_adsense = universal_google_adsense_and_ads_manager_get_option( 'archive_ad_script_mobile' );

				if( !empty( $desktop_tablet_adsense ) || !empty( $mobile_adsense ) ) {

					$mobileDetect = new UGAAM_Mobile_Detect();

					/**
			        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad' );

					if( !empty( $desktop_tablet_adsense ) ) {

						if( ! $mobileDetect->isMobile() ) {

							/**
					        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet' );

					        echo stripslashes( $desktop_tablet_adsense );

					        /**
					        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet' );
					    }
					}

					if( !empty( $mobile_adsense ) ) {

						if( $mobileDetect->isMobile() ) {

							/**
					        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_mobile.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile' );

					        echo stripslashes( $mobile_adsense );

					        /**
					        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_mobile.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile' );
					    }
					}

					/**
			        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad' );
				}
			}
		}  

		if( is_home() ) {

			$ad_type = universal_google_adsense_and_ads_manager_get_option( 'home_ad_type' );

			if( $ad_type == 'custom_ad' ) {

				$custom_ad_img = universal_google_adsense_and_ads_manager_get_option( 'home_custom_ad_image' );
				$custom_ad_link = universal_google_adsense_and_ads_manager_get_option( 'home_custom_ad_link' );

				/**
		        * Hook - universal_google_adsense_and_ads_manager_before_custom_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_before_custom_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_before_custom_ad' );

		        if( !empty( $custom_ad_link ) ) {
			        ?>
			        <a href="<?php echo esc_url( $custom_ad_link ); ?>"><?php
			   	}

			   	if( !empty( $custom_ad_img ) ) {
			   		?>
		        	<img src="<?php echo esc_url( $custom_ad_img ); ?>"><?php
			   	}

			   	if( !empty( $custom_ad_link ) ) {
			        ?>
		        	</a><?php
		        }
		        /**
		        * Hook - universal_google_adsense_and_ads_manager_after_custom_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_after_custom_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_after_custom_ad' );
			} else {

				$desktop_tablet_adsense = universal_google_adsense_and_ads_manager_get_option( 'home_ad_script_desk_n_tab' );
				$mobile_adsense = universal_google_adsense_and_ads_manager_get_option( 'home_ad_script_mobile' );

				if( !empty( $desktop_tablet_adsense ) || !empty( $mobile_adsense ) ) {

					$mobileDetect = new UGAAM_Mobile_Detect();

					/**
			        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad' );

					if( !empty( $desktop_tablet_adsense ) ) {

						if( ! $mobileDetect->isMobile() ) {

							/**
					        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet' );

					        echo stripslashes( $desktop_tablet_adsense );

					        /**
					        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet' );
					    }
					}

					if( !empty( $mobile_adsense ) ) {

						if( $mobileDetect->isMobile() ) {

							/**
					        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_mobile.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile' );

					        echo stripslashes( $mobile_adsense );

					        /**
					        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_mobile.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile' );
					    }
					}

					/**
			        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad' );
				}
			}
		}

		if( is_singular() ) {

			$ad_type = universal_google_adsense_and_ads_manager_get_option( 'post_page_ad_type' );

			if( $ad_type == 'custom_ad' ) {

				$custom_ad_img = universal_google_adsense_and_ads_manager_get_option( 'post_page_custom_ad_image' );

				$custom_ad_link = universal_google_adsense_and_ads_manager_get_option( 'post_page_custom_ad_link' );

				/**
		        * Hook - universal_google_adsense_and_ads_manager_before_custom_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_before_custom_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_before_custom_ad' );

		        if( !empty( $custom_ad_link ) ) {
			        ?>
			        <a href="<?php echo esc_url( $custom_ad_link ); ?>"><?php
			   	}

			   	if( !empty( $custom_ad_img ) ) {
			   		?>
		        	<img src="<?php echo esc_url( $custom_ad_img ); ?>"><?php
			   	}	

			   	if( !empty( $custom_ad_link ) ) {
			        ?>
		        	</a><?php
		        }

		        /**
		        * Hook - universal_google_adsense_and_ads_manager_after_custom_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_after_custom_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_after_custom_ad' );
			} else {

				$desktop_tablet_adsense = universal_google_adsense_and_ads_manager_get_option( 'post_page_ad_script_desk_n_tab' );

				$mobile_adsense = universal_google_adsense_and_ads_manager_get_option( 'post_page_ad_script_mobile' );

				if( !empty( $desktop_tablet_adsense ) || !empty( $mobile_adsense ) ) {

					$mobileDetect = new UGAAM_Mobile_Detect();

					/**
			        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad' );

					if( !empty( $desktop_tablet_adsense ) ) {

						if( ! $mobileDetect->isMobile() ) {

							/**
					        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet' );

					        echo stripslashes( $desktop_tablet_adsense );

					        /**
					        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet.
					        *
					        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template - 10
					        */
					        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet' );
					    }
					}
					if( !empty( $mobile_adsense ) ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_mobile.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile' );

				        echo stripslashes( $mobile_adsense );

				        /**
				        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_mobile.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile' );
					}

					/**
			        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad.
			        *
			        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_template - 10
			        */
			        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad' );
				}
			}
		}
		/**
        * Hook - universal_google_adsense_and_ads_manager_after_ad.
        *
        * @hooked universal_google_adsense_and_ads_manager_after_ad_template - 10
        */
        do_action( 'universal_google_adsense_and_ads_manager_after_ad' );
	}
}
add_action( 'universal_google_adsense_and_ads_manager_ad_content', 'universal_google_adsense_and_ads_manager_ad_content_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_sticky_header_ad_content_template' ) ) {

	function universal_google_adsense_and_ads_manager_sticky_header_ad_content_template() {

		/**
        * Hook - universal_google_adsense_and_ads_manager_before_sticky_header_ad.
        *
        * @hooked universal_google_adsense_and_ads_manager_before_sticky_header_ad_template - 10
        */
        do_action( 'universal_google_adsense_and_ads_manager_before_sticky_header_ad' );

		$ad_type = universal_google_adsense_and_ads_manager_get_option( 'header_ad_type' );

		if( $ad_type == 'custom_ad' ) {

			$custom_ad_img = universal_google_adsense_and_ads_manager_get_option( 'header_custom_ad_image' );
			$custom_ad_link = universal_google_adsense_and_ads_manager_get_option( 'header_custom_ad_link' );

			/**
	        * Hook - universal_google_adsense_and_ads_manager_before_custom_ad.
	        *
	        * @hooked universal_google_adsense_and_ads_manager_before_custom_ad_template - 10
	        */
	        do_action( 'universal_google_adsense_and_ads_manager_before_custom_ad' );

	        if( !empty( $custom_ad_link ) ) {
		        ?>
		        <a href="<?php echo esc_url( $custom_ad_link ); ?>"><?php
		   	}

		   	if( !empty( $custom_ad_img ) ) {
		   		?>
	        	<img src="<?php echo esc_url( $custom_ad_img ); ?>"><?php
		   	}
		   	
		   	if( !empty( $custom_ad_link ) ) {
		        ?>
	        	</a><?php
	        }
	        /**
	        * Hook - universal_google_adsense_and_ads_manager_after_custom_ad.
	        *
	        * @hooked universal_google_adsense_and_ads_manager_after_custom_ad_template - 10
	        */
	        do_action( 'universal_google_adsense_and_ads_manager_after_custom_ad' );
		} else {

			$desktop_tablet_adsense = universal_google_adsense_and_ads_manager_get_option( 'header_ad_script_desk_n_tab' );
			$mobile_adsense = universal_google_adsense_and_ads_manager_get_option( 'header_ad_script_mobile' );

			if( !empty( $desktop_tablet_adsense ) || !empty( $mobile_adsense ) ) {

				$mobileDetect = new UGAAM_Mobile_Detect();

				/**
		        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad' );

				if( !empty( $desktop_tablet_adsense ) ) {

					if( ! $mobileDetect->isMobile() ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet' );

				        echo stripslashes( $desktop_tablet_adsense );

				        /**
				        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet' );
				    }
				}

				if( !empty( $mobile_adsense ) ) {

					if( $mobileDetect->isMobile() ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_mobile.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile' );

				        echo stripslashes( $mobile_adsense );

				        /**
				        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_mobile.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile' );
				    }
				}

				/**
		        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad' );
			}
		}

		/**
        * Hook - universal_google_adsense_and_ads_manager_after_sticky_header_ad.
        *
        * @hooked universal_google_adsense_and_ads_manager_after_sticky_header_ad_template - 10
        */
        do_action( 'universal_google_adsense_and_ads_manager_after_sticky_header_ad' );
	}
}
add_action( 'universal_google_adsense_and_ads_manager_sticky_header_ad_content', 'universal_google_adsense_and_ads_manager_sticky_header_ad_content_template', 10 );


if( ! function_exists( 'universal_google_adsense_and_ads_manager_sticky_footer_ad_content_template' ) ) {

	function universal_google_adsense_and_ads_manager_sticky_footer_ad_content_template() {

		/**
        * Hook - universal_google_adsense_and_ads_manager_before_sticky_footer_ad.
        *
        * @hooked universal_google_adsense_and_ads_manager_before_sticky_footer_ad_template - 10
        */
        do_action( 'universal_google_adsense_and_ads_manager_before_sticky_footer_ad' );

		$ad_type = universal_google_adsense_and_ads_manager_get_option( 'footer_ad_type' );

		if( $ad_type == 'custom_ad' ) {

			$custom_ad_img = universal_google_adsense_and_ads_manager_get_option( 'footer_custom_ad_image' );
			$custom_ad_link = universal_google_adsense_and_ads_manager_get_option( 'footer_custom_ad_link' );

			/**
	        * Hook - universal_google_adsense_and_ads_manager_before_custom_ad.
	        *
	        * @hooked universal_google_adsense_and_ads_manager_before_custom_ad_template - 10
	        */
	        do_action( 'universal_google_adsense_and_ads_manager_before_custom_ad' );

	        if( !empty( $custom_ad_link ) ) {
		        ?>
		        <a href="<?php echo esc_url( $custom_ad_link ); ?>"><?php
		   	}

		   	if( !empty( $custom_ad_img ) ) {
		   		?>
	        	<img src="<?php echo esc_url( $custom_ad_img ); ?>"><?php
		   	}
		   	
		   	if( !empty( $custom_ad_link ) ) {
		        ?>
	        	</a><?php
	        }
	        /**
	        * Hook - universal_google_adsense_and_ads_manager_after_custom_ad.
	        *
	        * @hooked universal_google_adsense_and_ads_manager_after_custom_ad_template - 10
	        */
	        do_action( 'universal_google_adsense_and_ads_manager_after_custom_ad' );
		} else {

			$desktop_tablet_adsense = universal_google_adsense_and_ads_manager_get_option( 'footer_ad_script_desk_n_tab' );
			$mobile_adsense = universal_google_adsense_and_ads_manager_get_option( 'footer_ad_script_mobile' );

			if( !empty( $desktop_tablet_adsense ) || !empty( $mobile_adsense ) ) {

				$mobileDetect = new UGAAM_Mobile_Detect();

				/**
		        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad' );

				if( !empty( $desktop_tablet_adsense ) ) {

					if( ! $mobileDetect->isMobile() ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_desktop_tablet' );

				        echo stripslashes( $desktop_tablet_adsense );

				        /**
				        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_desktop_tablet' );
				    }
				}

				if( !empty( $mobile_adsense ) ) {

					if( $mobileDetect->isMobile() ) {

						/**
				        * Hook - universal_google_adsense_and_ads_manager_before_adsense_ad_mobile.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_before_adsense_ad_mobile_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_before_adsense_ad_mobile' );

				        echo stripslashes( $mobile_adsense );

				        /**
				        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad_mobile.
				        *
				        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_mobile_template - 10
				        */
				        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad_mobile' );
				    }
				}

				/**
		        * Hook - universal_google_adsense_and_ads_manager_after_adsense_ad.
		        *
		        * @hooked universal_google_adsense_and_ads_manager_after_adsense_ad_template - 10
		        */
		        do_action( 'universal_google_adsense_and_ads_manager_after_adsense_ad' );
			}
		}

		/**
        * Hook - universal_google_adsense_and_ads_manager_after_sticky_footer_ad.
        *
        * @hooked universal_google_adsense_and_ads_manager_after_sticky_footer_ad_template - 10
        */
        do_action( 'universal_google_adsense_and_ads_manager_after_sticky_footer_ad' );
	}
}
add_action( 'universal_google_adsense_and_ads_manager_sticky_footer_ad_content', 'universal_google_adsense_and_ads_manager_sticky_footer_ad_content_template', 10 );