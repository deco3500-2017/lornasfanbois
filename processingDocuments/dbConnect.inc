<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 19/09/2017
     * Time: 8:17 AM
     */


    $userName = "root";
    $password = "23725d85293ec118";
    $host = "localhost";
    $databaseName = "TeachHub";

    $conn = mysqli_connect($host, $username, $password);

    try {
        $conn = new PDO("mysql:host=$host;dbname=$databaseName", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected successfully";

    } catch (PDOException $exception) {
        echo "Something went wrong: " . $exception->getMessage() . "<br />";
    }

