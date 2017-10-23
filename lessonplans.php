<?php
/**
 * Created by PhpStorm.
 * User: Ihsaan
 * Date: 16-Oct-17
 * Time: 11:45 AM
 */
    include_once "includes/header.inc";
echo '
<title>Lesson Plans</title>

</head>

<body>
';
    include_once "includes/mainNavigation.inc";
    echo '


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
</body>';