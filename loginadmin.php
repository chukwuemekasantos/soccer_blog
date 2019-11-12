<?php 
session_start();
require_once('soccer_class.php');

 $hello = new soccer;
     $hello->connect();


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">	
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/transition.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="js/vendor/modernizr.js"></script>
</head>
<body>

<li class="login-modal">
<div  id="login-modal">
						  	<div class="login-form position-center-center">
								<h2>Login<button class="close" data-dismiss="modal"></h2>
								<form method="POST">
									<?php  
                                        $hello->loginadmin();
									?>
									
									<div class="form-group">
										<input type="text" class="form-control" name="username" placeholder="username or email">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group custom-checkbox">
									    <label>
									    	<input type="checkbox"> Stay login
									    </label>
									    <a class="pull-right forgot-password" href="#"></a>
									    <a href="resetpass.php" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Forgot password?</a>

									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn" type="submit" name="login">Login</button>
									</div>
								</form>
								
								
							</div>
						</div>
</li>
</body>
</html>