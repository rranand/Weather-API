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
              <li>
                <a>Services</a>
                <ul>
                  <li><a href="services.php">Subscrition APIs</a></li>
                  <li><a href="services.php">Free APIs</a></li>
                  <li><a href="services.php">Comparison Chart</a></li>
                </ul>
              </li>
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
            <!--<a href="SignIn/index.php" class="btn">Sign In</a>-->
          </div>
          
        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section pt-0 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12 templateux-overlap">
            <div class="row">
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="media block-icon-1 d-block text-left">
                  <div class="icon mb-3">
                    <img src="images/flaticon/svg/001-consultation.svg" alt="Image" class="img-fluid">
                  </div>
                  <div class="media-body">
                    <h3 class="h5 mb-4">Weather API</h3>
                    <p>Weather APIs are Application Programming Interfaces that allow you to connect to large databases of weather forecast and historical information.</p>
                    <p><a href="#"></a></p>
                  </div>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                <div class="media block-icon-1 d-block text-left">
                  <div class="icon mb-3">
                    <img src="images/flaticon/svg/002-discussion.svg" alt="Image" class="img-fluid">
                  </div>
                  <div class="media-body">
                    <h3 class="h5 mb-4">How APIs Work?</h3>
                    <p>API (Application Programming Interface) is the messenger that delivers requests to the provider that you’re requesting it from and then delivers the response back.</p>
                    <p><a href="#"></a></p>
                  </div>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                <div class="media block-icon-1 d-block text-left">
                  <div class="icon mb-3">
                    <img src="images/flaticon/svg/003-turnover.svg" alt="Image" class="img-fluid">
                  </div>
                  <div class="media-body">
                    <h3 class="h5 mb-4">Types of APIs</h3>
                    <p>REST is a commonly used API that is not dependent on a specific protocol. SOAP APIs that connects different platforms together. ASP.NET is a form of a REST API.</p>
                    <p><a href="#"></a></p>
                  </div>
                </div> <!-- .block-icon-1 -->
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section">

      <div class="container"  data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="mb-5">Features</h2>
            <div class="owl-carousel wide-slider">
              <div class="item">
                <img src="images/features.jpg" class="img-fluid">
              </div>
              <div class="item">
                <img src="images/features2.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
              </div>
              <div class="item">
                <img src="images/features3.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
              </div>
            </div> <!-- .owl-carousel -->
          </div>
          <div class="col-lg-5 pl-lg-5">
            <h2 class="mb-5"> </h2>

            <div class="accordion" id="accordionExample">


              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Cities</a>
                </h2>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Access current weather data for any location including all major cities in India.</p>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Subscriptions
                  </a>
                </h2>
                
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Available for both Free and paid subscriptions. Subscribed user will get access to premium features of APIs like weather predictions and hourly forecast of wethaer.</p>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Commercial Use
                  </a>
                </h2>
                
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>With commercial use our APIs has maximum accuracy. So, no worries!</p>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Simple
                  </a>
                </h2>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Our APIs are simple to access and use and in case of any queries you can contact us any time, we're here to help you.</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-section -->

  <div class="templateux-section pb-0">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2>Members</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/Ayush1.jpeg);">
            <a href="#" class="desc">
              <h3>Ayush Kumar</h3>
              <span>Information Technology</span>
              <div class="parag">
                <p>Roll Number: 212<br>
                	Semester: 5<br>
                Batch: D3</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/people1.jpg);">
           
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/gautam.jpg);">
            <a href="#" class="desc">
              <h3>Gautam Jha</h3>
              <span>Information Technology</span>
              <div class="parag">
                <p>Roll Number: 211<br>
                	Semester: 5<br>
                Batch: D3</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/rishabh.jpeg);">
            <a href="#" class="desc">
              <h3>Rishabh Acharya</h3>
              <span>Information Technology</span>
              <div class="parag">
                <p>Roll Number: 209<br>
                	Semester: 5<br>
                Batch: D3</p>
              </div>
            </a>
          </div>
        </div>
           <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/people.jpg);">
            
          </div>
        </div>
           <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/rohit.jpg);">
            <a href="#" class="desc">
              <h3>Rohit Anand</h3>
              <span>Information Technology</span>
              <div class="parag">
                <p>Roll Number: 203<br>
                	Semester: 5<br>
                Batch: D3</p>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  
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