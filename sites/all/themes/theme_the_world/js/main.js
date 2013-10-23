(function ($) {$(document).ready(function() {
  if ($('body').hasClass('context-projects')) {
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


// if ($('body').hasClass('purchases') && $('body').hasClass('new')) {
//     $(function() {
//       if ($(window).width() < 600) {
//         var headfix = $('body.purchases.new header, body.purchases.new .purchase-wrapper'), pos = headfix.offset();
//         $(window).scrollTop(85);
//         $(window).scroll(function() {
//           if ($(this).scrollTop() > (pos.top + 10) && $(headfix.css('position') == 'static')) {
//             headfix.addClass('fixed');
//             var headheight = $('header').height();
//             $('.purchase-wrapper').css('padding-top', (headheight));
//           } else if ($(this).scrollTop() <= (pos.top + 10) && headfix.hasClass('fixed')) {
//             headfix.removeClass('fixed');
//             $('.purchase-wrapper').css('padding-top', '0');
//           };
//         });
//       };
//     });
//   };
