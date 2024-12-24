<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
if(isset($_POST['submit']))
{
$bname=$_POST['bookingname'];
$btype=$_POST['packagetype'];	
$bmobile=$_POST['mobilenumber'];
$bemail=$_POST['emailaddress'];	
$bcomment=$_POST['comment'];

$sql="INSERT INTO Tblbooking(bookingName,PackageName,MobileNumber,UserEmail,Comment) VALUES(:bname,:btype,:bmobile,:bemail,:bcomment)";
$query = $dbh->prepare($sql);
$query->bindParam(':bname',$bname,PDO::PARAM_STR);
$query->bindParam(':btype',$btype,PDO::PARAM_STR);
$query->bindParam(':bmobile',$bmobile,PDO::PARAM_STR);
$query->bindParam(':bemail',$bemail,PDO::PARAM_STR);
$query->bindParam(':bcomment',$bcomment,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Package Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css"/>


</head>
<body bgcolor="#000000">
<div>
 &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" href="admin/login.php" style="color: white">Admin Login </a>  
 
<marquee class="marquee" direction="down" behavior="slide"   >
<h1 class="h1" align="center"   >       <img src="Ice_Fishing_logo.png" class="img"    / > ARIZZONA FISHING CLUB </h1></marquee>
</div>
				
						<div class="tab-pane active" id="horizontal-form">
							<form class="bform" name="package" method="post" enctype="multipart/form-data" style="color: white; padding: 20px; font-size: 30px;">
								<div class="form-group " >
									<label for="focusedinput" class="col-sm-2 control-label">Booking Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="bookingname" id="bookingename" required>
									</div>
								</div>
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagetype" id="packagename"  required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Mobile Number</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="mobilenumber" id="packageaccomodation"  required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="emailaddress" id="packageprice" 
									</div>
								</div>		
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Comment</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="comment" id="packageprice" ></textarea>
									</div>
								</div>	

															


								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="bttn">Create</button>

				<button  class="bttn" href="packages.php">Reset</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					<h3><a style="color: white;" href="packages.php"></a></h3>
					</form>






     
      

      
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php } ?>