<?php
/**
 * Created by PhpStorm.
 * User: Digby
 * Date: 31-Aug-16
 * Time: 9:23 PM
 */
$serverName = "localhost";
$userName = "root";
$password = "158486e88c74273e";
$databaseName = "STORIM";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $exception) {
    echo "Something went wrong: " . $exception->getMessage() . "<br />";
}
?>