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



    require_once "postFunctions.inc";
    require_once "dbConnect.inc";



    $postID = (int) $_POST["postID"];
    $userEmail = $_POST["userEmail"];
    $commentText = $_POST["commentText"];

    addComment($conn, $postID, $userEmail, $commentText);


    header("Location: /viewposts.php");
