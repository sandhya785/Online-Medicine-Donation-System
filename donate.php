<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Project &mdash; Medicine Donation</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<?php 
	include("navbar.php");
	include("engine.php");
	$u_email=$_SESSION['email'];
	$sql1="SELECT * from donor where email='$u_email'";
	$query1=mysqli_query($db,$sql1);
		if(mysqli_num_rows($query1)>0)
		      {
		          while($row=mysqli_fetch_assoc($query1)){
?>


		<section id="contact" class="bg-light">
		<div class="container">
			<div class="form-container">
				<div class="form-box">
					<h3>Donate<span class="text-primary"> Medicine</span></h3>
					<form method="POST">
						<div class="form-group">
							<label>Medicine Name</label>
							<input type="med-name" name="medicine_name" placeholder="Enter The Medicine's Name">
						</div>
						
						<input type="hidden" name="donor_id" value="<?php echo $row['donor_id'] ?>">

						

						<div class="form-group">
							<label>Manufactured By</label>
							<input type="med-name" name="manufactured_by" placeholder="Enter Manufactured Company Name">
						</div>
						<div class="form-group">
							<label>Donate To
							<select class="form-control" name="donate_to" required="required">
                                <option value="">--Select NGO--</option>

							<?php 
							include("config/config.php");
							$sql="SELECT * from receiver";
							$query=mysqli_query($db,$sql);
							if(mysqli_num_rows($query)>0)
							      {
							          while($rows=mysqli_fetch_assoc($query)){
							 ?>

                                <option><?php echo $rows['ngo_name']; }} ?></option>

                            
              </select></label>
						</div>
						<div class="form-group">
							<label>Mfg. Date</label>
							<input type="date" name="mfg_date">
						</div>
						<div class="form-group">
							<label>Exp. Date</label>
							<input type="date" name="exp_date">
						</div>
						<input type="submit" value="Donate" name="donation" class="contact-btn">
						<?php
		    	if(isset($_POST['donation'])){
					$sql2="SELECT * from receiver";
							$query2=mysqli_query($db,$sql2);
							if(mysqli_num_rows($query2)>0)
							      {
							          $ro=mysqli_fetch_assoc($query2);
							 

				$msg="E-mail:".$row['email']."\n Thankyou For Donating Medicine.";
				//set up mail
				$recipient=$row['email'];
				$subject="Donated Successfully";
				$mailheaders="From: Medicine Donation";

				//send the mail
				mail($recipient,$subject,$msg,$mailheaders);


				$msg1="E-mail:".$ro['email']."\n You have got donation.";
				//set up mail
				$recipient1=$ro['email'];
				$subject1="Medicine Donation";
				$mailheaders1="From: ".$row['email'];

				//send the mail
				mail($recipient1,$subject1,$msg1,$mailheaders1);

				}}}}

				?>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
