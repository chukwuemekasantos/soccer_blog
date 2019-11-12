
<?php
session_start();
require_once('../soccer_class.php');

 $hello = new soccer;
     $hello->connect();
if (isset($_SESSION['username'])) {
    
}else{
    header('location:../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from demos.pixelatethemes.com/eaglet-new/form-editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 13:07:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eaglet : Blank</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->

     <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">


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
    <link rel="stylesheet" href="assets/css/lib/html5-editor/bootstrap-wysihtml5.css" />
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
           <div class="header" style="margin-top:-40px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <form>
                            <div class="float-left m-l-10 m-t-5">
                            
                            </div>
                        </form>
                            
                        <form method="POST" action="notification.php">
                            
                        <div class="float-right">
                            <ul>
                                <?php $hello->check_post();  ?>
                               
                                <li class="header-icon dib">
                                   
                                     <button type="submit" onClick="location.href='notification.php'" class="btn btn-primary" name="check"><i class="ti-bell"></i> <span style="color: white;">
                                  </span></button>                                      
                                    <br></i>
                                    <div class="drop-down">
                                        
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                <span class="badge"></span>
                                                <div class="notification-content">
                                                   
                                                   <?php $hello->post_list(); ?>
                                                   
                                                </div>
                                            </a>
                                                </li>
                                                
                                            
                                            </ul></form>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-icon dib"><a ><button type="submit" name="check" class="btn btn-primary" ><i class="ti-email"></i> <span style="color: white;"><?php   ?></button></span></a>
                                   
                                </li>
                                <li class="header-icon dib"><span class="user-avatar"><?php echo($_SESSION['username']);  ?><i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Upgrade Now</span>
                                            <p class="trial-day">30 Days Trail</p>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>

                                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
              <?php
               $hello->post_upload();
                ?>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">UI-Blank</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
          <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add New Post</h4>
                                <h6 class="card-subtitle">Bootstrap html5 editor</h6>
                                <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                 

                                  <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="hidden" class="textarea_editor form-control" rows="15" placeholder="Enter tile ..." name="user" style=" " value="<?php echo($_SESSION['username']); ?>">
                                    </div>
                                </div>

                                     
                                     <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="hidden" class="textarea_editor form-control" rows="15" placeholder="Enter tile ..." name="id" style=" ">
                                    </div>
                                </div>


                                     <div class="col-lg-8">
                                     <div class="form-group">
                                        <input type="hidden" class="textarea_editor form-control" rows="15" placeholder="Enter tile ..." name="post_id" style=" " value="<?php
                                    $n = print_r($_SESSION['username']);
                                      echo($n);
                                    ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                                 <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="textarea_editor form-control" rows="15" placeholder="Enter tile ..." name="post_title" style=" ">
                                    </div>
                                </div>
                                   
                                    

                                </div>

                                     <div class="row">
                                        <div class="col-lg-8">
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." name="post_content" style="height:450px; "></textarea>
                                    </div>
                                </div>
                                  
                                  
                                 <div class="col-md-4" style="height:300px;">
                                <div class="card text-center">
                                    <div class="m-t-10">
                                        <p>Featured Image</p>
                                       
                                       
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
            <div>
              <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"  name="post_image" /></span>
              <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
            </div>
          </div>
        
                                    </div>
                                    
                                    
                                </div>
                            </div>

                                   </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="form-control btn btn-primary" rows="15">POST</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
     <script src="./js/jquery.min.js"></script>


      <script src="assets/js/bootstrap-fileupload.js"></script>
       <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/bootstrap-inputmask.js"></script>
    <script src="assets/js/bootstrap-rowlink.js"></script>
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>







    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <!--stickey kit -->
    <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-init.js"></script>


    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
  </body>



</html>
