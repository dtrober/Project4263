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

    <title>Contact Us</title>
  </head>
  <body>
    <section class="contact">
      <div class="content">
        <h2>Contact Us</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="container">
        <div class="contactInfo">
          <!-- Address -->
          <div class="box">
            <div class="icon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>1234 First Street,<br />Oklahoma City, Oklahoma,<br />73123</p>
            </div>
          </div>
          <!-- Phone Number -->
          <div class="box">
            <div class="icon">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>123-123-1234</p>
            </div>
          </div>
          <!-- Email -->
          <div class="box">
            <div class="icon">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>examplemail@email.comm</p>
            </div>
          </div>
        </div>
        <!-- Message form -->
        <div class="contactForm">
          <form action="includes/message.inc.php" method="POST">
            <h2>Send Message</h2>
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
            <div class="inputBox">
              <input type="submit" name="submit" value="Send" />
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>