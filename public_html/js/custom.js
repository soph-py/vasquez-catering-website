/*
  * @package 
  * @subpackage template name HTML
  * 
  * Template Scripts
  * Created by themeturn
*/

jQuery(function ($) {
	"use strict";
	$.noConflict();
	$('.navbar-nav a').on('click', function () {
		if ($('.navbar-toggle').css('display') != 'none') {
			$(".navbar-toggle").trigger("click");
		}
	});
	
	/* === jQuery for page scrolling feature - requires jQuery Easing plugin === */
	(function () {
		$('.navbar-nav a.scroll').on('click', function (event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 10
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	}());
	
	/* ----------------------------------------------------------- */
	/*  Main Navigation sticky
	/* ----------------------------------------------------------- */
	
	$(".main-nav").sticky();
	
	/* ----------------------------------------------------------- */
	/*  Animation
	/* ----------------------------------------------------------- */
	//Wow
	new WOW().init();
});