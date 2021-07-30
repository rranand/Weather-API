<?php
session_start();
include("../php/classes.php");
include("../php/db.php");
error_reporting(0);
?>

<?php
if (isset($_SESSION['username'])) {
    ?>
        <script>
           window.location = '../SignIn/dashboard.php';
        </script>
           <?php
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Weather API</title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assetsfg/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assetsfg/css/form-elements.css">
        <link rel="stylesheet" href="assetsfg/css/style.css">
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Weather</strong> API</h1>                            
                        </div>
                    </div>
                        <div class="col-sm-6 col-sm-offset-3 text">                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Forgot Password</h3>
	                            		<p>Enter username and email address to get password:</p>
	                        		</div>

	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="username">Username</label>
				                        	<input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                            <br>
                                            <input type="email" name="email" placeholder="Email Address" class="form-email form-control" id="form-email">
                                            <br>
				                        </div>
				                            <p id="onwrong" style="color:red; margin-top:10px"></p>
                                            <button type="submit" class="btn col-sm-5" name="submit">Submit</button>
                                            <br><br>
				                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>        
        <script src="assetsfg/js/jquery-1.11.1.min.js"></script>
        <script src="assetsfg/bootstrap/js/bootstrap.min.js"></script>
        <script src="assetsfg/js/jquery.backstretch.min.js"></script>
        <script src="assetsfg/js/scripts.js"></script>        
    </body>
</html>

<?php

    if (isset($_POST['submit'])) {
        if (isset($_POST['username']) && isset($_POST['email'])) {

            $email= $_POST['email'];
            $username = $_POST['username'];

            $db=new database();
            $log = new login($db->Connect());
            $data = $log->getPass($username, $email);

            if (mysqli_num_rows($data)==0) {
                echo '<script>
                    var t = document.getElementById("onwrong");
                    t.innerHTML = "Incorrect details provided!!!";
                </script>';
            } else {
                $data = mysqli_fetch_assoc($data);
                include('../smtp/PHPMailerAutoload.php');
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
                $mail->Subject = 'Password Recovery';
                $mail->Body    = 'Hello '. $data['name'] . ', Your password is <b>'. $data['password'] .'</b><br><br>Thank You<br>Weather API Team';
                $mail->SMTPOptions=array('ssl'=>array(
                    'verify_peer'=>false,
                    'verify_peer_name'=>false,
                    'allow_self_signed'=>false
                ));
                $mail->send();
                echo '<script>
                    var t = document.getElementById("onwrong");
                    t.innerHTML = "Password sent to your registered email id <a href="+"index.php"+">Click here to login</a>!!!";
                </script>';
            }
        } else {
            echo '<script>
                var t = document.getElementById("onwrong");
                t.innerHTML = "Invalid Data Provided!!!";
            </script>';
        }
    }
?>