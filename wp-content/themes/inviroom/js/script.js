$(document).ready(function () {

function overlay_toggle() {

    $('#overlay').fadeToggle(300);
    if ($('#overlay').css('display') == 'none') {
        $('body').css('overflow', 'hidden');
    } else {
        $('body').css('overflow', 'auto');
    }

}

/* Mobile menu */

$('.hamburger').click(function(){

    $('body').css('overflow', 'hidden');
    $('#logo-header').css({
        'margin-right': '0',
        'margin-bottom': '50%'
    });
    $('#header').css({
        'height': '100vh',
        'background': '#fff',
        'border-top': 'none',
        'flex-direction': 'column',
        'align-items': 'center',
        'padding-top': '70px',
    });
    $(this).hide();
    $('#menu-close').fadeIn(300);
     setTimeout(function() {
        $('#header').find('.link--text').fadeIn(300);
        $('#header').find('.language-switcher').fadeIn(300).css('display', 'flex');
    }, 100);

});

$('#menu-close').click(function(){

    $('body').css('overflow', 'auto');
    $('#header').css({
        'height': '',
        'width': '',
        'background': '',
        'border-top': '',
        'flex-direction': 'row',
        'align-items': 'center',
        'padding-top': '',
    });
    $('#logo-header').css({
        'margin-right': '',
        'margin-bottom': ''
    });
    $('#hamburger').show();
    $('#menu-close').hide();
    $('#header').find('.link--text').hide();
    $('#header').find('.language-switcher').hide();

});

/* Header link height */

if ($(window).width() >= 1025) {

    $('#header .link--text').height(function() {

        return $('#header').height();

    });

} else {

}


/* Hero screen padding-top */

var headerHeight = $('#header').outerHeight();

$('.screen--hero').css({
    'padding-top': headerHeight
});

/* Hide hero screen on scroll */

var hsHeight = $('.screen--hero').outerHeight() - 100;

$(window).scroll(function(){

        if($(window).scrollTop() >= hsHeight) { 
            $('.screen--hero').css('opacity', '0');
        } else {
            $('.screen--hero').css('opacity', '');
        }

});

/* On scroll change header background*/

$(window).scroll(function(){

    if($(window).scrollTop() >= headerHeight) {

        $('#header').css('background', '#EAEAEA');
    } else {
        $('#header').css('background', '');
    }

});

/*Review slider */

var swiper = new Swiper('.review-slider', {
      slidesPerView: 3,
      spaceBetween: 45,
      centeredSlides: true,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
      breakpoints: {
        1024: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
      }
    });

/* Slider arrow hover width */

$('.nav-btn').hover(function(){

    if ($(this).find('line').attr('x2') == 90) {
        $(this).find('line').attr('x2', '140');
    } else {
        $(this).find('line').attr('x2', '90');
    }
    

});

$('.screen--sixth .image').height(function(){

    if($(window).width() >= 1025 ) {

        return $(this).width() / 1.9;

    } else { 

        return $(this).width() / 0.66;

    }

});

$('.screen--third .image').height(function(){

    if($(window).width() >= 1025 ) {

        return $(this).width() / 3.36;

    } else { 

        return $(this).width() / 1.5;

    }

});

/* Pre footer animation */

$('#computer').hover(function(){
console.log('true');
    $('#result-text').css({
        'opacity': '1',
        'visibility': 'visible'
    });
    $('#bg-grey').css('width', '100%');
    $('#comp-text').find('.text-1').slideUp(300);
    $('#comp-text').find('.text-2').slideDown(300);

});

/* Animation */

$('.marquee-animation').viewportChecker({
    classToAdd: 'marquee visible', 
    classToAddForFullView: '', 
    classToRemove: ' hidden', 
    removeClassAfterAnimation: false,
    invertBottomOffset: true, 
    repeat: false,
    callbackFunction: function(elem, action){}, 
    scrollHorizontal: false,
});

/* Forms and inputs */

$('.input-line').focus(function(){

    $(this).closest('.input-box').find('.placeholder').css({
        'bottom': '40px',
        'font-size': '10px'
    });

});


/* Modals */

$('.close').click(function(){

    $(this).parent().fadeOut(300);
    $('#overlay').fadeOut(300);
    $('body').css('overflow', 'auto');
});

$('#overlay').click(function(){

    $(this).parent().find('.modal').fadeOut(300);
    $(this).fadeOut(300);
    $('body').css('overflow', 'auto');
});



});

/* Resize */

$(window).resize(function(){

    
    if ($(window).width() >= 1025) {

        /* Header link height */


        $('#header .link--text').height(function() {

            return $('#header').height();

        });


    } else {
        
    }

    $('.screen--sixth .image').height(function(){

        if($(window).width() >= 1025 ) {

            return $(this).width() / 1.9;

        } else { 

            return $(this).width() / 0.66;

        }

    });

    $('.screen--third .image').height(function(){

        if($(window).width() >= 1025 ) {

            return $(this).width() / 3.36;

        } else { 

            return $(this).width() / 1.5;

        }

    });

});