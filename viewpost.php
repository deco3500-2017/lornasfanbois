<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 23/10/2017
     * Time: 10:22 AM
     */


    /*
     * This page needs
     * */

    if (is_null($_POST["POSTID"])) {
        header("Location: /viewposts.php");
        die();
    }


    $postID = $_POST["POSTID"];

    // this is going to be a self-contained page that displays one specific post

    $post = getPost($conn, $_POST["POSTID"]);

    // get and print the post
    // get and print comments
    // get and print likes
    // this page is going to take something from post, and then is going to display the specifics of that post.

    require_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";
    include_once "includes/header.inc";



    echo "<title>Page title</title>";

    include_once "includes/mainNavigation.inc";

    echo "</head>";

    echo "<body>";

    echo "</body>";
