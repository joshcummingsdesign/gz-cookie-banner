/*global Cookies */
/*global settings */

(function ($) {
  'use strict';

  var checkJsCookie = function () {

    // Make sure js-cookie is installed
    if (typeof(Cookies) === 'undefined') {
      console.error('js-cookie not installed!');
      return;
    }

    // Return early if cookie is set
    if (Cookies.get('ckbr_verify')) {
      return;
    } else {

      // Otherwise prompt the user to accept the terms
      var $banner  = $('#ckbr_banner'),
          $confirm = $('#ckbr_confirm'),
          expires   = parseInt(settings.expires) || 30,
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

  $(document).ready(function () {
    checkJsCookie();
  });

})(jQuery);
