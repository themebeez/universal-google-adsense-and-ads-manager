<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://themebeez.com
 * @since      1.0.0
 *
 * @package    Universal_Google_AdSense_And_Ads_Manager
 * @subpackage Universal_Google_AdSense_And_Ads_Manager/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="ugaam-info-page">
	<div class="ugaam-plugin-title">
		<h2><?php _e( 'Universal Google AdSense And Ads Manager', 'universal-google-adsense-and-ads-manager' ); ?></h2>
	</div>

	<div class="ugaam-page-section ugaam-plugin-welcome">
		<div class="ugaam-page-section-title">
			<h3></h3>
		</div>

		<div class="ugaam-page-section-desc">
			
		</div>
	</div>

	<div class="ugaam-page-section ugaam-plugin-instruction">
		<div class="ugaam-page-section-title">
			<h3><?php _e( 'Instructions To Use UGAAM', 'universal-google-adsense-and-ads-manager' ); ?></h3>
		</div>
		<div class="ugaam-page-section-desc">

			<h4><?php _e( 'Customizer', 'universal-google-adsense-and-ads-manager' ); ?></h4>
			<p><?php _e( 'All the settings for the managing advertisements for different pages are contained inside <b><a href="'.esc_url( wp_customize_url() ).'" target="_blank">Customize</a>.</b>', 'universal-google-adsense-and-ads-manager.' ); ?></p>
			<ul>
				<li><?php _e( 'Navigate to <i><b>Appearance > Customize > Universal Google AdSense &amp; Ads Manager</b></i>', 'universal-google-adsense-and-ads-manager' ); ?></li>
				<li><?php _e( 'There you will find 6 sections.', '' ) ?>
					<ul>
						<li><?php _e( '<b>Blog Page</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
						<li><?php _e( '<b>Archive Page</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
						<li><?php _e( '<b>Single Post/Page</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
						<li><?php _e( '<b>Sticky Header Ads</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
						<li><?php _e( '<b>Sticky Footer Ads</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
						<li><?php _e( '<b>Header/Footer Scripts</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
					</ul>
					<?php _e( 'Except for <b></b>, all other sections contain settings for ad management for respective pages.', 'universal-google-adsense-and-ads-manager' ); ?>
				</li>
			</ul>
			
			<h4><?php _e( 'Widget', 'universal-google-adsense-and-ads-manager' ); ?></h4>
			<p><?php _e( 'Add advertisement into widget area are such as sidebar, footer etc. via <b><a href="'.esc_url( admin_url( 'widgets.php' ) ).'" target="_blank">Widgets</a>.</b>', 'universal-google-adsense-and-ads-manager' ); ?></p>
			<ul>
				<li><?php _e( 'Navigate to <i><b>Appearance > Widgets</b></i> or <i><b>Appearance > Customize > Widgets</b></i>', 'universal-google-adsense-and-ads-manager' ); ?></li>
				<li><?php _e( 'Look for widget <b>UGAAM: Ads and Scripts</b>. Add the widget into desired widget areas to display Advertisements.', 'universal-google-adsense-and-ads-manager' ); ?></li>
			</ul>

			<h4><?php _e( 'Shortcode', 'universal-google-adsense-and-ads-manager' ); ?></h4>
			<p><?php _e( 'Make use of shortcode to display advertisements.', 'universal-google-adsense-and-ads-manager' ); ?></p>
			<ul>
				<li><?php _e( 'The shortcode to display an advertisement content is, <b>[ugaam_ad]advertisement_content[/ugaam_ad]</b>. The advertisement content goes between <b>[ugaam_ad]</b> and <b>[/ugaam_ad]</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
				<li><?php _e( 'The shortcode to display mutiple advertisement contents is, <b>[ugaam_ad]first_advertisement_content &lt;!-- ad --&gt; second_advertisement_content[/ugaam_ad]</b>. The advertisement contents go between <b>[ugaam_ad]</b> and <b>[/ugaam_ad]</b> and is separated by <b>&lt;!-- ad --&gt;</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
				<li><?php _e( 'To align the advertisement content, set attribute class inside <b>[ugaam_ad]</b>. For example: <b>[ugaam_ad class="ugaam-left-align"]</b>, <b>[ugaam_ad class="ugaam-center-align"]</b>, <b>[ugaam_ad class="ugaam-right-align"]</b>', 'universal-google-adsense-and-ads-manager' ); ?></li>
			</ul>
		</div>
	</div>
</div>