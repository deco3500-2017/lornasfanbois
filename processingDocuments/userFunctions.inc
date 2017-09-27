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

    // could just include the connection doc and not have to pass conn to every single function..

    function addUser($conn, $userEmail, $userPassword, $userFirstName, $userLastName) {

        $sql = "
                INSERT INTO USER(USEREMAIL, USERPASSWORD, USERFNAME, USERLNAME)
                VALUES ('$userEmail', '$userPassword', '$userFirstName', '$userLastName')";
    }

    /**
     * Change a user's type $type. Valid user types are specified in $userTypes array.
     * @param $conn
     * */
    function changeUserType($conn, $userEmail, $type) {
        $userTypes = array("user", "admin");

        if (!in_array($type, $userTypes)) {
            echo "<script>console.log('" . $type;
            echo"is not a valid user type')</script>";
            return;
        }
        $sql = "UPDATE USER SET USERTYPE = 'admin' WHERE USEREMAIL = '$userEmail'";
        $conn - exec($sql);
    }

    /**
     * Checks if the user has received 2/3 warnings. If so the user is banned, otherwise the user is given a warning.
     * @param connection $conn connection object to the database
     * @param string $userEmail the email address of the user getting the warning
     */
    function giveUserWarning($conn, $userEmail) {
        // could return a boolean indicating if the user was banned
        $userWarnings = getUserWarnings($conn, $userEmail);
        if ($userWarnings >= 2) {
            banUser($conn, $userEmail);
            return;
        }

        $userWarnings++;

        $sql = "UPDATE USER SET USERWARNINGS = " . $userWarnings;
    }

    /**
     * Returns the number of warnings a certain users has received
     * @param connection $conn the connection object for the database
     * @param string @userEmail the email address of the user to get the number of warnings for
     * @return int the number of warnings @userEmail has received
     * */
    function getUserWarnings($conn, $userEmail) {
        $sql = "SELECT USERWARNINGS FROM USER WHERE USEREMAIL = '$userEmail'";
        $numberOfWarnings = 0;
        foreach ($conn->query($sql) as $row) {
            $numberOfWarnings = $row["USERWARNINGS"];
        }

        return $numberOfWarnings;

    }

    /**
     * Ban the user specificied by $userEmail
     * @param $conn connection object to database
     * @param $userEmail string the user to ban
     */
    function banUser($conn, $userEmail) {
        $sql = "UPDATE USER SET USERISBANNED = 1 WHERE USEREMAIL = '$userEmail'";
        $conn->exec($sql);
    }

    /**
     * Used to check if a user is banned
     * @param $conn connection object to database
     * @param $userEmail string email of the user you wish to check if they are banned
     * @return bool true if the user is banned, false if the user is not banned.
     */
    function isBanned($conn, $userEmail) {
        $userIsBanned = "";
        $sql = "SELECT USERISBANNED FROM USER WHERE USEREMAIL = '$userEmail'";

        // this is going to return a 1 or 0.
        foreach ($conn->query($sql) as $row) {
            $userIsBanned = $row["USERISBANNED"];
        }
        if ($userIsBanned == 1) {
            return true;
        }
        return false;


    }

