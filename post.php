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
    echo "<title>Post</title>";

	
echo '</head>';
// body
 echo '<body>

	';
 include_once "includes/mainNavigation.inc";
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

	