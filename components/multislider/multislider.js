// CALL AREA
$(function(){
	
	// Init - multiSlider
	$('#multi-slider').multiSlider({ autoPlay:true });
	
});

/*!
* multiSlider v1.0.6
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
		// Defaults
		var defaults = {
			buildDirNav: true,
			autoPlay: false,
			delay: 5000,
			minSlides: 4
		};
		// Combine Defaults and Options into Settings
		var settings = $.extend({}, defaults, options);

		// Calculate Widths
		function calcWidths() {
			slideWidth = $slide.outerWidth();
			var slideWrapWidth = 0;
			$slide.each(function( index ) {
				slideWrapWidth += parseInt($(this).width(), 10);
			});
			$slidesWrap.width(slideWrapWidth);
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
				$slider.append('<div class="multi-dirnav"><span class="multi-dirlink prev">&laquo;</span> <span class="multi-dirlink next">&raquo;</span></div>');
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
						// remove/add and reset
						$slide.last().prependTo($slidesWrap);
						$slidesWrap.css({"left": "-" + slideWidth + "px"});
						// animate
						$slidesWrap.animate({"left": 0});
						updateSlider();
						// restart timer
						theTimer();
					}
				});
			}
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
				calcWidths();
			});
		}

		// Init
		calcWidths();
		if (slideLen < settings.minSlides) {
			return;
		} else {
			theDirNav();
			theTimer();
			resizeCall();
		}
	}
})(jQuery);