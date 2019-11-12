<?php
session_start();
?>

<html class="no-js" lang="en">

<!-- Mirrored from finelayers.net/html/soccer/soccer-ltr/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:13:30 GMT -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Soccer HTML5 Template</title>
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
                         	echo "<a href='#' class='login'><i class='fa fa-user'> ".$g." ".$s."</i></a>";
                         }else{
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
								<ul class="others-login-way">
									<li><a class="facebook-bg" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
									<li><a class="tweet-bg" href="#"><i class="fa fa-twitter"></i>Tweet</a></li>
									<li><a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
									<li><a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
								</ul>
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
						<a href="index.php"><img src="images/logo-4.png" alt=""></a>
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
					    	
					    	<ul>
							    <li><a href="team.html">team</a></li>
							    <li><a href="team-detail.html">Team detail</a></li>
							    <li><a href="team-width-sidebar.html">team-widthsidebar</a></li>
						  	</ul>
						</li>
						<li class="mega-dropdown">
					    	
					    	<ul>
							    <li class="row">
							    	<div class="col-lg-3 col-md-3 col-sm-3">
							    		<div class="blog-categories">
							    		<h2>Blog Categories</h2>
								    		<ul class="blog-categories-list">
								    			<li><a href="#">Blog 1 Column (Right Sidebar)</a></li>
								    			<li><a href="#">Blog Medium With Right Sidebar</a></li>
								    			<li><a href="#">Masonry (Right Sidebar)</a></li>
								    			<li><a href="#">Blog 4 Columns</a></li>
								    			<li><a href="#">Blog 1 Column (Right Sidebar)</a></li>
								    			<li><a href="#">Masonry (Right Sidebar)</a></li>
								    			<li><a href="#">Blog 1 Column (Right Sidebar)</a></li>
								    		</ul>
							    		</div>
							    	</div>
							    	<div class="col-lg-9 col-md-9 col-sm-9">
							    		<div id="mega-blog-slider" class="mega-blog-slider">

							    			<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="images/blog-grid-view/img-2-1.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">Englis FA Cup</span>
													<h2>Man United reunion for Ibrahimovic,</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="images/blog-grid-view/img-2-2.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">Englis FA Cup</span>
													<h2>Man United reunion for Ibrahimovic,</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="images/blog-grid-view/img-2-3.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">Englis FA Cup</span>
													<h2>Man United reunion for Ibrahimovic,</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="images/blog-grid-view/img-2-4.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">Englis FA Cup</span>
													<h2>Man United reunion for Ibrahimovic,</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="images/blog-grid-view/img-2-1.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">Englis FA Cup</span>
													<h2>Man United reunion for Ibrahimovic,</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="images/blog-grid-view/img-2-2.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">Englis FA Cup</span>
													<h2>Man United reunion for Ibrahimovic,</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

							    		</div>
							    	</div>
							    </li>
						  	</ul>
						</li>
						<li>
					    	
						</li>
						<li>
					    	
						</li>
						<li>
					    	
						</li>                                                                     
						<li><a href="contact.html">contact</a></li>                                                                  
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
		<div class="container">
			<h2>contact us</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>contact us</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/inner-banner/img-06.jpg">
	</div>
	<!-- Page Heading banner -->
	
	<!-- Main Content -->
	<main class="main-content">

		<!-- Contact -->
		<div class="theme-padding white-bg">
			<div class="container">
			
				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>contact us</h2>
						<p>Chelsea captain John Terry is not ready to start against Stoke on Saturday and is struggling to prove his fitness.</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- contact columns -->
				<ul class="row">
					<li class="col-sm-4">
						<div class="address-widget">
							<span class="address-icon"><i class="fa fa-phone"></i></span>
							<h5>OUR NUMBERS</h5>
							<p>49 30 47373795<span class="red-color">Alise Vivienne ( manager )</span></p>
							<p>49 30 47373795<span class="red-color">Tina Rollandos ( secretary )</span></p>
							<p>Call at any time convenient for you. We are available for you 24/7</p>
						</div>
					</li>
					<li class="col-sm-4">
						<div class="address-widget more-info">
							<span class="address-icon"><i class="fa fa-info"></i></span>
							<h5>MORE INFO</h5>
							<strong>Cupim brisket shank, prosciutto porchetta kevin jowl ham hock.</strong>
							<p>Bresaola alcatra boudin andouille, ball tip rump pancetta shoulder. Beef ribs turducken tail flank. Leberkas pancetta tri-tip biltong spare ribs.</p>
						</div>
					</li>
					<li class="col-sm-4">
						<div class="address-widget office-adderss">
							<span class="address-icon"><i class="fa fa-map-marker"></i></span>
							<h5>OUR office address</h5>
							<p>1782 Harrison Street  Sun Prairie, WI 53590</p>
							<p><i class="red-color fa fa-envelope-o"></i>moin@blindtextgenerator.de</p>
							<p>Our office is located near the city center, on the left is a spacious park, swimming pool.</p>
						</div>
					</li>
				</ul>
				<!-- contact columns -->

			</div>
		</div>
		<!-- Contact -->

		<!-- Contact Form Holder -->
		<div class="theme-padding-bottom">
			<div class="container">
				<h2>Send us an email</h2> 
				<div class="row">
				
					<!-- Form -->
					<form id="contact-form" class="contact-form col-sm-6">
						<div class="form-group">
					    	<input type="text" class="form-control" required="required" placeholder="Name">
					    	<i class="fa fa-user"></i>
					   	</div>
					   	<div class="form-group">
					    	<input type="text" class="form-control" required="required" placeholder="Email *">
					   		<i class="fa fa-envelope"></i>
					   	</div>
					   	<div class="form-group">
					    	<input type="text" class="form-control" required="required" placeholder="Phone">
					   		<i class="fa fa-phone"></i>
					   	</div>
						<div class="form-group">
							<textarea class="form-control style-d" rows="6" id="comment" placeholder="Write Comments here..."></textarea>
							<i class="fa fa-pencil-square-o"></i>
						</div>
					   	<button class="btn red-btn pull-right">Send Comments</button>
					</form>
					<!-- Form -->

					<!-- Img -->
					<figure class="col-sm-6 tower-img">
						<div id="custom-map" class="contact-map"></div>
					</figure>
					<!-- Img -->

				</div>
			</div>
		</div>
		<!-- Contact Form Holder -->

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
	<a class="r-nav-logo" href="index.php"><img src="images/logo-1.png" alt=""></a>
    <ul class="respoinve-nav-list">
		<li>
			<a data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
			
		</li>
		<li>
			<a href="about.php">About</a>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Team</a>
			
		</li>
		<li>
			
		</li>
		<li>
			
		</li>
		<li>
			<a data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Match</a>
			
		</li>
		<li>
			
			
		</li>
		<li>
			
		</li> 
		<li>
			
			
		</li> 
		<li><a href="contact.html">Contact</a></li>                       
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

<!-- Mirrored from finelayers.net/html/soccer/soccer-ltr/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:13:30 GMT -->
</html>