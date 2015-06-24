<!-- Google Map -->
<div id="google-map" class="gmap"></div>
<label for="saddr">Enter in <span class="red">your address</span> to get door-to-door directions.</label>
<p class="inline-submit clearfix">
	<input type="text" name="saddr" id="saddr" value="" placeholder="12 Main St, City, State">
	<input id="get-dir" class="submit" type="submit" value="GO">
</p>
<div id="dir-panel"></div>
<!-- END Google Map -->

<br>
<hr>
<br>

<!-- Google Map -->
<h2 class="sect-title">Google Map Helper - Multiple Locations</h2>
<div id="google-map-adv" class="gmap"></div>
<!-- Send User to Google Maps, or open up App -->
<form action="//maps.google.com/maps" method="get" target="new">
	<input type="hidden" name="daddr" value="INSERT_ADDRESS_OF_LOCATION">
	<input type="hidden" name="hl" value="en">
	<p class="inline-submit clearfix">
		<input type="text" name="saddr2" id="saddr2" style="width:360px;margin-right:20px;" value="" placeholder="e.g. 123 Main St., City, State">
		<input class="submit" type="submit" value="Get Directions">
	</p>
</form>
<!-- END Google Map -->

<!-- GOOGLE MAPS API - (include in footer of specific page) -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>