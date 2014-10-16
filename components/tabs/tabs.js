/* Insert JS */
$(function(){

	// Init - Tabs
	$("#tabs1").myTabs();

});

/*!
	* myTabs
	* Copyright (c) 2014 Brandon Miller
	* Dual licensed under the MIT and GPL licenses:
	* http://www.opensource.org/licenses/mit-license.php
	* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.myTabs = function(options) {
		// allows for chaining
		return this.each(function() {
			// Variables
			var $wrap = $(this),
				$tabsNav = $wrap.find(".tabs-nav"),
				$tabsLi = $tabsNav.find("li"),
				$tabsLink = $tabsNav.find("a"),
				$tabsContent = $wrap.find(".tabs-content"),
				$tabSct = $wrap.find(".tab-sct"),
				tabSctLen = $tabSct.length,
				$tabsTrigger = $('.tab-trigger'),
				count = 0,
				animating = false,
				shown = false,
				resizeTimer;
			// Defaults
			var defaults = {
				optionName: "value"
			};
			// Combine Defaults and Options into Settings
			var settings = $.extend({}, defaults, options);

			// Determine Current
			var hash = window.location.hash,
				$hash = $(hash);
			if (hash === '' || hash === null || hash === undefined) {
				$tabsLi.eq(0).addClass('current');
				$tabSct.eq(0).addClass('current');
			} else { // tab selected from previous page
				if ($wrap.find(hash).hasClass('tab-sct')) {
					$(".tabs-nav a[href='" + hash + "']").parent().addClass('current');
					$hash.addClass('current');
				} else {
					$tabsLi.eq(0).addClass('current');
					$tabSct.eq(0).addClass('current');
				}
			}
			var $curSct = $(".tab-sct.current");
					
			var plugin = {

				// Show Current
				showCurrent: function() {
					$tabSct.hide();
					$curSct.css('display', 'block');
					setTimeout(function(){
						$tabsContent.animate({
							'height': $curSct.data("height") + "px"
						}, 'slow');
					}, 300);
					shown = true;
				},

				// Resize Heights
				resizeHeights: function() {
					$tabsContent.css({
						'height': $wrap.find(".tab-sct.current").data("height") + "px"
					});
				},

				// Cache Heights
				cacheHeights: function() {
					$wrap.find('.tab-sct').each(function(){
						count++
						var $this = $(this);
						$this.css('height', ''); // calibrate height for resize
						var setH = $this.height();
						$this.data("height", setH);
						// All items cached
						if (count === tabSctLen) {
							if (shown) {
								plugin.resizeHeights();
							} else {
								plugin.showCurrent();
							}
						}
					});
				},

				// Tab Link Click
				tabClick: function() {
					$tabsLink.on("click", function(e){
						e.preventDefault();
						if (!$(this).parent().hasClass("current")) {
							if (animating === false) {
								animating = true;
								var $this = $(this),
									$newLi = $this.parent(),
									tabId = $this.attr("href"),
									$tabId = $(tabId);
								$tabsLink.parent().removeClass("current");
								$wrap.find(".tab-sct.current").fadeOut("fast", function(){
									$tabId.fadeIn("fast", function(){
										$tabsContent.animate({
											height: $tabId.data("height") + "px"
										}, function(){
											$tabSct.removeClass("current");
											$tabId.addClass("current");
											animating = false;
										});
									});
								});
								$newLi.addClass("current");
							}
						}
					});
				},

				// Tab Trigger
				tabTrigger: function() {
					$tabsTrigger.on("click", function(e){
						e.preventDefault();
						var $this = $(this),
							tabId = $this.attr("href"),
							tabArray = tabId.split('#'),
							tabHash = '#' + tabArray[1];
						// Jump Link Animation
						$('html, body').animate({
							scrollTop : $tabsNav.offset().top - 20
						}, function(){
							$(".tabs-nav a[href='" + tabHash + "']").trigger('click');
							window.location.hash = tabHash;
						});
					});
				},

				// Plugin functions to initialize
				init: function() {
					plugin.tabClick();
					if ($('.tabs-area').length > 0) {
						plugin.tabTrigger();
					}
					// Components Loaded.. cache heights
					$(window).load(function(){
						plugin.cacheHeights();
					});
					// Window Resize: adjust/show heights
					$(window).resize(function(){
						clearTimeout(resizeTimer);
						count = 0;
						resizeTimer = setTimeout(plugin.cacheHeights, 200);
					});
				}
				
			};
			// START IT ALL
			plugin.init();
		});
	}
})(jQuery);