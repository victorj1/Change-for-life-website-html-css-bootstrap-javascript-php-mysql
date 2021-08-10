<?php session_start();?>
<?php if(!isset($_SESSION['username'])):?>
<?php header('Location:dashboard.php'); ?>
<?php else: ?>

<?php
include("config/db.php");
 $id = $_GET['id'];
 
 $posts_query = "SELECT * FROM posts WHERE id = '$id'";
	$posts_result = mysqli_query($conn, $posts_query) or die("error");
	if(mysqli_num_rows($posts_result)>0){
		while($posts = mysqli_fetch_assoc($posts_result)){
			$id = $posts['id'];
			$title = $posts['title'];
			$description = $posts['description'];
			$feat_image = $posts['feat_image'];
			
		}
		
	}
 
?>


<html>
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
	 	    <h1 class="text-light">   <a href="index.html"><img src="assets/img/slide/logo1.png" alt="" height="100" width="55" class="img-fluid"></a> <a href="index.html">Change For Life</a></h1>
	 </div>

	 	  
	 
	 
	   

      </div>
    </div>
  </section>


  <!-- ======= Header ======= -->
  

  
  
  
  <header id="header">
    <div class="container">

   

      <nav class="nav-menu float-right d-none d-lg-block">
      
	  
	  
	  
	  
      </nav><!-- .nav-menu -->

    </div>

    </div>
  </header><!-- End Header -->




<hr>



<div class="container">

<form class="form-horizontal" action="update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value=<?php echo $id; ?>>
<input type="hidden" name="feat_image" value=<?php echo $feat_image; ?>>

<fieldset>
<h3>UPDATE POST</h3>
<hr>
<div class="row">
<div class="col-md-6">
<div class="Form-group">
<label for="title"  class="col-lg-2 col-form-label">Title</label>
<div class="col-lg-10">
<input type="text" name="title" class="form-control" placeholder="Title" value=<?php echo $title; ?> >
</div>
</div>
</div>
</div>



<div class="row">
<div class="col-md-6">
<div class="Form-group">
<label for="description"  class="col-lg-2 col-form-label"> Description</label>
<div class="col-lg-10">
<textarea class="form-control" rows="5" cols="10" name="description" placeholder="Description"> <?php echo $description; ?></textarea>
</div>
</div>
</div>
</div>





<div class="row">
<div class="col-md-6">
<div class="Form-group">
<label for="featuredimage"  class="col-lg-10 col-form-label">Featured Image</label>
<div class="col-lg-10">
<input type="file" name="feat_image" class="form-control" placeholder="Featured Image"  >
</div>
</div>
</div>
</div>



	  	<div class="row">
	
	<div class="col-md-6">
	
	<div class="form-group">

      <div class="col-lg-10">
        <input type="submit"  class="btn btn-primary" name="post" value="Update" >
      </div>
    </div>
	
	
	</div>
	</div>
	
	
	<div class="row">
	
	<div class="form-group">
	<div class="col-lg-12">
	
	<?php if(isset($_POST['posts'])):?>
	<div class="alert alert-dismissible alert-warning">
	<p><?php echo $msg; ?></p>
	</div>
	<?php endif; ?>
	</div>
	</div>
	</div>

	
	

	
	
  </fieldset>
</form>
  
  
  </div>


<?php endif; ?>

 </body>
</html>



