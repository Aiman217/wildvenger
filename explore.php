<!DOCTYPE html>
<html lang="en" style="background-image: url(https://i.pinimg.com/originals/be/2a/94/be2a940c4ac312bf5abc0aa9677749de.jpg);">
    <head>
      <link rel="icon" type="image/png" sizes="16x16" href="photos/favicon.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta charset="UTF-8">
        <meta class="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/explore-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
        <link href="css/header-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
        <link href="css/footer-style.css?t=[timestamp]" type="text/css" rel="stylesheet">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>Explore</title>
    </head>

    <!--The body of the page-->
    <body>
      <div class = "topnav">
        <div class = "top">
          <div class = "top-left">
            <div class = "top-left-me ">
              <a href="index.php">HOME</a>
            </div>
            <div class = "top-left-me ">
              <a href="login.php">LOGIN</a>
            </div>
            <div class = "top-left-me ">
              <a href="organization.php">ORGANIZATIONS</a>
            </div>
            <div class = "top-left-me front">
              <a href="explore.php">EXPLORE</a>
            </div>
            <div class = "top-left-me ">
              <a href="news.php">NEWS</a>
            </div>
            <div class = "top-left-me ">
              <a href="forum.php">FORUM</a>
            </div>
          </div>
          <div class = "top-right">
            <div class = "top-right-me">
              Wildvenger Malaysia
            </div>
          </div>
        </div>
      </div>
      <div class="main">

        <!--Tile of the page-->
        <a class="bar page-name ">PROMOTION</a>

        <!--Moving slides of available visiting place-->
        <div class="slideshow-container">
          <div class="mySlides fade">
            <img src="image/langkawiwildlife.jpeg" style="width:100%">
            <div class="text">Langkawi WildLife Park</div>
            <div class="text1">Ticket Price : RM 20.00 - RM 39.00</div>
          </div>
          <div class="mySlides fade">
            <img src="image/farminthecity.jpeg" style="width:100%">
            <div class="text">Farm In The City</div>
            <div class="text1">Ticket Price : RM 29.00 - RM 56.00</div>
          </div>
          <div class="mySlides fade">
            <img src="image/sunwaylagoonwildlife.jpeg" style="width:100%">
            <div class="text">Sunway Lagoon WildLife Park</div>
            <div class="text1">Ticket Price : RM 120.00 - RM 145.00</div>
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

        <!--Places -->
        <div class="container">
          <div class="row">
            <div class="column">
              <div class="placebox">
                <img class="imgs" src="image/langkawi1.jfif">
                <p class="title">
                  Langkawi Wildlife
                </p>
                <p class="exp">
                  A wildlife park with more than 150 different animal species inside.
                  Visitors can participate in feeding show and hilarious animal talk show.
                  The park has cafe and shopping area.
                </p>
                <p class="price">
                  RM 20 - RM 39
                </p>
                <div class="B">
                  <button class="button" onclick="window.location.href = 'php/Ticket.php';"><span>More Info</span></button>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="placebox">
                <img class="imgs" src="image/zoonegara1.jpg">
                <p class="title">
                  Zoo Negara
                </p>
                <p class="exp">
                  The zoo is located only 5km from the city centre of Kuala Lumpur.
                  See more than 5,137 animals from 476 species of animals.
                  Zoo Negara have two giant pandas, Xing Xing and Liang Liang at the zoo’s Panda Centre.
                </p>
                <p class="price">
                  RM 15 - RM 72.90
                </p>
                <div class="B">
                  <button class="button" onclick="window.location.href = 'php/Ticket.php';"><span>More Info</span></button>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="placebox">
                <img class="imgs" src="image/semenggoh1.jpg">
                <p class="title">
                  Semenggoh Wildlife
                </p>
                <p class="exp">
                  A habitat for the Orangutans and also a place for visitors to learn about the endangered rare species.
                  Semenggoh Nature Reserve is also a habitat for rare flora and fauna including
                  the giant squirrel, pigmy squirrel and more.
                </p>
                <p class="price">
                  RM 2 - RM 10
                </p>
                <div class="B">
                  <button class="button" onclick="window.location.href = 'php/Ticket.php';"><span>More Info</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="B">
          <button class="button" onclick="window.location.href = 'php/VisitingPlace.php';"><span>See More</span></button>
        </div>

        <!--Voucher-->
        <div class="green">
          <p class="voucher">VOUCHERS</p>
          <div class="container">
            <div class="row">
              <div class="columnC">
                <img class="v-plain" src="image/v50.png">
                <div class="B">
                  <button class="button" onclick="window.location.href = 'php/Voucher.php';"><span>Claim</span></button>
                </div>
              </div>
              <div class="columnC">
                <img class="v-plain" src="image/v30.png">
                <div class="B">
                  <button class="button" onclick="window.location.href = 'php/Voucher.php';"><span>Claim</span></button>
                </div>
              </div>
              <div class="columnC">
                <img class="v-plain" src="image/v15.png">
                <div class="B">
                  <button class="button" onclick="window.location.href = 'php/Voucher.php';"><span>Claim</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    <footer>
      <div class="footer">
        <p>Wildvenger</p>
      </div>
    </footer>
</html>
