<!-- This file holds the sql query that takes the inputs from the form and sends them to the database -->
<!-- Upon successfully sending a message, the header will change to include "message=success" at the end -->
<?php
  include_once 'dbh.inc.php';

  $Fname = $_POST['Fname'];
  $Lname = $_POST['Fname'];
  $Email = $_POST['Email'];
  $Message = $_POST['Mess'];

  $sql = "INSERT INTO users (Fname, Lname, Email, Mess)" VALUES ('$Fname', '$Lname', '$Email','$Mess');       
  mysqli_query($conn, $sql);

  header("Location: ../ContactUs.php?message=success");
