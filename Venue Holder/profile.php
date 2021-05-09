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
                                        <h2 class="page-header-title">Profile</h2>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="mt-5">
                                            <!-- <img src="../controller/uploads/profile/<?php // echo $_SESSION['Profile']; ?>" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto"> -->
                                        </div>
                                        <?php  
                                        $id=$_SESSION['venue_id'];
                                        $sql="select * from tbl_vendor where vendor_id='$id'";
                                        $result=mysqli_query($connect,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                        $username=$row['name'];
                                        $address=$row['address'];
                                        $mobile=$row['mobile'];
                                        $email=$row['email'];
                                        $update_date=$row['updated_at'];
                                        }
                                        ?>
                                        <h3 class="text-center mt-3 mb-1"><?php echo $username; ?></h3>
                                        <p class="text-center"><?php echo $email; ?></p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="about_us.php"><i class="la la-comments la-2x align-middle pr-2"></i>About</a>
                                            </li>
                                           
                                            <li class="nav-item">
                                                <a class="nav-link" href="changepassword.php"><i class="la la-gears la-2x align-middle pr-2"></i>Settings</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="faq.php"><i class="la la-question-circle la-2x align-middle pr-2"></i>FAQ</a>
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
                                        <h4>Update Profile</h4>
                    
                                    </div>
                                    <div class="widget-body">
                                   <p style="color:black"> Last Modified : <?php if(isset($update_date)!=''){echo $update_date;}else{echo '-';}?></p><br>
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>01. Personnal Information</h4>
                                            </div>
                                        </div>
                                        <form role="form" method="post" class="form-horizontal" enctype='multipart/form-data' action="../controller/editprocess_master.php">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Vendor Name</label>
                                                <div class="col-lg-6">
                                                <input type="text" class="form-control" id="user_name" value="<?php echo $username; ?>" name="user_name" onkeypress="return onlyAlphabets(event,this);" placeholder="Enter Name of Venue Holder" required autofocus onblur="onLeave()">
                                                </div>
                                            </div>
                                          
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>02. Address  and Contact Information</h4>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">City</label>
                                                <div class="col-lg-6">
                                                 <input type="text" class="form-control" id="city" value="Satara"name="city"  readonly required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Address</label>
                                                <div class="col-lg-6">
                                                    <textarea required class="form-control" name="address" placeholder="Enter Address" autofocus><?php echo $address;?></textarea>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Mobile</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="mobile" value="<?php echo $mobile;?>" id="number" data-max=10 oninput="showfocus(this)" class="form-control input-lg" minlength="10" maxlength="10"autofocus placeholder="Enter Mobile No." onchange="validate()" onkeypress="return isNumberKey1(event)"required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="email" value="<?php echo $email;?>" name="email"   required>
                                                </div>
                                            </div>
                                           
                                         
                                       <div class="em-separator separator-dashed"></div>
                                        <div class="text-right">
                                            <button name="btnProfile" class="btn btn-gradient-01" type="submit">Save Changes</button>
                                            <!-- <button name="cancle"class="btn btn-shadow" type="reset">Cancel</button> -->
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