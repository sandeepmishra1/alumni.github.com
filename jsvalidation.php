<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
</head>
<body>
	<script type="text/javascript">
		function myfun(){
			var format=/^[A-Za-z" "]+$/;
			var a=document.getElementById("username").value;
			if (a=="") {
				document.getElementById("message").innerHTML="*please fill username*";
				return false;
			}
			if (a.length<3) {
				document.getElementById("message").innerHTML="*user name must be 3 character*";
				return false;
			}
			if (a.length>20) {
				document.getElementById("message").innerHTML="*user name must be between 3 to 20 character*";
				return false;
			}
            if (a.match(format)) {
            	true;
            }
            else{
            	document.getElementById("message").innerHTML="*only alphabets are allowed*";
				return false;
            }
            var passformat=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;
            var password=document.getElementById("userpass").value;
            var passwordd=document.getElementById("reuserpass").value;
			if (password=="") {
				document.getElementById("messagep").innerHTML="*please Enter Password*";
				return false;
			}
			if (password.length<6) {
				document.getElementById("messagep").innerHTML="*Password must be 6 character*";
				return false;
			}
			if (password.length>8) {
				document.getElementById("messagep").innerHTML="*Password not more than 8 character*";
				return false;
			}
			if (password.match(passformat)) {
				true;
			}
			else{

				document.getElementById("messagep").innerHTML="*Password must contain one number one uppercase aan lower case and a special character no space*";
				return false;
			}
			if (password==passwordd) {
				true;
			}
			else{


				document.getElementById("messagepp").innerHTML="*Password not match *";
				return false;
			}
	
		}
	</script>
	<div class="container">
	<div class="form-group">
		<form onsubmit="return myfun()" method="POST">
			<label>Name:</label>
			<input type="text" name="username" placeholder="Enter your name" class="form-control" id="username" value="">

			<p id="message" class="text-danger"></p>
				<label>Password:</label>
			<input type="password" name="userpass" placeholder="Enter your name" class="form-control" id="userpass" value="">
			
			<p id="messagep" class="text-danger"></p>

				<label>Re-Password:</label>
			<input type="password" name="userpass" placeholder="Enter your name" class="form-control" id="reuserpass" value="">
			
			<p id="messagepp" class="text-danger"></p>
			<button type="submit" name="" value="submit" class="btn btn-primary"></button>
		</form>
	</div>
	</div>
</body>
</html>