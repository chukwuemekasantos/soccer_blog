<?php

class soccer{

public $con;

public function connect()
{
 if ($this->con = new PDO("mysql:host=localhost;dbname=soccer","root",""));
 {
  	//echo "you are connected";
 }
 } 

//users register
public function register()
{
if (isset($_POST['register'])) {
  $select = $this->con->prepare("SELECT username,password FROM soccer_users WHERE username=:username");
$user = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['username'])))));
     $select->execute(array(':username' => $user ));
      $row = $select->fetch(PDO::FETCH_ASSOC);
     
     if ($row['username'] == $user){
     echo  "<center style='color:red;'>username has been take</center>";   
  }else{
$insert = $this->con->prepare("INSERT INTO soccer_users(username,password,email,phone,identifier) VALUES(:username,:password,:email,:phone,:identifier)");
  //$user = '';
  $iden = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST["identifier"])))));
  $pass = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST["password"])))));
  $newpassword = password_hash($pass , PASSWORD_DEFAULT);
  $email = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST["email"])))));
  $phone = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST["phone"])))));

    $insert->bindparam(':username', $_POST["username"]);
    $insert->bindparam(':password', $newpassword);
    $insert->bindparam(':email', $_POST["email"]);
    $insert->bindparam(':phone', $_POST["phone"]);
     $insert->bindparam(':phone', $_POST["phone"]);
      $insert->bindparam(':identifier', $_POST["identifier"]);
    $insert->execute();
    echo "<center style='color:green'>Your account has been created successfully!</center>";  

  }
}
}//fxn ends


public function login()
{
  if (isset($_POST['login'])) {
   
    $reg = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['username'])))));
    $email = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['username'])))));
    $regpass = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['password'])))));
  $select = $this->con->prepare("SELECT id,username,password,email FROM soccer_users WHERE username=:username OR email=:email");
     $select->execute(array(':username' => $reg,':email' =>$email));
      $row = $select->fetch(PDO::FETCH_ASSOC);
    // if ($select->rowCount() == 1){
     if ($reg == $row['username'] AND password_verify($regpass,$row['password'])){
             
          $_SESSION['username'] = $row['username'];
           $_SESSION['identifier'] = $row['identifier'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['phone'] = $row['phone'];
         header('location:profile/index.php');
      
  }else
       {
       print("<center style='color:red'>invalid information</center>");
       
       } 
     
}
}


public function loginadmin()
{
  if (isset($_POST['login'])) {
    //$id = $_POST['user_id'];
    $reg = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['username'])))));
    $email = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['username'])))));
    $regpass = htmlentities(htmlspecialchars(stripcslashes(trim(mysql_real_escape_string($_POST['password'])))));
  $select = $this->con->prepare("SELECT id,username,password,email FROM soccer_admin WHERE username=:username OR email=:email");
     $select->execute(array(':username' => $reg,':email' =>$email));
      $row = $select->fetch(PDO::FETCH_ASSOC);
    // if ($select->rowCount() == 1){
     if ($reg == $row['username'] AND password_verify($regpass,$row['password'])){
             
          $_SESSION['username'] = $row['username'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['phone'] = $row['phone'];
          $_SESSION['user_id'] = $row['id'];
         header('location:admin/index.php');
      
  }else
       {
       print("<center style='color:red'>invalid information</center>");
       
       } 
     
}
}

//upload for post
public function post_upload()
{
  if (isset($_POST['submit'])) {
    $post_image = $_FILES["post_image"]["name"];
    $size = $_FILES["post_image"]["size"];
    $tmp = $_FILES["post_image"]["tmp_name"];
    $post_title = $_POST["post_title"];
    $username = $_POST['user'];
    $post_content= $_POST["post_content"];
    $post_id = $_POST["post_id"];
    $id = $_POST["id"];
    $status = 1;
    $status_check = 11;
    $status_pending = 'pending';
    $uploadedpimage = "featured_image/".$_FILES["post_image"]["name"];
    $uploadpimage = move_uploaded_file($tmp, $uploadedpimage);
    if (round($_FILES['post_image']["size"] / 1024) > 2096) {
     
      echo "
      <div class='container'>
<div class='alert alert-danger'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close' style='margin-right:20px; color:red;'>&times;</a>
  <strong>you cannot upload file of 2mb</strong> .
</div>
</div>
     ";
    }
  elseif($uploadpimage){
    $add = $this->con->prepare("INSERT INTO soccer_posts(username,title,post,featured_image,status,status_check,status_pending,post_id) VALUES(:username,:post_title,:post_content,:post_image,:status,:status_check,:status_pending,:post_id)");
     //$add->bindparam(":id",$id);
     $add->bindparam(":username",$username);
    $add->bindparam(":post_title",$post_title);
    $add->bindparam(":post_content",$post_content);
    $add->bindparam(":post_image",$post_image);
    $add->bindparam(":status",$status);
    $add->bindparam(":status_check",$status_check);
    $add->bindparam(":status_pending",$status_pending);
    $add->bindparam(":post_id",$post_id);
    if ($add->execute()) {
      echo "
      <div class='container'>
<div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close' style='margin-right:20px; color:green;'>&times;</a>
  <strong>Success! Your post is uploaded successfully</strong> .
</div>
</div>
     ";
}else{
  echo "
  <div class='container'>
<div class='alert alert-danger' style='margin-right:20px; color:red;'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>failed! Uploading post unsuccessfull</strong> .
</div>
</div>";
    }
  }
}
}



public function post_id(){
if (isset($_POST['login'])) {
   $select = $this->con->prepare("SELECT * FROM soccer_users");

   $select->execute();

     while ($row = $select->fetch()) {
       $n = $row['id'];
       //$_SESSION['id'] = $row['id'];
       echo($n);
}
}
}

//
public function notification_of_post(){
  
$select = $this->con->prepare("SELECT id, COUNT(*) AS 'c' FROM soccer_posts WHERE status = '1' ");
                              if ($select->execute()) {
                                while ($row = $select->fetch()) {
                                echo($row['c']);
                                    }
                                  } }
       

public function post_list(){
 
}

// public function post_view(){
//      echo"
//      <div class='card col-lg-12'>
//     <div class='row'> 
//          <div class='col-lg-8'> 
//                                 <div class='table-responsive'>
                                
//                                 <table class='table table-striped '>

//      <tr>
//                                 <th>".$row_Recordset1['id']."</th>
//                                 <td>".$row_Recordset1['username']."</td>
//                                 <td id=''><a href='#?id=".$row_Recordset1['id']."'><button class='btn btn-primary' onclick='' >View</button></a></td>
//                                 <td id=''><button class='btn btn-success'  >Approve</button></td>
//                                 <td id=''><button class='btn btn-danger'  >Decline</button></td>
//                                     </table>
                                
//                                 </div>  
//                           </div>
//                       </div>

// ";
// }

public function check_post(){
if(isset($_POST['check'])){
  $update = $this->con->prepare("UPDATE soccer_posts SET status='0' WHERE status_check='11' ");
  $update->execute();
}

}


public function approve_post(){

}
//}


public function ptitle($title){
$info = $_GET['v']; 
$view = $this->con->prepare("SELECT * FROM soccer_posts WHERE id = '$info' LIMIT 1");
  //$show = setFetchMode(PDO::FETCH_ASSOC);
$view->execute();
    while ($data = $view->fetch()) {
      $title =  $data['title'];
      $img = $data['featured_image'];
      echo "$title ";
  }
}

public function puser(){
$info = $_GET['v']; 
$view = $this->con->prepare("SELECT * FROM soccer_posts WHERE id = '$info' LIMIT 1");
  //$show = setFetchMode(PDO::FETCH_ASSOC);
$view->execute();
    while ($data = $view->fetch()) {
      $user =  $data['username'];
     
      echo "$user";
       
  }
}

public function ptime(){
$info = $_GET['v']; 
$view = $this->con->prepare("SELECT * FROM soccer_posts WHERE id = '$info' LIMIT 1");
  //$show = setFetchMode(PDO::FETCH_ASSOC);
$view->execute();
    while ($data = $view->fetch()) {
      $ptime =  $data['date_of_post'];
     
      echo "$ptime";
       
  }
}


public function ppost(){
$info = $_GET['v']; 
$view = $this->con->prepare("SELECT * FROM soccer_posts WHERE id = '$info' LIMIT 1");
  //$show = setFetchMode(PDO::FETCH_ASSOC);
$view->execute();
    while ($data = $view->fetch()) {
      $ppost =  $data['post'];
     
      echo "$ppost";
       
  }
}


public function comment(){
if (isset($_POST['mgr'])) {
  $uid = $_GET['v'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
   $t = $_POST['t'];
  $insert = $this->con->prepare("INSERT INTO soccer_comments(name,email,phone,message,uid,t) VALUES(:name,:email,:phone,:message,:uid,:t) ");
    $insert->bindparam(':name', $name);
    $insert->bindparam(':email',$email);
    $insert->bindparam(':phone', $phone);
    $insert->bindparam(':message', $message);
    $insert->bindparam(':uid', $uid);
    $insert->bindparam(':t', $t);
    if ($insert->execute()) {
    
    }}
}


public function comments(){
 $info = $_GET['v'];
 $select = $this->con->prepare("SELECT * FROM soccer_comments WHERE uid = '$info' ORDER BY id DESC LIMIT 4 ");

   $select->execute();

     while ($row = $select->fetch()) {
    
        
      
      $n = $row['name'];
     

    echo '
        
       <ul>
                <li>
                  <img class="position-center-x" src="images/commenter/img-01.jpg" alt="">
                  <div class="comment-detail">
                    <h5><a href="#">'.$n.'</a></h5>
                    <span>'.$row['t'].'</span>
                    <p>'.$row['message'].'</p>
                  </div>
                </li>
                <br>
              </ul>
    ';
   
}

    }



public function admin_details(){
  $user = 'admin';
  $pass = '1234567';
  $p = password_hash($pass , PASSWORD_DEFAULT);
  $email = 'admin@gmail.com';
  $phone = '09076451233';
  if (isset($_POST['ins'])) {
   $insert = $this->con->prepare("INSERT INTO soccer_admin(username,email,phone,password) VALUES('$user','$email','$phone','$p')");
    $insert->execute();
}

  }


// public function profile_update(){

// }









}


?>