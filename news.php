<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NEWS</title>
        <link rel="stylesheet"href="css/style.css"type="text/css">
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


    <?php 
    session_start();
    $sql = mysqli_connect("localhost", "root", "", "news");
    $database = "SELECT * FROM berita";
    $result= mysqli_query($sql,$database);
     ?>

<?php while ($row = mysqli_fetch_array($result)) { ?>
    <div class="card">
      	<?php echo "<img src='photos/".$row['image']."' >"; ?>
        <div class="title">
      	<h2><?php echo $row['title']; ?></h2>
          <div class="description">
        <p><?php echo $row['descp']; ?></p>
        <div class="link">
        <a href= "<?php echo $row['link']; ?>"> <button class="button1">Read More...</button> </a>
    </div>
    </div>
    </div>
    </div>
<?php } ?>

<div class="button2">
<a href="uploadimage.php"> Upload News</a>
</div>
    </body>
</html>
