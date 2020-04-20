<?php
session_start();

if (isset($_SESSION['useremail'])) {
	header('location:index.php');
}
include 'connection.php';
if (isset($_REQUEST['userregister'])) {
	$name=$_REQUEST['username'];
	$email=$_REQUEST['useremail'];
	$password=$_REQUEST['userpassword'];
	$mobile=$_REQUEST['usermob'];
	$batch=$_REQUEST['userbatch'];
	$company=$_REQUEST['usercompany'];
	$location=$_REQUEST['userlocation'];

	$sql1="SELECT * FROM `user_register` WHERE `useremail`='$email'";
	$run=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($run)>0){
		$msg='<div class="alert alert-danger text-center">This Email Already Exixt.</div>';
	}
	else{
	$sql="INSERT INTO `user_register`(`user_id`, `username`, `useremail`, `userpassword`, `usermobile`, `userbatch`, `usercompany`, `userlocation`) VALUES (NULL,'$name','$email','$password',$mobile,'$batch','$company','$location')";
	if (mysqli_query($conn,$sql)) {
		header('location:login.php');
		# code...
	}
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
	<script type="text/javascript">
		function myfun(){
		var format=/^[A-Za-z" "]+$/;
			var name=document.getElementById("usernamee").value;
			if (name=="") {
				document.getElementById("ermsg").innerHTML="*please fill username*";
				return false;
			}
			if (name.length<6) {
				document.getElementById("ermsg").innerHTML="*user name must be 6 character*";
				return false;
			}
			if (name.length>20) {
				document.getElementById("ermsg").innerHTML="*user name must be between 3 to 20 character*";
				return false;
			}
            if (name.match(format)) {
            	true;
            }
            else{
            	document.getElementById("ermsg").innerHTML="*only alphabets are allowed*";
				return false;
            }
            var emailformat=/^[a-z0-9.@]+$/;
            var email=document.getElementById("usremail").value;
            if (email=="") {
            	document.getElementById("ermsg1").innerHTML="*please fill email*";
				return false;

            }
            if (email.match(emailformat)) {
            	true;
            }
            else{
            	document.getElementById("ermsg1").innerHTML="*Email Not in format*";
				return false;

            }
            var passformat=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;
            var password=document.getElementById("userpassword").value;
            
			if (password=="") {
				document.getElementById("ermsg2").innerHTML="*please Enter Password*";
				return false;
			}
			if (password.length<6) {
				document.getElementById("ermsg2").innerHTML="*Password must be 6 character*";
				return false;
			}
			if (password.length>8) {
				document.getElementById("ermsg2").innerHTML="*Password not more than 8 character*";
				return false;
			}
			if (password.match(passformat)) {
				true;
			}
			else{

				document.getElementById("ermsg2").innerHTML="*Password must contain one number one uppercase aan lower case and a special character no space*";
				return false;
			}
			//mobile validation start
			var mobformat=/^[0-9]+$/;
			var mob=document.getElementById("usermob").value;
			if (mob=="") {
				document.getElementById("ermsg3").innerHTML="* please enter the mobile Number";
            	return false;
            }
            	if (mob.length<10){
            		document.getElementById("ermsg3").innerHTML="* mobile Number must be 10 digit";
            	return false;
            
            }
            	if (mob.length>12){
            		document.getElementById("ermsg3").innerHTML="* mobile Number cant be more than 12 digit";
            	return false;
            
            }
			
			//mobile validation end
			var batchformat=/^([0-9-])+$/;
            var bat=document.getElementById("userbatchh").value;
            if (bat=="") {
            	document.getElementById("ermsg4").innerHTML="* please enter the batch";
            	return false;
            }
            if (bat.indexOf('-')==4 ){
            	true;
            }
            	else{document.getElementById("ermsg4").innerHTML="* invalid - position";
            	return false;
            }
            
          if (bat.length>9) {
				document.getElementById("ermsg4").innerHTML="*must be equal to 9*";
				return false;
			}
            
            	if (bat.match(batchformat)) {
				true;
			}
			else{

				document.getElementById("ermsg4").innerHTML="*only number and - are allowed*";
				return false;
			}
			var companyformat=/^[A-Za-z" "]+$/;
			var companyname=document.getElementById("usercompany").value;
			if (companyname=="") {
				document.getElementById("ermsg5").innerHTML="*please fill username*";
				return false;
			}
			if (companyname.length<3) {
				document.getElementById("ermsg5").innerHTML="*user name must be 6 character*";
				return false;
			}
			if (companyname.length>50) {
				document.getElementById("ermsg5").innerHTML="*user name must be between 3 to 20 character*";
				return false;
			}
            if (companyname.match(companyformat)) {
            	true;
            }
            else{
            	document.getElementById("ermsg5").innerHTML="*only alphabets are allowed*";
				return false;
            }

            	var locationformat=/^[A-Za-z]+$/;
			var location=document.getElementById("userlocation").value;
			if (location=="") {
				document.getElementById("ermsg6").innerHTML="*please Enter Location*";
				return false;
			}
			if (location.length<3) {
				document.getElementById("ermsg6").innerHTML="*Location mustbe 3 character*";
				return false;
			}
			if (location.length>30) {
				document.getElementById("ermsg6").innerHTML="*location must be between 3 to 20 character*";
				return false;
			}
            if (location.match(locationformat)) {
            	true;
            }
            else{
            	document.getElementById("ermsg6").innerHTML="*only alphabets are allowed*";
				return false;
            }

		}
	</script>
</head>
<body>
	<?php
	include'top.php';
	?>
<div class="container-fluid registation shadow-lg" >
	<h1 class="text-center font-weight-bold pt-3">
	Registration</h1>
		<p class="text-center font-italic" style="	border-bottom: 3px solid blue;">Join your alumni network</p>


<div class="row">


	<div class="col-lg-5 regleft">
	 <!-- 
		<center><img src="image/alumni.png" style="width: 100px;height: 100px;margin-top:200px;"></center> 	 -->
				<center><img src="image/undraw_develop_app_kvt2.png" class="img-fluid" style="height: 150px;width: 150px;margin-top: 180px;"></center>
		<h2 class="text-center text-uppercase font-weight-bold p-3">join us now</h2>
		<h5 class="text-center font-italic px-5">Login and stay connected to your alumni community and alma mater</h5>
		<center><i class="fa fa-hand-o-right fa-4x" aria-hidden="true"></i></center>	


	</div>
	<div class="col-lg-7">
		
		<center><img src="image/alumni.png" style="width: 100px;height: 100px;"></center>
			<form onsubmit="return myfun()" action="#" method="POST" class="p-2 regfor">
				<?php
				if (isset($msg)) {
					echo $msg;
					# code...
				}
				?>
			
				<div class="form-group">
					<img src="">
					<label for="name" class="font-weight-bold">Name:</label>
					<input type="text" name="username" id="usernamee" class="form-control" placeholder="Enter Your fullname" value="">
					<p id="ermsg" class="text-danger font-italic" style="font-size: 20px;"></p>				
				</div>
				<div class="form-group">
					
					<label for="email" class="font-weight-bold">Email:</label>
					<input type="email" name="useremail"id="usremail"class="form-control" placeholder="Enter Youe Email">			<p id="ermsg1"class="text-danger font-italic" style="font-size: 20px;"></p>				
				</div>
				
				<div class="form-group">
					
					<label for="email" class="font-weight-bold">Password:</label>
					<input type="password" name="userpassword"class="form-control" id="userpassword" placeholder="Enter password" style="width: 100%;margin-left: 0;border:2px solid blue;">			
						<p id="ermsg2"class="text-danger font-italic" style="font-size: 20px;"></p>			
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6
					">
					
					<label for="email" class="font-weight-bold">Mobile-No:</label>
					<input type="text" name="usermob"class="form-control" id="usermob" placeholder="Enter Your Mobilenumber">
					<p id="ermsg3"></p>							
				</div>
				<div class="form-group col-lg-6">
					
					<label for="batch" class="font-weight-bold">Batch:</label>
					<input type="text" name="userbatch"id="userbatchh"class="form-control" placeholder="Enter Batch(20xx-20xx)">	<p id="ermsg4"class="text-danger font-italic" style="font-size: 20px;"></p>						
				</div>
				<div class="form-group col-lg-6">
					
					<label for="companyname"class="font-weight-bold">Compyani Name:</label>
					<input type="text" name="usercompany"class="form-control" id="usercompany" placeholder="Enter working company Name">	
					<p id="ermsg5"class="text-danger font-italic" style="font-size: 20px;"></p>						
				</div>
				<div class="form-group col-lg-6">
					
					<label for="location"class="font-weight-bold">Location:</label>
					<input type="text" name="userlocation" id="userlocation"
					class="form-control" placeholder="Enter Current work Locatoin" class="text-danger font-italic" style="font-size: 20px;">	
					<p id="ermsg6" class="text-danger font-italic" style="font-size: 20px;"></p>						
				</div>
				</div>
				<center><button class="btn btn-primary" type="submit" name="userregister">Register</button>
					<button class="btn btn-secondary" type="resate">Reset</button></center>
			</form>

				<center><h6 class="text-center" style="background-color:lightgray;border-radius: 50%;width: 40px;height: 40px;padding-top: 10px;">OR</h6></center>

				<hr style="margin-top: -30px;">
			<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							
<a href="#"><button class="btn btn-primary socialbutton" style="background-color: blue;"><i class="fa fa-facebook" ></i>login with facebook</button></a>
						</div>
						<div class="col-lg-6">
							<a href="#"><button class="btn btn-danger socialbutton"><i class="fa fa-google-plus" aria-hidden="true"></i>login with google</button></a>
						</div>
					</div>

			<h6 style="font-size: 20px;padding-top: 40px;padding-bottom: 20px;" class="text-center">Already have an account?<a href="login.php">click here to Login</a></h6>
				</div>
	</div>
</div>
</div>

<?php
include'footer.php';
?>
</body>
</html>