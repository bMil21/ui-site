<?php 
// Tabs Page

// page vars
$page_meta = array(
	"title" => "Tabs | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_tabs",
	"site_section" => "sct_tabs",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/tabs/tabs.css" />';
$scripts = '<script type="text/javascript" src="components/tabs/tabs.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/tabs" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">Tabs</h1>

		<?php 
		include("components/tabs/tabs.php");
		?>

	</div>
	<!-- Plugin Settings -->
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/tabs/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>