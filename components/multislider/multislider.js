// CALL AREA
$(function(){
	
	// Multi-Slider
	(function(){
		// Variables
		var $nextBtn = $(".multi-slider .next"),
			$prevBtn = $(".multi-slider .prev"),
			$slidesWrap = $(".multi-slider .slides"),
			slideLen = $(".multi-slider .slide").length,
			slideWrapWidth = slideLen + "00%",
			slideWidth = $(".multi-slider .slide").width() + 20; // <li> width + margining
		// Set UL width
		$slidesWrap.width(slideWrapWidth);
		// Next Button
		$nextBtn.on("click", function(){
			// animate
			$slidesWrap.animate({"left": "-" + slideWidth + "px"}, function() {
				// remove/add and reset
				$(".multi-slider .slide").first().appendTo(".slides");
				$(this).css({"left": 0});
			});
		});
		// Previous Button
		$prevBtn.on("click", function(){
			// remove/add and reset
			$(".multi-slider .slide").last().prependTo(".slides");
			$slidesWrap.css({"left": "-" + slideWidth + "px"});
			// animate
			$slidesWrap.animate({"left": 0});
		});
	})();
	
});