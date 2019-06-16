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

<section class="ugaam-main-page-wrap">
    <div class="section-inner">
        <div class="ug-main">
            <div class="ug-row">
                <div class="ug-col content-main left">
                    <section class="ugaam-welcome-section ug-white-bg ug-section-spacing ug-section-shadow">
                        <div class="ugaam-plugin-title">
                            <h2>
                                <?php _e( 'Universal Google AdSense And Ads Manager', 'universal-google-adsense-and-ads-manager' ); ?>
                            </h2>
                        </div><!-- // ugaam-plugin-title -->
                        <div class="ugaam-plugin-intro">
                            <p><?php _e( 'Universal Google Adsense and Ads manager is a flexible easy to use Google Adsense, custom ads & script manager WordPress plugin. Universal Google Adsense and Ads manager ( UGAAM ) allows WordPress users to monetization your website easily. UGAAM supports Google Ads ( including Google auto Ads ), Custom image banner ads, other advertisement network based on javascript ( Example: mgid, buy sell ads, Bidvertiser, affiliates ads etc )', 'universal-google-adsense-and-ads-manager' ); ?></p>
                        </div><!-- // ugaam-plugin-intro -->
                    </section><!-- // ugaam-welcome-section ug-white-bg -->
                    <section class="ugaam-features-section ug-section-spacing">
                        <div class="ug-row">
                            <div class="ug-col">
                                <div class="ug-card ug-white-bg ug-section-shadow">
                                    <div class="ug-icon">
                                        <span class="dashicons dashicons-schedule"></span>
                                    </div><!-- // ug-icon -->
                                    <div class="ug-title">
                                        <h3>
                                            <?php _e( 'Google adsense', 'universal-google-adsense-and-ads-manager' ); ?>
                                        </h3>
                                    </div><!-- // ug-title -->
                                    <div class="ug-description">
                                        <p><?php _e( 'Monetize your website with Google Adsense without any hassle. Start earning just adding your Adsense code from customizer', 'universal-google-adsense-and-ads-manager' ); ?></p>
                                    </div><!-- // ug-description -->
                                </div><!-- // ug-card -->
                            </div><!-- // ug-col -->
                            <div class="ug-col">
                                <div class="ug-card ug-white-bg ug-section-shadow">
                                    <div class="ug-icon">
                                        <span class="dashicons dashicons-megaphone"></span>
                                    </div><!-- // ug-icon -->
                                    <div class="ug-title">
                                        <h3>
                                            <?php _e( 'Custom banner Ads', 'universal-google-adsense-and-ads-manager' ); ?>
                                        </h3>
                                    </div><!-- // ug-title -->
                                    <div class="ug-description">
                                        <p><?php _e( 'UGAAM is not just limited to Google Adsense, feel the freedom to monetise your website using other ads network too', 'universal-google-adsense-and-ads-manager' ); ?></p>
                                    </div><!-- // ug-description -->
                                </div><!-- // ug-card -->
                            </div><!-- // ug-col -->
                            <div class="ug-col">
                                <div class="ug-card ug-white-bg ug-section-shadow">
                                    <div class="ug-icon">
                                        <span class="dashicons dashicons-lightbulb"></span>
                                    </div><!-- // ug-icon -->
                                    <div class="ug-title">
                                        <h3>
                                            <?php _e( 'Insert scripts', 'universal-google-adsense-and-ads-manager' ); ?>
                                        </h3>
                                    </div><!-- // ug-title -->
                                    <div class="ug-description">
                                        <p><?php _e( 'Wondering how to insert any scripts to either verify your domain or for different reason, UGAAM makes it simple', 'universal-google-adsense-and-ads-manager' ); ?></p>
                                    </div><!-- // ug-description -->
                                </div><!-- // ug-card -->
                            </div><!-- // ug-col -->
                        </div><!-- // ug-row -->
                    </section><!-- // ugaam-features-section -->
                    <section class="ugaam-getting-started-section ug-white-bg ug-section-spacing ug-section-shadow">
                        <div class="ugaam-section-title">
                            <h2>
                                <?php _e( 'Getting started ..', 'universal-google-adsense-and-ads-manager' ); ?>
                            </h2>
                        </div><!-- // ugaam-section-title -->
                        <div class="ug-started-inner">
                            <div class="ug-accordion">
                            	<h4><?php _e( 'Q.1: Where can I insert Google domain verification code?', 'universal-google-adsense-and-ads-manager' ); ?></h4>
                            </div>
                            <div class="ugpanel">
                                <p><?php _e( 'To verify your domian with Google, kindly navigate to Dashboard > Appearance > Customizer > Universal Google AdSense & Ad Manager > Header/Footer Script manager', 'universal-google-adsense-and-ads-manager' ); ?></p>
                            </div>
                            <div class="ug-accordion">
                            	<h4><?php _e( 'Q.2: How can I insert my Google Adsense advertisement code?', 'universal-google-adsense-and-ads-manager' ); ?></h4>
                        	</div>
                            <div class="ugpanel">
                                <p><?php _e( 'To insert your Google adsense code go to Dashboard > Appearance > Customizer > Universal Google AdSense & Ad Manager', 'universal-google-adsense-and-ads-manager' ); ?></p>
                            </div>
                            <div class="ug-accordion">
                            	<h4><?php _e( 'Q.3: Can I use custom image banner ads?', 'universal-google-adsense-and-ads-manager' ); ?></h4>
                        	</div>
                            <div class="ugpanel">
                                <p><?php _e( 'Yes, you can do that. In order to upload your custom banner advertisement go to Dashboard > Appearance > Customizer > Universal Google AdSense & Ad Manager.', 'universal-google-adsense-and-ads-manager' ); ?></p>
                            </div>
                             <div class="ug-accordion">
                                <h4><?php _e( 'Q.4: Can I use other advertisement network ads?', 'universal-google-adsense-and-ads-manager' ); ?></h4>
                            </div>
                            <div class="ugpanel">
                                <p><?php _e( 'Yes, you can even use to promote affiliation of bluehost, siteground, amazon etc.', 'universal-google-adsense-and-ads-manager' ); ?></p>
                            </div>
                            <div class="ug-accordion">
                                <h4><?php _e( 'Q.5: Do you provide free support?', 'universal-google-adsense-and-ads-manager' ); ?></h4>
                            </div>
                            <div class="ugpanel">
                                <p><?php _e( 'Yes, we do. Kindly contact us from <a href="https://themebeez.com/support/">Support page</a> directly or drop your mail at themebeez@gmail.com.', 'universal-google-adsense-and-ads-manager' ); ?></p>
                            </div>
                        </div><!-- // ug-started-inner -->
                    </section><!-- // ugaam-welcome-section ug-white-bg -->
                </div><!-- // ug-col -->
                <div class="ug-col sidebar right">
                    <aside class="ug-aside">
                        <div class="ug-buttons ug-white-bg ug-section-shadow">
                        <div class="ugaam-section-title">
                            <h2><?php _e( 'Quick Links ...', 'universal-google-adsense-and-ads-manager' ); ?></h2>                                
                        </div>
                            <ul>
                                <li><a href="<?php echo esc_url( wp_customize_url() ); ?>" target="_blank"><?php _e( 'Insert Scripts', 'universal-google-adsense-and-ads-manager' ); ?></a></li>
                                <li><a href="<?php echo esc_url( wp_customize_url() ); ?>" target="_blank"><?php _e( 'Insert Ads', 'universal-google-adsense-and-ads-manager' ); ?></a></li>
                                <li><a href="https://themebeez.com/ugaam-documentation/" target="_blank"><?php _e( 'UGAAM Documenation', 'universal-google-adsense-and-ads-manager' ); ?></a></li>
                                <li><a href="https://themebeez.com/support/" target="_blank"><?php _e( 'Get Support', 'universal-google-adsense-and-ads-manager' ); ?></a></li>
                                <li><a href="https://wordpress.org/plugins/universal-google-adsense-and-ads-manager/#reviews" target="_blank"><?php _e( 'Rate UGAAM', 'universal-google-adsense-and-ads-manager' ); ?></a></li>
                            </ul>
                        </div><!-- // ug-buttons -->
                    </aside><!-- // ug-aside -->
                </div><!-- // ug-col -->
            </div><!-- / ug-row -->
        </div><!-- // ug-main -->
    </div><!-- // section-inner -->
</section><!-- // ugaam-main-page-wrap -->