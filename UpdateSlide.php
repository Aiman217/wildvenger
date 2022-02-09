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

    <!--The body of the  page-->
    <body>
      <div class="main">

        <!--Tile of the page-->
        <a class="bar page-name ">PROMOTION</a>

        <?php 
          session_start();
          $sql_connection = mysqli_connect("localhost", "root",null,"anivenger");
          $database1 = "SELECT * FROM places";
          $Count=0;
          $_SESSION['place1']= 1;
          $_SESSION['place2']= 2;
          $_SESSION['place3']= 3;
          $place = array();
          $database_sent1 = mysqli_query($sql_connection,$database1);
          while($database_receive1 = mysqli_fetch_assoc($database_sent1)) {
            $place[$Count]=$database_receive1['Name'];
            $Count++;
          }
        ?>
        <!--Receipt-->
        <form method='POST'>
        <div class="border  col-90">
          <div class="placebox2  col-80">
            <div class="columnR">
              <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Update Slide</p>
              <div class="columnB">
                <p class="exp2-t font-exp2-t">
                  First Attraction Place:
                </p>
                <select name="Place1" required>
                  <option value="" disabled selected>Place...</option>
                  <?php for($i=0;$i<$Count;$i++){ ?>
                  <option value="$i"><?php echo $place[$i]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="columnB">
                <p class="exp2-t font-exp2-t">
                  Second Attraction Place:
                </p>
                <select name="Place2" required>
                  <option value="" disabled selected>Place...</option>
                  <?php for($i=0;$i<$Count;$i++){ ?>
                  <option value="$i"><?php echo $place[$i]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="columnB" style="padding-bottom: 15px;">
                <p class="exp2-t font-exp2-t">
                  Third Attraction Place:
                </p>
                <select name="Place3" required>
                  <option value="" disabled selected>Place...</option>
                  <?php for($i=0;$i<$Count;$i++){ ?>
                  <option value="$i"><?php echo $place[$i]; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="B"  style="padding-bottom: 30px;">
                <button name="update" class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Submit</span></button>
              </div>
            </div>
          </div>
        </div>
        </form>
        <?php
          if(isset($_POST['update'])) {
            $_SESSION['place1'] = $_POST['Place1'];
            $_SESSION['place2'] = $_POST['Place2'];
            $_SESSION['place3'] = $_POST['Place3'];
            header('Location: MainAttraction.php');
          }   
        ?>
        <div class="B">
            <button class="button" onclick="window.location.href = 'ManagePage.php';"><span>Back</span></button>
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>


