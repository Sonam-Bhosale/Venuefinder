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
                                        <h2 class="page-header-title">Edit Event</h2>                                       
                                    </div>
                                </div> 
                               <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width:1100px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                        <form role="form" method="post" action="../controller/editprocess_master.php">
                                        <div class="widget-body">
                                            <div class="table-responsive">
                                        <table class="table mb-0">
                                                <?php                                           
                                                $vid=$_GET['vid'];
                                                $eid=$_GET['id'];
                                                $sql="SELECT * FROM event_master where venue_id='$vid' and id='$eid' ";
                                                $result = $connect->query($sql);
                                                while($row=$result->fetch_array())
                                                {
                                                    
                                        ?>
                                            <tr>
                                                <td align="center"> ID</td>
                                                <td><div class="form-group"><?php echo $row['id'];?><input name="id" type="hidden" value="<?php echo $row['id']; ?>"></div></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Event Name</td>
                                                <td>
                                                    <div class="form-group">
                                                    <input required class="form-control" name="event_name" placeholder="Event Name" value="<?php echo $row['event_name']; ?>" autofocus>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td>Price</td>
                                                <td><div class="form-group">
                                                <input type="text" class="form-control" value=" <?php echo $row['price'];?>" name="price" onkeypress="return isNumberKey1(event)" placeholder="Event Price" required autofocus>
                                                </div></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Advance Booking Percentage</td>
                                                <td><div class="form-group">
                                                <input type="text" class="form-control" value=" <?php echo $row['advance'];?>" name="advance" onkeypress="return isNumberKey1(event)" placeholder="Event Advance" required autofocus>
                                                </div></td>
                                            </tr>
                                                <tr align="center">
                                                <td colspan="2"><center><div class="form-group"><input type="submit" class="btn btn-md btn-primary"  name="btnUpdateEvent" value="Update">
                                                        </div>
                                            </center></td>											       
                                            </tr>
                                            <?php } ?>
                                                </table>

                                            </div>
                                        </div>
                                 </form>
                                </div>
                                <!-- End Sorting -->
                            </div>
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