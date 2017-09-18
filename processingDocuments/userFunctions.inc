<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 19/09/2017
     * Time: 9:26 AM
     */

    /*
     * -- TABLE SCHEMA -- 
     * Table Name: USER
     * USEREMAIL (PK) varchar(50)
     * USERPASSWORD varchar(40)
     * USERFNAME varchar(30)
     * USERLNAME varchar(30)
     * USERJOINDATE DATETIME - default = current DateTime
     * USERWARNINGS int(11) - default = 0
     * USERISBANNED bool(0/1) - default = false 0
     * USERTYPE varchar(20) - default = Teacher
     * SCHOOLID (FK) int(11) - default = Null
     *
     * */

    function addUser($conn, $userEmail, $userPassword, $userFirstName, $userLastName) {

        $sql = "
                INSERT INTO USER(USEREMAIL, USERPASSWORD, USERFNAME, USERLNAME)
                VALUES ('$userEmail', '$userPassword', '$userFirstName', '$userLastName')";
    }

    /*
     * Change a user's type to admin
     *
     * $userEmail: the email address of the user to be set to admin.
     * */
    function changeUserToAdmin($userEmail) {
        $sql = "UPDATE USER SET USERTYPE = 'Admin' WHERE USEREMAIL = '$userEmail'";

    }

