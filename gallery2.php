<?php 
// GALLERY Page

// page vars
$page_meta = array(
    "title" => "Gallery2 | UI Site",
    "keywords" => "",
    "description" => ""
);
$body_class = array(
    "page" => "pg_gallery2",
    "site_section" => "sct_gallery",
    "layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="components/gallery/gallery.css" />';
$scripts = '<script type="text/javascript" src="js/gallery.js"></script>';


include("includes/header.php");
?>
    <div class="wrap">
		<div class="zip"><a href="components/gallery/gallery.zip" title="Download Files">Download Files</a></div> 
		<h1 class="sect-title">Dynamic Gallery</h1>

        <?php 
		 include("components/gallery/gallery2.php");
		 ?> 

    </div>
<?php 
include("includes/footer.php");
?>