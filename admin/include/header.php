
        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.php"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Eaglet</span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="" href="index.php"><i class="ti-home"></i> Dashboard <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                           
                        </li>

                        <li class="label">Apps</li>
                       
                        
                        
                        <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
                        <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
                        
                        <li><a class="" href="calendar.php"><i class="ti-panel"></i> Calendar <span class=""></span></a>
                        </li>
                         
                         <li><a class="" href="contact.php"><i class="ti-email"></i> Contact <span class=""></span></a>
                        </li>

                         <li><a class="" href="post.php"><i class="ti-panel"></i> Post <span class=""></span></a>
                        </li>
                         <li><a class="" href="notification.php"><i class="ti-bell"></i> Notification <span class=""></span></a>
                        </li>
                       
                        <li><a href="../logout.php"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->
        <!-- /# sidebar -->


       <div class="header">
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
                        <form method="POST">
                        <div class="float-right">
                            <ul>
                                <?php $hello->check_post();  ?>
                               
                                <li class="header-icon dib">
                                   
                                     <button onClick="window.location.assign('notification.php')" class="btn btn-primary" name="check"><i class="ti-bell"></i> <span style="color: white;">
                                  <?php $hello->notification_of_post();  ?></span></button>                                      
                                    <br></i>
                                    <div class="drop-down">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
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
                                                
                                            
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul></form>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-icon dib"><a ><button type="submit" name="check" class="btn btn-primary" ><i class="ti-email"></i> <span style="color: white;"><?php   ?></button></span></a>
                                    <div class="drop-down">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">2 New Messages</span>
                                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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

<script type="text/javascript">
$("#bn").click(function(){
    $("body").load("notification.php")
}); 
</script>