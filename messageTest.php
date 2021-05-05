<?php
  $servername   = "localhost";
  $database = "TestDB";
  $username = "root";
  $password = "AppleMakesBadPhones#8724";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    echo "Connected successfully";
?>