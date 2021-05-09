
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
                                        <a href="plan.php"> Subscription Plan</a>&nbsp;/&nbsp;
                                        <a href="purchase.php" style="color:red">Purchase Plan</a>
	                                <div>
	                                
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        
                        <!-- Begin Row -->
                        <div class="row flex-row">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Active Plan Detail</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr >
                                                        <th>Purchase ID</th>
                                                        <th>Venue Name</th>
                                                        <th>Plan Name</th>
                                                        <th>Type</th>                                                        
                                                        <th>Amount</th>
                                                        <th>Start Date</th>
                                                        <th>Expire Date</th>
                                                        <th>Days</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>                                              
                                                <tbody style="color:black">
                                                <?php 
                                                $id='';
                                                    $sql = "SELECT *,(vp.status) as vstatus,date(vp.start_date) as sdate,date(vp.expire_date) as edate FROM subscription_plan sp,venue_plan vp,tbl_vendor td,tbl_venue tv where sp.plan_id=vp.plan_id  and tv.vendor_id=td.vendor_id and tv.vendor_id= vp.venue_id and vp.payment_status='TXN_SUCCESS' and vp.status='Active' order by id desc";
													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                        $plan_name=$row['plan_name'];
                                                        $vid=$row['vendor_id'];
                                                        $id=$row['id'];
                                                        $start_date=$row['sdate'];
                                                        $start_ts=strtotime($start_date);
                                                        $activated_date=date('d-m-Y',$start_ts);
                                                        $enddate=$row['edate'];
                                                        $end_ts=strtotime($enddate);
                                                        $end_date=date('d-m-Y',$end_ts);
                                                        $monthly=$row['three_month'];
                                                        $yearly=$row['yearly'];
                                                        $price=$row['price'];
                                                        if($price==$monthly)
                                                        {
                                                            $type='Three Month';
                                                        }
                                                        else{
                                                            $type='Yearly';
                                                        }
                                                        $today=date('d-m-Y');
                                                        if(strtotime($today) < strtotime($end_date))
                                                        {
                                                            $diff=strtotime($end_date)-strtotime($today);
                                                            $remain=abs(floor($diff/86400));
                                                        }else{
                                                            $remain='0';    

                                                    }
                                                      
                                                ?>
                                                    <tr >
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['venue_name']; ?></td>
                                                        <td><?php echo $row['plan_name']; ?></td>
                                                        <td><?php echo $type; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td><?php echo $row['sdate']; ?></td> 
                                                        <td><?php echo $row['edate']; ?></td>
                                                        <td><?php echo $remain; ?></td>
                                                        <td  class="td-actions">
                                                        <a class="openModal" title="Edit Status" style="color:blue" data-id="<?php echo $id;?>" data-toggle="modal" data-target="#modal-centered" href="#"><i class="la la-edit"  data-toggle="tooltip" data-placement="bottom" title="Edit Status" style="color:blue; font-size:30px;"></i></a>
                                                        <a href="send.php?vid=<?php echo $vid;?>&pid=<?php echo $row['id']; ?>" title="Send Notification"><i class="la la-check"  style="color:blue;font-size:30px;"></i></a>   
                                                    </td>
                                                    </tr>
                                                    <?php } ?>

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
    
                                      
                                            <!-- Begin Centered Modal -->
                                            <div id="modal-centered" class="modal fade">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Centered Modal -->
  <script>
  $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      $.ajax({url:"book_status.php?id="+id,cache:false,success:function(result){
          $(".modal-content").html(result);
      }});
  });
</script><?php
                                        if(isset($_POST['btnstatus']))
                                        {
                                            $status=$_POST['status'];
                                            $id=$_POST['pid'];
                                            $update="update venue_plan set status='$status' where id='$id'";
                                            if(mysqli_query($connect,$update))
                                            {
                                                echo "<script>alert('Status change to deactive !!')</script>";                                                
	                                            echo "<script>window.location.href='purchase.php';</script>"; 
                                            }
                                        }
                                        ?>