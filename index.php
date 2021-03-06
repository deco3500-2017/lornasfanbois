<?php

    require_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";
    include_once "includes/header.inc";

    echo '
	<title>Welcome to TeachHub</title>
	
</head>

<body>
';
    include_once "includes/mainNavigation.inc";

    echo '


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