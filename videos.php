<?php include 'head_section.php';?>
<!-- Start Venue Display -->
<?php include 'viewinfo.php';?>
<!-- End Venue Display -->
<!-----Details-------->
<img class="img-trace" src="controller/uploads/logo/<?php echo $logo;?>" alt="">
<img class="img-trace" src="controller/uploads/banner/<?php echo $banner;?>" alt="">

<div class="app-profile-top-fixed-bar"></div>
<div class="storefront-container">
<ul class="storefront-nav wrapper">
        <li class="storefront-nav-tab  app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="viewvenue.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Profile</a></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="faq.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">FAQs</a></li>
        <li class="storefront-nav-tab  app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="photos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?> ">Photos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php if(isset($icount)){ echo $icount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab current app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="videos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Videos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($video_count)){ echo $video_count;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="view_review.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Reviews</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($rcount)){ echo $rcount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="map.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Map</a></li>
        <!-- <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="facility.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">More Details</a></li> -->
    </ul>
</div>
<div id="contact-emp-layer" class="dnone"></div>
<div class="wrapper" style="background-image:url('Style/images/aa.jpg')">
    <div class="pure-g">
        <div class="pure-u-3-4">
            <div class="storefront-content">
                <div class="storefront-section storefront-section-noBorder">
                    <h1 class="app-slider-title storefront-title-section">Videos of <?php if(isset($name)){echo $name;}?> </h1>
                    <div class="mb10 storefront-video-subtitle app-slider-description">
                      
                    </div>
                     
           </div>
           <ul class="storefront-videos-related pure-g-r row">
              <?php
				  $q3="SELECT * FROM videos where holder_id=$vendor_id ORDER BY video_id DESC"; 
				  $result=$connect->query($q3);
				  if ($result->num_rows > 0) {
					  while($row = $result->fetch_assoc()) {
					  $video_id=$row['video_id'];
						  $desc=$row['description'];
						  $video_name=$row['name'];
						  $location=$row['location'];                                         
             ?>
					
                  
                    <li class="pure-u-1-3">
                        <div class="box box-related" style="width:200px; height:200px">
                            <a class="box-related-thumb icon icon-play-white" href="<?php echo $location;?>?views=<?php echo $views;?>" title="<?php echo $desc;?> ">
                                        <img src="controller/uploads/logo/<?php echo $logo;?>" alt="<?php echo $video_name;?>" width="200px" height="200px">
                                </a>
                                <p class="box-related-description">
                                    <a href="<?php echo $location;?>">
                                    <?php echo $desc.'<br>';?>          
                                    </a> 
                                </p>
                        </div>
                    </li>                              
                        
                         <?php   }} else{ echo '<h2 align="center"> No Videos Availables</h2>';}?>
                         </ul> <br> 
             </div>
    </div>
        <div class="pure-u-1-4 app-sticky-aside-parent">
        <div class="storefront-aside">
            <div class="app-sticky-aside-storefront">
                <div id="app-emp-form-contactar" class="storefrontContact" >
                    <div id="app-lateral-form" style="display: block;">
                        <?php include 'sidequotation.php';?>
                    </div>
                </div>            
            </div>      
        </div>
       </div>
    </div>
</div>
<div id="app-carousel-reviews" class="dnone"></div>
<div class="app-custom-dimension" data-name="dimension16" data-value="140561"></div>
<?php include 'footer.php';?>