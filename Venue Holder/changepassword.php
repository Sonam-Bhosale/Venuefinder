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
                                        <h2 class="page-header-title">Change Password</h2>
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
                                            $mobile=$row['mobile'];
                                            $email=$row['email'];
                                        }
                                        $sql="select * from tbl_venue where vendor_id='$id'";
                                        $result=mysqli_query($connect,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                          
                                            $venuename=$row['venue_name'];
                                            $booking_amt=$row['booking_amt'];
                                            $address=$row['venue_address'];
                                            $logo=$row['logo'];
                                            $banner=$row['banner_image'];
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
                                        <h4>Change Password</h4>
                                    </div> <?php $id=$_SESSION['venue_id'];
                            $sql="select * from tbl_vendor where vendor_id='$id'";
                            $result=mysqli_query($connect,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                $password=$row['password'];
                            }?>
                                    <div class="widget-body">
                                       
                                        <form role="form" method="post" class="form-horizontal" enctype='multipart/form-data' action="../controller/credentials.php">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Old Password</label>
                                                <div class="col-lg-5">
                                                <input  id="oldpassword" class="form-control" autofocus required name="oldpassword"  type="password" onchange="oldcheck()">
                                                <input  id="dbold"  name="dbold"  type="hidden" value="<?php echo $password; ?>" >                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">New Password</label>
                                                <div class="col-lg-5">
                                                <input  id="newpassword" class="form-control" autofocus required onchange="callfunction()" name="newpassword"  type="password">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Re-enter Password</label>
                                                <div class="col-lg-5">
                                                <input id="confirmpassword"class="form-control" autofocus onkeyup='check();' required name="confirmpassword" type="password">
                                                </div>
                                            </div>
                                       <div class="em-separator separator-dashed"></div>
                                        <div class="text-right">
                                            <button name="btnVenuePassword" class="btn btn-gradient-01" type="submit">Change Password </button>
                                           <button name="cancle" class="btn btn-shadow" type="reset">Reset</button> 
                                        </div>
                                    </div>
                                    </form>
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



<script>
            function check()
            {
                var pass=document.getElementById('newpassword').value;
                var cpass=document.getElementById('confirmpassword').value;
                if(pass!=cpass)
                {
                }
                else
                {
                   // document.getElementById('error').style.color = 'green';
                    document.getElementById('error').innerHTML = ''; 
                    alertify.success('Password is matched'); 
                }
            }
            function callfunction()
            {
            var textBox = document.getElementById("newpassword");
            var textLength = textBox.value.length;

                if(textBox.value=='' || textLength<5)
                {
                    //document.getElementById('error').innerHTML='Please entered more than 5 characters for new password';
                    alertify.success('Please entered more than 6 characters for new password');
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
                }
            }
            function show(id) {
                var a = document.getElementById(id);
                if (a.type == "password") {
                    a.type = "text";

                } else {
                    a.type = "password";

                }
                }
            function oldcheck()
            {
            var txtop= document.getElementById("oldpassword").value;
            var dbop= document.getElementById("dbold").value;
      
              if(txtop!=dbop)
              {
                  alertify.success('Old Password is not Match!!!');
             }
             else{
                alertify.success('Old Password is Match!!!');
             }
        
            }
</script>
