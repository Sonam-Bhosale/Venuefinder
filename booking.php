<?php include('sidenavbar.php' );?>

<h3 class="homeSection__title"> Booking History</h3>
<hr class="mt20 medium bold">
  <p align="center" style="color:red">Note: After Cancellation of booking your booking amount not refunded.</p>
<br>
<table align="center" border="1"  width="900px">
    <thead>
        <tr align="center" style="font-weight:bold">
            <td>ID</td>
            <td>Venue Name</td>
            <td>Booking Date</td>
            <td>Event Name</td>
            <td>Paid Amount</td>
            <td>Unpaid Amount</td>
            <td style="width:90px">Status</td>
            <td style="width:70px">Receipt</td>            
            <td style="width:70px">Action</td>
            </tr>
    </thead>
    <tbody>
 <?php  
 
 $id=$_SESSION['User'];
 $sql="select * from book_venue,tbl_venue,tbl_vendor,payment where payment.payment_status='TXN_SUCCESS' and payment.txn_id=book_venue.transaction_id and book_venue.user_id=$id and
  book_venue.venue_id=tbl_venue.venue_id and tbl_vendor.vendor_id=book_venue.vendor_id order by book_venue.book_id desc";
        $result=$connect->query($sql);
                if ($result->num_rows> 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                       $session=$row['session'];
        ?>
        <tr align="center">
            <td><?php echo $row['book_id']; ?></td>
            <td><?php echo $row['venue_name']; ?></td>
            <!-- <td><?php if($session=='fullday'){echo 'Full Day';}else if($session=='morning'){echo 'Morning Session';}else{
                echo 'Evening Session';}  ?></td> -->
            <td><?php echo $row['booking_date']; ?></td>
            <td><?php echo $row['event_name']; ?></td>
            <td><?php echo $row['advance_payment']; ?></td>
            <td><?php echo $row['remain_payment']; ?></td>
            <td><?php echo $row['event_status']; ?></td>
            <td><a href="receipt.php?id=<?php echo $row['book_id'];?>" data-toggle="tooltip" data-placement="bottom" title="Receipt" ><i class="fa fa-file"></i></td>
            <td><a href="deletebooking.php?id=<?php echo $row['book_id'];?>" data-toggle="tooltip" data-placement="bottom" title="Cancel" > X</a>
        </tr>
        <?php                     
                   } } else{
                        echo '<tr><td colspan="10" align="center"><h1> No any data available</h1></td></tr>';
                    }?>
    </tbody>
</table>  
<br><br> 
            </div>  
            <br><br> 
</div>