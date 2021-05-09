<!DOCTYPE html>
<?php include('include/db_connect.php'); ?>
<html lang="en-IN" prefix="og: http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <title>VenueFinder | Home </title>
			<link href="Style/css/font-awesome.min.css" rel="stylesheet">
			<link href="Style/css/line-awesome.min.css" rel="stylesheet">
			<link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
            <link rel="stylesheet" href="Style/css/base.css">
            <link rel="stylesheet" href="Style/css/migrate.css">            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
            <script async="" defer="" src="Style/js1/beacon.js.download"></script>
            <script defer="" src="Style/common.js.download"></script>
            <script defer="" src="Style/js1/WebBundleDesktopHome.js.download"></script>
            <script async="" src="Style/js1/analytics.js.download"></script><script>
            var internalTrackingService = internalTrackingService || {
                triggerSubmit : function() {},
                triggerAbandon : function() {},
                loaded : false
            };
        </script>
        </head>
        <body class='app-has-ajax-manager homeBody'>
        <div class="menu-top">
        <div class="menu-top-wrapper">
         <a class="menu-top-access" rel="nofollow" href="venue.php">
            <i class="svgIcon svgIcon__briefcase ">
                <svg viewBox="0 0 48 41">
                    <path d="M44.3 27.917h.933V13.925c0-1.46-1.199-2.86-3.057-3.625H5.825c-1.859.766-3.058 2.164-3.058 3.625v13.992h14.866V24.39a1 1 0 011-1h10.734a1 1 0 011 1v3.527H44.3zm-2.133 2h-11.8v.51a1 1 0 01-1 1H18.633a1 1 0 01-1-1v-.51h-11.8v8.564h36.334v-8.564zM14.567 8.3v-.51c0-3.797 2.855-7.035 6.533-7.035h5.8c3.68 0 6.533 3.236 6.533 7.036V8.3h8.935a1 1 0 01.358.066c2.655 1.02 4.507 3.115 4.507 5.559v14.992a1 1 0 01-1 1h-2.066v9.564a1 1 0 01-1 1H4.833a1 1 0 01-1-1v-9.564H1.767a1 1 0 01-1-1V13.925c0-2.445 1.852-4.54 4.509-5.559a1 1 0 01.358-.066h8.933zm13.8 21.126V25.39h-8.734v4.036h8.734zm3.066-21.635c0-2.747-2.018-5.036-4.533-5.036h-5.8c-2.513 0-4.533 2.29-4.533 5.036V8.3h14.866v-.51z" fill-rule="nonzero"/>
                </svg>
            </i>ARE YOU A VENDOR?</a>
        </div>
    </div><br>
<div id="menu" class="menu app-menu" style="background-image:url('Style/images/head.jpg')">
    <div class="menu-wrapper">
        <div class="menu-wrapper-align">
            <div class="pure-g-r">
                <div class="pure-u-1-5 main-logo">
                   <a href="Admin/index.php"  title="VenueFinder Logo" class="headerEmp__logo"><img  class="pr5" src="Style/logo1.png" width="200px" height="100px"></a>
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
   
<div class="homeSlider">
    <div class="homeSlider__container app-main-slider-home swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-wrapper" style="transition-duration: 800ms;"><div class="homeSlider__item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 800ms;">
            <div class="homeSlider__droplayer"></div>
            <img class="homeSlider__itemImg app-main-slider-home-img" src="Style/images/bg_venue1.jpg" alt="">
            <div class="homeSlider__boxTags app-main-slider-home-caption">
              <div class="wrapper">
                <div class="homeSlider__tags app-main-slider-home-related">
                  <p class="mb25"><i class="homeSlider__iconCamera icon icon-camera-small-white"></i></p>
                </div>
              </div>
            </div>
          </div>
            <div class="homeSlider__item swiper-slide swiper-slide-duplicate-next" style="width: 1349px; transition-duration: 800ms; opacity: 1; transform: translate3d(-1349px, 0px, 0px);" data-swiper-slide-index="0">
                <div class="homeSlider__droplayer"></div>
                <img class="homeSlider__itemImg app-main-slider-home-img" src="Style/images/bg_home1.jpg" alt="">
                <div class="homeSlider__boxTags app-main-slider-home-caption">
                    <div class="wrapper">
                        <div class="homeSlider__tags app-main-slider-home-related"><p class="mb25"><i class="homeSlider__iconCamera icon icon-camera-small-white"></i></p></div>
                    </div>
                </div>
            </div>
        <div class="homeSlider__item swiper-slide" data-swiper-slide-index="1" style="width: 1349px; opacity: 1; transform: translate3d(-2698px, 0px, 0px); transition-duration: 800ms;">
            <div class="homeSlider__droplayer"></div>
            <img class="homeSlider__itemImg app-main-slider-home-img" src="Style/images/bg_venue1.jpg" alt="">
            <div class="homeSlider__boxTags app-main-slider-home-caption">
              <div class="wrapper">
                <div class="homeSlider__tags app-main-slider-home-related">
                  <p class="mb25"><i class="homeSlider__iconCamera icon icon-camera-small-white"></i></p>
                </div>
              </div>
            </div>
          </div><div class="homeSlider__item swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 1349px; opacity: 1; transform: translate3d(-4047px, 0px, 0px); transition-duration: 800ms;">
            <div class="homeSlider__droplayer"></div>
            <img class="homeSlider__itemImg app-main-slider-home-img" src="Style/images/bg_photos1.jpg" alt="">
            <div class="homeSlider__boxTags app-main-slider-home-caption">
              <div class="wrapper">
                <div class="homeSlider__tags app-main-slider-home-related">
                  <p class="mb25"><i class="homeSlider__iconCamera icon icon-camera-small-white"></i></p>
                </div>
              </div>
            </div>
          </div><div class="homeSlider__item swiper-slide app-main-slider-home-active" data-swiper-slide-index="3" style="width: 1349px; opacity: 1; transform: translate3d(-5396px, 0px, 0px); transition-duration: 800ms;">
            <div class="homeSlider__droplayer"></div>
            <img class="homeSlider__itemImg app-main-slider-home-img" src="Style/images/11.jpg" alt="">
            <div class="homeSlider__boxTags app-main-slider-home-caption">
              <div class="wrapper">
                <div class="homeSlider__tags app-main-slider-home-related">
                  <p class="mb25"><i class="homeSlider__iconCamera icon icon-camera-small-white"></i></p>
                </div>
              </div>
            </div>
          </div><div class="homeSlider__item swiper-slide swiper-slide-duplicate swiper-slide-next" style="width: 1349px; transition-duration: 800ms; opacity: 0; transform: translate3d(-6745px, 0px, 0px);" data-swiper-slide-index="0">
                <div class="homeSlider__droplayer"></div>
                <img class="homeSlider__itemImg app-main-slider-home-img" src="Style/images/3.jpg" alt="">
                <div class="homeSlider__boxTags app-main-slider-home-caption">
                    <div class="wrapper">
                        <div class="homeSlider__tags app-main-slider-home-related"><p class="mb25">
                            <i class="homeSlider__iconCamera icon icon-camera-small-white"></i></p></div>
                    </div>
                </div>
            </div></div>
        <div class="swiper-pagination homeSlider__pagination app-main-slider-home-bullet swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet homeSlider__bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet homeSlider__bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet homeSlider__bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet homeSlider__bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <div class="homeSlider__content">
        <h1 class="homeSlider__title app-main-slider-home-title">Welcome to VenueFinder</h1><br>
        <form class="heroVendorForm index-busc-form app-vendors-search-form" name="frmSearch" method="post" action="search.php">
            <input id="name" name="venue" type="text" value=""class="heroVendorForm__input heroVendorForm__input--first testing-category"size="30"aria-label="Search for"placeholder="Eg.Vitthal Mangalam"/>
            <span class="heroVendorForm__input" size="30" style="color:white">in</span>
            <input id="txtLocSearch" name="txtLocSearch" type="text"value="Satara"class="heroVendorForm__input"size="30" readonly/>
            <input class="heroVendorForm__input heroVendorForm__button" id="find" name="Find" value="Find" type="submit"/>
        </form>

    </div>
</div>

    <div class="border-bottom">
    <div class="wrapper"  >
        <div class="homeTools" style="background-color:cyan">
            <div class="flex-va-center">
                <div class="homeTools__item app-link" data-href="">
                    <div class="homeTools__icon">
                        <i class="svgIcon svgIcon__homeVendors svgIcon--xxlarge"><svg viewBox="0 0 54 54"><path d="M33.608 34.658a17.525 17.525 0 01-12.036 4.764c-9.712 0-17.586-7.874-17.586-17.586S11.86 4.25 21.572 4.25s17.586 7.874 17.586 17.586a17.52 17.52 0 01-4.5 11.75L50.44 49.458a.75.75 0 01-1.064 1.058l-15.768-15.86zm-12.036 3.264c8.884 0 16.086-7.202 16.086-16.086 0-8.884-7.202-16.086-16.086-16.086-8.884 0-16.086 7.202-16.086 16.086 0 8.884 7.202 16.086 16.086 16.086zm10.263-20.415a.75.75 0 01-1.39.562C29 14.5 25.51 12.19 21.572 12.19a.75.75 0 110-1.5c4.545 0 8.587 2.676 10.263 6.817z" fill-rule="nonzero"></path></svg></i>                    </div>
                    <p class="homeTools__itemTitle">Manage your<br>Vendors</p>
                </div>
                <div class="homeTools__item app-link" data-href="">
                    <div class="homeTools__icon">
                        <i class="svgIcon svgIcon__homeGuestlist svgIcon--xxlarge"><svg viewBox="0 0 54 54"><g fill-rule="nonzero"><path d="M12.742 26.156c-5.002-.305-8.967-4.414-8.967-9.442 0-5.012 3.94-9.111 8.92-9.439 3.593-.261 7.076 1.52 8.919 4.662a.75.75 0 01.064.142 9.337 9.337 0 011.225 4.635c0 4.945-3.834 9-8.719 9.423 4.526.252 8.389 3.411 9.447 7.797 1.062 3.863 1.86 6.761 2.396 8.696a752.288 752.288 0 00.758 2.718l.038.129c.048.074.15.196-.019.57a.746.746 0 01-.432.4c-.098.035-.995.034-1.345.032a9439.693 9439.693 0 00-6.835-.032l-4.583-.02-5.202-.023c-2.25-.011-3.975-.02-5.198-.03a333.348 333.348 0 01-1.977-.02l-.124-.003-.058-.004-.07-.009c-.038-.006-.038-.006-.13-.034-.206-.008-.206-.008-.468-.906l3.175-11.441c1.043-4.32 4.776-7.442 9.185-7.801zm8.004-12.594a15.477 15.477 0 01-10.288 3.902 15.525 15.525 0 01-5.181-.886l-.002.136c0 4.394 3.609 7.96 8.064 7.96s8.064-3.566 8.064-7.96c0-1.12-.235-2.185-.657-3.152zm-7.948-4.79a8.13 8.13 0 00-.991.134c-3.174.632-5.63 3.08-6.266 6.173 1.57.586 3.235.886 4.917.885 3.555 0 6.965-1.345 9.536-3.746a8.084 8.084 0 00-7.196-3.446zm5.346 20.094a8.885 8.885 0 00-4.553-1.245c-1.63 0-3.174.442-4.502 1.223l4.506 7.1 4.549-7.078zm1.221.873l-5.143 8.005a.75.75 0 01-1.264-.004l-5.094-8.027a8.72 8.72 0 00-2.855 4.62L2.086 44.865l1.133.01c1.223.008 2.946.018 5.195.029l5.202.023 4.583.02a9442.744 9442.744 0 016.924.032l-.542-1.95c-.535-1.934-1.334-4.834-2.402-8.72a8.672 8.672 0 00-2.814-4.57z"></path><path d="M40.806 26.143c7.006.397 12.566 6.14 12.566 13.171v6.221a.75.75 0 01-.75.75H27.441a.75.75 0 01-.75-.75v-6.22c0-7.032 5.56-12.775 12.566-13.172-4.918-.39-8.79-4.46-8.79-9.429 0-5.227 4.285-9.46 9.564-9.46 5.28 0 9.564 4.233 9.564 9.46 0 4.968-3.871 9.04-8.789 9.43zM28.191 44.785h23.681v-5.47c0-6.457-5.3-11.694-11.84-11.694-6.542 0-11.841 5.237-11.841 11.693v5.471zm11.84-20.111c4.456 0 8.064-3.566 8.064-7.96s-3.608-7.96-8.064-7.96c-4.455 0-8.063 3.566-8.063 7.96s3.608 7.96 8.063 7.96z"></path><path d="M49.018 16.243a.75.75 0 00.452-.788c-.52-4-3.56-7.225-7.556-8.02-3.993-.794-8.055 1.016-10.1 4.502a.75.75 0 00.112.905 15.464 15.464 0 0011.044 4.622 15.518 15.518 0 006.048-1.221zm-7.396-7.337c3.174.632 5.629 3.08 6.265 6.173-1.57.586-3.235.886-4.916.885-3.561 0-6.977-1.35-9.55-3.758 1.8-2.612 5.026-3.931 8.2-3.3z"></path></g></svg></i>                    </div>
                    <p class="homeTools__itemTitle">Organise your<br>Visited User</p>
                </div>
                <div class="homeTools__item app-link" data-href="">
                            <div class="homeTools__icon">
                                <i class="svgIcon svgIcon__homeBudget svgIcon--xxlarge"><svg viewBox="0 0 54 54"><path d="M43.93 5.25a4.82 4.82 0 014.82 4.82v33.86a4.82 4.82 0 01-4.82 4.82H10.07a4.82 4.82 0 01-4.82-4.82V10.07a4.82 4.82 0 014.82-4.82h33.86zM26.25 28.663H6.75V43.93a3.32 3.32 0 003.32 3.32h16.18V28.663zm21 0h-19.5V47.25h16.18a3.32 3.32 0 003.32-3.32V28.663zm-28.085 6.024l1.061 1.06-2.666 2.666 2.666 2.665-1.06 1.061-2.666-2.666-2.665 2.666-1.061-1.06 2.665-2.666-2.665-2.665 1.06-1.06 2.666 2.665 2.665-2.666zm23.357 5.259v1.5h-9.13v-1.5h9.13zm0-5.479v1.5h-9.13v-1.5h9.13zM26.25 6.75H10.07a3.32 3.32 0 00-3.32 3.32v17.093h19.5V6.75zm17.68 0H27.75v20.413h19.5V10.07a3.32 3.32 0 00-3.32-3.32zm-27.137 5.641v3.815h3.816v1.5h-3.816v3.816h-1.5v-3.816h-3.815v-1.5h3.815v-3.815h1.5zm25.729 3.816v1.5h-9.13v-1.5h9.13z" fill-rule="nonzero"></path></svg></i>                            </div>
                            <p class="homeTools__itemTitle">Manage your Budget</p>
                        </div>
                <div class="homeTools__item app-link" data-href="">
                        <div class="homeTools__icon">
                            <i class="svgIcon svgIcon__homeCommunity svgIcon--xxlarge"><svg viewBox="0 0 54 54"><path d="M8.448 37.94c.34-1.043.63-1.954.864-2.705C4.03 31.892.85 26.74.85 21.1c0-10.046 9.957-18.05 22.25-18.05 12.25 0 22.25 8.07 22.25 18.05a.75.75 0 11-1.5 0c0-9.072-9.265-16.55-20.75-16.55-11.528 0-20.75 7.413-20.75 16.55 0 5.257 3.081 10.084 8.234 13.156a.75.75 0 01.334.862c-.26.85-.613 1.963-1.043 3.286l-.082.252a555.27 555.27 0 01-1.17 3.548 12.98 12.98 0 001.458-.338c1.386-.388 2.805-.872 6.284-2.11l.017-.006c.76-.271 1.133-.404 1.568-.557a.75.75 0 01.5 1.414c-.434.153-.807.286-1.565.556l-.017.006c-3.518 1.252-4.949 1.74-6.383 2.141-.947.265-1.658.411-2.169.43-.907.033-1.624-.414-1.328-1.377.56-1.676.94-2.828 1.379-4.172l.081-.25zm37.533 7.491c.51 1.685 1.265 4.025 1.62 5.004.246.636-.181 1.138-.767 1.226-.26.04-.578.014-.985-.06-.674-.124-1.619-.396-2.694-.767-2.125-.735-4.337-1.708-5.576-2.484H35.7c-9.09 0-16.45-5.901-16.45-13.35 0-7.383 7.402-13.35 16.45-13.35 9.09 0 16.45 5.901 16.45 13.35 0 4.096-2.334 7.921-6.169 10.431zm-2.336 3.985c.885.306 1.67.538 2.245.663a147.62 147.62 0 01-1.51-4.767.75.75 0 01.332-.854c3.701-2.24 5.938-5.748 5.938-9.458 0-6.539-6.625-11.85-14.95-11.85-8.282 0-14.95 5.376-14.95 11.85 0 6.539 6.625 11.85 14.95 11.85h2.1a.75.75 0 01.416.126c1.063.709 3.297 1.703 5.429 2.44z" fill-rule="nonzero"></path></svg></i>                        </div>
                        <p class="homeTools__itemTitle">Send Feedback</p>
                    </div>
                                <div class="homeTools__item app-link" data-href="">
                    <div class="homeTools__icon">
                        <i class="svgIcon svgIcon__homeWebsite svgIcon--xxlarge"><svg viewBox="0 0 54 54"><path d="M1.85 20.1V12A5.018 5.018 0 016.9 6.95h41.3A5.018 5.018 0 0153.25 12V42.3a5.018 5.018 0 01-5.05 5.05H6.9a5.018 5.018 0 01-5.05-5.05V20.1zm1.5.85V42.3a3.518 3.518 0 003.55 3.55h41.3a3.518 3.518 0 003.55-3.55V20.95H3.35zm0-1.6h48.4V12a3.518 3.518 0 00-3.55-3.55H6.9A3.518 3.518 0 003.35 12v7.35zM14.9 32.145l-1.797 4.817c-.245.655-1.173.65-1.41-.01l-2.4-6.7a.75.75 0 011.413-.505l1.708 4.77 1.783-4.78c.243-.65 1.163-.65 1.406 0l1.797 4.818 1.797-4.817a.75.75 0 111.406.524l-2.5 6.7c-.243.65-1.163.65-1.406 0L14.9 32.145zm14.397 4.817L27.5 32.145l-1.797 4.817c-.245.655-1.173.65-1.41-.01l-2.4-6.7a.75.75 0 011.413-.505l1.708 4.77 1.783-4.78c.243-.65 1.163-.65 1.406 0L30 34.556l1.797-4.817a.75.75 0 111.406.524l-2.5 6.7c-.243.65-1.163.65-1.406 0zm12.7 0l-1.783-4.778-1.708 4.769c-.236.658-1.164.664-1.409.01l-2.5-6.7a.75.75 0 111.406-.525l1.783 4.778 1.708-4.769c.236-.658 1.164-.664 1.409-.01l1.797 4.818 1.797-4.817a.75.75 0 111.406.524l-2.5 6.7c-.243.65-1.163.65-1.406 0zM46.2 14.9a1 1 0 110-2 1 1 0 010 2zm-3.6 0a1 1 0 110-2 1 1 0 010 2zm-3.6 0a1 1 0 110-2 1 1 0 010 2z" fill-rule="nonzero"></path></svg></i>                    </div>
                    <p class="homeTools__itemTitle">Create your free registration Website</p>
                </div>
              </div>
            <a class="btnFlat btnFlat--large btnFlat--red mt35 mb15" href="venue.php">Start planning your business with Venue Finder!</a>
        </div>
    </div>
</div>
<div class="homeReviewsSlider">
    <div class="wrapper">
         <h3 class="homeSection__title"> Featured Vendors  </h3>
         <p  class="homeSection__text mb20" > Vendors have to display your venue on home page. Vendors must have to purchase one of the subscription plan.</p>
         <div class="homeSection__textSeparator"></div>
         <div class="homePremiumSlider__container">
            <div class="app-slideshow-vendors-home swiper-container"  style="background-image: url(Style/images/11.jpg)">
                <div class="homePremiumSlider__wrapper swiper-wrapper app-slideshow-home-vendors-wrapper gtm-impression-list" data-id-empresas="135802,238957,219871,136792,135720,141631,214967,137279,75926,136374,216851,135842,135860" data-list-type="Featured Vendors" data-list-sub-type="Homepage">
                <?php 
                    $sql="select * from register_venue v,venue_plan p where v.user_id=p.venue_id and p.status='Active' and p.payment_status='TXN_SUCCESS' and v.status='Active' order by rand() desc";
                $result=mysqli_query($connect,$sql);
                if(mysqli_num_rows($result)>0) 
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        $userid=$row['user_id'];
						$username=$row['user_name'];
						$name=$row['venue_name'];
						$address=$row['address'];
						$city=$row['city'];
						$landline=$row['landline'];				
						$contact=$row['mobile'];
						$email=$row['email'];
						$amount=$row['booking_amt'];
						$view=$row['views'];
						$logo=$row['logo'];
						$banner=$row['banner_image'];
                  ?>

                <div class="premiumBox swiper-slide app-link " >
                    <div class="premiumBox__item">
                        <figure class="premiumBox__figure img-zoom">
                            <a href="controller/uploads/logo/<?php echo $logo;?>">
                                <img class="premiumBox__img" alt="<?php echo $username;?>" src="controller/uploads/logo/<?php echo $logo;?>" width="70px" height="150px" srcset="controller/uploads/logo/<?php echo $logo;?> 2x">
                            </a>
                        </figure>
                        <div class="premiumBox__headerBox">
                            <span class="premiumBox__category"></span>
                            <a class="premiumBox__name" href="viewvenue.php?id=<?php echo $userid;?>"><?php echo $name;?></a>
                                        <span class="premiumBox__location pb25"><?php echo $address;?>, Satara</span>
                        </div>
                    <div class="premiumBox__pricesBox">   
                        <div class="pure-u-1-2 premiumBox__section">
                                <p class="premiumBox__priceTitle"> Booking Amount           </p>
                                <span class="premiumBox__price">   <?php echo $amount;?>     </span>
                            </div>
                            <div class="premiumBox__section">
                                <p class="premiumBox__priceTitle">Capacity</p>
                                <span class="premiumBox__price"><?php if(isset($capacity)){echo 'From 20 to Above';}else{echo 'From 20 to Above';}?>     </span>
                            </div>
                      </div>
                                <p class="premiumBox__description">
                           <?php echo $name;?>is a venue available for hosting your wedding. When it comes to finalising your venue, an <span>...</span>        </p>
                    </div>
                </div>
                       
                <?php } }
                else{
                    echo "<h1 align='center'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No any Featured Vendors</h1>";
                }
                ?>
            </div>
        </div>
            <span class="homePremiumSlider__nav homePremiumSlider__nav--left app-slideshow-vendors-prev">
                <svg viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd" stroke-linecap="round"><g stroke="#8c8c8c" stroke-width="2"><path d="m12.012 1.9875l-10.026 10.026"></path><path transform="translate(7 17) scale(1 -1) translate(-7 -17)" d="m12.012 11.988l-10.026 10.026"></path></g></g></svg>
            </span>
            <span class="homePremiumSlider__nav homePremiumSlider__nav--right app-slideshow-vendors-next">
                <svg viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd" stroke-linecap="round"><g stroke="#8c8c8c" stroke-width="2"><path transform="translate(17 7) scale(-1 1) translate(-17 -7)" d="m22.012 1.9875l-10.026 10.026"></path><path transform="translate(17 17) scale(-1) translate(-17 -17)" d="m22.012 11.988l-10.026 10.026"></path></g></g></svg>
            </span>
        </div>
    </div>
</div>
           
<h3 class="homeSection__title homeSection__title homeSection__title--md">Our Serives</h3>
           <center> <p class="homeSection__text mb20">Grow your business with VenueFinder!</p>
           <div class="homeSection__textSeparator"></div></center>
    
    <div class="border-bottom">

    <div class="wrapper" style="background-image: url(Style/images/3.jpg)">
        <div class="homeTools"  style="background-color:hotpink">
            <div class="flex-va-center">
                <div class="homeTools__item app-link">
                    <div class="homeTools__icon">
                      <a href="venue.php"> 
                      <i class="svgIcon svgIcon__homeVendors svgIcon--xxlarge"><svg viewBox="0 0 54 54"><path d="M33.608 34.658a17.525 17.525 0 01-12.036 4.764c-9.712 0-17.586-7.874-17.586-17.586S11.86 4.25 21.572 4.25s17.586 7.874 17.586 17.586a17.52 17.52 0 01-4.5 11.75L50.44 49.458a.75.75 0 01-1.064 1.058l-15.768-15.86zm-12.036 3.264c8.884 0 16.086-7.202 16.086-16.086 0-8.884-7.202-16.086-16.086-16.086-8.884 0-16.086 7.202-16.086 16.086 0 8.884 7.202 16.086 16.086 16.086zm10.263-20.415a.75.75 0 01-1.39.562C29 14.5 25.51 12.19 21.572 12.19a.75.75 0 110-1.5c4.545 0 8.587 2.676 10.263 6.817z" fill-rule="nonzero"></path></svg></i>
                        </div>
                           <p class="homeTools__itemTitle"><b>Are You A Vendor</b></p>
                           <span>Register your Venue with VenueFinder </span>
                      </a>
                </div>
              <div class="homeTools__item app-link" >
                    <div class="homeTools__icon">
                    <a href="satara.php"> 
                           <i class="svgIcon svgIcon__homeGuestlist svgIcon--xxlarge"><svg viewBox="0 0 54 54"><g fill-rule="nonzero"><path d="M12.742 26.156c-5.002-.305-8.967-4.414-8.967-9.442 0-5.012 3.94-9.111 8.92-9.439 3.593-.261 7.076 1.52 8.919 4.662a.75.75 0 01.064.142 9.337 9.337 0 011.225 4.635c0 4.945-3.834 9-8.719 9.423 4.526.252 8.389 3.411 9.447 7.797 1.062 3.863 1.86 6.761 2.396 8.696a752.288 752.288 0 00.758 2.718l.038.129c.048.074.15.196-.019.57a.746.746 0 01-.432.4c-.098.035-.995.034-1.345.032a9439.693 9439.693 0 00-6.835-.032l-4.583-.02-5.202-.023c-2.25-.011-3.975-.02-5.198-.03a333.348 333.348 0 01-1.977-.02l-.124-.003-.058-.004-.07-.009c-.038-.006-.038-.006-.13-.034-.206-.008-.206-.008-.468-.906l3.175-11.441c1.043-4.32 4.776-7.442 9.185-7.801zm8.004-12.594a15.477 15.477 0 01-10.288 3.902 15.525 15.525 0 01-5.181-.886l-.002.136c0 4.394 3.609 7.96 8.064 7.96s8.064-3.566 8.064-7.96c0-1.12-.235-2.185-.657-3.152zm-7.948-4.79a8.13 8.13 0 00-.991.134c-3.174.632-5.63 3.08-6.266 6.173 1.57.586 3.235.886 4.917.885 3.555 0 6.965-1.345 9.536-3.746a8.084 8.084 0 00-7.196-3.446zm5.346 20.094a8.885 8.885 0 00-4.553-1.245c-1.63 0-3.174.442-4.502 1.223l4.506 7.1 4.549-7.078zm1.221.873l-5.143 8.005a.75.75 0 01-1.264-.004l-5.094-8.027a8.72 8.72 0 00-2.855 4.62L2.086 44.865l1.133.01c1.223.008 2.946.018 5.195.029l5.202.023 4.583.02a9442.744 9442.744 0 016.924.032l-.542-1.95c-.535-1.934-1.334-4.834-2.402-8.72a8.672 8.672 0 00-2.814-4.57z"></path><path d="M40.806 26.143c7.006.397 12.566 6.14 12.566 13.171v6.221a.75.75 0 01-.75.75H27.441a.75.75 0 01-.75-.75v-6.22c0-7.032 5.56-12.775 12.566-13.172-4.918-.39-8.79-4.46-8.79-9.429 0-5.227 4.285-9.46 9.564-9.46 5.28 0 9.564 4.233 9.564 9.46 0 4.968-3.871 9.04-8.789 9.43zM28.191 44.785h23.681v-5.47c0-6.457-5.3-11.694-11.84-11.694-6.542 0-11.841 5.237-11.841 11.693v5.471zm11.84-20.111c4.456 0 8.064-3.566 8.064-7.96s-3.608-7.96-8.064-7.96c-4.455 0-8.063 3.566-8.063 7.96s3.608 7.96 8.063 7.96z"></path><path d="M49.018 16.243a.75.75 0 00.452-.788c-.52-4-3.56-7.225-7.556-8.02-3.993-.794-8.055 1.016-10.1 4.502a.75.75 0 00.112.905 15.464 15.464 0 0011.044 4.622 15.518 15.518 0 006.048-1.221zm-7.396-7.337c3.174.632 5.629 3.08 6.265 6.173-1.57.586-3.235.886-4.916.885-3.561 0-6.977-1.35-9.55-3.758 1.8-2.612 5.026-3.931 8.2-3.3z"></path></g></svg></i>       
                                             </div>
                        <p class="homeTools__itemTitle"><b>Book Venue </b></p>
                        <span>To connect the right people to the right venue</span>
                    </a>
                </div>
                </div>
           </div>
    </div>         <hr> 


<div class="app-footer">
   <?php include 'footer.php'; ?>
            </div>