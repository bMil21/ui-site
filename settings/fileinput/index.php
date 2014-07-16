			<!-- Overview -->
			<section class="sett-overview sett-sect">
				<h2 class="settings-title">Overview</h2>
				<p>The File Input plugin creates a more uniform and asthetically pleasing upload field.</p>
			</section>

			<!-- Usage -->
			<section class="sett-usage sett-sect">
				<h2 class="settings-title">HTML</h2>
				<pre class="mycode"><code>
&lt;input class=&quot;fileinput&quot; type=&quot;file&quot; id=&quot;form_resume&quot; name=&quot;form_resume&quot; /&gt;
				</code></pre>
			</section>

			<!-- CSS -->
			<section class="sett-css sett-sect">
				<h2 class="settings-title">Default CSS</h2>
				<pre class="mycode"><code>
.fileinput-wrap{display:table; overflow:hidden; max-width:100%; border-radius:5px 0 0 5px;}
	.fileinput-btn{display:table-cell; width:1%; white-space:nowrap; color:#555; background-color:#ccc; cursor:pointer; vertical-align: middle; border-right:1px solid #aaa;}
	.fileinput-btn:hover{background-color:#c3c3c3;}
		.fileinput-btnblock{display:block; padding:15px 15px; position:relative;}
			.fileinput-wrap .fileinput{position:absolute; left:0; top:0; width:100%; height:100%; padding:0; margin:0; background:none; direction:ltr; cursor:pointer; opacity:0;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=00)";}
			.fileinput-btntxt{display: inline-block; font-size:16px;}
	.fileinput-remove{display:none; width:1%; white-space:nowrap; font-size:24px; line-height:24px; color:#555; background-color:#ccc; cursor:pointer; vertical-align: middle; border-right:1px solid #aaa;}
	.fileinput-remove:hover{background-color:#c3c3c3;}
	.fileinput-txtfield{display:table-cell; width:100%; padding:10px; background:#f3f3f3; cursor:not-allowed; vertical-align: middle;}
		.fileinput-filename{font-size:15px;}
		.fileinput-filename .icon{}
				</code></pre>
			</section>

			<!-- jQuery & plugin -->
			<section class="sett-plugin sett-sect">
				<h2 class="settings-title">Add jQuery &amp; Plugin</h2>
				<pre class="mycode"><code>
&lt;script src=&quot;js/libs/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/fileinput.js&quot;&gt;&lt;/script&gt;
				</code></pre>
			</section>

			<!-- Init -->
			<section class="sett-init sett-sect">
				<h2 class="settings-title">Initialize Plugin</h2>
				<pre class="mycode"><code>
$(function(){
	
	// Init - File Input 
	$('.fileinput').fileInput();
	
});
				</code></pre>
			</section>	