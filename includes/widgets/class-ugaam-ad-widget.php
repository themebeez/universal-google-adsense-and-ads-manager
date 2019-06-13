<?php
/**
 * Universal Google AdSense And Ads Manager Ad Widget
 *
 * @package Universal_Google_AdSense_And_Ads_Manager
 */

if( ! class_exists( 'Universal_Google_AdSense_And_Ads_Manager_Advertisement_Widget' ) ) :

    class Universal_Google_AdSense_And_Ads_Manager_Advertisement_Widget extends WP_Widget {
 
        function __construct() { 

            parent::__construct(
                'universal-google-adsense-and-ads-manager-advertisement-widget',
                esc_html__( 'UGAAM: Ads and Scripts', 'universal-google-adsense-and-ads-manager' ),
                array(
                    'classname' => '',
                    'description' => esc_html__( 'Displays custom ad or adsense ad.', 'universal-google-adsense-and-ads-manager' ), 
                )
            );
     
        }
     
        public function widget( $args, $instance ) {

            $title              	= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
            $ad_type 				= $instance['ad_type'];
            $custom_ad_img			= $instance['custom_ad_img'];
            $custom_ad_link			= $instance['custom_ad_link'];
            $desktop_tablet_script	= $instance['desktop_tablet_script'];
            $mobile_script			= $instance['mobile_script'];

            if( !empty( $args['before_widget'] ) ) {

                echo $args['before_widget'];
            } else {
                ?>
                <div class="widget ugga-ad-widget">
                <?php
            }

            if( !empty( $args['before_title'] ) ) {

                echo $args['before_title'];
            } else {
                ?>
                <div class="widget-title">
                    <h3>
                <?php
            }

            echo esc_html( $title );

            if( !empty( $args['after_title'] ) ) {

                echo $args['after_title'];
            } else {
                ?>
                    </h3>
                </div>
                <?php
            }            
            ?>
            <div class="ugaam-ad-wrapper-outer ugaam-widget-ad-wrapper">
                <div class="ugaam-ad-wrapper">
                    <div class="ugaam-ad-wrapper-inner">
                        <?php
                        if( $ad_type == 'custom_ad' ) {
                            ?>
                            <div class="ugaam-custom-ad">
                                <?php
                                if( !empty( $custom_ad_link ) ) {
                                    ?>
                                    <a href="<?php echo esc_url( $custom_ad_link ); ?>"><?php
                                }

                                if( !empty( $custom_ad_img ) ) {
                                    ?>
                                    <img src="<?php echo esc_url( $custom_ad_img ); ?>"><?php
                                }
                                
                                if( !empty( $custom_ad_link ) ) {
                                    ?>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }

                        if( $ad_type == 'adsense_ad' ) {
                            ?>
                            <div class="ugaam-adsense-ad">
                                <?php
                                if( !empty( $desktop_tablet_script ) ) {
                                    ?>
                                    <div class="ugaam-desktop-tablet-adsense-ad">
                                        <?php echo stripslashes( $desktop_tablet_script ); ?>
                                    </div>
                                    <?php
                                }

                                if( !empty( $mobile_script ) ) {
                                    ?>
                                    <div class="ugaam-mobile-adsense-ad">
                                        <?php echo stripslashes( $mobile_script ); ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if( !empty( $args['after_widget'] ) ) {

                echo $args['after_widget'];
            } else {
                ?>
            </div>
                <?php
            }
            ?>
            <?php
        }
     
        public function form( $instance ) {
            $defaults = array(
                'title'                     => '',
                'ad_type'					=> 'custom_ad',
                'custom_ad_img'				=> '',
                'custom_ad_link'			=> '',
                'desktop_tablet_script'		=> '',
                'mobile_script'				=> '',
            );

            $instance = wp_parse_args( (array) $instance, $defaults );

            $custom_ad_image = $instance['custom_ad_img'];
            ?> 

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">
                    <strong><?php esc_html_e('Title', 'universal-google-adsense-and-ads-manager'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />   
            </p> 

            <p>
            	<label for="<?php echo esc_attr( $this->get_field_id( 'ad_type' ) ); ?>">
            		<strong><?php esc_html_e( 'Ad Type', 'universal-google-adsense-and-ads-manager' ); ?></strong>
            	</label>
            	<?php
            	$ad_type_choices = array(
            		'custom_ad'	=> esc_html__( 'Custom Ad', 'universal-google-adsense-and-ads-manager' ),
            		'adsense_ad'	=> esc_html__( 'AdSense Ad', 'universal-google-adsense-and-ads-manager' ),
            	);
            	?>
            	<select class="widefat ugaam-ad-type" name="<?php echo esc_attr( $this->get_field_name( 'ad_type' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'ad_type' ) ); ?>">
            		<?php
            		if( !empty( $ad_type_choices ) ) {

            			foreach( $ad_type_choices as $key => $ad_type_choice ) {
	            			?> 
	            			<option value="<?php echo esc_attr( $key ); ?>" <?php if( $instance['ad_type'] == $key ) { ?>selected="selected"<?php } ?>><?php echo esc_html( $ad_type_choice ); ?></option>
	            			<?php
	            		}
	            	}
	            	?>
            	</select>
            </p> 
            <?php
            $ad_type = $instance['ad_type'];
            $ad_input_field_hide_class = 'uggam-hide-ad-input-field';
            $ad_input_field_show_class = 'uggam-show-ad-input-field';
            ?>

            <p class="uggam-custom-input-field <?php if( $ad_type == "custom_ad" ) { echo esc_attr( $ad_input_field_show_class ); } else { echo esc_attr( $ad_input_field_hide_class ); } ?>">
                <label for="<?php echo esc_attr($this->get_field_id('custom_ad_img')); ?>">
                    <strong><?php esc_html_e('Custom Ad Image', 'universal-google-adsense-and-ads-manager'); ?></strong>
                </label>

                <span class="ugaam-image-uploader-container">

                    <?php
                    $upload_btn_class = 'button ugaam-upload-btn';
                    $remove_btn_class = 'button ugaam-remove-btn';

                    if( empty( $offer_image ) ) {

                        $remove_btn_class .= ' ugaam-btn-hide';
                        $upload_btn_class .= ' ugaam-btn-show';
                    } else {

                        $remove_btn_class .= ' ugaam-btn-show';
                        $upload_btn_class .= ' ugaam-btn-hide';
                    }

                    $img_class = 'ugaam-hide-img';
                    if( !empty( $custom_ad_image ) ) {
                        $img_class = 'ugaam-show-img';
                    }
                    ?>
                    
                    <img class="ugaam-upload-image-holder <?php echo esc_attr( $img_class ); ?>" src="<?php echo esc_url( $custom_ad_image ); ?>"/>
                    <input type="hidden" class="widefat ugaam-upload-image-url-holder" name="<?php echo esc_attr($this->get_field_name('custom_ad_img')); ?>" id="<?php echo esc_attr($this->get_field_id('custom_ad_img')); ?>" value="<?php echo esc_url( $custom_ad_image ); ?>">
                    <button class="<?php echo esc_attr( $upload_btn_class ); ?>" id="ugaam-upload-btn"><?php esc_html_e( 'Upload', 'universal-google-adsense-and-ads-manager' ); ?></button>
                    <button class="<?php echo esc_attr( $remove_btn_class ); ?>" id="ugaam-remove-btn"><?php esc_html_e( 'Remove', 'universal-google-adsense-and-ads-manager' ); ?></button>
                </span>
            </p>

            <p class="uggam-custom-input-field <?php if( $ad_type == "custom_ad" ) { echo esc_attr( $ad_input_field_show_class ); } else { echo esc_attr( $ad_input_field_hide_class ); } ?>">
                <label for="<?php echo esc_attr( $this->get_field_id('custom_ad_link') ); ?>">
                    <strong><?php esc_html_e('Custom Ad Link', 'universal-google-adsense-and-ads-manager'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('custom_ad_link') ); ?>" name="<?php echo esc_attr( $this->get_field_name('custom_ad_link') ); ?>" type="url" value="<?php echo esc_attr( $instance['custom_ad_link'] ); ?>" />   
            </p>

            <p class="uggam-adsense-input-field <?php if( $ad_type == "adsense_ad" ) { echo esc_attr( $ad_input_field_show_class ); } else { echo esc_attr( $ad_input_field_hide_class ); } ?>">
                <label for="<?php echo esc_attr( $this->get_field_id('desktop_tablet_script') ); ?>">
                    <strong><?php esc_html_e('Ad Script: Desktop &amp; Tablet', 'universal-google-adsense-and-ads-manager'); ?></strong>
                </label>
                <textarea class="widefat" name="<?php echo esc_attr( $this->get_field_name('desktop_tablet_script') ); ?>" id="<?php echo esc_attr( $this->get_field_id('desktop_tablet_script') ); ?>" cols="30" rows="10"><?php echo esc_html( $instance['desktop_tablet_script'] ); ?></textarea> 
            </p>
            

            <p class="uggam-adsense-input-field <?php if( $ad_type == "adsense_ad" ) { echo esc_attr( $ad_input_field_show_class ); } else { echo esc_attr( $ad_input_field_hide_class ); } ?>">
                <label for="<?php echo esc_attr( $this->get_field_id('mobile_script') ); ?>">
                    <strong><?php esc_html_e('Ad Script: Mobile', 'universal-google-adsense-and-ads-manager'); ?></strong>
                </label>
                <textarea class="widefat" name="<?php echo esc_attr( $this->get_field_name('mobile_script') ); ?>" id="<?php echo esc_attr( $this->get_field_id('mobile_script') ); ?>" cols="30" rows="10"><?php echo esc_html( $instance['mobile_script'] ); ?></textarea> 
            </p> 
            <?php
        }
     
        public function update( $new_instance, $old_instance ) {
     
            $instance = $old_instance;

            $instance['title']                      = sanitize_text_field( $new_instance['title'] );

            $instance['ad_type']					= sanitize_text_field( $new_instance['ad_type'] );

            $instance['custom_ad_img']				= esc_url_raw( $new_instance['custom_ad_img'] );

            $instance['custom_ad_link']				= esc_url_raw( $new_instance['custom_ad_link'] );

            if ( current_user_can( 'unfiltered_html' ) ) {

				$instance['desktop_tablet_script'] = $new_instance['desktop_tablet_script'];

				$instance['mobile_script']  = $new_instance['mobile_script'];
			} else {

				$instance['desktop_tablet_script'] = wp_kses_post( $new_instance['desktop_tablet_script'] );

				$instance['mobile_script']  = wp_kses_post( $new_instance['mobile_script'] );
			}

            return $instance;
        } 
    }
endif;


/**
 * Register the widgets.
 *
 * @since 0.1
 */
function universal_google_adsense_and_ads_manager_widgets_init() {

	register_widget( 'Universal_Google_AdSense_And_Ads_Manager_Advertisement_Widget' );
}
add_action( 'widgets_init', 'universal_google_adsense_and_ads_manager_widgets_init', 10 );