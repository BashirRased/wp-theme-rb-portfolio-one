/*
Theme Name: Bashir Rased
Text Domain: bashirrased
Version: 1.0.1
Requires at least: 5.3
Tested up to: 5.8
Requires PHP: 5.6
Description: This theme is onepage portfolio theme.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, theme-options, threaded-comments, translation-ready, block-patterns, block-styles, wide-blocks
Author: Bashir Rased
Author URI: http://bashir-rased.com/
Theme URI: https://github.com/BashirRased/wp-theme-bashirrased
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

All files, unless otherwise stated, are released under the GNU General Public
License version 2.0 (http://www.gnu.org/licenses/gpl-2.0.html)

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned
with others.
*/

/*============================
Table of JS Content Start Here
==============================
	01.	Preloader
	02. Nice Scrollbar
	03. Header Menu
		3.1 Mobile Menu
			3.1.1 Mobile Menu Toggle
			3.1.2 Menu Resize Open and Close
		3.2 Active Menu
			3.2.1 Active Menu Click Highlight
			3.2.2 Active Menu Scroll Highlight			
		3.3 Click Menu Going Smoothly
		3.4 Header Fixed Menu
	04. Skillbar Scroll Effect
	05. Portfolio Section Effect
		5.1 Isotope Masonry
		5.2 Isotope Filtering
		5.3 Active Filter Menu Highlight
		5.4 FancyApps 3 Plugin Active
	06. Scroll To Top Button
		6.1 Scroll To Top Button Hide and Show
		6.2 Scroll To Top Button Click Effect
============================
Table of JS Content End Here
==========================*/

(function($){
	'use strict';
	
	/*=============================
	01. Preloader jQuery Start Here
	=============================*/
	$(window).on("load",function (){
		$(".preloader").delay(100).fadeOut(),
		setTimeout(function(){$("#preloader").addClass("loading-end"),
		setTimeout(function(){$("#preloader").hide()},1500)},800)
	});
	/*===========================
	01. Preloader jQuery End Here
	===========================*/

	$(document).ready(function(){
		
		/*==================================
		02. Nice Scrollbar jQuery Start Here
		==================================*/
		$("body").niceScroll({
			cursorwidth:8,
			cursorcolor:'#007bff',
			cursorborder: "none",
			cursorborderradius:15,
			zindex: 9999,
			autohidemode: false,
			cursorminheight:200,
		});
		/*================================
		02. Nice Scrollbar jQuery End Here
		================================*/
		
		/*===============================
		03. Header Menu jQuery Start Here
		===============================*/
			
			/*===== 3.1 Mobile Menu Start Here =====*/

				$(".sub-menu .sub-menu").addClass("bashir-rased-multi-dropdown-menu");
				$(".bashir-rased-multi-dropdown-menu").removeClass("sub-menu");

				$(".sub-menu").addClass("bashir-rased-dropdown-menu");
				$(".bashir-rased-dropdown-menu").removeClass("sub-menu");

				$(".bashir-rased-dropdown-menu").siblings("a").append('<i class="fas fa-chevron-down"></i>');

        		$(".bashir-rased-multi-dropdown-menu").siblings("a").prepend('<i class="fas fa-chevron-left"></i>');

				$(".menu-item-has-children").children("a").append('<button><span class="fas fa-chevron-down"></span></button>');

				$('.menu-item-has-children button').on("click", function (event) {
					event.preventDefault();
					$(this).parent("a").siblings("ul").toggleClass('bashir-rased-dropdown-menu-open');
				});
			
				/* 3.1.1 Mobile Menu Toggle */
				$('.bashir-rased-mobile-menu-icons').on("click", function (event) {
					event.preventDefault();
					$('.bashir-rased-desktop-menu').toggleClass('bashir-rased-desktop-menu-close');
				});
				/* End */

			/*===== 3.1 Mobile Menu End Here =====*/
			
			/*===== 3.2 Active Menu Start Here =====*/
			
				/* 3.2.1 Active Menu Click Highlight */
				var sidenav = $('.bashir-rased-header-menu a');
				$(sidenav).on('click', '.bashir-rased-header-menu a', function() {
					$(this).addClass('bashir-rased-header-active-menu').siblings().removeClass('bashir-rased-header-active-menu');			
				});		
				/* End */
				
				/* 3.2.2 Active Menu Scroll Highlight */
				$(window).on('scroll', function() {
					$('.bashir-rased-scroll-menu').each(function() {
						if ($(window).scrollTop() >= $(this).position().top - 50) {
							var id = $(this).attr('id');
							$('.bashir-rased-header-menu a').removeClass('bashir-rased-header-active-menu');
							$('.bashir-rased-header-menu a[href*=\\#' + id + ']').addClass('bashir-rased-header-active-menu');
						}
					});
				});
				/* End */
			
			/*===== 3.2 Active Menu End Here =====*/
			
			/*===== 3.3 Click Menu Going Smoothly Start Here =====*/
			$('a.smooth-scroll').on("click", function(e) {
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top
				}, 1000);
				e.preventDefault();
			});
			/*===== 3.3 Click Menu Going Smoothly End Here =====*/
			
			/*===== 3.4 Header Fixed Menu Start Here =====*/
			$(window).scroll(function(){
				if ($(window).scrollTop() >= 50) {
					$('.bashir-rased-header-menu-area').addClass('bashir-rased-header-fixed');
				}
				else {
					$('.bashir-rased-header-menu-area').removeClass('bashir-rased-header-fixed');
				}
			});
			/*===== 3.4 Header Fixed Menu End Here =====*/			
			
		/*=============================
		03. Header Menu jQuery End Here
		=============================*/
		
		/*==========================================
		04. Skillbar Scroll Effect jQuery Start Here
		==========================================*/
		$('.bashir-rased-skills-bar').each(function() {
			$(this).find('.bashir-rased-skills-bar-animation').animate({ width: $(this).attr('data-percent') }, 3000);
		});
		/*========================================
		04. Skillbar Scroll Effect jQuery End Here
		========================================*/
		
		/*============================================
		05. Portfolio Section Effect jQuery Start Here
		============================================*/
		
		/*===== 5.1 Isotope Masonry Start Here =====*/
		var jQuerygrid = $('.bashir-rased-portfolio').isotope({
		  itemSelector: '.bashir-rased-portfolio-item',
		  percentPosition: true,
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
		  }
		});
		/*===== 5.1 Isotope Masonry End Here =====*/
		
		/*===== 5.2 Isotope Filtering Start Here =====*/
		$('.bashir-rased-portfolio-btn-area ul').on( 'click', 'li', function() {
		  var filterValue = $(this).attr('data-filter');
		  jQuerygrid.isotope({ filter: filterValue });
		});
		/*===== 5.2 Isotope Filtering End Here =====*/
		
		/*===== 5.3 Active Filter Menu Highlight Start Here =====*/
		$('.bashir-rased-portfolio-btn-area li').on('click', function(event){
			$(this).siblings('.bashir-rased-portfolio-active').removeClass('bashir-rased-portfolio-active');
			$(this).addClass('bashir-rased-portfolio-active');
			event.preventDefault();
		});
		/*===== 5.3 Active Filter Menu Highlight End Here =====*/
		
		/*===== 5.4 FancyApps 3 Plugin Active Start Here =====*/
		$('[data-fancybox]').fancybox({
			  protect: true,
			  buttons : [
				'zoom',
				'thumbs',
				'close'
			  ],
			  slideShow: {
				autoStart: true,
				speed: 1200
			 },
			 transitionEffect: "tube",
			 transitionDuration: 1500,
		});
		/*===== 5.4 FancyApps 3 Plugin Active End Here =====*/
		
		/*==========================================
		05. Portfolio Section Effect jQuery End Here
		==========================================*/
		
		/*========================================
		06. Scroll To Top Button jQuery Start Here
		========================================*/
		
		/*===== 6.1 Scroll To Top Button Hide and Show Start Here =====*/
		$(window).scroll(function(){		  
		  var RBScroll = $(window).scrollTop();		  
		  if( RBScroll > 100 ){
			  $(".bashir-rased-scroll-to-top-area").fadeIn();
		  }else {
			  $(".bashir-rased-scroll-to-top-area").fadeOut();
		  }
		});
		/*===== 6.1 Scroll To Top Button Hide and Show End Here =====*/
		
		/*===== 6.2 Scroll To Top Button Click Effect Start Here =====*/
		$(".bashir-rased-scroll-to-top-area").on('click', function(){
			$("html, body").animate({'scrollTop' : 0}, 500);
			return false;
		});
		/*===== 6.2 Scroll To Top Button Click Effect End Here =====*/
		
		/*======================================
		06. Scroll To Top Button jQuery End Here
		======================================*/
		
	});

}(jQuery));