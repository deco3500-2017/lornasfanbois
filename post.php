<?php
/**
 * Created by PhpStorm.
 * User: Digby
 * Date: 26/09/2017
 * Time: 12:27 PM
 */

/**
 * The actual form that the person posting is going to see
 */


    include_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";
    include "includes/header.inc";
    echo "<title>View Posts</title>";
    echo '	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Setting the width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>View Posts</title>

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- CSS -->
	<link href="css/main.css" rel="stylesheet">
	
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>';
// body
 echo '<body>
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
	';
// post form
echo '
<div id="grey">
        <div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-7 col-md-offset-3">
				    <h1>Post</h1>
                    <form action="processingDocuments/postHandler.php" method="post">
                        
                        <label for="title">Title<span class="requiredField">*</span></label> <input type="text" required id="title" name="title" /> <br />
                        <br>
                        <label for="topic">Topic<span class="requiredField">*</span> </label> <input type="text" id="topic" name="topic" /> <br/>
                        <br>
                        <label for="summary">Summary<span class="requiredField">*</span> </label> <input type="text" id="summary" name="summary" /><br/>
                        <br>
                        <label for="anonymous" title="I would like my post to be anonymous">Anonymous</label> <input type="checkbox" id="anonymous" name="anonymous" title="I would like my post to be anonymous" /><br/>
                        <label for="postBody">Your post</label><br/>
                        <textarea name="postBody"></textarea><br/>
                        
                        <img id="addTag" src="images/tag.svg" title="Tag your post to help people find it"  height="20px" />
                        
                        <br />
                        <input type="submit" name="submit" />
                    </form>
                    <p><b>Disclaimer*</b>Posts which include personal information such as names, emails, phone numbers will not be approved. If you do need to use names use the example of TeacherA, StudentB etc.</p>
                    <p>Content which is deemed inappropriate will not be approved to post either. Keep topics civil, we are here to be serious and offer support. Personal Attacks, trolling, and bigotry will result in bans</p>
                </div>
            </div>
        </div>
    </div>
    ';

echo'
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

	