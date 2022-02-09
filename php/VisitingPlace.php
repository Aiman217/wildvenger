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

        <br>
    
        <!--Places -->
        <div class="container">
          <?php 
            session_start();
            $sql_connection = mysqli_connect("localhost", "root",null,"promotion");
            $database = "SELECT * FROM places";
            $Count=0;
            $database_sent = mysqli_query($sql_connection,$database);
            while($database_receive = mysqli_fetch_assoc($database_sent)) {  
          ?>
          <div class="row">

            <!-- Display each place in the edatabase -->
            <div class="column" style="column-count=2;">
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
                  <button class="button"><span>More Info</span></button>
                </div>
              </div>

              
            </div>
            <?php 
                if ($Count%2==0)
                  echo "<br";
              ?>
          </div>
          
          <?php $Count=$Count+1;}?>
          
        </div>
        <br>
        <div class="B">
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>