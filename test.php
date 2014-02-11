<?php 
// TEST Page

// page vars
$page_meta = array(
    "title" => "Test | UI Site",
    "keywords" => "",
    "description" => ""
);
$body_class = array(
    "page" => "pg_test",
    "site_section" => "sct_test",
    "layout" => ""
);
// load page styles/scripts
$css = '<link type="text/css" rel="stylesheet" href="" />';
$scripts = '<script type="text/javascript" src=""></script>';

include("includes/header.php");
?>
    <div class="wrap">
		<h1 class="sect-title">Test</h1>
		
		<!-- Disqus -->
		<div id="disqus_thread"></div>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'bmmdesign'; // required: replace example with your forum shortname
			
			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		<!-- END Disqus -->

    </div>
<?php 
include("includes/footer.php");
?>