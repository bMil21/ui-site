			<!-- Overview -->
			<section class="sett-overview sett-sect">
				<h2 class="settings-title">Overview</h2>
				<p>This is your general tabs plugin, but it also has support for when a user is coming from another page on the site or an external link.</p>
			</section>

			<!-- Usage -->
			<section class="sett-usage sett-sect">
				<h2 class="settings-title">HTML</h2>
				<pre class="mycode"><code>
&lt;section id="tabs1" class="tabs-area"&gt;
	&lt;nav class="tabs-nav"&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href="#sct-tab1" title="Tab 1"&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#sct-tab2" title="Tab 2"&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/nav&gt;
	&lt;div class="tabs-content"&gt;
		&lt;article id="sct-tab1" class="tab-sct"&gt;
			&lt;p&gt;INSERT CONTENT&lt;/p&gt;
		&lt;/article&gt;
		&lt;article id="sct-tab2" class="tab-sct"&gt;
			&lt;p&gt;INSERT CONTENT&lt;/p&gt;
		&lt;/article&gt;
	&lt;/div&gt;
&lt;/section&gt;
				</code></pre>
			</section>

			<!-- CSS -->
			<section class="sett-css sett-sect">
				<h2 class="settings-title">Default CSS</h2>
				<pre class="mycode"><code>
.tabs-area{}
	.tabs-nav{text-align:center; margin:0 0 30px 0;}
		.tabs-nav li{display: inline-block; padding:0 15px;}
		.tabs-nav a{display: block;}
	.tabs-content{}
	.js .tabs-content{overflow: hidden; height:0; position: relative;}
		.js .tab-sct{position: absolute; top:0; left:0; width:100%;} 
				</code></pre>
			</section>

			<!-- jQuery & plugin -->
			<section class="sett-plugin sett-sect">
				<h2 class="settings-title">Add jQuery &amp; Plugin</h2>
				<pre class="mycode"><code>
&lt;script src=&quot;js/libs/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/tabs.js&quot;&gt;&lt;/script&gt;
				</code></pre>
			</section>

			<!-- Init -->
			<section class="sett-init sett-sect">
				<h2 class="settings-title">Initialize Plugin</h2>
				<pre class="mycode"><code>
$(function(){
	
	// Init - File Input 
	$('#tabs1').myTabs();
	
});
				</code></pre>
			</section>	