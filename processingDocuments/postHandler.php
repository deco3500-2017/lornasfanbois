<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 26/09/2017
     * Time: 12:33 PM
     */

    /**
    This file will handle writing of posts

     */

    // REDIRECT THIS PAGE

    require_once "postFunctions.inc";
    require_once "dbConnect.inc";


    echo "<h1>Post Processing Page... </h1>";

    $expectedFields  = array("topic","summary","anonymous", "postBody", "submit");

    print_r($_POST);

    foreach($expectedFields as $field){

        echo $field . ": " . $_POST[$field];
        echo "<br />";

    }

    echo "So far so good... trying to write...";

    savePost($conn, "email", $_POST[]);

