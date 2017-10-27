//Template: AYA Creative Agency
//Author: UnomiaThemes
//Version: 1.0



// Document read
(function($) {
  "use strict";


var $window = $(window);

//////// -Preloader- /////////
$window.on('load', function() {
  var loading = $('.loading'); 
  $(loading).hide(); // Hide preloader when document is fully loaded
});

//////// -Owl Carousel Slider- /////////
  var owl = $('.owl-carousel');
  $(owl).owlCarousel({
    items: 1, // Number of sliders to show
    animateOut: 'fadeOut', // Slide change animation
    autoHeight: true
  });


//////// -Mobile Menu- /////////
    var icon = $(".icon");
    var mobnav = $(".mobilenav");
    var topmen = $(".top-menu");
    var midmen = $(".mid-menu");
    var botmen = $(".bottom-menu");
    var close = $(".close-menu");
    $(icon).on('click', function () {
        $(mobnav).fadeToggle(500); 
        $(topmen).toggleClass("top-animate");
        $(midmen).toggleClass("mid-animate");
        $(botmen).toggleClass("bottom-animate");
      });

    $(close).on('click', function(){
    $(mobnav).hide();
      $(topmen).removeClass("top-animate");
      $(midmen).removeClass("mid-animate");
      $(botmen).removeClass("bottom-animate");

});


//////// -Smooth Scroll- /////////
smoothScroll.init({
    selector: '[data-scroll]', 
    selectorHeader: '[data-scroll-header]',
    speed: 1000, // Scrolling Time in Milliseconds(ms) // 1000ms = 1sec //
    easing: 'easeInOutCubic',
    offset: 0, 
    updateURL: true,
    callback: function ( anchor, toggle ) {} 
});
  
//////// -Scroll to top button- /////////
  var scrolls = $('.scrollToTop');
  $window.on('scroll', function(){
        if ($(this).scrollTop() > 900) {
            $(scrolls).fadeIn();
        } else {
            $(scrolls).fadeOut();
        }
    
    });

  $(scrolls).on('click', function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });


//////// -Sticky Header- /////////
  var scroll_position = 0; 
  
  $window.on('scroll', function(){
    scroll_position = $(this).scrollTop();
    var headers = $('.header');
    if(scroll_position > 300) { // After scrolling above 300px height show the sticky menu 
      $(headers).css('position', 'fixed'); // Make header fixed position
      $(headers).css('background', '#1a1919'); // Change the sticky header background
      $(headers).css('z-index', '100');  // Stack order of the header
    } else {
      $(headers).css('position', 'absolute'); // Return to normal header under 300px height scroll
      $(headers).css('background', 'transparent'); // Change to normal transparent background
    }
  });
    
  //////// -Parallax Sections- /////////   
  var first_parallax = $('.parallax-window');
  var second_parallax = $('.parallax-adventages');
  var parallax_testimonials = $('.parallax-testimonial');
  var single_image_parallax = $('.single-parallax');
  $(first_parallax).parallax();
  $(second_parallax).parallax();
  $(parallax_testimonials).parallax();
  $(single_image_parallax).parallax();

  //////// -Magnific Popup for Video- /////////
  var video_button = $('.video-play');
  $(video_button).magnificPopup({
    type: 'iframe',
    iframe: {
      patterns: {
        youtube: {
          index: 'youtube.com/',
          src: 'https://www.youtube.com/embed/%id%?autoplay=1' // Don't touch!
        },
        vimeo: {
          index: 'vimeo.com/',
          src: 'http://player.vimeo.com/video/%id%?autoplay=1' // Don't touch!
        }
      }
    }
  });



//////// -Magnific Popup for portfolio images- /////////
  var filter_item = $('.filtr-item');
  $(filter_item).magnificPopup({
    delegate: 'a',
    type: 'image'
  });

//////// -Video Background- /////////
var video = $(".video");
$(video).YTPlayer({
    fitToBackground: true,
    /// Change the symbols here with this from your video ///
    videoId: '9MAzEtphWLE',
    /// End ///
     playerVars: {
      modestbranding: 1,
      autoplay: 1,
      controls: 0,
      showinfo: 0,
      branding: 0,
      rel: 0,
      autohide: 0,
      start: 59
    }
});

var video = $(".video2");
$(video).YTPlayer({
    fitToBackground: true,
    /// Change the symbols here with this from your video ///
    videoId: '7e90gBu4pas',
    /// End ///
     playerVars: {
      modestbranding: 1,
      autoplay: 1,
      controls: 0,
      showinfo: 0,
      branding: 0,
      rel: 0,
      autohide: 0,
      start: 59
    }
});

//////// -Slick Slider for Testimonials- /////////
  var testim = $('.testimonials');
  $(testim).slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,  // Default items to show
    dots: true,
    arrows: false,
    responsive: [
    {
        breakpoint: 1024,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 1
        }
      },
    {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 1024,
        settings: {
          centerMode: true,
          slidesToShow: 1,
          centerPadding: '40px'
        }
      }
    ]
  });

//////// -Slick Slider for Our Team- /////////
  var center = $('.center');
  $(center).slick({
    centerMode: true,
    centerPadding: '60px',
    arrows: false,
    slidesToShow: 3, //  Default items to show

    responsive: [{
     breakpoint: 1024,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 1
        }
      },
    {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
        },
        {
        breakpoint: 320,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });


  //////// -Portfolio Filter- /////////
  var filter_container = $('.filtr-container');
  $(filter_container).filterizr();

  var simplefilter = $('.portfolio-filter li');
  $(simplefilter).on('click', function() {
        $(simplefilter).removeClass('active');  // Remove Class active on portfolio filter button
        $(this).addClass('active');    // Add class active to the clicked button
    });
  
})(jQuery);






