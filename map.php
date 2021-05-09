<?php include 'head_section.php';?>
<!-- Start Venue Display -->
<?php include 'viewinfo.php';?>
<!-- End Venue Display -->
<!-----Details-------->
<div class="app-profile-top-fixed-bar"></div>
<div class="storefront-container">
    <ul class="storefront-nav wrapper">
        <li class="storefront-nav-tab  app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="viewvenue.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Profile</a></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="faq.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">FAQs</a></li>
        <li class="storefront-nav-tab  app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="photos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?> ">Photos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php if(isset($icount)){ echo $icount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="videos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Videos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($video_count)){ echo $video_count;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="view_review.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Reviews</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($rcount)){ echo $rcount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab current app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="map.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Map</a></li>
        <!-- <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="facility.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">More Details</a></li> -->
    </ul>
</div>
<div id="contact-emp-layer" class="dnone"></div>
<div class="wrapper"style="background-image:url('Style/images/aa.jpg')"><div class="pure-g"> <div class="pure-u-3-4">
            <div class="storefront-content">
                <div class="storefront-section storefront-section-noBorder">
                    <h1 class="app-slider-title storefront-title-section">Map</h1>
                    <div class="mb10 storefront-video-subtitle app-slider-description"></div>
                    <iframe width="720" height="480" frameborder="0" id="cusmap" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $name,+$address,+$city; ?>&output=embed"></iframe>

                    <!-- <iframe width="810" height="480" frameborder="0" id="cusmap" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $name,+$address,+$city; ?>&output=embed"></iframe> -->
            </div>
         </div>
    </div>
    <div class="pure-u-1-4 app-sticky-aside-parent">
        <div class="storefront-aside">
            <div class="app-sticky-aside-storefront">
                <div id="app-emp-form-contactar" class="storefrontContact" >
                    <div id="app-lateral-form" style="display: block;" >                       
                        <?php include 'sidequotation.php';?> 
                    </div>
                </div>            
            </div>      
        </div>
       </div>
    </div>
</div>
<?php include 'footer.php';?>