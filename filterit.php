<?php 
// FILTER IT Page

// page vars
$page_meta = array(
    "title" => "Filter It | UI Site",
    "keywords" => "",
    "description" => ""
);
$body_class = array(
    "page" => "pg_filterit",
    "site_section" => "sct_filterit",
    "layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/filterit/filterit.css" />';
$scripts = '<script type="text/javascript" src="components/filterit/filterit.js"></script>';

include("includes/header.php");
?>
    <div class="wrap">
        <div class="zip"><a href="https://github.com/bMil21/ui-site/tree/master/components/filterit" title="Download Files" target="_blank">Download Files</a></div> 
		<h1 class="sect-title">Filter It</h1>

		<?php 
		include("components/filterit/filterit.php");
		?>

    </div>
    <!-- Plugin Settings -->
    <div class="settings-area">
        <div class="wrap clearfix">
            <?php 
            // include("settings/filterit/index.php");
            ?>
        </div>
    </div>
<?php 
include("includes/footer.php");
?>