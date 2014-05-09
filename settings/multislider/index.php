			<!-- Usage -->
			<section class="sett-usage sett-sect">
				<h2 class="settings-title">HTML</h2>
				<pre class="mycode"><code>
&lt;div id=&quot;multi-slider&quot; class=&quot;multi-slider&quot;&gt;
	&lt;div class=&quot;multi-inner&quot;&gt;
		&lt;ul class=&quot;slides&quot;&gt;
			&lt;li class=&quot;slide&quot;&gt;INSERT CONTENT&lt;/li&gt;
			&lt;li class=&quot;slide&quot;&gt;INSERT CONTENT&lt;/li&gt;
			&lt;li class=&quot;slide&quot;&gt;INSERT CONTENT&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</section>

			<!-- CSS -->
			<section class="sett-css sett-sect">
				<h2 class="settings-title">Default CSS</h2>
				<pre class="mycode"><code>
/*-- multiSlider --*/
.multi-slider{position:relative;max-width:100%;}
.multi-inner{overflow:hidden;}
.multi-slider .slides{overflow:hidden;padding:0;margin:0 auto;position:relative;width:1000%;}
.multi-slider.not-enough .slides{width:auto;}
.multi-slider .slides > li{display:block;float:left;}
.multi-slider .slides img{max-width:100%;height:auto;}
.multi-slider .multi-dirnav{text-align:center;margin:0;}
.multi-slider .multi-dirlink{display:inline-block;width:30px;height:30px;line-height:30px;background:#5eb8e2;color:#fff;cursor:pointer;position:absolute;top:40%;right:100%;z-index:20;}
.multi-slider .next{left:100%;right:auto;}

/* User */
.multi-slider{width:1000px;margin:0 auto;}
.multi-slider .slides > li{width:250px;text-align:center;}

@media screen and (max-width : 1060px) {
	.multi-slider{width:750px;
}
@media screen and (max-width : 810px) {
	.multi-slider{width:500px;}
}
@media screen and (max-width : 560px) {
	.multi-slider{width:250px;}
}
				</code></pre>
			</section>

			<!-- jQuery & plugin -->
			<section class="sett-plugin sett-sect">
				<h2 class="settings-title">Add jQuery &amp; Plugin</h2>
				<pre class="mycode"><code>
&lt;script src=&quot;js/libs/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/multislider.js&quot;&gt;&lt;/script&gt;
				</code></pre>
			</section>

			<!-- Init -->
			<section class="sett-init sett-sect">
				<h2 class="settings-title">Initialize Plugin</h2>
				<pre class="mycode"><code>
$(function(){
	
	// Init - multiSlider
	$('#multi-slider').multiSlider();
	
});
				</code></pre>
			</section>

			<!-- Options -->
			<section class="sett-options sett-sect">
				<h2 class="settings-title">Options</h2>
				<pre class="mycode"><code>
$('#multi-slider').multiSlider({
	// Defaults
	buildDirNav: true,	// Boolean: Build Arrow Navigation
	autoPlay: false,	// Boolean: Have slider automatically start or not
	delay: 5000,		// Integer: Time in between Slides
	minSlides: 4		// Integer: Minimum number of slides to start slider
});
				</code></pre>
			</section>