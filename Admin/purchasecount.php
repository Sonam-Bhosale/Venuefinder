
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
                                        <a href="dateinbetweenp.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyp.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthlyp.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="purchasecount.php" style="color:red">Purchase Plan Count</a>&nbsp;/&nbsp;
                                        <a href="rpt_plan.php" >Plan Wise</a>&nbsp;/&nbsp;<a href="rpt_purchaseplan.php" >Graphical Analysis</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                       
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div ><br>
                                        <h2  align="center">Purchase Plan Count Report</h2><hr>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead><tr  align="center">	
                                                        <th>Plan ID</th>
                                                        <th>Plan Name</th>
                                                        <th>Purchase Count</th>                                          
                                                    </tr>
                                                </thead>
                                                <tbody  style="color:black">
                                                <?php 
                                                    $q="select * from subscription_plan";
                                                    $result=$connect->query($q);if(mysqli_num_rows($result)>0){
                                                        while($r = $result->fetch_array())
                                                         {
                                                         $planid=$r['plan_id'];
                                                         $plan_name=$r['plan_name'];
                                                        $sql = "SELECT count(vp.plan_id) as plan_count,vp.status as pstatus FROM venue_plan vp where vp.plan_id='$planid' and vp.payment_status='TXN_SUCCESS' ";
                                                        $res=$connect->query($sql);if(mysqli_num_rows($res)>0){
                                                        while($r = $res->fetch_array())
                                                        {                                                                                                           
                                                            $count=$r['plan_count'];
                                                            }
                                                        }                                                       
                                                    ?>                                                
                                                    <tr align="center">
                                                        <td><?php echo $planid;?></td>
                                                        <td><?php echo $plan_name;?></td>
                                                        <td><?php echo $count;?></td>                                                                                                           
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