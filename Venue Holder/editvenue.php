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
                                        <h2 class="page-header-title">Edit Venue</h2>                                       
                                    </div>
                                </div> 
                               <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width:1100px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                        <form role="form" method="post" enctype='multipart/form-data' action="../controller/editprocess_master.php">
                                        <div class="widget-body">
                                            <div class="table-responsive">
                                        <table class="table mb-0" style="color:black">
                                            <?php                                           
                                             $id=$_SESSION['venue_id'];
                                             $vid=$_GET['vid'];
                                            $sql="SELECT * FROM tbl_venue where vendor_id='$id' and venue_id='$vid'";
                                            $result = $connect->query($sql);
                                            while($row=$result->fetch_array())
                                            {
                                                    
                                        ?>
                                            <tr>
                                                <td align="center"> Venue ID</td>
                                                <td><div class="form-group"><?php echo $row['venue_id'];?><input name="vid" type="hidden" value="<?php echo $row['venue_id']; ?>"></div></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="center"> Venue Name</td>
                                                <td><div class="form-group">  <input type="text" class="form-control" id="venue_name"  value="<?php echo $row['venue_name']; ?>" name="venue_name" required onkeypress="return onlyAlphabets(event,this);" placeholder="Enter Venue Name" required autofocus onblur="onLeave()"></div></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="center"> Address</td>
                                                <td><div class="form-group"> <textarea required class="form-control" name="address" placeholder="Enter Address" autofocus><?php echo $row['venue_address'];?></textarea>  </div></td>
                                             </tr>
                                            <tr align="center">
                                                <td align="center"> Email</td>
                                                <td><div class="form-group"><input type="text" class="form-control" id="email" value="<?php echo $row['email'];?>" name="email"   required>  </div></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="center"> Landline</td>
                                                <td><div class="form-group"><input type="tel" class="form-control" name="landline" value="<?php echo $row['landline'];?>" id="landline" class="form-control input-lg" minlength="10" maxlength="10"autofocus placeholder="Enter Landline No." > </div></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="center">Booking Amount</td>
                                                <td><div class="form-group"><input type="text" class="form-control" id="booking_amt" value="<?php echo $row['booking_amt']; ?>" name="booking_amt" onkeypress="return isNumberKey1(event)" placeholder="Enter Amount" required autofocus> </div></td>
                                            </tr>
                                            <tr>
                                                <td align="center"> Logo</td>
                                                <td><div class="form-group">  <img src="../controller/uploads/logo/<?php echo $row['logo'];?>" value="<?php echo $row['logo'];?>" alt="Logo" width="100px" height="100px">
                                                </div> <input type="file" class="form-control" id="logo"  value="<?php echo $row['logo'];?>"  name="logo" ></td>
                                            </tr>
                                            <tr>
                                                <td align="center"> Banner</td>
                                                <td><div class="form-group"> <img src="../controller/uploads/banner/<?php echo $row['banner_image'];?>" alt="Banner" width="100px" height="100px">
                                                </div><input type="file" class="form-control" id="userfile" value="<?php echo $row['banner_image'];?>" name="userfile">
                                               </td>
                                            </tr>

                                                <tr align="center">
                                                <td colspan="2"><center><div class="form-group"><input type="submit" class="btn btn-md btn-primary"  name="btnupdatevenue" value="Update">
                                                        </div>
                                            </center></td>											       
                                            </tr>
                                            <?php } ?>
                                                </table>

                                            </div>
                                        </div>
                                 </form>
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