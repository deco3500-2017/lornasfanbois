<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 2/10/2017
     * Time: 3:14 PM
     */
    include_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";
    include "includes/header.inc";
    echo "<title>View Posts</title>";
    echo "<script src='js/viewpostsjs.js'></script>";
    echo "<script src='js/likejs.js'></script>";
    echo '</head>';
    echo '<body>';
    include_once "includes/mainNavigation.inc";

    echo "<h1>Posts</h1>";
    printAllApprovedPosts($conn);

    echo '
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
';
    include "includes/closingTags.inc";

	