<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://themebeez.com
 * @since      1.0.0
 *
 * @package    Universal_Google_AdSense_And_Ads_Manager
 * @subpackage Universal_Google_AdSense_And_Ads_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Universal_Google_AdSense_And_Ads_Manager
 * @subpackage Universal_Google_AdSense_And_Ads_Manager/admin
 * @author     themebeez <themebeez@gmail.com>
 */
class Universal_Google_AdSense_And_Ads_Manager_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Universal_Google_AdSense_And_Ads_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Universal_Google_AdSense_And_Ads_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ugaam-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Universal_Google_AdSense_And_Ads_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Universal_Google_AdSense_And_Ads_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'media-upload' );

		wp_enqueue_media();

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ugaam-admin.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Register plugin menu in dashboard.
	 *
	 * @since    1.0.0
	 */
	public function plugin_menu() {

		add_menu_page( 'Universal Google AdSense And Ads Manager', 'UGGAM', 'manage_options', 'ugaam', array( $this, 'plugin_page' ), 'dashicons-screenoptions' );
	}

	/**
	 * Register plugin page.
	 *
	 * @since    1.0.0
	 */
	public function plugin_page() {

		require_once plugin_dir_path( __FILE__ ) . 'partials/ugaam-admin-display.php';
	}
}
