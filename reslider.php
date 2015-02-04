<?php 
// reSLIDER Page

// page vars
$page_meta = array(
	"title" => "reSlider | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_reslider",
	"site_section" => "sct_reslider",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/reslider/reslider.css" />';
$scripts = '<script type="text/javascript" src="components/reslider/reslider.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/reslider" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">reSlider</h1>

		<?php 
		include("components/reslider/reslider.php");
		?>

	</div>
	<!-- Plugin Settings -->
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/reslider/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>