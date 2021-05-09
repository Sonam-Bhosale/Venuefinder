<?php include('include/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>VenueFinder | Satara Venue</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" charset="UTF-8" src="Style/js1/util.js.download"></script></head>
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
<div id="app-vendors-directory-heading">
    <div class="directory-heading" style="background-image: url(https://cdn1.weddingwire.in/assets/img/directory/headings/bg_directory-hero-banquet-halls.jpg)">
            <div class="directory-heading-content">
                <div class="wrapper pb0">
                        <h1 class="directory-title testing-directory-title">VenueFinder</h1>

                        <p class="directory-heading-desc" data-id_key="44-1-sector"><b></b> Check prices, menus, availability, request quotes and more to plan your perfect wedding functions: ceremony, sangeet, reception and everything else!</p>
                </div>
            </div>
            <div class="directory-heading-search-content">
                <div class="wrapper">
                    <!-- APP_SEARCH_VAR -->
                <div class="directory-hero-search">
                    <div class="directory-search-content ">
                        <form id="app-frm-search" class="pure-u app-vendors-search-form" name="frmSearch" method="post" action="search.php">
                            <div class="directory-search-input">
                                <i class="svgIcon svgIcon__search directory-search-input-icon"><svg viewBox="0 0 74 77"><path d="M49.35 48.835l23.262 23.328a2.316 2.316 0 11-3.28 3.27L45.865 51.901a28.534 28.534 0 01-17.13 5.683C12.867 57.584.014 44.7.014 28.8.014 12.896 12.865.015 28.735.015 44.593.015 57.446 12.9 57.446 28.8a28.728 28.728 0 01-8.097 20.035zM52.813 28.8c0-13.345-10.782-24.153-24.079-24.153-13.31 0-24.089 10.805-24.089 24.153 0 13.344 10.782 24.152 24.09 24.152 13.294 0 24.078-10.811 24.078-24.152z" fill-rule="nonzero"/></svg></i>           
                                <input id="venue" class="" name="venue" type="search" value="" placeholder="Eg.Vitthal Mangalam" />
                            </div>
                            <div class="directory-search-input">
                                <span class="directory-search-input-where">in</span>
                                <input id="txtLocSearch" class="" name="txtLocSearch" autocomplete="off" type="search" value="Satara" readonly />
                            </div>
                            <input class="btn-outline outline-red" id="mainSearchBtn" name="Find" title="Find" value="Find" type="submit" />
                        </form>
                    </div>
                </div>
               <!-- /APP_SEARCH_VAR -->
                </div>
            </div>
        </div>
    </div>

<div id="app-vendors-directory-heading-navigation" style="background-color:cyan">
    <div id="app-vendors-directory-navigation" class="directory-results-bar">
        <div class="wrapper">
        <?php 
            $sql="select *,count(tv.venue_id) as count from tbl_venue tv,tbl_vendor td where tv.city='satara' and td.vendor_id=tv.vendor_id and td.status='Active'";
                $result=$connect->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $id=$row['venue_id'];
                        $count=$row['count'];
                    }
                }
        ?>
            <div class="pure-g va-flex-end">
                <div class="pure-u-4-6">
                    <div class="directory-filtered">
                    <span class="directory-results-bar-results"><?php echo $count;?> results:</span>
                        <ul class="directorySearch">
                            <li class="directorySearch__tag app-directory-filters-change" data-filters-remove="id_sector[],faqs[],popularPriceRange[],capacityRange" data-value="3">
                                            <span class="directorySearch__label">Venue List</span>
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
                                <a href="list_view.php"><span class="directory-list-mode " title="Show list on map">
                                    <i class="svgIcon svgIcon__list vendors-list-view-icon"><svg viewBox="0 0 32 18"><path d="M.985 2V0h30.032v2H.985zm0 8V8h30.032v2H.985zm0 8v-2H25.02v2H.985z" fill-rule="nonzero"></path></svg></i>                                
                                    List      </span></a>
                            </li>
                            <li class="app-directory-filters-change-mode" data-showmode="thumb">
                            <a href="image_view.php"><span class="directory-imagetag-filters-mode active" title="Show grid with photo">
                                    <i class="svgIcon svgIcon__squares vendors-list-view-icon"><svg viewBox="0 0 32 32"><path d="M2 20v10h10V20H2zm12-2v14H0V18h14zm6-16v10h10V2H20zm12-2v14H18V0h14zM2 2v10h10V2H2zm12-2v14H0V0h14zm6 20v10h10V20H20zm12-2v14H18V18h14z" fill-rule="nonzero"></path></svg></i>     Images           </span></a>
                            </li>                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="directory-structure clearfix">
        <div id="app-vendors-directory-result-list" class="directory-structure-content" style="opacity: 1;">
          <div class="app-ec-list directory-list gtm-impression-list" data-ec-list="standard" >
            <div class="directory-list-images pure-g-r row">
            <?php 
                         $sql="select *,tv.venue_id as vid from tbl_venue tv,tbl_vendor td,venue_plan vp where tv.city='satara'  and td.vendor_id=tv.vendor_id and td.status='Active' and vp.venue_id=td.vendor_id and vp.status='Active' order by rand()";
                        $result=$connect->query($sql);
                            if ($result->num_rows > 0) 
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $id=$row['vendor_id'];
                                    $name=$row['venue_name'];
                                    $amount=$row['booking_amt'];                            
                                    $address=$row['venue_address'];
                                    $vid=$row['vid'];
                ?> 
                <div id="esl_269723" class="pure-u-1-3 app-ec-item app-vendors-item app-vpromo   appVendorGalleryMedium_16 " >
                    <div class="directory-img-item directory-img-item--box">
                        <div class="vendor-slider relative">
                            <div class="app-vendors-sliderMedium"></div>
                            <div class="vendor-slider-content img-zoom">
                                <div class="listing-caption"></div>                                                                   
                                <img class="app_lnkEsc_10990 app-link pointer"  src="controller/uploads/logo/<?php echo $row['logo']; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>"  style="cursor: pointer;">
                             </div>
                        </div>

                        <div class="directory-img-item__wrapper">
                            <div class="directory-img-item__content">
                                <div class="directory-img-item-top">
                                    <a id="app_lnkEmp_7901" class="directory-img-item-name app_lnkEsc_10990" href="viewvenue.php?id=<?php echo $row['user_id'];?>" >  <?php echo $row['venue_name']; ?>            </a>
                                    <div class="directory-img-item-location">
                                        <span><?php echo $address;?> , Satara</span>
                                    </div>
                                </div>
                                <p class="directory-img-item__description">
                                  <?php echo $name;?> is a venue located in Satara which is situated in<span class="app-common-ellipsis">...</span>                </p>
                                <div class="directory-img-item__info">
                                    <div class="directory-img-item__feature">
                                        <span class="directory-img-item__featureTitle">Booking Amount </span>
                                        <span> ₹<?php echo $amount;?>  </span>
                                    </div>
                                    <div class="directory-img-item__feature">
                                        <span class="directory-img-item__featureTitle">Seating Capacity</span>
                                                <i class="svgIcon svgIcon__guests listItem__featuresIcon">
                                                    <svg viewBox="0 0 32 32" width="16" height="16">
                                                        <use xlink:href="#svg-_common-guests"></use>
                                                    </svg>
                                                </i>       <?php if(isset($capacity))
                                                            {
                                                                echo '50 to '.$capacity; 
                                                            }else{
                                                                echo '50 to above';
                                                            }  ?>   
                                      </div>
                                 </div>
                            </div>
                            <form action="controller/process_services.php" method="post"><input type="hidden" name='id' value="<?php echo $row['vendor_id'];?>">
                                                    <input type="hidden" name='vid' value="<?php echo $vid;?>">
                                                    <input type="submit"  name="btngetmore"  value='Get More' class="app-show-lead-layer app-profile-lead-btn app-track-profile-links app-ua-track-event storefront-header-btn btn btn-primary">
                                                    </form>
                                    
                        </div>
                                                       
                    </div>
                   
                </div>
                <?php } } 
                ?> 
            </div>
           
        </div>
    </div>

<div id="app-vendors-directory-filters" class="directory-structure-aside aside" style="opacity: 1;">
    <div class="directory-box-filters" id="app-vendors-search-filters" >
        <div class="vendorsFilters app-vendors-search-filters-container app-vendors-search-filters">
                        <div class="app-vendors-search-filters">
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
											Min Value:<input type="" class="pure-u-1" placeholder="Minimum Value" id="min" name="min_price"
												value="">
											<div id="slider-range"></div>
											Max Value:<input type="" class="pure-u-1" placeholder="Maximum Value" id="max" name="max_price"
												value="">
										
											<input type="submit" name="submit_range"
												value="Filter Venue" style="background-color:blue" class="btn-flat red mt10 pure-u-1">
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
											<input type="submit" name="submit_capacity" value="Search" style="background-color:pink" class="btn-flat red mt10 pure-u-1">
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

<div class="app-footer">
    <?php include 'footer.php';?>     
</div>
