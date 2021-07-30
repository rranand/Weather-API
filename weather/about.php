<?php
    session_start();
    error_reporting(0);
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Weather API</title>
  <link rel="stylesheet" href="css/style.css">
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
    
    <div class="templateux-cover" style="background-image: url(images/hero_1.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1 text-center mx-auto">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">About Us</h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Weather API is a team of IT students and that has been practising Web Technology. Weather API provides historical, current and forecasted weather data via light-speed APIs.</p>
            
          </div>
          
        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col-12">
            <h2>Happy Customers</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 testimonial-wrap">
            <div class="quote">&ldquo;</div>
            <div class="owl-carousel wide-slider-testimonial">
              <div class="item">
                <blockquote class="block-testomonial">
                  <p>&ldquo;Honestly, you can't really go wrong with using either API for predicting future weather forecasts, but Weather API provides accurate data for slightly longer time ranges. &rdquo;</p>
                  <p><cite>Random Person</cite></p>
                </blockquote>
              </div>

              <div class="item">
                <blockquote class="block-testomonial">
                  <p>&ldquo;Weather API is truely amazing, their paid versions are even better. One should definitely try this.&rdquo;</p>
                  <p><cite>Random Person</cite></p>
                </blockquote>
              </div>

              <div class="item">
                <blockquote class="block-testomonial">
                  <p>&ldquo;One can surely go with Weather API. It great, no doubt!&rdquo;</p>
                  <p><cite>Random Person</cite></p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .templateux-section -->

    

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

</body>
</html>