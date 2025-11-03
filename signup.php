<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<?php 
	include("navbar.php");
	 ?>

		<!-- <div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(image/2.jpg);">

		</div> -->
<div class="container-fluid">
	<h1><center>Register</center></h1>
<div class="row">
	<div class="col-lg-6">
	<section id="contact">
				<div class="form-box">
					<h3>For<span class="text-primary"> Donor</span></h3>
					<form method="POST" action="engine.php">
						<div class="form-group">
							<label for="first-name">First Name</label>
							<input type="text" name="first_name" placeholder="Enter Your First Name" required>
						</div>
						<div class="form-group">
							<label for="last-name">Last Name</label>
							<input type="text" name="last_name" placeholder="Enter Your Last Name" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" placeholder="Enter Your Address" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Enter Your Last Email" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="password" name="password" placeholder="Enter Your Password" required>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" id="password2" name="password2" placeholder="Confirm Password" required>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="number" name="phone" placeholder="Enter Your Phone Number" required>
						</div>
						<input type="submit" value="Sign Up" name="donor_sign_up" class="contact-btn" onclick="return Validate()">
					</form>
				</div>
	</section>
</div>

<div class="row">
	<div class="col-lg-6">
	<section id="contact">
				<div class="form-box">
					<h3>For<span class="text-primary"> Receiver</span></h3>
					<form method="POST" action="engine.php">
						<div class="form-group">
							<label for="ngo-name">NGO Name</label>
							<input type="text" name="ngo_name" placeholder="Enter Your NGO Name" required>
						</div>
						<div class="form-group">
							<label for="first-name">Registration No.</label>
							<input type="text" name="ngo_regd_no" placeholder="Enter Your Registration Number" required>
						</div>
						<div class="form-group">
							<label for="last-name">Address</label>
							<input type="text" name="address" placeholder="Enter Your Address" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Enter Your Email" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="password" name="password" placeholder="Enter Your Password" required>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" id="password2" name="password2" placeholder="Confirm Password" required>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="number" name="phone" placeholder="Enter Your Phone Number" required>
						</div>
						<input type="submit" value="Sign Up" name="receiver_sign_up" class="contact-btn" onclick="return Validate()">
					</form>
				</div>
	</section>
</div>

</div>
</div>
</body>
</html>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>