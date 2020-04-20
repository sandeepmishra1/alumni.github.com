<?php
session_start();

if (isset($_SESSION['useremail'])) {
	header('location:index.php');
}
include 'connection.php';
if (isset($_REQUEST['userlogin'])) {
	$useremail=$_REQUEST['useremail'];
	$userpass=$_REQUEST['userpassword'];
	
	$sql="SELECT * FROM user_register WHERE useremail='$useremail'";
	$run=mysqli_query($conn,$sql);

	if(mysqli_num_rows($run)>0){
		$password=mysqli_fetch_assoc($run);
		$db_password=$password['userpassword'];
		$db_name=$password['username'];
		$_SESSION['username']=$db_name;
		echo $_SESSION['username'];
		
		if ($db_password == $userpass) {
			
             $_SESSION['useremail']=$useremail;
             
			header('location:index.php');
		}
		else{
			$msg="*password not match*";
			// echo"<script>alert('wrong password');</script>";
			
			
		}
	}else{
			$msg1="*Invalid email id*";
			}
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>CET MCA</title>
	<!-- wow css start -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- end -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" /> 
	<!-- google fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
	<!-- end -->
	<!-- cdn link start -->

<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
	<!-- cdn end -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- cdn end -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
include 'top.php';
?>
	<div class="container-fluid login" >
		<h1 class="text-center font-weight-bold">login</h1>
		<p class="text-center font-italic ">Login and stay connected to your alumni community and alma mater</p>
		<div class="row">
			<div class="col-lg-5 sociallogin">
				<center><img src="image/undraw_personalization_triu.png"></center>
			</div>
	<div class="col-lg-7 loginsection">

				<center><img src="image/undraw_profile_pic_ic5t.png" class="img-fluid"></center>
				<div class="form-group">
					<form  method="POST" class="loginform">
						
						<label for="email">Email:</label>
						<input type="email" name="useremail" class="form-control" placeholder="enter your email-id" required>
	<h5 class="text-danger ml-4 text-capitalize"><?php if(isset($msg1)){
							echo $msg1;
						}?></h5>
						<label for="password">Password:</label>
						<input type="password" name="userpassword" class="form-control" placeholder="enter your password" required>
						<h5 class="text-danger ml-4 text-capitalize"><?php if(isset($msg)){
							echo $msg;
						}?></h5>
						<center><button class="btn btn-primary" name="userlogin">login</button></center>
					</form>



				</div>
				<h6 style="font-size: 19px;padding-left: 20px;">Forgot password?<a href="">click here</a></h6>

				<center><h6 class="text-center" style="background-color:lightgray;border-radius: 50%;width: 40px;height: 40px;padding-top: 10px;">OR</h6></center>
				<hr style="margin-top: -30px;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							
<a href="#"><button class="btn btn-primary socialbutton" style="background-color: blue"><i class="fa fa-facebook" ></i>login with facebook</button></a>
						</div>
						<div class="col-lg-6">
							<a href="#"><button class="btn btn-danger socialbutton"><i class="fa fa-google-plus" aria-hidden="true"></i>login with google</button></a>
						</div>
					</div>
				</div>
			<h6 style="font-size: 20px;padding-top: 40px;padding-bottom: 20px;" class="text-center">Dont have an account?<a href="registation.php">click here</a></h6>
			</div>

		</div>
	</div>
<?php
include 'footer.php';
?>
</body>
</html>