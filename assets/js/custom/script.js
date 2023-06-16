$(document).ready(function () {

  $(document).on('submit', '.add-appointment-form', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('action', 'addAppointment');
    $.ajax({
        url: "admin/functions/addAppointment.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            let result = JSON.parse(response);
            console.log("result " , result);
            if (result.status) {
                $(this).trigger('reset');
                $('.add-appointment-form').trigger('reset');
                $('#appModal').modal('hide');
                swalAlert('Success!', 'success', result.message);
            } else {
                swalAlert('Success!', 'error', result.message);
            }
        }
    })
})
function swalAlert(title, icon, text) {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
}


  $("#about-testimonial-slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: false,
    dots: true,
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
  $("#home-testimonial-slider-b").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: false,
    dots: false,
  });

  $("#brands-testimonial").owlCarousel({
    items: 3,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: false,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
});