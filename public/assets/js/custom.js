/***************************************************************************************************************
||||||||||||||||||||||||||||        CUSTOM SCRIPT FOR ENERGY                       |||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************

01. Revolution slider
02. Sticky header
03. Prealoader
04. Language switcher
05. prettyPhoto
06. BrandCarousel
07. Testimonial carousel
08. ScrollToTop 
09. Cart Touch Spin
10. PriceFilter
11. Cart touch spin
12. Fancybox activator
13. ContactFormValidation
14. Scoll to target
15. PrettyPhoto

****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/



"use strict";



//Submenu Dropdown Toggle
if($('.main-header li.dropdown ul').length){
    $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>');

}



//Mobile Nav Hide Show
if($('.mobile-menu').length){

    $('.mobile-menu .menu-box').mCustomScrollbar();

    var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
    $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
    $('.sticky-header .main-menu').append(mobileMenuContent);

    //Dropdown Button
    $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
        $(this).toggleClass('open');
        $(this).prev('ul').slideToggle(500);
    });
    
    //Menu Toggle Btn
    $('.mobile-nav-toggler').on('click', function() {
        $('body').addClass('mobile-menu-visible');
    });

    
    //Menu Toggle Btn
    $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
        $('body').removeClass('mobile-menu-visible');
    });
}






// Scroll to a Specific Div
if($('.scroll-to-target').length){
    $(".scroll-to-target").on('click', function() {
        var target = $(this).attr('data-target');
       // animate
       $('html, body').animate({
           scrollTop: $(target).offset().top
        }, 1000);

    });
}




function SmoothMenuScroll () {
    var anchor = $('.scrollToLink');
    if(anchor.length){
        anchor.children('a').bind('click', function (event) {
            if ($(window).scrollTop() > 10) {
                var headerH = '80';
            }else {
                var headerH = '80';
            }
            var target = $(this);
            $('html, body').stop().animate({
                scrollTop: $(target.attr('href')).offset().top - headerH + 'px'
            }, 1200, 'easeInOutExpo');
            anchor.removeClass('current');
            target.parent().addClass('current');
            event.preventDefault();
        });
    }
}

function OnePageMenuScroll () {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('.mainmenu.one-page-scroll-menu .scrollToLink').find('a').each(function (){
            // grabing section id dynamically
            var sections = $(this).attr('href');
            $(sections).each(function() {
                // checking is scroll bar are in section
                if ($(this).offset().top <= windscroll + 100) {
                    // grabing the dynamic id of section
                    var Sectionid = $(sections).attr('id');
                    // removing current class from others
                    $('.mainmenu').find('li').removeClass('current');
                    // adding current class to related navigation
                    $('.mainmenu').find('a[href*=\\#'+Sectionid+']').parent().addClass('current');
                }
            });
        });
    } else {
        $('.mainmenu.one-page-scroll-menu li.current').removeClass('current');
        $('.mainmenu.one-page-scroll-menu li:first').addClass('current');
    }
}




// body-layout
function bodylayout() {
    if ($('.boxed_switch_menu').length) {

        $('.body_switch_btn button').on('click', function() {
            $('.body_switcher').toggleClass('switcher-show')
        });

        $("#myonoffswitch").on('click', function() {
            $(".fixed").toggleClass("static");
        });

        $("#boxed").on('click', function() {
            $(".main_page").addClass("active_boxlayout");
            $('body').addClass('bg')
        });
        $("#full_width").on('click', function() {
            $(".main_page").removeClass("active_boxlayout");
            $('body').removeClass('bg')
        });
    };
}






//Update Header Style and Scroll to Top
function headerStyle() {
    if($('.main-header').length){
        var windowpos = $(window).scrollTop();
        var siteHeader = $('.main-header');
        var scrollLink = $('.scroll-top');
        if (windowpos >= 350) {
            siteHeader.addClass('fixed-header');
            scrollLink.fadeIn(300);
        } else {
            siteHeader.removeClass('fixed-header');
            scrollLink.fadeOut(300);
        }
    }
}
headerStyle();



// ===Prealoder===
function prealoader() {
    if($('.preloader').length){
        $('.preloader').delay(200).fadeOut(500);
    }
}



// Loan Filter
function loanFilter() {
    $(function() {
        $("#slider-range-min").slider({
            range: "min",
            value: 3000,
            min: 1000,
            max: 5000,
            slide: function(event, ui) {
                $("#amount").val("$" + ui.value);
            }
        });
        $("#amount").val("$" + $("#slider-range-min").slider("value"));
    });
    $(function() {
        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2,
            slide: function(event, ui) {
                $("#j").val(ui.value);
            }
        });
        $("#j").val($("#slider-range-max").slider("value"));
    });  
}





// Select Menu 
function selectDropdown() {
    if ($(".selectmenu").length) {
        $(".selectmenu").selectmenu();

        var changeSelectMenu = function(event, item) {
            $(this).trigger('change', item);
        };
        $(".selectmenu").selectmenu({ change: changeSelectMenu });
    };
}



/////////////////////////////
//Universal Code for All Owl Carousel Sliders
/////////////////////////////

if ($('.theme-carousel').length) {
        $(".theme-carousel").each(function (index) {
        var $owlAttr = {},
        $extraAttr = $(this).data("options");
        $.extend($owlAttr, $extraAttr);
        $(this).owlCarousel($owlAttr);
    });
}



// Main Slider Carousel
if ($('.banner-carousel').length) {
    $('.banner-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop:true,
        margin:0,
        rtl: true,
        dots: false,
        nav:true,
        singleItem:true,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout:6000,
        navText: [ '<span class="fas fa fa-angle-left"></span>', '<span class="fas fa fa-angle-right"></span>' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1024:{
                items:1
            }
        }
    });    		
}



if ($('.banner-style2-carousel').length) {
    $('.banner-style2-carousel').owlCarousel({
        dots: false,
        loop: false,
        margin: 0,

        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        rewind: true,

        nav:false,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        autoplayHoverPause: false,
        autoplay: true,
        smartSpeed: 700,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:3
            },
            800:{
                items:3
            },
            1024:{
                items:3
            },
            1100:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });    		
}






//Blog carousel
var myCarousel = $('.blog-style4-carousel');
var nextBtn = $('.btn-block .next-btn');
var prevBtn = $('.btn-block .prev-btn');

myCarousel.owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    dots: false,
    rtl: true,

    nav: true,
    navText: [
            '<p>Prev</p>',
            '<p>Next</p>'
    ],

    active: true,
    smartSpeed: 1000,
    autoplay: false,      
  onInitialize: callThumbOnNav,
  onTranslate: callThumbOnNav
});

nextBtn.on('click', function(e) {
    myCarousel.trigger('next.owl.carousel');
    e.preventDefault();
});
prevBtn.on('click', function(e) {
    myCarousel.trigger('prev.owl.carousel');
    e.preventDefault();
});

function callThumbOnNav(e){
  var idx = e.item.index;
    var nxtThumb = myCarousel.find('.single-blog-post-style4').eq(idx + 1).find('img').attr('src');
    var prvThumb = myCarousel.find('.single-blog-post-style4').eq(idx - 1).find('img').attr('src');
    prevBtn.css('background-image', 'url(' + prvThumb + ')');
    nextBtn.css('background-image', 'url(' + nxtThumb + ')');
}

















if ($('.bxslider').length) {
	$('.bxslider').bxSlider({
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>',
        mode: 'horizontal',
        auto: 'true',
        speed: '700',
        pagerCustom: '.slider-pager .thumb-box'
    });
};
	

    




// Lazyload Images
if($('.lazy-image').length){
    new LazyLoad({
        elements_selector: ".lazy-image",
        load_delay: 0,
        threshold: 300
    });
}





//LightBox / Fancybox
if($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
        openEffect  : 'fade',
        closeEffect : 'fade',
        
        youtube : {
        controls : 0,
        showinfo : 0
    },
        
        helpers : {
            media : {}
        }
    });
}



//Paroller
if($('.paroller').length){
    $('.paroller').paroller({
          factor: 0.05,            // multiplier for scrolling speed and offset, +- values for direction control  
          factorLg: 0.05,          // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
          type: 'foreground',      // background, foreground  
          direction: 'horizontal'  // vertical, horizontal  
    });
}



// Elements Animation
if($('.wow').length){
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true       // act on asynchronously loaded content (default is true)
      }
    );
    wow.init();
}



// AOS Animation
if ($("[data-aos]").length) { 
    AOS.init({
    duration: 1000,
    mirror: true
  });
}



// Scroll To Explore Div
if($('.scroll-to-explore').length){
    $(".scroll-to-explore").on('click', function() {
        var target = $(this).attr('data-target');
       // animate
       $('html, body').animate({
           scrollTop: $(target).offset().top
         }, 1500);

    });
}


// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
        // add your functions
        selectDropdown ();
        SmoothMenuScroll ();
        bodylayout ();
	})(jQuery);
});



jQuery(window).on('scroll', function(){
	(function ($) {

    headerStyle ();  
    OnePageMenuScroll ();  
    
	})(jQuery);
});



// Instance Of Fuction while Window Load event
jQuery(window).on('load', function() {
    (function($) {
        prealoader ();
    })(jQuery);
});



$(window).enllax();