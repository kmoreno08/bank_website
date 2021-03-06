<!--KM_Bank Index.php-->
<?php
    //session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="scss/style.css" />
    <title>KM || Bank</title>
  </head>
  <body>
<div class="body-container">
    <div class="carousel">
      <button class="carousel__button carousel__button--left is-hidden">
        <i class="fas fa-angle-left fa-4x"></i>
      </button>
      <div class="carousel__track-container">
        <ul class="carousel__track">
          <li class="carousel__slide current-slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel1.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel2.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel3.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel4.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel5.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel6.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel7.jpg"
              alt=""
            />
          </li>
          <li class="carousel__slide">
            <img
              class="carousel__images"
              src="img/carousel-img/carousel8.jpg"
              alt=""
            />
          </li>
        </ul>
      </div>
      <button class="carousel__button carousel__button--right">
        <i class="fas fa-angle-right fa-4x"></i>
      </button>
        </div>

      
      <div class="carousel__nav">
        <button class="carousel__indicator current-slide"></button>
        <button class="carousel__indicator"></button>
        <button class="carousel__indicator"></button>
        <button class="carousel__indicator"></button>
        <button class="carousel__indicator"></button>
        <button class="carousel__indicator"></button>
        <button class="carousel__indicator"></button>
        <button class="carousel__indicator"></button>
      </div>
        

    <!-- Login -->
    <div class="loginbox">
      <i class="fas fa-user-circle fa-4x"></i>
      <h1>Login Here</h1>
      <form action="includes/login.inc.php" method="post">
        <p>Username</p>
        <input type="text" name="mailuid" placeholder="Enter Username" />
        <p>Password</p>
        <input type="password" name="pwd" placeholder="Enter Password" />
        <input type="submit" name="login-submit" value="Login" />
        <?php 
        if (isset($_GET["newpwd"])) {
          if($_GET["newpwd"] == "passwordupdated") {
            echo '<p class="signupsuccess">Your password has been reset!</p>';
          }
        }
        ?>
        <a href="signup.php">Not Enrolled? Sign Up Now.</a>
      </form>
    </div>

    <!--  //Section: Information Grid -->
   <div class="total-grid-container">
    <div class="grid-wrapper">
      <div class="grid-1-container">
        <div class="grid-pic-1"></div>
        <div class="grid-info-1">
          <h2>
            Stay prepared for this tax season
          </h2>
          <p>
            Check the tax center to see mailing dates and other important information.
          </p>
        </div>
        <div class="grid-button-1" onclick="location.href='http://localhost/KM_bank/index.php';">Learn more</div>
      </div>

      <div class="grid-break"></div>
      <div class="grid-2-container">
        <div class="grid-pic-2"></div>
        <div class="grid-info-2">
          <h2>
          Get access to cash for your business
          </h2>
          <p>
          Be ready for whatever comes your way with a KM Bank Business line of credit.
          </p>
        </div>
        <div class="grid-button-2" onclick="location.href='http://localhost/KM_bank/index.php';">Learn more</div>
      </div>

      <div class="grid-break"></div>
      <div class="grid-3-container">
        <div class="grid-pic-3"></div>
        <div class="grid-info-3">
          <h2>
            Its time to do Money
          </h2>
          <p>
            KM Bank, also a pioneer of commission-free investing, gives you more ways to make your money work harder.
          </p>
        </div>
          <div class="grid-button-3" onclick="location.href='http://localhost/KM_bank/index.php';">
          Learn more
          </div>
      </div>
    </div>


      <!-- News and stories grid -->
      <div class="news-grid-background">
      <div class="news-grid-container">

      <div class="news-title-wrapper">
        <h4>News and Stories</h4>
      </div>
        <div class="news-grid-wrapper">
          <div class="news-grid-1-container">
          <div class="news-grid-pic-1">
          </div>
          <div class="news-grid-info-1">
            <h2>
              What business leaders expect in 2020
            </h2>
      </div>
        </div>


        <div class="news-grid-2-container">
          <div class="news-grid-pic-2"></div>
          <div class="news-grid-info-2">
            <h2>
              The right type of credit for your business
            </h2>
          </div>
         
        </div>


        <div class="news-grid-3-container">
          <div class="news-grid-pic-3"></div>
          <div class="news-grid-info-3">
            <h2>
              Best places to travel in 2020
            </h2>
          </div>
         
        </div>
          

        <div class="news-grid-4-container">
          <div class="news-grid-pic-4"></div>
          <div class="news-grid-info-4">
            <h2>
              Which cryptocurrency is best for retirement?
            </h2>
          </div>
        </div>


        <div class="news-grid-5-container">
          <div class="news-grid-pic-5"></div>
          <div class="news-grid-info-5">
            <h2>
              Do you think your burning out? Here are 5 tips!
            </h2>
      </div>
        </div>

 

        <div class="news-grid-6-container">
          <div class="news-grid-pic-6"></div>
          <div class="news-grid-info-6">
            <h2>
              Why spending smart is the key to big savings
            </h2>
          </div>
        </div>

        </div>

      </div>
      </div>
      </div>
<?php
  require "footer.php";
?>