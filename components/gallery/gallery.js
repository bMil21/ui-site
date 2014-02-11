// CALL AREA
$(function(){
		
	// Init - Dynamic Gallery
	dynamicGallery();
	
});

// PLUGIN AREA

/*!
	* Dynamic Gallery
	* by Brandon Miller
*/
function dynamicGallery() {
	// Dropdown Menu
	var $dpdown = $("#dpdown"),
		$dpdownUl = $("#dpdown ul"),
		$dpdownLinks = $("#dpdown a"),
		$galleryArea = $("#gallery-area");
	$(".dpdown-btn, #dpdown a").on("click", function() {
		$dpdown.toggleClass("active");
		if ($dpdown.hasClass("active")) {
			$dpdownUl.slideDown("fast");
		} else {
			$dpdownUl.slideUp("fast");
		}
	});
	// Load Gallery via Ajax
	$("#dpdown a").on("click", function() {
		var newGallery = $(this).attr("href");
		$dpdownLinks.removeClass("current");
		$(this).addClass("current");
		$galleryArea.addClass("loading");
		$.get(newGallery, function(data) {
			var grabbedPhotos = $(data).find('#gallery-area').html();
			$galleryArea.html(grabbedPhotos);
			$('a.modal-img').colorbox({opacity:0.8});
			$galleryArea.removeClass("loading");
		}).fail(function() {
			$("#gallery-area").prepend("<p><em>Nothing was retrieved. Please select another Gallery.</em></p>");
			$galleryArea.removeClass("loading");
		});
		return false;
	});
}