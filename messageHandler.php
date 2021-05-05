<?php

$conn = mysqli_connect('localhost', 'CON', 'A', 'TestDB');

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Mess = $_POST['Mess'];

$sql = "INSERT INTO 'Message' ('Fname', 'Lname', 'Email', 'Mess') VALUES('$Fname', '$Lname', '$Email','$Mess')";       
mysqli_query($conn, $sql);

?>


