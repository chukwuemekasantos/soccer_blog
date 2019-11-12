<?php

session_start();

//session_regenerate_id();
$con = new PDO("mysql:host=localhost;dbname=soccer","root","");

require_once('../soccer_class.php');

 $hello = new soccer;
     $hello->connect();
///$hello->profile_update();

if (isset($_SESSION['username'])) {
    
}else{
    header('location:../index.php');
}



?>

<!DOCTYPE html>
<html lang="en">

  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eaglet : Profile</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>

       <?php   
            include'sidebar.php';

       ?>
        <!-- /# sidebar -->

<?php include 'header.php';  ?>



    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, <span>Welcome Here 
                   
                 </span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                   
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                               
                               
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            
      


 

 <?php 
              


if (isset($_POST['profile'])) {
$uname = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['uname'])))));
$email = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['email'])))));
$phone = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['phone'])))));
$pass = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['pass'])))));
$s = $_SESSION['username'];
$select = $con->prepare("SELECT * FROM soccer_users WHERE username = '$s' ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$row = $select->fetch();
$id = $row['id'];
$u = $row['username']."1";
$p = $row['password'];
$update = $con->prepare("UPDATE soccer_users SET username = '$uname', email = '$email', phone = '$phone' , password = '$p' WHERE id = '$id' ");
if ($update->execute()) {
  echo "<i style='color:green;'>Your profile is updated successfully</i>";
  $update = $con->prepare("UPDATE soccer_posts SET username = '$uname' , post_id = '$u' WHERE post_id = '$u' ");

  $select = $con->prepare("SELECT * FROM soccer_users WHERE id = '$id' ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$r = $select->fetch();
$ur = $r['username']; 
$ses = $_SESSION['username'];
if ($ur != $ses) {
 $_SESSION['username'] = $r['username'];

}

}
}




$u = $_SESSION['username'];
$view = $con->prepare("SELECT * FROM soccer_users WHERE username = '$u' LIMIT 1");
  //$show = setFetchMode(PDO::FETCH_ASSOC);
$view->execute();
 while ($data = $view->fetch()) { 
       
     $uname = $data['username'];
     $email = $data['email'];
    $phone = $data['phone'];
     $pass = $data['password'];
     // if ($u != $uname) {
          $_SESSION['user'] = $data['identifier'];
          
     // }
    
 echo '

<div class="tab-pane" id="settings" role="tabpanel">

   
                                    <div class="card-body">
                                        <form  method="POST" class="form-horizontal form-material">
 <div class="form-group">
                                                <label class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="uname" value="'.$uname.'" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" value="'.$email.' " class="form-control form-control-line"  id="example-email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="pass" value="'.$pass.'" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="phone" value="'.$phone.'"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" name="profile">Update Profile</button>
                                                </div>
                                            </div>
                                               </form>
                                    </div>
                                </div>

                                ';      
                          } ?>        
                            

                                     
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
			<div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Eaglet. - <a href="#">example.com</a></p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>







    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js">
      

    </script>
    <!-- bootstrap -->


    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





  </body>


<!-- Mirrored from demos.pixelatethemes.com/eaglet-new/app-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:37:38 GMT -->
</html>
