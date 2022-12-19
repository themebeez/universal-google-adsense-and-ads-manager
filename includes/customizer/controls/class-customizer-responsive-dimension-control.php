<?php


	/**
	 * Buttonset control
	 */
	class UGAAM_Customizer_Responsive_Dimension_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'responsive-dimensions';

		public function render_content() {

			if( !empty( $this->label ) ) {
				?>
				<span class="customize-control-title">
					<span><?php echo esc_html( $this->label ); ?></span>
					<span class="responsive-switchers-wrapper">
						<ul class="responsive-switchers">
							<li class="desktop">
								<button type="button" class="preview-desktop active" data-device="desktop">
									<i class="dashicons dashicons-desktop"></i>
								</button>
							</li>
							<li class="tablet">
								<button type="button" class="preview-tablet" data-device="tablet">
									<i class="dashicons dashicons-tablet"></i>
								</button>
							</li>
							<li class="mobile">
								<button type="button" class="preview-mobile" data-device="mobile">
									<i class="dashicons dashicons-smartphone"></i>
								</button>
							</li>
						</ul>
					</span>
				</span>

				<?php
			}

			if( ! empty( $this->description ) ) {
				?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php
			}

			$values = $this->value();

			if( empty( $values ) ) {

				$values = '0,0,0,0,0,0,0,0,0,0,0,0';
			} 

			if( !is_array( $values ) ) {
				$values = explode( ',', $values );
			}

			if( ! empty( $values ) ) {

				$positions = array( esc_html__( 'Top', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Right', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Bottom', 'universal-google-adsense-and-ads-manager' ), esc_html__( 'Left', 'universal-google-adsense-and-ads-manager' ) );
				?>
				<div class="dimension-fields-wrapper">
					<div class="desktop-dimension-fields-wrapper fields-wrapper active">
						<?php
						$count = 0;
						for( $i = 0; $i < 4; $i++ ) {
							?>
							<div class="field-wrapper">								
								<input type="number" name="dimension-field-input[]" id="dimension-field-input-<?php echo esc_attr( $i ); ?>" class="dimension-fields" min="0" value="<?php echo esc_attr( $values[$i] ); ?>">
								<label><?php echo esc_html( $positions[$count] ); ?></label>
							</div>
							<?php
							$count++;
						}
						?>
					</div>
					<div class="tablet-dimension-fields-wrapper fields-wrapper">
						<?php
						$count = 0;
						for( $i = 4; $i < 8; $i++ ) {
							?>
							<div class="field-wrapper">								
								<input type="number" name="dimension-field-input[]" id="dimension-field-input-<?php echo esc_attr( $i ); ?>" class="dimension-fields" min="0" value="<?php echo esc_attr( $values[$i] ); ?>">
								<label><?php echo esc_html( $positions[$count] ); ?></label>
							</div>
							<?php
							$count++;
						}
						?>
					</div>
					<div class="mobile-dimension-fields-wrapper fields-wrapper">
						<?php
						$count = 0;
						for( $i = 8; $i < 12; $i++ ) {
							?>
							<div class="field-wrapper">								
								<input type="number" name="dimension-field-input[]" id="dimension-field-input-<?php echo esc_attr( $i ); ?>" class="dimension-fields" min="0" value="<?php echo esc_attr( $values[$i] ); ?>">
								<label><?php echo esc_html( $positions[$count] ); ?></label>
							</div>
							<?php
							$count++;
						}
						?>
					</div>

					<input type="hidden" class="dimension-fields-value" <?php $this->link(); ?> value="<?php echo esc_attr( implode( ',', $values ) ); ?>">
				</div>
				<?php
			}
		}

	
	}