
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
                                        <a href="booking.php" class="page-header-title" style="color:red"> View Booking</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row ">
                            <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>View Booking</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th>ID</th>
                                                        <th>Venue Name</th>
                                                        <th>User Name</th>
                                                        <th>Event Name</th>
                                                        <th>Booking Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>                                               
                                                <tbody style="color:black">
                                                <?php 
                                                    $sql = "SELECT * FROM tbl_vendor td,tbl_venue tv,register_user user,book_venue booking,payment p where 
                                                    booking.venue_id=tv.venue_id and td.vendor_id=booking.vendor_id and booking.user_id=user.user_id and p.txn_id=booking.transaction_id and p.payment_status='TXN_SUCCESS' order by booking.book_id desc";
                                                    $result=$connect->query($sql);
                                                    if(mysqli_num_rows($result)>0){ 
													while($row = $result->fetch_array())
													{
                                                       $book_id=$row['book_id'];
                                                          $venue_name=$row['venue_name'];
                                                        $user_name=$row['name'];
                                                        $status=$row['event_status'];
                                                        $event_name=$row['event_name'];
                                                        $book_date=$row['booking_date'];
                                                ?>
                                                    <tr align="center">
                                                        <td><?php echo $book_id;?></td>
                                                        <td><?php echo $venue_name ;?></td>
                                                        <td><?php echo $user_name ;?></td>
                                                        <td><?php echo $event_name ;?></td>
                                                        <td><?php echo $book_date ;?></td>
                                                        <td><?php if($status=='Completed'){?>
                                                            <span style="width:100px;"><span class="badge-text badge-text-small success"><?php echo $status;?></span></span>
                                                            </td>
                                                        <?php } else if($status=='Confirmed'){?><span style="width:100px;"><span class="badge-text badge-text-small info"><?php echo $status;?></span></span></td>
                                                            <?php }else{?><span style="width:100px;"><span class="badge-text badge-text-small danger"><?php echo $status;?></span></span>
                                                                </td> <?php }?>
                                                        
                                                    </tr>
                                                    <?php } } else{
                                                        echo '<tr><td colspan="6" align="center"> No data available </td></tr>';}?>
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