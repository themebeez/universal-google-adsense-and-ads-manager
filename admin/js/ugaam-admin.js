(function ($) {

    'use strict';

    jQuery(document).ready(function () {

        var ugaccordion = document.getElementsByClassName("ug-accordion");

        var i;

        for (i = 0; i < ugaccordion.length; i++) {

            ugaccordion[i].addEventListener("click", function () {

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