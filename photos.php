<?php include 'head_section.php';?>
<script defer="" src="Style/common.js.download"></script>
<!-- Start Venue Display -->
<?php include 'viewinfo.php';?>
<!-- End Venue Display -->
<!-----Details-------->
<!-- <img class="img-trace" src="controller/uploads/logo/<?php //echo $logo;?>" alt="Logo">
<img class="img-trace" src="controller/uploads/banner/<?php //echo $banner;?>" alt="Banner"> -->

<div class="app-profile-top-fixed-bar"></div>
<div class="storefront-container">
<ul class="storefront-nav wrapper">
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="viewvenue.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Profile</a></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="faq.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">FAQs</a></li>
        <li class="storefront-nav-tab  current app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="photos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?> ">Photos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php if(isset($icount)){ echo $icount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="videos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Videos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($video_count)){ echo $video_count;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="view_review.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Reviews</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($rcount)){ echo $rcount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="map.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Map</a></li>
        <!-- <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="facility.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">More Details</a></li> -->
    </ul>
</div><div class="wrapper" style="background-image:url('Style/images/aa.jpg')">
    <div class="pure-g">
        <div class="pure-u-3-4">
            <div class="storefront-content">
           
                <p class="storefront-subtitle">Photo Gallery of <?php if(isset($name)){  echo $name;}?></p>               
                <div class="storefront-gallery-thumbs">
                   <ul class="pure-g">
                   <?php
                        $q4="select * from images where holder_id=$vendor_id";
                        $result=$connect->query($q4);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $img_id=$row['image_id'];
                                $image=$row['image_name'];
                                $album=$row['album_name'];
                                $location=$row['location'];
                                $views=$row['views'];
                               
                            ?>
                                <li class="pure-u-1-6 item">
                                    <div class="storefront-gallery-thumbs-item">
                                        <a href="controller/uploads/album/<?php echo $image;?>?views=<?php echo $views;?> " title="<?php echo $album; ?>">
                                            <img class=" lazyloaded" data-src="<?php echo $location?>" width="250px" height="150px" alt="<?php echo 'Album:'.$album. ' '.$image;?>" src="<?php echo $location; ?>">
                                        </a>
                                        <input type="hidden" value="<?php echo $views;?>">
                                    </div>
                                </li>
                               <?php 
                                $view=$views+1;
                                $update="update images set views=$view where holder_id='$venue_id' and image_id='$img_id' and album_name='$album' and image_name='$image'";
                                $res=mysqli_query($connect,$update);
                              } } else{echo'<br><h1 align="center">No Photos Availables</h1>';}?>
                             </ul>
                </div>
            </div>
        </div>
        <div class="pure-u-1-4">
            <div class="storefront-aside storefront-aside-gallery">
                
            <div class="app-sticky-aside-storefront">
                <div id="app-emp-form-contactar" class="storefrontContact" data-id-empresa="149653" data-concertar-cita="">
                    <div id="app-lateral-form" style="display: block;">
                    <?php include 'sidequotation.php';?>
                    </div>
                </div>            
            </div>      
        </div>
       </div>
    </div><!---End  pure-g-->
</div><!---End Wrapper-->
<div id="app-common-layer" class="modal dnone" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <div id="app-va-modal" class="modal fade dnone" tabindex="-1" role="dialog" aria-hidden="true"></div>
<div id="app-carousel-reviews" class="dnone"></div>
<div class="app-custom-dimension" data-name="dimension16" data-value="140561"></div>
<?php include 'footer.php';?>
