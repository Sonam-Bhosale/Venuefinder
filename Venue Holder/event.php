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
                                <div class="row">
                                    <!-- Begin Events -->
                                    <div class="col-xl-2">
                                        <div class="widget-32 widget-image bg-image">
                                            <div class="overlay"></div>
                                            <div class="content">
                                                <div id="events-day"></div>
                                                <div id="events-date"></div>
                                                <div id="events-year"></div>
                                            </div>
                                            <div class="real-time">
                                                <div id="events-time"></div>
                                            </div>
                                        </div>
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions">
                                                <h5><a class="btn btn-shadow" data-toggle="modal" data-target="#modal-centered" href="#">Add Events</a></h5>
                                            </div>
                                                    <!-- Begin Centered Modal -->
                                                <div id="modal-centered" class="modal fade">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add Event</h4>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <span aria-hidden="true" style="color:black">×</span>
                                                                    <span class="sr-only">close</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>
                                                                    <form role="form" method="post" enctype='multipart/form-data' action="../controller/process_services.php">
                                                                        <fieldset>	
                                                                        <div class="form-group">
                                                                            <label for="text"><b>Event Name:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                            <input type="text" class="form-control" name="event_name" placeholder="Event Name" required autofocus>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="text"><b>Event Price:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                            <input type="text" class="form-control" name="price" placeholder="Event Price" required autofocus>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="text"><b>Deposite Percentage:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                                            <input type="text" class="form-control" name="percentage" placeholder="Advance Booking Percentage" required autofocus>
                                                                        </div>
                                                                            <div>
                                                                                <center></br><input type="submit" class="btn btn-md btn-primary"  name="btnEvent" value="Insert">
                                                                                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                                                                                </center></div>
                                                                        </fieldset>
                                                                    </form>	</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Centered Modal -->
                                    <div class="widget-body">
                                        <div id="external-events">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Events -->
                            <div class="col-xl-10">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Events</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center" >
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Advance Price</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  
                                                    $vid=$_SESSION['venue_id'];
                                                    $sql = "SELECT * FROM event_master where venue_id=$vid order by id desc";
                                                    $result=$connect->query($sql);
                                                    if(mysqli_num_rows($result)>0){ 
                                                    while($row = $result->fetch_array())
                                                    {         
                                                                        ?>
                                                    <tr align="center">
                                                        <td><span class="text-primary"><?php echo $row['id']; ?></span></td>
                                                        <td><?php echo $row['event_name']; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td><?php echo $row['advance']; ?></td>
                                                        <td class="td-actions">
                                                            <a href="edit_event.php?id=<?php echo $row['id']; ?>&vid=<?php echo $vid;?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <a href="delete_event.php?id=<?php echo $row['id']; ?>&vid=<?php echo $vid;?>"><i class="la la-close delete" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php } }
                                                    else{
                                                        echo '<tr><td colspan="6" align="center"><h3>No data available.</h3></td></tr>';
                                                    }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sorting -->
                            </div>
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