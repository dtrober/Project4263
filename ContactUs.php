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
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="contactStyle.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <title>Contact Us</title>
  </head>
  <body class="bodynoimage bodyblur">
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img
        class="logo"
        src="Images/FunflatablezLogoTransparent.png"
        alt="FunFlatablez Logo"
      />
      <h2 class="fflogotext">Funflatablez</h2>
      <ul>
        <li><a class="bilingualbtn1" href="ContactUss.php">español</a></li>
        <li><a class="navitem" href="index.html">Home</a></li>
        <li><a class="navitem" href="products.html">Products</a></li>
        <li><a class="active navitem" href="ContactUs.php">Contact Us</a></li>
      </ul>
    </nav>
    <section class="contact">
      <div class="content">
        <h2>About Us</h2>
        <p>
          Here at Funflatablez, we believe in a personalized approach to
          business. Please fill out this form and you will soon be in touch with
          a representative who will assist you in your selection.
        </p>
      </div>
      <div class="container">
        <div class="Cinfo">
          <div class="Cicontainer">
            <div class="CiText">
              <h3>Address</h3>
              <p>123 First Street,<br />Oklahoma City, Oklahoma,<br />73123</p>
            </div>
          </div>
          <div class="Cicontainer">
            <div class="CiText">
              <h3>Phone</h3>
              <p>405-123-4567</p>
            </div>
          </div>
          <div class="Cicontainer">
            <div class="CiText specialp">
              <h3>Email</h3>
              <p>Funflatablez@gmail.com</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="contactForm">
          <form action="includes/message.inc.php" method="POST">
            <h2>CONTACT US</h2>
            <div class="inputBox">
              <input type="text" name="Fname" maxlength="20" required="required" />
              <span>First Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="Lname" maxlength="20" required="required" />
              <span>Last Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="Email" maxlength="50" required="required" />
              <span>Email</span>
            </div>
            <div class="inputBox">
              <input type="text" name="Mess" maxlength="150" required="required" />
              <span>Type your Message...</span>
            </div>
            <div class="inputBox CUButton">
              <input type="submit" name="" value="Send" />
            </div>
          </form>
        </div>
      </div>
      <div style="clear: both"></div>
    </section>
  </body>
</html>