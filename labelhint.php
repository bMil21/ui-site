<?php 
// LABEL HINT Page

// page vars
$page_meta = array(
	"title" => "Label Hint | UI Site",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_labelhint",
	"site_section" => "sct_labelhint",
	"layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/labelhint/labelhint.css" />';
$scripts = '<script type="text/javascript" src="components/labelhint/labelhint.js"></script>';

include("includes/header.php");
?>
	<div class="wrap">
		<div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/labelhint" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">Label Hint</h1>

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