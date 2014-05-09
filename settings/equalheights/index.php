			<!-- Overview -->
			<section class="sett-overview sett-sect">
				<h2 class="settings-title">Overview</h2>
				<p>The Equal Heights plugin makes elements of the same row, the same height. It is also responsive compatible.</p>
			</section>

			<!-- Usage -->
			<section class="sett-usage sett-sect">
				<h2 class="settings-title">HTML</h2>
				<pre class="mycode"><code>
&lt;section class=&quot;eqh-wrap&quot;&gt;
	&lt;article class=&quot;eqh&quot;&gt;Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet.&lt;/article&gt;
&lt;/section&gt;
				</code></pre>
			</section>

			<!-- CSS -->
			<section class="sett-css sett-sect">
				<h2 class="settings-title">Default CSS</h2>
				<pre class="mycode"><code>
.eqh {float:left; width:23%; margin:10px 1%; padding:30px 3%; background:#E9F18B; box-shadow:inset 0 0 0 5px #E0E781;}
				</code></pre>
			</section>

			<!-- jQuery & plugin -->
			<section class="sett-plugin sett-sect">
				<h2 class="settings-title">Add jQuery &amp; Plugin</h2>
				<pre class="mycode"><code>
&lt;script src=&quot;js/libs/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/equalheights.js&quot;&gt;&lt;/script&gt;
				</code></pre>
			</section>

			<!-- Init -->
			<section class="sett-init sett-sect">
				<h2 class="settings-title">Initialize Plugin</h2>
				<pre class="mycode"><code>
$(function(){
	
	// Init - eqHeights
	$('.eqh-wrap').eqHeights();
	
});
				</code></pre>
			</section>	