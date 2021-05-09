
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
                                        <a href="#"> Purchase Plan Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenp.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyp.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a herf="purchasecount.php">Purchase Plan Count</th>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4> Edit Purchase</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Venue Name </th>
                                                        <th>Plan Name</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $id=$_GET['id'];
                                                    $sql = "SELECT *,vp.status as pstatus FROM venue_plan vp,register_venue vv,subscription_plan sp where vv.user_id=vp.venue_id and vp.plan_id=sp.plan_id and vp.id=$id order by id asc";
													$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                                       while($row = $result->fetch_array())
													{    
                                                        $venue_id=$row['venue_id'];
                                                        $vname= $row['venue_name'];
                                                        $date= date($row['start_date']);  
                                                        $start_ts=strtotime($date);
                                                        $startdate=date("d-m-Y",$start_ts); 
                                                        $date= date($row['expire_date']);  
                                                        $end_ts=strtotime($date);
                                                        $enddate=date("d-m-Y",$end_ts); 
                                                        $plan_name=$row['plan_name'];
                                                        $status=$row['pstatus'];
                                                  ?>
                                                    <tr>
                                                    <td><?php echo $venue_id;?></td>
                                                        <td><?php echo $vname;?></td>
                                                        <td><?php echo $plan_name;?></td>
                                                        <td><?php echo $startdate;?></td>    
                                                        <td><?php echo $enddate;?></td> 
                                                        <form method="post"> 
                                                            <input type="hidden" value="<?php echo $id;?>" name="pid">
                                                        <td><div class="form-group">
                                                        <select id='status' name='status' class="form-control" >
                                                        <option  value="<?php echo $status;?>"> <?php echo $row['status'];?></option>
                                                        <?php
                                                            if($status =="Active"){
                                                            ?>
                                                            <option  value="Deactive">Deactive</option>
                                                        <?php } else
                                                        {
                                                        ?>
                                                            <option  value="Active">Active</option>
                                                        <?php }?>
                                                    </select>
                                                    </div></td> 
                                                    <td><div class="form-group"><input type="submit" class="btn btn-md btn-primary"  name="purchasebtn" value="Update">
                                                                </div></td>
                                                        </form>                                               
                                                    </tr>
                                                    <?php } }else{
                                                        echo '<tr><td colspan="6" align="center">Nothing to display</td></tr>';}?>
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
    <?php
    if(isset($_POST['purchasebtn']))
    {
        $id=$_POST['pid'];
        $status=$_POST['status'];
        $update="update venue_plan set status='$status' where id='$id'";
        echo $update;
        mysqli_query($connect,$update);
        echo "<script>window.location.href='purchaseplan.php';</script>";
    }


    ?>