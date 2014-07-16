<?php 
// File Input Page

// page vars
$page_meta = array(
	"title" => "File Input | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_fileinput",
	"site_section" => "sct_fileinput",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/fileinput/fileinput.css" />';
$scripts = '<script type="text/javascript" src="components/fileinput/fileinput.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/fileinput" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">File Input</h1>

		<?php 
		include("components/fileinput/fileinput.php");
		?>

	</div>
	<!-- Plugin Settings -->
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/fileinput/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>