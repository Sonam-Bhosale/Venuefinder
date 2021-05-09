
<?php include('includes/header.php');?>
    <div class="page db-modern">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content">
            <?php include('includes/navbar.php');?>
                <div class="content-inner boxed mt-4 w-100">
                    <div class="container">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
                                        <a href="dashboard.php">Dashboard</a> &nbsp;/&nbsp; 
                                        <a href="#"> Vendor</a>&nbsp;/&nbsp;
                                        <a href="add_vendor.php" style="color:red" class="page-header-title">Register Vendor</a>
	                                <div>
	                                <div class="page-header-tools">
	                                    <a data-toggle="modal" data-target="#modal-centered" class="btn pmd-ripple-effect btn-info pmd-z-depth"  href="#">Add Vendor</a>
	                                </div>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                         <!-- Begin Centered Modal -->
						<div id="modal-centered" class="modal fade">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Register Vendor</h4>
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true" style="color:black">×</span>
											<span class="sr-only">close</span>
										</button>
									</div>
									<div class="modal-body">
											<form role="form" method="post" enctype='multipart/form-data' action="../controller/process_master.php">
												<fieldset>	
                                                <div class="form-group">
                                                    <label for="user-name"><b>Name of Vendor</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="text" class="form-control" id="user_name" value="" name="user_name" onkeypress="return onlyAlphabets(event,this);" placeholder="Enter Name of Venue Holder" required autofocus onblur="onLeave()">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="city"><b>City</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="text" class="form-control" id="city" value="Satara"name="city"  readonly required>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="mobile"><b>Mobile Number</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="text" class="form-control" name="mobile" value="" id="number" data-max=10 oninput="showfocus(this)" class="form-control input-lg" minlength="10" maxlength="10"autofocus placeholder="Enter Mobile No." onchange="validate()" onkeypress="return isNumberKey1(event)"required>
                                                    <input type="hidden" id="mobile" value="<?php echo $mobile;?>">
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
                                                    <label for="password"><b>Password</b><sup style="font-size:16px;color:red">*</sup></label>
                                                    <input type="password" class="form-control"  name="password" value="" id="pass" class="form-control input-lg" required autofocus placeholder=" Enter Password" onchange="callfunction()">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cpass"><b>Confirm Password</b></label>
                                                    <input type="password" class="form-control"  name="confirm_password" value=""  id="cpass" class="form-control input-lg" required  autofocus placeholder=" Enter Confirm Password" onkeyup='check();'>
                                                 </div>
                                                 <div class="form-group">
													 <label for="text"><b>Status :</b><sup style="font-size:16px;color:red">*</sup></label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"  name="status" id="status" value="Active" checked>&nbsp;Active
													</label>
													<label class="radio-inline">
															&nbsp;&nbsp;&nbsp;<input type="radio"name="status" value="Inactive" id="status" >&nbsp;Inactive
													</label>
                                                </div>
                                                
                                                <div>
                                                    <center></br>  <input type="submit"  class="btn pmd-ripple-effect btn-primary" name="btnAddVenue" value="Save">
																	<button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
													</center>
												</div>
												</fieldset>
											</form>
									</div>
								</div>
							</div>
						</div>
                        <!-- End Centered Modal -->     
                        <!-- Begin Row -->
                        <div class="row ">
                         
                            <div class="col-xl-12">
                              <!-- Sorting -->
                              <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th> ID</th>
                                                        <th>Name</th>
                                                        <th>Mobile </th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                               
                                                <tbody style="color:black">
                                                <?php 
                                                    $sql = "SELECT * FROM tbl_vendor where ctype='Admin' order by vendor_id";
													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                        $status=$row['status'];
                                                ?>
                                                    <tr align="center">
                                                        <td><?php echo $row['vendor_id']; ?></td>
                                                        <td><a href="edit_vendor.php?vid=<?php echo $row['vendor_id']; ?>"><?php echo $row['name']; ?></a></td>
                                                        <td><a href="edit_vendor.php?vid=<?php echo $row['vendor_id']; ?>"><?php echo $row['mobile']; ?></a></td>
                                                        <td><a href="edit_vendor.php?vid=<?php echo $row['vendor_id']; ?>"><?php echo $row['email']; ?></a></td>
                                                        <td><a href="edit_vendor.php?vid=<?php echo $row['vendor_id']; ?>"><?php echo $row['address']; ?></a></td>
                                                        <td><?php if($status=="Active") { ?>
														    <a href="edit_vendor.php?vid=<?php echo $row['vendor_id']; ?>"><span class="badge-text badge-text-small info"><?php echo $status; ?></span></a>
														</td>  <?php } else{?>
                                                            <a href="edit_vendor.php?vid=<?php echo $row['vendor_id']; ?>"><span class="badge-text badge-text-small danger"><?php echo $status; ?></span></a>
                                                        <?php }?>
                                                    </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                                   
                                            </table>
                                        </div>
                                    </div>
                                <!-- End Sorting -->
                            </div>
                         </div>    
                        <!-- End Row -->
						</div>
                    <!-- End Container -->
                    
                  </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
    <?php include('includes/footer.php');?>
   