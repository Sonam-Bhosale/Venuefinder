
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
                                        <a href="purchaseplan.php"> Purchase Plan Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenp.php" style="color:red"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyp.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthlyp.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="purchasecount.php" >Purchase Plan Count</a>&nbsp;/&nbsp;                                        
                                        <a href="rpt_plan.php" style="color:red"> Plan Wise</a>&nbsp;/&nbsp;
                                        <a href="rpt_purchaseplan.php">Graphical Analysis</a>
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
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                <div style="background-color:cornflowerblue"><br>
                                        <h4> <?php  if(isset($_POST['txtstartdate']) && isset($_POST['txtenddate'])) {                                     
                                            $start=$_POST['txtstartdate'];
                                            $end=$_POST['txtenddate'];
                                            $start_ts=strtotime($start);
                                            $startdate=date("d-m-Y",$start_ts);
                                            $end_ts=strtotime($end);
                                            $enddate=date("d-m-Y",$end_ts);}?> <h2 style="color:black" align="center">Purchase Plan Report From <?php if(isset($startdate)){echo $startdate;}?>  To  <?php if(isset($enddate)){echo $enddate;}?></h2>
                                   <hr></div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Purchase ID</th>
                                                        <th>Venue ID</th>
                                                        <th>Vendor Name </th>
                                                        <th>Plan Name</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Status</th>
                                                        <th>Activation Date</th> 
                                                    </tr>
                                                </thead>
                                                <tbody  style="color:black">
                                                <?php if(isset($_POST['txtstartdate']) && isset($_POST['txtenddate'])) { 
                                                    $sql = "SELECT *,vp.status as pstatus,date(vp.create_at) as cdate FROM venue_plan vp,tbl_vendor vv,subscription_plan sp where vv.vendor_id=vp.venue_id and vp.plan_id=sp.plan_id  and date(vp.create_at) between '$start' and '$end' and vp.payment_status='TXN_SUCCESS' order by id asc";
													$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                                       while($row = $result->fetch_array())
													{     $id=$row['id'];
                                                        $venue_id=$row['venue_id'];
                                                        $vname= $row['name'];
                                                        $date= date($row['start_date']);  
                                                        $start_ts=strtotime($date);
                                                        $startdate=date("d-m-Y",$start_ts); 
                                                        $date= date($row['expire_date']);  
                                                        $end_ts=strtotime($date);
                                                        $enddate=date("d-m-Y",$end_ts); 
                                                        $plan_name=$row['plan_name'];
                                                        $status=$row['pstatus'];
                                                        $cdate=$row['cdate'];
                                                        ?>
                                                        <tr align="center">
                                                          <td><?php echo $id;?></td>
                                                          <td><?php echo $venue_id;?></td>
                                                              <td><?php echo $vname;?></td>
                                                              <td><?php echo $plan_name;?></td>
                                                              <td><?php echo $startdate;?></td>    
                                                              <td><?php echo $enddate;?></td>  
                                                              <td><?php if($status=='Active'){?><span style="width:100px;"><span class="badge-text badge-text-small info"><?php echo $status;?></span></span></td>
                                                            <?php }else{?><span style="width:100px;"><span class="badge-text badge-text-small danger"><?php echo $status;?></span></span>
                                                                </td> <?php }?> 
                                                              <td><?php echo $cdate;?></td>                                                    
                                                          </tr>
                                                    <?php } } }?>
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