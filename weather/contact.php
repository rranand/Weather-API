<?php
    session_start();
    include("php/classes.php");
    include("php/db.php");
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
    
    <div class="templateux-cover" style="background-image: url(images/slider-1.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1 text-center mx-auto">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">Contact us</h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Weather API is a team of IT students and that has been practising Web Technology. Weather API provides historical, current and forecasted weather data via light-speed APIs.</p>
            
          </div>
          
        </div>
      </div>
    </div> <!-- .templateux-cover -->



    <div class="templateux-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 pr-md-7 mb-5">
            <form id="frmContactus" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <p id="onwrong" style="color:red; margin-top:10px"></p>
                <input id="submit" type="submit" name="submit" class="btn btn-primary py-3 px-5" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-location-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">MIT Alandi(D), Pune</h3>
              </div>
            </div> <!-- .block-icon-1 -->

            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-telephone-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">+91 12345 75412</h3>
              </div>
            </div> <!-- .block-icon-1 -->

            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-email-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">mitaoe.maecomp.ac.in</h3>
              </div>
            </div> <!-- .block-icon-1 -->

          </div>
        </div> <!-- .row -->

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
<?php

    if (isset($_POST['submit'])) {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $db = new database();
            $cat = new contact($db->Connect());
            $cat->addDet($name, $email, $subject, $message);

            include('smtp/PHPMailerAutoload.php');
            $mail=new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->Port=587;
            $mail->SMTPSecure="tls";
            $mail->SMTPAuth=true;
            $mail->Username="rrohitanand3336@gmail.com";
            $mail->Password="gheqxhqxdpraeiih";
            $mail->setFrom('rrohitanand3336@gmail.com', 'Weather Team API');
            $mail->addAddress($email, $name);
            $mail->IsHTML(true);
            $mail->Subject = 'Contact Form Submitted';
            $mail->Body    = 'Hello '. $name . ', your query has been received. We will contact you shortly.<br><br>Thank You<br>Weather API Team';
            $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
            ));
            $mail->send();
        } else {
            echo '<script>
                var t = document.getElementById("onwrong");
                t.innerHTML = "Fill the form correctly!!!";
            </script>';
            die();
        }
    }
?>
</body>
</html>

