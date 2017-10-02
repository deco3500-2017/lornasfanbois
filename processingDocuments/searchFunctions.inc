<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 2/10/2017
     * Time: 3:50 PM
     */

    // use jquery to call these functions... sent a post request that contains keywords, based on those results are echoed back.

    require_once "dbConnect.inc";

    switch ($_POST["search"]) {
        case "date":
            echo "results";
            break;
        case "usernameAscending":
            break;
        case "usernameDescending":
            $sql = "";
            $conn->query($sql);
            break;



    }




