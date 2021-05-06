<?php
  session_start();

  if(isset($_SESSION['use']))
  {
    header("Location:index.html"); 
  }
  if(isset($_POST['login'])) 
  {
       $user = $_POST['user'];
       $pass = $_POST['pass'];
  
        if($user == "Admin" && $pass == "1234")  
          {                                     
            $_SESSION['use']=$user;
           echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
          }
          else
          {
            echo "invalid UserName or Password";        
          }
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="contactStyle.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />

    <title>Admin Login</title>
  </head>
  <body>
    <section class="contact">
      <div class="container">
        <div class="contactForm">
        <form action="" method="post">
          <table width="200" border="0">
          <tr>
            <td>  UserName</td>
            <td> <input type="text" name="user" > </td>
          </tr>
          <tr>
            <td> PassWord  </td>
            <td><input type="password" name="pass"></td>
          </tr>
          <tr>
            <td> <input type="submit" name="login" value="LOGIN"></td>
            <td></td>
          </tr>
          </table>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>






