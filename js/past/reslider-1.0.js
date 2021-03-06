// CALL AREA
$(function(){
		
	// Init - reSlider
	$('#slider1').reSlider({animation:'slide', delay:3000});
	
});

// PLUGINS

/* ----------
 * To Do List
 * ----------
 * Infinite Carousel
 * Different Animations
 * Swipe/Gestures and Drag
 * Fix: Percentage not exact
*/


/*!
* reSlider
* Copyright (c) 2013 Brandon Miller
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.reSlider = function(options) {
		// Variables
		var $sliderWrap = $(this),
			$slider = $sliderWrap.find(".reslider"),
			$sliderItems = $sliderWrap.find(".reslider > li"),
			slideLen = $sliderItems.length,
			totalWidth = slideLen * 100 + "%",
			slideWidth = 100 / slideLen, 
			num = -1,
			theDelay = '',
			$curSlide = '',
			$nxtSlide = '',
			$nav = '',
			$navLinks = '',
			bulletNavClicked = false,
			goToPrevious = false;
		// Defaults
		var defaults = {
			speed: 500,
			delay: 9000,
			animation: "fade",
			buildBulletNav: true,
			buildDirNav: true
		};
		// Combine Defaults and Options into Settings
		var settings = $.extend({}, defaults, options);
				
		// Set Widths
		$slider.width(totalWidth);
		$sliderItems.each(function() {
			$(this).outerWidth(slideWidth +"%");
		});
		
		// Make overflow visible for Items that go outside box (arrows)
		$slider.css({ "overflow": "visible" });

		var plugin = {

			// Build Bullet Navigation
			buildBulletNav: function() {
				//Declare Variables before Loop
				var bulletItems = '', 
					bulletNum;
				for (var i = 0; i < slideLen; i++) {
					bulletNum = i + 1;
					bulletItems += '<span class="bullet-link">' + bulletNum + '</span>';
				}
				$sliderWrap.append('<div class="reslider-nav">' + bulletItems + '</div>');
				$nav = $sliderWrap.find('.reslider-nav');
				$navLinks = $nav.find('.bullet-link');
				$navLinks.eq(0).addClass("current");
				// click setup
				$navLinks.on("click", function(){
					var index = $(this).index();
					// Set Current/Next Slides, reset Delay, start animation
					$curSlide = $slider.find($(".current"));
					$nxtSlide = $($sliderItems[index]);
					// Don't Call if You click on the current link
					if ($curSlide.index() !== $nxtSlide.index()) {
						num = (index - 2);
						bulletNavClicked = true;
						plugin.delayTimer("clear");
						settings.animation();
					}
				});
			},

			// Build Directional Navigation
			buildDirNav: function() {
				$sliderWrap.append('<div class="dir-nav"><span class="dir-link prev">&laquo;</span> <span class="dir-link next">&raquo;</span></div>');
				$(".dir-nav .prev").on("click", function(){
					num = num - 2;
					goToPrevious = true;
					plugin.delayTimer("clear");
					settings.animation();
				});
				$(".dir-nav .next").on("click", function(){
					plugin.delayTimer("clear");
					settings.animation();
				});
			},

			orderNav: function() {
				var navIndex = (num >= (slideLen-2)) ? 0 : num + 2; // Reset Index if max slide reached
				$navLinks.removeClass("current");
				$navLinks.eq(navIndex).addClass("current");
			},

			// Stop Slider on Hover.. Start on Mouse Out
			pauseSlider: function() {
				$slider.mouseover(function(){
					plugin.delayTimer("clear");
				});
				$slider.mouseout(function(){
					plugin.delayTimer();
				});
			},
			
			// Slide
			slide: function() {
				if (settings.buildBulletNav) plugin.orderNav();
				num++;
				if (num === (slideLen - 1)) { // if last slide... reset
					$slider.animate({
						left:"0"
					}, settings.speed);
					num = -1;
					plugin.delayTimer();
				} else if (num < -1) { // if first slide (and going left)
					$slider.animate({
						left:"-" + (slideLen - 1) + "00%"
					}, settings.speed);
					num = slideLen - 2;
					plugin.delayTimer();
				} else { 
					$slider.animate({
						left:"-" + (num + 1) + "00%"
					}, settings.speed);
					plugin.delayTimer();
				}
			}, 
			
			// Fade
			fade: function(bullet) {
				if (settings.buildBulletNav) plugin.orderNav();
				num++;
				// If bulletNav NOT Clicked
				if (!bulletNavClicked) {
					//$curSlide = (num < 0) ? $($sliderItems[slideLen - 1]) : $($sliderItems[num]); 
					if (num === (slideLen - 1)) { // if last slide
						$curSlide = $($sliderItems[num]);
						$nxtSlide = $($sliderItems[0]);
						num = -1;
					} else if (num < -1) { // if first slide (and going left)
						$curSlide = $($sliderItems[0]);
						$nxtSlide = $($sliderItems[slideLen - 1]);
						num = slideLen - 2;
					} else {
						// 
						$curSlide = (goToPrevious) ? $($sliderItems[num + 2]) : $($sliderItems[num]);
						$nxtSlide = $($sliderItems[num + 1]);
					}
				}
				// Fade Out Current, Fade In Next
				$nxtSlide.show(0, function(){
					$curSlide.fadeOut(settings.speed, function(){
						$curSlide.removeClass("current");
						$nxtSlide.addClass("current");
						plugin.delayTimer();
					});
				});
				bulletNavClicked = false;
				goToPrevious = false;
			},
			
			// Animation Type
			animControl: function() {
				var animType = settings.animation;
				switch (animType) 
				{
					case "fade":
						settings.animation = plugin.fade;
						$sliderWrap.addClass("rs-fade");
						$sliderItems.eq(0).addClass("current");
						$sliderItems.not(":eq(0)").hide();
						break;
					case "slide":
						settings.animation = plugin.slide;
						$sliderWrap.addClass("rs-slide");
						break;
				}
				plugin.delayTimer();
			},
			
			// Clear Timeout
			clearDelay: function() {
				clearTimeout(theDelay);
			},

			// Timer
			delayTimer: function(clear) {
				plugin.clearDelay();
				if (clear === undefined || null) theDelay = setTimeout(settings.animation, settings.delay); // Start timer unless clear was
			}, 
			
			// Init
			init: function() {
				if (settings.buildBulletNav) plugin.buildBulletNav();
				if (settings.buildDirNav) plugin.buildDirNav();
				$slider.wrap('<div class="reslider-inner"></div>');
				// Start
				plugin.animControl();
				plugin.pauseSlider();
			}
		};
		plugin.init();
	};
})(jQuery);