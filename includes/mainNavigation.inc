<?php
/**
 * Created by PhpStorm.
 * User: Digby
 * Date: 27-Sep-17
 * Time: 10:36 AM
 */
echo '
    <!-- Navbar -->
<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<!-- This div changes the menu to a drop-down for mobile users -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="index.php">Home</a></li>
				<li><a href="lessonplans.php">Lesson Plans</a></li>
				<li><a href="post.php">Post Topic</a></li>
				<li><a href="viewposts.php">View Posts</a></li>
			</ul>
			<form accept-charset="UTF-8" action="/deco3500-2017/lornasfanbois/search" class="js-site-search-form" data-scoped-search-url="/deco3500-2017/lornasfanbois/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
				<label class="search-header" style="padding-top: 15px; float: right; ">
					<input type="text" class="search-header-field" value="" placeholder="Search">
				</label>
			</form>
		</div>
	</div>
</div>';