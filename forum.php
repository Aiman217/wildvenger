<?php
  session_start();
  include("php/connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
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
       <title>Forum</title>
    </head>
    <body>
      <div class = "topnav">
        <div class = "top">
          <div class = "top-left">

            <div class = "top-left-me ">
              <a href="index.php">HOME</a>
            </div>
            <div class = "top-left-me ">
              <a href="organization.php">ORGANIZATIONS</a>
            </div>
            <div class = "top-left-me ">
              <a href="explore.php">EXPLORE</a>
            </div>
            <div class = "top-left-me ">
              <a href="news.php">NEWS</a>
            </div>
            <div class = "top-left-me front">
              <a href="forum.php">FORUM</a>
            </div>
            <div class = "top-left-me ">
              <a href="login.php">LOGIN</a>
            </div>
          </div>
          <div class = "top-right">
            <div class = "top-right-me">
              Wildvenger
            </div>
          </div>
        </div>
      </div>
      <div class="container-comment">
        <h1>Latest Comments</h1>
        <div class="comments">
          <?php
            $sql ="SELECT * FROM forum ORDER BY msgID DESC";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)){
                echo "<p class='printUsername'>";
                $tempNum = $row['FK_userID'];
                $sql_2 ="SELECT * FROM users WHERE userID = $tempNum";
                $result_2 = mysqli_query($link, $sql_2);
                if (mysqli_num_rows($result_2) > 0){
                  while ($row_2 = mysqli_fetch_assoc($result_2)){
                    echo "&nbsp;&nbsp;".$row_2['username'];
                  }
                }
                $final_date = substr($row['date_time'], 0, -3); //ignore seconds from database
                echo " (".$final_date.")";
                echo "</p>";
                echo "<p class='printComment'>";
                echo "&nbsp;&nbsp;".$row['comment'];
                echo "</p>";
                echo "<hr>";
              }
            } else {
              echo "<p class='printNoComment'>";
              echo "&nbsp;&nbsp; No comments available. Add one now!";
              echo "</p>";
            }
          ?>
        </div><!--End comments-->
        <div class="submit-comment">
          <h1 id="comment_user"><?php echo "Username: ".$_SESSION['current_user']; ?></h1>
          <form action="php/comment-parse.php" method="post">
            <textarea type="text" id="comment" name="comment" placeholder="Write a comment"></textarea>
            <button class='submitButton' type="submit">Add Comment</button>
            <button class="resetButton" name="reset" type="reset">Reset</button>
          </form>
        </div><!-- End submit-comment -->
      </div><!--End container-comment -->
    </body>
    <footer>
      <div class="footer">
        <p>Wildvenger</p>
      </div>
    </footer>
</html>
