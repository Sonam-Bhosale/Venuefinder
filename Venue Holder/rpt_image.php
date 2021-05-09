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
                                        <a href="rpt_image.php" style="color:red">Image Report</a> &nbsp;|&nbsp; 
                                        <a href="videorpt.php" >Video Report</a>&nbsp;|&nbsp; 
                                        <a href="rpt_chartiv.php" >Graphical Report</a>
										
                                    </div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cadetblue" class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4 style="color:white"> Album Uploaded Report</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>	<tr align="center">										
                                                        <th>ID</th>
                                                        <th>Album Name</th>
														<th>Image Count</th>
                                                        <th>Upload Date</th>                                              
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  $cnt=1;
													$id=$_SESSION['venue_id'];
												$sql = "SELECT distinct(album_name) as aname,date(created_at) as cdate FROM images where holder_id='$id' order by album_name";
												$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
												   while($row = $result->fetch_array())
												{  
                                                $album_name= $row['aname'];
                                                $date=$row['cdate'];
                                                $q="select count(image_id) as image_count from images where holder_id='$id' and album_name='$album_name'";
                                                //echo $q;
												$r=mysqli_query($connect,$q);
												while($row1=mysqli_fetch_array($r))
												{
													$img_count=$row1['image_count'];
												}
												
                                                ?>
                                               <tr align="center">
                                                        <td><?php echo $cnt;?></td>
                                                        <td><?php echo $album_name;?></td>
														<td><?php echo $img_count;?></td> 
														 <td><?php echo $date;?></td>
                                                    </tr>
                                                <?php $cnt++; } }
                                                ?>
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