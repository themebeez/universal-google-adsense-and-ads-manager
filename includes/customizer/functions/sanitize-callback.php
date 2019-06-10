<?php
/**
 * Collection of functions to sanitize customizer field values.
 *
 * @package Easy_Adsense_Ads_Manager
 */


/**
 * Sanitization callback function for number field with value in range.
 */
if ( ! function_exists( 'universal_google_adsense_and_ads_manager_sanitize_range' ) ) {

    function universal_google_adsense_and_ads_manager_sanitize_range( $input, $setting ) {

        if(  $input <= $setting->manager->get_control( $setting->id )->input_attrs['max'] ) {

            if( $input >= $setting->manager->get_control( $setting->id )->input_attrs['min'] ) {

                return absint( $input );
            }
        }
    }
}


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
 * Sanitization function for multiple select.
 */
if( !function_exists( 'universal_google_adsense_and_ads_manager_sanitize_multiple_select' ) ) {

    function universal_google_adsense_and_ads_manager_sanitize_multiple_select( $input, $setting ) {

        if( !empty( $input ) ) {

            $input = array_map( 'sanitize_text_field', $input );
        }

        return $input;
    } 
}

/**
 * Sanitization function text with link
 */
if ( !function_exists('universal_google_adsense_and_ads_manager_sanitize_text_link') ) {

    function universal_google_adsense_and_ads_manager_sanitize_text_link( $input ) {

        $allowed_tags = array(
            'a' => array(
                'href' => array(),
                'title' => array(),
                '_target' => array(),
            ),
            'span' => array(
                'class' => array(),
                'id' => array(),
            ),
        );

        return wp_kses( $input, $allowed_tags );
    }
}


if( ! function_exists( 'universal_google_adsense_and_ads_manager_sanitize_responsive_spacing' ) ) {

    function universal_google_adsense_and_ads_manager_sanitize_responsive_spacing( $inputs ) {

        $spacing = array(
            'desktop'      => array(
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
            ),
            'tablet'       => array(
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
            ),
            'mobile'       => array(
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
            ),
            'desktop-unit' => 'px',
            'tablet-unit'  => 'px',
            'mobile-unit'  => 'px',
        );

        if ( isset( $inputs['desktop'] ) ) {
            $spacing['desktop'] = array_map(
                function ( $value ) {
                        return ( is_numeric( $value ) && $value >= 0 ) ? $value : '';
                },
                $inputs['desktop']
            );

            $spacing['tablet'] = array_map(
                function ( $value ) {
                        return ( is_numeric( $value ) && $value >= 0 ) ? $value : '';
                },
                $inputs['tablet']
            );

            $spacing['mobile'] = array_map(
                function ( $value ) {
                        return ( is_numeric( $value ) && $value >= 0 ) ? $value : '';
                },
                $inputs['mobile']
            );

            if ( isset( $inputs['desktop-unit'] ) ) {
                $spacing['desktop-unit'] = $inputs['desktop-unit'];
            }

            if ( isset( $inputs['tablet-unit'] ) ) {
                $spacing['tablet-unit'] = $inputs['tablet-unit'];
            }

            if ( isset( $inputs['mobile-unit'] ) ) {
                $spacing['mobile-unit'] = $inputs['mobile-unit'];
            }

            return $spacing;

        } else {
            foreach ( $inputs as $key => $value ) {
                $inputs[ $key ] = is_numeric( $inputs[ $key ] ) ? $inputs[ $key ] : '';
            }
            return $inputs;
        }
    }
}