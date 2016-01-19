// CALL AREA
$(function(){
	
	// Init - multiSlider
	$('#multi-slider').multiSlider({ autoPlay:true });
	
});

/*!
	* multiSlider v1.2.4
	* https://github.com/bMil21/ui-site/tree/master/components/multislider
	* Copyright (c) 2013 Brandon Miller
	* Dual licensed under the MIT and GPL licenses:
	* http://www.opensource.org/licenses/mit-license.php
	* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.multiSlider = function(options) {
		// Variables
		var $slider = $(this),
			$slidesWrap = $slider.find(".slides"),
			$slide = $slider.find(".slide"),
			slideLen = $slide.length,
			slideWidth, slideWrapWidth, moveTimer;
		var resizeTimer = setTimeout(function(){}, 0);
		// Defaults
		var defaults = {
			buildDirNav: true,
			autoPlay: false,
			delay: 5000,
			slidesVisible: 4,
			prevText: "&laquo;",
			nextText: "&raquo;",
			fixWidths: false
		};
		// Combine Defaults and Options into Settings
		var settings = $.extend({}, defaults, options);

		// Calculate Widths
		function calcWidths() {
			slideWrapWidth = 0;
			var sliderWidth = $slider.width(),
				indivSlideWidth = sliderWidth / settings.slidesVisible;
			$slide.each(function( index ) {
				if (settings.fixWidths) $(this).outerWidth(indivSlideWidth);
				slideWrapWidth += parseInt($(this).outerWidth(), 10);
			});
			$slidesWrap.width(slideWrapWidth + 100);
		}

		// Update Slider Global (bc slides are constantly changing position)
		function updateSlider() {
			$slidesWrap = $slider.find(".slides")
			$slide = $slider.find(".slide");
		}

		// Default Animation
		function moveNext() {
			if (! $slidesWrap.is(':animated')) {
				clearTimer();
				// Grab next .slide's width
				slideWidth = $slide.eq(0).width();
				// animate
				$slidesWrap.animate({"left": "-" + slideWidth + "px"}, function() {
					// remove/add and reset
					$slide.first().appendTo($slidesWrap);
					$slidesWrap.css({"left": 0});
					updateSlider();
				});
				// restart timer
				theTimer();
			}
		}

		// Directional NAV
		function theDirNav() {
			if (settings.buildDirNav) {
				// Add Navigation
				$slider.append('<div class="multi-dirnav"><span class="multi-dirlink prev">'+ settings.prevText +'</span> <span class="multi-dirlink next">'+ settings.nextText +'</span></div>');
				var $nextBtn = $slider.find(".next"),
					$prevBtn = $slider.find(".prev");
				// Next Button
				$nextBtn.on("click", function(){
					moveNext();
				});
				// Previous Button
				$prevBtn.on("click", function(){
					if (! $slidesWrap.is(':animated')) {
						clearTimer();
						// Grab last .slide's width
						slideWidthPrev = $slide.eq(slideLen-1).width();
						// remove/add and reset
						$slide.last().prependTo($slidesWrap);
						$slidesWrap.css({"left": "-" + slideWidthPrev + "px"});
						// animate
						$slidesWrap.animate({"left": 0});
						updateSlider();
						// restart timer
						theTimer();
					}
				});
			}
		}

		// Remove Hide
		function removeHide() {
			$slider.removeClass('hide');
		}

		// Autoplay / Delay
		function theTimer(){
			if (settings.autoPlay) {
				moveTimer = setTimeout(moveNext, settings.delay);
			}
		}
		function clearTimer(){
			if (settings.autoPlay) {
				clearTimeout(moveTimer);
			}
		}

		// Window Resize: recalc widths
		function resizeCall() {
			$(window).resize(function() {
				clearTimeout(resizeTimer);
				resizeTimer = setTimeout(function(){
					calcWidths();
				}, 200);
			});
		}

		// Init
		if (slideLen < (settings.slidesVisible + 1)) {
			$slidesWrap.css({"width": "auto"});
			$slider.addClass('below-min');
			removeHide();
			return;
		} else {
			calcWidths();
			theDirNav();
			removeHide();
			theTimer();
			resizeCall();
		}
	}
})(jQuery);