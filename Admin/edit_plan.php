<?php include('includes/header.php');?>

<?php

if(isset($_SESSION['admin']))
{
    $id=$_GET['plan_id'];
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
                                        <a href="edit_plan.php?plan_id=<?php echo $id;?>" style="color:red" class="page-header-title">Edit Subscription Plan</a>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Example 01 -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4></h4>
                                    </div>
								<form role="form" method="post" action="../controller/editprocess_master.php">
                                    <div class="widget-body">
                                        <div class="table-responsive">
											<table class="table mb-0">
											    <thead>
											        <tr align="center">
                                                        <th>Plan ID</th>
                                                        <th>Plan Name</th>
                                                        <th>Three Month Rate</th>
                                                        <th>Yearly Rate</th>
                                                        <th>Actions</th>											       
													</tr>
											    </thead>
												<?php
													$sql="SELECT * FROM subscription_plan where plan_id=$id";
													$result = $connect->query($sql);
													while($row=$result->fetch_array())
													{
														 
												?>
											    <tbody>
											        <tr align="center">
                                                        <td><div class="form-group"><?php echo $row['plan_id'];?><input name="planid" type="hidden" value="<?php echo $row['plan_id']; ?>"></div></td>
                                                        <td><div class="form-group"><input type="text" class="form-control" id="plan_name" value="<?php echo $row['plan_name'];?>" name="plan_name" placeholder="Enter Subscription Plan"  autofocus>
                                                            </div></td>
                                                        <td><div class="form-group">
                                                        <input type="text" class="form-control" id="six_month" value="<?php echo $row['three_month'];?>" name="six_month" placeholder="Enter Monthly Rate"  autofocus>

                                                        </div></td>
                                                        <td><div class="form-group">
                                                        <input type="text" class="form-control" id="year" value="<?php echo $row['yearly'];?>" name="year" placeholder="Enter Yearly Rate"  autofocus>

                                                        </div></td>
                                                       
                                                        <td><center><div class="form-group"><input type="submit" class="btn btn-md btn-primary"  name="btnPlan" value="Update">
                                                                    </div>
                                                        </center></td>
											     </tr>
											      </tbody>
													<?php }?>
											</table>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                </div>
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