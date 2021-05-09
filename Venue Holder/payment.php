<?php include('includes/db_connect.php');?>
<div class="modal-header">
                        <h4 class="modal-title">Payment</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true" style="color:black">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                        <p>
                            <?php 
                            $vid=$_SESSION['venue_id'];
                            $id=$_GET['id'];
                            $q="select * from book_venue where book_id='$id' and vendor_id='$vid'";
                            $result=mysqli_query($connect,$q);
                            while($row=mysqli_fetch_array($result)){
                            $remain=$row['remain_payment'];
                            $advance=$row['advance_payment'];}
                            ?>
                             <div class="form-group"><label for='status' style="color:black">Book ID:</label>
                            <input type="text" readonly class="form-control" value="<?php echo $id;?>"  name="book_id">
                            </div>
                            <div class="form-group"><label for='status' style="color:black">Remaining Amount:</label>
                                <input type="text" readonly class="form-control" value="<?php echo $remain;?>"  name="remain">
                            </div>
                            <div class="form-group"><label for='status' style="color:black">Amount  To Paid:</label>
                                <input type="text" value="" class="form-control"  name="amount">
                                <input type="hidden" value="" class="form-control" value="<?php echo $advance;?>" name="advance_amount">
                            </div>

                    <div>
                        <center></br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-md btn-info"  name="btnpayment" value="Change">
                                    
                        </center></div>
                        </p>
                            </form>
                    </div>
           