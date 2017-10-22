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
        $sql = "SELECT * FROM  POST";

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

    function printAllApprovedPosts($conn) {
        $sql = "SELECT * FROM  POST WHERE USERAPPROVED IS NOT NULL";


        foreach ($conn->query($sql) as $row) {
            echo "ID: " . $row["POSTID"];

            echo "<div class='post'>";
            if ($row["POSTISANONYMOUS"] == 1) {
                $row["USEREMAIL"] = "Anonymous";
            }
            echo "<h2>" . $row["POSTID"] . " " . $row["POSTTITLE"] . "</h2>";
            echo "<p>Posted by <span class='bold'>" . $row["USEREMAIL"] . "</span></p>";
            echo "<p>Topic: ";
            echo $row["POSTTOPIC"];
            echo "</p>";

            echo "<p>";
            echo $row["POSTTEXT"];
            echo "</p>";

            echo "</div>";

            if (getNumberOfComments($conn, $row["POSTID"]) > 0){
                echo "<h3>Comments: </h3>";
                printCommentsForPost($conn, $row["POSTID"]);
            }



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
        $sql = "INSERT INTO POSTLIKE VALUES($postId, '$userEmail')";

        $conn->exec($sql);
    }

    /**
     * Remove a like from a post
     *
     * @param $conn connection to the object
     * @param $postId the id of the post to have the like removed from
     * @param $userEmail the user
     */
    function removeLike($conn, $postId, $userEmail) {
        $sql = "DELETE FROM POSTLIKE
WHERE POSTID = $postId AND 
USEREMAIL = '$userEmail'";

        $conn->exec($sql);
    }

    function getNumberOfLikedPosts($conn, $userEmail) {
        $sql = "SELECT COUNT(*) AS 'count' FROM POSTLIKE WHERE USEREMAIL = '$userEmail'";
        $count = 0;
        foreach ($conn->query($sql) as $row) {
            $count = $row["count"];
        }

        return $count;
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

        $sql = "INSERT INTO POSTTAG VALUES ($postId, '$postTag')";
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

    /**
     * Gets all posts associated with a tag and returns them as a 2D array
     *
     */
    function getPostsWithTag($conn, $tag) {
        $sql = "SELECT * FROM POST WHERE POSTID IN (SELECT POSTID FROM POSTTAG WHERE POSTTAG = '$tag')";
        $posts = array();
        $arrayIndex = 0;
        $fields = array("USEREMAIL", "POSTTITLE", "POSTTOPIC", "POSTSUMMARY", "POSTPOSTED", "POSTTEXT");

        foreach ($conn->query($sql) as $row) {
            $tags[$arrayIndex] = $row["POSTTAG"];
            $arrayIndex++;
            $post = array_map();

            if ($row["POSTISANONYMOUS"] == 1) {
                $row["USEREMAIL"] = "Anonymous";
            }

            for ($i = 0; $i < count($fields); $i++) {
                $post[$fields[$i]] = $row[$fields[$i]];
            }
            $posts[$arrayIndex] = $post;
            $arrayIndex++;

        }

        return $posts;

    }

    function addComment($conn, $postID, $userEmail, $commentText) {
        $sql = "INSERT INTO COMMENT (POSTID, USEREMAIL, COMMENTVOTES, COMMENTTEXT) 
VALUES ($postID, '$userEmail', $commentText)";

        $conn->exec($sql);
    }

    function removeComment($conn, $commentID) {
        $sql = "DELETE FROM COMMENT WHERE COMMENTID = $commentID";
        $conn->exec($sql);
    }

    /**
     * Return all comments associated with a post as a 2D array
     *
     * @param $conn connection to the database
     * @param @postID the id of the post to get comments for
     * @return array a 2D array containing all comments for $postID
     */
    function getCommentsForPost($conn, $postID) {
        $sql = "SELECT * FROM COMMENT WHERE POSTID = $postID";
        $fields = array("COMMENTID", "USEREMAIL", "COMMENTPOSTED", "COMMENTVOTES", "COMMENTTEXT");
        $comments = array();
        $index = 0;

        foreach ($conn->query($sql) as $row) {
            $comment = array();
            for ($i = 0; $i < count($fields); $i++) {
                $comment[$i] = $row[$fields[$i]];
            }
            $comments[$index] = $comment;
            $index++;
        }

        return $comments;

    }

    /**
     * Prints all comments assocaited with a post in divs
     *
     * @param $conn connection to the database
     * @param $postID the id of the post to print comments for
     */
    function printCommentsForPost($conn, $postID) {
        echo "<p>returned from post $postID:</p>";

        $posts = getCommentsForPost($conn, $postID);
        foreach ($posts as $post) {
            echo "<div>";
            $index = 0;
            foreach ($post as $field) {
                echo "$index: $field";
            }
            echo "<hr />";
            echo "</div>";
        }
    }

    function getNumberOfComments($conn, $postID) {
        $sql = "SELECT COUNT(*) FROM COMMENT WHERE POSTID = $postID";
        $number = 0;
        foreach ($conn->query($sql) as $row) {
            $number = $row["count"];
        }

        return $number;
    }





