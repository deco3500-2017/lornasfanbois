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
						<h4>Geography Basics</h4>
						<img src="images/Earth.jpg" style="height: 425px; width: 330px">
						<a href="/pdf/2D-Shape-Cards.pdf" download><b>Download Resources for this lesson plan</b></a>
				</div>
				<div class="col-lg-8">
						<h4>Summary of Lesson Plan:</h4>
						<p>In this unit students explore landscapes and common features of local environments. The unit assists the use and development of geographical inquiry and skills outlined in the Australian Curriculum. Learning begins by examining students’ natural environment. Students identify natural versus man-made features. This is extended though a literacy recount writing task. Students then observe and analyse different types of landscapes – beach, city, rural and country. Students identify the distinct features of these landscapes. To close the unit, students create an information report that summarises learning throughout the entire unit, giving students an opportunity to reflect on the geographical features of their own location. Worksheets, templates, PowerPoint, and Assessment Rubrics.</p>
						<h4>Lesson Plan Sequence</h4>
						<p><b>Orientation</b> 5 minutes</p>
						<p>Explain 2D shapes are flat (they only have width and length) and 3D shapes have height (length, width and height) E.g. prisms and pyramids. Prisms have two bases and are the same all the way across. Pyramids have one base and a point where all edges meet.</p>
						<p>Explain 3D shapes also have vertices, edges and faces. Who knows what vertices, edges and faces are? Using the play dough shapes explain: A vertex is a corner, it is where two or more straight lines meet. An edge joins one vertex (corner) with another and a face is an individual surface.</p>
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