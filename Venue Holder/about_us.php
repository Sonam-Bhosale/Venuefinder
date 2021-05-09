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
                                        <h2 class="page-header-title">About Information</h2>
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
                                            $mobile=$row['mobile'];
                                            $email=$row['email'];
                                        }
                                        ?>
                                        <h3 class="text-center mt-3 mb-1"><?php echo $username; ?></h3>
                                        <p class="text-center"><?php echo $email; ?></p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                       
                                            <li class="nav-item">
                                                <a class="nav-link" title="About" href="about_us.php"><i class="la la-comments la-2x align-middle pr-2"></i>About</a>
                                            </li>
                                           
                                            <li class="nav-item">
                                                <a class="nav-link" title="Change Password" href="changepassword.php"><i class="la la-gears la-2x align-middle pr-2"></i>Settings</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" title="FAQ" href="faq.php"><i class="la la-question-circle la-2x align-middle pr-2"></i>FAQ</a>
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
                                        <h4>Update About</h4>
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
                                    <div class="widget-body">
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>01. Social Information</h4>
                                            </div>
                                        </div>
                                        <form role="form" method="post" class="form-horizontal" enctype='multipart/form-data' action="../controller/editprocess_master.php">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Website</label>
                                                <?php if(isset($web)){?>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo $web;?>" name="website" placeholder="example.com"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" value="" name="website" placeholder="example.com"  autofocus >
                                                    </div><?php }?>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Opening Date</label>
                                                <?php if(isset($date)){?>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" value="<?php echo $date;?>" name="date" placeholder="29/02/2001"  autofocus >
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="date" class="form-control" value="" name="date" placeholder="29/02/2001"  autofocus >
                                                    </div><?php }?>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-6">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Events</label>
                                                <?php if(isset($event)){?>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php echo $event; ?>" name="events"  placeholder="Marriage, Reception, Bday Party and Others" autofocus>
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" value="" name="events"  placeholder="Marriage, Reception, Bday Party and Others"  autofocus>
                                                    </div><?php }?>
                                            </div>
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>02.Helpers Information</h4>
                                            </div>
                                        </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Helpers Count</label>
                                                <?php if(isset($helper)){?>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo $helper; ?>" name="helpers"  placeholder="10" autofocus>
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <input type="text" class="form-control" value="" name="helpers"  placeholder="10" autofocus>
                                                    </div><?php }?>
                                            </div>
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end"> Information</label>
                                                <?php if(isset($inf)){?>
                                                <div class="col-lg-6">
                                                    <textarea type="text" class="form-control" value="<?php echo $inf; ?>" name="info"  placeholder="About Helpers and hall"  autofocus><?php echo $inf; ?></textarea>
                                                </div>
                                                <?php }else{ ?><div class="col-lg-6">
                                                    <textarea type="text" class="form-control" value="" name="info"  placeholder="About Helpers and hall" row="5" autofocus></textarea>
                                                    </div><?php }?>
                                            </div>  
                                       <div class="em-separator separator-dashed"></div>
                                        <div class="text-right">
                                            <button name="btnAbout" class="btn btn-gradient-01" type="submit">Save</button>
                                            <button name="cancle"class="btn btn-shadow" type="reset">Clear</button>
                                            <button name="btnupdateabout" class="btn btn-gradient-02" type="submit">Update</button>&nbsp;
                                        </div>
                                        <br>
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