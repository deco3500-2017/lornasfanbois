<?php

    require_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";

    echo '
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Setting the width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Welcome to TeachHub</title>

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

	<!-- About TeachHub -->	
	<div class="container pt">
		<div class="row mt centered">	
			<div class="container">
				<p><b>Teach Hub</b> is an online space for teachers to get Australian Curriculum lesson plans.Teachers may also view our forums, where they can post and discuss moderated topics.</p>
			</div>
	<!-- Sign in Form -->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4">
						<h1 class="text-center login-title">Sign in to continue to TeachHub</h1>
						<div class="account-wall">
							<form class="form-signin">
								<input type="text" class="form-control" placeholder="Email" required autofocus>
								<br>
								<input type="password" class="form-control" placeholder="Password" required>
								<br>
								<button class="btn btn-lg btn-primary btn-block" type="submit">
    Sign in</button>
								<label class="checkbox pull-left">
									<input type="checkbox" value="remember-me">
    Remember me
</label>
								<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
							</form>
						</div>
						<a href="#" class="text-center new-account">Create an account </a>
					</div>
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
</body>';