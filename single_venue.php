<?php $venue_id=$_GET['id'];?>
<?php include 'head_section.php'; ?>

<?php $sql="select * from register_venue where user_id=$venue_id"; 
		$result=$connect->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
?>

<div class="storefrontHeader">
    <div class="wrapper">
        <div class="storefrontHeader__infoContainer">
        
            <div class="storefrontHeader__info">
                 <h1 class="storefrontHeader__title"><?php echo $row['venue_name']; ?></h1>
                  <div class="storefrontHeaderOnepage__address">
                <?php echo $row['address']; ?>                                             
            </div>
            </div>
       
            <div class="storefrontHeader__actions">
                <form action="Controller/book.php?id=<?php echo $venue_id ?>" method="post">
                    <span class="btnOutline btnOutline--grey storefrontHeader__review">
                            
                    <input type="date" class="form control" name="booking_date" value="" required>
                    &nbsp;&nbsp;&nbsp;
                        <button  class="app-show-lead-layer app-profile-lead-btn app-track-profile-links app-ua-track-event storefront-header-btn btn btn-primary"> Book Now</button> 
                        </span>
                </form>
            </div>
        </div>
        <div class="storefrontSummary">
            <div id="lContactEmp">
            <a  id="quotation" class="app-show-lead-layer app-profile-lead-btn app-track-profile-links app-ua-track-event storefront-header-btn btn btn-primary"
            href="quotation.php?id=<?php echo $venue_id ?>" >
                    Request pricing </a>
            </div>
            <div class="storefrontSummary__item">
                        <span class="storefrontSummary__label">
                            Price per plate                                               
                        </span>
                        <i class="svgIcon svgIcon__pricing listItem__featuresIcon">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-vendors-pricing"></use>
                    </svg>
                </i>  ₹1,200                                          
            </div>
            <div class="storefrontSummary__item">
                 <span class="storefrontSummary__label">Number of guests</span>
                     <i class="svgIcon svgIcon__guests listItem__featuresIcon">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-guests"></use>
                    </svg>
                </i>250 to 1500                                                       
            </div>
                    </div>
        <div class="app-dual-calendar dnone" data-year="2020" data-month="3"></div>
    </div>
</div>

<div class="app-profile-top-fixed-bar"></div>
<div class="storefront-container">
    <ul class="storefront-nav wrapper">
        <li class='storefront-nav-tab current app-general-item'>
            <a class='storefront-nav-item icon-vendor app-general-item-link' href='single_venue.php?id=<?php echo $venue_id ?>'  >
            Profile
            </a>
        </li>
        <li class='storefront-nav-tab app-general-item'>
            <a class='storefront-nav-item icon-vendor app-general-item-link' href='faq.php?id=<?php echo $venue_id ?>' >
            FAQs
        </a>
        </li>
        <li class='storefront-nav-tab app-general-item'>
            <a class='storefront-nav-item icon-vendor app-general-item-link' href='photos.php?id=<?php echo $venue_id ?>' >
            Photos
        </a>
        <span class='count storefront-nav-item-count app-general-item-linked'>
            39
        </span>
        </li>
        <li class='storefront-nav-tab app-general-item'>
            <a class='storefront-nav-item icon-vendor app-general-item-link' href='map.php?id=<?php echo $venue_id ?>' >
            Map
        </a>
        </li>
    </ul>
</div>
<center>
<img src="Controller/uploads/<?php echo $row['banner_image']; ?>"alt="hi" height="300" width="1300">
</center>

<div class="wrapper">
    <div class="pure-g">
        <div class="pure-u-3-4">
            <div class="storefront-content">
                <div class="storefront-section app-translation-container" data-order="3">
                    <p class="storefront-title-section">Information about <?php echo $row['venue_name']; ?></p>
                    <?php } } ?>
                    <div class="pure-g">
                        <div class="pure-u-2-3">
                            <div class="storefront__description post">
                                <p>Red K Velvet is a wedding venue located in Delhi.</p>
                                <p><strong>Facilities and Capacity</strong></p>
                                <p>The venue is located on the outskirts of the city</p>
                                <p><strong>Services Offered</strong></p>
                                <p>Red K Velvet provides you with their .</p>                                                                         
                            </div>
                        </div>
                        <div class="pure-u-1-3">
                            <div class="storefrontFaqsBox">
                                    <ul class="storefrontFaqsSummary">
                                            <li id="minifaqs_998" class="storefrontFaqsSummary__item">
                                                <i class="icon-vendor icon-vendor-faq-price storefrontFaqsSummary__icon"></i>
                                                <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                                    <span class="storefrontFaqsSummary__title">Price for menu</span>
                                                    <span>From ₹1,200 to ₹1,800</span>
                                                </div>
                                            </li>
                                            <li id="minifaqs_998" class="storefrontFaqsSummary__item">
                                                <i class="icon-vendor icon-vendor-faq-pax storefrontFaqsSummary__icon"></i>
                                                <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                                    <span class="storefrontFaqsSummary__title">Number of guests</span>
                                                    <span>From 250 to 1500</span>
                                                </div>
                                            </li>
                                            <li id="minifaqs_68" class="storefrontFaqsSummary__item">
                                            <i class="icon-vendor icon-vendor-faq-ceremony storefrontFaqsSummary__icon"></i>
                                            <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                                <span class="storefrontFaqsSummary__title">Spaces</span>
                                                Lawns, poolside 
                                            </div>
                                            <li id="minifaqs_75" class="storefrontFaqsSummary__item">
                                            <i class="icon-vendor icon-vendor-faq-check storefrontFaqsSummary__icon"></i>
                                            <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                                <span class="storefrontFaqsSummary__title">Inclusions</span>
                                                 Basic lighting, electricity & backup, valet parking, furniture, bridal room , service staff                  
                                            </div>
                                             <li id="minifaqs_2432" class="storefrontFaqsSummary__item">
                                            <i class="icon-vendor icon-vendor-faq-location storefrontFaqsSummary__icon"></i>
                                            <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                                <span class="storefrontFaqsSummary__title">Location</span>
                                                Outskirts of the city 
                                            </div>
                                             <li id="minifaqs_2434" class="storefrontFaqsSummary__item">
                                            <i class="icon-vendor icon-vendor-faq-home storefrontFaqsSummary__icon"></i>
                                            <div class="storefrontFaqsSummary__description storefrontFaqsSummary__content">
                                                <span class="storefrontFaqsSummary__title">Accommodation</span>
                                               Available, 9 Rooms 
                                             </div>
                                    </ul>
                                  </div>
                            </div>
                    </div>
                </div>
                  <div class="storefront-section" data-order="4">
                    <p class="storefront-title-section">
                            More information about Red K Velvet by Kawatra, Alipur      
                    </p>
                    <ul class="storefront-faqs">
                        <li class="storefront-faqs__listed border-bottom pure-g">
                            <span class="strong pure-u-4-10 pr10">
                                Do you have more than one event-space at your venue?                   
                            </span>
                            <div class="pure-u-6-10 pure-g">
                                <div class='pure-u'>Yes, 2 Space; White Castle & Blossom<div>
                                </div>              
                        </li>
                         <li class="storefront-faqs__listed border-bottom pure-g">
                                <span class="strong pure-u-4-10 pr10">
                                    What kind of settings are available?         
                                </span>
                            <div class="pure-u-6-10 pure-g">
                                <div class='pure-u-1-2 storefront-faqs__check'>
                                    <i class='svgIcon svgIcon--center'>
                                        <svg viewBox="0 0 76.3 53.6">
                                            <path d="M31.4 53.6L1.9 23.8c-2.6-2.6-2.6-6.5 0-9.1s6.5-2.6 9.1 0l20.4 20.8L65.2 2.1c2.6-2.6 6.5-2.6 9.1 0s2.6 6.5 0 9.1L31.4 53.6z"/>
                                        </svg>
                                    </i>Outcome
                                </div>
                            </div>
                        </li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="pure-u-1-4">
                  
            <form class="app-contact-form mt40 pure-form" action="Controller/credentials.php" method="post">
            <H1>Check Availability</H1>                  
                        <div class="form-group">
                            <label for="venue">Choose The Venue</label>
                            <select id="venue" name="venue" class="pure-u-1">
                                <option value="" required>----Select----</option>
                                <?php
                                    $sql="SELECT * FROM register_venue where ac_type='Owner' ";
                                    $result=mysqli_query($connect,$sql);
                                    while($row=mysqli_fetch_array($result)) { ?>
                                    <option value="<?php echo $row['venue_name'];?>">
                                        <?php echo $row['venue_name'];?>
                                    </option>  
                                <?php }    ?>
						    </select>           
                        </div>
                            <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="pure-u-1"  id="date" name="date" required>
                                </div>
                           <input type="submit"  class="btn-flat red mt10 pure-u-1" name="available" value="Check">
                    </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>