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
						<h4>Fractured Fairytales</h4>
						<img src="images/fairy-tales-for-kids.jpg" style="height: 425px; width: 330px">
						<a href="/pdf/Fractured-Fairytale-Narratives-Unit-Plan.pdf" download><b>Download Resources for this lesson plan</b></a>
				</div>
				<div class="col-lg-8">
						<h4>Summary of Lesson Plan:</h4>
						<p>The following unit allows students to explore traditional and fractured fairy tales in order to see stories from a different point of view. Students will use activity to explore fractured stories and to create their own mixed up fairy tales. Students will compare and contrast different stories while writing their own narratives. The focus text structure of the unit is Narratives and students will learn how to sequence their writing. Students will identify elements of fairy-tale stories, create exciting characters, sequence events, create and solve problems.</p>
						<h4>Lesson Plan Sequence</h4>
						<p><b>Orientation</b> 5 minutes</p>
						<p>Construct simple literary and non-literary texts by planning and by using prior knowledge and experience to match an audience and purpose. Interpret how people, characters, places, events and things have been represented.</p>
						<p>Interpret how people, characters, places, events and things have been represented. Construct simple literary and non-literary texts by planning and by using prior knowledge and experience to match an audience and purpose.</p>
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