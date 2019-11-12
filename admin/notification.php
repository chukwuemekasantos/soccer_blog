<?php

session_start();

require_once('../soccer_class.php');
$hello = new soccer;
    //PAGINATION
    $con = mysqli_connect("localhost","root","", "soccer");
    $currentPage = $_SERVER["PHP_SELF"];

          $maxRows_Recordset1 = 5; //LIMIT
          $p = 0;
          if (isset($_GET['p'])) {
            $p = $_GET['p'];
          }
          $startRow_Recordset1 = $p * $maxRows_Recordset1;

          $query_Recordset1 = "SELECT * FROM soccer_posts ORDER BY id DESC"; //YOUR QUERY
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


require_once('../soccer_class.php');
$con = new PDO("mysql:host=localhost;dbname=soccer","root","");
 $hello = new soccer;
     $hello->connect();
if (isset($_SESSION['username'])) {
 
}else{
    header('location:../index.php');
}



?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.pixelatethemes.com/eaglet-new/table-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 13:07:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eaglet : Data Table</title>

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
    <link href="assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
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
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
               
               <section>
                 <center>



 <div class="card col-lg-12">

    <div class="row"> 
         <div class="col-lg-8"> 
                                <div class="table-responsive">
                               <form method="POST">
                                <table class="table table-striped ">


                                  <?php


do{

              if ($row_Recordset1) {
               
               //  $con = new PDO("mysql:host=localhost;dbname=soccer","root","");
               // $status_check ="11";
               // $select = $con->prepare("SELECT * FROM soccer_posts WHERE status_check = '$status_check' ORDER BY id DESC LIMIT 10");
                              // if ($select->execute()) {
                                // while ($row_Recordset1 = $select->fetch()) {
                                $id = $row_Recordset1['id'];
                                $user = $row_Recordset1['username'];
                                $title = $row_Recordset1['title'];
                                $time = $row_Recordset1['date_of_post'];

                                $on = "document.getElementById('id01').style.display='block'"; 
                               echo"
                               <form method='POST'>
                                                               <tr>
                                <th>".$id."</th>
                                <td>".$user."</td>
                                <td id=''><a href=''><button class='btn btn-primary' onclick=".$on." >View</button></a></td>
                                <td id=''><button type='submit' name='approve' class='btn btn-success'  >Approve</button></td>
                                <td id=''><input type='hidden' name='id' value='".$id."'/></td>
                                <td id=''><button type='submit' name='decline' class='btn btn-danger'  >Decline</button></td>
                                </form>

                                ";
                                if(isset($_POST['approve'])){
                                      $d = $_POST['id'];
                                      $approve = 'approve';
$insert = $con->prepare("UPDATE soccer_posts SET status_approve = '$approve' WHERE id = '$d' ");
if($insert->execute()){
   $insert = $con->prepare("UPDATE soccer_posts SET status_decline = '' WHERE id = '$d' ");
    $insert->execute();
    $insert2 = $con->prepare("UPDATE soccer_posts SET status_pending = '' WHERE id = '$d' ");
    $insert2->execute();
     
}
}
if (isset($_POST['decline'])) {
   $decline = 'decline';
    $d = $_POST['id'];
   $insert1 = $con->prepare("UPDATE soccer_posts SET status_decline = '$decline' WHERE id = '$d' ");
   if ($insert1->execute()) {
    $insert = $con->prepare("UPDATE soccer_posts SET status_approve = '' WHERE id = '$d' ");
    $insert->execute();
     $insert2 = $con->prepare("UPDATE soccer_posts SET status_pending = '' WHERE id = '$d' ");
    if($insert2->execute()){
   
}
   }
 } 

  // $insert1 = $this->con->prepare("UPDATE soccer_posts SET status_approve = '' WHERE id = '$u' ");
  // $insert1->execute();
  //                               }
            

               }  
               else{
                    echo "<h1 style='color:red; margin-top:40px;'>NO RESULT FOUND</h1>";
               }                                
              
}
              
            while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
             
            
            ?>
                  </table>
                            </form>   
                                </div>  
                          </div>
                      </div>
 
         <br> 
         <br>   

            <div class="col-sm-12" style='padding:0px'>
                
                                          <?php if ($p > 0) { // Show if not first page ?>
                                          <a href="<?php printf("%s?p=%d%s", $currentPage, max(0, $p - 1), $queryString_Recordset1); ?>" class='btn btn-sm' style='text-decoration: none; margin-left: -180px; background-color: #FF8D1B; color: white;'><i class="fa fa-arrow-circle-left"></i> Previous</a>
                                          <?php } // Show if not first page ?>
                                          <?php if ($p < $totalPages_Recordset1) { // Show if not last page ?>
                                          <a href="<?php printf("%s?p=%d%s", $currentPage, min($totalPages_Recordset1, $p + 1), $queryString_Recordset1); ?>" class='btn btn-sm  pull-right' style='text-decoration: none; margin-right: 140px; background-color: #FF8D1B; color: white;'>Next <i class="fa fa-arrow-circle-right"></i></a>
                                          <?php } ?>
                                          
                                    </div>










<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<div id="id01" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
  
           <?php
           $v = $_GET['v'];
            
                echo($v);      

              
           ?>
<b>


  Object Oriented Programming is a programming concept that works on the principle that objects are the most important part of your program. It allows users create the objects that they want and then create methods to handle those objects. Manipulating these objects to get results is the goal of Object Oriented Programming.
Object Oriented Programming popularly known as OOP, is used in a modern programming language like Java
Core OOPS concepts are
1) Class
The class is a group of similar entities. It is only a logical component and not the physical entity. For example, if you had a class called “Expensive Cars” it could have objects like Mercedes, BMW, Toyota, etc. Its properties (data) can be price or speed of these cars. While the methods may be performed with these cars are driving, reverse, braking etc.
2) Object
An object can be defined as an instance of a class, and there can be multiple instances of an object in a program. An Object contains both the data and the function, which operates on the data. For example - chair, bike, marker, pen, table, car, etc.
3) Inheritance
Inheritance is an OOPS concept in which one object acquires the properties and behaviors of the parent object. It’s creating a parent-child relationship between two classes. It offers robust and natural mechanism for organizing and structure of any software.
4) Polymorphism
Polymorphism refers to the ability of a variable, object or function to take on multiple forms. For example, in English, the verb “run” has a different meaning if you use it with “a laptop,” “a foot race, and ”business.&rdquo Here, we understand the meaning of “run” based on the other words used along with it.The same also applied to Polymorphism.
5) Abstraction
An abstraction is an act of representing essential features without including background details. It is a technique of creating a new data type that is suited for a specific application. For example, while driving a car, you do not have to be concerned with its internal working. Here you just need to concern about parts like steering wheel, Gears, accelerator, etc.
6) Encapsulation

</b>
    </form>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





                      </div>

</center>

                </section>


   
                
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
    
    <!-- bootstrap -->

    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>










</body>


<!-- Mirrored from demos.pixelatethemes.com/eaglet-new/table-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 13:07:30 GMT -->
</html>