<?php 
// CUSTOM CHECKBOX Page

// page vars
$page_meta = array(
	"title" => "Custom Checkbox | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_chbx",
	"site_section" => "sct_chbx",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/chbx/chbx.css" />';
$scripts = '<script type="text/javascript" src="components/chbx/chbx.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/chbx" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">Custom Checkbox</h1>

		<?php 
		include("components/chbx/chbx.php");
		?>

	</div>
	<!-- Plugin Settings -->
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/chbx/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>