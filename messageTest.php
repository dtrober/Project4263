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

    $sql = "INSERT INTO enter (id, name, num) VALUES ('0', 'Jeff', `$num`)";

    echo "we out here";

  if($sql)
  {
    echo "Success";
  }
  else
  {
    die("SQL Error: ".mysql_error());
  }
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
  <form action="messageTest.php" method="post">
  <div>
      <input type="submit" name="" value="Send" />
  </div>
  </form>
</body>
</html>

