<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 19/09/2017
     * Time: 8:43 AM
     */

    // $TABLES = ["USER", "SCHOOL", "POST"];

    /*
     * Returns the total number of posts
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


    // remove this - for testing
    function getNumberOfUsers($conn)
    {
        $sql = "SELECT COUNT(*) AS count FROM USER";

        $result = 0;
        foreach ($conn->query($sql) as $row) {
            $result = $row['count'];
        }

        return $result;
    }

    // remove this - for testing
    function getNumberOfScools($conn)
    {
        $sql = "SELECT COUNT(*) AS count FROM SCHOOL";

        $result = 0;
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
    function savePost($conn, $userEmail, $postTitle, $postText) {
        $sql = "INSERT INTO POST (USEREMAIL, POSTTITLE, POSTTEXT) VALUES ('$userEmail'','$postTitle','$postText')";
        $conn->exec($sql);
    }

