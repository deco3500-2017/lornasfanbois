<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 9/10/2017
     * Time: 1:29 PM
     */

    require_once "processingDocuments/dbConnect.inc";
    require_once "processingDocuments/postFunctions.inc";

    echo "<p>Creating a new post:</p>";


    savePost($conn, "someone", "Title", "the topic", "summary", "the body of the post", true);

    echo "<p> The post has saved successfully </p>";

    echo "<p>Tagging the post: </p>";
    tagPost($conn, 2, "Study");

    echo "<p>The post has been tagged successfully</p>";

    echo "<p>Getting posts with tag Cooking: </p>";

    foreach (getPostsWithTag($conn, "Study") as $arr) {
        print_r($arr);
    }

    echo "<p>Removing tag Study from Post with ID 2: </p>";

    removeTag($conn, 2, "Study");

    echo "<p> Liking post 2 as user someone: </p>";

    likePost($conn, "someone", 2);

    echo "<p>Getting number of posts liked by user someone: </p>";

    echo "someone likes " . getNumberOfLikedPosts($conn, "someone") . " posts";

    echo "<p>Removing like: </p>";

    removeLike($conn, 2, "someone");

    echo "The number of posts liked by someone is: " . getNumberOfLikedPosts($conn, "someone");
    echo "<br />";

    echo "<p>All actions successful</p>";



    $conn = null;