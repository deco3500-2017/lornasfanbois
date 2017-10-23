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

    require_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";
    include_once "includes/header.inc";


    echo "<title> Replace this with the title of the post </title>";

    include_once "includes/mainNavigation.inc";

    echo "</head>";

    echo "<body>";

    echo "</body>";
