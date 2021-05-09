<!-- Begin Header -->
<header class="header">
                <nav class="navbar fixed-top" style="background-color:aliceblue">        
                    
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="dashboard.php" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="../layout/assets/logo.png" alt="logo" style="width: 70px;" class="logo-big">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <h2 align="center" style="color:blue;font-size:32px">Admin Panel</h2>
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                           
                            <!-- Begin Notifications -->
                            <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu notification">
                                                            
                                <li>
                                        <div class="notifications-header">
                                            <div class="title">Notifications <?php //echo $row_count;?></div>
                                            <div class="notifications-overlay"></div>
                                            <img src="../layout/assets/logo.png" width="100px" height="100px" alt="..." class="img-fluid">
                                        </div>
                                    </li>
                                    <?php 
                                       $date=array();
                                        $sql="select *,date(notification.created_at) as date1 from notification,register_user where notification.notification='User' and notification.id=register_user.user_id order by notification.created_at desc LIMIT 2";
                                        $result=mysqli_query($connect,$sql);
                                        $row_count=mysqli_num_rows($result);
                                          while($row=mysqli_fetch_array($result))
                                          {
                                            $date[]=$row['date1'];
                                          }
                                    ?>
                                    <li>
                                        <a href="user_notify.php" title="User Notification">
                                            <div class="message-icon">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New user registered
                                                </div>
                                                <span class="date"><?php echo $date[0];?></span>&nbsp;
                                            </div>
                                        </a>
                                    </li>
                                    <?php 
                                        $date=array();
                                        $sql="select *,date(notification.created_at) as date1 from notification,tbl_vendor where notification.notification='Vendor' and notification.id=tbl_vendor.vendor_id order by notification.created_at desc LIMIT 3";
                                        $result=mysqli_query($connect,$sql);
                                        $row_count=mysqli_num_rows($result);
                                          while($row=mysqli_fetch_array($result))
                                          {
                                              $date[]=$row['date1'];
                                          }
                                    ?>
                                    <li>
                                        <a href="venue_notify.php" title="Vendors Notification">
                                            <div class="message-icon">
                                                <i class="la la-calendar-check-o"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                     New vendor registered 
                                                </div><span class="date"><?php echo $date[0];?></span>&nbsp;
                                            </div>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </li>
                            <!-- End Notifications -->
                            <!-- User -->
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="../layout/assets/logo.png" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="profile.php" class="edit-profil"><i class="la la-gear"></i></a>
                                        <img src="../layout/assets/logo.png" alt="..." class="rounded-circle">
                                    </li>
                                   
                                    <li>
                                        <a href="changepassword.php" class="dropdown-item"> 
                                            Setting
                                        </a>
                                    </li>
                    
                                    <li class="separator"></li>
                                   
                                    <li><a rel="nofollow" href="logout.php" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                                </ul>
                            </li>
                            <!-- End User -->
                           
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->