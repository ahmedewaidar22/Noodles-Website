
      (function($) {
    "use strict"; 
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });

    $('body').scrollspy({
      target: '#mainNav',
      offset: 75
    });

    var navbarCollapse = function() {
      if ($("#mainNav").offset().top > 100) {
        $("#mainNav").addClass("navbar-scrolled");
      } else {
        $("#mainNav").removeClass("navbar-scrolled");
      }
    };
    navbarCollapse();
    $(window).scroll(navbarCollapse);
  })(jQuery); // End of use strict
