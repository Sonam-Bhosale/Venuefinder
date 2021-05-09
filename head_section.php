<?php include('include/db_connect.php');
$venue_id=$_GET['vid'];
$vendor_id=$_GET['id'];

$sql="select *,td.email as v_email,vp.status as vp_status from tbl_venue tv,tbl_vendor td,venue_plan vp where td.status='Active' and vp.venue_id='$vendor_id' and vp.status='Active' and  td.vendor_id='$vendor_id' and tv.vendor_id='$vendor_id' and tv.venue_id='$venue_id'"; 
		$result=$connect->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$id=$row['vendor_id'];
                $name=$row['venue_name'];
                $vaddress=$row['address'];
				$address=$row['venue_address'];
				$city='Satara';
				$landline=$row['landline'];				
				$contact=$row['mobile'];
                $email=$row['email'];
                $vendor_email=$row['v_email'];
                $amount=$row['booking_amt'];
                $view=$row['views'];
                $logo=$row['logo'];
                $banner=$row['banner_image'];
               
                $status=$row['vp_status'];
                $plan_id=$row['plan_id'];                  
			}
        }
        $q1="select * from venue_details where venue_id='$vendor_id'"; 
    $result=$connect->query($q1);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $capacity=$row['seating_capacity'];
            $info=$row['venue_info'];
            $chair=$row['chair'];
            $room=$row['room'];
        }
    }
$q1="select * from tbl_about where venue_id='$vendor_id'"; 
    $result=$connect->query($q1);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $website=$row['website'];
            $staff=$row['helpers'];
            $events=$row['events'];
            $open_date=$row['opening_date'];
        }
    }
$q2="select * from tbl_faq where venue_id='$vendor_id'"; 
$result=$connect->query($q2);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $f1=$row['f1'];
        $f2=$row['f2'];
        $f3=$row['f3'];
        $f4=$row['f4'];
        $f5=$row['f5'];
        $f6=$row['f6'];
    }
}
$q3="select *,count(holder_id) as vcount from videos where holder_id='$vendor_id'"; 
$result=$connect->query($q3);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $video_count=$row['vcount'];
    }
}
$q4="select *,count(album_name) as album_count,count(holder_id) as image_count from images where holder_id='$vendor_id'"; 
$result=$connect->query($q4);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $acount=$row['album_count'];
        $icount=$row['image_count'];
    }
}
$q5="select *,count(venue_id) as review_count from rating where venue_id='$venue_id'"; 
$result=$connect->query($q5);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $rcount=$row['review_count'];
    }
}

?>
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $name;?></title>
        <link rel="stylesheet" href="Style/css/destination.css">
        <link rel="stylesheet" href="Style/css/base.css"> 
        <link rel="stylesheet" href="Style/css/base1.css">
        <link rel="stylesheet" href="Style/css/vendors.css">
        
		<!-- Font Awesome CSS -->
        <link href="Style/css/font-awesome.min.css" rel="stylesheet">
	    <link href="Style/css/line-awesome.min.css" rel="stylesheet"> 
        <link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
        <script type="text/javascript" async="" src="Style/js1/f.txt"></script>
        <script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
        <script src="Style/js1/1708661419409134" async=""></script>
        <script async="" src="Style/js1/fbevents.js.download"></script>
        <script async="" defer="" src="Style/js1/beacon.js.download"></script>
        <script async="" src="Style/js1/analytics.js.download"></script>
        <script async="" src="Style/js1/js"></script>           
      <script defer="" src="Style/js1/common.js.download"></script>
        <script defer="" src="Style/js1/WebBundleDesktopVendorsProfile.js.download"></script>
        <!-- <script defer="" src="Style/common.js.download"></script> -->
            <script defer="" src="Style/js1/WebBundleDesktopHome.js.download"></script>            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            
         
    </head>
<body class="pusher-zfix app-slider-vendor-profile-start app-vendor-profile-home-bindings app-profile-enable-fixed-bar app-common-trace-navigation" data-id-empresa="149653" data-sector-tools="1" data-section="profile" data-fixed-bar-id-empresa="149653" data-trace-id-item="149653" data-trace-id-type="1">
<div class="menu-top">
        <div class="menu-top-wrapper">
            <a class="menu-top-access" rel="nofollow" href="venue.php"><i class="svgIcon svgIcon__briefcase ">
                <svg viewBox="0 0 48 41"><path d="M44.3 27.917h.933V13.925c0-1.46-1.199-2.86-3.057-3.625H5.825c-1.859.766-3.058 2.164-3.058 3.625v13.992h14.866V24.39a1 1 0 011-1h10.734a1 1 0 011 1v3.527H44.3zm-2.133 2h-11.8v.51a1 1 0 01-1 1H18.633a1 1 0 01-1-1v-.51h-11.8v8.564h36.334v-8.564zM14.567 8.3v-.51c0-3.797 2.855-7.035 6.533-7.035h5.8c3.68 0 6.533 3.236 6.533 7.036V8.3h8.935a1 1 0 01.358.066c2.655 1.02 4.507 3.115 4.507 5.559v14.992a1 1 0 01-1 1h-2.066v9.564a1 1 0 01-1 1H4.833a1 1 0 01-1-1v-9.564H1.767a1 1 0 01-1-1V13.925c0-2.445 1.852-4.54 4.509-5.559a1 1 0 01.358-.066h8.933zm13.8 21.126V25.39h-8.734v4.036h8.734zm3.066-21.635c0-2.747-2.018-5.036-4.533-5.036h-5.8c-2.513 0-4.533 2.29-4.533 5.036V8.3h14.866v-.51z" fill-rule="nonzero"></path>
            </svg></i>     ARE YOU A VENDOR?                </a>
         </div>
</div>
<div id="menu" class="menu app-menu"style="background-image:url('Style/images/head.jpg')">
    <div class="menu-wrapper">
        <div class="menu-wrapper-align">
            <div class="pure-g-r">
                <div class="pure-u-1-5 main-logo">
                   <!-- <a href="index.php"  title="VenueFinder Logo"><img src="Style/logo1.png" width="200" height="100px"></a> -->
                </div>

                <div class="pure-u-4-5">
                        <div class="app-common-header-container" id="nav-main" role="navigation"></div>                              
                        <div class="header-join"> 
                              <ul class="nav-main">
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="index.php"><i class="fa fa-home" style="color:blue; font-size:18px"></i> Home</a> </li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="satara.php"><i class="fa fa-map-marker" style="color:blue; font-size:18px"></i> Browse Venue</a></li>
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
                               
                                ?>  <a class="header-join-link testing-nav-login" href="profile.php"><i class="fa fa-user" style="color:blue; font-size:18px"></i> <?php echo $_SESSION['User_Name']; ?></a>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="controller/logout.php"><i class="fa fa-power-off" style="color:blue; font-size:18px"></i> Logout</a> </li>
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

<div class="storefrontBar ">
    <div class="wrapper">
        <div class="storefront-bar-breadcrumb breadcrumb-container">
                <a class="app-track-breadcrumb-search storefront-bar-btn storefront-bar-breadcrumb-btn" href="#">
                    <i class="svgIcon svgIcon__angleLeft svgIcon--primary svgIcon--middle"><svg viewBox="0 0 9 16"><path d="M7.906.137a.5.5 0 01.707.707L1.456 8l7.157 7.156a.5.5 0 01-.707.707L.474 8.433a.502.502 0 01-.232-.466v-.019a.498.498 0 01.231-.38L7.906.138z" fill-rule="nonzero"></path></svg></i>                    Your search                </a>
                    <ul class="breadcrumb">
                       
                        <li><a href="#"> Venues</a></li>
                        <li><span><?php echo $name;?></span></li>
                    </ul>                              
         </div>
    </div>
</div>

<a name="ficha"></a>