<!DOCTYPE html>
<html lang="en" dir="ltr" style ="margin: 0px">
  <head>
    <link rel="icon" type="image/png" sizes="16x16" href="photos/favicon.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta class="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/forum-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
    <link href="css/header-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
    <link href="css/footer-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Login</title>
  </head>
  <body style = "margin-bottom: 0px">
    <div class = "topnav">
      <div class = "top">
        <div class = "top-left">
          <div class = "top-left-me ">
            <a href="index.php">HOME</a>
          </div>
          <div class = "top-left-me front">
            <a href="login.php">LOGIN</a>
          </div>
          <div class = "top-left-me ">
            <a href="organization.php">ORGANIZATIONS</a>
          </div>
          <div class = "top-left-me ">
            <a href="MainAttraction.php">EXPLORE</a>
          </div>
          <div class = "top-left-me ">
            <a href="news.php">NEWS</a>
          </div>
          <div class = "top-left-me ">
            <a href="forum.php">FORUM</a>
          </div>
        </div>
        <div class = "top-right">
          <div class = "top-right-me">
            Wildvenger Malaysia
          </div>
        </div>
      </div>
    </div>
    <div class="login">
      <h1>Login In Page</h1>
      <div class="container-log">
        <form action="php/login-parse.php" method="post">
        <p class="logUsername">
          <label for="inputName">Username<sup>*</sup></label>
          <input type="text" name="username" placeholder="Username">
        </p>
        <p class="logPassword">
          <label for="inputMessage">password<sup>*</sup></label>
          <input type="password" name="password" placeholder="Password">
        </p>
        <p>
          <button class='submitButton' type="submit">Login</button>
          <button class="resetButton" name="reset" type="reset">Reset</button>
        </p>
        </form>
        <hr>
        <?php echo "<a class='regNow' href='php/register.php'>Register now</a>"; ?>
        <hr>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer">
      <p>Wildvenger</p>
    </div>
  </footer>
</html>
