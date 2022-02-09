<!DOCTYPE html>
<html lang="en" style="background-image: url(https://i.pinimg.com/originals/be/2a/94/be2a940c4ac312bf5abc0aa9677749de.jpg);">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WILDVENGER MALAYSIA</title>
        <link rel="stylesheet"href="css/style.css"type="text/css">
    </head>

    <!-- Navigation bar-->
    <div class="bar-navi">
        <a href="#" class="bar-item">WILDVENGER MALAYSIA</a>
    </div>

    <?php 
      session_start();
      $sql_connection = mysqli_connect("localhost", "root",null,"anivenger");
      $Count=0;
      $p1=1;
      $p2=2;
      $p3=4;
      // $p1=$_SESSION['place1'];
      // $p2=$_SESSION['place2'];
      // $p3=$_SESSION['place3'];
      $database1 = "SELECT * FROM places WHERE Name='$p1'";
      $database_sent1 = mysqli_query($sql_connection,$database1);
      $database_receive1 = mysqli_fetch_assoc($database_sent1);
      $database2 = "SELECT * FROM places WHERE Name=$p2";
      $database_sent2 = mysqli_query($sql_connection,$database2);
      $database_receive2 = mysqli_fetch_assoc($database_sent2);
      $database3 = "SELECT * FROM places WHERE Name=$p3";
      $database_sent3 = mysqli_query($sql_connection,$database3);
      $database_receive3 = mysqli_fetch_assoc($database_sent3)
    ?>
    <!--The body of the page-->
    <body>
      <div class="main">

        <!--Tile of the page-->
        <a class="bar page-name ">PROMOTION</a>

        <!--Moving slides of available visiting place-->
        <div class="slideshow-container">
          <div class="mySlides fade">
            <img src="images/langkawiwildlife.jpeg" style="width:100%">
            <div class="text"><?php echo $database_receive1['Name'];?></div>
            <div class="text1">Ticket Price : RM <?php echo $database_receive1['Mal_Child_Price'];?>.00 - RM <?php echo $database_receive1['NM_Adult_Price'];?>.00</div>
          </div>
          <div class="mySlides fade">
            <img src="images/farminthecity.jpeg" style="width:100%">
            <div class="text"><?php echo $database_receive2['Name'];?></div>
            <div class="text1">Ticket Price : RM <?php echo $database_receive2['Mal_Child_Price'];?>.00 - RM <?php echo $database_receive2['NM_Adult_Price'];?>.00</div>
          </div>
          <div class="mySlides fade">
            <img src="images/sunwaylagoonwildlife.jpeg" style="width:100%">
            <div class="text"><?php echo $database_receive3['Name'];?></div>
            <div class="text1">Ticket Price : RM <?php echo $database_receive3['Mal_Child_Price'];?>.00 - RM <?php echo $database_receive3['NM_Adult_Price'];?>.00</div>
          </div>
        </div>

        <br>
          
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        <script>
          var slideIndex = 0;
          showSlides();
           
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
        </script>

        <br>
        
        <!--Attraction Places -->
        <div class="container">
          <?php 
            $database = "SELECT * FROM places";
            $Count=0;
            $database_sent = mysqli_query($sql_connection,$database);
            while($database_receive = mysqli_fetch_assoc($database_sent)) {  
          ?>
          <script>
             x = <?php $I ?>;
             imgs = document.getElementById("i");
            i.src = x;
          </script>
          <div class="row">

            <!-- Display each place in the edatabase -->
            <div class="column">
              <div class="placebox">
                <?php echo "<img style='width:100%;' src='images/".$database_receive['Image']."' >"; ?>
                <p class="title">
                  <?php echo $database_receive['Name'];?>
                </p>
                <p class="exp">
                  <?php echo $database_receive['Short_Desc'];?>
                </p>
                <p class="price">
                  RM <?php echo $database_receive['Mal_Child_Price'];?>
                   - 
                  RM <?php echo $database_receive['NM_Adult_Price'];?>
                </p>
                <div class="B">
                  <?php $_SESSION['get_id']= $Count ?> 
                  <button class="button" id ='$Count' onclick="window.location.href = 'Ticket.php';"><span>More Info</span></button>
                </div>
              </div>
            </div>

          </div>
          <?php 
            $Count=$Count+1;
            if($Count==3){
              break;
            }
          }?>
        </div>
        <br>
        <div class="B">
          <button class="button" onclick="window.location.href = 'VisitingPlace.php';"><span>See More</span></button>
        </div>

        <!--Voucher-->
        <div class="green">
          <p class="voucher">VOUCHERS</p>
          <div class="container">
          <?php 
            $database = "SELECT * FROM voucher";
            $Count=0;
            $database_sent = mysqli_query($sql_connection,$database);
            while($database_receive = mysqli_fetch_assoc($database_sent)) {  
          ?>
            <div class="row">
              <div class="columnC">
              <?php echo "<img style='width:100%;' src='images/".$database_receive['Image']."' >"; ?>
                <div class="B">
                  <button class="button" onclick="window.location.href = 'MainVoucher.php';"><span>Claim</span></button>
                </div>
              </div>
            </div>

            <?php }?>

          </div>
        </div>
      </div>
      <div class="B">
        <button class="button" onclick="window.location.href = 'ManagePage.php';"><span>Manage Page</span></button>
      </div>
    </body>
</html>