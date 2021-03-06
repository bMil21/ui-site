<?php 
// HOME Page

// page vars
$page_meta = array(
	"title" => "Home",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_home",
	"site_section" => "sct_home",
	"layout" => ""
);
// load page styles/scripts
$css = '';
$scripts = '';

include("includes/header.php");
?>
	<div class="wrap clearfix">
		
		<!-- CTAs -->
		<h1 class="sect-title">Select a UI Feature</h1>
		<div class="col-wrap clearfix">
			<div class="cta-col"><a class="cta" href="reslider.php" title="View Plugin"><span>reSlider</span></a></div>
			<div class="cta-col"><a class="cta" href="gallery.php" title="View Plugin"><span>Gallery</span></a></div>
			<div class="cta-col"><a class="cta" href="multislider.php" title="View Plugin"><span>Multi-Slider</span></a></div>
			<div class="cta-col"><a class="cta" href="googlemap.php" title="View Plugin"><span>Google Map Helper</span></a></div>
			<div class="cta-col"><a class="cta" href="equalheights.php" title="View Plugin"><span>Equal Heights</span></a></div>
			<div class="cta-col"><a class="cta" href="filterit.php" title="View Plugin"><span>Filter It</span></a></div>
			<div class="cta-col"><a class="cta" href="fileinput.php" title="View Plugin"><span>File Input</span></a></div>
			<div class="cta-col"><a class="cta" href="tabs.php" title="View Plugin"><span>Tabs</span></a></div>
			<div class="cta-col"><a class="cta" href="forms.php" title="View Plugin"><span>Form Fields</span></a></div>
			<div class="cta-col"><a class="cta" href="labelhint.php" title="View Plugin"><span>Label Hint</span></a></div>
			<div class="cta-col"><a class="cta" href="chbx.php" title="View Plugin"><span>Checkbox</span></a></div>
		</div>

	</div>
<?php 
include("includes/footer.php");
?>