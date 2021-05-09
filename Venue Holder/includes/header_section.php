 <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top" style="background-color:aqua">        
                   
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo --><?php
                        $id=$_SESSION['venue_id'];
                        $sql="select * from tbl_venue tv,venue_plan vp where tv.vendor_id='$id' and vp.venue_id='$id' and vp.payment_status='TXN_SUCCESS' and vp.venue_id=tv.vendor_id";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result))                        
                        {
                            $logo=$row['logo'];
                            
                        }?>
                        <div class="navbar-header">
                            <a href="dashboard.php" class="navbar-brand">
                                <div class="brand-image brand-big">
                                   <?php if(isset($logo)){ ?> <img src="../controller/uploads/logo/<?php echo $logo; ?>" alt="logo" style="width: 70px;" class="logo-big">
                                   <?php }else{ ?><img src="../layout/assets/logo.png" alt="logo" style="width: 70px;" class="logo-big">
                                    <?php }?>
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
                        <h2 align="center" style="color:blue">Venue Holder  Panel</h2>
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">     
                           
                            <!-- User -->
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                            <?php if(isset($logo)){ ?> <img  src="../controller/uploads/logo/<?php echo $logo; ?>"  alt="..." class="avatar rounded-circle"></a>
                                <?php }else{ ?><img src="../layout/assets/logo.png" alt="logo" style="width: 70px;" class="logo-big">
                                    <?php }?>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="profile.php" class="edit-profil"><i class="la la-gear"  title="Profile"></i></a>
                                        <?php if(isset($logo)){ ?> <img  src="../controller/uploads/logo/<?php echo $logo; ?>" title="Profile" alt="..." class="rounded-circle">
                                        <?php }else{ ?><img src="../layout/assets/logo.png" alt="logo" style="width: 70px;" class="logo-big">
                                    <?php }?>
                                    </li>
                                    <li>
                                        <a href="changepassword.php"  title="Change Password" class="dropdown-item"> 
                                            Setting 
                                        </a>
                                    </li>
                                    <li><a rel="nofollow" href="../controller/logout_venue.php" title="Logout"  class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
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