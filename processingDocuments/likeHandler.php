<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 24/10/2017
     * Time: 12:22 PM
     */

    // this is going to be the file that stuff is sent to when you like something.

    // required fields
    include_once "dbConnect.inc";
    include_once "postFunctions.inc";

    $userEmail = $_POST["userEmail"];
    $postID = $_POST["postID"];

    // these pages should't really need permissions if they're just calling functions
    likePost($conn, $userEmail, $postID);
