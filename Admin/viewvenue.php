
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
                                        <a href=""> Vendor</a>&nbsp;/&nbsp;
                                        <a href="viewvenue.php" style="color:red">Venue List</a>
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
                                        <h4>Vendor Venue List</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr  align="center">                                                        
                                                        <th>Venue ID</th>
                                                        <th>Vendor Name</th>
                                                        <th>Venue Name</th>                                                       
                                                        <th>Address</th>
                                                        <th>Booking Amount</th>
                                                        <th>Views</th>
                                                    </tr>
                                                </thead>                                              
                                                <tbody style="color:black">
                                                <?php 
                                                $id='';
                                                    $sql = "SELECT * from tbl_vendor td,tbl_venue tv where tv.vendor_id=td.vendor_id order by tv.venue_id";													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                                                                                
                                                ?>
                                                    <tr align="center">
                                                        <td><?php echo $row['venue_id']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['venue_name']; ?></td>
                                                        <td><?php echo $row['venue_address']; ?></td>
                                                        <td><?php echo $row['booking_amt']; ?></td> 
                                                        <td><?php echo $row['views']; ?></td>
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