<?php
  include_once 'includes/dbh.inc.php'
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="card.css" />
      <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <title>Product Page</title>
  </head>
  <body class="bluebackground">

  <?php //redirect user to admin login page before being able to view messages
      if(!isset($_SESSION['use']))
       {
          header("Location:Login.php");  
       }
        echo $_SESSION['use'];
        echo "Login Success";
        echo "<a href='logout.php'> Logout</a> "; 
  ?>



  <?php
      $sql = "SELECT * FROM Message;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
        while($row = mysqli_fetch_assoc()){
          echo $row['Lname'] . "<br>";
        }
      }
  ?>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
      <?php 
      while($rows=$result->fetch_assoc())
      {
        ?>
        <tr>
          <td><?php echo $rows['Fname']?></td>
          <td><?php echo $rows['Lname']?></td>
          <td><?php echo $rows['Email']?></td>
          <td><?php echo $rows['Mess']?></td>
        </tr>
        <?php
      }
        ?>
  </table>


<div>
  <h2 class="HeaderstyleProduct">Messages</h2>
      <div class="right">
        <h1 class="cardheader"><?php echo $rows['Lname']?></h1>
      </div>
</div>

</body>
</html>