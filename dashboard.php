<?php

Session_start();

include("config/db.php");

?>




<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="4qgUO03gYAueIPnczfYdOos2rTDghk74GdXPHIATyl0" />

  <title>Change For Life Centre</title>
  <meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Change For Life Centre | Psychotherapy and Hypnotherapy Toronto" />
<meta property="og:description" content="Visit Change For Life Centre for guidance with anxiety, quitting smoking, stress management, depression, anger management and addictions." />
<meta property="og:url" content="https://www.changeforlifecentre.com/" /> 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/slide/logo1.png" >
  <link href="assets/img/slide/logo1.png" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  <style>
  
  img {
    max-width:30%;
    height:auto;
}
  
  
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: gray;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  
</head>

<body>
<div class="sidenav">
<br>
<center>
<img src="image/user.png"><br><br>
</center>
  <a href="post.php"> <h4 style="color:white; text-align"> <b>Post</b></h4></a>  
    <a href="dashboard.php"><h4 style="color:white; text-align"> <b>Dashboard</b></h4></a>
  <a href="login.php"> <h4 style="color:white; text-align"> <b>Login</b></h4></a>
   <a href="logout.php"><h4 style="color:white; text-align"> <b>Logout</b></h4></a>
  
</div>
  <!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
	  <div class="container">

</div>
	  
       
<h3 style="color:white; text-align:center;">Welcome <?php echo $_SESSION['username']; ?></h3>



<div class="row">
  <div class="logo float-center">
    
        <!-- Uncomment below if you prefer to use an image logo -->
    
      </div> 


</div>


       

      </div>
     
	        <div class="contact-info float-right">
	 	       <div class="logo float-left">
        <a href="index.php"><img src="assets/img/slide/logo1.jpg" alt="" height="120" width="330" class="img-fluid"></a> <a href="index.php"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
    
      </div>

	 </div>

	 	  
	 
	 
	   

      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  

  
  
  
  <header id="header">
    <div class="container">

    
	  
	  
	  

      <nav class="nav-menu float-right d-none d-lg-block">
   
      </nav><!-- .nav-menu -->
	<h2 style="text-align: center"><b>Admin Panel</b></h2><hr>
    </div>

	  </header><!-- End Header -->

		<?php
		
		
	
	$posts_query = "SELECT * FROM posts";
	$posts_result = mysqli_query($conn, $posts_query) or die("error");
	if(mysqli_num_rows($posts_result)>0){
		while($posts = mysqli_fetch_assoc($posts_result)){
			$id = $posts['id'];
			$title = $posts['title'];
			$description = $posts['description'];
			$feat_image = $posts['feat_image'];
			?>
			
		<div class="row">
	<div class="col-lg-2">

	</div>
	<div class="col-lg-10">
<img src=<?php echo $feat_image; ?>>
	<h3><a href=""> <?php echo $title; ?> </a></h3>
	<p> <?php echo substr($description,0,100)."..."; ?> </p>
	
	<div class="row">
	
	<div class="col-lg-1"><a href=view.php?id=<?php echo $id; ?>><b>VIEW</b></a></div>
	<div class="col-lg-1"><a href=edit.php?id=<?php echo $id; ?>><b>EDIT</b></a></div>
		<form action="delete.php" method="POST">
	<input type="hidden" name="id" value=<?php echo $id; ?> >
		<input type="submit" name="delete" value="DELETE" class="btn btn-info" >
		</form>
	
	<br><br>
	
	
	</div>
	
	</div>
	</div>
	
		<?php
			
		}
	}
	
	?>
	
    </div>




  
  
  
  
  </body>
 


  
  
  


