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
        <li><a class="bilingualbtn2" href="ContactUs.html">English</a></li>
        <li><a class="navitem" href="indexs.html">casa</a></li>
        <li><a class="navitem" href="productss.html">productos</a></li>
        <li><a class="active navitem" href="#">contactarnos</a></li>
      </ul>
    </nav>
    <section class="contact">
      <div class="content">
        <h2>Sobre nosotros</h2>
        <p>
          Aquí en Funflatablez, creemos en un enfoque personalizado para los
          negocios. Complete este formulario y pronto se pondrá en contacto con
          un representante que lo ayudará en su selección.
        </p>
      </div>
      <div class="container">
        <div class="Cinfo">
          <div class="Cicontainer">
            <div class="CiText">
              <h3>habla a</h3>
              <p>1234 First Street,<br />Oklahoma City, Oklahoma,<br />73123</p>
            </div>
          </div>
          <div class="Cicontainer">
            <div class="CiText">
              <h3>Teléfono</h3>
              <p>123-123-1234</p>
            </div>
          </div>
          <div class="Cicontainer">
            <div class="CiText specialp">
              <h3>Correo electrónico</h3>
              <p>examplemail@email.comm</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="contactForm">
        <form action="includes/message.inc.php" method="POST">
            <h2>CONTÁCTENOS</h2>
            <div class="inputBox">
              <input type="text" name="Fname" maxlength="20" required="required" />
              <span>primer nombre</span>
            </div>
            <div class="inputBox">
              <input type="text" name="Lname" maxlength="20" required="required" />
              <span>apellido</span>
            </div>
            <div class="inputBox">
              <input type="text" name="Email" maxlength="50" required="required" />
              <span>Email</span>
            </div>
            <div class="inputBox">
              <input type="text" name="Mess" maxlength="150" required="required" />
              <span>Escribe tu mensaje...</span>
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