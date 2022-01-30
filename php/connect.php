<?php
  // servername => localhost
  // username => root
  // password => empty
  // database name => anivenger
  $link = mysqli_connect("localhost", "root", "", "anivenger");

  if($link === false){
      echo ("ERROR: Could not connect. ". mysqli_connect_error());
  }

?>
