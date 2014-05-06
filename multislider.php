<?php 
// MULTI SLIDER Page

// page vars
$page_meta = array(
	"title" => "Multi-Slider | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_multislider",
	"site_section" => "sct_multislider",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/multislider/multislider.css" />';
$scripts = '<script type="text/javascript" src="components/multislider/multislider.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="components/multislider/multislider.zip" title="Download Files">Download Files</a></div> 
		<h1 class="sect-title">Multi-Slider</h1>

		<?php 
		include("components/multislider/multislider.php");
		?>

	</div>
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/multislider/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>