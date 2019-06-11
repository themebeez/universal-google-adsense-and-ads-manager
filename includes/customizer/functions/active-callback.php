<?php
/**
 * Collection of active callback functions for customizer fields.
 *
 * @package Easy_Adsense_Ads_Manager
 */

if( ! function_exists( 'universal_google_adsense_and_ads_manager_enabled_home_ad' ) ) {

	function universal_google_adsense_and_ads_manager_enabled_home_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_home' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_home_ad' ) ) {

	function universal_google_adsense_and_ads_manager_custom_home_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_home' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_home_ad_type' )->value() == 'custom_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_adsense_home_ad' ) ) {

	function universal_google_adsense_and_ads_manager_adsense_home_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_home' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_home_ad_type' )->value() == 'adsense_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_between_posts_in_home' ) ) {

	function universal_google_adsense_and_ads_manager_ad_between_posts_in_home( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_home' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_home_ad_position' )->value() == 'between_posts' ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_home' ) ) {

	function universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_home( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_home' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_home_ad_position' )->value() == 'between_posts' && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_home_repeat_ad' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_css_margin_in_home' ) ) {

	function universal_google_adsense_and_ads_manager_custom_css_margin_in_home( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_home' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_home_enable_custom_css' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_enabled_archive_ad' ) ) {

	function universal_google_adsense_and_ads_manager_enabled_archive_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_archive' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_archive_ad' ) ) {

	function universal_google_adsense_and_ads_manager_custom_archive_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_archive' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_archive_ad_type' )->value() == 'custom_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_adsense_archive_ad' ) ) {

	function universal_google_adsense_and_ads_manager_adsense_archive_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_archive' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_archive_ad_type' )->value() == 'adsense_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_between_posts_in_archive' ) ) {

	function universal_google_adsense_and_ads_manager_ad_between_posts_in_archive( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_archive' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_archive_ad_position' )->value() == 'between_posts' ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_archive' ) ) {

	function universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_archive( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_archive' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_archive_ad_position' )->value() == 'between_posts' && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_archive_repeat_ad' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_css_margin_in_archive' ) ) {

	function universal_google_adsense_and_ads_manager_custom_css_margin_in_archive( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_archive' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_archive_enable_custom_css' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}




if( ! function_exists( 'universal_google_adsense_and_ads_manager_enabled_post_page_ad' ) ) {

	function universal_google_adsense_and_ads_manager_enabled_post_page_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_post_page' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_post_page_ad' ) ) {

	function universal_google_adsense_and_ads_manager_custom_post_page_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_post_page' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_post_page_ad_type' )->value() == 'custom_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_adsense_post_page_ad' ) ) {

	function universal_google_adsense_and_ads_manager_adsense_post_page_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_post_page' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_post_page_ad_type' )->value() == 'adsense_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_between_posts_in_post_page' ) ) {

	function universal_google_adsense_and_ads_manager_ad_between_posts_in_post_page( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_post_page' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_post_page_ad_position' )->value() == 'within_post_content' ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_post_page' ) ) {

	function universal_google_adsense_and_ads_manager_ad_repeated_between_posts_in_post_page( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_post_page' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_post_page_ad_position' )->value() == 'within_post_content' && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_post_page_repeat_ad' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_css_margin_in_post_page' ) ) {

	function universal_google_adsense_and_ads_manager_custom_css_margin_in_post_page( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_ad_in_post_page' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_post_page_enable_custom_css' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}





if( ! function_exists( 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_header' ) ) {

	function universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_header( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_header' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_header_ad' ) ) {

	function universal_google_adsense_and_ads_manager_custom_header_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_header' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_header_ad_type' )->value() == 'custom_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_adsense_header_ad' ) ) {

	function universal_google_adsense_and_ads_manager_adsense_header_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_header' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_header_ad_type' )->value() == 'adsense_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_css_margin_in_header' ) ) {

	function universal_google_adsense_and_ads_manager_custom_css_margin_in_header( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_header' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_header_enable_custom_css' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}



if( ! function_exists( 'universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_footer' ) ) {

	function universal_google_adsense_and_ads_manager_enabled_sticky_ad_in_footer( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_footer' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_footer_ad' ) ) {

	function universal_google_adsense_and_ads_manager_custom_footer_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_footer' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_footer_ad_type' )->value() == 'custom_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_adsense_footer_ad' ) ) {

	function universal_google_adsense_and_ads_manager_adsense_footer_ad( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_footer' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_footer_ad_type' )->value() == 'adsense_ad' ) {

			return true;
		} else {

			return false;
		}
	}
}

if( ! function_exists( 'universal_google_adsense_and_ads_manager_custom_css_margin_in_footer' ) ) {

	function universal_google_adsense_and_ads_manager_custom_css_margin_in_footer( $control ) {

		if( $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_enable_sticky_ad_on_footer' )->value() == true && $control->manager->get_setting( 'universal_google_adsense_and_ads_manager_field_footer_enable_custom_css' )->value() == true ) {

			return true;
		} else {

			return false;
		}
	}
}