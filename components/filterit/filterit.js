// jQuery Call Area
$(function(){

	// Init - filterIt
	$("#filterit").filterIt();

});


/*!
* filterIt v0.2
* Copyright (c) 2013 Brandon Miller
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.filterIt = function(options) {
		// Vars
		var $container = $(this),
			$filterBtn = $(".filter"),
			$filterItem = $(".filter-item"),
			fItemWidth = $filterItem.eq(0).width(),
			fItemHeight = $filterItem.eq(0).height();

		// Initial Setup
		$filterItem.addClass("all active");

		// Transition Support
		function getSupportedTransition() {
			var prefixes = 'transition WebkitTransition MozTransition OTransition msTransition'.split(' ');
			for(var i = 0; i < prefixes.length; i++) {
				if(document.createElement('div').style[prefixes[i]] !== undefined) {
					return prefixes[i];
				}
			}
			return false;
		}

		// CSS Tranforms, Transitions
		if (getSupportedTransition()) {
			$filterBtn.on("click", function(){
				if ($(this).hasClass("active")) return;
				var $curBtn = $(this), 
					cat = $curBtn.data("filter"),
					$category = $container.find(cat),
					$active = $(".filter-item.active");
					//$notCategory = $container.find($filterItem).not(cat);

				// Button - Active State
				$filterBtn.removeClass("active");
				$curBtn.addClass("active");

				// Animate OUT
				$active.removeClass("active").addClass("not-active");
				// Add delay to wait for transition to complete (going from active to not)
				setTimeout(function(){ 
					$active.css({
						"width": "0px",
						"height": "0px"
					});
					// Animate IN
					$category.css({
						width: fItemWidth + "px",
						height: fItemHeight + "px"
					});
					$category.addClass("active").removeClass("not-active");
				}, 500);
			});
		}

		// jQuery Show/Hide Fallback
		if (!getSupportedTransition()) {
			$filterBtn.on("click", function(){
				var $curBtn = $(this), 
					cat = $curBtn.data("filter");
				$filterBtn.removeClass("active");
				$curBtn.addClass("active");
				$container.find(cat).css({"display": "block"});
				$container.find($filterItem).not(cat).css({"display": "none"});
			});
		}
	}
})(jQuery);