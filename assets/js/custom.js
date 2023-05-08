/*
Theme Name: Bashir Rased
Text Domain: bashir-rased
Version: 1.1.3
Requires at least: 5.3
Tested up to: 6.0
Requires PHP: 5.6
Description: This theme is onepage portfolio theme.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks
Author: Bashir Rased
Author URI: https://profiles.wordpress.org/bashirrased2017/
Theme URI: https://github.com/BashirRased/wp-theme-bashir-rased
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
	05. Scroll To Top Button
		5.1 Scroll To Top Button Hide and Show
		5.2 Scroll To Top Button Click Effect
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
		
		/*===============================
		03. Header Menu jQuery Start Here
		===============================*/
			
			/*===== 3.1 Mobile Menu Start Here =====*/

			$(".sub-menu .sub-menu").addClass("bashir-rased-multi-dropdown-menu");
			$(".bashir-rased-multi-dropdown-menu").removeClass("sub-menu");

			$(".bashir-rased-desktop-menu .children .children").addClass("bashir-rased-multi-dropdown-menu");
			$(".bashir-rased-multi-dropdown-menu").removeClass("children");

			$(".sub-menu").addClass("bashir-rased-dropdown-menu");
			$(".bashir-rased-dropdown-menu").removeClass("sub-menu");

			$(".bashir-rased-desktop-menu .children").addClass("bashir-rased-dropdown-menu");
			$(".bashir-rased-dropdown-menu").removeClass("children");

			$(".bashir-rased-dropdown-menu").siblings("a").append('<i class="fa-solid fa-chevron-down"></i>');

			$(".bashir-rased-multi-dropdown-menu").siblings("a").prepend('<i class="fa-solid fa-chevron-left"></i>');

			$(".menu-item-has-children, .bashir-rased-desktop-menu  .page_item_has_children").children("a").append('<button><span class="fa-solid fa-chevron-down"></span></button>');

			$('.menu-item-has-children button, .page_item_has_children button').on("click", function (event) {
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
		
		/*========================================
		05. Scroll To Top Button jQuery Start Here
		========================================*/
		
		/*===== 5.1 Scroll To Top Button Hide and Show Start Here =====*/
		$(window).scroll(function(){		  
		  var RBScroll = $(window).scrollTop();		  
		  if( RBScroll > 100 ){
			  $(".bashir-rased-scroll-to-top-area").fadeIn();
		  }else {
			  $(".bashir-rased-scroll-to-top-area").fadeOut();
		  }
		});
		/*===== 5.1 Scroll To Top Button Hide and Show End Here =====*/
		
		/*===== 5.2 Scroll To Top Button Click Effect Start Here =====*/
		$(".bashir-rased-scroll-to-top-area").on('click', function(){
			$("html, body").animate({'scrollTop' : 0}, 300);
			return false;
		});
		/*===== 5.2 Scroll To Top Button Click Effect End Here =====*/
		
		/*======================================
		05. Scroll To Top Button jQuery End Here
		======================================*/
		
	});

}(jQuery));