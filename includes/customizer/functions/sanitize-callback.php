<?php
/**
 * Collection of functions to sanitize customizer field values.
 *
 * @package Easy_Adsense_Ads_Manager
 */


/**
 * Sanitization callback function for number field.
 */
if ( ! function_exists( 'universal_google_adsense_and_ads_manager_sanitize_number' ) ) {

    function universal_google_adsense_and_ads_manager_sanitize_number( $input, $setting ) {

        return absint( $input );
    }
}


/**
 * Sanitization callback function for select field.
 */
if ( !function_exists('universal_google_adsense_and_ads_manager_sanitize_select') ) {

    function universal_google_adsense_and_ads_manager_sanitize_select( $input, $setting ) {

        $input = sanitize_key( $input );
        
        $choices = $setting->manager->get_control( $setting->id )->choices;
        
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
}


/**
 * Sanitization callback function for script.
 */
if( !function_exists( 'universal_google_adsense_and_ads_manager_sanitize_script' ) ) {

    function universal_google_adsense_and_ads_manager_sanitize_script( $input ) {

        return $input;       
    }
}
