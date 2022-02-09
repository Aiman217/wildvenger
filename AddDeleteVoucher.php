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
          $sql_connection = mysqli_connect("localhost", "root",null,"anivenger");
          $database = "SELECT * FROM voucher";
          $database_sent = mysqli_query($sql_connection,$database); 
        ?>
        <!--Receipt-->
        <div class="border  col-90">
          <div class="placebox2  col-80">
            
            <!-- Display information from the database -->
            <div class="columnR">
              <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Voucher Data</p>
              <div class="columnB">
                <p class="exp2-t font-exp2-t" style="font-weight: bold;">
                  Voucher ID &emsp;&emsp; Quantity &emsp;&emsp; Discount &emsp;&emsp; Place Name
                </p>
              </div><br>
              
              <?php while($database_receive = mysqli_fetch_assoc($database_sent)) { 
                $VcID = $database_receive['VoucherID'];?>
              <div class="columnB">
                <p class="exp2-t font-exp2-t">
                <?php echo $database_receive['VoucherID'];?> &emsp;&emsp;&emsp;&emsp;
                <?php echo $database_receive['Quantity'];?>&emsp;&emsp;&emsp;&emsp;&emsp;
                <?php echo $database_receive['Discount'];?>&emsp;&emsp;&emsp;&emsp;
                <?php echo $database_receive['Name'];?>
                </p>
              </div><br>
              <?php }?>
              
            </div>
            
            <!-- Delete vouchers -->
            <?php
              if(isset($_POST['delete'])) {
                $title = $_POST['VID'];
                $Del_database = "DELETE FROM  voucher WHERE Name=$title";
                mysqli_query($sql_connection,$Del_database);
                echo '<script>alert("Delete Voucher Successful !")</script>';
              }
            ?>
            <div class="columnR">
              <form method='POST'>    
                <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Delete Voucher</p>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Voucher ID:
                  </p>
                  <input type="text" class="right" name="VID">
                </div>
                <div class="B"  style="padding-bottom: 30px;">
                  <button name="delete" class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Submit</span></button>
                </div>
              </form>
            </div>

            <!-- Add new vouchers -->
            <?php
              if(isset($_POST['submit'])) {
                  $Count=$Count+1;
                  $VcID = $VcID +1;
                  $Name = $_POST['Name'];
                  $desc = $_POST['desc'];
                  $type = $_POST['type'];
                  $discount = $_POST['Discount'];
                  $quan = $_POST['quantity'];
                  $img = $_FILES['img']['name'];
                  $target = "images/".basename($img);
                  $insert_database = "INSERT INTO voucher VALUES ('$VcID','$Name', '$discount', '$type', '$desc', '$quan', '$img')";
                  mysqli_query($sql_connection,$insert_database);
                  $_SESSION['count']=$Count;
                  echo '<script>alert("Add New Voucher Successful !")</script>';
              }   
            ?>
            <form method='POST'> 
              <div class="columnR">
                <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Add New Voucher</p>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Place Name:
                  </p>
                  <input name="Name" type="text" class="right" >
                </div>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Description:
                  </p>
                  <textarea name="desc" type="text" class="right"style="width:400px; height:200px;" ></textarea>
                </div>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Type:
                  </p>
                  <select name="type" required>
                    <option value="" disabled selected>Choose voucher type...</option>
                    <option value="Parking Discount">Parking Discount</option>
                    <option value="Entrance/Ticket Discount">Entrance/Ticket Discount</option>
                  </select>
                </div>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Discount (%):
                  </p>
                  <input name="Discount" type="number"style="width: 50px;" class="right"></button>
                </div>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Quantity:
                  </p>
                  <input name="quantity" type="number"style="width: 50px;" class="right"></button>
                </div>
                <div class="columnB">
                  <p class="exp2-t font-exp2-t">
                    Image:
                  </p>
                  <input name="img" type="file" class="right"></button>
                </div>
                <div class="B"  style="padding-bottom: 30px;">
                  <button name="submit" class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Submit</span></button>
                </div>
              </div>
            </form> 

          </div>
        </div>
        <div class="B">
            <button class="button" onclick="window.location.href = 'ManagePage.php';"><span>Back</span></button>
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>
