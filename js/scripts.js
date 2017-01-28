/*jslint browser: true*/
/*global jQuery*/

jQuery(document).ready(function($){
	'use strict';


	//Slider
	$(function() {
	    $('#TopLeft-one').vegas({
	    	timer: false,
	        slides: [
	            { src: 'http://arkadia.digital/Aroma/wp-content/uploads/2016/11/photo-1474600056930-615c3d706456.jpg' },
	            { src: 'http://arkadia.digital/Aroma/wp-content/uploads/2016/11/photo-1440637475816-2e8bf1d4b6f3.jpg' }
	        ]
	    });
	});



	//smooth scroll
	$('a[href^="#"]').click(function(){
		var the_id = $(this).attr("href");

		$('html, body').animate({
			scrollTop:$(the_id).offset().top-250
		}, 'slow');
		return false;
	});


if($(window).width() > 1161){
	$('.hamburger-menu').hide();

	//hamburger menu 
	$('.cross').click(function(){
		$('.cross').fadeOut();
		$('.hamburger-menu').delay(400).fadeIn();
	});
	$('.hamburger-menu').click(function(){
		$('.hamburger-menu').fadeOut();
		$('.cross').delay(400).fadeIn();
	});
}

	$( ".show_hide_menu_sticky" ).delay( 1200 ).fadeIn( 400 );
	$( ".show_hide_menu" ).delay( 1200 ).fadeIn( 400 );
	//hamburger menu 


	$('.toggleMenu').click(function(){
		$('#navRight').toggleClass('bounceInRight bounceOutRight'); 
		$('#navRight-sticky').toggleClass('bounceInRight bounceOutRight'); 
	});
		



if($(window).width() < 1160){
	$('.cross').hide();
	$('.cross').click(function(){
		$('#menu-mobile').css('left', '-100%');
		$('.cross').fadeOut();
		$('.hamburger-menu').delay(400).fadeIn();
	});
	$('.hamburger-menu').click(function(){
		$('#menu-mobile').css('left', '0%');
		$('.hamburger-menu').fadeOut();
		$('.cross').delay(400).fadeIn();
	});
}




});









