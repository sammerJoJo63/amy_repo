$(document).ready(function () {
  $(".title-area .name h1 a").empty();
  $(".title-area .name h1 a").html("<img src='../../../../wp-content/uploads/2021/02/luckyg-logo-transp-e1602995573329.png' width='80' height='80' />")

  $("h2.siteName").find("p").contents().unwrap();

  var $animation_elements = $('.animation-element');
  var $window = $(window);

  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.addClass('inView');
      } else {
        $element.removeClass('inView');
      }
    });
  }

  $window.on('scroll resize', check_if_in_view);
  $window.trigger('scroll');

  // When the user scrolls the page, execute myFunction
  window.onload = function() {myFunction()};
  window.onscroll = function() {myFunction()};

  // Get the navbar
  var navbar = $("header.contain-to-grid");
  console.log(navbar);

  // Get the offset position of the navbar
  var sticky = navbar.offsetTop;
  console.log(navbar.offset().top);

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= navbar.height()) {
      navbar.addClass("sticky");
    } else {
      navbar.removeClass("sticky");
    }
  }


  //$("#quokkaBook.inView").animate({left: '0', opacity: 1});
});
