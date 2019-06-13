(function($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * ...and/or other pugaamsibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */

    jQuery(document).ready(function() {

        /**
         * Function for image upload in admin
         */
        function media_upload(button_class) {

            var _custom_media = false,

                _orig_send_attachment = wp.media.editor.send.attachment;

            jQuery('body').on('click', button_class, function(e) {

                var currentBtn = jQuery(this);

                var button_id = '#' + jQuery(this).attr('id');

                var self = jQuery(button_id);

                var send_attachment_bkp = wp.media.editor.send.attachment;

                var button = jQuery(button_id);

                var id = button.attr('id').replace('_button', '');

                _custom_media = true;

                wp.media.editor.send.attachment = function(props, attachment) {

                    if (_custom_media) {

                        currentBtn.parent('.ugaam-image-uploader-container').find('.ugaam-upload-image-url-holder').val(attachment.url).trigger('change');

                        currentBtn.parent('.ugaam-image-uploader-container').find('.ugaam-upload-image-holder').attr('src', attachment.url).addClass('ugaam-show-img').removeClass('ugaam-hide-img');

                        currentBtn.parent('.ugaam-image-uploader-container').find('.ugaam-remove-btn').removeClass('ugaam-btn-hide').addClass('ugaam-btn-show');

                        currentBtn.removeClass('ugaam-btn-show').addClass('ugaam-btn-hide');

                    } else {

                        return _orig_send_attachment.apply(button_id, [props, attachment]);
                    }
                }

                wp.media.editor.open(button);

                return false;
            });
        }

        media_upload('.ugaam-upload-btn');

        jQuery('body').on('click', '.ugaam-remove-btn', function(e) {

            e.preventDefault();

            jQuery(this).parent('.ugaam-image-uploader-container').find('.ugaam-upload-image-url-holder').val('').trigger('change');

            jQuery(this).parent('.ugaam-image-uploader-container').find('.ugaam-upload-image-holder').attr('src', '').addClass('ugaam-hide-img').removeClass('ugaam-show-img');

            jQuery(this).parent('.ugaam-image-uploader-container').find('.ugaam-upload-btn').removeClass('ugaam-btn-hide').addClass('ugaam-btn-show');

            jQuery(this).removeClass('ugaam-btn-show').addClass('ugaam-btn-hide');
        });


        jQuery('body').on('change', '.ugaam-ad-type', function() {

            var cngAdVal = jQuery(this).val();

            if (cngAdVal == 'custom_ad') {

                jQuery('.uggam-adsense-input-field').removeClass('uggam-show-ad-input-field').addClass('uggam-hide-ad-input-field');
                jQuery('.uggam-custom-input-field').removeClass('uggam-hide-ad-input-field').addClass('uggam-show-ad-input-field');
            }

            if (cngAdVal == 'adsense_ad') {

                jQuery('.uggam-adsense-input-field').removeClass('uggam-hide-ad-input-field').addClass('uggam-show-ad-input-field');
                jQuery('.uggam-custom-input-field').removeClass('uggam-show-ad-input-field').addClass('uggam-hide-ad-input-field');
            }
        });


        // Accordion at plugin page


        var ugaccordion = document.getElementsByClassName("ug-accordion");
        
        var i;

        for (i = 0; i < ugaccordion.length; i++) {

            ugaccordion[i].addEventListener("click", function() {

                this.classList.toggle("ug-accordion-active");

                var ugpanel = this.nextElementSibling;

                if (ugpanel.style.display === "block") {

                    ugpanel.style.display = "none";

                } else {

                    ugpanel.style.display = "block";
                }
            });
        }


    })

})(jQuery);