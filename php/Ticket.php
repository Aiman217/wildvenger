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
            $database = "SELECT * FROM places";
            $Count=0;
            $database_sent = mysqli_query($sql_connection,$database);
            $database_receive = mysqli_fetch_assoc($database_sent);
            $Count=$Count+1;
            while ($database_receive = mysqli_fetch_array($database_sent)){
              if($database_receive['PlaceID']==$_SESSION['get_id']){
                $placeID = $database_receive['PlaceID'];
          ?>
        <!--Moving slides of available visiting place-->
        <div class="slideshow-container2">
            <div class="mySlides2 fade">
            <?php echo "<img style='width:100%;' src='images/".$database_receive['Image']."' >"; ?>
            </div>
        </div>
        <br>
         
        
        <!--Information and buy tickets-->
        <form method='POST'>
          <div class="border  col-90">
            <div class="placebox2  col-80">
              <p class="title-t">
                <?php echo $database_receive['Name'];?>
              </p>
              <p class="exp-t font-exp2-t">
                <?php echo $database_receive['Description'];?>
              </p><br>
              <p class="exp-t font-exp2-t">
                Address of the attraction place : 
              </p>
              <p class="exp2-t font-exp2-t">
                <?php echo $database_receive['Address'];?>
              </p><br>
              <div class="green2 col-90">
                  <p class="buy">Buy Tickets</p>
                  <div class="buy-item col-70">
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Name:
                      </p>
                      <input name="name" type="text" class="right" ></button>
                    </div>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Address:
                      </p>
                      <textarea name="address" type="text" class="right" style="width: 300px; height:50px;" ></textarea>
                    </div>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Account Number:
                      </p>
                      <input name="Account Number" type="text" maxlength="16" class="right" ></button>
                    </div>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Email:
                      </p>
                      <input name="email" type="text" class="right" ></button>
                    </div><br>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Nationality:
                      </p>
                    </div>
                    <select name="nationality" required>
                      <option value="" disabled selected>Choose nationality type...</option>
                      <option value="Malaysian">Malaysia</option>
                      <option value="Non Malaysia">Non-Malaysian</option>
                    </select><br>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Date :
                      </p>
                      <input name="date" type="date" class="right" ></button>
                    </div>
                    <div class="columnB ">
                      <p class="exp2-t font-exp2-t">
                        Malaysia Adult
                      </p>
                      <p class="exp2-t font-exp2-t right">
                        RM <?php $pma=$database_receive['Mal_Adult_Price'];
                        echo $pma; ?> :
                      </p>
                      <input  name="MA" value="0" type="number" class="right" style="width: 50px;" min="0" max="50"></button>
                    </div>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Malaysia Child
                      </p>
                      <p class="exp2-t font-exp2-t right">
                        RM <?php $pmc=$database_receive['Mal_Child_Price'];
                        echo $pmc;?> :
                      </p>
                      <input  name="MC" value="0" type="number" min="0" max="50" style="width: 50px;" class="right"></button>
                    </div>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Non-Malaysia Adult
                      </p>
                      <p class="exp2-t font-exp2-t right">
                        RM <?php $pnma=$database_receive['NM_Adult_Price'];
                        echo $pnma;?> : 
                      </p>
                      <input name="NMA" value="0" type="number" class="right" style="width: 50px;" min="0" max="50"></button>
                    </div>
                    <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Non-Malaysia Child
                      </p>
                      <p class="exp2-t font-exp2-t right">
                        RM <?php $pnmc=$database_receive['NM_Child_Price'];
                        echo $pnmc;?> :
                      </p>
                      <input  name="NMC" value="0" type="number" class="right" style="width: 50px;" min="0" max="50"></button>
                    </div>
                  </div>
                  <div class="B">
                    <button name="buy" class="button"  ><span>Buy Now</span></button>
                  </div>
              </div>
            </div>
          </div>
          <?php 
            }}?>
        </form>
        <?php
          if(isset($_POST['buy'])) {
            $Count=$Count+1;
            $Name = $_POST['name'];
            $Address = $_POST['address'];
            $email = $_POST['email'];
            $nationality = $_POST['nationality'];
            $date = $_POST['date'];
            if ($nationality=="Malaysian"){
              $ma = $_POST['MA'];
              $mc = $_POST['MC'];
              $pa = $pma;
              $pc = $pmc;
            }
            else{
              $ma = $_POST['NMA'];
              $mc = $_POST['NMC'];
              $pa = $pnma;
              $pc = $pnmc;
            }
            $total=$pa+$pc;
            $C=0;
            $Rid=0;
            $database = "SELECT * FROM receipt";
            $database_sent = mysqli_query($sql_connection,$database);
            $database_receive = mysqli_fetch_assoc($database_sent);
            while ($database_receive = mysqli_fetch_array($database_sent)){
              $Rid=$C;
              $C=$C+1;
            }
            $insert_database = "INSERT INTO receipt VALUES ('$Rid', '$placeID','$Name', '$Address', '$email', '$date', '$nationality', '$ma', '$mc', '$total')";
            mysqli_query($sql_connection,$insert_database);
            $_SESSION['count']=$Count;
            // echo '<script>alert("Add New Voucher Successful !")</script>';
            header('Location: receipt.php');
          }   
        ?>
        <div class="B">
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>