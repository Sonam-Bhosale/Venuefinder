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
                                        <h2 class="page-header-title">Videos</h2>
                                        <div>
			                            <ul class="breadcrumb">
			                               <li class="breadcrumb-item active"><a class="btn btn-shadow" data-toggle="modal" data-target="#modal-centered" href="#">Upload Videos</a></li>
                                         </ul>
	                                </div>
                                    </div>
                                </div>
                                <!-- End Page Header -->
                                <?php 
                                    $id=$_SESSION['venue_id'];
                                    $sql="select *,date(venue_plan.start_date) as sdate,date(venue_plan.expire_date) as edate from venue_plan,subscription_plan where venue_plan.status='Active'and venue_plan.venue_id=$id and venue_plan.payment_status='TXN_SUCCESS' and venue_plan.plan_id=subscription_plan.plan_id and venue_plan.plan_id='3'";
                                    $result=mysqli_query($connect,$sql);
                                    if(mysqli_num_rows($result)>0)
                                    {                 
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $today=date('d-m-Y');
                                            $start_date=$row['sdate'];
                                            $start_ts=strtotime($start_date);
                                            $startdate=date('d-m-Y',$start_ts);
                                            $end_date=$row['edate'];
                                            $end_ts=strtotime($end_date); 
                                            $enddate=date('d-m-Y',$end_ts);
                                        }
                                        if(strtotime($today)>=$start_ts && strtotime($today)<=$end_ts){ 
                                    ?>
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
													 <label for="text"><b>Description of Video:</b></label>
                                                            <input type="text" name="description" id="description" class="form-control input-lg" placeholder="Enter Description" autofocus>
													</div>
													<div class="form-group">
													 <label for="text"><b>Upload Video:</b><sup style="font-size:16px;color:red">*</sup></label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon addon-secondary"><i class="la la-cloud-upload" style="font-size:20px;color:red"></i> </span>
                                                        <input type="file" name="file" id="file"style="font-size:14px;color:red" class="form-control input-lg" required autofocus>
                                                        </div>
                                                    </div>
													<p id="name" align="center" style="color:red;"></p>
													<div>
														<center></br><input type="submit" class="btn btn-md btn-primary"  name="video_upload" value="Upload">
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
                        <?php }
                                       else {
                                        $diff=strtotime($today)-strtotime($end_date);  
                                        $x=abs(round($diff/86400));
                                            $update="update venue_plan set status='Deactive' where id='$pid'";
                                            if(mysqli_query($connect,$update)){
                                                //echo 'Ok';
                                            }
                                            else{
                                                echo 'Error:'.$connect->error;
                                            }
                                            ?>
                                        <div id="modal-centered" class="modal fade">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"> Add Videos</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true" style="color:black">×</span>
                                                            <span class="sr-only">close</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <h3>  <?php echo $x;?> days go ! Your plan was expired </h3><br>
                                                            <h3>For further video upload purchase plan</h3>
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Centered Modal -->

                                       <?php }                                            
                                        }                                                         
                                      else
                                        {?>
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
                                                            <h3> Please activated top plan to upload videos !!!</h3>
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Centered Modal -->
                                       <?php     
                                        }
                                    ?>
                                    <?php
                                    $id=$_SESSION['venue_id'];                                
                                    $sql= "select *,count(holder_id) as video_count from videos where holder_id=$id";
                                    $result=mysqli_query($connect,$sql);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        $count=$row['video_count'];
                                    }
                                ?>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4 class="m-0"><?php if(isset($count)){echo $count;}else{ echo '0';}?> Videos</h4>                                     
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <div class="row">                        
                                    <?php 
                                        $id=$_SESSION['venue_id'];
                                        $sql="SELECT * FROM videos where holder_id=$id ORDER BY video_id DESC LIMIT 5";
                                        $result=mysqli_query($connect,$sql);
                                        if(mysqli_num_rows($result)>0){
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                    $videos_field= $row['name'];
                                                    $vid=$row['video_id'];
                                                    $video_show= "../videos/$videos_field";
                                                    $location=$row['location'];
                                                    $descriptionvalue= $row['description'];
                                                    $fileextensionvalue= $row['extension'];
                                            ?>
                                   
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="widget has-shadow" >
                                            <figure class="img-hover-01">
                                            <img src="../controller/uploads/logo/<?php echo $logo;?>"  class="img-fluid" alt="..." style="width:320">
                                                <div>
                                                   
                                                    <a href="<?php echo $location;?>" data-lity data-toggle="tooltip" data-placement="bottom" title="See">
                                                        <i class="la la-play"></i>
                                                    </a>
                                                    <a href="deletevideos.php?id=<?php echo $vid;?>" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                        <i class="la la-close delete"></i>
                                                    </a>
                                                </div>
                                            </figure><br>
                                            <div><h4 align="center"> <?php echo $videos_field;?></h4><br>
                                        </div>
                                    </div>    
                                </div>
                                <?php
                                        }
                                    }
                                    else{
                                        echo "<br><br><h3 align='center'><br>Videos Not Uploaded!!</h3><br>";
                                    }   
                                    ?>
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