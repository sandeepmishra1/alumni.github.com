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
<style type="text/css">
	
	.main{
		width: 100%;
		/*min-height: 150px;*/
		/*height: 350px;*/
		text-align: center;
		/*position: relative;*/
		cursor: pointer;
		margin-top: 150px;
	}
	.teacher{
		width: 100%;
		height: 280px;
		background-color: #fff;
		padding: 30px;
		border-radius: 20px;
		border: 4px solid blue;
		/*position: absolute;*/
		bottom: 0;
		z-index: 1;
		box-shadow: 0 0 20px -15px;

			transition: .8s;
			/*margin-top: 1120px;*/

	}
	.teacher-img{
		width: 140px;
		height: 140px;
		border-radius: 50%;
		margin:-110px auto 0;
		background-color: white;
		border: 6px solid #007bff;
	}
	.teacher-img img{
		
		width: 120px;
		height: 120px;
		border-radius: 50%;
		margin-top:4px;
	}
	/*.service h4{
		height: 75px;
		width: 80%;
		background: #fff;
		margin: 20px auto;
		position: relative;
	}*/

.teacher h5{
	height: 40px;   
	font-weight: bold;
	color: blue;
	font-size: 1.6rem;
}
.teacher h3{
	height: 40px;   
	font-weight: bold;
	color: black;
	font-size: 1.2rem;
}
.teacher p{
	height: 40px;   
	
	color: black;
	font-size: 1.4rem;
}

		/*.service h4::after{
			content: '';
			width: 40px;
			height: 30px;
			background: linear-gradient(to right,#fff,#007bff); 
			position: absolute;
			right: -5px;
			top: -5px;
			z-index: -1;

		}
		.service h4::before{
			content: '';
			width: 40px;
			height: 30px;
			background: linear-gradient(to right,#007bff,#fff); 
			position: absolute;
			left: -5px;
			bottom: -5px;
			z-index: -1;

		}*/
		.shadowone{
			height: 200px;
			width: 80%;
			background: #fff;
			position: absolute;
			border-radius: 10px;
			bottom: 0;
			left: 10%;
			z-index: -1;
			box-shadow: 0 0 20px -15px;
			transition: .8s;
		}
		.shadowtwo{
			height: 200px;
			width: 64%;
			background: #fff;
			position: absolute;
			border-radius: 10px;
			bottom: 0;
			left: 18%;
			z-index: -2;


		}
		.main:hover .teacher{
			transform: translateY(-50px);
		}
		.main:hover .shadowone{

			transform: translateY(-25px);
			border: 5px solid black;
              
           

		}
		.main:hover .shadowtwo{

			transform: translateY(-6px);
			border: 5px solid black;


		}
</style>
</head>
<body>
<h1>our teacher</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<div class="main">
				
				<div class="teacher">
					<div class="teacher-img">
					<img src="image/hod.jpg">
				</div>
				<h5>mr.manjit kumar nayak</h5>
				<h3 class="text-center">(professor)</h3>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>: manjitcsa@cet.edu.in</p>

<p><span><i class="fa fa-mobile"></i></span>:9692268809</p>
			
				</div>
				<div class="shadowone"></div>
				<div class="shadowtwo">
					
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="main">
				
				<div class="teacher">
					<div class="teacher-img">
					<img src="image/hod.jpg">
				</div>
				<h5>manjit kumar nayak</h5>
				<h3 class="text-center">(professor)</h3>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>: manjitcsa@cet.edu.in</p>

<p><span><i class="fa fa-mobile"></i></span>:9692268809</p>
			
				</div>
				<div class="shadowone"></div>
				<div class="shadowtwo">
					
				</div>
			</div>
	</div>
	<div class="col-lg-3">
			<div class="main">
				
				<div class="teacher">
					<div class="teacher-img">
					<img src="image/hod.jpg">
				</div>
				<h5>manjit kumar nayak</h5>
				<h3 class="text-center">(professor)</h3>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>: manjitcsa@cet.edu.in</p>

<p><span><i class="fa fa-mobile"></i></span>:9692268809</p>
			
				</div>
				<div class="shadowone"></div>
				<div class="shadowtwo">
					
				</div>
			</div>
	</div>
	<div class="col-lg-3">
			<div class="main">
				
				<div class="teacher">
					<div class="teacher-img">
					<img src="image/hod.jpg">
				</div>
				<h5>manjit kumar nayak</h5>
				<h3 class="text-center">(professor)</h3>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>: manjitcsa@cet.edu.in</p>

<p><span><i class="fa fa-mobile"></i></span>:9692268809</p>
			
				</div>
				<div class="shadowone"></div>
				<div class="shadowtwo">
					
				</div>
			</div>
	</div>
</div>
</div>
</body>
</html>