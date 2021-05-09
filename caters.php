
<?php include('include/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>VenueFinder - User</title>
<link rel="stylesheet" href="Style/css/base.css">
<link rel="stylesheet" href="Style/css/vendors.css">
<link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png">
<script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
<script src="Style/js1/identity.js.download" async=""></script>
<script async="" src="Style/js1/fbevents.js.download"></script>
<script async="" defer="" src="Style/js1/beacon.js.download"></script>
<script async="" src="Style/js1/analytics.js.download"></script>
<script src="Style/js1/js-nossl-sf-sui-20200409-02IN136-1_www_m_-common.js.download"></script>
<script src="Style/js1/jquery.jscrollpane.min.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="Style/js1/common.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="Style/js1/util.js.download"></script></head>          
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="APP_WHATSAPP_BODY_CLASSES_TRACES app-page-catalog-list listener-vendors-list app-vendors-catalog-trace">
    
<div class="menu-top">
        <div class="menu-top-wrapper">
         <a class="menu-top-access" rel="nofollow" href="venue.php">
            <i class="svgIcon svgIcon__briefcase ">
                <svg viewBox="0 0 48 41">
                    <path d="M44.3 27.917h.933V13.925c0-1.46-1.199-2.86-3.057-3.625H5.825c-1.859.766-3.058 2.164-3.058 3.625v13.992h14.866V24.39a1 1 0 011-1h10.734a1 1 0 011 1v3.527H44.3zm-2.133 2h-11.8v.51a1 1 0 01-1 1H18.633a1 1 0 01-1-1v-.51h-11.8v8.564h36.334v-8.564zM14.567 8.3v-.51c0-3.797 2.855-7.035 6.533-7.035h5.8c3.68 0 6.533 3.236 6.533 7.036V8.3h8.935a1 1 0 01.358.066c2.655 1.02 4.507 3.115 4.507 5.559v14.992a1 1 0 01-1 1h-2.066v9.564a1 1 0 01-1 1H4.833a1 1 0 01-1-1v-9.564H1.767a1 1 0 01-1-1V13.925c0-2.445 1.852-4.54 4.509-5.559a1 1 0 01.358-.066h8.933zm13.8 21.126V25.39h-8.734v4.036h8.734zm3.066-21.635c0-2.747-2.018-5.036-4.533-5.036h-5.8c-2.513 0-4.533 2.29-4.533 5.036V8.3h14.866v-.51z" fill-rule="nonzero"/>
                </svg>
            </i>ARE YOU A VENDOR?</a>
        </div>
    </div>
    <div id="menu" class="menu app-menu" style="background-image:url('Style/images/head.jpg')">
    <div class="menu-wrapper">
        <div class="menu-wrapper-align">
            <div class="pure-g-r">
                <div class="pure-u-1-5 main-logo">
                   <a href="index.php"  title="venuefinder logo" class="headerEmp__logo"><img  class="pr5" src="Style/logo1.png" width="150" height="150"></a>
                </div>

                <div class="pure-u-4-5">
                    <div class="app-common-header-container" id="nav-main" role="navigation"> </div>                              
                    <div class="header-join"> 
                              <ul class="nav-main">
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="index.php"><i class="fa fa-home" style="color:blue; font-size:18px"></i> Home</a> </li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="satara.php" style="color:red"><i class="fa fa-map-marker" style="color:blue; font-size:18px"></i> Browse Venue</a></li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="contact.php"><i class="fa fa-phone" style="color:blue; font-size:18px"></i> Contact Us</a></li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="about.php"><i class="fa fa-info-circle" style="color:blue; font-size:18px"></i> About</a></li>
                            <?php
                            if(isset($_SESSION['User_Name']))
                            {
                                if(( time() -  $_SESSION['last_login_time']) >900)
                                {
                                    header("location:controller/logout.php");
                                    echo "<script>window.location.href='controller/logout.php';</script>";
                                }
                                else{
                                    $_SESSION['last_login_time']=time();
                               
                                ?>  <a class="header-join-link testing-nav-login" href="profile.php"><i class="fa fa-user" style="color:blue; font-size:18px"></i><?php echo $_SESSION['User_Name']; ?></a>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="controller/logout.php"><i class="fa fa-power-off" style="color:blue; font-size:18px"></i>Logout</a> </li>
                            <?php  } }
                            else
                            { ?>
                            <a class="header-join-link testing-nav-login" href="login.php"><i class="fa fa-sign-in" style="color:blue; font-size:18px"></i> Log In</a>
                            <a class="header-join-link testing-nav-join app-ua-track-event" href="register_user.php"> <i class="fa fa-user-plus" style="color:blue; font-size:18px"></i>Sign up</a>
                    <?php } ?>   
                     </ul></div>
                </div>
            </div>
        </div>
    </div>    
</div>
    <div id="app-vendors-directory-heading-navigation" >
    <div id="app-vendors-directory-navigation"  class="directory-results-bar">
        <div class="wrapper">
     
            <div class="pure-g va-flex-end">
                <div class="pure-u-4-6">
                    <div class="directory-filtered">
                    <span class="directory-results-bar-results"><?php echo '2';?> results:</span>
                        <ul class="directorySearch">
                            <li class="directorySearch__tag app-directory-filters-change" data-filters-remove="id_sector[],faqs[],popularPriceRange[],capacityRange" data-value="3">
                                            <span class="directorySearch__label">Caterers Planner List</span>
                                            <i class="svgIcon svgIcon__close directorySearch__close">
                                                <svg viewBox="0 0 32 32" width="16" height="16">
                                                    <use xlink:href="#svg-_common-close"></use>
                                                </svg>
                                            </i>                                    
                                    </li>                                                           
                             </ul>
                        </div>
                </div>
                <div class="pure-u-2-6 text-right">
                    <div id="vendors-list-view">
                        <ul class="directory-view-mode">
                        <li class="app-directory-filters-change-mode" data-showmode="listado">
                                <a href="decoration.php"><span class="directory-list-mode " title="Show list on map">
                                    Decoration      </span></a>
                            </li>
                            <li class="app-directory-filters-change-mode" data-showmode="listado">
                                <a href="sound.php"><span class="directory-list-mode " title="Show list on map">
                                    Sound      </span></a>
                            </li>
                                                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="wrapper" >
    <div class="directory-structure clearfix">
        <div id="app-vendors-directory-result-list" class="directory-structure-content">
            <div class="directory-list">
                <div class="app-ec-list app-internal-tracking-page gtm-impression-list" data-it-page="1" data-ec-list="standard" data-list-type="Catalog" data-list-sub-type="Standard Directory">
                       
                     <div id="esl_274911" data-track-l="s-list"  class="pure-g-r directory-list-item listItem app-catalog-list-vendor app-internal-tracking-item   app-ec-item app-vendors-item    appGallery_39"   data-image-1='marriage-garden-red-k-velvet-blossom-hall-20_15_274911-158261095426864.jpg'  data-image-2='marriage-garden-red-k-velvet-blossom-hall-21_15_274911-158261096236579.jpg'  data-image-3='marriage-garden-red-k-velvet-blossom-hall-22_15_274911-158261096864591.jpg'>
                            <div class="pure-u-1-3">
                                    <div class="vendor-slider">
                                        <div class="vendor-slider-content img-zoom">                                                 
                                            <img class="app_lnkEsc_267003  pointer"src="controller/uploads/logo/somnath.jpg" width='300px' height="50px" >
                                        </div>
                                    </div>
                            </div>
                            <div class="pure-u-2-3">
                                <div class="directory-item-content">
                                    <a id="app_lnkEmp_274911" class="item-title app-ec-click app_lnkEsc_267003" ><?php echo 'Somnath Caterers'; ?></a>
                                
                                    <div class="item-subtitle">
                                                        <span><?php echo 'Krishna Nagar, Krishnanagar, Satara - 415003'; ?></span>
                                    </div>
                                    <p class="item-desc">
                                     <?php 
                                            echo 'Somnath Caterers in Satara is one of the leading businesses in the Caterers. Also known for Caterers, Caterers (Upto 50 Persons), Caterers (Upto 100 Persons), Caterers (Upto 1000 Persons), Caterers (Upto 500 Persons), Caterers (Upto 150 Persons), Caterers For Wedding, Caterers (Upto 200 Persons) and much more <span>...</span>  ';
                                        ?>     
                                </p>
                                    <div class="listItem">
                                        <div class="listItem__features">                
                                                <div class="listItem__featuresUnit">
                                                    <span class="listItem__featuresName">Phone Number</span>
                                                    <i class='fa fa-phone'>
                                                            </i><?php echo '+91-9152332327';?>
                                                </div>
                                                <div class="listItem__featuresUnit"></div>  <div class="listItem__featuresUnit"></div>
                                                
                                               
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div id="esl_274911" data-track-l="s-list"  class="pure-g-r directory-list-item listItem app-catalog-list-vendor app-internal-tracking-item   app-ec-item app-vendors-item    appGallery_39"   data-image-1='marriage-garden-red-k-velvet-blossom-hall-20_15_274911-158261095426864.jpg'  data-image-2='marriage-garden-red-k-velvet-blossom-hall-21_15_274911-158261096236579.jpg'  data-image-3='marriage-garden-red-k-velvet-blossom-hall-22_15_274911-158261096864591.jpg'>
                            <div class="pure-u-1-3">
                                    <div class="vendor-slider">
                                        <div class="vendor-slider-content img-zoom">                                                 
                                            <img class="app_lnkEsc_267003  pointer"src="controller/uploads/logo/tiranga.jpg" width='280px' height="50px" >
                                        </div>
                                    </div>
                            </div>
                            <div class="pure-u-2-3">
                                <div class="directory-item-content">
                                    <a id="app_lnkEmp_274911" class="item-title app-ec-click app_lnkEsc_267003" ><?php echo 'Tiranga Caterers Kashil'; ?></a>
                                
                                    <div class="item-subtitle">
                                                        <span><?php echo 'NH 4 Service Road, Kashil, Satara - 415519, Near Sahyadri Sugar Office'; ?></span>
                                    </div>
                                    <p class="item-desc">
                                    <?php 
                                            echo 'Somnath Caterers in Satara is one of the leading businesses in the Caterers. Also known for Caterers, Caterers (Upto 50 Persons), Caterers (Upto 100 Persons), Caterers (Upto 1000 Persons), Caterers (Upto 500 Persons), Caterers (Upto 150 Persons), Caterers For Wedding, Caterers (Upto 200 Persons) and much more <span>...</span>  ';
                                        ?> 
                                </p>
                                    <div class="listItem">
                                        <div class="listItem__features">                
                                                <div class="listItem__featuresUnit">
                                                <span class="listItem__featuresName">Phone Number</span>
                                                    <i class='fa fa-phone'>
                                                            </i><?php echo '+91-9152380216';?>
                                                    
                                                </div>
                                            
                                                <div class="listItem__featuresUnit"></div>  <div class="listItem__featuresUnit"></div>
                                             </div>
                                       
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>                   
            </div>
        </div>

<div id="app-vendors-directory-filters" class="directory-structure-aside aside" style="opacity: 1;">
    <div class="directory-box-filters" id="app-vendors-search-filters" >
        <div class="vendorsFilters app-vendors-search-filters-container app-vendors-search-filters">
                        <div class="app-vendors-search-filters" >
						<form name="frmSearchFilters" method="post"  class="app-contact-form mt40 pure-form" action="controller/process_services.php">
                            <div class="vendorsFilters__section">
                                <div class="app-filter-vendors">
                                        <div id="app-filter-service" class="app-toggle-navigators app-toggle-box">
                                            <div class="vendorsFilters__title" style="color:blue">Check Availability</div>
                                                    <i class="svgIcon svgIcon__angleDown vendorsFilters__toggleUp">
                                                <svg viewBox="0 0 32 32" width="16" height="16">
                                                    <use xlink:href="#svg-_common-angleDown"></use>
                                                </svg>
                                            </i>                    
                                        </div>
                                        <!-- <div data-name="sector" data-input="id_sector"> -->
                                                        <select id="venue" name="venue" class="pure-u-1" required>
                                                            <option value="" >----Select Venue----</option>
                                                            <?php
                                                                $sql="SELECT * FROM tbl_venue tv,tbl_vendor td,venue_plan vp where vp.venue_id=td.vendor_id and vp.status='Active' and tv.city='Satara' and td.vendor_id=tv.vendor_id and td.status='Active'  ";
                                                                $result=mysqli_query($connect,$sql);
                                                                while($row=mysqli_fetch_array($result)) { ?>
                                                                <option value="<?php echo $row['venue_id'];?>">
                                                                    <?php echo $row['venue_name'];?>
                                                                </option>  
                                                            <?php }    ?>
                                                        </select>         
                                                        <select id="session" name="session" class="pure-u-1" required>
                                                            <option value="" >----Time Slot----</option>
                                                            <option value="morning">Morning Session</option>
                                                            <option value="fullday">Full Day</option>
                                                            <option value="evening">Evening Session</option>
                                                        </select>           
                                                          <input type="date" class="pure-u-1"  id="date" name="book_date" required>
                                                           <input type="submit"  class="btn-flat red mt10 pure-u-1" name="available" value="Check">
                                        <!-- </div> -->
                                </div>
                            </div>
							</form>
							<!----search by price--->
							 <form method="post" action="searchprice.php">
							 <div class="vendorsFilters__section">
                                <div class="app-filter-vendors">
                                        <div id="app-filter-service" class="app-toggle-navigators app-toggle-box">
                                            <div class="vendorsFilters__title"  style="color:blue">Search By Price</div>
                                                    <i class="svgIcon svgIcon__angleDown vendorsFilters__toggleUp">
                                                <svg viewBox="0 0 32 32" width="16" height="16">
                                                    <use xlink:href="#svg-_common-angleDown"></use>
                                                </svg>
                                            </i>                    
                                        </div>
                                        <!-- <div data-name="sector" data-input="id_sector"> -->
										 <div>
											Min Value:<input type="" class="pure-u-1" placeholder="Minimum Value" id="min" name="min_price" value="">
											<div id="slider-range"></div>
											Max Value:<input type="" class="pure-u-1" placeholder="Maximum Value" id="max" name="max_price" value="">
											<input type="submit" name="submit_range" value="Filter Venue" style="background-color:blue" class="btn-flat red mt10 pure-u-1">
										</div>
										<!-- </div> -->
                                </div>
                            </div>
							</form>
                            <!---End---->
                            
                            <!----search by price--->
							 <form method="post" action="searchcapacity.php">
							 <div class="vendorsFilters__section">
                                <div class="app-filter-vendors">
                                        <div id="app-filter-service" class="app-toggle-navigators app-toggle-box">
                                            <div class="vendorsFilters__title"  style="color:blue">Search By Capacity</div>
                                                    <i class="svgIcon svgIcon__angleDown vendorsFilters__toggleUp">
                                                <svg viewBox="0 0 32 32" width="16" height="16">
                                                    <use xlink:href="#svg-_common-angleDown"></use>
                                                </svg>
                                            </i>                    
                                        </div>
                                        <!-- <div data-name="sector" data-input="id_sector"> -->
										 <div>
											Capacity :<input type="text" class="pure-u-1" placeholder="Seating Capacity" name="capacity" value="">
											<div id="slider-range"></div>	
											<input type="submit" name="submit_capacity" value="Search" style="background-color:brown" class="btn-flat red mt10 pure-u-1">
										</div>
										<!-- </div> -->
                                </div>
                            </div>
							</form>
							<!---End---->
                        </div>
                    
                </div>
            </div>              
          </div>
    </div>
</div>
<BR>
<div class="app-footer">
    <?php include 'footer.php';?>     
</div>