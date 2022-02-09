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

    <!--The body of the page-->
    <body>
      <div class="main">

        <!--Tile of the page-->
        <a class="bar page-name ">PROMOTION</a>

        <?php 
            session_start();
            $id = 400001;
            $sql_connection = mysqli_connect("localhost", "root",null,"promotion");
            $database = "SELECT * FROM voucher";
            $Count=0;
            $database_sent = mysqli_query($sql_connection,$database);
            $database_receive = mysqli_fetch_assoc($database_sent);
            while($database_receive = mysqli_fetch_array($database_sent)){
        ?>
        <!--Information and buy tickets-->
        <div class="border  col-90">
            <div class="placebox2  col-80">
              <p class="title-t">
              <?php echo $database_receive['Name'];?>
              </p>
              <div class="">
                <div class="v-plain"  style="margin-left: 60px; width: 400px; height: auto;">
                <?php echo "<img style='width:100%;' src='images/".$database_receive['Image']."' >"; ?>
                </div><br>
                <div class="columnC-v">
                    <p class="exp2-t font-exp2-t" style="font-weight: bold;">
                       Type: 
                    </p>
                    <p class="exp2-t font-exp2-t">
                    <?php echo $database_receive['Type'];?>
                    </p>
                    <p class="exp2-t font-exp2-t" style="font-weight: bold;">
                       Description: 
                    </p>
                    <p class="exp2-t font-exp2-t">
                    <?php echo $database_receive['Description'];?>
                    </p>
                    <p class="exp2-t font-exp2-t" style="font-weight: bold;">
                       Discount: 
                    </p>
                    <p class="exp2-t font-exp2-t">
                    <?php echo $database_receive['Discount'];?> %
                    </p>
                </div>
              </div>
              <div class="green2 col-90">
                <p class="buy">Claim Voucher !</p>
                <div class="buy-item col-70">
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Name:
                      </p>
                      <input type="text" class="right" style="width: 230px;"></button>
                    </div>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Email:
                    </p>
                    <input type="text" class="right" ></button>
                  </div>
                </div>
                <div class="B">
                  <button class="button" onclick="window.location.href = 'Voucher.php';"><span>Buy Now</span></button>
                </div>
            </div>
            </div>
          </div><?php } ?>
          <div class="B">
            <button class="button" onclick="window.location.href = 'index.html';"><span>Home</span></button>
          </div>
      </div>
    </body>
</html>