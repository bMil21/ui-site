<?php 
// GOOGLE MAP HELPER Page

// page vars
$page_meta = array(
    "title" => "Google Map Helper | UI Site",
    "keywords" => "",
    "description" => ""
);
$body_class = array(
    "page" => "pg_googlemap",
    "site_section" => "sct_googlemap",
    "layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/googlemap/googlemap.css" />';
$scripts = '<script type="text/javascript" src="components/googlemap/googlemap.min.js"></script>';

include("includes/header.php");
?>
    <div class="wrap clearfix">
		<div class="zip"><a href="components/googlemap/googlemap.zip" title="Download Files">Download Files</a></div> 
		<h1 class="sect-title">Google Map Helper</h1>

		<?php 
		include("components/googlemap/googlemap.php");
		?>

    </div>
<?php 
include("includes/footer.php");
?>