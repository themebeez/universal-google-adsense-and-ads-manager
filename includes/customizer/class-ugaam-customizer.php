<?php
/**
 * Easy_Adsense_Ads_Manager Theme Customizer
 *
 * @package Easy_Adsense_Ads_Manager
 */


if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Customize' ) ) {

	class Universal_Google_AdSense_And_Ads_Manager_Customize {

		public function __construct() {
			
			$this->load_dependencies();
		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		public function customize_register( $wp_customize ) {

			/**
			 * Load custom customizer control for toggle control
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/controls/class-customizer-toggle-control.php';

			/**
			 * Load custom customizer control for responsive dimension control
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/controls/class-customizer-responsive-dimension-control.php';

			/**
			 * Load customizer functions for sanitization of input values of contol fields
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/sanitize-callback.php';

			/**
			 * Load customizer functions for intializing panel, section, and control fields
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/reuseable-callback.php';	

			/**
			 * Load customizer functions for loading control field's choices, declaration of panel, section 
			 * and control fields
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/customizer-fields.php';
		}


		/**
		 * Load customizer dependencies
		 */
		public function load_dependencies() { 

			/**
			 * Load active callback functions.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/active-callback.php';

			/**
			 * Load customizer option choices function.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/customizer-choices.php';

			/**
			 * Load function to load customizer field's default values.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/customizer-defaults.php';

			/**
			 * Load function to load dynamic style.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'customizer/functions/dynamic-style-script.php';
		}


		/**
		 * Enqueue Customizer Scripts and Styles
		 */
		public function enqueue_customizer_scripts() {

			wp_enqueue_style( 'universal-google-adsense-and-ads-manager-customizer-style', plugin_dir_url( __FILE__ ) . 'assets/css/customizer-style.css' );

			wp_enqueue_script( 'universal-google-adsense-and-ads-manager-customizer-script', plugin_dir_url( __FILE__ ) . 'assets/js/customizer-script.js', array( 'jquery' ), UNIVERSAL_GOOGLE_ADSENSE_AND_ADS_MANAGER_VERSION, true );

			wp_enqueue_script( 'universal-google-adsense-and-ads-manager-dimensions', plugin_dir_url( __FILE__ ) . 'assets/js/dimensions.js', array( 'jquery', 'customize-base' ), UNIVERSAL_GOOGLE_ADSENSE_AND_ADS_MANAGER_VERSION, true );
		}
	}
}