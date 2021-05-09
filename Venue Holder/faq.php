<?php include('includes/header.php');?>
        <div class="page db-social albums">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
            <?php include('includes/navbar.php');?>
                </div>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Begin Page Header-->
                                <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="page-header-title">FAQs</h2>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                  
                                        <?php  
                                        $id=$_SESSION['venue_id'];
                                        $sql="select * from tbl_vendor where vendor_id='$id'";
                                        $result=mysqli_query($connect,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $username=$row['name'];
                                            $email=$row['email'];
                                        }
                                        ?>
                                        <h3 class="text-center mt-3 mb-1"><?php echo $username; ?></h3>
                                        <p class="text-center"><?php echo $email; ?></p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            
                                            <li class="nav-item">
                                                <a class="nav-link"  title="About" href="about_us.php"><i class="la la-comments la-2x align-middle pr-2"></i>About</a>
                                            </li>                                            
                                            <li class="nav-item">
                                                <a class="nav-link"  title="Change Password" href="changepassword.php"><i class="la la-gears la-2x align-middle pr-2"></i>Settings</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"   title="FAQ" href="faq.php"><i class="la la-question-circle la-2x align-middle pr-2"></i>FAQ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"   title="Profile" href="profile.php"><i class="la la-user la-2x align-middle pr-2"></i>Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Freqently Asked Questions</h4>
                                    </div>
                                    <?php
                                        $id=$_SESSION['venue_id'];
                                        $sql="select * from tbl_faq where venue_id='$id'";
                                        $r=mysqli_query($connect,$sql);
                                        while($row=mysqli_fetch_array($r))
                                        {
                                            $fq1=$row['f1'];
                                            $fq2=$row['f2'];
                                            $fq3=$row['f3'];
                                            $fq4=$row['f4'];
                                            $fq5=$row['f5'];
                                            $fq6=$row['f6'];
                                        }                                        

                                    ?>
                                    <div class="widget-body">
                                        <form role="form" method="post" class="form-horizontal" enctype='multipart/form-data' action="../controller/editprocess_master.php">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <h5>Do you have more than one event-space at your venue?</h5>
                                            <?php if(isset($fq1)){?>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq1" value="<?php echo $fq1;?>" name="faq1" placeholder="Yes, we can accommodate 2 events/ parties at a time"  autofocus >
                                                </div>
                                            <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq1" name="faq1" placeholder="Yes, we can accommodate 2 events/ parties at a time"  autofocus >
                                                </div><?php }?>
                                            </div>                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <h5>What is the starting price per plate for vegetarian menu?</h5>
                                                <?php if(isset($fq2)){?>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq2" value="<?php echo $fq2;?>" name="faq2" placeholder="₹700"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq2" value="" name="faq2" placeholder="₹700"  autofocus >
                                                </div><?php }?>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-6">
                                                <h5>What is the starting price per plate for non-vegetarian menu?</h5>
                                                <?php if(isset($fq3)){?><div class="col-lg-5">
                                                    <input type="text" class="form-control" id="faq3" value="<?php echo $fq3;?>" name="faq3" placeholder="₹800"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-5">
                                                    <input type="text" class="form-control" id="faq3" value="" name="faq3" placeholder="₹800"  autofocus >
                                                    </div><?php }?>
                                            </div>

                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <h5>What is the % payment/ amount to confirm the booking?</h5>
                                            <?php if(isset($fq4)){?><div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq4" value="<?php echo $fq4;?>" name="faq4" placeholder="50%"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq4" value="" name="faq4" placeholder="50%"  autofocus >
                                                    </div><?php }?>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-6">
                                                <h5>What is the advance amount to be paid before the event?</h5>
                                                <?php if(isset($fq5)){?><div class="col-lg-5">
                                                    <input type="text" class="form-control" id="faq5" value="<?php echo $fq5;?>" name="faq5" placeholder="₹20000"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-5">
                                                    <input type="text" class="form-control" id="faq5" value="" name="faq5" placeholder="₹20000"  autofocus >
                                                    </div><?php }?>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <h5>Do you have any time limit for celebration?</h5>
                                            <?php if(isset($fq6)){?>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq6" value="<?php echo $fq6;?>" name="faq6" placeholder="Yes, 00:00"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" id="faq6" value="" name="faq6" placeholder="Yes, 00:00"  autofocus >
                                                    </div><?php }?>
                                            </div>
                                           
                                        
                                       <div class="em-separator separator-dashed"></div>
                                        <div class="text-right">
                                            <button name="btnFaq" class="btn btn-gradient-01" type="submit">Save</button>
                                            <button name="btnupdatefaq" class="btn btn-gradient-02" type="submit">Update</button>
                                        </div>
                                        </form>
                                               
                                    </div>
                                </div>
                            </div>
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