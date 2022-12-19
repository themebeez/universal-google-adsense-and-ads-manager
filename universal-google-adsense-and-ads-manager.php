<?php
/**
 * Plugin Name:       Universal Google AdSense and Ads Manager
 * Plugin URI:        https://themebeez.com/universal-google-adsense-ads-manager
 * Description:       Universal Google AdSense and Ads Manager is a simple, and easy to use Google AdSense and custom advertisement manager for your WordPress websites.
 * Version:           1.1.0
 * Author:            themebeez
 * Author URI:        https://themebeez.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       universal-google-adsense-and-ads-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'UNIVERSAL_GOOGLE_ADSENSE_AND_ADS_MANAGER_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-universal-google-adsense-and-ads-manager-activator.php
 */
function activate_universal_google_adsense_and_ads_manager() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ugaam-activator.php';
	Universal_Google_AdSense_And_Ads_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-universal-google-adsense-and-ads-manager-deactivator.php
 */
function deactivate_universal_google_adsense_and_ads_manager() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ugaam-deactivator.php';
	Universal_Google_AdSense_And_Ads_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_universal_google_adsense_and_ads_manager' );
register_deactivation_hook( __FILE__, 'deactivate_universal_google_adsense_and_ads_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ugaam.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_universal_google_adsense_and_ads_manager() {

	$plugin = new Universal_Google_AdSense_And_Ads_Manager();
	$plugin->run();

}
run_universal_google_adsense_and_ads_manager();
