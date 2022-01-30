<?php
  include("../php/connect.php");
  include("../php/functions.php");

  if (isset($_POST['username'])) {
    $username = $_POST['username'];
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
  $user_found = false;
  $user_pass = false;

  if ($username == "" || $password === ""){
    echo '<script>if(confirm("Username and password must be filled in. \\nPlease go back to previous page.")){ document.location.href = "../login.php"} </script>';
  } else {
    if (invalidUsername($username)){
      echo '<script>if(confirm("Username has invalid characters (Use only letters and numbers) \\nPlease go back to previous page.")){ document.location.href = "../login.php"} </script>';
    } else {
      if (!invalidPassword($password)){
        echo '<script>if(confirm("Password must contain atleast a digit, a lower case letter, an upper case letter, no blank space, a special character, between 8 to 19 character. \\nPlease go back to previous page.")){ document.location.href = "../login.php"} </script>';
      } else {
        session_start();

        $sql = "SELECT userID, username, password FROM users";

        $result = $link->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if ($row["username"] === "$username") {
              $user_found = true;
              if ($row["password"] === "$password") {
                $user_pass = true;
                $_SESSION['current_user'] = $row["username"];
                $_SESSION['current_userID'] = $row["userID"];
              }
            }
          }
        }
        if ($user_found == true) {
          if ($user_pass == true) {
            header("location: ../index.php");
          }
          else {
            echo '<script>if(confirm("Password is incorrect. \\nPlease go back to previous page.")){ document.location.href = "../login.php"} </script>';
          }
        } else {
          echo '<script>if(confirm("Username is not found \\nPlease go back to previous page.")){ document.location.href = "../login.php"} </script>';
        }
      }
    }
  }

?>
