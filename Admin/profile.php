<?php include('includes/header.php');?>
        <div class="page db-social albums">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
            <?php include('includes/navbar.php');?>
                </div>
                <br>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Begin Page Header-->
                                <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="page-header-title">Update Profile</h2>
                                    </div><br>
                                    <?php
                                                $name=$_SESSION['admin'];
                                                $sql="select * from tbl_admin where name='$name'";
                                                $result=mysqli_query($connect,$sql);
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                  $username=$row['name'];
                                                  $mobile=$row['mobile'];
                                                  $email=$row['email'];
                                                }
                                            ?>
                               <!-- Begin Row -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- Sorting -->
                                    <div class="widget has-shadow">
                                        <div class="widget-body">                                           
                                            <div class="table-responsive">                                                
                                            <table id="sorting-table" class="table mb-0">
                                            <form role="form" method="post" enctype='multipart/form-data' action="../controller/editprocess_master.php">
                                            <tbody>
                                                <tr>
                                                    <td colspan="1" align="center"><h5>User Name</h5></td>
                                                    <td colspan="2"><input type="text" class="form-control" id="user_name" value="<?php echo $username; ?>" name="user_name" onkeypress="return onlyAlphabets(event,this);" placeholder="Enter Name of Venue Holder" required autofocus onblur="onLeave()"></td>
                                                </tr>
                                               
                                                <tr>
                                                <td colspan="1" align="center"><h5>Email:</h5></td>
                                                    <td colspan="1" align="center"><input type="text" class="form-control" id="email" value="<?php echo $email;?>" name="email"  required></td>
                                                
                                                    <td colspan="1" align="center"><h5>Contact:</h5></td>
                                                    <td  colspan="1" align="center"><input type="text" class="form-control" name="mobile" value="<?php echo $mobile;?>" id="number" data-max=10 oninput="showfocus(this)" class="form-control input-lg" minlength="10" maxlength="10"autofocus placeholder="Enter Mobile No." onchange="validate()" onkeypress="return isNumberKey1(event)"required></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td align="right" colspan="4"><button type="submit" name="btnAdminProfile" class="btn btn-primary">Update</button> </td>
                                                </tr> 
                                            </tbody>
                                            </form>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Sorting -->
                                </div>
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