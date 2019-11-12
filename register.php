<?php
session_start();

require_once('soccer_class.php');

 $hello = new soccer;
     $hello->connect();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
								<h2>REGISTER<button class="close" data-dismiss="modal"></h2>
								<form method="POST">
									<?php $hello->register(); ?>
									<div class="form-group">
										<input type="text" class="form-control" name="username" placeholder="username" required="" maxlength="20">
										<i class=" fa fa-user"></i>	
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="domain@live.com" required="" >
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="phone" class="form-control" name="phone" placeholder="xxx-xxxx-xxxx" required="" maxlength="11">
										<i class=" fa fa-phone"></i>	
									</div>
                                  
                                   <div class="form-group">
										<input type="hidden" class="form-control" name="identifier" required="" value="user">
										<i class=" fa fa-lock"></i>	
									</div>


									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="**********" required="" maxlength="15">
										<i class=" fa fa-lock"></i>	
									</div>
									
									<div class="form-group custom-checkbox">
									    <label>
									    	
									    </label>
									    <a class="pull-left forgot-password" href="index.php">cancel</a>
									    <a href="login.php" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Have an account Login?</a>
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn" type="submit" name="register">Register</button>
									</div>
								</form>
								
								
							</div>
						</div>
</li>
</body>
</html>