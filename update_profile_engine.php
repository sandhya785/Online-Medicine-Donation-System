<?php 
include("config/config.php");
if(isset($_POST['update_profile'])){
	global $donor_id,$first_name,$last_name,$phone,$address,$db;
	$donor_id=validate($_POST['donor_id']);
	$first_name=validate($_POST['first_name']);
	$last_name=validate($_POST['last_name']);
	$address=validate($_POST['address']);
	$phone=validate($_POST['phone']);
		$sql = "UPDATE donor SET first_name='$first_name',last_name='$last_name',phone='$phone',address='$address' WHERE donor_id='$donor_id'";
		$query=mysqli_query($db,$sql);
		if(!empty($query)){
			?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Information has been updated.</strong></center>
</div></div>


<?php
	}
}

 ?>