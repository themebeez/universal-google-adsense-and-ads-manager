"use strict";

/**
* UGAAM main object.
* Includes public functions.
*
* @since 1.2.0
*/
const UGAAM = {

    Load: function () {

        this.advertise();
        this.renderStickyAds();
        this.handleStickyAdCloseEvent();
    },

    /**
    * 
    * @var {string} stickyAdCookie
    * @var {Object} stickyAdCookieVal
    */
    stickyAdCookie: 'ugaam-sticky-ad',
    stickyAdCookieVal: { header: true, footer: true },

    /**
    * 
    * @var {string} localStorageName
    */
    localStorageName: 'ugaam-sticky-ad',

    /**
    * Handle sticky ad close button click event.
    * 
    * @param {object} event
    * @return {void} void.
    * @since 1.2.0
    */
    handleStickyAdCloseEvent: function () {

        const closeButtonEle = document.querySelectorAll('.ugaam-ad-close-button');

        if (closeButtonEle.length > 0) {

            closeButtonEle.forEach(function (ele) {

                ele.addEventListener('click', function (e) {

                    e.preventDefault();

                    ele.closest('.ugaam-sticky-ad').setAttribute('data_display-ad', 'false');

                    // Dispatch sticky ad closed event.
                    UGAAM.api.dispatchAdClosedEvent();

                    // Records the click in localStorage.
                    UGAAM.helpers.setLocalStorage(ele.closest('.ugaam-sticky-ad').getAttribute('data_ad-location'));
                });
            });
        }
    },

    /**
    * Render sticky ad based on cookie values.
    * 
    * @param {null} null
    * @return {void} void.
    * @since 1.2.0
    */
    renderStickyAds: function () {

        // Verify cookie integrity.
        this.helpers.verifyCookie();

        // Proceed once we verify the cookie intregrity.
        const cookieData = this.helpers.readCookie();

        if (Object.keys(cookieData).length !== 0) {

            const stickyAdEle = document.querySelectorAll('.ugaam-sticky-ad');

            if (stickyAdEle.length > 0) {

                stickyAdEle.forEach(function (ele) {

                    if (ele.hasAttribute('data_ad-location')) {

                        const adLocation = ele.getAttribute('data_ad-location');

                        if (cookieData[adLocation] === true) {

                            ele.setAttribute('data_display-ad', 'true');
                        }
                    }
                });
            }

        } else {

            // Set cookie with default values.
            this.helpers.setCookie();
        }
    },

    /**
    * Advertise plugin in console.
    *
    * @since 1.2.0
    */
    advertise: function () {

        console.log("🔥 ads powered by UGAAM wordPress plugin. Get it FREE: https://wordpress.org/plugins/universal-google-adsense-and-ads-manager/");
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
    * Helper: Initially, set coookie with default values.
    * If cookie already exists, then return.
    *
    * @param {null} null.
    * @return {void} void.
    * @since 1.2.0
    */
    setCookie: function () {

        // Immediately return if cookies is disabled.
        if (!this.isCookieEnabled) return;

        const cookieData = this.readCookie();
        const expiry = 60 * 60 * 6; // 6 hours.

        if (Object.keys(cookieData).length === 0) {

            let cookieVal = JSON.stringify(UGAAM['stickyAdCookieVal']);

            document.cookie = `${UGAAM['stickyAdCookie']}=${cookieVal}; max-age=${expiry}; path=/`;
        }
    },

    /**
    * Helper: Reset cookie to default values.
    * Assumes we already have required cookie set.
    * Invokes this.setCookies method after resetting cookie.
    *
    * @param {null} null.
    * @return {void} void.
    * @since 1.2.0
    */
    resetCookie: function () {

        console.warn("UGAAM: Cookie value mis-matched! Fixing it...");

        document.cookie = `${UGAAM['stickyAdCookie']}=; max-age=0; path=/;`;

        this.setCookie();
    },

    /**
    * Helper: Update cookie values
    *
    * @param {string} key.
    * @param {value} value.
    * @return {void} void.
    * @since 1.2.0
    */
    updateCookie: function (key, value) {

        if (!this.isCookieEnabled) return;

        let data = this.readCookie();
        let expiry = 60 * 60 * 6; // 6 hours.

        if (Object.keys(data).length === 0) return;

        data = { ...data, [key]: value };

        document.cookie = `${UGAAM['stickyAdCookie']}=${JSON.stringify(data)}; max-age=${expiry}; path=/`;
    },

    /**
    * Helper: read cookie.
    *
    * @param {null} null.
    * @return { object } data.
    * @since 1.2.0
    */
    readCookie: function () {

        let data = {};

        if (!this.isCookieEnabled) return data;

        // Get cookie by name stickyAdCookie.
        let cookie = document.cookie.split(';').find(cookie => cookie.includes(UGAAM['stickyAdCookie']));

        return cookie ? JSON.parse(cookie.split('=')[1]) : data;
    },

    /**
    * Helper: Verify Cookie.
    * If key & value is not present in cookie, then set cookie with default values.
    * 
    * @param {null} null.
    * @return {void} void
    * @since 1.2.0
    */
    verifyCookie: function () {

        if (!this.isCookieEnabled) return;

        const cookieData = this.readCookie();

        // Check key & value in cookie.
        if (Object.keys(cookieData).length !== 0) {

            if (typeof cookieData !== 'object') {

                this.resetCookie();

                return;
            }

            if (typeof cookieData == 'object') {

                const { header, footer, ...data } = cookieData;

                if (
                    !header ||
                    !footer ||
                    typeof header !== 'boolean' ||
                    typeof footer !== 'boolean'
                ) {

                    this.resetCookie();
                }
            }
        }
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

    /**
    * Helper: set localStorage.
    *
    * @param {string} adLocation.
    * @return {void} void
    * @since 1.2.0
    */
    setLocalStorage: function (adLocation) {

        if (adLocation === '') return;

        if (typeof (Storage) !== "undefined") {

            let data = {
                "clicks": {
                    "header": 0,
                    "footer": 0
                }
            }

            let record = localStorage.getItem(UGAAM.localStorageName);

            if (record === null) {

                data['clicks'][adLocation] = data['clicks'][adLocation] + 1;

                localStorage.setItem(UGAAM.localStorageName, JSON.stringify(data));

            } else {

                record = JSON.parse(record);

                // If user has closed ad for 3 times, then update the cookie value.
                if (record['clicks'][adLocation] >= 2) {

                    this.updateCookie(adLocation, false);

                    // reset the localStorage value to 0.
                    record['clicks'][adLocation] = 0;
                    localStorage.setItem(UGAAM.localStorageName, JSON.stringify(record));

                    return;
                }

                record['clicks'][adLocation] = record['clicks'][adLocation] + 1;

                localStorage.setItem(UGAAM.localStorageName, JSON.stringify(record));
            }
        }
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
    dispatchAdClosedEvent: function () {

        // Dispatch the event to DOM.
        document.dispatchEvent(new CustomEvent('ugaamStickyadClosed'));
    }
}

/**
* Listener: DOMContentLoaded.
* Load all required methods on "DOMContentLoaded" event.
*
* @since 1.2.0
*/
document.addEventListener('DOMContentLoaded', function () {

    UGAAM.Load();
});