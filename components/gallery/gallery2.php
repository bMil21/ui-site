<!-- Dynamic Gallery -->
<div id="dpdown">
	<p class="dpdown-btn">Select a Gallery <span class="icon"></span></p>
	<ul>
		<li><a href="gallery.php" title="Gallery1">Gallery1</a></li>
		<li><a class="current" href="gallery2.php" title="Gallery2">Gallery2</a></li>
		<li><a href="gallery3.php" title="Gallery3">Gallery3</a></li>
	</ul>
</div>
<div id="gallery-area">
	<?php 
	for ($i = 0; $i < 7; $i++) {
	?>
	<div class="col">
		<a class="modal-img" href="images/ph-large.png" title="View Photo" rel="gallery"><img src="images/ph-medium.png" width="230" height="230" alt="Placeholder"><span class="hvr"></span></a>
	</div>
	<?php 
	}
	?>
</div>
<!-- END Dynamic Gallery -->