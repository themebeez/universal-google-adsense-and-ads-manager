<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://themebeez.com
 * @since      1.0.0
 *
 * @package    Universal_Google_AdSense_And_Ads_Manager
 * @subpackage Universal_Google_AdSense_And_Ads_Manager/includes
 */

if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_i18n' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_i18n {

		/**
		 * Load the plugin text domain for translation.
		 *
		 * @since    1.0.0
		 */
		public function load_plugin_textdomain() {

			load_plugin_textdomain(
				'universal-google-adsense-and-ads-manager',
				false,
				dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
			);
		}
	}
}