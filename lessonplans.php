<? php
/**
 * Created by PhpStorm.
 * User: Ihsaan
 * Date: 16-Oct-17
 * Time: 11:45 AM
 */
echo '
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Setting the width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>My Blog</title>

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- CSS -->
	<link href="css/main.css" rel="stylesheet">
	
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>

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
</div>
		<!-- This div changes the menu to a drop-down for mobile users -->
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Maths</a></li>
				<li><a href="#">English</a></li>
				<li><a href="#">Science</a></li>
				<li><a href="#">Geography</a></li>
				<li><a href="#">History</a></li>
			</ul>
		</div>
	</div>
</div>


	<!-- Lesson Plan Links -->
	<div id="grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<a href="#">
						<img src="images/shape.jpg">
						<h4>Math Shapes</h4>
						<p>Lesson about Shapes in Maths</p>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<img src="images/shape.jpg">
						<h4>Math Shapes</h4>
						<p>Lesson about Shapes in Maths</p>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<img src="images/shape.jpg">
						<h4>Math Shapes</h4>
						<p>Lesson about Shapes in Maths</p>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<img src="images/shape.jpg">
						<h4>Math Shapes</h4>
						<p>Lesson about Shapes in Maths</p>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<img src="images/shape.jpg">
						<h4>Math Shapes</h4>
						<p>Lesson about Shapes in Maths</p>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<img src="images/shape.jpg">
						<h4>Math Shapes</h4>
						<p>Lesson about Shapes in Maths</p>
					</a>
				</div>
			</div>
		</div>
	</div>

	

<!--Footer-->

<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4> The University Of <br/>Queensland</h4>
				<p>
Ihsaan Mahomed<br/>
					Digby Tilse <br/>
					Judah Bennett
</p>
			</div>

			<div class="col-lg-4">
				<h4>Find Us On</h4>
				<p>
					<a href="#" target="_blank">Twitter</a><br/>
					<a href="#" target="_blank">Facebook</a><br/>
					<a href="#" target="_blank">Linkedin</a><br/>
				</p>
			</div>

			<div class="col-lg-4">
				<h4>Contact Us</h4>
				<p>
E-mail: support@teachhub.com.au<br/>
				</p>
			</div>
		</div>
	</div>
</div>


	<!-- Bootstrap JavaScript-->
	<script src="js/bootstrap.min.js"></script>
</body>