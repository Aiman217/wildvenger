<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "anivenger");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload']))s {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
    $title= $_POST['title'];
  	$descrp = $_POST['descp'];
    $link= $_POST['link'];

  	// image file directory
  	$target = "photos/".basename($image);

  	$sql = "INSERT INTO berita (image, title, descp, link) VALUES ( '$image', 
                                                                    '$title', 
                                                                    '$descrp', 
                                                                    '$link')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    header("Location: index.php");
  }
  $result = mysqli_query($db, "SELECT * FROM berita");
?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NEWS</title>
        <link rel="stylesheet"href="css/news-style.css"type="text/css">
    </head>
    <body>
        
    <div class="topic">
        <h1>WILDVENGER MALAYSIA</h1>
        <h2 class="aaa">NEWS IN MALAYSIA</h2>
    </div>
    <div class="onoffswitch3">
        <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
        <label class="onoffswitch3-label" for="myonoffswitch3">
            <span class="onoffswitch3-inner">
                <span class="onoffswitch3-active">
                    <marquee class="scroll-text">the top 5 endangered animals are Malayan tiger, Malayan tapir, Bornean Orangutan, Asian Elephant and Black Shrew   <span class="glyphicon glyphicon-forward"></span> Please Save Our Animals!!!       <span class="glyphicon glyphicon-forward"></span>  Animals needed to be treated better!!!</marquee>
                    <span class="onoffswitch3-switch">BREAKING NEWS <span class="glyphicon glyphicon-remove"></span></span>
                </span>
                <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW BREAKING NEWS</span></span>
            </span>
        </label>
        <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
                Image: <input type="file" name="image"><br>
                Title: <input type="text" placeholder= "Title"name="title"><br>
                 Description: <input type="text" placeholder= "Description" name="descp"><br>
                Link: <input type="text" placeholder= "Link" name="link"><br>

                <button type="submit" name="upload">submit</button>
        </form>
        </div>
    </body>
</html>