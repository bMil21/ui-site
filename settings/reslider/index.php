			<!-- Usage -->
			<section class="sett-usage sett-sect">
				<h2 class="settings-title">HTML</h2>
				<pre class="mycode"><code>
&lt;!-- reSlider --&gt;
&lt;section id=&quot;slider1&quot; class=&quot;reslider-wrap&quot;&gt;
	&lt;ul class=&quot;reslider&quot;&gt;
		&lt;li&gt;INSERT CONTENT&lt;/li&gt;
		&lt;li&gt;INSERT CONTENT&lt;/li&gt;
		&lt;li&gt;INSERT CONTENT&lt;/li&gt;
	&lt;/ul&gt;
&lt;/section&gt;
&lt;!-- END reSlider --&gt;
				</code></pre>
			</section>

			<!-- CSS -->
			<section class="sett-css sett-sect">
				<h2 class="settings-title">Default CSS</h2>
				<pre class="mycode"><code>
/*------- reSLIDER -------*/
.reslider-wrap{width:100%;margin:0 0 20px 0;position:relative;clear:both;}
.reslider-inner{width:100%;overflow:hidden;}
.reslider{width:100%;position:relative;margin:0;padding:0;overflow:hidden;}
.reslider > li{float:left;width:100%;position:relative;margin:0 -100% 0 0;z-index:0;list-style:none;background:#E9F18B;/*boxsize*/-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.reslider li.current{z-index:10;}
.reslider li.next{z-index:9;}
/* In-BG Slider */
.reslider-wrap.rs-inbg{position:absolute;left:0;top:0;z-index:0;} /* make sure other elements have higher z-indexes */
/* Bullet Nav */
.reslider-nav{text-align:center;margin:10px 0;}
.reslider-nav .bullet-link{display:inline-block;padding:8px 14px;margin:0 5px;background-color:#5eb8e2;color:#fff;cursor:pointer;}
/* Directional Nav */
.dir-nav{text-align:center;margin:0;}
.dir-nav .dir-link{display:inline-block;padding:8px 14px;margin:0;background:#5eb8e2;color:#fff;cursor:pointer;position:absolute;top:40%;left:0;z-index:20;}
.dir-nav .next{left:auto;right:0;}
/* Thumb Nav */
.thumb-nav{text-align:center;margin:10px 0;}
.thumb-nav .thumb-link{display:inline-block;margin:0 10px;cursor:pointer;}
/* Slide Anim */
.reslider-wrap.rs-slide li{margin:0;}

/*--- User Styles ---*/
.reslider > li{box-shadow:inset 0 0 0 5px #E0E781;}
.reslider li h2{text-align:center;font-size:32px;height:300px;line-height:300px;}
.dir-nav .dir-link:hover{background:#000;}
.reslider-nav .bullet-link:hover, .reslider-nav .current{background-color:#000;color:#fff;}
.thumb-link.current{opacity:.5;}
				</code></pre>
			</section>

			<!-- jQuery & plugin -->
			<section class="sett-plugin sett-sect">
				<h2 class="settings-title">Add jQuery &amp; Plugin</h2>
				<pre class="mycode"><code>
&lt;script src=&quot;js/libs/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/reslider.js&quot;&gt;&lt;/script&gt;
				</code></pre>
			</section>

			<!-- Init -->
			<section class="sett-init sett-sect">
				<h2 class="settings-title">Initialize Plugin</h2>
				<pre class="mycode"><code>
$(function(){
	
	// Init - reSlider
	$('#slider1').reSlider();
	
});
				</code></pre>
			</section>

			<!-- Options -->
			<section class="sett-options sett-sect">
				<h2 class="settings-title">Options</h2>
				<pre class="mycode"><code>
$('#slider1').reSlider({
	// Defaults
	speed: 500,		// Integer: Animation Time
	delay: 9000,		// Integer: Time in between Slides
	animation: "fade",	// String: Animation type. Options: "fade", "slide", "carousel"
	buildBulletNav: true,	// Boolean: Build Bullet Navigation
	buildDirNav: true,	// Boolean: Build Arrow Navigation
	buildThumbNav: false	// Boolean: Build Image Navigation
	autoPlay: true		// Boolean: Have slider automatically start or not
});
				</code></pre>
			</section>