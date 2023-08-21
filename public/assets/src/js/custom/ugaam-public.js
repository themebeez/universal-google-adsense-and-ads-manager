(function ($) {
    'use strict';
    jQuery(document).ready(function () {

        jQuery('body').on('click', '.ugaam-sticky-header-ad .ugaam-ad-close-button, .ugaam-sticky-footer-ad .ugaam-ad-close-button', function () {

            jQuery(this).parents('.ugaam-sticky-ad').remove();
        });
    });


})(jQuery);