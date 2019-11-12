
       <?php  include 'sidebar.php';  ?>
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

