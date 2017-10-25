<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 23/10/2017
     * Time: 8:59 AM
     */

    // print out all unapproved posts and stick checkboxes next to them with references to the post ids
    // send post ids to some page that iterates through all the keys and sets them to approved.

    include_once "processingDocuments/dbConnect.inc";

    $sql = "SELECT * FROM POST WHERE USERCONFIRMED IS NULL";

    echo "<form action='#' method='post'>";

    foreach ($conn->query($sql) as $row) {
        print_r($row);
        echo "<input type='checkbox' name='checked[]' value='" . $row["POSTID"] ."' />";
    }

    echo "</form>";


    echo "<input type='submit' value='Confirm'>";

