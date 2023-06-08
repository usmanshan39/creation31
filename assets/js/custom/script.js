$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      nav: false,
      dots: true,
    //   navText: [
    //     "<i class='fa fa-chevron-left'></i>",
    //     "<i class='fa fa-chevron-right'></i>"
    //   ]
    });
  });