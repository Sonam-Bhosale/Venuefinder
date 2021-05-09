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
                                        <a href="booking.php">Daily Booking</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenb.php" style="color:red"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyb.php"> Weekly</a>&nbsp;/&nbsp;
										<a href="monthlyb.php"> Monthly</a>&nbsp;/&nbsp; 
                                        <a href="rpt_booking.php" >Graphically Booking Report</a>&nbsp;
                                    </div>
                                </div>  
							<br><div class="row" >
                        <div class="col-md-3"></div>
                        <div class="col-md-7" style="background-color: white;">
                        <form method="post" enctype="multipart/form-data">
                               <table>
                                <div class="form-group">
                                <tr>                                
                                    <td>Enter Start Date:<input type="date" name="txtstartdate"placeholder="yyyy-mm-dd"></td>
                                    <td>Enter End Date:<input type="date" name="txtenddate"placeholder="yyyy-mm-dd"></td>
                                    <td colspan="2" align="center"><button type="submit" name="Search" class="btn btn-info">Search </button></td>
                                </tr>
                                </div>
                                </table>
                            </form>                        
                        </div>
                        
                        </div> <br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cadetblue" >
                                        <h4> <?php 
											 if(isset($_POST['txtstartdate']) && isset($_POST['txtenddate'])) {                                     
                                            $start=$_POST['txtstartdate'];
                                            $end=$_POST['txtenddate'];
                                            $start_ts=strtotime($start);
                                            $startdate=date("d-m-Y",$start_ts);
                                            $end_ts=strtotime($end);
                                            $enddate=date("d-m-Y",$end_ts);}?> <br><h2 style="color:black" align="center">Booking Report From <?php if(isset($startdate)){echo $startdate;}?>  To  <?php if(isset($enddate)){echo $enddate;}?>  </h2><hr>
										   
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
                                                        <th>Creation Date</th>                                                  
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  
												  if(isset($_POST['txtstartdate']) && isset($_POST['txtenddate'])) { 
												  $id=$_SESSION['venue_id'];
												$sql = "SELECT *,date(bv.created_at) as cdate FROM register_user u,book_venue bv, payment p where p.bookid=bv.book_id and p.payment_status='TXN_SUCCESS' and p.txn_id=bv.transaction_id  and bv.user_id=u.user_id and bv.vendor_id='$id' and date(bv.created_at) between '$start' and '$end' order by book_id";
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
                                                <?php } } }?>
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