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
								 <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <a href="dashboard.php">Dashboard</a> &nbsp;/&nbsp; 
                                        <a href="#" style="color:red">Booking Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenb.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyb.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthlyb.php"> Monthly</a>&nbsp;/&nbsp;                                       
                                        <a href="rpt_booking.php" >Graphically Booking Report</a>&nbsp;
                                    </div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cadetblue" ><br>
                                        <h2 align="center" style="color:white"> Daily Booking Report</h2><hr>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>	
                                                    <tr align="center">										
                                                        <th>ID</th>
                                                        <th>User </th>
                                                        <th>Event</th>
                                                        <th>Booking Date</th>
                                                        <th>Paid Amount</th>
                                                        <th>Status</th>  
                                                        <th>Creation Date </th>                                                  
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  
													$id=$_SESSION['venue_id'];
													$date=date('Y-m-d');
												$sql = "SELECT *,date(bv.created_at) as cdate FROM register_user u,book_venue bv,payment p where bv.user_id=u.user_id and bv.vendor_id='$id' and date(bv.created_at)='$date' and date(p.create_at)='$date' and p.payment_status='TXN_SUCCESS' and p.txn_id=bv.transaction_id order by book_id";
												//echo $sql;
												$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
												   while($row = $result->fetch_array())
												 {  
                                                $bookid=$row['book_id'];
                                                $username= $row['name'];
                                                $date=$row['cdate'];
                                                $amount=$row['advance_payment'];
                                                $bdate=$row['booking_date'];
                                                $event_name=$row['event_name'];
												 $status=$row['event_status'];
                                                ?>
                                               <tr align="center">
                                                        <td><?php echo $bookid;?></td>
                                                        <td><?php echo $username;?></td>
                                                        <td><?php echo $event_name;?></td>
                                                        <td><?php echo $bdate;?></td>
                                                        <td><?php echo $amount;?></td>
                                                        <td><?php if($status=='Completed'){?>
                                            <span style="width:100px;"><span class="badge-text badge-text-small success"><?php echo $status;?></span></span>
                                            </td>
                                        <?php } else if($status=='Confirmed'){?><span style="width:100px;"><span class="badge-text badge-text-small info"><?php echo $status;?></span></span></td>
                                            <?php }else{?><span style="width:100px;"><span class="badge-text badge-text-small danger"><?php echo $status;?></span></span>
                                                </td> <?php }?> 
                                                        <td><?php echo $date;?></td>
                                                    </tr>
                                                <?php } }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Export -->
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