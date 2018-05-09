jQuery('document').ready(function(){

  // form validation
  jQuery('#request-quote').ajaxForm({
    success: function(resp) {
      console.log(resp);
    },
    error: function(resp) {
      console.log(resp);
    }
  })

  /////////

  jQuery('.nav-burger-menu').on('click', function(){
    jQuery(this).toggleClass('change');
    jQuery('body').toggleClass('mobile-open');
  });

  jQuery('.slider').slick({
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