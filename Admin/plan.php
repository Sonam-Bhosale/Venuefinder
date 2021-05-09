
<?php include('includes/header.php');?>
<?php 
if($_SESSION['admin'])
{
?>
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
                                        <a href="plan.php" style="color:red"> Subscription Plan</a>&nbsp;/&nbsp;
                                        <a href="purchase.php" class="page-header-title">Purchase Plan</a>
	                                <div>
	                                <div class="page-header-tools">
                                        <a data-toggle="modal" data-target="#modal-centered" class="btn pmd-ripple-effect btn-info pmd-z-depth"  href="#">Add Plan</a>
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
										<h4 class="modal-title">Subscription Plan</h4>
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true" style="color:black">×</span>
											<span class="sr-only">close</span>
										</button>
									</div>
									<div class="modal-body">
											<form role="form" method="post" enctype='multipart/form-data' action="../controller/process_master.php">
												<fieldset>
                                                <div class="form-group">
                                                    <label for="text"><b>Subscription Plan Name:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                        <input type="text" name="plan_name" id="plan_name" class="form-control input-lg" placeholder="Enter Plan Name"required  onkeypress="return onlyAlphabets(event,this);" autofocus onblur="onLeave()" >
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="text"><b>Three Month Price:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                        <input type="text" name="six_month" id="six_month" class="form-control input-lg" placeholder="Enter 3 Month Price" required autofocus onkeypress="return isNumberKey1(event)">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text"><b>Yearly Price:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                        <input type="text" name="year" id="year" class="form-control input-lg" placeholder="Enter Yearly Price"required autofocus onkeypress="return isNumberKey1(event)">
                                                    </div>	
                                                   
                                                <div>
                                                    <center></br>  <input type="submit"  class="btn pmd-ripple-effect btn-primary" name="btnPlan" value="Save">
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
                        <div class="row flex-row">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <!-- <h4>Sorting</h4> -->
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Plan ID</th>
                                                        <th>Plan Name</th>
                                                        <th>Three Month Rate</th>
                                                        <th>Yearly Rate</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>                                              
                                                <tbody>
                                                <?php 
                                                    $sql = "SELECT * FROM subscription_plan order by plan_id desc";
													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                        $id=$row['plan_id'];
                                                ?>
                                                    <tr style="color:black" align="center">
                                                        <td><?php echo $row['plan_id']; ?></td>
                                                        <td><?php echo $row['plan_name']; ?></td>
                                                        <td><?php echo $row['three_month']; ?></td>
                                                        <td><?php echo $row['yearly']; ?></td>
                                                     
                                                        <td  class="td-actions"><a href="edit_plan.php?plan_id=<?php echo $id; ?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <a href="plan_delete.php?plan_id=<?php echo $id; ?>"><i class="la la-close delete" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
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
    <?php
        }
        else
        {	
            echo"<script> alert('You Must Login First')</script>";
            echo "<script>window.location.href='../Admin/index.php';</script>";	
        }
    ?>