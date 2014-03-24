// CALL AREA
$(function(){
	
	// Init - gMapHelper
	$('#google-map').gMapHelper({ 
		address: [
			{ 
				itemName: "Work",
				itemAddress: [40.075210, -75.288226] 
			}, 
			{ 
				itemName: "Home",
				itemAddress: [40.1211770, -75.4015760] 
			}, 
			{ 
				itemName: "Home Home",
				itemAddress: [39.817583, -76.981294] 
			}
		]
	});
	
});


/*!
* gMapHelper Advanced v2.0
* Copyright (c) 2013 Brandon Miller
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.gMapHelper = function(options) {
		// If no Map don't start
		if( $(this).length < 1 ) return;
		// Variables
		var mapEl = $(this)[0], //returns a HTML DOM Object (instead of jQuery Object)
			directionsService = new google.maps.DirectionsService(), 
			directionsDisplay = new google.maps.DirectionsRenderer(), 
			geocoder, myMapType, map, marker, map_options;
		// Defaults
		var defaults = {
			icon: "",
			scrollwheel: false,
			zoom: 14, 
			address: "",
			mapType: "roadmap"
		};
		// Combine Defaults and Options into Settings
		var settings = $.extend({}, defaults, options);
		
		var plugin = {
			
			// Geocoder (convert SINGLE address into Lat/Lng)
			myGeocoder: function() {
				//var coordinates = new google.maps.LatLng(41.895648, -87.676000);
				// new Geocoder Object
				geocoder = new google.maps.Geocoder();
				geocoder.geocode( { 'address': settings.address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
					  settings.address = results[0].geometry.location;
					  // Start Build if address located
					  plugin.buildMap();
					} else {
					  alert('Geocode was not successful for the following reason: ' + status);
					}
				});
			}, 
			
			// Determine Map Type
			mapType: function() {
				switch(settings.mapType){
					case "roadmap":
						myMapType = google.maps.MapTypeId.ROADMAP;
						break;
					case "satellite":
						myMapType = google.maps.MapTypeId.SATELLITE;
						break;
					case "hybrid":
						myMapType = google.maps.MapTypeId.HYBRID;
						break;
					case "terrain":
						myMapType = google.maps.MapTypeId.TERRAIN;
						break;
				}
				return myMapType;
			}, 
			
			// Build Map with Settings
			buildMap: function() {
				// Set Map Options
				var map_options = {
				  center: settings.address,
				  zoom: settings.zoom,
				  scrollwheel: settings.scrollwheel,
				  mapTypeId: plugin.mapType()
				}
				// New Map Object.. w/ element and options
				map = new google.maps.Map(mapEl, map_options);
				// New Marker Object
				marker = new google.maps.Marker({
					position: settings.address,
					map: map,
					title: 'Cleos Bar',
					icon: settings.icon
				});
				// Display Directions on Map
				directionsDisplay.setMap(map);
				// Display Directions List
				directionsDisplay.setPanel(document.getElementById('dir-panel'));
			}, 
			
			// Build Map with Settings
			buildMapMulti: function() {
				// Set Map Options
				var map_options = {
				  center: new google.maps.LatLng(-33.9, 151.2),
				  zoom: settings.zoom,
				  scrollwheel: settings.scrollwheel,
				  mapTypeId: plugin.mapType()
				}
				//create empty LatLngBounds object
				var bounds = new google.maps.LatLngBounds();
				// New Map Object.. w/ element and options
				map = new google.maps.Map(mapEl, map_options);
				// New Marker Object
				for (var i = 0; i < settings.address.length; i++) {
					var myLocation = settings.address[i].itemAddress,
						myLatLng = new google.maps.LatLng(myLocation[0], myLocation[1]);
					marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						title: 'Cleos Bar',
						icon: settings.icon
					});
					//extend the bounds to include each marker's position
					bounds.extend(marker.position);
				}
				map.fitBounds(bounds);
				// Display Directions on Map
				directionsDisplay.setMap(map);
				// Display Directions List
				directionsDisplay.setPanel(document.getElementById('dir-panel'));
			}, 
			
			// Door-to-Door (Single Address Only)
			calcRoute: function(){
				var start = document.getElementById('saddr').value, 
					end = settings.address;
				var request = {
					origin: start,
					destination: end,
					travelMode: google.maps.TravelMode.DRIVING
				};
				directionsService.route(request, function(response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						directionsDisplay.setDirections(response);
					}
				});
				// Remove initial custom icon, rebuild
				settings.icon = null;
				plugin.buildMap();
			}, 
			
			// Start it all
			init: function() {
				if (typeof settings.address === "string") {
					console.log("String!");
					plugin.myGeocoder();
				} else if (typeof settings.address === "object") {
					console.log("Object/Array");
					plugin.buildMapMulti();
				} else {
					alert("Use an address (string) or an array of Lat/Lng");
				}
				// Call Door-to-Door
				$("#get-dir").on("click", function() {
					plugin.calcRoute();
				});
			}
		
		}
		
		// Initialize Plugin when everything is Loaded
		google.maps.event.addDomListener(window, 'load', plugin.init);
	}
})(jQuery);