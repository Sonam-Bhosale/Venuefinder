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
                                <!-- Begin Page Header-->
                                <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <h2> Booking Notification</h2>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <div class="row">
                                    <div class="col-xl-12">
                                    <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <!-- <h4>Events</h4> -->
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                <tr align="center">
                                                    <th> ID</th>
                                                    <th> User </th>
                                                    <th>Event</th>
                                                    <th>Booking Date</th>
                                                    <th>Paid </th>
                                                    <th> Unpaid</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>                               
                                                <tbody style="color:black">
                                 <?php 
                                 $venue_id=$_SESSION['venue_id'];
                                 $date=date('Y-m-d');
                                $sql="select *,register_user.name as customer_name from book_venue,register_user,payment where payment.payment_status='TXN_SUCCESS' and payment.txn_id=book_venue.transaction_id and date(book_venue.created_at)='$date' and  book_venue.venue_id='$venue_id' and book_venue.user_id=register_user.user_id order by book_id desc";
                              $result=mysqli_query($connect,$sql);
                                while($row=mysqli_fetch_array($result))
                                {
                                    $id=$row['book_id'];
                                    $user=$row['customer_name'];
                                    $event_name=$row['event_name'];
                                    $date=$row['booking_date'];
                                    $status=$row['event_status'];
                                    $paid=$row['advance_payment'];
                                    $unpaid=$row['remain_payment'];

                                ?>
                                     <tr align="center">
                                        <td><?php echo $id; ?></td> 
                                        <td><?php echo $user; ?></td>  
                                        <td><?php echo $event_name; ?></td> 
                                        <td><?php echo $date; ?></td> 
                                        <td><?php echo $paid; ?></td> 
                                        <td><?php echo $unpaid;?></a></td>
                                        <td><?php echo $status; ?></td>  
                                        </tr>  <?php } ?>
                                    </tbody>
                    
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                                <!-- End Sorting -->
                                </div>
                                </div>
                                <!-- End Row -->
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