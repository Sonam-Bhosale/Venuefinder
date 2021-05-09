
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
                                        <a href="venuereport.php"> Venue Report</a>&nbsp;/&nbsp;                                      
                                       <a href="datewise.php"> Datewise</a>&nbsp;/&nbsp;
                                        <a href="dateinbetween.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weekly.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthly.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="yearly.php" style="color:red"> Yearly</a>&nbsp;&nbsp;
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row" >
                        <div class="col-md-3"></div>
                        <div class="col-md-7" style="background-color: white;">
                        <form method="post" enctype="multipart/form-data">
                                <table>
                                <div class="form-group">
									<tr>
									<td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Year:&nbsp;</label></td>
									<td><input type="year" maxlength="4" name="year" placeholder="yyyy"></td>
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
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4> <?php  if(isset($_POST['Search']) && isset($_POST['year'])) {                                     
                                            $year=$_POST['year'];
                                            ?> Venue Report of  Year <?php if(isset($year)){echo $year;}?> </h4>
											<?php }?>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>	
                                                    <tr align="center">										
                                                        <th>ID</th>
                                                        <th>Venue Name </th>
                                                        <th>Address</th>
                                                        <th>Mobile</th>
                                                        <th>Creation Date</th>                                              
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php                                        
                                          if(isset($_POST['year']) && isset($_POST['Search'])) { 
                                            $year=$_POST['year'];
											$sql = "SELECT *,date(created_at) as cdate, month(created_at) as month FROM register_venue where ac_type='Owner' and year(created_at)='$year'  order by user_id";
                                            //echo $sql;
                                            $result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                               while($row = $result->fetch_array())
                                             {  
                                                $venue_id=$row['user_id'];
                                                $vname= $row['venue_name'];
                                                $date=$row['cdate'];
                                                $view=$row['views'];
                                                $address=$row['address'];
                                                $number=$row['mobile'];
                                               	?>
                                               <tr align="center">
                                                        <td><?php echo $venue_id;?></td>
                                                        <td><?php echo $vname;?></td>
                                                        <td><?php echo $address;?></td>
                                                        <td><?php echo $number;?></td>
                                                        <td><?php echo $date;?></td>
                                                    </tr>
                                                <?php } }}?>
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