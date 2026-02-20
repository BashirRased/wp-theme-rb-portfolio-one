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

	////////////////////////////////////////////////////
	// 06. Sticky Header Js
	$(window).on("scroll",function (){
		var scroll = $(window).scrollTop();
		if (scroll < 200) {
			$("#header-fixed").removeClass("header-fixed");
		} else {
			$("#header-fixed").addClass("header-fixed");
		}
	});

	

	$(document).ready(function() {
		
		$('.header-menu nav').meanmenu({
			meanMenuContainer: '.header-menu',
			meanScreenWidth: "991",
			meanMenuOpen: '<span></span><span></span><span></span>',
		});

		/*========================================
		06. Scroll To Top Button jQuery Start Here
		========================================*/
		/*===== 6.1 Scroll To Top Button Hide and Show Start Here =====*/
		jQuery(window).scroll(function(){		  
			var scrollTopBtn = jQuery(window).scrollTop();		  
			if( scrollTopBtn > 100 ){
				jQuery(".scroll-top-btn").fadeIn();
			}else {
				jQuery(".scroll-top-btn").fadeOut();
			}
		  });
		  /*===== 6.1 Scroll To Top Button Hide and Show End Here =====*/
		  
		  /*===== 6.2 Scroll To Top Button Click Effect Start Here =====*/
		  jQuery(".scroll-top-btn").on('click', function(){
			  jQuery("html, body").animate({'scrollTop' : 0}, 500);
			  return false;
		  });
		  /*===== 6.2 Scroll To Top Button Click Effect End Here =====*/		  
		  /*======================================
		  06. Scroll To Top Button jQuery End Here
		  ======================================*/
		
		
	});

}(jQuery));