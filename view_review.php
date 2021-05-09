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
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="videos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Videos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($video_count)){ echo $video_count;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab current app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="view_review.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Reviews</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($rcount)){ echo $rcount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="map.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Map</a></li>
        <!-- <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="facility.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">More Details</a></li> -->
    </ul>
</div>
<div id="contact-emp-layer"></div>
<div class="wrapper" style="background-image:url('Style/images/aa.jpg')">
    <div class="pure-g">
        <div class="pure-u-3-4">
            <div class="storefront-content">                
                <div class="pure-g mb15 pb5 border-bottom">
                    <div class="pure-u-2-3"> <h1 class="storefront-title-section storefront-title-section--marginBottomSmall ">
                        Reviews of The <?php if(isset($name)){echo $name;}?> </h1> 
                         <p class="color-grey">Recommended by 100% of couples·
                            <a class="link--primary strong"href="review.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>" rel="nofollow">Write a review</a>
                        </p>
                    </div>
                </div>    
                <?php 
                    $q="select *,round(avg((quality+response+value)/3),1) as totalavg,round(avg(quality),1) as tlquality,round(avg(response),1) as tlrepsonse,round(avg(value),1) as tlvalue from rating where venue_id='$venue_id'";
                    $r=mysqli_query($connect,$q);
                    while($row=mysqli_fetch_array($r))
                    {
                        $totalavg=$row['totalavg'];
                        $toalquality=$row['tlquality'];
                        $totalresponse=$row['tlrepsonse'];
                        $totalvalue=$row['tlvalue'];
                    }
                ?>            
                <div class="storefrontRating pt20">
                    <div class="storefrontRatingBox">
                        <span class="storefrontRatingBox__total"><?php if(isset($totalavg)){ echo $totalavg;}else{  echo '0.0';} ?></span>
                        <span class="storefrontRatingBox__percent">out of 5.0</span>
                        <div class="rating-stars-vendor">
                            <span class="rating-stars-vendor rating-stars-vendor-bar" style=" width:90%;"></span>
                        </div>
                    </div>
                    <ul class="ratingBar">
                        <li class="ratingBar__item ratingBar__item--top" data-columns="3">
                            <i class="svgIcon svgIcon__quality ratingBar__icon"><svg viewBox="0 0 31 44"><path d="M15.5 31C6.94 31 0 24.06 0 15.5 0 6.94 6.94 0 15.5 0 24.06 0 31 6.94 31 15.5 31 24.06 24.06 31 15.5 31zm0-2C22.956 29 29 22.956 29 15.5S22.956 2 15.5 2 2 8.044 2 15.5 8.044 29 15.5 29zm7.5 2a1 1 0 012 0v12a1 1 0 01-1.485.875L15.5 39.429l-8.015 4.446A1 1 0 016 43V31a1 1 0 012 0v10.302l7.015-3.89a1 1 0 01.97 0L23 41.301V31zM10.875 16.823a3474.948 3474.948 0 01-2.407-2.121 1.364 1.364 0 01-.397-1.464c.175-.517.632-.87 1.16-.932l1.336-.143 1.908-.205.305-.033.12-.256.788-1.688.553-1.184A1.389 1.389 0 0115.499 8a1.4 1.4 0 011.261.798l.552 1.183.789 1.688.12.256a182079.96 182079.96 0 013.545.382c.53.06.99.414 1.164.934.176.527.013 1.091-.397 1.462l-.991.874a9127.99 9127.99 0 01-1.62 1.426l.054.25a9468.34 9468.34 0 01.66 3.095 1.369 1.369 0 01-.553 1.396 1.408 1.408 0 01-1.484.083l-1.164-.643c-.908-.5-.908-.5-1.663-.918l-.273-.15a269811.572 269811.572 0 01-3.106 1.712 1.395 1.395 0 01-1.473-.08 1.378 1.378 0 01-.556-1.408 1852.645 1852.645 0 01.66-3.09l.054-.248-.203-.179zm1.322-1.5l.642.565.44.387-.123.573-.175.82-.377 1.76 1.657-.913.755-.417.483-.266.483.266.756.417 1.657.914-.375-1.758-.176-.824-.122-.572.44-.387.642-.566 1.339-1.178-1.831-.197-.865-.093-.561-.06-.239-.511-.358-.767-.789-1.688-.788 1.687-.359.768-.238.51-.561.06c-.173.02-.173.02-.865.094l-1.83.196 1.338 1.18z" fill-rule="nonzero"></path></svg></i>            <span>
                                <span class="ratingBar__name ratingBar__name--big">Quality of service</span>
                                <span class="ratingBar__rating">
                                    <span class="ratingBar__ratingForeground" style="width:90%"></span>
                                </span>
                                <strong><?php if(isset($toalquality)){ echo $toalquality;}else{  echo '0.0';}?></strong>
                            </span>
                        </li>
                        <li class="ratingBar__item ratingBar__item--top" data-columns="3">
                            <i class="svgIcon svgIcon__pricing ratingBar__icon"><svg viewBox="0 0 47 42"><path d="M31.336 4.949c0 3.075-6.897 4.917-15.591 4.917C7.05 9.866.15 8.024.15 4.949.151 1.875 7.054.032 15.745.032c8.691 0 15.591 1.843 15.591 4.917zm-2 0c0-.41-1.24-1.195-3.545-1.81-2.626-.702-6.215-1.107-10.046-1.107-3.83 0-7.42.405-10.047 1.106-2.306.616-3.547 1.402-3.547 1.81 0 .411 1.24 1.196 3.547 1.812 2.627.701 6.216 1.106 10.047 1.106 3.831 0 7.42-.405 10.046-1.106 2.306-.615 3.545-1.4 3.545-1.811zm0 0a1 1 0 012 0v5.483c0 3.164-6.874 4.917-15.591 4.917C7.025 15.35.15 13.596.15 10.432V4.95a1 1 0 112 0v5.483c0 .47 1.273 1.262 3.664 1.871 2.614.667 6.186 1.046 9.93 1.046 3.742 0 7.314-.38 9.928-1.046 2.39-.61 3.663-1.4 3.663-1.87V4.948zM15.512 31.754C6.908 31.723.152 29.972.152 26.837V15.941v-5.554a1 1 0 112 0v5.508c.044.472 1.314 1.246 3.663 1.846 2.615.667 6.187 1.046 9.93 1.046 3.741 0 7.313-.38 9.928-1.046 2.371-.605 3.643-1.39 3.663-1.86v-.011-5.482a1 1 0 012 0v10.75c8.583.032 15.36 1.87 15.36 4.916V37.02c0 3.164-6.873 4.917-15.593 4.917-8.717 0-15.59-1.753-15.59-4.917v-5.267zm0-2V26.27c-5.787-.02-10.738-.82-13.36-2.294v2.861c0 .47 1.274 1.26 3.664 1.87 2.56.653 6.04 1.031 9.696 1.047zm2 1.04v.743c0 .47 1.274 1.26 3.663 1.87 2.615.667 6.187 1.047 9.928 1.047 3.743 0 7.316-.38 9.93-1.047 2.39-.61 3.664-1.4 3.664-1.87v-2.903c-2.66 1.495-7.717 2.337-13.594 2.337-5.874 0-10.93-.842-13.59-2.338v2.064a1.018 1.018 0 010 .096zm11.824-9.63v-2.671c-2.657 1.494-7.705 2.294-13.591 2.294-5.887 0-10.936-.8-13.593-2.294v2.861c0 .469 1.274 1.26 3.664 1.87 2.614.667 6.186 1.047 9.928 1.047.207 0 .42-.003.657-.007 1.945-1.812 6.888-2.92 12.935-3.1zm.811 1.982a1.004 1.004 0 01-.157.003c-3.407.07-6.562.461-8.932 1.094-1.807.483-2.96 1.07-3.374 1.498-.04.072-.088.138-.143.197a.28.28 0 00-.029.116c0 .41 1.24 1.195 3.546 1.81 2.627.702 6.216 1.107 10.045 1.107 3.832 0 7.422-.405 10.048-1.107 2.306-.615 3.546-1.4 3.546-1.81 0-.41-1.24-1.195-3.546-1.81-2.626-.702-6.216-1.107-10.048-1.107-.32 0-.64.003-.956.009zm14.55 11.013c-2.657 1.495-7.706 2.295-13.594 2.295-5.886 0-10.935-.8-13.59-2.295v2.862c0 .47 1.272 1.26 3.662 1.87 2.614.667 6.186 1.047 9.928 1.047 3.744 0 7.316-.38 9.93-1.047 2.39-.61 3.664-1.4 3.664-1.87v-2.862z" fill-rule="nonzero"></path></svg></i>            <span>
                                <span class="ratingBar__name ratingBar__name--big">Value</span>
                                <span class="ratingBar__rating">
                                    <span class="ratingBar__ratingForeground" style="width:90%"></span>
                                </span>
                                <strong><?php if(isset($totalvalue)){ echo $totalvalue;}else{  echo '0.0';} ?></strong>
                            </span>
                        </li>
                        <li class="ratingBar__item ratingBar__item--top" data-columns="3">
                            <i class="svgIcon svgIcon__widget ratingBar__icon"><svg viewBox="0 0 19 19"><path d="M17.217 6.655V1.793H1.783v4.862h2.9a.5.5 0 01.5.5v1.617L7.777 6.76a.5.5 0 01.306-.105h9.134zm-13.034 1h-2.9a.5.5 0 01-.5-.5V1.293a.5.5 0 01.5-.5h16.434a.5.5 0 01.5.5v5.862a.5.5 0 01-.5.5H8.255L4.99 10.188a.5.5 0 01-.807-.395V7.655zm-2.9 7.62a.5.5 0 01-.5-.5V9.5a.5.5 0 01.5-.5H3.07a.5.5 0 010 1H1.784v4.276H11.2a.5.5 0 01.343.136l2.274 2.138v-1.774a.5.5 0 01.5-.5h2.9V10H8.429a.5.5 0 010-1h9.288a.5.5 0 01.5.5v5.276a.5.5 0 01-.5.5h-2.9v2.43a.5.5 0 01-.843.365l-2.972-2.795H1.284z" fill-rule="nonzero"></path></svg></i>            <span>
                                <span class="ratingBar__name ratingBar__name--big">Response time</span>
                                <span class="ratingBar__rating">
                                    <span class="ratingBar__ratingForeground" style="width:90%"></span>
                                </span>
                                <strong><?php if(isset($totalresponse)){ echo $totalresponse;}else{  echo '0.0';} ?></strong>
                            </span>
                        </li>
                    </ul>
                </div>
                
                <ul class="app-reviews-list">
                <?php 
                    $q="select *,date(rating.created_at) as createddate from rating where venue_id='$venue_id' order by rand()";
                    $r=mysqli_query($connect,$q);
                    if(mysqli_num_rows($r)>0){
                    while($row=mysqli_fetch_array($r))
                    {
                        $lid=$row['id'];
                        $date=$row['createddate'];                        
                        $title=$row['title'];
                        $desc=$row['description'];
                        $name=$row['name'];
                        $likes=$row['likes'];
                        $quality=$row['quality'];
                        $response=$row['response'];
                        $value=$row['value'];
                        $profile=$row['photo'];
                        $total= number_format(($quality+$response+$value)/3,1);                   
                ?>   
                    <li class="app-review pure-g-r storefrontReview ">
                        <div id="opi_83780"></div>
                        <figure class="pure-u-1-9 storefrontItemReview__img">
                            <div class="mr20 mt5">
                                 <div class="avatar">
                                    <div class="avatar-alias size-avatar-large ">
                                        <img class="avatar-thumb" src="controller/uploads/review/<?php echo $profile;?>" width="" loading="lazy" alt="Profile">
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="pure-u-8-9">
                             <p class="storefrontReview__name"><?php echo $name;?>
                             <span class="adminReviewsItem__date"> <a href="like.php?lid=<?php echo $lid;?>"><i class="fa fa-heart"></i> </a><small class="storefrontItemReview__date"><?php echo $likes;?> </small>
                        </span> </p>
                            <div class="app-review-rating storefrontReview__stars mb10">
                                    <!-- <div class="rating-stars-vendor rating-stars-vendor-large mr5">
                                        <span class="rating-stars-vendor rating-stars-vendor-bar" style="width:100%"></span>
                                    </div> -->
                                    <?php 
                                     if($total >'1' && $total <='1.5')
                                     { ?> <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-empty"></i>
                                     <?php } else if($total <= '2.5' && $total >'1.5'){ ?>
                                         <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                           <i class="fa fa-star-half-empty"></i>
                                           <?php } else if($total <= '3.5' && $total >'2.5'){ ?>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-empty"></i>
                                             <?php } else if($total <='4.5' && $total >'3.5' ){ ?>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-empty"></i>
                                             <?php } else{?>
                                         <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i><?php }?></i><span class="mr5">&nbsp;<?php if(isset($total)){ echo $total;}else{  echo '0.0';}?></span>
                                   
                                </div>
                                    <div class="app-review-rating-detail mb15 dnone" style="display: none;">
                                <ul class="ratingBar">
                                    <li class="ratingBar__item ratingBar__item--withMarginBottom" data-columns="2">
                                        <span class="ratingBar__name">Quality of service:</span>
                                        <div class="ratingBar__inlineBlock">
                                            <span class="ratingBar__rating">
                                                <span class="ratingBar__ratingForeground" style="width:100%"></span>
                                            </span>
                                            <strong><?php if(isset($quality)){ echo $quality;}else{  echo '0.0';} ?></strong>
                                        </div>
                                    </li>
                                    <li class="ratingBar__item ratingBar__item--withMarginBottom" data-columns="2">
                                        <span class="ratingBar__name">Responsiveness:</span>
                                        <div class="ratingBar__inlineBlock">
                                            <span class="ratingBar__rating">
                                                <span class="ratingBar__ratingForeground" style="width:100%"></span>
                                            </span>
                                            <strong><?php if(isset($response)){ echo $response;}else{  echo '0.0';} ?></strong>
                                        </div>
                                    </li>
                                    <li class="ratingBar__item ratingBar__item--withMarginBottom" data-columns="2">
                                        <span class="ratingBar__name">Value:</span>
                                        <div class="ratingBar__inlineBlock">
                                            <span class="ratingBar__rating">
                                                <span class="ratingBar__ratingForeground" style="width:100%"></span>
                                            </span>
                                            <strong><?php if(isset($value)){ echo $value;}else{  echo '0.0';} ?></strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <blockquote>
                                 <p class="storefrontReview__title"><?php if(isset($title)){echo $title;}else{ echo '';}?></p>
                                 <p class="storefrontReview__description"> <?php if(isset($desc)){echo $desc;}else{ echo '';}?></p>
                                   <small class="storefrontReview__sentDate">Sent on <?php echo $date;?></small>
                            </blockquote>
                         </div>
                    </li>
                <?php }
                }
                else{
                    echo "<h2 align='center'> No Reviews Available.</h2>";
                }
                ?>
                </ul>
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
    </div><!---End  pure-g-->
</div><!---End Wrapper-->
<div id="app-carousel-reviews" class="dnone"></div>
<div class="app-custom-dimension" data-name="dimension16" data-value="140561"></div>
<?php include 'footer.php';?>