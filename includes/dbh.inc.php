<!-- This file establishes the connection to the database -->
<?php

$dbServername = "TestDB";
$dbUsername = "root";
$dbPassword = "AppleMakesBadPhones#8724";
$dbName = "TestDB";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
