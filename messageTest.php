<?php
  $servername   = "localhost";
  $database = "mydb";
  $username = "test";
  $password = "password"; 

  $num = 123;

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    echo "Connected successfully";

    $sql = "INSERT INTO `enter` (`name`, `num`) VALUES ( 'Jeff', '$num')";

    echo "we out here";
?>