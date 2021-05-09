<?php include 'head_section.php';?>
<!-- Start Venue Display -->
<?php include 'viewinfo.php';?>
<!-- End Venue Display -->
<div class="app-profile-top-fixed-bar"></div>
<div class="storefront-container">
<ul class="storefront-nav wrapper">
        <li class="storefront-nav-tab  app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="viewvenue.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Profile</a></li>
        <li class="storefront-nav-tab current app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="faq.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">FAQs</a></li>
        <li class="storefront-nav-tab  app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="photos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?> ">Photos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php if(isset($icount)){ echo $icount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="videos.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Videos</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($video_count)){ echo $video_count;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="view_review.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Reviews</a><span class="count storefront-nav-item-count app-general-item-linked" style="cursor: pointer;"><?php  if(isset($rcount)){ echo $rcount;}else{echo '';}?></span></li>
        <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="map.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">Map</a></li>
        <!-- <li class="storefront-nav-tab app-general-item"><a class="storefront-nav-item icon-vendor app-general-item-link" href="facility.php?id=<?php echo  $vendor_id;?>&vid=<?php echo $venue_id;?>">More Details</a></li> -->
    </ul>
<div id="contact-emp-layer"></div>
<div class="wrapper" style="background-image:url('Style/images/aa.jpg')">
    <div class="pure-g">
        <div class="pure-u-3-4">
            <div class="storefront-content">
                                <h1 class="storefront-title-section">Information about <?php if(isset($name)){echo $name;}?></h1>
                <div class="storefront-top-faqs">
                    <ul class="storefrontFaqsSummary">
                                    <li id="minifaqs_68" class="storefrontFaqsSummary__item">
                                        <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                            <span class="storefrontFaqsSummary__title">Spaces</span>
                                                    Lawns,terrace
                                        </div>
                                    </li>
                                    <li id="minifaqs_75" class="storefrontFaqsSummary__item">
                                        <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                            <span class="storefrontFaqsSummary__title">Inclusions</span>
                                             Basic lighting, electricity &amp; backup, furniture, bridal room , service staff, sound/music license                    </div>
                                    </li>
                                    <li id="minifaqs_2432" class="storefrontFaqsSummary__item">
                                        <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                            <span class="storefrontFaqsSummary__title">Service Staff</span>
                                            Available,  <?php if(isset($staff)){echo $staff;}else{echo '5';}?> Members 
                                         </div>
                                    </li>
                                    <li id="minifaqs_2432" class="storefrontFaqsSummary__item">
                                        <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                            <span class="storefrontFaqsSummary__title">Events</span>
                                               <?php if(isset($events)){echo $events;}else{echo '-';}?>  
                                         </div>
                                    </li>
                                    <li id="minifaqs_2434" class="storefrontFaqsSummary__item">
                                        <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                            <span class="storefrontFaqsSummary__title">Accommodation</span>
                                                 Available, <?php if(isset($room)){echo $room;}else{echo '5';}?> rooms     
                                       </div>
                                    </li>
                                </ul> 
                </div>
                <div class="storefront-section" data-order="4">
                        <p class="storefront-title-section">More information about <?php echo $name;?> </p>
                         <ul class="storefront-faqs">
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10"> Do you have more than one event-space at your venue?  </span>
                                <div class="pure-u-6-10 pure-g">
                                    <div class="pure-u"> <?php if(isset($f1)){echo $f1;}else{echo 'Yes, we can accommodate 2 events/ parties at a time';}?> <div></div>   
                                    </div>
                                </div>
                            </li>
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10">What is the starting price per plate for vegetarian menu? </span>
                                <div class="pure-u-6-10 pure-g">
                                    <div class="pure-u"><?php if(isset($f2)){echo $f2;}else{echo '₹ 700';}?></div>
                                </div>      
                            </li>
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10">What is the starting price per plate for non-vegetarian menu? </span>
                                <div class="pure-u-6-10 pure-g">
                                    <div class="pure-u"><?php if(isset($f3)){echo $f3;}else{echo '₹ 800';}?></div>
                                </div> 
                            </li>
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10"> Which modes of payment do you accept?    </span>
                                <div class="pure-u-6-10 pure-g">
                                    <div class="pure-u-1-2 storefront-faqs__check"><i class="svgIcon svgIcon--center"><svg viewBox="0 0 76.3 53.6"><path d="M31.4 53.6L1.9 23.8c-2.6-2.6-2.6-6.5 0-9.1s6.5-2.6 9.1 0l20.4 20.8L65.2 2.1c2.6-2.6 6.5-2.6 9.1 0s2.6 6.5 0 9.1L31.4 53.6z"></path></svg></i>
                                    <div>Cash</div></div>
                                    <div class="pure-u-1-2 storefront-faqs__check"><i class="svgIcon svgIcon--center"><svg viewBox="0 0 76.3 53.6"><path d="M31.4 53.6L1.9 23.8c-2.6-2.6-2.6-6.5 0-9.1s6.5-2.6 9.1 0l20.4 20.8L65.2 2.1c2.6-2.6 6.5-2.6 9.1 0s2.6 6.5 0 9.1L31.4 53.6z"></path></svg></i>
                                    <div>Cheque</div></div><div class="pure-u-1-2 storefront-faqs__check"><i class="svgIcon svgIcon--center"><svg viewBox="0 0 76.3 53.6"><path d="M31.4 53.6L1.9 23.8c-2.6-2.6-2.6-6.5 0-9.1s6.5-2.6 9.1 0l20.4 20.8L65.2 2.1c2.6-2.6 6.5-2.6 9.1 0s2.6 6.5 0 9.1L31.4 53.6z"></path></svg></i>
                                    <div>Credit card</div></div><div class="pure-u-1-2 storefront-faqs__check"><i class="svgIcon svgIcon--center"><svg viewBox="0 0 76.3 53.6"><path d="M31.4 53.6L1.9 23.8c-2.6-2.6-2.6-6.5 0-9.1s6.5-2.6 9.1 0l20.4 20.8L65.2 2.1c2.6-2.6 6.5-2.6 9.1 0s2.6 6.5 0 9.1L31.4 53.6z"></path></svg></i>
                                    <div>Debit Card</div></div>
                            </li>
                             <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10"> What is the % payment/ amount to confirm the booking?                    </span>
                                <div class="pure-u-6-10 pure-g">
                                    <div class="pure-u"><?php if(isset($f4)){echo $f4;}else{echo '10%';}?></div>
                                </div>   
                            </li>
                             <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10">What is the advance amount to be paid before the event? </span>
                                <div class="pure-u-6-10 pure-g"><div class="pure-u"><?php if(isset($f5)){echo $f5;}else{echo 'You have to pay 10% of booking amount';}?></div> </div>  
                             </li>
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10">What is the cancellation policy?  </span>
                                <div class="pure-u-6-10 pure-g">Can cancel 3 months prior to the event</div> 
                            </li>
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10"> Do you have any time limit for celebration?    </span>
                                <div class="pure-u-6-10 pure-g"><div class="pure-u"><?php if(isset($f6)){echo ''.$f6;}else{echo 'Yes, 00:00';}?></div> </div>   
                             </li>
                            <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10"> What are the restrictions, if any?</span>
                                <div class="pure-u-6-10 pure-g">According to the event/occasion. Dj allowed till 22:00 hrs</div> 
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="pure-u-1-4">
            <div class="storefront-aside storefront-aside-faqs">                
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
<?php include 'footer.php';?>