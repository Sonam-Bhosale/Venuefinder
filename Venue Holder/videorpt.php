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
                                        <a href="dashboard.php">Dashboard</a> &nbsp;|&nbsp; 
                                        <a href="rpt_image.php" >Image Report</a> &nbsp;|&nbsp; 
                                        <a href="videorpt.php"  style="color:red" >Video Report</a>&nbsp;|&nbsp; 
                                        <a href="rpt_chartiv.php">Graphical Report</a>
                                  </div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cadetblue" class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4 style="color:white"> Video Uploaded Report</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>	<tr align="center">										
                                                        <th>ID</th>
                                                        <th>Video Name</th>
                                                        <th>Title</th>
                                                        <th>Upload Date</th>                                              
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  
													$id=$_SESSION['venue_id'];
												$sql = "SELECT *,date(created_at) as cdate FROM videos where holder_id='$id' order by video_id";
												//echo $sql;
												$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
												   while($row = $result->fetch_array())
												 {  
                                                $videoid=$row['video_id'];
                                                $vname= $row['name'];
                                                $date=$row['cdate'];
                                                $des=$row['description'];
                                                $view=$row['likes'];
                                                ?>
                                               <tr align="center">	
                                                        <td><?php echo $videoid;?></td>
                                                        <td><?php echo $vname;?></td>
                                                        <td><?php echo $des;?></td>
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