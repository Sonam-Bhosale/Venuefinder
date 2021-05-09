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
                                        <h2 class="page-header-title">Images</h2>
                                        <div>
			                            <ul class="breadcrumb">
			                               <li class="breadcrumb-item active"><a class="btn btn-shadow" data-toggle="modal" data-target="#modal-centered" href="#">New Album</a></li>
                                         </ul>
	                                    </div>
                                    </div>
                                </div>
                                <!-- Begin Centered Modal -->
						<div id="modal-centered" class="modal fade">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Add Videos</h4>
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
													 <label for="text"><b>Album Name:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                            <input type="text" name="album_name" id="album_name" class="form-control input-lg" placeholder="Enter Album Name" required autofocus>
													</div>
													<div class="form-group">
													 <label for="text"><b> Select Image Files to Upload:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                     <input type="file" name="files[]" multiple class="form-control input-lg" required autofocus>
													</div>
													<p id="name" align="center" style="color:red;"></p>
													<div>
														<center></br><input type="submit" class="btn btn-md btn-primary"  name="image_upload" value="Upload">
																	<button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
														</center>
												</div>
												</fieldset>
                            
											</form>
										</p>
									</div>
									
								</div>
							</div>
						</div>
                        <!-- End Centered Modal -->
                                <!-- End Page Header -->
                                <div class="row align-items-center mt-3 mb-4">
                                    <div class="col-4">
                                        <h4 class="m-0">640 Images</h4>
                                    </div>
                                    <div class="col-8 text-right">
                                        <ul class="list-inline">
                                            <li class="list-inline-item mr-2">
                                                <a href="javascript:void(0)"> 
                                                    <i class="la la-list la-2x" data-toggle=""></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-2">
                                                <a href="javascript:void(0)"> 
                                                    <i class="la la-th-large la-2x"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0)"> 
                                                    <i class="la la-refresh la-2x"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="widget has-shadow">
                                            <figure class="img-hover-01">
                                                <img src="../controller/uploads/logo/Photo.jpg" class="img-fluid" alt="...">
                                                <div>
                                                    <a href="#">
                                                        <span>26</span>
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="assets/img/albums/01.jpg" data-lity data-lity-desc="...">
                                                        <i class="la la-expand"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="la la-ellipsis-v"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="widget-body text-center">
                                                <h3 class="mt-3 mb-3"><a href="#">Album Name 01</a></h3>
                                            </div>
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