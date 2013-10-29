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
  };

  if ($('body').hasClass('node-type-project')) {
    $('#group-read-more').click(function() {
      $('div.pane-node-body').slideToggle("600");
      return false;
    });

    $(function() {
      var titlefix = $('.pane-delta-blocks-page-title');
      $(window).scroll(function() {
        if ($(this).scrollTop() > (200) && $(titlefix.css('position') == 'static')) {
          titlefix.addClass('fixed');
          $('#zone-content').addClass('fixed');
          $('.pane-node-field-donate-link').addClass('fixed');
        } else if ($(this).scrollTop() <= (200) && titlefix.hasClass('fixed')) {
          titlefix.removeClass('fixed');
          $('#zone-content').removeClass('fixed');
          $('.pane-node-field-donate-link').removeClass('fixed');
        };
      });
    });
  };
});})(jQuery);
