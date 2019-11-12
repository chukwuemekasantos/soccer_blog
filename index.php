<?php

session_start();

$con = mysqli_connect("localhost","root","", "soccer");
      
  $currentPage = $_SERVER["PHP_SELF"];
           //include 'set.php';
          $maxRows_Recordset1 = 6; //LIMIT
          $p = 0;
          if (isset($_GET['p'])) {
            $p = $_GET['p'];
          }
          $startRow_Recordset1 = $p * $maxRows_Recordset1;
                   $a = 'approve';
          if($query_Recordset1 = "SELECT * FROM soccer_posts WHERE status_approve = '$a' ORDER BY id DESC"){
           if(isset($_POST['go'])){
              $s = $_POST['s'];
              $a = 'approve';
          	$query_Recordset1 = "SELECT * FROM soccer_posts WHERE CONCAT_WS(title,'',username)  LIKE '%$s%' ";

          }
          } //YOUR QUERY
          $query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
          $Recordset1 = mysqli_query($con, $query_limit_Recordset1) or die(mysqli_error($con));
          $row_Recordset1 = mysqli_fetch_assoc($Recordset1);

          if (isset($_GET['n'])) {
            $n = $_GET['n'];
          } else {
            $all_Recordset1 = mysqli_query($con, $query_Recordset1);
            $n = mysqli_num_rows($all_Recordset1);
          }
          $totalPages_Recordset1 = ceil($n/$maxRows_Recordset1)-1;

          $queryString_Recordset1 = "";
          if (!empty($_SERVER['QUERY_STRING'])) {
            $params = explode("&", $_SERVER['QUERY_STRING']);
            $newParams = array();
            foreach ($params as $param) {
              if (stristr($param, "p") == false && 
                  stristr($param, "n") == false) {
                array_push($newParams, $param);
              }
            }
            if (count($newParams) != 0) {
              $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
            }
          }
          $queryString_Recordset1 = sprintf("&n=%d%s", $n, $queryString_Recordset1);



//echo ($_SESSION['username']);

?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from finelayers.net/html/soccer/soccer-ltr/blog-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:13:27 GMT -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Soccer</title>
<!-- StyleSheets -->
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">	
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/transition.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="js/vendor/modernizr.js"></script>
</head>
<body>



<!-- Wrapper -->
<div class="wrap push">

	<!-- Header -->
	<header class="header style-3">

		<!-- Top bar -->
		<div class="topbar-and-logobar">
			<div class="container">

				<!-- Responsive Button -->
				<div class="responsive-btn pull-right">
					<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
				</div>
				<!-- Responsive Button -->

				<!-- User Login Option -->
				<ul class="user-login-option pull-right">
					<li class="social-icon">
						<ul class="social-icons style-5">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
							<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
					</li>
					<li class="login-modal">
						<?php 
						
						
                                if (isset($_SESSION['username'])) {
                                	$s = $_SESSION['username'];

                         	$g = "HELLO";
                         	echo "<a href='profile/index.php' class='login'><i class='fa fa-user'> ".$g." ".$s."</i></a>";
                               }
                               else{
                         	echo "<a href='login.php' class='login'><i class='fa fa-user'>member Login</i></a>";
                         }

						 ?>
						
						<div class="modal fade" id="login-modal">
						  	<div class="login-form position-center-center">
								<h2>Login<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="user" placeholder="domain@live.com">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group custom-checkbox">
									    <label>
									    	<input type="checkbox"> Stay login
									    </label>
									    <a class="pull-right forgot-password" href="#"></a>
									    <a href="#" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Forgot password?</a>
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
									</div>
								</form>
								<span class="or-reprater"></span>
								
							</div>
						</div>
						<div class="modal fade" id="login-modal-2">
						  	<div class="login-form position-center-center">
								<h2>Forgot password<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="user" placeholder="domain@live.com">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
									</div>
								</form>
							</div>
						</div>
					</li>
					<li class="language-dropdown">
				    	<a id="choses-lang" href="#"><i class="fa fa-globe"></i>Eng<i class="fa fa-caret-down"></i></a>
				    	<ul id="language-dropdown">
						    <li><a href="#"><img src="images/flags/img-02.jpg" alt="">ger</a></li>
						    <li><a href="#"><img src="images/flags/img-03.jpg" alt="">fra</a></li>
						    <li><a href="#"><img src="images/flags/img-04.jpg" alt="">bra</a></li>
					  	</ul>
					</li>
				</ul>
				<!-- User Login Option -->
				
			</div>	
		</div>
		<!-- Top bar -->

		<!-- Nav -->
		<div class="nav-holder">
			<div class="container">
				<div class="maga-drop-wrap">

					<!-- Logo -->
					<div class="logo">
						<a href="home-1.html"><img src="images/logo-4.png" alt=""></a>
					</div>
					<!-- Logo -->

					<!-- Search Bar -->
					<div class="search-bar-holder pull-right">
						<div class="search-bar">
							<form action="index.php" method="POST">
							<input type="text" name="s" class="form-control" placeholder="search enter please..."><span><BUTTON type='submit' name='go' class="fa fa-search btn " style="background-color: #000;"></BUTTON></span>

							</form>
						</div>
					</div>
					<!-- Search Bar -->

					<!-- Nav List -->
					<ul class="nav-list pull-right">
						<li>
					    	<a href="index.php">Home</a>
					    	
						</li>
						<li><a href="about.php">about</a></li>
						<li>
					    	
						</li>
						
						<li>
					    	
						</li>
						<li>
					    	
						</li>
						<li>
					    	
						</li>                                                                     
						<li><a href="contact.php">contact</a></li>                                                                  
					</ul>
					<!-- Nav List -->

				</div>
			</div>
		</div>
		<!-- Nav -->

	</header>
	<!-- Header -->

	<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Blog -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- Blog Content -->
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-7 r-full-width"> 

						<!-- Blog List View -->
						<div class="blog-list-View theme-padding-bottom">

							<!-- Slider Post -->
							<div class="theme-padding-bottom">
								<div class="row">

									<!-- Post Img -->
									
									<!-- Post Img -->

									<!-- Post Detail -->
									                        
                      <?php


do{
              if ($row_Recordset1) {
                       $r =  strip_tags($row_Recordset1['post']);
                       if (strlen($r) > 20) {
	                   $trim = substr("$r",0,200)." "."...";
                        }else{
                        $trim = $r;

                    }
                         $u = $row_Recordset1['id'];
                         $ur = "blog-detail.php?v=".$u."";
                         
              echo "
         
              <div class='theme-padding-bottom'>
								<div class='row'>

									<!-- Post Img -->
									<div class='col-lg-5 col-md-5 col-xs-12'>
										<div class='large-post-img'>
											<img src='profile/featured_image/".$row_Recordset1['featured_image']."' alt=''/>
											<span class=''></span>
										</div>
									</div>
									<!-- Post Img -->

									<!-- Post Detail -->
									<div class='col-lg-7 col-md-5 col-xs-12'>
										<div class='large-post-detail style-2'>
											<div class='author-header'>
												<div class='aurhor-img-name pull-left'>
													<img src='images/aurthor-img.jpg' alt=''>
													<strong>by <i class='red-color'>".$row_Recordset1['username']."</i></strong>
													<span>on Jun 27, 2014 </span>
												</div>
												<div class='share-option pull-right'>
													<span id='share-btn5'><i class='fa fa-share-alt'></i>Share</span>
													<div id='show-social-icon5' class='on-hover-share'>
														<ul class='social-icons'>
															<li><a class='facebook' href='#'><i class='fa fa-facebook'></i></a></li>
															<li><a class='twitter' href='#'><i class='fa fa-twitter'></i></a></li>
															<li><a class='youtube' href='#'><i class='fa fa-youtube-play'></i></a></li>
															<li><a class='pinterest' href='#'><i class='fa fa-pinterest-p'></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<h2><a href='#'>".$row_Recordset1['title']."</a></h2>
											<p>".$trim."</p>

											<a class='btn gary-btn' href='".$ur."%Nnpqw=".sha1('hellohacker')."'><i>+</i>read more</a>
										</div>
									</div>
									<!-- Post Detail -->

								</div>
							</div>
							<!-- Img Post -->
			  ";

               }  
               else{
                    echo "<h1 style='color:red; margin-top:40px;'>NO RESULT FOUND</h1>";
               }                                
              
}
              
            while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
             
            
            ?>
          

            <div class="col-sm-12" style='padding:0px; '>
            	
                                          <?php if ($p > 0) { // Show if not first page ?>
                                          <a href="<?php printf("%s?p=%d%s", $currentPage, max(0, $p - 1), $queryString_Recordset1); ?>" class='btn btn-sm' style='text-decoration: none; margin-left: 20px; background-color: #000; color: white;'><i class="fa fa-arrow-circle-left"></i> Previous</a>
                                          <?php } // Show if not first page ?>
                                          <?php if ($p < $totalPages_Recordset1) { // Show if not last page ?>
                                          <a href="<?php printf("%s?p=%d%s", $currentPage, min($totalPages_Recordset1, $p + 1), $queryString_Recordset1); ?>" class='btn btn-sm  pull-right' style='text-decoration: none; margin-right: 20px; background-color: #000; color: white;'>Next <i class="fa fa-arrow-circle-right"></i></a>
                                          <?php } ?>
                                          
                                    </div>


								
							<!-- Slider Post -->






							
								<!-- Video Post -->

						
	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<footer class="main-footer style-2">

		<!-- Footer Columns -->
		<div class="container">

			<!-- Footer columns -->
			<div class="footer-column border-0">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<div class="logo-column p-white">
								<img class="footer-logo" src="images/footer-logo.png" alt="">
								<ul class="address-list style-2">
									<li><span>Address:</span>1782 Harrison Street  Sun Prairie</li>
									<li><span>Phone Number:</span>49 30 47373795</li>
									<li><span>Email Address:</span>moin@blindtextgenerator.de</li>
								</ul>
								<span class="follow-us">follow us </span>
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Advertisment</h5>
							<a href="#"><img src="images/footer-add.jpg" alt=""></a>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponcer</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-6.png" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-6.png" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Footer Column -->

				</div>
			</div>
			<!-- Footer columns -->

		</div>
		<!-- Footer Columns -->

		<!-- Copy Rights -->
		<div class="copy-rights">
			<div class="container">
				<p>© Copyright by <i class="red-color">FineLayers</i> All rights reserved.</p>
				<a class="back-to-top scrollup" href="#"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		<!-- Copy Rights -->

	</footer> 
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
	<a class="r-nav-logo" href="home-1.html"><img src="images/logo-1.png" alt=""></a>
    <ul class="respoinve-nav-list">
		<li>
			<a data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
			
		</li>
		<li>
			<a href="about.php">About</a>
		</li>
		<li>
			
		</li>
		<li>
			
		</li>
		<li>
			
		</li>
		<li>
			
		</li>
		<li>
			
		</li>
		<li>
			
		</li> 
		<li>
		</li> 
		<li><a href="contact.php">Contact</a></li>                       
	</ul>
</nav>
<!-- Slide Menu -->

<!-- Java Script -->
<script src="js/vendor/jquery.js"></script>        
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/gmap3.min.js"></script>				
<script src="js/bigslide.js"></script>		
<script src="js/slick.js"></script>	
<script src="js/waterwheelCarousel.js"></script>
<script src="js/contact-form.js"></script>	
<script src="js/countTo.js"></script>		
<script src="js/datepicker.js"></script>		
<script src="js/rating-star.js"></script>							
<script src="js/range-slider.js"></script>				
<script src="js/spinner.js"></script>			
<script src="js/parallax.js"></script>			   	 
<script src="js/countdown.js"></script>	
<script src="js/appear.js"></script>		 		
<script src="js/prettyPhoto.js"></script>			
<script src="js/wow-min.js"></script>						
<script src="js/main.js"></script>	
</body>

<!-- Mirrored from finelayers.net/html/soccer/soccer-ltr/blog-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:13:28 GMT -->
</html>