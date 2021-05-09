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
                                        <h2 class="page-header-title">Manage Venue</h2>
                                        <div>
			                            <ul class="breadcrumb">
                                            <?php 
                                            $id=$_SESSION['venue_id'];
                                            $sql="select * from tbl_venue where vendor_id='$id'";
                                            $result=mysqli_query($connect,$sql);
                                            if(mysqli_num_rows($result)>0)
                                            { ?> <?php }else{ ?>
			                               <li class="breadcrumb-item active"><a class="btn btn-shadow" data-toggle="modal" data-target="#modal-centered" href="#">Add Venue</a></li>
                                            <?php }?>
                                        </ul>
	                                    </div>
                                    </div>
                                </div>
                                <?php 
                                  
                                    $sql="select *,date(venue_plan.start_date) as sdate,date(venue_plan.expire_date) as edate from venue_plan,subscription_plan where venue_plan.status='Active' and venue_plan.payment_status='TXN_SUCCESS' and venue_plan.venue_id='$id' and venue_plan.plan_id='2' or  venue_plan.status='Active' and venue_plan.venue_id='$id'and venue_plan.plan_id='3' and venue_plan.payment_status='TXN_SUCCESS' or venue_plan.status='Active' and venue_plan.payment_status='TXN_SUCCESS' and venue_plan.venue_id='$id' and venue_plan.plan_id='1'";                  
                                    $result=mysqli_query($connect,$sql);
                                    if(mysqli_num_rows($result)>0)
                                    {                 
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $today=date('d-m-Y');
                                            $pid=$row['id'];
                                            $start_date=$row['sdate'];
                                            $start_ts=strtotime($start_date);
                                            $startdate=date('d-m-Y',$start_ts);
                                            $end_date=$row['edate'];
                                            $end_ts=strtotime($end_date); 
                                            $enddate=date('d-m-Y',$end_ts);
                                            $status=$row['status'];
                                        }
                                            if(strtotime($today)>=$start_ts && strtotime($today)<=$end_ts){
                                                
                                    ?><!-- Begin Centered Modal -->
                                            <div id="modal-centered" class="modal fade">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Add Venue</h4>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true" style="color:black">×</span>
                                                                <span class="sr-only">close</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <?php 		
                                                $id=$_SESSION['venue_id'];				
                                                $sql="select * from tbl_venue where vendor_id='$id'";
                                                $result = $connect->query($sql);
                                                $rows=mysqli_num_rows($result);
                                               if($rows==1)
                                                {
                                                    while($row=$result->fetch_array())
                                                    {
                                                    echo "<h3 align='center'>You already add venue. You directly update the venue details.</h3>";
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                                            <p>
                                                                <form role="form" method="post" enctype='multipart/form-data' action="../controller/process_master.php">
                                                                    <fieldset>	
                                                                    <div class="form-group">
                                                                        <label for="venue-name"><b>Name of Venue</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                        <input type="text" class="form-control" id="venue_name" value=""name="venue_name" required onkeypress="return onlyAlphabets1(event,this);" placeholder="Enter Venue Name" required autofocus onblur="onLeave()">
                                                                    </div> 
                                                                    <div class="form-group">
                                                                    <label for="landline"><b>Landline Number</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                    <input type="tel" class="form-control" id="landline" name="landline" placeholder="Enter Landline" autofocus value="" maxlength="10" minlength="10" >
                                                                </div> 
                                                                 <div class="form-group">
                                                                    <label for="pincode"><b> Booking Amount</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                    <input type="text"class="form-control" id="amt" name="amt" placeholder="Enter Amount" autofocus value=""  onkeypress="return isNumberKey11(event)" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email"><b>Email</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" autofocus>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address"><b>Address</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                    <textarea required class="form-control" name="address" placeholder="Enter Address" autofocus></textarea>
                                                                </div>
                                                                    <div class="form-group">
                                                                        <label for="pincode"><b>Pincode</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                        <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" autofocus value="" maxlength="6" minlength="6" onkeypress="return isNumberKey101(event)" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                         <label for="text"><b> Logo:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon addon-secondary"><i class="la la-cloud-upload" style="font-size:20px;color:red"></i> </span>
                                                                            <input type="file" class="form-control" id="logo" value=""name="logo" required>
                                                                       </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                         <label for="text"><b> Banner:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon addon-secondary"><i class="la la-cloud-upload" style="font-size:20px;color:red"></i> </span>
                                                                            <input type="file" class="form-control" id="userfile" value=""name="userfile" required>
                                                                       </div>
                                                                    </div>
                                                                        <p id="name" align="center" style="color:red;"></p>
                                                                        <div>
                                                                            <center></br><input type="submit" class="btn btn-md btn-primary"  name="btnvenueadd" value="Upload">
                                                                                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                                                                            </center>
                                                                        </div>
                                                                    </fieldset>
                                                                    <?php }?>
                                                                </form>
                                                            </p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Centered Modal -->
                                        <?php }
                                       else {
                                                $diff=strtotime($today)-strtotime($end_date);  
                                                $x=abs(round($diff/86400));
                                            $update="update venue_plan set status='Deactive' where id='$pid'";
                                            if(mysqli_query($connect,$update)){
                                                //echo 'Ok';
                                            }
                                            else{
                                                echo 'Error:'.$connect->error;
                                            }
                                            ?>
                                        <div id="modal-centered" class="modal fade">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"> Manage Venue</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true" style="color:black">×</span>
                                                            <span class="sr-only">close</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <h3>  <?php echo $x;?> days go ! Your plan was expired. Activate plan to active on website. </h3><br>
                                                           
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Centered Modal -->

                                       <?php }                                            
                                        }                                                         
                                      else
                                        {?>
                                            <div id="modal-centered" class="modal fade">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Add Venue</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true" style="color:black">×</span>
                                                            <span class="sr-only">close</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <h3> Please activated either lite or premium or top plan to add venue !!</h3>
                                                            <center><a href="plan_detail.php"><h5 align="center">Purchase Plan</h5></a></center>
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Centered Modal -->
                                       <?php     
                                        }
                                    ?> 
                               <!-- Begin Row -->
                               <p style="color:red;font-size:18px" align="center">Note: To actively show your venue on website atleast one plan must active.</p>
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width:1100px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <!-- <h4>Sorting</h4> -->
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>Email</th>
                                                        <th>Landline</th>
                                                        <th>Booking Amount</th>
                                                        <th>Logo</th>
                                                        <th>Banner</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                               
                                                <tbody style="color:black">
                                                <?php 
                                                   $sql = "SELECT * FROM tbl_venue where vendor_id='$id' ";
                                                   $result=$connect->query($sql);if(mysqli_num_rows($result)>0){
													while($row = $result->fetch_array())
													{
                                                        
                                                ?>
                                                    <tr align="center">
                                                        <td><?php echo $row['venue_id']; ?></td>
                                                        <td><?php echo $row['venue_name']; ?></td>
                                                        <td><?php echo $row['venue_address']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['landline']; ?></td>
                                                        <td><?php echo $row['booking_amt']; ?></td>
                                                       <td><img src="../controller/uploads/logo/<?php echo $row['logo']; ?>" width="80px" height="80px" alt="Logo"/> </td>                                                           
                                                        <td><img src="../controller/uploads/banner/<?php echo $row['banner_image']; ?>" width="80px" height="80px" alt="Logo"/> </td>
                                                      
                                                        <td  class="td-actions">
                                                            <?php if(isset($status)=='Active'){  ?><a href="editvenue.php?vid=<?php echo $row['venue_id']; ?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <?php } else{?>
                                                                <a href="#" id='edit' onclick="message()"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Purchase plan"></i></a><?php } ?>
                                                        </td> 
                                                        <script>
                                                            function message(){
                                                                alert('Purchase plan to edit venue!!');
                                                            }
                                                        </script>
                                                    </tr>                                               
                                                    <?php }}else{echo "<tr><td colspan='8' align='center'><h3> No data available</h3></td></tr>";}?> </tbody>
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