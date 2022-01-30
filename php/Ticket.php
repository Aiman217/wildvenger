<!DOCTYPE html>
<html lang="en" style="background-image: url(https://i.pinimg.com/originals/be/2a/94/be2a940c4ac312bf5abc0aa9677749de.jpg);">
    <head>
      <meta charset="UTF-8">
      <meta class="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="../css/explore-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
      <link href="../css/header-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
      <link href="../css/footer-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <title>Ticket</title>
    </head>

    <!--The body of the page-->
    <body>
      <?php require "../php/header.php" ?>
      <div class="main">

        <!--Tile of the page-->
        <a class="bar page-name ">PROMOTION</a>

        <!--Moving slides of available visiting place-->
        <div class="slideshow-container2">
            <div class="mySlides2 fade">
              <img src="../image/langkawiwildlife.jpeg" style="width:100%">
            </div>
            <div class="mySlides2 fade">
              <img src="../image/farminthecity.jpeg" style="width:100%">
            </div>
            <div class="mySlides2 fade">
              <img src="../image/sunwaylagoonwildlife.jpeg" style="width:100%">
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
              var slides = document.getElementsByClassName("mySlides2");
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

        <!--Information and buy tickets-->
        <div class="border  col-90">
          <div class="placebox2  col-80">
            <p class="title-t">
              Zoo Negara
            </p>
            <p class="exp-t">
                Zoo Negara Malaysia is run by The Malaysian Zoological Society, a non-governmental organization. Zoo Negara first opened its doors on November 14, 1963, and has since grown to become a famous zoo all over the world.
                Over 5137 specimens are housed in the zoo, representing 476 species of mammals, birds, reptiles, amphibians, and fish. Zoo Negara is a 110-acre park located about 5 kilometers outside of Kuala Lumpur.
                Over the years, the zoo has evolved into an outdoor event zoo, with over 90% of its species housed in vast exhibits with landscapes that reflect their natural habitat.
                Planning to visit this special zoo? Discover how to book the best Zoo Negara tickets, tips and suggestions for a remarkable visit, and much more.
            </p>
            <p class="exp2-t font-exp2-t">
                • Make your way to Zoo Negara, Malaysia's famous National Zoo, located merely 5 kilometers from the city of Kuala Lumpur.
            </p>
            <p class="exp2-t font-exp2-t">
                • Spread across a lavish 110-acre plot, this is your chance to reconnect and feel at peace with nature.
            </p>
            <p class="exp2-t font-exp2-t">
                • Stroll your way across the various zones, waving at 476 species of mammals, birds, reptiles, amphibians, and fish (a total of 5000+ animals).
            </p>
            <p class="exp2-t font-exp2-t">
                • Traipse through Panda Centre, Reptile House, the Bear Complex, the Savannah Walk, and the Mammal Kingdom, discovering more about each species.
            </p>
            <p class="exp2-t font-exp2-t">
                • Don't miss out on visiting Malaysia's famous and adorable giant pandas at the Conservation Centre, Xing Xing, and Lang Lang.
            </p>
            <p class="exp2-t font-exp2-t">
                • Additionally, enjoy shows, performances, and animal feedings that take place throughout the zoo to make your animal encounter worthwhile.
            </p>

            <div class="green2 col-90">
                <p class="buy">Buy Tickets</p>
                <div class="buy-item col-70">
                  <div class="columnB ">
                    <p class="exp2-t font-exp2-t">
                      Malaysia Adult
                    </p>
                    <p class="exp2-t font-exp2-t right">
                      RM 37.00
                    </p>
                    <input type="number" class="right" min="0" max="50"></button>
                  </div>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Malaysia Child
                    </p>
                    <p class="exp2-t font-exp2-t right">
                      RM 15.00
                    </p>
                    <input type="number" min="0" max="50" class="right"></button>
                  </div>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Non-Malaysia Adult
                    </p>
                    <p class="exp2-t font-exp2-t right">
                      RM 72.90
                    </p>
                    <input type="number" class="right" min="0" max="50"></button>
                  </div>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Non-Malaysia Child
                    </p>
                    <p class="exp2-t font-exp2-t right">
                      RM 37.00
                    </p>
                    <input type="number" class="right" min="0" max="50"></button>
                  </div>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Date
                    </p>
                    <input type="date" class="right" ></button>
                  </div>
                  <div class="columnB">
                    <p class="exp2-t font-exp2-t">
                      Email
                    </p>
                    <input type="text" class="right" ></button>
                  </div>
                </div>
                <div class="B">
                  <button class="button" onclick="window.location.href = '';"><span>Buy Now</span></button>
                </div>
            </div>
          </div>
        </div>
        <div class="B">
          <button class="button" onclick="window.location.href = 'index.html';"><span>Home</span></button>
        </div>
      </div>
    </body>
    <footer>
      <div class="footer">
        <p>Wildvenger</p>
      </div>
    </footer>
</html>
