$('document').ready(function(){

  // form validation
  $('#request-quote').on('submit', function(event){
    event.preventDefault();

    var path = '/wp-content/themes/sbtheme/services/email/quote.php';

    $.ajax({
      type: "POST",
      url: path,
      data: $("#request").serialize(), // serializes the form's elements.
      success: function(data)
      {
          alert('success'); // show response from the php script.
      },
      error: function(data) {
        alert('fail');
      }
    });
  });

  $('.nav-burger-menu').on('click', function(){
    $(this).toggleClass('change');
    $('body').toggleClass('mobile-open');
  });

  $('.slider').slick({
      dots: true,
      arrows: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 560,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

});