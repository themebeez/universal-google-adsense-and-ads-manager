<?php
/**
 * Function to add shortcode for themes.
 */

if( ! class_exists( 'Universal_Google_AdSense_And_Ad_Manager_Ad_Shortcode' ) ) {

	class Universal_Google_AdSense_And_Ad_Manager_Ad_Shortcode {

		public function __construct() {

			add_shortcode( 'ugaam_ad', array( $this, 'create_shortcode' ) );
		}

		public function create_shortcode( $attrs, $content ) {

			$css_class = !empty( $attrs['class'] ) ? $attrs['class'] : '';

			$contents = '';
			
			if( ! empty( $css_class ) ) {

				$css_classes = !empty( $css_class ) ? explode( ' ', $css_class ) : '';

				$contents = ( explode( '<!-- ad -->', $content ) ) ? explode( '<!-- ad -->', $content ) : $content;
			}

			ob_start();
			?>
			<div class="ugaam-ad-wrapper-outer <?php if( !empty( $css_class ) ) { echo esc_attr( $css_class ); } ?>">
				<div class="ugaam-ad-wrapper">
					<div class="ugaam-ad-wrapper-inner">
						<?php
						if( is_array( $contents ) ) {
							
							foreach( $contents as $ad_content ) {
								?>
								<p class="ugaam-ad-content">
									<?php echo do_shortcode( $ad_content ); ?>
								</p>
								<?php
							}
						} else {
							?>
							<p class="ugaam-ad-content">
								<?php echo do_shortcode( $content ); ?>
							</p>
							<?php
						}
						?>
					</div>
				</div>
			</div>
			<?php
			return ob_get_clean();
		}
	}
}