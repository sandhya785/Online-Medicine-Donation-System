<?php $a='login';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Form</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<?php 
	include("navbar.php");
	include("engine.php");
	 ?>
	 <br>
	 
	 <div class="container-fluid">
	 	<h1><center>Login</center></h1>
<div class="row">
	<div class="col-lg-4">
	<section id="contact">		
				<div class="form-box">
					<h3>Donor<span class="text-primary"> Login</span></h3>
					<form method="POST">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Enter Your Email" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Enter Your Password" required>
						</div>
						<input type="submit" value="Login" name="donor_login" class="contact-btn">
						<center><a href="#">Forgot Password?</a></center>
					</form>				
		</div>
	</section>
	</div>

	<div class="col-lg-4">
	<section id="contact">		
				<div class="form-box">
					<h3>Receiver<span class="text-primary"> Login</span></h3>
					<form method="POST">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Enter Your Email" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Enter Your Password" required>
						</div>
						<input type="submit" name="receiver_login" value="Login" class="contact-btn">
						<center><a href="#">Forgot Password?</a></center>
					</form>				
		</div>
	</section>
	</div>

	<div class="col-lg-4">
	<section id="contact">		
				<div class="form-box">
					<h3>Admin<span class="text-primary"> Login</span></h3>
					<form method="POST">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Enter Your Email" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Enter Your Password" required>
						</div>
						<input type="submit" name="admin_login" value="Login" class="contact-btn">
					</form>				
		</div>
	</section>
	</div>
	<?php
							 if(isset($_POST['email'])){
							 		email();
							 }
							 function email(){
							 	$email=$_POST['email'];
							 	$msg="Email:".$_POST['email']."\n Your are logged in sucessfully.";
							 	$recipient=$email;
							 	$subject="Login successfull";
							 	$mailheaders="From: My website <mahima.dangol56@gmail.com>\n";
							 	$mailheaders.="Reply-To: ".$_POST['email'];

							 	//mail send
							 	mail($recipient,$subject,$msg,$mailheaders);
							 }
						?>
	</div>
</body>
</html>