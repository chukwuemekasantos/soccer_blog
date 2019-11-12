<?php

session_start();

?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from finelayers.net/html/soccer/soccer-ltr/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:11:24 GMT -->
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
		<div class="container">
			<h2>About</h2>
			<ul class="breadcrumbs">
				<li><a href="index.php">Home</a></li>
				<li>Latest News</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- About Video -->
		<div class="about-video-holder theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/about-video-bg.jpg">
			<div class="container text-center">
				<div class="about-video">
					<div class="video">
						<img src="images/about-video-1.jpg" alt="">
						<span class="play-lable fa fa-video-camera"></span>
						<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
					</div>
					<div class="about-video-caption">
						<h2>About Club History</h2>
						<p>Felis volutpat taciti donec sem dapibus ac semper taciti, aliquam pretium congue aliquam venenatis turpis nec, nulla pellentesque lorem volutpat sapien nullam curabitur justo vestibulum tristique convallis leo mollis venenatis vel eleifend senectus tempus eleifend urna, at consectetur bibendum eros pharetra nisi mi tristique nec porta.Senectus pellentesque euismod venenatis inceptos</p>
					</div>
				</div>
			</div>
		</div>
		<!-- About Video -->

		<!-- Facilities And What we do best -->
		<div class="theme-padding">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>CLUB <span class="red-color">FACILITIES</span></h2>
						<p>Kings Club Despicable briefly jeepers much roughly sped ouch in one away supportive grateful.</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- Facilities row -->
				<ul class="row">
				
					<!-- Facilities column -->
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-1 position-center-x"><img src="images/png-icons/img-01.png" alt=""></span>
							<h5><a href="#">PLAYER WORKSHOPS</a></h5>
							<p>Sem augue scelerisque sapien neque congue fusce ac, lobortis donec non adipiscing fusce lobortis placerat donec, tempus</p>
						</div>
					</li>
					<!-- Facilities column -->

					<!-- Facilities column -->
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-2 position-center-x"><img src="images/png-icons/img-02.png" alt=""></span>
							<h5><a href="#">Media Galleries</a></h5>
							<p>Quis pellentesque convallis sem torquent lacus blandit rutrum, at adipiscing sociosqu vitae facilisis ornare, phasellus</p>
						</div>
					</li>
					<!-- Facilities column -->

					<!-- Facilities column -->
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-3 position-center-x"><img src="images/png-icons/img-03.png" alt=""></span>
							<h5><a href="#">LADIES TEAM</a></h5>
							<p>Eu sem consequat bibendum torquent phasellus dapibus enim congue felis dapibus cras, molestie ac molestie</p>
						</div>
					</li>
					<!-- Facilities column -->

					<!-- Facilities column -->
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-4 position-center-x"><img src="images/png-icons/img-04.png" alt=""></span>
							<h5><a href="#">SOCCER board</a></h5>
							<p>Leo tellus fermentum etiam cubilia erat himenaeos platea nostra, vehicula eleifend massa habitasse quis ut purus</p>
						</div>
					</li>
					<!-- Facilities column -->

					<!-- Facilities column -->
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-5 position-center-x"><img src="images/png-icons/img-05.png" alt=""></span>
							<h5><a href="#">DEDICATED COACHS</a></h5>
							<p>Dapibus commodo nibh quisque tempor euismod dolor placerat tempor molestie, vel pulvinar quisque proin habitant</p>
						</div>
					</li>
					<!-- Facilities column -->

					<!-- Facilities column -->
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-6 position-center-x"><img src="images/png-icons/img-06.png" alt=""></span>
							<h5><a href="#">Tournament</a></h5>
							<p>Aenean pulvinar facilisis etiam enim augue tortor consequat euismod habitant purus quisque facilisis, pellentesque</p>
						</div>
					</li>
					<!-- Facilities column -->

				</ul>
				<!-- Facilities row -->

			</div>
		</div>
		<!-- Facilities And What we do best -->

		<!-- Coach Statement -->
		<div class="coach-statement-holder theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/coach-statement-bg.jpg">
			<div class="container">
				<div class="coach-statement">
					<div class="coach-img">
						<img src="images/coach.jpg" alt="">
					</div>
					<div class="statement">
						<h3>The President</h3>
						<p>Neque donec dictumst fringilla faucibus nulla nisi cras faucibus felis, ut quisque felis blandit semper mollis molestie sodales senectus pharetra, in semper est fermentum phasellus condimentum turpis nisi etiam vel semper curabitur tincidunt accumsan sapien lobortis accumsan venenatis, nostra egestas vivamus erat hendrerit pulvinar per vehicula. Scelerisque imperdiet euismod curabitur mauris.</p>
						<p>morbi elit ultrices quisque metus aliquam pellentesque, netus sapien curae adipiscing in suspendisse.sodales dapibus lacus sapien nibh hac mauris nam. ut luctus lorem egestas ad, faucibus nullam ipsum id magna scelerisque quam fringilla rutrum.</p>
						<img src="images/signature.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- Coach Statement -->

		<!-- Team -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="team-holder">

					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading">
							<h2>our Team member</h2>
							<p>Chelsea captain John Terry is not ready to start against Stoke on Saturday and is struggling to prove his fitness.</p>
						</div>
					</div>
					<!-- Main Heading -->

					<!-- Team Row -->
					<div id="team-slider" class="team-slider">

						<!-- Team Column -->
						<div class="item">
							<div class="team-column">
								<img src="images/team/img-01.jpg" alt="">
								<span class="player-number">12</span>
								<div class="team-detail">
									<h5><a href="#">Lionel Andrés</a> Messi</h5>
									<span class="desination">Defender</span>
									<div class="detail-inner">
										<ul>
											<li>Born</li>
											<li>Position</li>
											<li>Squad number</li>
											<li>Previous Club</li>
											<li>Fallow us on</li>
										</ul>
										<ul>
											<li>August 31, 1988</li>
											<li>Goalkeeper</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
													<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Team Column -->

						<!-- Team Column -->
						<div class="item">
							<div class="team-column">
								<img src="images/team/img-02.jpg" alt="">
								<span class="player-number">12</span>
								<div class="team-detail">
									<h5><a href="#">Philipp Lahm</a></h5>
									<span class="desination">Middle player</span>
									<div class="detail-inner">
										<ul>
											<li>Born</li>
											<li>Position</li>
											<li>Squad number</li>
											<li>Previous Club</li>
											<li>Fallow us on</li>
										</ul>
										<ul>
											<li>August 31, 1988</li>
											<li>Goalkeeper</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
													<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Team Column -->

						<!-- Team Column -->
						<div class="item">
							<div class="team-column">
								<img src="images/team/img-03.jpg" alt="">
								<span class="player-number">12</span>
								<div class="team-detail">
									<h5><a href="#">David Ospina</a></h5>
									<span class="desination">Defender</span>
									<div class="detail-inner">
										<ul>
											<li>Born</li>
											<li>Position</li>
											<li>Squad number</li>
											<li>Previous Club</li>
											<li>Fallow us on</li>
										</ul>
										<ul>
											<li>August 31, 1988</li>
											<li>Goalkeeper</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
													<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Team Column -->

						<!-- Team Column -->
						<div class="item">
							<div class="team-column">
								<img src="images/team/img-04.jpg" alt="">
								<span class="player-number">12</span>
								<div class="team-detail">
									<h5><a href="#">Jerome Boateng</a></h5>
									<span class="desination">Defender</span>
									<div class="detail-inner">
										<ul>
											<li>Born</li>
											<li>Position</li>
											<li>Squad number</li>
											<li>Previous Club</li>
											<li>Fallow us on</li>
										</ul>
										<ul>
											<li>August 31, 1988</li>
											<li>Goalkeeper</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
													<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Team Column -->

					</div>
					<!-- Team Row -->

				</div>
			</div>
		</div>
		<!-- Team -->

		<!-- Add Banner -->
		<div class="container text-center">
			<a href="add-banner.html"><img src="images/add-banner-2.jpg" alt=""></a>
		</div>
		<!-- Add Banner -->

		<!-- Products -->
		<div class="theme-padding">
			<div class="container">
				<div class="products-holder p-0">
					<div id="product-slider-2" class="product-slider nav-style-1 style-2">
						
						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-1.jpg" alt="">
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->

						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-2.jpg" alt="">
									<span class="sale-batch">sale</span>
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->

						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-3.jpg" alt="">
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->

						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-4.jpg" alt="">
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->

						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-5.jpg" alt="">
									<span class="sale-batch">sale</span>
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->

						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-6.jpg" alt="">
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->

						<!-- Product Column -->
						<div class="product-column">
							<div class="product-column-inner">
								<div class="product-img">
									<img src="images/products/img-2-7.jpg" alt="">
								</div>
								<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
								<span class="product-use">Men’s Running Shirt</span>
							</div>
							<div class="btm">
								<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								<span class="price">$39.00</span>
							</div>
						</div>
						<!-- Product Column -->
							
					</div>
				</div>
			</div>
		</div>
		<!-- Products -->

		<!-- Testimonial -->
		<div class="testimonial gray-bg theme-padding">
			<div class="container">
                  	
              	<!-- Testimonial Thumnail -->
				<ul id="testimonial-thumnail" class="testimonial-thumnail">
					<li><img src="images/testimonial/img-02.jpg" alt=""></li>
					<li><img src="images/testimonial/img-02.jpg" alt=""></li>
					<li><img src="images/testimonial/img-03.jpg" alt=""></li>
				</ul>
				<!-- Testimonial Thumnail -->

				<!-- Testimonial slides -->
				<ul id="testimonial-slides" class="testimonial-slides">
					<li>
						<p>Nam tempor vivamus ac odio purus ut congue himenaeos lectus ligula, ut condimentum consequat diam luctus mauris consectetur semper tincidunt quam ultrices neque ante.</p>
						<h5>Abhimanyu Rana</h5>
					</li>
					<li>
						<p>Nam tempor vivamus ac odio purus ut congue himenaeos lectus ligula, ut condimentum consequat diam luctus mauris consectetur semper tincidunt quam ultrices neque ante.</p>
						<h5>Abhimanyu Rana</h5>
					</li>
					<li>
						<p>Nam tempor vivamus ac odio purus ut congue himenaeos lectus ligula, ut condimentum consequat diam luctus mauris consectetur semper tincidunt quam ultrices neque ante.</p>
						<h5>Abhimanyu Rana</h5>
					</li>
				</ul>
				<!-- Testimonial slides -->

            </div>
		</div>
		<!-- Testimonial -->

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
			<a data-toggle="collapse" href="index.php"><i class="pull-right fa fa-angle-down"></i>Home</a>
			<ul class="collapse" id="list-1">
			 	
			</ul>
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

</html>