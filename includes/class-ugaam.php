<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://themebeez.com
 * @since      1.0.0
 *
 * @package    Universal_Google_AdSense_And_Ads_Manager
 * @subpackage Universal_Google_AdSense_And_Ads_Manager/includes
 */
if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager' ) ) {
	
	class Universal_Google_AdSense_And_Ads_Manager {

		/**
		 * The loader that's responsible for maintaining and registering all hooks that power
		 * the plugin.
		 *
		 * @since    1.0.0
		 * @access   protected
		 * @var      Universal_Google_AdSense_And_Ads_Manager_Loader    $loader    Maintains and registers all hooks for the plugin.
		 */
		protected $loader;

		/**
		 * The unique identifier of this plugin.
		 *
		 * @since    1.0.0
		 * @access   protected
		 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
		 */
		protected $plugin_name;

		/**
		 * The current version of the plugin.
		 *
		 * @since    1.0.0
		 * @access   protected
		 * @var      string    $version    The current version of the plugin.
		 */
		protected $version;

		/**
		 * Define the core functionality of the plugin.
		 *
		 * Set the plugin name and the plugin version that can be used throughout the plugin.
		 * Load the dependencies, define the locale, and set the hooks for the admin area and
		 * the public-facing side of the site.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {

			if ( defined( 'UNIVERSAL_GOOGLE_ADSENSE_AND_ADS_MANAGER_VERSION' ) ) {

				$this->version = UNIVERSAL_GOOGLE_ADSENSE_AND_ADS_MANAGER_VERSION;
			} else {

				$this->version = '1.0.0';
			}

			$this->plugin_name = 'universal-google-adsense-and-ads-manager';

			$this->load_dependencies();
			$this->set_locale();
			$this->define_admin_hooks();
			$this->define_public_hooks();
			$this->loop_init();
			$this->content_init();
			$this->sticky_ad_init();
			$this->customize_init();
			$this->shortcode_init();
			$this->post_custom_field_init();
		}

		/**
		 * Load the required dependencies for this plugin.
		 *
		 * Include the following files that make up the plugin:
		 *
		 * - Universal_Google_AdSense_And_Ads_Manager_Loader. Orchestrates the hooks of the plugin.
		 * - Universal_Google_AdSense_And_Ads_Manager_i18n. Defines internationalization functionality.
		 * - Universal_Google_AdSense_And_Ads_Manager_Admin. Defines all hooks for the admin area.
		 * - Universal_Google_AdSense_And_Ads_Manager_Public. Defines all hooks for the public side of the site.
		 *
		 * Create an instance of the loader which will be used to register the hooks
		 * with WordPress.
		 *
		 * @since    1.0.0
		 * @access   private
		 */
		private function load_dependencies() {

			/**
			 * The class responsible for orchestrating the actions and filters of the
			 * core plugin.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ugaam-loader.php';

			/**
			 * The class responsible for defining internationalization functionality
			 * of the plugin.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ugaam-i18n.php';

			/**
			 * The class responsible for defining all actions that occur in the admin area.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-ugaam-admin.php';

			/**
			 * The class responsible for defining all actions that occur in the public-facing
			 * side of the site.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-ugaam-public.php';

			/**
			 * Load ad related functions.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/shortcodes.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/hook-loop-start.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/hook-the-content.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/sticky-ads.php';		
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/template-functions.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/template-hooks.php';

			/**
			 * Load class responsible for defining ad shortcodes.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/shortcodes.php';

			/**
			 * Load ad widgets
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/widgets/class-ugaam-ad-widget.php';

			/**
			 * The class responsible for defining all actions for theme customizer.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/customizer/class-ugaam-customizer.php';

			/**
			 * The class responsible for defining post custom field.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-fields/class-ugaam-post-field.php';

			/**
			 * The class responsible for detecting device.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/library/class-ugaam-mobile-detect.php';

			/**
			 * Load UDP agent class.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/udp/init.php';


			$this->loader = new Universal_Google_AdSense_And_Ads_Manager_Loader();
		}

		/**
		 * Define the locale for this plugin for internationalization.
		 *
		 * Uses the Universal_Google_AdSense_And_Ads_Manager_i18n class in order to set the domain and to register the hook
		 * with WordPress.
		 *
		 * @since    1.0.0
		 * @access   private
		 */
		private function set_locale() {

			$plugin_i18n = new Universal_Google_AdSense_And_Ads_Manager_i18n();

			$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
		}

		/**
		 * Register all of the hooks related to the admin area functionality
		 * of the plugin.
		 *
		 * @since    1.0.0
		 * @access   private
		 */
		private function define_admin_hooks() {

			$plugin_admin = new Universal_Google_AdSense_And_Ads_Manager_Admin( $this->get_plugin_name(), $this->get_version() );

			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
			$this->loader->add_action( 'admin_menu', $plugin_admin, 'plugin_menu' );
		}

		/**
		 * Register all of the hooks related to the public-facing functionality
		 * of the plugin.
		 *
		 * @since    1.0.0
		 * @access   private
		 */
		private function define_public_hooks() {

			$plugin_public = new Universal_Google_AdSense_And_Ads_Manager_Public( $this->get_plugin_name(), $this->get_version() );

			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		}

		/**
		 * Register all of the hooks related to main query loop.
		 *
		 * @since 	 1.0.0	
		 * @access   public
		 */
		public function loop_init() {

			$plugin_loop = new Universal_Google_AdSense_And_Ads_Manager_Loop();

			$this->loader->add_action( 'loop_start', $plugin_loop, 'loop_start' );
			$this->loader->add_action( 'loop_end', $plugin_loop, 'loop_end' );
		}

		/**
		 * Register all of the hooks related to content loop.
		 *
		 * @since 	 1.0.0	
		 * @access   public
		 */
		public function content_init() {

			$plugin_content = new Universal_Google_AdSense_And_Ads_Manager_Content();

			$this->loader->add_filter( 'the_content', $plugin_content, 'the_content', 100 );
		}

		/**
		 * Register all of the hooks related to sticky ads.
		 *
		 * @since 	 1.0.0	
		 * @access   public
		 */
		public function sticky_ad_init() {

			$sticky_ad_content = new Universal_Google_AdSense_And_Ads_Manager_Sticky_Ads();

			$this->loader->add_filter( 'wp_footer', $sticky_ad_content, 'sticky_header_ad', 10 );
			$this->loader->add_filter( 'wp_footer', $sticky_ad_content, 'sticky_footer_ad', 10 );
		}

		/**
		 * Initializing the theme customizer api.
		 *
		 * @since    1.0.0
		 * @access   public
		 */
		public function customize_init() {

			$plugin_customize = new Universal_Google_AdSense_And_Ads_Manager_Customize();

			$this->loader->add_action( 'customize_register', $plugin_customize, 'customize_register' );
			$this->loader->add_action( 'customize_controls_enqueue_scripts', $plugin_customize, 'enqueue_customizer_scripts' );
		}

		/**
		 * Register all of the shortcodes.
		 *
		 * @since 	 1.0.0	
		 * @access   public
		 */
		public function shortcode_init() {

			$plugin_shortcode = new Universal_Google_AdSense_And_Ad_Manager_Ad_Shortcode();
		}

		/**
		 * Register all of the shortcodes.
		 *
		 * @since 	 1.0.3	
		 * @access   public
		 */
		public function post_custom_field_init() {

			$post_custom_field = new UGAAM_Post_Meta();
		}

		/**
		 * Run the loader to execute all of the hooks with WordPress.
		 *
		 * @since    1.0.0
		 */
		public function run() {

			$this->loader->run();
		}

		/**
		 * The name of the plugin used to uniquely identify it within the context of
		 * WordPress and to define internationalization functionality.
		 *
		 * @since     1.0.0
		 * @return    string    The name of the plugin.
		 */
		public function get_plugin_name() {

			return $this->plugin_name;
		}

		/**
		 * The reference to the class that orchestrates the hooks with the plugin.
		 *
		 * @since     1.0.0
		 * @return    Universal_Google_AdSense_And_Ads_Manager_Loader    Orchestrates the hooks of the plugin.
		 */
		public function get_loader() {

			return $this->loader;
		}

		/**
		 * Retrieve the version number of the plugin.
		 *
		 * @since     1.0.0
		 * @return    string    The version number of the plugin.
		 */
		public function get_version() {

			return $this->version;
		}
	}
}
