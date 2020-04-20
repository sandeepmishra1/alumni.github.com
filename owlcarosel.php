<!DOCTYPE html>
<html>
<head>
	<title></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;

    }
   


   
  .mainteacher{
    width: 100%;
    background: blue;
    height: 350px;
    position: relative;
    border-radius: 20px;
    margin-top: 120px;

  }
   
 .subdiv1{
    width: 100%;
    background:#25CCF7;
    height: 350px;
    position: absolute;
    border-radius: 10px;
 }
  .subdiv2{
    width: 93%;
    background: #EAF0F1;
    height: 320px;
    margin-top: 18px;
    position: absolute;
    margin-left: 12px;
    border-radius: 25px;
   
   
  }
  .subdiv2 h1{
    text-align: center;
    font-size: 1.6rem;
    margin-top: 15px;
    font-weight: bold;

  }
  .subdiv2 p{
    text-align: center;
    font-size: 23px;
    font-weight: 600;
    color: blue;

  }
    .subdiv2 h3{
        text-align: center;
      padding: 6px;
       font-size: 20px;
    }
  .mainteacher:hover .subdiv2 {
    transform: rotate(360deg);
    /*transform:scale(-1.1);*/
    transition: 11s infinite;
   }
  .imgsection{
    height: 170px;
    width: 50%;
    border-radius: 50%;
    background: yellow;
border: 5px solid white;
      margin:-80px auto 0;
      z-index: 1;
      transform: scale(1.1);

  }
  .imgsection img{
    
    width: 50%;
    height: 170px;
    border-radius: 50%;
    /*margin-top:4px;*/
  }
  /* .subdiv2:hover  .imgsection img    {
    transform:rotate(360deg);
    transition: .5s;
  }*/ 
  </style>

</head>
<body>

<div class="owl-carousel owl-theme">
    <div class="item">
      <div class="mainteacher">
        <div class="subdiv1">
         
        </div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  <h1>
Dr.  Jibitesh mishra(HOD)</h1>
<p>(Associate Professor)</p>
<h3>Ph.D. Computer Science </h3>
<h3>Fractal Graphics, Web Engineering.</h3>
<h3>E-mail: jmishra@cet.edu.in</h3>
<h3>Mob :9337832006</h3>
            
          </div>
        </div>
     
    </div>
      <div class="item">
          <div class="mainteacher">
             <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  
            
          </div>
        </div>
      
    </div>
      <div class="item">
         <div class="mainteacher">
           <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  
            
          </div>
        </div>
      
    </div>
      <div class="item">
         <div class="mainteacher">
           <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg" class="img-fluid"></a></div>
  
            
          </div>
        </div>
      
    </div>
      <div class="item">
         <div class="mainteacher">
           <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  
            
          </div>
        </div>
      
    </div>
    <div class="item">
         <div class="mainteacher">
           <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  
            
          </div>
        </div>
      
    </div>
    <div class="item">
        <div class="mainteacher">
           <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  
            
          </div>
        </div>
      
    </div>
    <div class="item">
         <div class="mainteacher">
           <div class="subdiv1"></div>
  <div class="subdiv2">
    <div class="imgsection">
  <a href="image/pexels-photo-1043473.jpeg" target="blank"><img src="image/pexels-photo-1043473.jpeg"></a></div>
  
            
          </div>
        </div>
      
    </div>
   
</div>




<script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
</script>
</body>
</html>