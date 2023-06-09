$(document).ready(function () {
  $("#about-testimonial-slider").owlCarousel({
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
  $("#home-testimonial-slider").owlCarousel({
    items: 3,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: true,
    navText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
});

// owl.owlCarousel({
//   margin: 10,
//   loop: true,
//   nav: true,
//   center: true,
  // responsive: {
  //   0: {
  //     items: 2
  //   },
  //   600: {
  //     items: 2
  //   },
  //   1000: {
  //     items: 3
  //   }
  // }
// })