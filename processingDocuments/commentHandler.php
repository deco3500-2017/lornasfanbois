<?php
/**
 * Created by PhpStorm.
 * User: Digby
 * Date: 26/09/2017
 * Time: 12:33 PM
 */

/**
 * This file will handle writing of posts
 */

// REDIRECT THIS PAGE

require_once "postFunctions.inc";
require_once "dbConnect.inc";


echo "<h1>Post Processing Page... </h1>";

$expectedFields = array("postid", "userEmail", "Commenttext", "submit");

print_r($_POST);

foreach ($expectedFields as $field) {

    echo $field . ": " . $_POST[$field];
    echo "<br />";

}
$postID = $_POST["postid"];
$userEmail = $_POST["userEmail"];
$commentText = $_POST["Commenttext"];


echo "So far so good... trying to write...";

addComment($conn, $postID, $userEmail, $commentText);

//$tags = $_POST["tags"];
//$lastRecordId = $conn->lastInsertId();
//echo "Last record: " + $lastRecordId;

//if (!empty($tags)) {

//    foreach ($tags as $tag) {
//        tagPost($conn, $lastRecordId, $tag);
//    }
//}

echo "Writing was successful! ";
echo'<a href="../viewposts.php">Return</a>';