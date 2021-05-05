<?php

$conn = mysqli_connect('localhost', 'CON', 'A', 'TestDB');

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Mess = $_POST['Mess'];

$sql = "INSERT INTO 'Message' ('Id', 'Fname', 'Lname', 'Email', 'Mess') VALUES ('0', '$Fname', '$Lname', '$Email','$Mess')";       
mysqli_query($conn, $sql);

if (!mysqli_query($conn, $sql)) 
  {
    die('An error occurred. Your review has not been submitted.');
  } 
  else 
  {
  echo "Thanks for your review.";
  header("Location: ../ContactUs.php?message=success");
  }
?>


