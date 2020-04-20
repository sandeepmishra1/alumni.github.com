  <!-- <?php
  session_start();
  ?> -->
  <section class="top-banner">
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-12" ><img src="image/logo-cms.png"></div>
        <div class="col-lg-8 col-12">
<?php
if (!isset($_SESSION['useremail'])) {
  # code...

?>
        <a href="login.php"><button class="btn logbtn">login&nbsp;/&nbsp;Register</button></a>
        <?php
      }
      else{
        ?>


    <div class="dropdown profilebtn">
    <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" style="width: auto;"><?php echo $_SESSION['username'];?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu text-center text-capitalize text-lg-center pt-3" style="width:210px;font-size: 20px;">
      <li><a href="#">view profile</a></li>
      
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>
        <?php
      }
        ?>
        </div>
      </div>
    </div>
  </section>
  <!-- top banner end -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php"><img src="image/images (1).png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">ABOUTUS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentinfo.php">STUDENTINFO</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="project.php">PROJECTS</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="notice.php">NOTICE</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="gallery.php">GALLERY</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="contactus.php">CONTACTUS</a>
      </li>
    </ul>
  </div>
</nav>