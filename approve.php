<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 25/10/2017
     * Time: 1:55 PM
     */

    require_once "processingDocuments/postFunctions.inc";
    require_once "processingDocuments/dbConnect.inc";

    $ids = $_POST["checked"];

    for ($i = 0; $i < count($ids); $i++) {
        echo $i . " + " . $ids[$i];
        $value = (int) $ids[$i];

        approvePost($conn, $value, "someone");
    }

    header("Location: /viewposts.php");
