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
          $sql_connection = mysqli_connect("localhost", "root",null,"promotion");
          $database = "SELECT * FROM `receipt` WHERE ReceiptID=(SELECT MAX(ReceiptID) FROM `receipt`)";
          $database_sent = mysqli_query($sql_connection,$database); 
          $database_receive = mysqli_fetch_assoc($database_sent);
        ?>
        <!--Receipt-->
        <div class="border  col-90">
          <div class="placebox2  col-80">
            <div class="columnR">
              <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Receipt</p>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Receipt ID :  </p>
                <p  style="font-family: 'Times New Roman';font-size: 20px;">
                <?php echo $database_receive['ReceiptID'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Name :  </p>
                <p  style="font-family: 'Times New Roman';font-size: 20px;">
                <?php echo $database_receive['Name'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Address :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['Address'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Email :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['Email'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Attraction Place :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['PlaceID'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Date :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['Date'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Nationality :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['Nationality'];?></p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Adult :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['Quantity_Adult'];?>  person</p>
              </div><br>
              <div class="columnR2">
                <p  style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Child :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                  <?php echo $database_receive['Quantity_Child'];?> person</p>
              </div><br>
              <div class="columnR2">
                <p style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Total Price :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                    RM <?php echo $database_receive['Total'];?></p>
              </div><br>
              <div class="columnR2">
                <p style="font-family: 'Times New Roman'; font-weight:bold; font-size: 20px;">
                  Status Transaction :  </p>
                  <p  style="font-family: 'Times New Roman';font-size: 20px;">
                    Success</p>
              </div>
            </div>
          </div>
        </div>
        <div class="B">
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>


