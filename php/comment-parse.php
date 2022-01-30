<?php
  session_start();
  include("../php/connect.php");

  if (!empty($_POST['comment'])) {
    $comment = $_POST['comment'];
    $userID = $_SESSION['current_userID'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $date_time = date("Y-m-d H:i:s");


    $sql = "INSERT INTO forum(comment, date_time, FK_userID)  VALUES ('$comment', '$date_time', '$userID')";
    if(mysqli_query($link, $sql)){
      header("location: ../forum.php");
    } else{
      echo "ERROR: Hush! Sorry $sql ".mysqli_error($link);
    }
  }
  else {
    header("location: ../forum.php");
  }
?>
