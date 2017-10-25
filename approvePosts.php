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

    // take each post that isn't approved from the database and print it with a box that allows confirmation of the

    const USERAPPROVED = "USERAPPROVED";
    const POSTTITLE = "POSTTITLE";
    const POSTTOPIC = "POSTTOPIC";
    const POSTSUMMARY = "POSTSUMMARY";
    const POSTPOSTED = "POSTPOSTED";
    const POSTTEXT = "POSTTEXT";
    const POSTISANONYMOUS = "POSTISANONYMOUS";
    const POSTID = "POSTID";

    $sql = "SELECT * FROM POST WHERE USERAPPROVED IS NULL";

    echo "<form action='approve.php' method='post'>";
    $postNumber = 0;
    foreach ($conn->query($sql) as $row) {
        $postNumber++;
        if ($row[ANONYMOUS] == 1) {
            $row[USEREMAIL] = "Anonymous";
        }
        echo "<div>";
        echo "<p>Post number: $postNumber</p>";
        echo "<p>Posted by: " + $row[USEREMAIL] . "</p>";
        echo "<p>Title: " + $row[POSTTITLE] . "</p>";
        echo "<p>Summary:</p>";
        echo $row[POSTSUMMARY];
        echo "<p>Post:</p>";
        echo "<p>$row[POSTTEXT]</p>";



        echo "<input type='checkbox' name='checked[]' value='$row[POSTID]'  />";
        echo "</div>";
    }
    echo "<input type='submit' value='Confirm'>";
    echo "</form>";




