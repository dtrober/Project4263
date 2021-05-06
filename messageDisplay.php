<?php
  include_once 'includes/dbh.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  hello
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
</body>
</html>