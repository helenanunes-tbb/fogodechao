jQuery(document).ready(function($) {

$(function() {
    var beneficios = $('.owl-beneficios').find('.item').length;
    
    $('#owl-testemunhos').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        slideBy: 'page',
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:false
            }
        }
    });


    $(window).resize(function() {
        if ($(window).width() < 768) {
           $("#owl-beneficios").owlCarousel({
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:0,
                    nav:false,
                    loop:false
                }
            }
          });
        } else {
            $("#owl-beneficios").data('owlCarousel').destroy();
        }
      });

      if ($(window).width() < 768) {
          $("#owl-beneficios").owlCarousel({
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:0,
                    nav:false,
                    loop:false
                }
            }
          });
      }

});

});