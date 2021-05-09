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
                                    <a href="booking_order.php"style="color:red">Booking List&nbsp;|&nbsp;</a>
                                        <a href="pending.php">Pending Booking</a>&nbsp;|&nbsp;
                                        <a href="complete.php">Completed Booking</a>&nbsp;|&nbsp;
                                        <a href="cancel.php">Canceled Booking</a>&nbsp;|&nbsp;
                                        <a href="booking.php">Booking Reports</a>&nbsp;|&nbsp;
                                        <a href="rpt_booking.php" >Graphically Booking Report</a>&nbsp;
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <div class="row">
                                    <div class="col-xl-12">
                                    <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Booking Details</h4>
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
                                                    <th>Action</th>                                                    
                                                    <th>Verify</th>
                                                </tr>
                                                </thead>                               
                                                <tbody style="color:black">
                                 <?php 
                                 $venue_id=$_SESSION['venue_id'];
                                $sql="select *,register_user.name as customer_name from book_venue,register_user,payment where payment_status='TXN_SUCCESS' and payment.txn_id=book_venue.transaction_id and  book_venue.vendor_id='$venue_id' and book_venue.user_id=register_user.user_id order by book_id desc";
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
                                        <td><a class="openModal1" title="Change Payment" style="color:blue" data-id="<?php echo $id;?>" data-toggle="modal" data-target="#modal-centered" href="#"><?php echo $unpaid;?></a></td>
                                        <td><?php if($status=='Completed'){?>
                                            <span style="width:100px;"><span class="badge-text badge-text-small success"><?php echo $status;?></span></span>
                                            </td>
                                        <?php } else if($status=='Confirmed'){?><span style="width:100px;"><span class="badge-text badge-text-small info"><?php echo $status;?></span></span></td>
                                            <?php }else{?><span style="width:100px;"><span class="badge-text badge-text-small danger"><?php echo $status;?></span></span>
                                                </td> <?php }?> 
                                        <td>
                                        <a class="openModal" title="Purchase" style="color:blue" data-id="<?php echo $id;?>" data-toggle="modal" data-target="#modal-centered" href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="bottom" title="Change Status" style="color:blue; font-size:24px;"></i></a>
                                        <a href="receipt.php?id=<?php echo $id;?>" data-toggle="tooltip" data-placement="bottom" title="View Reciept"><i class="la la-eye" style="color:blue; font-size:24px;"></i></a> 
                                            </td><td>
                                        <a href="paytm/TxnStatus.php?id=<?php echo $id;?>" data-toggle="tooltip" data-placement="bottom" title="Payment Details"><i class="la la-check-circle" style="color:blue; font-size:24px;"></i></a> </td>    
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
        <div id="modal-centered" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                   
                </div>
            </div>
        </div>
        
</body> 
</html>
<div id="modal-centered1" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                   
                </div>
            </div>
        </div>
        <script>
  $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      $.ajax({url:"status.php?id="+id,cache:false,success:function(result){
          $(".modal-content").html(result);
      }});
  });
</script>
<script>
  $('.openModal1').click(function(){
      var id = $(this).attr('data-id');
      $.ajax({url:"payment.php?id="+id,cache:false,success:function(result){
          $(".modal-content").html(result);
      }});
  });
</script>
<?php
        if(isset($_POST['btnstatus']) && isset($_POST['status']))
        {
            $id=$_POST['book_id'];
            $status=$_POST['status'];
            $q="update book_venue set event_status='$status' where book_id='$id'";
          if(mysqli_query($connect,$q))
           { echo "<script>alert('Status change to completed !!')</script>"; 
               echo "<script>window.location.href='../venue holder/booking_order.php';</script>";}
        }
?>
         <?php
    if(isset($_POST['btnpayment'])){ 
        $id=$_POST['book_id'];
        $remain=$_POST['remain'];
        $amount=$_POST['amount'];
        $r=$remain-$amount;
        $q="select * from book_venue where book_id='$id'";
        $res=mysqli_query($connect,$q);
        $row=mysqli_fetch_array($res);
        $advance=$row['advance_payment'];
        $adv=$advance+$amount;
        $update="update book_venue set remain_payment=$r, advance_payment=$adv where book_id='$id'";
        echo $update;
        if(mysqli_query($connect,$update))
        {
            echo "<script>alert('Amount added !!')</script>";                                                
            echo "<script>window.location.href='booking_order.php';</script>"; 
        }
    }
?>