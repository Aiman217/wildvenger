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
          if(isset($_POST['delete'])) {
              $title = $_POST['title'];
              echo $title;
              $Del_database = "DELETE * FROM  places WHERE Name=$title";
              mysqli_query($sql_connection,$Del_database);
              // header('Location: AddDeletePlace.php');
          }
        ?>
        <!--Delete and Add Places container-->
        <div class="border  col-90">
          <div class="placebox2  col-80">

          <!-- Delete Places -->
            <div class="columnR">
                <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Delete Place</p>
                <form method='POST'>
                  <div class="columnB">
                    <p  class="exp2-t font-exp2-t">
                      Attraction Place Name:
                    </p>
                    <input name="title" type="text" class="right" >
                  </div>
                  <div class="B"  style="padding-bottom: 30px;">
                    <button class="button" name="delete"><span>Submit</span></button>
                  </div>
                </form>
            </div>

            <?php
              $database = "SELECT * FROM places";
              $database_sent = mysqli_query($sql_connection,$database); 
              while($database_receive = mysqli_fetch_assoc($database_sent)) { 
                $plcID = $database_receive['PlaceID'];}
              if(isset($_POST['submit'])) {
                $place = $_POST['place'];
                $address = $_POST['addr'];
                $desc = $_POST['desc'];
                $mc = $_POST['mc'];
                $ma = $_POST['ma'];
                $nmc = $_POST['nmc'];
                $nma = $_POST['nma'];
                $img = $_FILES['img']['name'];
                $target = "images/".basename($img);
                $insert_database = "INSERT INTO places VALUES ('$plcID',' $place', '$MyNote','$desc','$ma','$mc','$nma','$nmc','$address','$img')";
                mysqli_query($sql_connection,$insert_database);
                // header('Location: Index.html');
            }   
            ?>
            <!-- Add New Places -->
            <div class="columnR">
                <p style="font-size: 40px;text-align: center;margin-left: auto;margin-right: auto;">Add New Place</p>
                <form method='POST'>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Attraction Place Name:
                    </p>
                    <input type="text" name="place" class="right" >
                  </div>
                  <div class="columnB">
                      <p class="exp2-t font-exp2-t">
                        Address:
                      </p>
                      <input type="text" name="address" class="right" >
                    </div>
                    <div class="columnB">
                        <p class="exp2-t font-exp2-t">
                          Informations:
                        </p>
                        <input type="text" name="desc" class="right" >
                      </div>
                      <div class="columnB">
                          <p class="exp2-t font-exp2-t">
                            Malaysia Child Price:
                          </p>
                          <input type="number" name="mc" style="width: 50px;" class="right"></button>
                        </div><br>
                        <div class="columnB">
                          <p class="exp2-t font-exp2-t">
                            Malaysia Adult Price:
                          </p>
                          <input type="number" name="ma" style="width: 50px;" class="right"></button>
                        </div><br>
                        <div class="columnB">
                          <p class="exp2-t font-exp2-t">
                            Non-Malaysia Child Price:
                          </p>
                          <input type="number" name="nmc" style="width: 50px;" class="right"></button>
                        </div><br>
                        <div class="columnB">
                          <p class="exp2-t font-exp2-t">
                            Non-Malaysia Adult Price:
                          </p>
                          <input type="number" name="nma" style="width: 50px;" class="right"></button>
                        </div>
                        <div class="columnB">
                          <p class="exp2-t font-exp2-t">
                            Image :
                          </p>
                          <input name="img" type="file" class="right"></button>
                        </div>
                  <div class="B"  style="padding-bottom: 30px;">
                    <button class="button" name="add"><span>Submit</span></button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <div class="B">
            <button class="button" onclick="window.location.href = 'ManagePage.php';"><span>Back</span></button>
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>

