"use strict";

__window.UGAAM = __window.UGAAM || {}; // Global namespace.

/**
* UGAAM main object.
* Includes public functions.
*
* @since 1.2.0
*/
const UGAAM = {

    Load: function () {

        this.handleStickyadEvent();
        this.controlStickyAdRendering();
    },

    /**
    * 
    * @var {string} stickyadCookie
    */
    stickyadCookie: 'ugaam-sticky-ad',

    /**
    * 
    * @var {string} stickyadCookieVal
    */
    stickyadCookieVal: 'false', // [ false = hide & true = display ]

    /**
    * Handle sticky ad close button click event.
    * 
    * @param {object} event
    * @return {void} void.
    * @since 1.2.0
    */
    handleStickyadEvent: function (event) {

        event.preventDefault();

        const closeButtonEle = document.querySelectorAll('.ugaam-ad-close-button');

        if (closeButtonEle.length > 0) {

            closeButtonEle.forEach(function (ele) {

                console.log(ele);

                // DOM dispatch event.
                this.api.stickyadClosed();
            });
        }
    },

    /**
    * Handle display/hide sticky ad based on cookie.
    * 
    * @param {null} null
    * @return {void} void.
    * @since 1.2.0
    */
    controlStickyAdRendering: function () {


    }

}

/**
* UGAAM Helpers.
* Includes helper functions used by UGAAM.
* 
* @since 1.2.0
*/
UGAAM.helpers = {

    /**
    * Helper: Set cookie for sticky ads.
    *
    * @param {string} action.
    * @return {void} void.
    * @since 1.2.0
    */
    setCookie: function (action) {

        // Return immediately if cookies are disabled.
        if (this.isCookieEnabled) return;

        // Set cookie value.
        this.stickyadCookieVal = action || 'false';

        // expiry
        const expiry = 6 * 60 * 60 * 1000; // 6 hrs.

        // Set cookie.
        document.cookie = `${this.cookieName}=${this.cookieValue}; path=/; max-age=${expiry};`;
    },

    /**
    * Helper: read cookie.
    *
    * @param {null} null.
    * @return {string} cookie value.
    * @since 1.2.0
    */
    readCookie: function () {
    },

    /**
    * Helper: Check & return if cookie is enabled in the browser.
    *
    * @param {null} null.
    * @return {boolean} true/false.
    * @since 1.2.0
    */
    isCookieEnabled: function () {

        return navigator.cookieEnabled ? true : false;
    },
}


/**
* UGAAM API.
* Dispatch DOM event that can be listened by other scripts.
* 
* @since 1.2.0
*/
UGAAM.api = {

    /**
    * API: Dispatch sticky ad closed event.
    * 
    * @param {null} null
    * @return {void} void.
    * @since 1.2.0
    */
    stickyadClosed: function () {

        // Dispatch the event to DOM.
        document.dispatchEvent(new CustomEvent('ugaamStickyadClosed'));
    }
}

/**
* Listener: DOMContentLoaded.
* Fire the methods on "DOMContentLoaded" event.
*
* @since 1.2.0
*/
document.addEventListener('DOMContentLoaded', function () {

    UGAAM.Load();
});