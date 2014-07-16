/*!--- INIT ---*/
$(function(){
	
	// Init - File Input 
	$('.fileinput').fileInput();

});


/*!
	* fileInput
	* Copyright (c) 2013 Brandon Miller
	* Dual licensed under the MIT and GPL licenses:
	* http://www.opensource.org/licenses/mit-license.php
	* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.fileInput = function(options) {
		return this.each(function() {
			// Variables
			var $input = $(this),
				isIE = window.navigator.appName == 'Microsoft Internet Explorer';
					
			var plugin = {

				// Add Structure
				addStructure: function() {
					$input.after(function(){
						return '<div class="fileinput-wrap">' +
							'<div class="fileinput-btn">' +
								'<div class="fileinput-btnblock">' +
									'<span class="fileinput-btntxt">Select File</span>' +
								'</div>' +
							'</div>' +
							'<div class="fileinput-remove">&nbsp; &times &nbsp;</div>' +
							'<div class="fileinput-txtfield">' +
								'<span class="fileinput-filename"><span class="fi-icon"></span>&nbsp;<span class="fi-txt"></span></span>' +
							'</div>' +
						'</div>';
					});
					$input.appendTo($input.next().find(".fileinput-btnblock"));
					// Calls
					plugin.addFileName();
					plugin.removeFiles();
				},

				// Remove Files
				removeFiles: function() {
					$(".fileinput-remove").on("click", function(){
						var $this = $(this),
							$filenameTxt = $this.closest(".fileinput-wrap").find(".fi-txt"),
							$fileInput = $this.closest(".fileinput-wrap").find(".fileinput");
						$filenameTxt.html("");
						//ie8+ doesn't support changing the value of input with type=file so clone instead
						if (isIE) { 
						var inputClone = $fileInput.clone(true);
							$fileInput.after(inputClone);
							$fileInput.remove();
							$fileInput = inputClone;
						} else {
							$fileInput.val("");
						}
						$this.css({"display": "none"});
					});
				},

				// Add File Name
				addFileName: function() {
					$input.on("change", function(){
						var $this = $(this),
							uploadedFile = $this.val().replace(/^.+\\/, ''),
							$filenameTxt = $this.closest(".fileinput-wrap").find(".fi-txt"),
							$fileRemove = $this.closest(".fileinput-wrap").find(".fileinput-remove");
						$filenameTxt.html(uploadedFile);
						if ($this.val() !== "") {
							$fileRemove.css({"display": "table-cell"});
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