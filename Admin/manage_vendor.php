
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
                                        <a href="add_vendor.php"> Add Vendor</a>&nbsp;/&nbsp;
                                        <a href="manage_vendor.php" style="color:red" class="page-header-title">Manage Vendor</a>
	                                <div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <br>
                        <!-- Begin Row -->
                        <div class="row">
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
                                                        <th> ID</th>
                                                        <th> Name</th>
                                                        <th>Mobile </th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody style="color:black">
                                                <?php 
                                                    $sql = "SELECT * FROM tbl_vendor order by vendor_id";
													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                        $status=$row['status'];
                                                        $vid=$row['vendor_id'];
                                                ?>
                                                    <tr align="center"> 
                                                        <td><?php echo $row['vendor_id']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['mobile']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php if($status=="Active") { ?>
														    <span class="badge-text badge-text-small info"><?php echo $status; ?></span>
														</td>  <?php } else{?>
														<span class="badge-text badge-text-small danger"><?php echo $status; ?></span>
                                                        <?php }?>
                                                        </td>
                                                        <td  class="td-actions"><a href="edit_vendor.php?vid=<?php echo $vid; ?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <a href="venue_delete.php?vid=<?php echo $vid; ?>"><i class="la la-close delete" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
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