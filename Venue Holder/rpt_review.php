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
                                        <a href="rpt_review.php" style="color:red">Review Report</a>&nbsp;/&nbsp;
										<a href="rpt_chartreview.php">Monthly Review Chart Analysis</a>
                                    </div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cornflowerblue"><br>
                                     <h2 align="center">Review Report </h2><hr>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>	
                                                    <tr align="center">										
                                                        <th>Review ID</th>
                                                        <th>User Name</th>
                                                        <th>Rating</th>
                                                        <th>Review Message</th>
                                                        <th>Reviewed Date</th>                                                  
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  
													$id=$_SESSION['venue_id'];
                                                    $s="select *,date(r.created_at) as date FROM rating r,tbl_venue tv WHERE r.venue_id=tv.venue_id and tv.vendor_id='$id' order by rand()";
                                                    $res = mysqli_query($connect,$s);
                                                    if(mysqli_num_rows($res)>0){ 
                                                   while($row=mysqli_fetch_array($res)) {
                                                       $q=$row['quality'];
                                                       $r=$row['response'];
                                                       $v=$row['value'];
                                                       $avg=($q+$r+$v)/3;
                                                       $totalavg=round($avg,1);
                                                ?>
                                                   <tr align="center">
                                                            <td><?php echo $row['id'];?></td>
                                                            <td><?php echo $row['name'];?></td>
                                                            <td><?php echo $totalavg;?></td>
                                                            <td><?php echo $row['title'];?></td>
                                                            <td><?php echo $row['date'];?></td>
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