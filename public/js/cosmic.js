/**
* @author Waseem <waseembarcha1993@gmail.com>
* @date 1-1-2016
* @description 
***
* Modular fashion.
*	-> For every plugin you make a function and call it.
*/

$(window).on('load', function(){
	// Code ? When the page finished loading.

	// call init()
	$("#loading").fadeOut();
	init();

});

/**
*	Make an init function where place all other functions.
*/
function init(){

	// vegas slider
	vegasHeader();

	//text typer
	typed()

	// wow for on scroll animations
	wow();

	//circle process bar
	circleProgressBar();

	//Magnific pop up 
	popup();

	//counter function
	counter();

	// smooth scroll
	smoothScroll();
	
	// scrollup
	scrollUp();

	// color switcher
	switcher();
	// Owl Slider
	owlslider();
	nav();
}
// wow for on scroll animations
function wow(){
	new WOW().init();
}
// counter up
function counter(){
	$('.counter').counterUp({
        delay: 10,
        time: 1000
    });
}
//Magnific Pop up 
function popup(){
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Waseem Barcha</small>';
			}
		}
	});
	$('.popup-gallery-blog').magnificPopup({
		delegate: 'span',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});

}
// Circle Progress Plugin
function circleProgressBar(){
	$('#circle1').circleProgress({
        value: 0.66,
        size: 130,
        fill: {
            gradient: ["red", "orange"]
        }
    }).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(66 * progress) + '<i>%</i>');
    });
    $('#circle2').circleProgress({
        startAngle: -Math.PI / 4 * 3,
	    value: 0.5,
	    size: 130,
	    lineCap: 'round',
	    fill: { color: '#ffa500' }
	    }).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(50 * progress) + '<i>%</i>');
    });
    $('#circle3').circleProgress({
        value: 0.98,
        size: 130,
	}).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(98* progress) + '<i>%</i>');
    });
    $('#circle4').circleProgress({
        value: 0.75,
        size: 130,
	    fill: {
	    	 gradient: [['#0681c4', .5], ['#4ac5f8', .5]], gradientAngle: Math.PI / 4
	    	  }
	}).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(75 * progress) + '<i>%</i>');
    });
}

/** Vegas Plugin **/

function vegasHeader(){
	$(".slide-show").vegas({
		transition: 'random',
	    slides: [
	    	{ src: "img/slider/bg1.jpg"},
	    	{ src: "img/slider/bg7.jpg"},
	        { src: "img/slider/bg-dark-2.jpg"},
	        { src: "img/slider/bg-dark-1.jpg"},
	        { src: "img/slider/bg6.jpg"}
	    ],
	    slide: 1,
	    preload: true,
	    timer: false,
	    overlay: 'frameworks/vegas/overlays/06.png',
	});
	$(".amimate-slideshow").vegas({
	    slides: [
	    	{ src: "img/slider/bg2.jpg"},
	        { src: "img/slider/bg6.jpg"},
	        { src: "img/slider/bg5.jpg"},
	        { src: "img/slider/bg4.jpg"},
	        { src: "img/slider/bg7.jpg"}
	    ],
	    slide: 2,
	    preload: true,
	    timer: false,
	    overlay: 'frameworks/vegas/overlays/06.png',
	    transition: 'random',
	    animation: 'random',
	});
	$(".slide-show2").vegas({
	    slides: [
	        { src: "img/slider/bg2.jpg"},
	        { src: "img/slider/bg3.jpg"},
	        { src: "img/slider/bg7.jpg"},
	        { src: "img/slider/bg1.jpg"},
	        { src: "img/slider/bg-dark-2.jpg"}
	    ],
	    slide: 2,
	    preload: true,
	    timer: false,
	    overlay: 'frameworks/vegas/overlays/06.png',
	    animation: 'random',
	});

}

// smooth scroll
function smoothScroll () {	
	$(".smooth-scroll").smoothScroll({
		speed: 1500,
		offset: -72,
	});	
	
}

// scroll up
function scrollUp () {

	// src: http://markgoodyear.com/2013/01/scrollup-jquery-plugin/

	 $.scrollUp({	
        animation: 'fade',
        scrollText: '&#xf102'
    });
	 
	// available optoins
	/**
	    scrollName: 'scrollUp', // Element ID
	    topDistance: '300', // Distance from top before showing element (px)
	    topSpeed: 20000, // Speed back to top (ms)
	    animation: 'none', // Fade, slide, none
	    animationInSpeed: 1000, // Animation in speed (ms)
	    animationOutSpeed: 0, // Animation out speed (ms)
	    scrollText: '&#xf106;', // Text for element
	    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  	**/

	
}
//text typer
function typed () {
  $('.type-writer .type-here').typed({
        strings: ["cosmic","awesome", "creative","cosmic","elegant", "smart" ],
        typeSpeed: 70,
        backDelay: 2000,
        loop: true,
      });
}
/* Owl Carousel */

function owlslider(){
  $("#owl-team").owlCarousel({
    itemsCustom : [
        [0, 1],
        [600, 2],
        [1000, 3]
      ],
    slideSpeed : 500,
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    autoHeight : false,
    navigation:true,
    navigationText: [
      "<i class='fa fa-angle-left fa-2x'></i>",
      "<i class='fa fa-angle-right fa-2x'></i>"
      ],
  });
  $("#owl-testimonials").owlCarousel({
	autoPlay: 5000, //Set AutoPlay to 3 seconds
	items : 1,
	slideSpeed : 1000,
	singleItem:true,
    navigation:true,
    navigationText: [
      "<i class='fa fa-angle-left fa-2x'></i>",
      "<i class='fa fa-angle-right fa-2x'></i>"
      ],
  });
  $("#owl-clients").owlCarousel({
	items : 4,
    slideSpeed : 500,
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    autoHeight : false,
    navigation:true,
    navigationText: [
      "<i class='fa fa-angle-left fa-2x'></i>",
      "<i class='fa fa-angle-right fa-2x'></i>"
      ],
  });
}

// color switcher

function switcher(){
	$('.sw-clr').click(function(){
		ths = $(this);
		fileName = 'css/' + ths.data('target') + '.css';
		// alert(fileName)
		$('#switcher-target').prop('href', fileName);
	});
}

