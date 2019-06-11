(function( $ ) {

	wp.customize.bind( 'ready', function() {

		/**
		 *	Toogle Custom Control's Script
		 */

		var customize = this; // Customize object alias.
		// Array with the control names
		// TODO: Replace #CONTROLNAME01#, #CONTROLNAME02# etc with the real control names.
		var toggleControls = [
			'#CONTROLNAME01#',
			'#CONTROLNAME02#'
		];
		$.each( toggleControls, function( index, control_name ) {

			customize( control_name, function( value ) {

				var controlTitle = customize.control( control_name ).container.find( '.customize-control-title' ); // Get control  title.
				// 1. On loading.
				controlTitle.toggleClass( 'disabled-control-title', !value.get() );
				// 2. Binding to value change.
				value.bind( function( to ) {
					controlTitle.toggleClass( 'disabled-control-title', !value.get() );
				} );
			} );
		} );


		/**
		 * Slider Custom Control's Script
		 */
		// Set our slider defaults and initialise the slider
		$('.slider-custom-control').each(function(){
			var sliderValue = $(this).find('.customize-control-slider-value').val();
			var newSlider = $(this).find('.slider');
			var sliderMinValue = parseInt(newSlider.attr('slider-min-value'));
			var sliderMaxValue = parseInt(newSlider.attr('slider-max-value'));
			var sliderStepValue = parseInt(newSlider.attr('slider-step-value'));

			newSlider.slider({
				value: sliderValue,
				min: sliderMinValue,
				max: sliderMaxValue,
				step: sliderStepValue,
				change: function(e,ui){
					// Important! When slider stops moving make sure to trigger change event so Customizer knows it has to save the field
					$(this).parent().find('.customize-control-slider-value').trigger('change');
		      }
			});
		});

		// Change the value of the input field as the slider is moved
		$('.slider').on('slide', function(event, ui) {
			$(this).parent().find('.customize-control-slider-value').val(ui.value);
		});

		// Reset slider and input field back to the default value
		$('.slider-reset').on('click', function() {
			var resetValue = $(this).attr('slider-reset-value');
			$(this).parent().find('.customize-control-slider-value').val(resetValue);
			$(this).parent().find('.slider').slider('value', resetValue);
		});

		// Update slider if the input field loses focus as it's most likely changed
		$('.customize-control-slider-value').blur(function() {
			var resetValue = $(this).val();
			var slider = $(this).parent().find('.slider');
			var sliderMinValue = parseInt(slider.attr('slider-min-value'));
			var sliderMaxValue = parseInt(slider.attr('slider-max-value'));

			// Make sure our manual input value doesn't exceed the minimum & maxmium values
			if(resetValue < sliderMinValue) {
				resetValue = sliderMinValue;
				$(this).val(resetValue);
			}
			if(resetValue > sliderMaxValue) {
				resetValue = sliderMaxValue;
				$(this).val(resetValue);
			}
			$(this).parent().find('.slider').slider('value', resetValue);
		});	



		/**
		 *	Responsive Dimension Control's Script
		 */
		$( '.customize-control-responsive-dimensions .fields-wrapper input[name="dimension-field-input[]"]' ).on( 'change', function() {

			var fieldValues = $( this ).parents( '.dimension-fields-wrapper' ).find( 'input[name="dimension-field-input[]"]' ).map( function() {

				if( this.value == '' ) {
					return 0;
				} else {
					return this.value;
				}
			} ).get();

			fieldVlaues = fieldValues.join();

			jQuery( this ).parents( '.dimension-fields-wrapper' ).find( '.dimension-fields-value' ).val( fieldValues ).trigger( 'change' );
		} );

		$( 'body' ).on( 'click', '.responsive-switchers button', function() {

			var btnVal = $( this ).attr( 'data-device' );

			if( btnVal == 'desktop' ) {  

				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.desktop-dimension-fields-wrapper' ).addClass( 'active' );
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.tablet-dimension-fields-wrapper' ).removeClass( 'active' );
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.mobile-dimension-fields-wrapper' ).removeClass( 'active' );

			} else if( btnVal == 'tablet' ) {
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.desktop-dimension-fields-wrapper' ).removeClass( 'active' );
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.tablet-dimension-fields-wrapper' ).addClass( 'active' );
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.mobile-dimension-fields-wrapper' ).removeClass( 'active' );
			} else {
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.desktop-dimension-fields-wrapper' ).removeClass( 'active' );
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.tablet-dimension-fields-wrapper' ).removeClass( 'active' );
				$( this ).parents( '.customize-control-responsive-dimensions' ).find( '.mobile-dimension-fields-wrapper' ).addClass( 'active' );
			}

			jQuery( '.wp-full-overlay-footer .devices button[data-device="' + btnVal + '"]' ).trigger( 'click' );
		} )
	});
	
}) ( jQuery );


