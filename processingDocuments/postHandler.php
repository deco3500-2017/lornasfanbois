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


$expectedFields = array("title", "topic", "summary", "anonymous", "postBody", "submit");



foreach ($expectedFields as $field) {

}
$postTitle = $_POST["title"];
$postTopic = $_POST["topic"];
$postText = $_POST["postBody"];
$postIsAnonymous = $_POST["anonymous"];
$postSummary = $_POST["summary"];

savePost($conn, "someone", $postTitle, $postTopic, $postSummary, $postText, $postIsAnonymous);

$tags = $_POST["tags"];
$lastRecordId = $conn->lastInsertId();

if (!empty($tags)) {
    foreach ($tags as $tag) {
        tagPost($conn, $lastRecordId, $tag);
    }
}


    header("Location: /viewposts.php");