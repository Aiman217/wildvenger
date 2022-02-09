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
    <body onload='generateQRCode()'>
      <div class="main">

        <!--Tile of the page-->
        <a class="bar page-name ">PROMOTION</a>

        <?php
          $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
          $serial = '';
              
          for ($i = 0; $i < 10; $i++) {
            $serial .= $tokens[rand(0, 35)];
           }
        ?>
        <!--Receipt-->
        <div class="border  col-90">
          <div class="placebox2  col-80">
            <div class="columnB" style="display: flex;text-align: center;">
              <h1>Scan QR Code to get the voucher Serial Number</h1>
            </div>
            <div class="columnB" style="display: flex;">
              <p id="qr-result"></p>
              <canvas id="qr-code"></canvas>
            </div><br>
            <div class="columnB" style="font-family: 'Times New Roman'; font-weight:bold; font-size: 10px;display: flex;text-align: center;">
              <h1>Serial Number Voucher : </h1>
              <h1 id="qr-text" ><?php echo $serial; ?></h1>
            </div>
            <div class="columnB" style="font-family: 'Times New Roman'; font-weight:bold; font-size: 10px;display: flex;text-align: center;">
              <h1>Place : Zoo Negara</h1>
            </div>
            <div class="columnB" style="font-family: 'Times New Roman'; font-weight:bold; font-size: 10px;display: flex;text-align: center;">
              <h1>Discount : 50%</h1>
            </div>
            <div class="columnB" style="font-family: 'Times New Roman'; font-weight:bold; font-size: 10px;display: flex;text-align: center;">
              <h1>Type : Entrance Discount</h1>
            </div>
            <?php
              $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
              $serial = '';
              
              for ($i = 0; $i < 10; $i++) {
                $serial .= $tokens[rand(0, 35)];
              }
            ?>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
              <script>
                  /* JS comes here */
                  var qr;
                  (function() {
                          qr = new QRious({
                          element: document.getElementById('qr-code'),
                          size: 200,
                      });
                  })();
                  
                  function generateQRCode() {
                      var qrtext = <?php echo $serial; ?>;
                      document.getElementById("qr-result").innerHTML = "QR code for " + qrtext +":";
                      alert(qrtext);
                      qr.set({
                          foreground: 'black',
                          size: 200,
                          value: qrtext
                      });
                  }
              </script>
          </div>
        </div>
        <div class="B">
          <button class="button" onclick="window.location.href = 'MainAttraction.php';"><span>Home</span></button>
        </div>
      </div>
    </body>
</html>
