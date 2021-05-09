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
                                        <h2 class="page-header-title">Registered User List</h2>
                                    </div>
                                </div>
                         <!-- Begin Row -->
                        <div class="row align-items-center mt-3 mb-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <!-- <h4>Sorting</h4> -->
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Venue ID</th>
                                                        <th>Venue Name</th>
                                                        <th>Venue Information</th>
                                                        <th>Chair</th>
                                                        <th>Seating Capacity</th>
                                                        <th>Parking</th>
                                                        <th>Drinking Water</th>
                                                        <th>Catering</th>
                                                        <th>Decoration</th>
                                                        <th>Sound System</th>
                                                        <th>AC/Fan</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                   $sql = "SELECT * FROM register_venue,venue_details where register_venue.user_id=venue_details.venue_id  and venue_details.venue_id=2 ";
                                                   $result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                        $status=$row['status'];
                                                        $vid=$row['user_id'];
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $row['venue_id']; ?></td>
                                                        <td><?php echo $row['venue_name']; ?></td>
                                                        <td><?php echo $row['venue_info']; ?></td>
                                                        <td><?php echo $row['chair']; ?></td>
                                                        <td><?php echo $row['seating_capacity']; ?></td>
                                                        <td><?php echo $row['parking']; ?></td>
                                                        <td><?php echo $row['drink_water']; ?></td>
                                                        <td><?php echo $row['catering']; ?></td>
                                                        <td><?php echo $row['decoration']; ?></td>
                                                        <td><?php echo $row['sound_system']; ?></td>
                                                        <td><?php echo $row['ac_fan']; ?></td>
                                                        <td  class="td-actions"><a href="edit_venue.php?vid=<?php echo $vid; ?>"><i class="la la-edit edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <a href="venue_delete.php?vid=<?php echo $vid; ?>"><i class="la la-close delete" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                    <?php }?>
                                            </table>
                                        </div>
                                    </div>
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