<?php 
// EQUAL HEIGHTS Page

// page vars
$page_meta = array(
	"title" => "Equal Heights | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_equalheights",
	"site_section" => "sct_equalheights",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/equalheights/equalheights.css" />';
$scripts = '<script type="text/javascript" src="components/equalheights/equalheights.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="components/equalheights/equalheights.zip" title="Download Files">Download Files</a></div> 
		<h1 class="sect-title">Equal Heights</h1>

		<?php 
		include("components/equalheights/equalheights.php");
		?>

	</div>
	<!-- Plugin Settings -->
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/equalheights/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>