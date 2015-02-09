<?php 
// LABEL HINT Page

// page vars
$page_meta = array(
	"title" => "Form Fields | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_reslider",
	"site_section" => "sct_reslider",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/labelhint/labelhint.css" />';
$scripts = '<script type="text/javascript" src="components/labelhint/labelhint.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/labelhint" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">Form Fields</h1>

		<?php 
		include("components/labelhint/labelhint.php");
		?>

	</div>
	<!-- Plugin Settings -->
	<div class="settings-area">
		<div class="wrap clearfix">
			<?php 
			include("settings/labelhint/index.php");
			?>
		</div>
	</div>
<?php 
include("includes/footer.php");
?>