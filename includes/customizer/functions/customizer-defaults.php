<?php

if ( ! function_exists( 'universal_google_adsense_and_ads_manager_get_option' ) ) {

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function universal_google_adsense_and_ads_manager_get_option( $key ) {

        if ( empty( $key ) ) {
            return;
        }

        $fullkey = 'universal_google_adsense_and_ads_manager_field_'. $key;

        $value = '';

        $default = universal_google_adsense_and_ads_manager_get_default_theme_options();

        $default_value = null;

        if ( is_array( $default ) && isset( $default[ $key ] ) ) {
            $default_value = $default[ $key ];
        }

        if ( null !== $default_value ) {
            $value = get_theme_mod( $fullkey, $default_value );
        }
        else {
            $value = get_theme_mod( $fullkey );
        }

        return $value;
    }
}


if ( ! function_exists( 'universal_google_adsense_and_ads_manager_get_default_theme_options' ) ) {

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function universal_google_adsense_and_ads_manager_get_default_theme_options() {

        return array(

            'enable_ad_in_home' => false,
            'ad_alignment_in_home' => 'default',
            'home_ad_type' => 'custom_ad',
            'home_custom_ad_image' => '',            
            'home_custom_ad_link' => '',            
            'home_ad_script_desk_n_tab' => '',            
            'home_ad_script_mobile' => '',
            'home_ad_position' => 'before_first_post',            
            'home_repeat_ad' => false,            
            'home_repeat_ad_for' => 1,            
            'home_show_ad_after' => 1, 
            'home_repeat_ad_after' => 1, 
            'home_enable_custom_css' => false,
            'home_custom_css_class' => '',
            'home_ad_margin' => '0,0,0,0,0,0,0,0,0,0,0,0',

            'enable_ad_in_archive' => false,
            'ad_alignment_in_archive' => 'default',
            'archive_ad_type' => 'custom_ad',
            'archive_custom_ad_image' => '',            
            'archive_custom_ad_link' => '',            
            'archive_ad_script_desk_n_tab' => '',            
            'archive_ad_script_mobile' => '',
            'archive_ad_position' => 'before_first_post',            
            'archive_repeat_ad' => false,            
            'archive_repeat_ad_for' => 1,            
            'archive_show_ad_after' => 1, 
            'archive_repeat_ad_after' => 1, 
            'archive_enable_custom_css' => false,
            'archive_custom_css_class' => '',
            'archive_ad_margin' => '0,0,0,0,0,0,0,0,0,0,0,0',

            'enable_ad_in_post_page' => false,
            'ad_alignment_in_post_page' => 'default',
            'post_page_ad_type' => 'custom_ad',
            'post_page_custom_ad_image' => '',            
            'post_page_custom_ad_link' => '',            
            'post_page_ad_script_desk_n_tab' => '',            
            'post_page_ad_script_mobile' => '',
            'post_page_ad_position' => 'before_post_content',            
            'post_page_repeat_ad' => false,            
            'post_page_repeat_ad_for' => 1,            
            'post_page_show_ad_after' => 1,   
            'post_page_repeat_ad_after' => 1,   
            'post_page_enable_custom_css' => false,
            'post_page_custom_css_class' => '',
            'post_page_ad_margin' => '0,0,0,0,0,0,0,0,0,0,0,0',

            'enable_sticky_ad_on_header' => false, 
            'ad_alignment_in_header' => 'default',
            'header_ad_type' => 'custom_ad',
            'header_custom_ad_image' => '',            
            'header_custom_ad_link' => '',            
            'header_ad_script_desk_n_tab' => '',            
            'header_ad_script_mobile' => '', 
            'header_enable_custom_css' => false,
            'header_custom_css_class' => '',
            'header_ad_margin' => '0,0,0,0,0,0,0,0,0,0,0,0',  

            'enable_sticky_ad_on_footer' => false, 
            'ad_alignment_in_footer' => 'default',
            'footer_ad_type' => 'custom_ad',
            'footer_custom_ad_image' => '',            
            'footer_custom_ad_link' => '',            
            'footer_ad_script_desk_n_tab' => '',            
            'footer_ad_script_mobile' => '', 
            'footer_enable_custom_css' => false,
            'footer_custom_css_class' => '',
            'footer_ad_margin' => '0,0,0,0,0,0,0,0,0,0,0,0',

            'header_script' => '',
            'footer_script' => '',       
        );
    }
}