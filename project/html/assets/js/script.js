$(document).ready(function(){
	"use strict";

    $("#banner-slider").owlCarousel({
		loop: true,
		margin: 10,
		dots: true,
		nav: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		navText: ["<i class='fal fa-angle-left' aria-hidden='true'></i>", "<i class='fal fa-angle-right' aria-hidden='true'></i>"],
		responsive: {
			0: {
				items: 1

			},
			600: {
				items: 1

			},
			1000: {
				items: 1
			}
		}
	});

	$("#sponser-slider").owlCarousel({
		loop: true,
		margin: 10,
		dots: true,
		nav: false,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		navText: ["<i class='fal fa-angle-left' aria-hidden='true'></i>", "<i class='fal fa-angle-right' aria-hidden='true'></i>"],
		responsive: {
			0: {
				items: 4

			},
			600: {
				items: 5

			},
			1000: {
				items: 7
			}
		}
	});

});

$(window).on('load', function(){
	"use strict";
	setTimeout(function(){
		$('.preloader').addClass('inactive');
	}, 500);
	
});



//Accordion
$('.accordion-item .accordion-title').on('click', function(){
	var parent = $(this).parent('.accordion-item');
	if(parent.hasClass('active')==false){
		parent.addClass('active');
		$(this).siblings('.accordion-content').slideDown(300);
	}else{
		parent.removeClass('active');
		$(this).siblings('.accordion-content').slideUp(300);
	}
});



//nav//

$(document).ready(function(){
	"use strict";
	
	$('.plus').click(function () {
		if ($('#qty').val() < 10) {
			$('#qty').val(+$('#qty').val() + 1);
		}
	});
	$('.minus').click(function () {
		if ($('#qty').val() > 1) {
			if ($('#qty').val() > 1) $('#qty').val(+$('#qty').val() - 1);
		}
	});

	$('.product-image-slider .item').on('click', function(){
		var parent = $(this).parents('.product-image-slider');
		var image = $(this).find('img').attr('src');
		//console.log(image);
		parent.siblings('.product-image').find('img').attr('src',image);
	});

});
//banner owl//


//navigation
$('.btn-menu').on('click', function(){
    $('.header .navigation-wrap').addClass('active');
    $('.header .menu-overlay').addClass('active');
});
$('.header .menu-overlay').on('click', function(){
   $('.header .navigation-wrap').removeClass('active');
    $(this).removeClass('active');
});































