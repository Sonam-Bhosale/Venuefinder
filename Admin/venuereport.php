
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
                                        <a href="venuereport.php" style="color:red"> Venue Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetween.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weekly.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthly.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="rpt_chartvendor.php"> Graphical Analysis</a>

    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div style="background-color:cornflowerblue"><br>
                                        <h2 align="center"> Venue Report</h2><hr>
                                    </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Venue ID</th>
                                                        <th>Name</th>
                                                        <th>Venue Name </th>
                                                        <th>Email</th>
                                                        <th>Landline</th>
                                                        <th>Amount</th>
                                                        <th>Creation Date</th>
                                                        <th>Booking</th>
                                                        <th>Review</th>
                                                        <th>Views</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php 
                                                    $sql = "SELECT *,date(tv.created_at) as cdate FROM tbl_vendor td,tbl_venue tv where td.vendor_id=tv.vendor_id order by venue_id";
													$result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                                       while($row = $result->fetch_array())
													{    
                                                        $venue_id=$row['venue_id'];
                                                        $vendor_id=$row['vendor_id'];
                                                        $vname= $row['venue_name'];                                                     
                                                        $view=$row['views'];
                                                        $date= $row['cdate'];  
                                                        $start_ts=strtotime($date);
                                                        $startdate=date("d-m-Y",$start_ts); 
                                                                $q="SELECT count(book_id) as count_book FROM book_venue,payment where payment.payment_status='TXN_SUCCESS' and book_venue.book_id=payment.bookid and book_venue.venue_id='$venue_id' and book_venue.vendor_id='$vendor_id' ORDER BY book_venue.book_id ASC";
                                                               // echo $q;
                                                                $res = mysqli_query($connect,$q); 
                                                            while($r = mysqli_fetch_array( $res )) {
                                                                $count=$r['count_book'];
                                                                }        
                                                                $rate="select count(id) as rate_count from rating where venue_id='$venue_id'"; 
                                                                $res1 = mysqli_query($connect,$rate); 
                                                                while($r = mysqli_fetch_array( $res1 )) {
                                                                    $count1=$r['rate_count'];
                                                                    }                                     ?>
                                                    <tr align="center">
                                                    <td><?php echo $row['venue_id'];?></td>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['venue_name'];?></td>                                                         
                                                        <td><?php echo $row['email'];?></td>   
                                                        <td><?php if(isset($row['landline'])){echo $row['landline'];}else{echo '-';}?></td>  
                                                        <td><?php echo $row['booking_amt'];?></td>  
                                                        <td><?php echo $startdate;?></td>  
                                                        <td align="center"><?php echo $count;?></td>  
                                                        <td align="center"><?php echo $count1;?></td>   
                                                        <td align="center"><?php echo $view;?></td>   
                                                    </tr>
                                                    <?php } }else{
                                                        echo '<tr><td colspan="10" align="center">Nothing to display</td></tr>';}?>
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