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
						<h4>Math Shapes</h4>
						<img src="images/science.jpg" style="height: 425px; width: 330px">
						<a href="/pdf/2D-Shape-Cards.pdf" download><b>Download Resources for this lesson plan</b></a>
				</div>
				<div class="col-lg-8">
						<h4>Summary of Lesson Plan:</h4>
						<p>An intensive Science Unit which takes students on a journey to discover various aspects of water in our world. Water is a valuable and precious resource. The unit begins by exploring water sources and uses in our everyday lives. Pictures are used to provoke students to think critically about water sources and how carefully we need to respond in times of drought. Learning continues to incorporate water forms, the water cycle, and sinking/floating investigations. The unit covers both science knowledge and science skills in the Australian Curriculum. Learning is extended to the Arts and to English learning areas. Students communicate the message “water is precious” by designing a poster that encourages wise water use. In English, Students are given the opportunity to develop procedural text types when experimenting and reflecting on their science experiment. Worksheets, PowerPoints, and Assessment rubric have been carefully created to ensure a comprehensive learning program. Extension interactive have been carefully selected to support and extend students where needed.</p>
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