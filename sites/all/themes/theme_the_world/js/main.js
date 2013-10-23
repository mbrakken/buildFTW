(function ($) {$(document).ready(function() {
  if ($('body').hasClass('context-projects') || $('body').hasClass('context-resources')) {
    $(function() {
      if ($(window).width() > 720) {
        var headfix = $('.views-exposed-widgets');
        $(window).scroll(function() {
          if ($(this).scrollTop() > (160) && $(headfix.css('position') == 'static')) {
            headfix.addClass('fixed');
            $('.grid-9.region.region-content').addClass('fixed');
          } else if ($(this).scrollTop() <= (160) && headfix.hasClass('fixed')) {
            headfix.removeClass('fixed');
            $('.grid-9.region.region-content').removeClass('fixed');
          };
        });
      };
    });
  }
});})(jQuery);
