
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
                                        <a href="#" style="color:red"> Purchase Plan Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenp.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyp.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthlyp.php"> Monthly</a>&nbsp;/&nbsp;                                   
                                        <a href="purchasecount.php" >Purchase Plan Count</a>&nbsp;/&nbsp;
                                        <a href="rpt_plan.php" >Plan Wise</a>&nbsp;/&nbsp;
                                        <a href="rpt_purchaseplan.php" >Graphical Analysis</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                <div style="background-color:cornflowerblue"><br>
                                     <h2 align="center">Active Purchase Plan Report </h2><hr>
                                    </div>
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
                                                        <th>Remain Days</th>
                                                        <th>Activation Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody  style="color:black">
                                                <?php 
                                                    $sql = "SELECT *,vp.status as pstatus,date(vp.create_at) as cdate FROM venue_plan vp,tbl_venue tv,tbl_vendor td,subscription_plan sp where tv.vendor_id=vp.venue_id and td.vendor_id=vp.venue_id and vp.plan_id=sp.plan_id and vp.payment_status='TXN_SUCCESS' and vp.status='Active' order by id asc";
													$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                                       while($row = $result->fetch_array())
													{    
                                                        $id=$row['id'];
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
                                                        $today=date('d-m-Y');
                                                        if(strtotime($today) < strtotime($enddate))
                                                        {
                                                            $diff=strtotime($enddate)-strtotime($today);
                                                            $remain=abs(floor($diff/86400));
                                                        }else{
                                                            $remain='0';
                                                        }

                                                  ?>
                                                    <tr align="center">
                                                    <td><?php echo $id;?></td>
                                                    <td><?php echo $venue_id;?></td>
                                                        <td><?php echo $vname;?></td>
                                                        <td><?php echo $plan_name;?></td>
                                                        <td><?php echo $startdate;?></td>    
                                                        <td><?php echo $enddate;?></td>  
                                                        <td><?php echo $remain;?></td> 
                                                        <td><?php echo $cdate;?></td>                                                    
                                                    </tr>
                                                    <?php } }
                                                    // else{
                                                    //     echo '<tr><td colspan="8" align="center">Nothing to display</td></tr>';}
                                                        ?>
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