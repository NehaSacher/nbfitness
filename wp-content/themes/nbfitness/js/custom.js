$(window).scroll(function(){
    if ($(window).scrollTop() >= 200) {
        $('.header_wrap ').addClass('sticky');
    }
    else {
        $('.header_wrap ').removeClass('sticky');
    }
});

$('.hamburger').click(function() {
    $('.hamburger ').toggleClass('clicked');
    $('.header_wrap ').toggleClass('is_active');
    $('.slidediv ').toggleClass('slidein');
   /* $('.slidediv').animate({width: '100%'});*/
  
});
if ($('.home_slider .slider')[0]) {
    $(".home_slider .slider").kenburnsy({
        fullscreen: true, // fullscreen mode
        duration: 9000,
        fadeInDuration: 1000
    });
} 

if ($('.home_gallery .owl-carousel')[0]) {
    var owl = $('.home_gallery .owl-carousel');
    owl.owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('.nextbtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    $('.prevbtn').click(function() {
        owl.trigger('prev.owl.carousel');
    })
} 


if ($('.pt_gallery .owl-carousel')[0]) {
    var ptgal = $('.pt_gallery .owl-carousel');
    ptgal.owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        dots: false,
        items:1,
        animateOut: 'fadeOut'

    });
} 


$(document).ready(function(){
    var attrs = {};
    var classes = $("a[data-imagelightbox]").map(function(indx, element){
      var key = $(element).attr("data-imagelightbox");
      attrs[key] = true;
      return attrs;
    });
    var attrsName = Object.keys(attrs);

    attrsName.forEach(function(entry) {
        $( "[data-imagelightbox='"+entry+"']" ).imageLightbox({
            overlay: true,
            button: true, 
            quitOnDocClick: false,
            arrows: true,
            caption: true
        });
    });

    $('.navbar.d-md-none.d-block .navbar-toggler').click(function(){
        if ($(".navbar.d-md-none.d-block").hasClass("show")) {
            $(".navbar.d-md-none.d-block").css('height','100vh')
        }
    });
});

