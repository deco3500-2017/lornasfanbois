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
     * @param $conn : the connection to the database
     * @param $userEmail : email of the person posting
     * @param $postTitle : title of the post
     * @param $postText : body of the post
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
        foreach ($conn->query($sql) as $row) {
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
            echo "<p>Posted by <span class='bold'>" . $row["USEREMAIL"] . "</span></p>";
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
            echo "<p>Posted by <span class='bold'>" . $row["USEREMAIL"] . "</span></p>";
            echo "<p>Topic: ";
            echo $row["POSTTOPIC"];
            echo "</p>";

            echo "<p>";
            echo $row["POSTTEXT"];
            echo "</p>";

            echo "</div>";


        }
    }

    /**
     * Like/upvote a post
     *
     * @param $conn the connection to the database
     * @param $userEmail the email address of the liker
     * @param $postId the id of the post being liked
     */
    function likePost($conn, $userEmail, $postId) {
        $sql = "INSERT INTO UPVOTE VALUES('$userEmail', $postId)";

        $conn->exec($sql);
    }


    function removeLike($conn, $postId, $tag) {
        $sql = "DELETE FROM POSTLIKE
WHERE POSTID = $postId AND 
POSTTAG = '$tag'";

        $conn->exec($sql);
    }
    
    /**
     * Associate a tag with a post
     *
     * @param $conn connection to the database
     * @param $postId the ID of the post to tag
     * @param $postTag the tag to associate with the post
     */
    function tagPost($conn, $postId, $postTag) {
        // as post is associated with a user through the post table

        $sql = "INSERT INTO POSTTAG VALUES ($postId, $postTag)";
        $conn->exec($sql);
    }



    function removeTag($conn, $postId, $tag) {
        $sql = "DELETE FROM POSTTAG
WHERE POSTID = $postId AND
POSTTAG = '$tag'";

        $conn->exec($sql);
    }

    /**
     * Get the tags associated with a post
     *
     * @param $conn connection to the database
     * @param @postId the id of the post to get the tags for
     * @return array an array of strings
     */
    function getTags($conn, $postId) {
        $tags = array();
        $arrayIndex = 0;
        $sql = "
    SELECT POSTTAG
    FROM POSTTAG
    WHERE POSTID = $postId
    ";

        foreach ($conn->query($conn) as $row) {

            $tags[$arrayIndex] = $row["POSTTAG"];

            $arrayIndex++;
        }

        return $tags;
    }



