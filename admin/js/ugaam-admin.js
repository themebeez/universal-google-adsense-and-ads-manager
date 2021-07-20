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