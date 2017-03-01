/*global Cookies */
/*global settings */

(function ($) {
  'use strict';

  /**
   * Shows and hides cookie banner
   * @return {undefined}
   */
  var checkJsCookie = function () {

    // Return early if cookie is set
    if (Cookies.get('ckbr_verify')) {
      return;
    } else {

      // Otherwise prompt the user to accept the terms
      var $banner  = $('#ckbr_banner'),
          $confirm = $('#ckbr_confirm'),
          expires  = parseInt(settings.expires) || 30,
          path     = settings.path || '/';

      $banner.removeClass('ckbr_hidden');

      // If user confirms, hide banner
      $confirm.click(function (e) {
        e.preventDefault();
        Cookies.set('ckbr_verify', 'true', {expires: expires, path: path});
        $banner.addClass('ckbr_hidden');
      });
    }
  };

  var jsCookieScript = 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js';

  /**
   * Check to see if js-cookie is enqueued
   * @return {undefined}
   */
  var ckbrInit = function () {
    if (typeof(Cookies) === 'undefined') {
      $.getScript(jsCookieScript, checkJsCookie);
    } else {
      checkJsCookie();
    }
  };

  $(document).ready(function () {
    ckbrInit();
  });

})(jQuery);
