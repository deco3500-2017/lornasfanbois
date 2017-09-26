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
     * Returns the total number of posts
     *
     * */
    function getNumberOfPosts($conn)
    {
        $result = 0;
        $sql = "SELECT COUNT(*) AS count FROM POST";
        foreach ($conn->query($sql) as $row) {
            $result = $row['count'];
        }

        return $result;
    }

    /*
     * Save a post
     *
     * $conn: the connection to the database
     * $userEmail: email of the person posting
     * $postTitle: title of the post
     * $postText: body of the post
     * */
    function savePost($conn, $userEmail, $postTitle, $postText)
    {
        // required: USEREMAIL, POSTTITLE, POSTTOPIC, POSTTEXT
        // optional: POSTISANONYMOUS

        $sql = "INSERT INTO POST (USEREMAIL, POSTTITLE, POSTTEXT) VALUES ('$userEmail'','$postTitle','$postText')";
        $conn->exec($sql);
    }

    function readPost($conn, $postID)
    {
        $post = array();

        $sql = "SELECT * FROM POST WHERE POSTID = " . $postID;
        foreach ($conn - query($sql) as $row) {
            foreach ($row as $field) {
                $post[$field] = $row[$field];
            }
        };

        return $post;
    }

    /**
     * Approve a post that has been submitted by a user.
     */
    function approvePost($conn, $postID, $adminEmail)
    {

        if (checkAdmin($adminEmail)) {
            $sql = "UPDATE POST SET USERAPPROVED = 1  WHERE POSTID = " . $postid;
            $conn->exec($sql);
        }


    }



    function checkAdmin($adminEmail)
    {
        return true;
    }

