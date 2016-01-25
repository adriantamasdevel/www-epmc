var windowWidth, generalWindowWidth, saleLeft, menuLeft;
function linkFlip() {
	var supports3DTransforms = document.body.style.webkitPerspective !== undefined || document.body.style.MozPerspective !== undefined;

	function linkify(selector) {
		if (supports3DTransforms) {
			var nodes = document.querySelectorAll(selector);
			for (var i = 0, len = nodes.length; i < len; i++) {
				var node = nodes[i];
				if (!node.className || !node.className.match(/roll/g)) {
					node.className += ' roll';
					node.innerHTML = '<span data-title="' + node.text + '">' + node.innerHTML + '</span>';
				}
			}
		}
	}
	linkify('#navbar-top nav a');
}

function startup() {
	linkFlip();
}





$(document).ready(function() {
	generalWindowWidth = windowWidth = $(window).width();

	//init menu bg position
	var offset1 = $("#footer_content").offset();
	var menuBgLeft = $('#headerMenuBg').css("left").replace("px", "");
	var logoBgLeft = $('#headerSignBg').css("left").replace("px", "");
	var guidelineRight = $('#navbar-top').offset();
	var navWidth = $('.header-nav').css("width").replace("px", "");
	var naviconRight = $('.navicon').css("right").replace("px", "");
	
	var s1 = offset1.left;
	var percentage = 7.56;
	var newPosition = 856 - parseFloat(s1) - 15;

	var newPosition2 = parseFloat(navWidth) + parseFloat(guidelineRight.left) + 90 ;
	console.log(naviconRight);

	if( windowWidth < 980 ){
		newPosition2 = windowWidth - 170;
		newPosition = 856 - parseFloat(windowWidth/3 + 10);

		// $('.navicon').css({
		// 	"left":  "" + parseFloat(windowWidth/2 +100)  + 'px',
		// });
		
	}

	$('#headerMenuBg').css({
		"left":  "-" + newPosition + 'px',
	});

	$('#headerSignBg').css({
		"left":  "" + newPosition2 + 'px',
	});

	

	$('#slideDescription').css({
		"left":  "" + (guidelineRight.left - 30) + 'px',
	});
	/***************** Waypoints ******************/

	$('#headerMenuBg').removeClass('hide').delay(100).addClass('animated fadeInLeftBig');	

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInUp');
	}, {
		offset: '95%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '95%'
	});
	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated fadeInRight');
	}, {
		offset: '95%'
	});

	// /***************** Initiate Flexslider ******************/
	// $('.flexslider').flexslider({
	// 	animation: "slide"
	// });

	fakewaffle.responsiveTabs(['xs', 'sm']);

	/***************** Initiate Fancybox ******************/

	$('.single_image').fancybox({
		padding: 4,
	});

	/***************** Tooltips ******************/
    $('[data-toggle="tooltip"]').tooltip();


    /***************** Initiate Collapse panels ******************/
    $('#accordion').collapse();


	/***************** Nav Transformicon ******************/

	/* When user clicks the Icon */
	$('.nav-toggle').click(function() {
		$(this).toggleClass('active');
		$('.header-nav').toggleClass('open');
		$('#headerMenuBg').css({
			"height": "100%"
		});
		$('body').addClass('stop-scrolling');
		event.preventDefault();
	});
	/* When user clicks a link */
	$('.header-nav li a').click(function() {
		$('.nav-toggle').toggleClass('active');
		$('.header-nav').toggleClass('open');
		$('body').removeClass('stop-scrolling')

	});

	startup();
	linkFlip();



	if($('#clockdiv').length > 0 ) {
		var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
		initializeClock('clockdiv', deadline);
	}
	

	/***************** Header BG Scroll ******************/

	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();



			if (scroll >= 685) {
				$('section.navigation').removeClass('fadeOutUp').addClass('fixed fadeInDown smallHeaderMenuBg');

				$('header').css({
					"border-bottom": "none",
					"padding": "30px 0"
				});
				$('header .navicon').css({
					"top": "46px",
				});
			} else {

				if ($('section.navigation').hasClass('fadeInDown')) {
					if (scroll < 500) {
						if ($('section.navigation').hasClass('fadeInDown')) {
							$('section.navigation').addClass('fadeOutUp');
						}
					 }else{
					 	$('section.navigation').removeClass('fadeInDown animated smallHeaderMenuBg');
					 }	
						
					} 

				

				if (scroll >= 400) {
					if (!$('section.navigation').hasClass('fadeOutUp') && !$('section.navigation').hasClass('fadeInDown')) {
						$('section.navigation').addClass('fadeOutUp animated');
					} 
					// else {
					// 	$('section.navigation').addClass('fadeOutUp animated');
					// } 
				}else{
					if ($('section.navigation').hasClass('fadeOutUp')) {
						$('section.navigation').removeClass('fadeOutUp').addClass('fadeIn animated');
					}

					$('section.navigation').removeClass('fadeIn').removeClass('fixed');
				}
				
				$('header').css({
					"padding": "58px 0px 30px 0px"
				});		
				$('header .navicon').css({
					"top": "46px",
				});
			}
		});

		$( window ).resize(function() {
			var pageWidth = $(window).width();
			var menuBgLeft = $('#headerMenuBg').css("left").replace("px", "");
			var offset = $("#footer_content").offset();
			var guidelineRight = $('#navbar-top').offset();
			var navWidth = $('.header-nav').css("width").replace("px", "");
			var saleStateLeft = offset.left;
			var newLeft = 856 - saleStateLeft - 15;
			var newPosition2 = parseFloat(navWidth) + parseFloat(guidelineRight.left) + 90 ;

			if( pageWidth < 980 ){
				newPosition2 = pageWidth - 170;
				newLeft = 856 - parseFloat(pageWidth/3 + 40);

				// $('.navicon').css({
				// 	"left":  "" + parseFloat(pageWidth-newLeft)  + 'px',
				// });
			} 

			if (pageWidth < 660) {

				newLeft = 856 - parseFloat(pageWidth/3 - 10);
				console.log(newLeft);
			}
			
			$('#headerMenuBg').css({
				"left": "-" + newLeft + 'px',
			});


			$('#headerSignBg').css({
				"left":  "" + newPosition2 + 'px',
			});


			$('#slideDescription').css({
				"left":  "" + (guidelineRight.left - 30) + 'px',
			});

			windowWidth = pageWidth;
			saleLeft = saleStateLeft;
			menuLeft = menuBgLeft;
		});

	});
	/***************** Smooth Scrolling ******************/

	// $(function() {

	// 	$('a[href*=#]:not([href=#])').click(function() {
	// 		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

	// 			var target = $(this.hash);
	// 			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	// 			if (target.length) {
	// 				$('html,body').animate({
	// 					scrollTop: target.offset().top
	// 				}, 2000);
	// 				return false;
	// 			}
	// 		}
	// 	});

	// });


	function getTimeRemaining(endtime) {
	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor((t / 1000) % 60);
	  var minutes = Math.floor((t / 1000 / 60) % 60);
	  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	  var days = Math.floor(t / (1000 * 60 * 60 * 24));
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	}

	function initializeClock(id, endtime) {
	  var clock = document.getElementById(id);
	  var daysSpan = clock.querySelector('.days');
	  var hoursSpan = clock.querySelector('.hours');
	  var minutesSpan = clock.querySelector('.minutes');
	  var secondsSpan = clock.querySelector('.seconds');

	  function updateClock() {
	    var t = getTimeRemaining(endtime);

	    daysSpan.innerHTML = t.days;
	    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

	    if (t.total <= 0) {
	      clearInterval(timeinterval);
	    }
	  }

	  updateClock();
	  var timeinterval = setInterval(updateClock, 1000);
	}
	// Start Carousel

	var sync2 = $('#slideDescription'),
    	sync1 = $('#slideImages');

    

    function syncCarousel1(el){
    	var current = el.page.index;
    	sync1.trigger('to.owl.carousel', current);
	}

    
    sync1.owlCarousel({
        center: true,
        loop: true,
        items: 1,
        margin: 0,
        autoplay: true,
        mouseDrag: false,
        lazyLoad:true,
        itemsScaleUp:true,
        autoHeight : true,
	    responsive: true,
	    responsiveRefreshRate : 200,
	    responsiveBaseWidth: window
    });

    sync2.owlCarousel({
        center : true,
        loop : true,
        items : 1,
        margin:10,
        dots: true,
        autoplay: true,
        mouseDrag: false,
        onTranslate: syncCarousel1
    }); 



});


