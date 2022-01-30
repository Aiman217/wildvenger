<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta class="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--make sure that css pulling happen everytime the page is refresh-->
    <link href="../css/header-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
    <link href="../css/footer-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
    <link href="../css/forum-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Registration</title>
  </head>
  <body>
    <?php require "../php/header.php" ?>
    <div class="register">
      <h1>Registration Page</h1>
      <div class="container-reg">
        <form action="../php/register-parse.php" method="post">
        <p class="regUsername">
          <label for="inputName">Username<sup>*</sup></label>
          <input type="text" name="username" placeholder="Username">
        </p>
        <p class="regPassword">
          <label for="inputMessage">password<sup>*</sup></label>
          <input type="password" name="password" placeholder="Password">
        </p>
        <p>
          <button class='submitButton' type="submit">Register</button>
          <button class="resetButton" name="reset" type="reset">Reset</button>
          <hr>
        </p>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer">
      <p>Wildvenger</p>
    </div>
  </footer>
</html>
