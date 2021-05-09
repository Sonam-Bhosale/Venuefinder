                                  <?php include('includes/db_connect.php');?>
                                  <div class="modal-header">
                                                        <h4 class="modal-title">Purchase Plan Status</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true" style="color:black">×</span>
                                                            <span class="sr-only">close</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="">
                                                        <p>
                                                            <?php 
                                                            $id=$_GET['id'];
                                                            $q="select * from venue_plan where id='$id'";
                                                            $result=mysqli_query($connect,$q);
                                                            while($row=mysqli_fetch_array($result)){
                                                            $status=$row['status'];}
                                                            ?>
                                                             <div class="form-group"><label for='status' style="color:black"> PID</label>
                                                             <div class="form-group"><input type="text" class="form-control" value="<?php echo $id;?>"  name="pid"></div>
                                                            <div class="form-group"><label for='status' style="color:black"> Status</label>
                                                            <select id='status' name='status' class="form-control" >
                                                            <option  value="<?php echo $status;?>"> <?php echo $status;?></option>
                                                            <?php
                                                                if($status =="Active"){
                                                                ?>
                                                                <option  value="Deactive">Deactive</option>
                                                            <?php } ?>
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