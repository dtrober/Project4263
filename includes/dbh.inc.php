<!-- This file establishes the connection to the database -->
<?php

$dbServername = "localhost";
$dbUsername = "CON";
$dbPassword = "A";
$dbName = "TestDB";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
