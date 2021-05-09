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
										<a href="datewiseb.php" style="color:red"> Datewise</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenb.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyb.php"> Weekly</a>&nbsp;/&nbsp;
										<a href="monthlyb.php"> Monthly</a>&nbsp;/&nbsp; 
										<a href="yearlyb.php"> Yearly</a>&nbsp;&nbsp; 
                                    </div>
                                </div>  
							<br><div class="row" >
                        <div class="col-md-3"></div>
                        <div class="col-md-7" style="background-color: white;">
                        <form method="post" enctype="multipart/form-data">
                                <table>
                                <div class="form-group">
                                <tr>                                
                                  <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  Enter Date:&nbsp;</label></td>
									<td><input type="date" name="date" placeholder="yyyy-mm-dd"></td>
									<td><td colspan="2" align="center"><button type="submit" name="Search" class="btn btn-info">Search </button></td>
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
                                    <div style="background-color:cadetblue" class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4> <?php 
											if(isset($_POST['Search'])){											
                                            $start=$_POST['date'];
                                            $start_ts=strtotime($start);
                                            $startdate=date("d-m-Y",$start_ts);
											}
                                           ?> Booking Report On <?php if(isset($startdate)){echo $startdate;}?>  </h4>
										   
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
												if(isset($_POST['Search'])){
													 $start=$_POST['date'];
													 $id=$_SESSION['venue_id'];
												$sql = "SELECT *,date(bv.created_at) as cdate FROM register_user u,book_venue bv,payment p where p.bookid=bv.book_id and p.payment_status='TXN_SUCCESS' and p.txn_id=bv.transaction_id and bv.user_id=u.user_id and bv.venue_id='$id' and date(bv.created_at)='$start' and date(p.create_at)='$start'  order by book_id";
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
												 $event_status=$row['event_status'];
                                                ?>
                                               <tr align="center">
                                                        <td><?php echo $bookid;?></td>
                                                        <td><?php echo $username;?></td>
                                                        <td><?php echo $event_name;?></td>
                                                        <td><?php echo $bdate;?></td>
                                                        <td><?php echo $amount;?></td>
                                                        <td><?php echo $event_status;?></td>
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