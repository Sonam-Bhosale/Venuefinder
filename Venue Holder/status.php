<?php include('includes/db_connect.php');?>
<div class="modal-header">
                        <h4 class="modal-title">Booking Status</h4>
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
                            $status=$row['event_status'];}
                            ?>
                          <div class="form-group"><label for='status' style="color:black">Book ID:</label>
                            <input type="text" readonly class="form-control" value="<?php echo $id;?>"  name="book_id">
                            </div>
                            <div class="form-group"><label for='status' style="color:black">Booking Status:</label>
                            <select id='status' name='status' class="form-control" >
                            <option  value="<?php echo $status;?>"> <?php echo $status;?></option>
                            <?php
                                if($status =="Confirmed"){
                                ?>
                                <option  value="Completed">Completed</option>
                            <?php }
                            //  else {
                            ?>
                                <!-- <option  value="Confirmed">Confirmed</option> -->
                            <?php // }?>
                        </select>
                    </div>
                    <div>
                        <center></br><br><br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-md btn-info"  name="btnstatus" value="Change">
                                    
                        </center></div>
                        </p>
                            </form>
                    </div>
                  