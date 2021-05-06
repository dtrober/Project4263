<!-- This file holds the sql query that takes the inputs from the form and sends them to the database -->
<!-- Upon successfully sending a message, the header will change to include "message=success" at the end -->
<?php
  include_once 'dbh.inc.php';

  $Fname = $_POST['Fname'];
  $Lname = $_POST['Lname'];
  $Email = $_POST['Email'];
  $Mess = $_POST['Mess'];

  $sql = "INSERT INTO Message (`Fname`, `Lname`, `Email`, `Mess`) VALUES('$Fname', '$Lname', '$Email','$Mess')";       

  if (!mysqli_query($conn, $sql)) 
  {
    die('An error occurred. Your review has not been submitted.');
  } else 
  {
  echo "Thanks for your review.";
  header("Location: ../ContactUs.php?message=success");
  }

  $sql2 = "SELECT * FROM Message"
  if (!mysqli_query($conn, $sql2)) 
  {
    die('An error occurred. Your review has not been submitted.');
  } else 
  {
  echo "Thanks for your review.";
  header("Location: ../ContactUs.php?message=success");
  }
?>

 
