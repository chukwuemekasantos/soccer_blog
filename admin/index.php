<?php
session_start();
require_once('../soccer_class.php');
$con = new PDO("mysql:host=localhost;dbname=soccer","root","");
 $hello = new soccer;
     $hello->connect();
     $hello->admin_details();
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

        <title>Eaglet : Admin UI</title>

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
        <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/lib/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

         <?php  include 'header.php'; ?>

        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>Hello, <span>Welcome Here</span></h1>

                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                       <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div id="main-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total User</div>
                      <div class="stat-digit">
                        
                        <?php 
                       $n = 1;
                      $b = $_SESSION['username'].''.$n;
                                                
                      $select = $con->prepare("SELECT id, COUNT(*) AS 'c' FROM soccer_users ");
                              if ($select->execute()) {
                                while ($row = $select->fetch()) {
                                echo($row['c']);

                              
                                    }
                                  } ?>
       
                            


                         </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-pencil-alt
                     color-success border-success"></i></div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total Post </div>
                      <div class="stat-digit">
                          <?php 
                       $n = 1;
                      $b = '';
                                                
                      $select = $con->prepare("SELECT post_id, COUNT(*) AS 'c' FROM soccer_posts  ");
                              if ($select->execute()) {
                                while ($row = $select->fetch()) {
                                echo($row['c']);
                                    }
                                  } ?>
       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
                <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-check color-success border-success"></i></div>
                    <div class="stat-content dib">
                      <div class="stat-text">Approve </div>
                      <div class="stat-digit">
                          <?php 
                       $n = 1;
                      $b = 'approve';
                                                
                      $select = $con->prepare("SELECT status_approve, COUNT(*) AS 'c' FROM soccer_posts WHERE status_approve = '$b' ");
                              if ($select->execute()) {
                                while ($row = $select->fetch()) {
                                echo($row['c']);
                                    }
                                  } ?>
       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               
              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-info-alt color-warning border-warning"></i></div>
                    <div class="stat-content dib">
                      <div class="stat-text">Pending </div>
                      <div class="stat-digit">
                          <?php 
                       $n = 1;
                      $b = 'pending';
                                                
                      $select = $con->prepare("SELECT status_pending, COUNT(*) AS 'c' FROM soccer_posts WHERE status_pending = '$b' ");
                              if ($select->execute()) {
                                while ($row = $select->fetch()) {
                                echo($row['c']);
                                    }
                                  } ?>
       
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-info-alt color-danger border-danger"></i></div>
                    <div class="stat-content dib">
                      <div class="stat-text">Delined </div>
                      <div class="stat-digit">
                            <?php 
                       $n = 1;
                      $b = 'decline';
                                 
                      $select = $con->prepare("SELECT status_decline, COUNT(*) AS 'c' FROM soccer_posts WHERE status_decline = '$b' ");
                              if ($select->execute()) {
                                while ($row = $select->fetch()) {
                                echo($row['c']);
                                    }
                                  } ?>
       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
                  <?php echo""; ?>
             <form method="POST">
               <button type="submit" name="ins" class="btn btn-primary" style="display: none;">insert</button>
             </form>
              
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <!-- /# row -->
                        </div>
                        <!-- /# row -->


                        
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
        <script src="assets/js/lib/bootstrap.min.js"></script>

        <!-- bootstrap -->

        <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

        <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
        <script src="assets/js/lib/morris-chart/morris.js"></script>
        <script src="assets/js/lib/morris-chart/morris-init.js"></script>

        <!--  flot-chart js -->
        <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
        <!-- // flot-chart js -->


        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/vector.init.js"></script>

        <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="assets/js/lib/weather/weather-init.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->

    </body>


<!-- Mirrored from demos.pixelatethemes.com/eaglet-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 12:32:38 GMT -->
</html>
