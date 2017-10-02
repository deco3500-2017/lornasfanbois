<?php
/**
 * Created by PhpStorm.
 * User: Digby
 * Date: 19/09/2017
 * Time: 8:43 AM
 */

/*
 * Functions used to save and read posts from the DB
 * */

// $TABLES = ["USER", "SCHOOL", "POST"];

/*
 *
 *
 * -- POST --
 * POSTID (PK) AI
 * USEREMAIL (FK) varchar(50)
 * USERAPPROVED USEREMAIL (FK) - default: NULL
 * POSTTITLE
 * POSTTOPIC varchar (75)
 * POSTTEXT
 * POSTISANONYMOUS bool
 *
 * */

/*
 * Returns the total number of posts (count)
 *
 * */
function getNumberOfPosts($conn) {
    $result = 0;
    $sql = "SELECT COUNT(*) AS count FROM POST";
    foreach ($conn->query($sql) as $row) {
        $result = $row['count'];
    }
    return $result;
}

/**
 * Save a post
 *
 * @param $conn: the connection to the database
 * @param $userEmail: email of the person posting
 * @param $postTitle: title of the post
 * @param $postText: body of the post
 * */
function savePost($conn, $userEmail, $postTitle, $postTopic, $postSummary, $postText, $postIsAnonymous) {
    // required: USEREMAIL, POSTTITLE, POSTTOPIC, POSTTEXT
    // optional: POSTISANONYMOUS
    if ($postIsAnonymous == "on") {
        $postIsAnonymous = 1;
    } else {
        $postIsAnonymous = 0;
    }
    $sql = "INSERT INTO POST (USEREMAIL, POSTTITLE, POSTTOPIC, POSTSUMMARY, POSTTEXT, POSTISANONYMOUS) VALUES ('$userEmail','$postTitle','$postTopic', '$postSummary', '$postText', $postIsAnonymous)";

    $conn->exec($sql);
}


function readPost($conn, $postID) {
    $post = array();

    $sql = "SELECT * FROM POST WHERE POSTID = " . $postID;
    foreach ($conn -> query($sql) as $row) {
        foreach ($row as $field) {
            $post[$field] = $row[$field];
        }
    };

    return $post;
}

/**
 * Approve a post that has been submitted by a user.
 *
 * @param $postID the ID of the post to be approved
 * @param $adminEmail the email address of the admin approving the post
 */
function approvePost($conn, $postID, $adminEmail) {

    if (checkAdmin($adminEmail)) {
        $sql = "UPDATE POST SET USERAPPROVED = 1  WHERE POSTID = " . $postID;
        $conn->exec($sql);
    }


}


function checkAdmin($adminEmail) {
    return true;
}

/*    * -- POST --
 * POSTID (PK) AI
* USEREMAIL (FK) varchar(50)
* USERAPPROVED USEREMAIL (FK) - default: NULL
* POSTTITLE
* POSTTOPIC varchar (75)
* POSTTEXT
* POSTISANONYMOUS bool*/

function printAllPosts($conn) {
    echo "Function Called";
    $sql = "SELECT * FROM  POST";

    foreach ($conn->query($sql) as $row) {
        print_r($row);

        echo "<div class='post'>";
        if ($row["POSTISANONYMOUS"] == 1) {
            $row["USEREMAIL"] = "Anonymous";
        }
        echo "<h2>" . $row["POSTTITLE"] . "</h2>";
        echo "<p>Posted by <span class='bold'>" . $row["USEREMAIL"] . "</span></p>" ;
        echo "<p>Topic: ";
        echo $row["POSTTOPIC"];
        echo "</p>";

        echo "<p>";
        echo $row["POSTTEXT"];
        echo "</p>";

        echo "</div>";


    }

}

function printAllApprovedPosts($conn) {
    $sql = "SELECT * FROM  POST WHERE USERAPPROVED IS NOT NULL";

    foreach ($conn->query($sql) as $row) {
        echo "<div class='post'>";
        if ($row["POSTISANONYMOUS"] == 1) {
            $row["USEREMAIL"] = "Anonymous";
        }
        echo "<h2>" . $row["POSTTITLE"] . "</h2>";
        echo "<p>Posted by <span class='bold'>" . $row["USEREMAIL"] . "</span></p>" ;
        echo "<p>Topic: ";
        echo $row["POSTTOPIC"];
        echo "</p>";

        echo "<p>";
        echo $row["POSTTEXT"];
        echo "</p>";

        echo "</div>";


    }
}

