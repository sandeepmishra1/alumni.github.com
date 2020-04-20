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
 <style type="text/css">
   .tarainner{
  width:100%;
  height: auto;
  /*margin-top: 100px;*/
  background:#f4f5f2;
  /*margin-top: -50px;*/
  /*margin-left: 5%;*/


}
.tarainner h1{
  color: blue;
  line-height: 1.6;
  font-size: 3.0rem;
  text-align: center;

}
.tarainner h2{
  color: blue;
  line-height: 1.6;
  font-size: 2.5rem;
  /*margin-left:35%;*/
  text-transform:uppercase;

}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
  /*max-width: 350px;*/
  width: 100%;
  margin: auto;
  position: relative;
  margin-top: 55px;
  margin-bottom: 20px;
  border-top-left-radius:20px;
  border-top-right-radius:20px;
  border-width: 5px;
  
  box-sizing: border-box;
  border-color: #abaeb3 #abaeb3  #abaeb3 #abaeb3 ;

}

.card:hover{
  transform: translateY(-25px);
  transition: 1s;
  /*box-shadow: 0 0 6px 5px blue;*/
}
.checked {
  color: orange;
}
.tarainner img{
  height: 150px;
  width: 140px;
  border-radius: 50%;
  /*transform: translateX(60%);*/
  margin-top: 20px;
  /*margin-left: 150px;*/
  object-fit: fill;
}
.tarainner .expimg{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  border:4px solid blue;
  


}


.tarainner img:hover{
transform: scale(1.1);
transition: 1s;
}
.tarainner h3{
  font-size: 1.4rem;
  text-transform: capitalize;
  font-weight: bold;
  margin-top: 15px;
  text-align: center;
}
.titlee {
  color:black;
  font-size: 23px;
  text-transform: capitalize;
  font-weight: 600px;
  text-align: center;
  color: blue;
}
.tarainner.card :hover .titlee{
  color: gold;
  transform: scale(1.1);
}
.title {
  color:black;
  font-size: 21px;
  text-transform: capitalize;
  font-weight: 600px;
  /*text-align:center;*/
  color: black;
}


.tarainner .fa{
font-size: 28px;
margin: 10px;
background: black;
height: 40px;
width: 40px;
border-radius: 50%;
padding: 5px 8px;
color:white;
margin-bottom: 15px;

}
.tarainner .card:hover .fa{
  transform: rotate(360deg);
  transition: .5s;
  position: relative;

}
.rod{
  background-color: #dedede;
  color: white;
  /*z-index: 1;*/
  text-align: center;
}
.card button{
  margin-left: 90px;
  margin-top: 15px;
  margin-bottom: 15px;
  text-transform: uppercase;
  font-size: 1.1rem;
  font-weight: bold;

}
 </style>
	
</head>
<body>
			<?php
include 'top.php';
?>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#">2020</a>
  <a href="#">2019</a>
  <a href="#">2018</a>
  <a href="#">2017</a>
  <a href="#">2016</a>
  <a href="#">2015</a>
  <a href="#">2014</a>
  <a href="#">2013</a>
  <a href="#">2012</a>
  <a href="#">2011</a>
  <a href="#">2010</a>
  <a href="#">2009</a>
  <a href="#">2008</a>
  <a href="#">2007</a>
  <a href="#">2008</a>
  <a href="#">2007</a>
  <a href="#">2006</a>

  <a href="#">2005</a>
  <a href="#">2004</a>
  <a href="#">2003</a>
    <a href="#">2002</a>
    <a href="#">2001</a>
    <a href="#">2000</a>
    <a href="#">1999</a>
     <a href="#">1997</a> 
     <a href="#">1996</a> 
     <a href="#">1995</a>
      <a href="#">1994</a>
</div>

<div class="container-fluid" style="position: relative;background-color: lightgray;">
  <div class="row">
    <div class="col-lg-2">
<button class="openbtn" onclick="openNav()">&#9776;</button>

</div>
<div class="col-lg-8 search ">
  <form action="#"> 
  <div class="input-group mb-3">
     
      <input type="text" class="form-control" placeholder="Search by name/passing year" required>
  <div class="input-group-append">
    <button class="btn" type="submit">search</button>
  </div>
  

</div>
</form>
</div>
</div>
  </div>
  <section class="tarainner">
    <div class="container-fluid">
      <h2 class="text-center" style="padding-top: 30px;">2020 batch</h2>
      <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>
          <div class="row">
          
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

  <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" alt="John" class="expimg"></a></center>
<!--  <hr style="  border: 1px solid blue;"> -->
  <h3>sandeep mishra(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>

</div>

        
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
   <h3>rama chandra dash(2018-21)</h3>
  <p class="titlee">(acenture)</p>
     <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    
  </div>
 
</div>

        
      </div>
          <div class="col-lg-3 col-md-6 col-12">
        <div class="card">

 <center><a href="image/pexels-photo-716411.jpeg" target="blank"><img src="image/pexels-photo-716411.jpeg" class="expimg"></a></center>
   <h3>paresh mohapatra(2018-21)</h3>
  <p class="titlee">(infosys)</p>
    <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  

  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
  
  </div>
</div>

        
      </div>


      <div class="col-lg-3 col-md-6 col-12 ">
        <div class="card">
  <center><a href="image/pexels-photo-532220.jpeg" target="blank"><img src="image/pexels-photo-532220.jpeg" alt="John" class="expimg"></a></center>
 <h3>akash sahu(2018-21)</h3>
  <p class="titlee">(tcs)</p>
   <p class="title"><strong>Email:</strong>sandeepmishra98&gmail.com</p>
  <!-- <p class="title" class="title" style="margin-left: 20px;">yer of passing:2018</p> -->
 
  <p class="title"style="float: left;"><strong>location:</strong>Bhubaneswar</p>
  
  <p class="title"><strong>contact:</strong>9090808987</p>
  
  
  
  <div class="rod">
    <a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
   
  </div>
</div>

        
      </div>



    </div>
  </div>
  
    </div>

</div>

   
  </section>
  
			<?php
include 'footer.php';
?>
</body>
<script type="text/javascript">
	/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "245px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>

              <script type="text/javascript">
                mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
              </script>
</html>