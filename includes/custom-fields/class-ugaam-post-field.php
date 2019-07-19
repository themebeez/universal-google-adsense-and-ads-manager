<?php
/**
 * Custom field for post page sidebar position.
 */

if( ! class_exists( 'UGAAM_Post_Meta' ) ) {

	class UGAAM_Post_Meta {

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    1.0.0
		 * @param      string    'cream-magazine'       The name of this plugin.
		 * @param      string    $version    The version of this plugin.
		 */
		public function __construct() {

			// Register post meta fields and save meta fields values.
			add_action( 'admin_init', array( $this, 'register_post_meta' ) );
			add_action( 'save_post', array( $this, 'save_ad_content_meta' ) );
		}

		/**
		 * Register post custom meta fields.
		 *
		 * @since    1.0.0
		 */
		public function register_post_meta() {   

		    add_meta_box( 'ad_content_metabox', esc_html__( 'AD Option', 'universal-google-adsense-and-ads-manager' ), array( $this, 'ad_content_meta' ), array( 'post', 'page' ), 'side', 'default' );
		}

		/**
		 * Custom Sidebar Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function ad_content_meta() {

			global $post;

			$disable_ad = get_post_meta( $post->ID, 'ugaam-disable-ad-content', true );

		    wp_nonce_field( 'ugaam_disable_ad_content_meta_nonce', 'ugaam_disable_ad_content_meta_nonce_id' );
		    ?>
		    <table width="100%" border="0" class="options" cellspacing="5" cellpadding="5">
		        <tr>
		            <td width="10%">
		                <input type="checkbox" name="disable_ad" id="disable_ad" value="1" <?php checked( $disable_ad, '1' ); ?>><label><?php echo esc_html__( 'Hide Ad Content', 'universal-google-adsense-and-ads-manager' ) ?></label>
		            </td>
		        </tr>   
		    </table>    
		    <?php 
		}

		/**
		 * Save Custom Sidebar Position Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function save_ad_content_meta() {

		    global $post;  

		    // Bail if we're doing an auto save
		    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if( !isset( $_POST['ugaam_disable_ad_content_meta_nonce_id'] ) || !wp_verify_nonce( sanitize_key( $_POST['ugaam_disable_ad_content_meta_nonce_id'] ), 'ugaam_disable_ad_content_meta_nonce' ) ) {
		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post->ID ) ) {
		        return;
		    } 
			
			update_post_meta( $post->ID, 'ugaam-disable-ad-content', absint( wp_unslash( $_POST['disable_ad'] ) ) ); 
		}
	}
}