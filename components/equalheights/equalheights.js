// CALL AREA
$(function(){
	
	// Init - eqHeights
	$(window).on('load', function(){
		$('.eqh-wrap').eqHeights({});
	});

	// Reload eqHeights
	// (outside of plugin)
	$('button').on('click', function(){
		var $wrap = $('.unique_name_of_eqh_wrap');
		$wrap.eqHeights.forceReload($wrap);
	});
	
});

/*!
	* eqHeights v2.0
	* Author: Brandon Miller 2014
	* Inspired by: http://css-tricks.com/equal-height-blocks-in-rows/
*/
(function($){
	$.fn.eqHeights = function(options) {
		// this changes for each el / intialization
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

				// Update Vars
				updateVars: function($newEl){
					$wrap = $newEl;
					$blocks = $wrap.find(".eqh");
					$window = $(window);
					currentTallest = 0;
					currentRowStart = 0;
					rowDivs = [];
					topPosition = 0;
				},

				// Items to Start
				init: function(){
					// Start 
					plugin.blockLoop();
					// Restart when browser is resized
					$window.resize(function(){
						plugin.blockLoop();
					});
				}

			};
			// START IT ALL
			plugin.init();

			// PUBLIC METHODS
			$.fn.eqHeights.forceReload = function($newEl) {
				plugin.updateVars($newEl);
				plugin.blockLoop();
			};
		});
	}
})(jQuery);
