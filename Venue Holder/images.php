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
                                <?php 
                                    $id=$_SESSION['venue_id'];
                                    $sql="select *,date(venue_plan.start_date) as sdate,date(venue_plan.expire_date) as edate from venue_plan,subscription_plan where venue_plan.status='Active' and venue_plan.payment_status='TXN_SUCCESS' and venue_plan.venue_id='$id' and venue_plan.plan_id='2' or  venue_plan.status='Active' and venue_plan.venue_id='$id'and venue_plan.plan_id='3' and venue_plan.payment_status='TXN_SUCCESS' ";                  
                                    $result=mysqli_query($connect,$sql);
                                    if(mysqli_num_rows($result)>0)
                                    {                 
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $today=date('d-m-Y');
                                            $pid=$row['id'];
                                            $start_date=$row['sdate'];
                                            $start_ts=strtotime($start_date);
                                            $startdate=date('d-m-Y',$start_ts);
                                            $end_date=$row['edate'];
                                            $end_ts=strtotime($end_date); 
                                            $enddate=date('d-m-Y',$end_ts);
                                        }
                                            if(strtotime($today)>=$start_ts && strtotime($today)<=$end_ts){ 
                                    ?><!-- Begin Centered Modal -->
                                            <div id="modal-centered" class="modal fade">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Add Album</h4>
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
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon addon-secondary"><i class="la la-cloud-upload" style="font-size:20px;color:red"></i> </span>
                                                                 
                                                                            <input type="file" name="files[]" multiple class="form-control input-lg"  style="font-size:14px;color:red" required autofocus>
                                                                        </div>
                                                                    </div>
                                                                        <p id="name" align="center" style="color:red;"></p>
                                                                        <div>
                                                                            <center></br><input type="submit" class="btn btn-md btn-primary"  name="btnimageupload" value="Upload">
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
                                                        <h4 class="modal-title"> Add Album</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true" style="color:black">×</span>
                                                            <span class="sr-only">close</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <h3>  <?php echo $x;?> days go ! Your plan was expired </h3><br>
                                                            <h3>For further image upload purchase plan</h3>
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
                                                        <h4 class="modal-title">Add Album</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true" style="color:black">×</span>
                                                            <span class="sr-only">close</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <h3> Please activated either premium or top plan to upload images !!</h3>
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Centered Modal -->
                                       <?php     
                                        }
                                    ?>
                                <!-- End Page Header -->
                                <?php
                                    $id=$_SESSION['venue_id'];                                
                                    $sql= "select *,count(holder_id) as image_count from images where holder_id=$id";
                                    $result=mysqli_query($connect,$sql);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        $count=$row['image_count'];
                                    }
                                ?>
                                 <div class="row">
                                    <div class="col-xl-12">
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h2><?php if(isset($count)){echo $count;}else{ echo '0';}?> Images</h2>                                     
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <div class="row" style="background-color:white">
                                <?php
                                    $id=$_SESSION['venue_id'];                                
                                    $sql= "select distinct album_name from images where holder_id=$id";
                                    $result=mysqli_query($connect,$sql);
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $album_name=$row['album_name'];
                                            
                                            $q="select count(image_name) as imagec,count(views) as likecount from images where album_name='$album_name'";
                                            $r=mysqli_query($connect,$q);
                                            while($row1=mysqli_fetch_array($r))
                                            {
                                                $c=$row1['imagec']; 
                                                $likec=$row1['likecount'];                                       
                                ?>

                                    <div  class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="widget has-shadow">
                                            <figure class="img-hover-01">
                                                <img src="../controller/uploads/logo/<?php echo $logo;?>"  class="img-fluid" alt="...">
                                                <div>
                                                <a href="album_images.php?id=<?php echo $id;?>&name=<?php echo $album_name;?>">
                                                        <span><?php echo $c;?></span>
                                                        <i class="la la-heart-o" data-toggle="tooltip" data-placement="bottom" title="Image Count"></i>
                                                    </a>
                                                    <!-- <a href="#">
                                                        <span><?php echo $likec;?></span>
                                                        <i class="la la-heart-o" data-toggle="tooltip" data-placement="bottom" title="Like Count"></i>
                                                    </a> -->
                                                    <a href="../controller/uploads/logo/<?php echo $logo;?>" data-toggle="tooltip" data-placement="bottom" title="Full Screen" data-lity data-lity-desc="...">
                                                        <i class="la la-expand"></i>
                                                    </a>
                                                    <a href="deletealbum.php?name=<?php echo $album_name;?>&id=<?php echo $id;?>" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                        <i class="la la-close delete"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="widget-body text-center">
                                                <h3 class="mt-3 mb-3"><a href="album_images.php?id=<?php echo $id;?>&name=<?php echo $album_name;?>"><?php echo $album_name;?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                        }
                                    }
                                    else{
                                        echo "<br><br><h3 style='text-align:center'><br>Images Not Uploaded!!</h3><br>";
                                    }   
                                    ?>
                                    
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