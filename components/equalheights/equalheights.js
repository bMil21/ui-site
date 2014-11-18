// CALL AREA
$(function(){
	
	// Init - eqHeights
	$('.eqh-wrap').eqHeights({});
	
});

/*!
* eqHeights v1.1
* Author: Brandon Miller 2014
* Inspired by: http://css-tricks.com/equal-height-blocks-in-rows/
**/
(function($){
	$.fn.eqHeights = function(options) {
		return this.each(function() {
			// Variables
			var $wrap = $(this),
				$blocks = $wrap.find(".eqh"),
				$window = $(window),
				currentTallest = 0,
				currentRowStart = 0,
				rowDivs = [],
				topPosition = 0;
			// Defaults
			var defaults = {
				optionName: "valueName"
			};
			// Combine Defaults and Options into Settings
			var settings = $.extend({}, defaults, options);
					
			var plugin = {
				
				// Block Loop
				blockLoop: function() { 
					$blocks.each(function() {
						// Vars
						$el = $(this);
						$($el).height('auto');
						topPostion = $el.position().top;
						// if NOT Top or.. is a New Row
						if (currentRowStart != topPostion) {
							// Set tallest height for all blocks in array
							for (var i = 0 ; i < rowDivs.length ; i++) {
								rowDivs[i].height(currentTallest);
							}
							rowDivs.length = 0; // empty the array
							currentRowStart = topPostion; // first block in new row is new starting point
							currentTallest = $el.height(); // set current block as new tallest
							rowDivs.push($el); // Add current Block to just emptied array
						} else {
							// Blocks in the same row
							// Add current Block to array
							rowDivs.push($el);
							// Compare Block height with Current Tallest.. Set the Tallest
							currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
						}
						// Set tallest height for all blocks in array
						for (var i = 0 ; i < rowDivs.length ; i++) {
							rowDivs[i].height(currentTallest);
						}
					});
				},

				// Items to Start
				init: function(){
					$(document).ready(function(){
						plugin.blockLoop();
					});
					// Start once everything is loaded
					$window.load(function() {
						plugin.blockLoop();
					});
					// Restart when browser is resized
					$window.resize(function(){
						plugin.blockLoop();
					});
				}

			};
			// START IT ALL
			plugin.init();
		});
	}
})(jQuery);
