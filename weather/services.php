<?php
    session_start();
    error_reporting(0);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Servies</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_services.css">
</head>
<body>

  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">


    <header class="templateux-navbar" role="banner">

      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-3 templateux-logo">
            <a href="index.php" class="animsition-link">Weather API</a>
          </div>
          <nav class="col-9 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
                <a href="index.php" class="animsition-link">Home</a>
              </li>
              <li><a href="about.php" class="animsition-link">About</a></li>
              
              <li><a href="contact.php" class="animsition-link">Contact</a></li>
              <?php
                if (isset($_SESSION['username'])) {
                    ?>
                   <li><a href="SignIn/dashboard.php" class="animsition-link">Dashboard</a></li>
                    <li><a href="SignIn/logout.php" class="animsition-link">Logout</a></li>
                   <?php
                } else {
                ?>
                    <li><a href="SignIn/index.php" class="animsition-link">Login</a></li>
			        <li><a href="SignUp/index.php" class="animsition-link">Sign Up</a></li>
                <?php
                }
                ?>
            </ul> <!-- .templateux-menu -->

          </nav> <!-- .site-nav -->
          

        </div> <!-- .row -->
      </div> <!-- .container -->
    </header> <!-- .templateux-navba -->
    
    <div class="templateux-cover" style="background-image: url(images/weather.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">India's indigeneous <strong>API Provider</strong></h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Weather forecasts, nowcasts and history in fast and elegant way*.</p>
          
          </div>
          
        </div>
      </div>
    </div> <!-- .templateux-cover -->

 

  <div id="ourservices" class="templateux-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center mb-5">
          <h2>Our Services</h2>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/004-gear.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Current Weather Data</h3>
              <p>Access current weather data for any location including all major cities. Current weather is frequently updated based on global models and data JSON, XML, and HTML formats. Available for both Free and paid subscriptions</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/005-conflict.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Hourly Forecast 4 days</h3>
              <p>Hourly forecast is available for 4 days. Forecast weather data for 96 timestamps. Higher geographic accuracy JSON and XML formats. Available for Developer, Professional and Enterprise accounts</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/006-meeting.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Daily Forecast 16 days</h3>
              <p>16 day forecast is available at any location or city. 16 day forecast includes daily weather. JSON and XML formats. Available for all paid accounts.</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/007-brainstorming.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Climatic Forecast 30 days</h3>
              <p>Forecast weather data for 30 days. JSON format. The frequency of weather data update is 1 hour. Available for Developer, Professional and Enterprise accounts</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/001-consultation.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">5 Day / 3 Hour Forecast</h3>
              <p>5 day forecast is available at any location or city. 5 day forecast includes weather data every 3 hours. JSON and XML formats. Available for both Free and paid subscriptions</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/009-brainstorming-2.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Bulk Downloading</h3>
              <p>We provide number of bulk files with current weather and forecasts. Regular uploading weather data in JSON format. Current weather bulk is available for 209,000+ cities. Variety of hourly and daily forecast bulks depends on frequency of data updating. Available for Professional and Enterprise accounts.</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>

      </div>
      
    </div>
  </div> <!-- .templateux-section -->

</div> <!-- .templateux-section -->

<div class="body1">
    <div class="card">
      <h1>Current Weather Forecast</h1>
      <p>
        <li>
          Access current weather data for any location including over all major cities.
        </li>
        <li>
          Available for both Free and paid subscriptions.
        </li>
        <br>
        <button onclick="javascript:switchVisible1();" class="square_btn1"; style="align-self: center; text-align: center; width: 120px" >Get API</button>
      </p>

    
    </div>
    <div class="card">
      <h1>Hourly Forecast</h1>
      <p>
        <li>
          Hourly forecast is available for 4 days.
        </li>
        <li>
          Available for paid and unpaid accounts.
        </li>
        <br>
        <button onclick="javascript:switchVisible1();" class="square_btn1"; style="align-self: center; text-align: center; width: 120px" >Get API</button>
      </p>
    
    </div>
</div>

<div id="comparison" style="display: none;">
  <div class="parent">
    <div class="child"><h3>Startup</h3> 
    <p>
       <li>Free of Cost</li>
      <li>60 calls/minute</li>
      <li>Current weather Forecast</li>
      <br>
      <a href="#" class="square_btn">Generate API</a>
    </p>  
    </div>

    <div class="child"><h3>Developer</h3>
    <p>
      <li>₹2,000 monthly</li>
      <li>600 calls/minute</li>
      <li>Hourly weather Forecast</li>
      <br>
      <a href="https://onlinesbi.com" class="square_btn">Subscribe</a>

    </p>
  </div>

  <div class="child"><h3>Professional</h3>
    <p>
      <li>₹20,000 annual</li>
      <li>3,000 calls/minute</li>
      <li>Hourly weather Forecast</li>
      <br>
      <a href="https://onlinesbi.com" class="square_btn">Subscribe</a>
    </p>

  </div>
  
</div>
</div>


<footer class="templateux-footer bg-light">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-4 pr-md-5">
        <div class="block-footer-widget">
          <h3>About</h3>
          <p>Weather API is a team of IT students and that has been practising Web Technology. Weather API provides historical, current and forecasted weather data via light-speed APIs.</p>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Learn More</h3>
              <ul class="list-unstyled">
                <li><a href="#">How it works?</a></li>
                <li><a href="#">Useful Tools</a></li>        
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Support</h3>
              <ul class="list-unstyled">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help Desk</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>About Us</h3>
              <ul class="list-unstyled">
                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Connect With Us</h3>
              <ul class="list-unstyled block-social">
                <li><a href="https://www.fb.com" class="p-1"><span class="icon-facebook-square"></span></a></li>
                <li><a href="https://www.twitter.com" class="p-1"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.github.com" class="p-1"><span class="icon-github"></span></a></li>
              </ul>
            </div>
          </div>
        </div> <!-- .row -->
      </div>
    </div> <!-- .row -->

    <div class="row pt-5 text-center">
      <div class="col-md-12 text-center"><p>
        <script>document.write(new Date().getFullYear());</script> | Made with <i class="text-danger icon-heart" aria-hidden="true"></i> by <a href="https://www.mitaoe.ac.in/" target="_blank" class="text-primary">MITians</a>
      </p></div>
    </div> <!-- .row -->

  </div>
</footer> <!-- .templateux-footer -->

</div> <!-- .js-animsition -->

<script src="js/scripts-all.js"></script>
<script src="js/main.js"></script>

<script>
function switchVisible1() {
  var x = document.getElementById("comparison");
  if (x.style.display === "none") 
  {
    x.style.display = "block";
  } 
  else 
  {
    x.style.display = "none";
  }
}
</script>

</body>
</html>