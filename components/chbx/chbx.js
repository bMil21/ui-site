$(function(){

	// Init - Custom Checkbox
	$('.custom-chbx').customChbx();

});

/*!
	* Custom Checkbox v0.1
	* Copyright (c) 2014 Brandon Miller
	* Dual licensed under the MIT and GPL licenses:
	* http://www.opensource.org/licenses/mit-license.php
	* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.customChbx = function(options) {
		return this.each(function() {
			// Variables
			var $input = $(this);

			// Defaults
			var defaults = {
				offTxt: $input.attr("data-chbx-offtxt") || "",
				onTxt: $input.attr("data-chbx-ontxt") || ""
			};
			// Combine Defaults and Options into Settings
			var settings = $.extend({}, defaults, options);

			var plugin = {

				// Add Structure
				addStructure: function() {
					$input.after(function(){
						return '<div class="chbx-wrap">' +
							'<div class="chbx-btn">' +
								'<span class="chbx-icon"></span><span class="chbx-txt">' + settings.offTxt + '</span>' +
							'</div>' +
						'</div>';
					});
					$input.appendTo($input.next());
					// Calls
					plugin.startingState();
					plugin.changeState();
				},

				// Starting State
				startingState: function() {
					if ($input.prop('checked')) {
						$input.parent().addClass("on").find(".chbx-txt").html(settings.onTxt);
					}
				},

				// Change State
				changeState: function() {
					$input.on("change", function(){
						var $this = $(this);
						if ($this.prop('checked')) { // if checked already
							$this.parent().addClass("on").find(".chbx-txt").html(settings.onTxt);
						} else { // if not checked
							$this.parent().removeClass("on").find(".chbx-txt").html(settings.offTxt);
						}
					});
				},

				// Initialize Main Code
				init: function() {
					plugin.addStructure();
				}

			};
			// START IT ALL
			plugin.init();
		});
	}
})(jQuery);