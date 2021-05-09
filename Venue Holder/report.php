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
                                        <h2 class="page-header-title">Reports</h2>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                               <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <!-- <h4> Reports</h4>-->
										   
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>											
													    <th>ID</th>
                                                        <th>Report List</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                        <td>1</td>
                                                        <td><a href="booking.php">Booking Report</a></td>
                                                        <td><a href="booking.php"><i class="la la-eye la-3x"></i></a></td>
                                                </tr>
												 <tr>
                                                        <td>2</td>
                                                        <td><a href="rpt_image.php">Image Album Report</a></td>
                                                        <td><a href="rpt_image.php"><i class="la la-eye la-3x"></i></a></td>
                                                </tr>
												 <tr>
                                                        <td>3</td>
                                                        <td><a href="videorpt.php">Video Report</a></td>
                                                        <td><a href="videorpt.php"><i class="la la-eye la-3x"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Export -->
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