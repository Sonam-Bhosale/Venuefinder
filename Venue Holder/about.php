<?php include('includes/header.php');?>
     <div class="page db-social">
           <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <?php include('includes/navbar.php');?>
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
                    <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
                    <?php 
                        $id=$_SESSION['venue_id'];
                        $sq="select * from tbl_vendor tv where tv.vendor_id='$id'";
                        $result=mysqli_query($connect,$sq);
                        while($row=mysqli_fetch_array($result))                        
                        {
                                $name=$row['name'];
                                $contact=$row['mobile'];
                        }
                        $sql="select *,tvv.email as vemail from tbl_vendor tv,tbl_venue tvv where tv.vendor_id='$id' and tvv.vendor_id='$id'";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result))                        
                        {
                            $logo=$row['logo'];
                            $banner=$row['banner_image'];
                            $views=$row['views'];
                            $name=$row['name'];
                            $venue_name=$row['venue_name'];
                            $address=$row['venue_address'];
                            $email=$row['vemail'];
                            $landline=$row['landline'];
                            
                        }
                    ?>
                     <?php 
                        $id=$_SESSION['venue_id'];
                        $sql ="SELECT book_id from book_venue bv,payment p,tbl_venue tv,tbl_vendor td where bv.book_id=p.bookid and p.payment_status='TXN_SUCCESS' and  bv.vendor_id='$id' and tv.vendor_id='$id' and tv.vendor_id=td.vendor_id and bv.venue_id=tv.venue_id ";
                        $result = mysqli_query($connect,$sql);
                        $book_count=mysqli_num_rows($result);
                    ?>
                     <?php 
                        $id=$_SESSION['venue_id'];
                        $sql="select * from rating r,tbl_vendor td,tbl_venue tv where r.venue_id=tv.venue_id and tv.vendor_id='$id' and td.vendor_id=tv.vendor_id";
                        $result=mysqli_query($connect,$sql);
                        $review_count=mysqli_num_rows($result);
                    ?>
                     <?php 
                        $id=$_SESSION['venue_id'];
                        $sql="select * from wishlist w, tbl_vendor td,tbl_venue tv where w.venue_id=tv.venue_id and tv.vendor_id='$id' and td.vendor_id=tv.vendor_id";
                        $result=mysqli_query($connect,$sql);
                        $wishlist_count=mysqli_num_rows($result);
                    ?>
	
					<div class="jumbotron jumbotron-fluid" style="background-image:url('../controller/uploads/banner/<?php echo $banner; ?>')"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                            <ul>
                                                    <li>
                                                        <div class="counter"><?php if(isset($views)){echo $views;}else{echo '0';} ?></div>
                                                        <div class="heading" style="color:black">Viewers</div>
                                                    </li>                                                   
                                                    <li>
                                                        <div class="counter"><?php echo $book_count;?></div>
                                                        <div class="heading" style="color:black">Booking</div>
                                                    </li> 
                                                    <li>
                                                        <div class="counter"><?php echo $review_count;?></div>
                                                        <div class="heading" style="color:black">Reviews</div>
                                                    </li><li>
                                                        <div class="counter"><?php echo $wishlist_count;?></div>
                                                        <div class="heading" style="color:black">Wishlist</div>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                            <div class="image-default">
                                                <?php if(isset($logo)){ ?> <img class="rounded-circle"  src="../controller/uploads/logo/<?php echo $logo; ?>" height="130px" width="150px" alt="...">
                                                    <?php }else{ ?><img class="rounded-circle" src="../layout/assets/logo.png" height="130px" width="150px" alt="logo" style="width: 70px;">
                                            <?php }?>
                                                </div>
                                                <div class="infos" style="color:black">
                                                    <h2><?php if(isset($name)){echo $name;}else{ echo '';}?></h2>
                                                    <div class="location" style="color:black">
                                                        <?php if(isset($venue_name)){echo $venue_name;}else{ echo '';}?><br>
                                                        <?php if(isset($address)){echo $address;}else{ echo '';}?>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        </div>
                                        <ul class="head-nav nav nav-tabs justify-content-center">
                                            <li><a href="about.php" style="color:red">About</a></li>
                                            <li><a href="images.php">Photos</a></li>
                                            <li><a href="videos.php">Videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                 <?php  
                                        $id=$_SESSION['venue_id'];
                                        $sql="select * from tbl_about where venue_id='$id'";
                                        $result=mysqli_query($connect,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $web=$row['website'];
                                            $event=$row['events'];
                                            $helper=$row['helpers'];
                                            $date=$row['opening_date'];
                                            $inf=$row['info'];
                                        }
                             ?>
                             <?php  
                                        $id=$_SESSION['venue_id'];
                                        $sql="select * from venue_details where venue_id='$id'";
                                        $result=mysqli_query($connect,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $info=$row['venue_info'];
                                        }
                             ?>
                                <!-- End Head Profile -->
                                <div class="row flex-row">
                                    <div class="col-xl-5">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>General Infos</h4>
                                            </div>
                                            <div class="widget-body">
                                                <!-- <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>About Me:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;
                                                      <?php 
                                                    //   if(isset($info)) {
                                                    //       echo $info;
                                                    //   } else  {
                                                    //       echo '';
                                                    //   }
                                                        ?>
                                                    </div>
                                                </div><br> -->
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Owner:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                                                      if(isset($name)) {
                                                          echo $name;
                                                      } else {
                                                          echo '';
                                                      }
                                                        ?></div>
                                                </div><br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Location in:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php if(isset($address)) {
                                                          echo $address;
                                                      }else {
                                                          echo '';
                                                      }
                                                        ?></div>
                                                </div><br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Opening:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php if(isset($date)){
                                                          echo $date;
                                                      } else{
                                                          echo '';
                                                      }
                                                        ?>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Events:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php if(isset($event)){
                                                          echo $event;
                                                      } else{
                                                          echo '';
                                                      }
                                                        ?></div>
                                                </div><br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Email:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php if(isset($email)){
                                                          echo $email;
                                                      } else  {
                                                          echo '';
                                                      }
                                                        ?>
                                                    </div>
                                                </div><br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Website:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php if(isset($web)){
                                                          echo $web;
                                                      }  else  {
                                                          echo '';
                                                      }
                                                        ?>
                                                    </div>
                                                </div><br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Phone:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($contact))
                                                      {
                                                          echo $contact;
                                                      }else {
                                                          echo '';
                                                      }
                                                        ?></div>
                                                </div><br>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title"><h5>Ladnline:</h5></div>
                                                    <div class="about-text" style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($contact))
                                                      {
                                                          echo $landline;
                                                      }else {
                                                          echo '';
                                                      }
                                                        ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- Begin Column -->
                                    <div class="col-xl-7 column">
                                        <!-- Begin Education -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>About Me:</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-12 about-infos d-flex flex-column">
                                                    <?php if(isset($info)) {
                                                          echo $info;
                                                      } else  {
                                                          echo '';
                                                      }?>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!-- End Education -->
                                        <!-- Begin Eployement -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Employement</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        No data available !!
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Eployement -->
                                        <!-- Begin Hobbies & Interest -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Hobbies & Interest</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="d-flex justify-content-center">
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Camping">
                                                                <i class="ion-bonfire"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Photography">
                                                                <i class="ion-camera"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Music">
                                                                <i class="ion-headphone"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Travel">
                                                                <i class="ion-map"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Food">
                                                                <i class="ion-icecream"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Paint">
                                                                <i class="ion-paintbrush"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Nature">
                                                                <i class="ion-leaf"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Coffee">
                                                                <i class="ion-coffee"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Hobbies & Interest -->
                                    </div>
                                    <!-- End Column -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <?php include('includes/footer.php');?>
                
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        </body> 
</html>
