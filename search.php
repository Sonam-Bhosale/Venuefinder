<?php
include('include/db_connect.php');
if(isset($_POST['Find']))
    {
        $search=$_POST['venue']; 
        $sql="select * from tbl_vendor td,tbl_venue tv,venue_plan vp where tv.venue_name like '%".$search."%'  and td.vendor_id=tv.vendor_id and td.status='Active' and vp.status='Active' and td.vendor_id=vp.venue_id ";
        $result=$connect->query($sql);
        $row_count=mysqli_num_rows($result);        
    }
    ?>
    
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>VenueFinder | Search Venue</title>
    <link rel="alternate" href="android-app://in.co.weddings.launcher/weddingscoin/m.weddingwire.in/busc.php?id_grupo=&amp;id_sector=&amp;id_region=&amp;id_provincia=10010765&amp;id_poblacion=&amp;id_geozona=&amp;id_empresa=&amp;distance=&amp;lat=&amp;long=&amp;showmode=&amp;NumPage=1&amp;userSearch=1&amp;isSearch=1&amp;isHome=1&amp;txtStrSearch=vineet+&amp;txtLocSearch=Pune">

    <link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png">
    <link rel="stylesheet" href="Style/css/base.css">
    <link rel="stylesheet" href="Style/css/vendors.css">
    <script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
    <script src="Style/js1/identity.js.download" async=""></script>
    <script async="" src="Style/js1/fbevents.js.download"></script>
    <script async="" defer="" src="Style/js1/beacon.js.download"></script>
    <script async="" src="Style/js1/analytics.js.download"></script><script src="Style/js1/js-nossl-sf-sui-20200401-05IN135-1_www_m_-common.js.download"></script>
    <script src="Style/js1/jquery.jscrollpane.min.js.download"></script>
</head>
<body class="APP_WHATSAPP_BODY_CLASSES_TRACES app-page-catalog-list listener-vendors-list app-vendors-catalog-trace">
        <div class="menu-top">
        <div class="menu-top-wrapper">
            <a class="menu-top-access" rel="nofollow" href="venue.php"><i class="svgIcon svgIcon__briefcase ">
                <svg viewBox="0 0 48 41"><path d="M44.3 27.917h.933V13.925c0-1.46-1.199-2.86-3.057-3.625H5.825c-1.859.766-3.058 2.164-3.058 3.625v13.992h14.866V24.39a1 1 0 011-1h10.734a1 1 0 011 1v3.527H44.3zm-2.133 2h-11.8v.51a1 1 0 01-1 1H18.633a1 1 0 01-1-1v-.51h-11.8v8.564h36.334v-8.564zM14.567 8.3v-.51c0-3.797 2.855-7.035 6.533-7.035h5.8c3.68 0 6.533 3.236 6.533 7.036V8.3h8.935a1 1 0 01.358.066c2.655 1.02 4.507 3.115 4.507 5.559v14.992a1 1 0 01-1 1h-2.066v9.564a1 1 0 01-1 1H4.833a1 1 0 01-1-1v-9.564H1.767a1 1 0 01-1-1V13.925c0-2.445 1.852-4.54 4.509-5.559a1 1 0 01.358-.066h8.933zm13.8 21.126V25.39h-8.734v4.036h8.734zm3.066-21.635c0-2.747-2.018-5.036-4.533-5.036h-5.8c-2.513 0-4.533 2.29-4.533 5.036V8.3h14.866v-.51z" fill-rule="nonzero"></path>
            </svg></i>     ARE YOU A VENDOR?                </a>
         </div>
    </div>
    <div id="menu" class="menu app-menu">
    <div class="menu-wrapper">
        <div class="menu-wrapper-align">
            <div class="pure-g-r">
                <div class="pure-u-1-5 main-logo">
                   <a href="index.php"><img src="Style/logo1.png" height="300" width="200"></a>
                </div>

                <div class="pure-u-4-5">
                        <div class="app-common-header-container" id="nav-main" role="navigation">
                         </div>                              
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
                     </ul></di
                </div>
            </div>
        </div>
    </div>
    
</div>

    <div class="breadcrumb-box">
        <div class="wrapper">
            <div class="breadcrumb-container">
                <div id="app-vendors-directory-breadcrumb" class="overflow">
                    <ul class="breadcrumb"><li>Your Search</li><li>Venue <?php echo $search;?></li><li><span> Satara</span></li></ul>            
                </div>
                                
            </div>
        </div>
    </div>

    <div id="app-vendors-directory-heading">
        <div class="directory-heading" style="background-image: url(https://cdn1.weddingwire.in/assets/img/directory/headings/bg_directory-hero.jpg)">
            <div class="directory-heading-content">
                <div class="wrapper pb0">
                    <h1 class="directory-title testing-directory-title"><?php echo $search.' Satara';?></h1>
                </div>
            </div>
            <div class="directory-heading-search-content">
                <div class="wrapper">
                    <!-- APP_SEARCH_VAR -->
                    <div class="directory-hero-search">
                        <div class="directory-search-content ">
                        <form class="heroVendorForm index-busc-form app-vendors-search-form" name="frmSearch" method="post" action="search.php">
          
                                <div class="directory-search-input">
                                    <i class="svgIcon svgIcon__search directory-search-input-icon"><svg viewBox="0 0 74 77"><path d="M49.35 48.835l23.262 23.328a2.316 2.316 0 11-3.28 3.27L45.865 51.901a28.534 28.534 0 01-17.13 5.683C12.867 57.584.014 44.7.014 28.8.014 12.896 12.865.015 28.735.015 44.593.015 57.446 12.9 57.446 28.8a28.728 28.728 0 01-8.097 20.035zM52.813 28.8c0-13.345-10.782-24.153-24.079-24.153-13.31 0-24.089 10.805-24.089 24.153 0 13.344 10.782 24.152 24.09 24.152 13.294 0 24.078-10.811 24.078-24.152z" fill-rule="nonzero"></path></svg></i>  
                                      <input id="name" name="venue" type="text" value="<?php if(isset($search)){echo $search;}?>" class="directory-search-input-first search-filled" autocomplete="off" type="search" size="30"aria-label="Search for" placeholder="Eg.Vitthal Mangalam" data-explain="Search for"/>
                                      <span id="app-search-text-reset" class="directory-hero-search-clear ">
                                        <i class="svgIcon svgIcon__close "><svg viewBox="0 0 26 26"><path d="M12.983 10.862L23.405.439l2.122 2.122-10.423 10.422 10.423 10.422-2.122 2.122-10.422-10.423L2.561 25.527.439 23.405l10.423-10.422L.439 2.561 2.561.439l10.422 10.423z" fill-rule="nonzero"></path></svg></i>                </span>
                                </div>
                                <div class="directory-search-input">
                                    <span class="directory-search-input-where">in</span>
                                    <input id="txtLocSearch" class="search-filled" name="txtLocSearch" autocomplete="off" type="search" value="Satara" Readonly data-placeholder="(E.g. Pune)" data-explain="Where" data-value="Pune" placeholder="(E.g. Pune)">
                                    <span id="app-search-loc-reset" class="directory-hero-search-clear ">
                                        <i class="svgIcon svgIcon__close "><svg viewBox="0 0 26 26"><path d="M12.983 10.862L23.405.439l2.122 2.122-10.423 10.422 10.423 10.422-2.122 2.122-10.422-10.423L2.561 25.527.439 23.405l10.423-10.422L.439 2.561 2.561.439l10.422 10.423z" fill-rule="nonzero"></path></svg></i>                </span>
                                </div>
                                <input class="btn-outline outline-red" id="mainSearchBtn" title="Find" value="Find" name="Find" type="submit">
                            </form>
                        </div>
                    </div>
                    <!-- /APP_SEARCH_VAR -->
                 </div>
            </div>
        </div>
    </div>


    <div id="app-vendors-directory-heading-navigation">
        <div id="app-vendors-directory-navigation" class="directory-results-bar">
            <div class="wrapper">
                <div class="pure-g va-flex-end">
                    <div class="pure-u-4-6">
                        <div class="directory-filtered">
                            <span class="directory-results-bar-results">Your search: <?php  if(isset($row_count)){echo $row_count;}else{echo '';}?> vendors</span>
                            <ul class="directorySearch">
                                    <li class="directorySearch__tag app-directory-filters-change" data-filters-remove="txtStrSearch" data-value="">
                                        <span class="directorySearch__label"> <?php echo $search;?> </span>
                                            <i class="svgIcon svgIcon__close directorySearch__close"> <svg viewBox="0 0 32 32" width="16" height="16">
                                                    <use xlink:href="#svg-_common-close"></use>
                                                </svg></i>                          
                                    </li>  
                                    <li class="directorySearch__tag app-directory-filters-change" data-filters-remove="id_provincia,id_poblacion,id_geozona,geoSearch" data-value="10010765">
                                                <span class="directorySearch__label">Satara</span>
                                                <i class="svgIcon svgIcon__close directorySearch__close"> <svg viewBox="0 0 32 32" width="16" height="16">
                                                        <use xlink:href="#svg-_common-close"></use>
                                                    </svg></i>   
                                    </li>
                                </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Start -->
<div class="wrapper">
    <div class="directory-structure clearfix">
        <div id="app-vendors-directory-result-list" class="directory-structure-content">
            <div class="directory-list">
                <div class="app-ec-list app-internal-tracking-page gtm-impression-list" data-it-page="1" data-ec-list="standard" data-list-type="Catalog" data-list-sub-type="Standard Directory">
                    <?php
                     $sql="select *,tv.venue_id as vid from tbl_venue tv,tbl_vendor td,venue_plan vp where tv.venue_name like '%".$search."%' and td.vendor_id=tv.vendor_id and td.status='Active' and vp.venue_id=td.vendor_id and vp.status='Active' order by rand()";
                     $result=$connect->query($sql);
                         if ($result->num_rows > 0) 
                         {
                             while($row = $result->fetch_assoc()) 
                             {
                                 $id=$row['vendor_id'];
                                 $name=$row['venue_name'];
                                 $amount=$row['booking_amt'];                            
                                 $address=$row['venue_address'];
                                 //$capacity=$row['seating_capacity'];
                                 $banner=$row['banner_image'];
                                 $vid=$row['vid'];
                    
                    ?>    <div id="esl_274911" data-track-l="s-list"  class="pure-g-r directory-list-item listItem app-catalog-list-vendor app-internal-tracking-item   app-ec-item app-vendors-item    appGallery_39"   data-image-1='marriage-garden-red-k-velvet-blossom-hall-20_15_274911-158261095426864.jpg'  data-image-2='marriage-garden-red-k-velvet-blossom-hall-21_15_274911-158261096236579.jpg'  data-image-3='marriage-garden-red-k-velvet-blossom-hall-22_15_274911-158261096864591.jpg'>
                    <div class="pure-u-1-3">
                            <div class="vendor-slider">
                                <div class="app-vendors-item-slider"></div>
                                <div class="vendor-slider-content img-zoom">                                                 
                                    <img class="app_lnkEsc_267003  pointer"src=" controller/uploads/banner/<?php echo $banner; ?>" >
                                </div>
                            </div>
                     </div>
                    <div class="pure-u-2-3">
                        <div class="directory-item-content">
                            <a id="app_lnkEmp_274911" class="item-title app-ec-click app_lnkEsc_267003" href="view_venue.php?id=<?php echo $id;?> "><?php echo $name; ?></a>
                           
                            <div class="item-subtitle">
                                                <span><?php echo $row['address']; ?></span>
                            </div>
                            <p class="item-desc">
                                
                            <?php echo $name;?> is a venue located in Satara which is situated in<span class="app-common-ellipsis">...</span>                </p>
                              
                        </p>
                            <div class="listItem">
                                <div class="listItem__features">                
                                        <div class="listItem__featuresUnit">
                                            <span class="listItem__featuresName">Booking Amount</span>
                                            <i class="svgIcon svgIcon__pricing listItem__featuresIcon">
                                                        <svg viewBox="0 0 32 32" width="16" height="16">
                                                            <use xlink:href="#svg-vendors-pricing"></use>
                                                        </svg>
                                                    </i><?php echo $amount;?>
                                        </div>
                                        <div class="listItem__featuresUnit">
                                                <span class="listItem__featuresName">Seating Capacity</span>
                                                <i class="svgIcon svgIcon__guests listItem__featuresIcon">
                                                <svg viewBox="0 0 32 32" width="16" height="16">
                                                    <use xlink:href="#svg-_common-guests"></use>
                                                </svg>
                                                </i> <?php if(isset($capacity))
                                                            {
                                                                echo '50 to '.$capacity; 
                                                            }
                                                            else
                                                            {
                                                                echo '50 to above';
                                                            }
                                                            
                                                            ?>      
                                        </div>
                                        <div class="listItem__featuresUnit"></div>  <div class="listItem__featuresUnit"></div>
                                         
                                        <div class="listItem__featuresUnit">
                                                    <form action="controller/process_services.php" method="post"><input type="hidden" name='id' value="<?php echo $row['vendor_id'];?>">
                                                    <input type="hidden" name='vid' value="<?php echo $vid;?>">
                                                    <input type="submit"  name="btngetmore"  value='Get More' class="app-show-lead-layer app-profile-lead-btn app-track-profile-links app-ua-track-event storefront-header-btn btn btn-primary">
                                                    </form><!-- <a href="viewvenue.php?id=<?php echo $row['user_id'];?>" class="app-show-lead-layer app-profile-lead-btn app-track-profile-links app-ua-track-event storefront-header-btn btn btn-primary">Get More Info</a>  -->
                                                </div>
                                </div>
                                <div class="listItem__button">
                                    <div class="app-vendors-item-solicitar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div><?php } }
                        else { ?>
                            <div class="directory-empty directory-empty-shrink">
                                    <div class="directory-empty-content">
                                        <i class="svgIcon svgIcon__zeroResult "><svg viewBox="0 0 110 82"><g fill-rule="nonzero"><path d="M16.283 64.167A2.287 2.287 0 0114 61.875V9.932C14 4.445 18.428 0 23.894 0h62.395c5.466 0 9.894 4.445 9.894 9.932v51.943a2.287 2.287 0 01-2.283 2.292H73.013c-1.663 5.448-9.182 9.166-17.922 9.166s-16.258-3.718-17.92-9.166H16.282zm22.828-4.584a2.287 2.287 0 012.283 2.292c0 3.452 5.967 6.875 13.697 6.875 7.73 0 13.698-3.423 13.698-6.875a2.287 2.287 0 012.283-2.292h20.545V9.933c0-2.957-2.384-5.35-5.328-5.35H23.894c-2.944 0-5.328 2.393-5.328 5.35v49.65H39.11z"></path><path d="M68.487 61.292A2.287 2.287 0 0170.77 59h36.526c1.485 0 2.575 1.401 2.214 2.848-2.939 11.795-13.494 20.069-25.605 20.069h-58.23c-12.111 0-22.667-8.274-25.606-20.07C-.29 60.402.8 59 2.284 59H38.81a2.287 2.287 0 012.283 2.292c0 3.451 5.967 6.875 13.697 6.875 7.73 0 13.697-3.424 13.697-6.875zM54.79 72.75c-8.74 0-16.26-3.718-17.921-9.167H5.417c3.279 8.214 11.248 13.75 20.257 13.75h58.231c9.01 0 16.979-5.536 20.258-13.75H72.71c-1.662 5.449-9.181 9.167-17.921 9.167zM41 20.292A2.287 2.287 0 0143.283 18a2.287 2.287 0 012.283 2.292v9.166a2.287 2.287 0 01-2.283 2.292A2.287 2.287 0 0141 29.458v-9.166zM64 20.292A2.287 2.287 0 0166.283 18a2.287 2.287 0 012.283 2.292v9.166a2.287 2.287 0 01-2.283 2.292A2.287 2.287 0 0164 29.458v-9.166zM39 46.5a2 2 0 110-4h30.5a2 2 0 110 4H39z"></path></g></svg></i>        <span class="directory-empty-image-text">Oops!</span>
                                        <p class="directory-empty-title">We could not find any venue that match your search.</p>
                                    </div>                        
                                </div>            
                        <?php }        ?>
                </div>
            </div>
        </div>
        
        <div id="app-vendors-directory-filters" class="directory-structure-aside aside">
            <div class="directory-box-filters" id="app-vendors-search-filters" data-url="" data-filters="{&quot;id_region&quot;:&quot;9657&quot;,&quot;id_provincia&quot;:&quot;10010765&quot;,&quot;txtStrSearch&quot;:&quot;vineet&quot;,&quot;_lat&quot;:&quot;18.5204296112&quot;,&quot;_long&quot;:&quot;73.8567428589&quot;}">
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
<!-- End -->
<div class="app-footer">
    <?php include('footer.php');?>
</div>