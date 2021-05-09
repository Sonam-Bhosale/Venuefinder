
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
                                        <a href="vendorreport.php"> Vendor Report</a>&nbsp;/&nbsp;
                                        <a href="venuereport.php"> Venue Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetween.php" style="color:red"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weekly.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthly.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="rpt_chartvendor.php"> Graphical Analysis</a>
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
                            <div style="background-color:cornflowerblue"><br>
                                        <h2 align="center">
                                    <?php  if(isset($_POST['txtstartdate']) && isset($_POST['txtenddate'])) {                                     
                                            $start=$_POST['txtstartdate'];
                                            $end=$_POST['txtenddate'];
                                            $start_ts=strtotime($start);
                                            $startdate=date("d-m-Y",$start_ts);
                                            $end_ts=strtotime($end);
                                            $enddate=date("d-m-Y",$end_ts);}?> Report of Venue From <?php if(isset($startdate)){echo $startdate;}?>  To  <?php if(isset($enddate)){echo $enddate;}?></h2><hr>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>	<tr align="center">										
                                                <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Creation Date</th>                                                     
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black"> 
                                                <?php 
                                              
                                          if(isset($_POST['txtstartdate']) && isset($_POST['txtenddate'])) { 
                                            $sql = "SELECT *,date(created_at) as cdate FROM tbl_vendor where date(created_at) between '$start' and '$end'  order by vendor_id";
                                            //echo $sql;
                                            $result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                               while($row = $result->fetch_array())
                                             {  
                                                $date= $row['cdate'];  
                                                $start_ts=strtotime($date);
                                                $startdate=date("d-m-Y",$start_ts); 
                                               	?>
                                               <tr align="center">
                                                    <td><?php echo $row['vendor_id'];?></td>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['mobile'];?></td>    
                                                        <td><?php echo $startdate;?></td>    
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