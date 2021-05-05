<?php

$conn = mysqli_connect('localhost', 'root', 'AppleMakesBadPhones#8724', 'TestDB');

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Mess = $_POST['Mess'];

$sql = "INSERT INTO 'Message' ('id', 'Fname', 'Lname', 'Email', 'Mess') VALUES ('0', '$Fname', '$Lname', '$Email','$Mess')";

$rs = mysqli_query($conn, $sql);

if ($rs) 
  {
    echo "Contact Records Inserted";
  } 
  else 
  {
  echo "bruh";
  }
?>


