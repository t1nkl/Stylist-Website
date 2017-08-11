$("document").ready(function($){
    var nav = $('.header-menu-bl');
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 250) {
            nav.addClass("fixed-menu");
        } else {
            nav.removeClass("fixed-menu");
        }
    });
});

$('#menu li').on('click', function(){
     $("#menu").hide();
     $("#menu-icon").removeClass("active");
});

$('.header-menu li a').on('click', function(){
    $(".main-navigation").removeClass("show");
    $(".navbar-toggler ").addClass("collapsed");
});

$(document).ready(function(){
  $('.slider').bxSlider({
    /*slideWidth: 300,*/
    minSlides: 2,
    /*maxSlides: 2,*/
    slideMargin: 10
  });
});