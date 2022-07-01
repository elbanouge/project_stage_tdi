jQuery(function ($) {
  
$('img').each(function () {
    if (!$(this).attr('title') && $(this).attr('alt')) {
        $(this).attr('title', $(this).attr('alt'));
    }
});

$('.pagination .page-item.active').each(function () {
    $(this).prev().addClass("show");
    $(this).next().addClass("show");
});

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
        $(".main-menu").addClass("sticky-header animate__fadeInDown");
    } else {
        $(".main-menu").removeClass("sticky-header animate__fadeInDown");
    }
});

  $('#font_increase_size').click(function () {
        $('.main-content .card-body').children().each(function () {
            var size = parseInt($(this).css("font-size")) + 2;
    		$(this).css("font-size", size);
        });
    });

    $('#font_reset_size').click(function () {
        $('.main-content .card-body p').css("font-size", 16);
        $('.main-content .card-body li').css("font-size", 16);
        $('.main-content .card-body pre').css("font-size", 16);
        $('.main-content .card-body figcaption').css("font-size", 14);
        $('.main-content .card-body h1').css("font-size", 34);
        $('.main-content .card-body h2').css("font-size", 30);
        $('.main-content .card-body h3').css("font-size", 26);
        $('.main-content .card-body h4').css("font-size", 22);
        $('.main-content .card-body h5').css("font-size", 18);
        $('.main-content .card-body h6').css("font-size", 15);
    });

    $('#font_decrease_size').click(function () {
        $('.main-content .card-body').children().each(function () {
            var size = parseInt($(this).css("font-size")) - 2;
    		$(this).css("font-size", size);
        });
    });


  $("#menu-drawer").click(function (e) {
      e.preventDefault();
      $("#app").toggleClass("toggled");
  });

  $(".drawer-side-menu a").click(function (e) {
      $("#app").toggleClass("toggled");
  });

  $(".drawer-side-menu .drawer-search form").submit(function (e) {
      $("#app").toggleClass("toggled");
  });

  jQuery('img.svg-icon').each(function () {
      var $img = jQuery(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');

      jQuery.get(imgURL, function (data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Add replaced image's ID to the new SVG
          if (typeof imgID !== 'undefined') {
              $svg = $svg.attr('id', imgID);
          }
          // Add replaced image's classes to the new SVG
          if (typeof imgClass !== 'undefined') {
              $svg = $svg.attr('class', imgClass + ' replaced-svg');
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr('xmlns:a');

          // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
          if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
              $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
          }

          // Replace image with new SVG
          $img.replaceWith($svg);

      }, 'xml');

  });
});

function handleClick(myRadio) {

}
