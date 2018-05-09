jQuery('document').ready(function(){

  // form validation
  jQuery('#request-quote').ajaxForm({
    beforeSubmit: function(arr, $form, options) { 
      if( jQuery('#request-quote .alert-success').hasClass('hidden') == false ){
        jQuery('#request-quote .alert-success').addClass('hidden');
      }
      if( jQuery('#request-quote .alert-danger').hasClass('hidden') == false ){
        jQuery('#request-quote .alert-danger').addClass('hidden');
      }
    },
    success: function(resp) {
      // scroll to top of section
      jQuery('html, body').animate({
        scrollTop: $("#quote-form").offset().top
      }, 500);

      jQuery('#request-quote .alert-success').removeClass('hidden');
    },
    error: function(resp) {
      // scroll to top of section
      jQuery('html, body').animate({
        scrollTop: $("#quote-form").offset().top
      }, 500);

      jQuery('#request-quote .alert-danger').removeClass('hidden');
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