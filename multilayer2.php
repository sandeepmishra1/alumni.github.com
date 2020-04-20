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
	<style type="text/css">
		.service{
			height:70vh;
			width: 100%;
			/*background:#bab8ba;*/
		}
	.maindiv{
		height: 250px;
		width: 250px;
		/*background-color: red;*/
		position: relative;
		margin-top: 75px;
		margin-left: 40px;
	}
	.div1{

		height: 250px;
		width: 250px;
		background-color:#5bff24;
		position: absolute;
		border: 3px solid white;
			border-radius: 50px;
	}
	.div2{

	height: 250px;
		width: 250px;
		background-color:
#f70ce0
;
		position: absolute;
				border-radius: 50px;
	}
	.div3{

			height: 250px;
		width: 250px;
		background-color:#fff;
		background-image: linear-gradient(45deg,#0ff5e2,#1a22c4);
		position: absolute;
		border-radius: 50px;

	}
	 img{
height: 150px;
width: 150px;
margin-left: 50px;
margin-top: 30px;
		position: absolute;

	}
	.maindiv:hover .div2{
		/*transform: translateY(-30px);*/
		/*display: none;*/
	/*		transition: 0.8s;
		height: 60px;
		width: 100px;
		margin-left: -60px;
		margin-top: 100px;*/
		transform: rotate(150deg);
			transition: 2s;
	}
	.maindiv:hover .div1{
		/*transform: translateX(-40px);*/
		transform: rotate(-50deg);
		transition: 2s;
	}
	 h3{
	margin-top: 50px;
	margin-left: 35px;
	text-align: center;
	font-size: 1.3rem;
	text-transform: uppercase;
	font-weight: bold;
}
</style>
</head>

<body>
	<section class="service">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-6 col-12">
	<div class="maindiv">
		<div class="div1"></div>
		<div class="div2"></div>
        <div class="div3">	<img src="image/smartclass.svg"></div>
	</div>
	<h3>smart class</h3>
	</div>
	<div class="col-lg-3 col-md-6 col-12">
	<div class="maindiv">
		<div class="div1"></div>
		<div class="div2"></div>
        <div class="div3">	<img src="image/library.svg"></div>
	</div>
	<h3>library</h3>
	</div>
		<div class="col-lg-3 col-md-6 col-12" >
	<div class="maindiv">
		<div class="div1"></div>
		<div class="div2"></div>
        <div class="div3">	<img src="image/lab.png"></div>
	</div>

			<h3>lab</h3>
	</div>
		<div class="col-lg-3 col-md-6 col-12">
			
	<div class="maindiv">
		<div class="div1"></div>
		<div class="div2"></div>
        <div class="div3">	<img src="image/lab.png">
        </div>

	</div>
	<h3>technical club</h3>
	</div>
	

</div>
</div>
</section>
</body>
</html>