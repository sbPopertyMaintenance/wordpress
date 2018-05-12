

jQuery('document').ready(function(){
  function send_mail(){
    var firstName = document.getElementById('sb-first-name').value,
        lastName = document.getElementById('sb-last-name').value,
        street = document.getElementById('sb-street').value,
        city = document.getElementById('sb-city').value,
        postal = document.getElementById('sb-postal').value,
        email = document.getElementById('sb-email').value,
        phone = document.getElementById('sb-phone').value,
        serviceType = document.getElementById('sb-service-type').value,
        message = document.getElementById('sb-message').value;
    
    var request = jQuery.ajax( {
      type: 'POST',
      url: myVar.ajax_url,
      data: {
        action: 'send_quote_request',
        'sb-first-name': firstName,
        'sb-last-name': lastName,
        'sb-street': street,
        'sb-city': city,
        'sb-postal': postal,
        'sb-email': email,
        'sb-phone': phone,
        'sb-service-type': serviceType,
        'sb-message': message,
        'g-recaptcha-response': grecaptcha.getResponse()
      }
    } );
  
    request.done( function(resp) {
      console.log(resp);
      // scroll to top of section
      jQuery('html, body').animate({
        scrollTop: jQuery("#quote-form").offset().top
      }, 500);
  
      jQuery('#quote-form .alert-success').removeClass('hidden');
    });
  
    request.fail( function(resp) {
      console.log(resp);
      // scroll to top of section
      jQuery('html, body').animate({
        scrollTop: jQuery("#quote-form").offset().top
      }, 500);
  
      jQuery('#quote-form .alert-danger').removeClass('hidden');
    });
  
    
  }

  jQuery('#quote-form').on('submit', function(event){
    event.preventDefault();
    send_mail();
  })
  
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