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
                                        <h2 class="page-header-title">Venue Details</h2>
                                        <div>
			                            <ul class="breadcrumb">
                                        <?php 
                                            $id=$_SESSION['venue_id'];
                                            $sql="select * from venue_details where venue_id='$id'";
                                            $result=mysqli_query($connect,$sql);
                                            if(mysqli_num_rows($result)>0)
                                            { ?> <?php }else{ ?>
			                               <li class="breadcrumb-item active"><a class="btn btn-shadow" data-toggle="modal" data-target="#modal-centered" href="#">Add Venue Details</a></li>
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
                                                
                                    ?>
                            <!-- Begin Centered Modal -->
						<div id="modal-centered" class="modal fade">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Venue Facilities</h4>
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true" style="color:black">×</span>
											<span class="sr-only">close</span>
										</button>
									</div>
									<div class="modal-body">
											<form role="form" method="post" enctype='multipart/form-data' action="../controller/process_services.php">
												<fieldset>	
                                                <?php 		
                                                $id=$_SESSION['venue_id'];				
                                                $sql="select * from venue_details where venue_id=$id";
                                                $result = $connect->query($sql);
                                                $rows=mysqli_num_rows($result);
                                               if($rows==1)
                                                {
                                                    while($row=$result->fetch_array())
                                                    {
                                                    echo "<h3 align='center'>You already save the data. You directly update the data.</h3>";
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                               
                                                <div class="form-group">
                                                    <label for="description"><b>Venue Description:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <textarea required class="form-control" name="venue_info" placeholder="Venue Description" autofocus></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="capacity"><b>Seating Capacity:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="text" class="form-control" id="seating_capacity" value="" name="seating_capacity" onkeypress="return isNumberKey1(event)" placeholder="Count of seating capacity" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="chair"><b>Chair Count:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="text" class="form-control" id="chair" name="chair" required onkeypress="return isNumberKey1(event)" placeholder="Number of Chair">
                                                </div>
                                                <div class="form-group">
                                                    <label for="acc"><b>Accommodation:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="text" class="form-control" id="room" name="room" required onkeypress="return isNumberKey1(event)" placeholder="Number of Room">
                                                </div>
                                                <div class="form-group">
													 <label for="parking"><b>Parking Availability:</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="parking" id="parking" value="Yes" checked>&nbsp;Yes
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"name="parking" value="No" id="parking" >&nbsp;No
													</label>
                                                </div>
                                                <div class="form-group">
													 <label for="text"><b>Drink Water Availability:</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="water" id="water" value="Yes" checked>&nbsp;Yes
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio" name="water" value="No" id="water" >&nbsp;No
													</label>
                                                </div>
                                                <div class="form-group">
													 <label for="text"><b>Catering Availability:</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="catering" id="catering" value="Yes" checked>&nbsp;Yes
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio" name="catering" value="No" id="catering" >&nbsp;No
													</label>
                                                </div>
                                                <div class="form-group">
													 <label for="text"><b>Decoration Availability:</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="decoration" id="decoration" value="Yes" checked>&nbsp;Yes
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio" name="decoration" value="No" id="decoration" >&nbsp;No
													</label>
                                                </div>
                                                <div class="form-group">
													 <label for="text"><b>Sound System Availability:</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="sound" id="sound" value="Yes" checked>&nbsp;Yes
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"name="sound" value="No" id="sound" >&nbsp;No
													</label>
                                                </div>
                                                <div class="form-group">
													 <label for="text"><b>AC/Fan Availability:</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="fan" id="fan" value="Yes" checked>&nbsp;Yes
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio" name="fan" value="No" id="fan" >&nbsp;No
													</label>
												</div>
                                                <div>
                                                    <center></br>  <input type="submit"  class="btn pmd-ripple-effect btn-primary" name="btnDetail" value="Save">
																	<button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
													</center>
												</div>
                                                </fieldset>
                                                            <?php }?>
											</form>
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
                                                        <h4 class="modal-title"> Manage Venue Details</h4>
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
                                                        <h4 class="modal-title">Venue Details</h4>
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
                               <!-- Begin Row -->
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
                                                    <tr>
                                                        <th>Vendor ID</th>
                                                        <th>Information</th>
                                                        <th>Chair</th>
                                                        <th>Capacity</th>
                                                        <th>Room</th>
                                                        <th>Parking</th>
                                                        <th>Water</th>
                                                        <th>Catering</th>
                                                        <th>Decoration</th>
                                                        <th>Sound</th>
                                                        <th>AC/Fan</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                               
                                                <tbody style="color:black">
                                                <?php 
                                                   $sql = "SELECT * FROM register_venue,venue_details where register_venue.user_id=venue_details.venue_id  and venue_details.venue_id=$id ";
                                                   $result=$connect->query($sql);if(mysqli_num_rows($result)>0){
													while($row = $result->fetch_array())
													{
                                                        $status=$row['status'];
                                                        $vid=$row['user_id'];
                                                ?>
                                                    <tr align="center">
                                                        <td><?php echo $row['venue_id']; ?></td>
                                                        <td><?php echo $row['venue_info']; ?></td>
                                                        <td><?php echo $row['chair']; ?></td>
                                                        <td><?php echo $row['seating_capacity']; ?></td>
                                                        <td><?php echo $row['room']; ?></td>
                                                        <td><?php echo $row['parking']; ?></td>
                                                        <td><?php echo $row['drink_water']; ?></td>
                                                        <td><?php echo $row['catering']; ?></td>
                                                        <td><?php echo $row['decoration']; ?></td>
                                                        <td><?php echo $row['sound_system']; ?></td>
                                                        <td><?php echo $row['ac_fan']; ?></td>
                                                        <td  class="td-actions">
                                                            <?php if(isset($status)=='Active'){  ?><a href="edit_venue.php?vid=<?php echo $row['venue_id']; ?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <?php } else{?>
                                                                <a href="#" id='edit' onclick="message()"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Purchase plan"></i></a><?php } ?>
                                                        </td> 
                                                        <script>
                                                            function message(){
                                                                alert('Purchase plan to edit venue!!');
                                                            }
                                                        </script>
                                                        <!-- <a href="edit_venue.php?vid=<?php //echo $vid; ?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <a href="venue_delete.php?vid=<?php //echo $vid; ?>"><i class="la la-close delete" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
                                                        </td> -->
                                                    </tr>                                               
                                                    <?php }}else{echo "<tr><td colspan='12' align='center'><h3> No data available</h3></td></tr>";}?> </tbody>
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