<!-- This file establishes the connection to the database -->
<?php

$dbServername = "localhost";
$dbUsername = "test";
$dbPassword = "password";
$dbName = "mydb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>